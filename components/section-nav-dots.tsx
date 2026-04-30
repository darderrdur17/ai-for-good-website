"use client";

import { useEffect, useState } from "react";

const sections = [
  { id: "about", label: "Overview" },
  { id: "approach", label: "The Challenge" },
  { id: "impact", label: "Global Reach" },
  { id: "programs", label: "Programmes" },
  { id: "partners", label: "Partners" },
  { id: "contact", label: "Contact" },
];

export function SectionNavDots() {
  const [active, setActive] = useState("about");
  const [visible, setVisible] = useState(false);

  useEffect(() => {
    const onScroll = () => setVisible(window.scrollY > 200);
    window.addEventListener("scroll", onScroll, { passive: true });
    return () => window.removeEventListener("scroll", onScroll);
  }, []);

  useEffect(() => {
    const observers: IntersectionObserver[] = [];

    sections.forEach(({ id }) => {
      const el = document.getElementById(id);
      if (!el) return;

      const observer = new IntersectionObserver(
        ([entry]) => {
          if (entry.isIntersecting) setActive(id);
        },
        { threshold: 0.4, rootMargin: "-20% 0px -55% 0px" }
      );
      observer.observe(el);
      observers.push(observer);
    });

    return () => observers.forEach((o) => o.disconnect());
  }, []);

  const scrollTo = (id: string) => {
    const el = document.getElementById(id);
    if (el) el.scrollIntoView({ behavior: "smooth" });
  };

  return (
    <div
      className={`fixed right-4 lg:right-6 top-1/2 -translate-y-1/2 z-40 flex flex-col gap-3 transition-all duration-500 ${
        visible ? "opacity-100 translate-x-0" : "opacity-0 translate-x-4 pointer-events-none"
      }`}
      aria-label="Section navigation"
    >
      {sections.map(({ id, label }) => (
        <button
          key={id}
          onClick={() => scrollTo(id)}
          aria-label={`Navigate to ${label}`}
          title={label}
          className="group flex items-center justify-end gap-2 outline-none"
        >
          {/* Tooltip label */}
          <span className="text-xs font-medium text-foreground bg-background border border-border rounded-md px-2 py-1 shadow-sm opacity-0 group-hover:opacity-100 -translate-x-1 group-hover:translate-x-0 transition-all duration-200 whitespace-nowrap pointer-events-none">
            {label}
          </span>
          {/* Dot */}
          <span
            className={`block rounded-full transition-all duration-300 ${
              active === id
                ? "w-3 h-3 bg-primary shadow-sm shadow-primary/50"
                : "w-2 h-2 bg-border hover:bg-primary/50"
            }`}
          />
        </button>
      ))}
    </div>
  );
}
