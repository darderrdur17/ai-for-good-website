"use client";

import { useEffect } from "react";

export function useScrollReveal() {
  useEffect(() => {
    const selectors =
      ".reveal, .reveal-left, .reveal-right, .reveal-scale, .heading-underline";

    const addObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible");
          }
        });
      },
      { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
    );

    // Separate observer for removing — triggers as soon as any pixel leaves
    const removeObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) {
            entry.target.classList.remove("visible");
          }
        });
      },
      { threshold: 0 }
    );

    const elements = document.querySelectorAll(selectors);
    elements.forEach((el) => {
      addObserver.observe(el);
      removeObserver.observe(el);
    });

    return () => {
      addObserver.disconnect();
      removeObserver.disconnect();
    };
  }, []);
}
