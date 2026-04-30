import { Button } from "@/components/ui/button";
import { ExternalLink, Mail, Globe, Users } from "lucide-react";

const quickLinks = [
  {
    icon: Globe,
    label: "AI Singapore Website",
    href: "https://aisingapore.org/",
    description: "Explore all of AI Singapore's programmes and initiatives",
  },
  {
    icon: Users,
    label: "AI for Good (Youth)",
    href: "https://aisingapore.org/talent/ai-for-good/",
    description: "Youth-focused AI literacy programme",
  },
  {
    icon: Users,
    label: "AI for Good (Educator)",
    href: "https://aisingapore.org/talent/ai-for-good-educator/",
    description: "AI training for educators across Southeast Asia",
  },
  {
    icon: Globe,
    label: "Learn AI — Talent Portal",
    href: "https://learn.aisingapore.org/",
    description: "Courses, certifications, and learning pathways",
  },
];

export function ContactSection() {
  return (
    <section id="contact" className="section-warm py-24 border-t border-border">
      <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12 reveal">
          <h2 className="text-2xl sm:text-3xl font-bold text-foreground mb-4">
            Contact Us
          </h2>

          <p className="text-muted-foreground mb-6 text-pretty max-w-xl mx-auto">
            For further enquiries about AI for Good programmes, partnerships, or
            collaborations, please get in touch with our team.
          </p>

          <div className="flex flex-col sm:flex-row items-center justify-center gap-4">
          <Button size="lg" className="gap-2 ripple" asChild>
            <a
              href="https://aisingapore.org/home/contact-us/"
                target="_blank"
                rel="noopener noreferrer"
              >
                Contact AI Singapore <ExternalLink className="w-4 h-4" />
              </a>
            </Button>
            <Button size="lg" variant="outline" className="gap-2 ripple" asChild>
              <a href="mailto:learn-admin@aisingapore.org">
                <Mail className="w-4 h-4" />
                learn-admin@aisingapore.org
              </a>
            </Button>
          </div>
        </div>

        {/* Quick Links Grid */}
        <div className="grid sm:grid-cols-2 gap-4">
          {quickLinks.map((link, i) => (
            <a
              key={link.label}
              href={link.href}
              target="_blank"
              rel="noopener noreferrer"
              className="flex items-start gap-4 p-5 rounded-2xl border border-border bg-background card-hover-glow group reveal-scale"
              data-delay={String(i + 1)}
            >
              <div className="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center shrink-0 group-hover:bg-primary/20 transition-colors">
                <link.icon className="w-5 h-5 text-primary" />
              </div>
              <div className="min-w-0">
                <p className="text-sm font-semibold text-foreground group-hover:text-primary transition-colors flex items-center gap-1">
                  {link.label}
                  <ExternalLink className="w-3 h-3 shrink-0 opacity-0 group-hover:opacity-100 transition-opacity" />
                </p>
                <p className="text-xs text-muted-foreground mt-0.5 leading-snug">
                  {link.description}
                </p>
              </div>
            </a>
          ))}
        </div>
      </div>
    </section>
  );
}
