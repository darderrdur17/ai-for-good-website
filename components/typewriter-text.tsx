"use client";

import { useEffect, useState } from "react";

interface TypewriterTextProps {
  text: string;
  delay?: number;
  speed?: number;
  className?: string;
  cursor?: boolean;
}

export function TypewriterText({
  text,
  delay = 600,
  speed = 28,
  className = "",
  cursor = true,
}: TypewriterTextProps) {
  const [displayed, setDisplayed] = useState("");
  const [started, setStarted] = useState(false);
  const [done, setDone] = useState(false);

  useEffect(() => {
    const start = setTimeout(() => setStarted(true), delay);
    return () => clearTimeout(start);
  }, [delay]);

  useEffect(() => {
    if (!started) return;
    if (displayed.length >= text.length) {
      setDone(true);
      return;
    }
    const t = setTimeout(() => {
      setDisplayed(text.slice(0, displayed.length + 1));
    }, speed);
    return () => clearTimeout(t);
  }, [started, displayed, text, speed]);

  return (
    <span className={className}>
      {displayed}
      {cursor && !done && (
        <span
          className="inline-block w-[2px] h-[1em] bg-current align-middle ml-0.5 animate-pulse"
          aria-hidden="true"
        />
      )}
    </span>
  );
}
