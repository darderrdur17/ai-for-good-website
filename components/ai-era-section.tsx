"use client";

import { Badge } from "@/components/ui/badge";
import { BookOpen, Briefcase, Globe } from "lucide-react";
import { useTilt } from "@/hooks/use-tilt";

const challenges = [
  {
    icon: BookOpen,
    title: "Learn",
    subtitle: "AI is reshaping how we learn",
    description:
      "AI is redefining how knowledge is created, accessed, and applied. We are moving from passive tools to intelligent collaborators — transforming every learning environment.",
    revealClass: "reveal-left",
    accent: "from-blue-500/10 to-primary/5",
  },
  {
    icon: Briefcase,
    title: "Work",
    subtitle: "AI is reshaping jobs",
    description:
      "Automation is reshaping roles, skills, and economic participation. AI literacy is no longer optional — it defines how we work, collaborate, and remain relevant.",
    revealClass: "reveal",
    accent: "from-primary/10 to-orange-400/5",
  },
  {
    icon: Globe,
    title: "Participate",
    subtitle: "AI is reshaping access",
    description:
      "Without deliberate intervention, the AI divide will exclude underserved communities from opportunities in the global digital economy, widening existing inequalities.",
    revealClass: "reveal-right",
    accent: "from-amber-500/10 to-primary/5",
  },
];

function TiltCard({ item, index }: { item: typeof challenges[0]; index: number }) {
  const ref = useTilt(8);

  return (
    <div
      ref={ref}
      className={`group p-8 bg-background rounded-2xl border border-border card-hover-glow cursor-default ${item.revealClass}`}
      data-delay={String(index + 1)}
      style={{ willChange: "transform" }}
    >
      {/* Gradient accent top */}
      <div className={`absolute inset-0 rounded-2xl bg-gradient-to-br ${item.accent} opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none`} />

      <div className="relative">
        <div className="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary/20 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
          <item.icon className="w-7 h-7 text-primary" />
        </div>
        <h3 className="text-xl font-semibold text-foreground mb-2">
          {item.title}
        </h3>
        <p className="text-sm font-medium text-primary mb-3 group-hover:text-primary/80 transition-colors">
          {item.subtitle}
        </p>
        <p className="text-sm text-muted-foreground leading-relaxed">
          {item.description}
        </p>
      </div>
    </div>
  );
}

export function AIEraSection() {
  return (
    <section id="approach" className="section-mid py-24">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16 reveal">
          <Badge variant="secondary" className="mb-4">
            The Challenge
          </Badge>
          <h2 className="text-3xl sm:text-4xl font-bold text-foreground mb-6 text-balance heading-underline">
            The AI Era is Here — Are We Ready?
          </h2>
          <p className="text-lg text-muted-foreground max-w-3xl mx-auto text-pretty">
            AI is rapidly reshaping how societies learn, work, and participate in
            the global economy. Without deliberate action, AI will widen
            inequality — leaving behind young people, workers, educators, and
            underserved communities across the world.
          </p>
        </div>

        <div className="grid md:grid-cols-3 gap-8">
          {challenges.map((item, i) => (
            <TiltCard key={item.title} item={item} index={i} />
          ))}
        </div>
      </div>
    </section>
  );
}
