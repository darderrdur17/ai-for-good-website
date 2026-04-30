import { Badge } from "@/components/ui/badge";
import { MapPin, Clock } from "lucide-react";
import Image from "next/image";

const regions = [
  {
    name: "Southeast Asia",
    countries: [
      "Singapore", "Brunei", "Cambodia", "Indonesia", "Laos",
      "Malaysia", "Myanmar", "Philippines", "Thailand", "Vietnam", "Timor-Leste",
    ],
    status: "active",
    label: "Active",
  },
  {
    name: "South Asia",
    countries: ["Pakistan", "Sri Lanka", "Bangladesh"],
    status: "active",
    label: "Active",
  },
  {
    name: "Caribbean",
    countries: ["Coming Soon"],
    status: "in-progress",
    label: "In Progress",
  },
  {
    name: "Pacific Islands",
    countries: ["Coming Soon"],
    status: "in-progress",
    label: "In Progress",
  },
];

const stats = [
  { value: "11", label: "ASEAN Member States", delay: "1" },
  { value: "100K+", label: "Beneficiaries Reached", delay: "2" },
  { value: "4", label: "Regions Engaged", delay: "3" },
  { value: "3+", label: "Countries in South Asia", delay: "4" },
];

export function GlobalReachSection() {
  return (
    <section id="impact" className="section-light py-24">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16 reveal">
          <Badge variant="secondary" className="mb-4">
            Our Reach
          </Badge>
          <h2 className="text-3xl sm:text-4xl font-bold text-foreground mb-6 text-balance heading-underline">
            Global Reach and Impact
          </h2>
          <p className="text-lg text-muted-foreground max-w-3xl mx-auto text-pretty">
            AI Singapore advances AI for Good by turning AI education into
            scalable social impact across Southeast Asia and beyond — reaching
            underserved communities worldwide.
          </p>
        </div>

        {/* World Map */}
        <div className="relative mb-12 bg-card rounded-3xl border border-border overflow-hidden reveal shadow-sm">
          <div className="relative w-full aspect-[2/1] min-h-[280px]">
            <Image
              src="/map global.png"
              alt="World map showing AI for Good global reach across Southeast Asia, South Asia, Caribbean, and Pacific Islands"
              fill
              className="object-contain p-4 sm:p-8"
              priority
            />
          </div>
        </div>

        {/* Region Details */}
        <div className="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-12">
          {regions.map((region, i) => (
            <div
              key={region.name}
              className={`p-5 rounded-2xl border h-full reveal ${
                region.status === "active"
                  ? "bg-primary/8 border-primary/25 hover:border-primary/50"
                  : "bg-secondary/40 border-border border-dashed"
              } transition-all duration-300`}
              data-delay={String(i + 1)}
            >
              <div className="flex items-center gap-2 mb-3">
                {region.status === "active" ? (
                  <MapPin className="w-4 h-4 text-primary shrink-0" />
                ) : (
                  <Clock className="w-4 h-4 text-muted-foreground shrink-0" />
                )}
                <h3 className="font-semibold text-sm text-foreground">
                  {region.name}
                </h3>
                <span
                  className={`ml-auto text-[10px] px-2 py-0.5 rounded-full font-medium shrink-0 ${
                    region.status === "active"
                      ? "bg-primary/20 text-primary"
                      : "bg-muted text-muted-foreground"
                  }`}
                >
                  {region.label}
                </span>
              </div>

              <div className="flex flex-wrap gap-1.5">
                {region.countries
                  .filter((c) => c !== "In Progress")
                  .map((country) => (
                    <span
                      key={country}
                      className={`text-xs px-2 py-0.5 rounded-full ${
                        region.status === "active"
                          ? "bg-primary/15 text-primary"
                          : "bg-muted text-muted-foreground"
                      }`}
                    >
                      {country}
                    </span>
                  ))}
              </div>
            </div>
          ))}
        </div>

        {/* Impact Stats */}
        <div className="grid grid-cols-2 md:grid-cols-4 gap-5">
          {stats.map((stat) => (
            <div
              key={stat.label}
              className="text-center p-6 bg-card rounded-2xl border border-border card-hover-glow reveal"
              data-delay={stat.delay}
            >
              <span className="text-3xl sm:text-4xl font-bold text-primary block animate-counter-in">
                {stat.value}
              </span>
              <p className="text-xs sm:text-sm text-muted-foreground mt-2 leading-snug">
                {stat.label}
              </p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
