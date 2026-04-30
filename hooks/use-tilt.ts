"use client";

import { useEffect, useRef } from "react";

export function useTilt(intensity = 10) {
  const ref = useRef<HTMLDivElement>(null);

  useEffect(() => {
    const el = ref.current;
    if (!el) return;

    const onEnter = () => {
      el.style.transition = "transform 0.1s ease";
    };

    const onMove = (e: MouseEvent) => {
      const rect = el.getBoundingClientRect();
      const cx = rect.left + rect.width / 2;
      const cy = rect.top + rect.height / 2;
      const dx = (e.clientX - cx) / (rect.width / 2);
      const dy = (e.clientY - cy) / (rect.height / 2);
      el.style.transform = `perspective(700px) rotateY(${dx * intensity}deg) rotateX(${-dy * intensity}deg) translateZ(6px)`;
    };

    const onLeave = () => {
      el.style.transition = "transform 0.5s cubic-bezier(.22,.68,0,1.2)";
      el.style.transform = "perspective(700px) rotateY(0deg) rotateX(0deg) translateZ(0px)";
    };

    el.addEventListener("mouseenter", onEnter);
    el.addEventListener("mousemove", onMove);
    el.addEventListener("mouseleave", onLeave);

    return () => {
      el.removeEventListener("mouseenter", onEnter);
      el.removeEventListener("mousemove", onMove);
      el.removeEventListener("mouseleave", onLeave);
    };
  }, [intensity]);

  return ref;
}
