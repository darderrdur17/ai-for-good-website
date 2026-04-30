"use client";

import { useEffect, useRef, useState } from "react";

export function useCounter(
  end: number,
  duration = 1800,
  start = 0
) {
  const [count, setCount] = useState(start);
  const ref = useRef<HTMLElement | null>(null);
  const triggered = useRef(false);

  useEffect(() => {
    const el = ref.current;
    if (!el) return;

    const observer = new IntersectionObserver(
      ([entry]) => {
        if (entry.isIntersecting && !triggered.current) {
          triggered.current = true;

          const startTime = performance.now();
          const animate = (now: number) => {
            const elapsed = now - startTime;
            const raw = Math.min(elapsed / duration, 1);
            // Ease-out cubic for natural deceleration
            const eased = 1 - Math.pow(1 - raw, 3);
            setCount(Math.round(start + (end - start) * eased));
            if (raw < 1) requestAnimationFrame(animate);
            else setCount(end);
          };
          requestAnimationFrame(animate);
          observer.disconnect();
        }
      },
      { threshold: 0.5 }
    );

    observer.observe(el);
    return () => observer.disconnect();
  }, [end, duration, start]);

  return { count, ref };
}
