import { Badge } from "@/components/ui/badge"
import { Building2, GraduationCap, Briefcase } from "lucide-react"

export function AboutSection() {
  return (
    <section id="about" className="py-24 bg-card">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid lg:grid-cols-2 gap-16 items-center">
          <div>
            <Badge variant="secondary" className="mb-4">About AI Singapore</Badge>
            <h2 className="text-3xl sm:text-4xl font-bold text-foreground mb-6 text-balance">
              Singapore&apos;s National AI Programme
            </h2>
            <p className="text-muted-foreground mb-6 text-lg">
              Launched in May 2017, AI Singapore is Singapore&apos;s national research and development
              programme in AI — the first of its kind national level setup.
            </p>
            <div className="space-y-4 mb-8">
              <h3 className="font-semibold text-foreground">Our Mission:</h3>
              <ul className="space-y-2 text-muted-foreground">
                <li className="flex items-center gap-2">
                  <span className="w-1.5 h-1.5 bg-primary rounded-full" />
                  Build deep national capabilities in AI
                </li>
                <li className="flex items-center gap-2">
                  <span className="w-1.5 h-1.5 bg-primary rounded-full" />
                  Create social and economic impacts
                </li>
                <li className="flex items-center gap-2">
                  <span className="w-1.5 h-1.5 bg-primary rounded-full" />
                  Grow local talent
                </li>
                <li className="flex items-center gap-2">
                  <span className="w-1.5 h-1.5 bg-primary rounded-full" />
                  Accelerate AI ecosystem
                </li>
                <li className="flex items-center gap-2">
                  <span className="w-1.5 h-1.5 bg-primary rounded-full" />
                  Put Singapore on the world map
                </li>
              </ul>
            </div>
          </div>

          <div className="space-y-6">
            <div className="p-6 bg-background rounded-2xl border border-border">
              <div className="flex items-center gap-4 mb-4">
                <div className="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                  <Building2 className="w-6 h-6 text-primary" />
                </div>
                <h3 className="font-semibold text-foreground">Government</h3>
              </div>
              <p className="text-sm text-muted-foreground">
                Driven by NRF, Smart Nation Group, IMDA, EDB, Enterprise Singapore, and other government agencies.
              </p>
            </div>

            <div className="p-6 bg-background rounded-2xl border border-border">
              <div className="flex items-center gap-4 mb-4">
                <div className="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                  <GraduationCap className="w-6 h-6 text-primary" />
                </div>
                <h3 className="font-semibold text-foreground">Academia</h3>
              </div>
              <p className="text-sm text-muted-foreground">
                Partnering with leading universities and research institutions to advance AI research and education.
              </p>
            </div>

            <div className="p-6 bg-background rounded-2xl border border-border">
              <div className="flex items-center gap-4 mb-4">
                <div className="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                  <Briefcase className="w-6 h-6 text-primary" />
                </div>
                <h3 className="font-semibold text-foreground">Industry</h3>
              </div>
              <p className="text-sm text-muted-foreground">
                Collaborating with industry partners to drive AI adoption and innovation across sectors.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}
