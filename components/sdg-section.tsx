import { Badge } from "@/components/ui/badge";
import { BookOpen, Users, Heart, Leaf, Globe } from "lucide-react";

const sdgGoals = [
  {
    icon: BookOpen,
    title: "AI Literacy for All",
    description:
      "Equip learners with core AI skills for life and employability across all levels of society.",
    sdg: "SDG 4.1 | 4.4",
    detail: "Skills for employment and livelihoods",
    revealClass: "reveal-left",
  },
  {
    icon: Users,
    title: "Empowering Educators",
    description:
      "Enable educators to integrate AI confidently into learning systems and teaching practice.",
    sdg: "SDG 4.6 | 4.c",
    detail: "Scale teacher capacity and AI diffusion",
    revealClass: "reveal-right",
  },
  {
    icon: Heart,
    title: "Inclusive Access",
    description:
      "Expand AI learning to under-represented communities, women, and people with fewer resources.",
    sdg: "SDG 4.5",
    detail: "Reduce disparities and ensure equitable access",
    revealClass: "reveal-left",
  },
  {
    icon: Leaf,
    title: "Responsible AI & Governance",
    description:
      "Promote safe, trustworthy, and human-centred AI use across communities and institutions.",
    sdg: "SDG 4.7",
    detail: "Support sustainable development and citizenship",
    revealClass: "reveal-right",
  },
  {
    icon: Globe,
    title: "Sustainable Ecosystem Building",
    description:
      "Strengthen institutions and partnerships to scale AI for Good sustainably across regions.",
    sdg: "SDG 4.b",
    detail: "Expand global capacity-building effort",
    revealClass: "reveal-left",
  },
];

export function SDGSection() {
  return (
    <section className="section-warm py-24">
      <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16 reveal">
          <Badge variant="secondary" className="mb-4">
            UN Sustainable Development Goals
          </Badge>

          <h2 className="text-3xl sm:text-4xl font-bold text-foreground mb-6 heading-underline">
            Advancing SDG 4 in the AI Era
          </h2>

          <p className="text-lg text-muted-foreground">
            Driving inclusive, equitable AI education — aligned to UN SDG 4:
            Quality Education for all.
          </p>
        </div>

        <div className="space-y-4">
          {sdgGoals.map((goal, i) => (
            <div
              key={goal.title}
              className={`w-full flex items-start gap-5 p-6 sm:p-7 bg-background border border-border rounded-2xl card-hover-glow ${goal.revealClass}`}
              data-delay={String(Math.min(i + 1, 7))}
            >
              <div className="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                <goal.icon className="w-6 h-6 text-primary" />
              </div>

              <div className="flex-1 flex flex-col sm:flex-row sm:justify-between gap-3">
                <div>
                  <h3 className="text-base font-semibold text-foreground mb-1">
                    {goal.title}
                  </h3>
                  <p className="text-sm text-muted-foreground leading-relaxed">
                    {goal.description}
                  </p>
                </div>

                <div className="sm:text-right shrink-0">
                  <span className="text-xs font-semibold text-primary bg-primary/10 px-2.5 py-1 rounded-full">
                    {goal.sdg}
                  </span>
                  <p className="text-xs text-muted-foreground mt-2 sm:max-w-[160px] leading-snug">
                    {goal.detail}
                  </p>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
