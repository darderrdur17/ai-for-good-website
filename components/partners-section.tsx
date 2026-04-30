import { Badge } from "@/components/ui/badge";
import { ExternalLink } from "lucide-react";

const partners = [
  {
    name: "ASEAN Foundation",
    url: "https://aseanfoundation.org/",
    category: "Multilateral",
  },
  {
    name: "Google.org",
    url: "https://www.google.org/",
    category: "Philanthropy",
  },
  {
    name: "IMDA",
    url: "https://www.imda.gov.sg/",
    category: "Public Agency",
  },
  {
    name: "AVPN",
    url: "https://avpn.asia/",
    category: "Philanthropy Network",
  },
  {
    name: "Asian Development Bank",
    url: "https://www.adb.org/",
    category: "Multilateral",
  },
  {
    name: "Meta",
    url: "https://www.meta.com/",
    category: "Industry",
  },
  {
    name: "Micron Foundation",
    url: "https://www.micron.com/about/micron-foundation",
    category: "Philanthropy",
  },
  {
    name: "AWS",
    url: "https://aws.amazon.com/",
    category: "Industry",
  },
  {
    name: "UNDP",
    url: "https://www.undp.org/",
    category: "Multilateral",
  },
  {
    name: "Singapore Youth AI",
    url: "https://www.sgyouthai.org/",
    category: "Community",
  },
  {
    name: "National Youth Council",
    url: "https://www.nyc.gov.sg/",
    category: "Public Agency",
  },
  {
    name: "MUIS",
    url: "https://www.muis.gov.sg/",
    category: "Community",
  },
];

const categoryColours: Record<string, string> = {
  Multilateral: "bg-blue-500/10 text-blue-600",
  Philanthropy: "bg-purple-500/10 text-purple-600",
  "Philanthropy Network": "bg-purple-500/10 text-purple-600",
  "Public Agency": "bg-green-500/10 text-green-600",
  Industry: "bg-orange-500/10 text-orange-600",
  Community: "bg-rose-500/10 text-rose-600",
};

export function PartnersSection() {
  return (
    <section id="partners" className="section-mid py-24">
      <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16 reveal">
          <Badge variant="secondary" className="mb-4">
            AI for Good Alliance
          </Badge>

          <h2 className="text-3xl sm:text-4xl font-bold text-foreground mb-6 heading-underline">
            A Collaborative Ecosystem
          </h2>

          <p className="text-lg text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            AI Singapore would like to thank the following ecosystem partners
            for powering our AI for Good initiatives — a diverse cross-sector
            network spanning public agencies, multilateral institutions,
            industry, philanthropy, and community partners.
          </p>
        </div>

        <div className="bg-background border border-border rounded-2xl p-6 sm:p-8 reveal shadow-sm">
          <div className="grid grid-cols-1 sm:grid-cols-2 gap-3">
            {partners.map((partner, i) => (
              <a
                key={partner.name}
                href={partner.url}
                target="_blank"
                rel="noopener noreferrer"
                className="flex items-center justify-between gap-3 px-4 py-3 rounded-xl hover:bg-secondary hover:-translate-x-0.5 transition-all duration-200 group"
              >
                <div className="flex items-center gap-3">
                  <span className="w-2 h-2 rounded-full bg-primary shrink-0" />
                  <span className="text-sm text-foreground font-medium group-hover:text-primary transition-colors">
                    {partner.name}
                  </span>
                </div>
                <div className="flex items-center gap-2 shrink-0">
                  <span
                    className={`text-[10px] px-2 py-0.5 rounded-full font-medium hidden sm:block ${
                      categoryColours[partner.category] ??
                      "bg-muted text-muted-foreground"
                    }`}
                  >
                    {partner.category}
                  </span>
                  <ExternalLink className="w-3 h-3 text-muted-foreground opacity-0 group-hover:opacity-100 transition-opacity" />
                </div>
              </a>
            ))}
          </div>

          <p className="text-xs text-muted-foreground text-center mt-6 pt-6 border-t border-border">
            Partners are listed across public agencies, multilateral
            institutions, industry, philanthropy, and community organisations.
          </p>
        </div>
      </div>
    </section>
  );
}
