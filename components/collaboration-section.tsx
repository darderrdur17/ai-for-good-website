import { Badge } from "@/components/ui/badge";
import { Button } from "@/components/ui/button";
import { Coins, Lightbulb, Network, Scale, TrendingUp, ArrowRight } from "lucide-react";

const opportunities = [
  {
    icon: Coins,
    title: "Strategic Investment",
    description:
      "Catalyse high-impact AI for Good initiatives and unlock scalable models that create lasting social value.",
  },
  {
    icon: Lightbulb,
    title: "Expertise and Thought Leadership",
    description:
      "Advance domain-driven AI applications and co-create impactful solutions with our expert teams.",
  },
  {
    icon: Network,
    title: "Ecosystem Access and Partnerships",
    description:
      "Activate networks to expand reach across communities, countries, and regions throughout Asia and beyond.",
  },
  {
    icon: Scale,
    title: "Policy and Systems Influence",
    description:
      "Shape responsible AI adoption and contribute to national and regional agendas for inclusive AI governance.",
  },
  {
    icon: TrendingUp,
    title: "Scaling Impact",
    description:
      "Translate proven initiatives into sustainable, system-level impact across Southeast Asia and the wider world.",
  },
];

export function CollaborationSection() {
  return (
    <section className="section-light py-24">
      <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16 reveal">
          <Badge variant="secondary" className="mb-4">
            Partner With Us
          </Badge>

          <h2 className="text-3xl sm:text-4xl font-bold text-foreground mb-6 heading-underline">
            Strategic Collaboration Opportunities
          </h2>

          <p className="text-lg text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            Join us in scaling inclusive AI education and creating lasting
            impact across Southeast Asia and beyond. We welcome partners across
            all sectors.
          </p>
        </div>

        <div className="space-y-4 mb-12">
          {opportunities.map((item, i) => (
            <div
              key={item.title}
            className="w-full flex items-center gap-5 px-6 sm:px-7 py-5 sm:py-6 bg-card border border-border rounded-2xl card-hover-glow group reveal"
            data-delay={String(Math.min(i + 1, 5))}
            >
              <div className="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center shrink-0 group-hover:bg-primary/20 group-hover:scale-110 transition-all duration-300">
                <item.icon className="w-6 h-6 text-primary" />
              </div>

              <div className="flex flex-col min-w-0">
                <h3 className="text-base font-semibold text-foreground mb-1">
                  {item.title}
                </h3>
                <p className="text-sm text-muted-foreground leading-relaxed">
                  {item.description}
                </p>
              </div>
            </div>
          ))}
        </div>

        <div className="text-center reveal">
          <Button size="lg" className="gap-2 ripple" asChild>
            <a
              href="https://aisingapore.org/home/contact-us/"
              target="_blank"
              rel="noopener noreferrer"
            >
              Get in Touch <ArrowRight className="w-4 h-4" />
            </a>
          </Button>
        </div>
      </div>
    </section>
  );
}
