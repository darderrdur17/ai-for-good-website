import { Badge } from "@/components/ui/badge"
import {
  FlaskConical,
  Cpu,
  Lightbulb,
  Shield,
  Package,
  Users,
} from "lucide-react"

const pillars = [
  {
    icon: FlaskConical,
    title: "AI Research",
    description: "Sustain investments in fundamental AI research to ensure Singapore's relevance in the global AI race",
    points: [
      "Build Strategic Capabilities",
      "Retain and Nurture Local Talent",
      "Preposition SG for Future Applications",
    ],
  },
  {
    icon: Cpu,
    title: "AI Technology",
    description: "Support applied AI research projects aligned to the National AI Strategy",
    points: [
      "AI Solutions with High Social and Economic Impacts",
      "Sector-wide or National Scale Challenges",
    ],
  },
  {
    icon: Lightbulb,
    title: "AI Innovation",
    description: "Catalyse and support more widespread industry adoption of AI",
    points: [
      "AI Adoption in Industry through Talent and Projects",
      "AI Standards",
      "Industry Consortia",
    ],
  },
  {
    icon: Shield,
    title: "AI Governance",
    description: "Establish Singapore as a leading hub for responsible and trusted AI",
    points: [
      "Fairness, Accountability and Transparency",
      "Privacy and Ethics",
      "Risk and Mitigations",
    ],
  },
  {
    icon: Package,
    title: "AI Products",
    description: "Build catalytic AI products/solutions to enrich Singapore AI Ecosystem",
    points: [
      "Project SEA-LION",
      "Large Language Models",
      "Multilingual Capabilities & Multimodality",
    ],
  },
  {
    icon: Users,
    title: "AI Talent Development",
    description: "Nurture and empower the next generation of AI bilinguals",
    points: [
      "AI Capacity Building for Organisations",
      "AI Education for Students & Educators",
      "AI for Good Initiatives",
    ],
  },
]

export function PillarsSection() {
  return (
    <section id="pillars" className="py-24 bg-card">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <Badge variant="secondary" className="mb-4">Our Focus</Badge>
          <h2 className="text-3xl sm:text-4xl font-bold text-foreground mb-6 text-balance">
            AI Singapore Pillars
          </h2>
          <p className="text-lg text-muted-foreground max-w-3xl mx-auto text-pretty">
            Support Singapore&apos;s vision to be a leader in developing scalable, impactful AI solutions
            strategic to the nation and beyond.
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          {pillars.map((pillar) => (
            <div
              key={pillar.title}
              className="group p-6 bg-background rounded-2xl border border-border hover:border-primary/50 transition-all"
            >
              <div className="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                <pillar.icon className="w-6 h-6 text-primary" />
              </div>
              <h3 className="text-lg font-semibold text-foreground mb-2">{pillar.title}</h3>
              <p className="text-sm text-muted-foreground mb-4">{pillar.description}</p>
              <ul className="space-y-2">
                {pillar.points.map((point) => (
                  <li key={point} className="flex items-start gap-2 text-sm text-muted-foreground">
                    <span className="w-1.5 h-1.5 bg-primary rounded-full mt-2 shrink-0" />
                    {point}
                  </li>
                ))}
              </ul>
            </div>
          ))}
        </div>
      </div>
    </section>
  )
}
