import { Badge } from "@/components/ui/badge";
import { ArrowRight } from "lucide-react";

const stages = [
  {
    title: "Problem / Need",
    content:
      "Uneven access to AI capabilities\nVarying levels of readiness across communities, sectors, and markets",
    color: "bg-red-600/12 border-red-600/25",
    numberColor: "bg-red-600/20 text-red-700",
    dotColor: "bg-red-500",
  },
  {
    title: "Inputs",
    content:
      "Cross-sector partnerships\nFunding and resources\nAI expertise\nPlatforms, tools, and networks",
    color: "bg-red-500/12 border-red-500/25",
    numberColor: "bg-red-500/20 text-red-600",
    dotColor: "bg-red-400",
  },
  {
    title: "Activities",
    content:
      "Education\nWorkforce development\nCommunity programmes\nEcosystem and policy engagement",
    color: "bg-orange-500/12 border-orange-500/25",
    numberColor: "bg-orange-500/20 text-orange-700",
    dotColor: "bg-orange-500",
  },
  {
    title: "Outputs",
    content:
      "Programmes delivered across markets\nEducators, trainers, and facilitators enabled\nLearners, workers, and communities reached at scale",
    color: "bg-orange-400/12 border-orange-400/25",
    numberColor: "bg-orange-400/20 text-orange-600",
    dotColor: "bg-orange-400",
  },
  {
    title: "Outcomes",
    content:
      "Build AI literacy, fluency, and practical application\nStrengthen employability and productivity\nEngage with AI responsibly and safely",
    color: "bg-amber-500/12 border-amber-500/25",
    numberColor: "bg-amber-500/20 text-amber-700",
    dotColor: "bg-amber-500",
  },
  {
    title: "Impact",
    content:
      "Inclusive participation in the AI-enabled economy\nExpanded access to opportunities\nFuture-ready workforce and communities",
    color: "bg-amber-400/12 border-amber-400/25",
    numberColor: "bg-amber-400/20 text-amber-600",
    dotColor: "bg-amber-400",
  },
];

export function TheoryOfChangeSection() {
  return (
    <section className="section-light py-24">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16 reveal">
          <Badge variant="secondary" className="mb-4">
            Our Approach
          </Badge>
          <h2 className="text-3xl sm:text-4xl font-bold text-foreground mb-6 text-balance heading-underline">
            AI for Good — Theory of Change
          </h2>
          <p className="text-lg text-muted-foreground max-w-3xl mx-auto text-pretty">
            Our systematic approach to creating lasting impact through inclusive
            AI education and capacity building across the region.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-4">
          {stages.map((stage, index) => (
            <div
              key={stage.title}
              className="relative reveal-scale"
              data-delay={String(Math.min(index + 1, 7))}
            >
              <div
                className={`p-5 rounded-2xl border ${stage.color} h-full hover:scale-[1.03] hover:shadow-md transition-all duration-300`}
              >
                <div className="flex items-center gap-2 mb-3">
                  <span
                    className={`w-6 h-6 rounded-full flex items-center justify-center text-xs font-bold shrink-0 ${stage.numberColor}`}
                  >
                    {index + 1}
                  </span>
                  <h3 className="font-semibold text-foreground text-sm">
                    {stage.title}
                  </h3>
                </div>
                <ul className="text-xs text-muted-foreground leading-relaxed space-y-1.5">
                  {stage.content.split("\n").map((item, i) => (
                    <li key={i} className="flex gap-2">
                      <span className={`w-1 h-1 rounded-full ${stage.dotColor} mt-1.5 shrink-0`} />
                      <span>{item}</span>
                    </li>
                  ))}
                </ul>
              </div>
              {index < stages.length - 1 && (
                <div className="hidden xl:flex absolute top-1/2 -right-3 transform -translate-y-1/2 z-10">
                  <ArrowRight className="w-4 h-4 text-muted-foreground/60" />
                </div>
              )}
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
