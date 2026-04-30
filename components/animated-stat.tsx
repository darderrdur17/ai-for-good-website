"use client";

import { useCounter } from "@/hooks/use-counter";

interface AnimatedStatProps {
  value: string;
  label: string;
}

function parseStatValue(raw: string): {
  num: number;
  suffix: string;
  prefix: string;
} {
  const prefix = raw.match(/^[^0-9]*/)?.[0] ?? "";
  const suffix = raw.match(/[^0-9]+$/)?.[0] ?? "";
  const num = parseInt(raw.replace(/[^0-9]/g, ""), 10) || 0;
  return { num, suffix, prefix };
}

export function AnimatedStat({ value, label }: AnimatedStatProps) {
  const { num, suffix, prefix } = parseStatValue(value);
  const { count, ref } = useCounter(num, 1800);

  return (
    <div className="flex flex-col items-center p-5 rounded-2xl bg-card border border-border card-hover-glow">
      <span
        ref={ref as React.RefObject<HTMLSpanElement>}
        className="text-2xl sm:text-3xl font-bold text-primary leading-none tabular-nums"
      >
        {prefix}
        {count}
        {suffix}
      </span>
      <span className="text-xs sm:text-sm text-muted-foreground mt-2 text-center leading-snug">
        {label}
      </span>
    </div>
  );
}
