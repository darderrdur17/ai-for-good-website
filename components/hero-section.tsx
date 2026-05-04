"use client";

import { Button } from "@/components/ui/button";
import { ArrowRight, ExternalLink } from "lucide-react";
import { TypewriterText } from "@/components/typewriter-text";
import { AnimatedStat } from "@/components/animated-stat";

const stats = [
  { value: "100K+", label: "Beneficiaries Reached" },
  { value: "11", label: "ASEAN Member States" },
];

// Deterministic particle positions (avoids hydration mismatch)
const particles = [
  { cx: "10%", cy: "20%", size: 3, dur: 6, delay: 0 },
  { cx: "85%", cy: "15%", size: 2, dur: 8, delay: 1 },
  { cx: "25%", cy: "75%", size: 4, dur: 7, delay: 2 },
  { cx: "70%", cy: "65%", size: 2, dur: 5, delay: 0.5 },
  { cx: "50%", cy: "10%", size: 3, dur: 9, delay: 1.5 },
  { cx: "90%", cy: "50%", size: 2, dur: 6, delay: 3 },
  { cx: "5%",  cy: "55%", size: 3, dur: 7, delay: 2.5 },
  { cx: "40%", cy: "88%", size: 2, dur: 8, delay: 0.8 },
  { cx: "60%", cy: "30%", size: 3, dur: 6, delay: 1.2 },
  { cx: "15%", cy: "40%", size: 2, dur: 10, delay: 4 },
  { cx: "78%", cy: "82%", size: 3, dur: 7, delay: 3.5 },
  { cx: "35%", cy: "5%",  size: 2, dur: 5, delay: 2 },
];

export function HeroSection() {
  return (
    <section
      id="about"
      className="section-light relative min-h-screen flex items-center justify-center pt-16 overflow-hidden"
    >
      {/* Floating particle dots */}
      <div className="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        {particles.map((p, i) => (
          <span
            key={i}
            className="absolute rounded-full bg-primary/30"
            style={{
              left: p.cx,
              top: p.cy,
              width: p.size,
              height: p.size,
              animation: `float ${p.dur}s ease-in-out ${p.delay}s infinite`,
            }}
          />
        ))}

        {/* Morphing gradient blobs */}
        <div
          className="absolute top-16 left-8 w-80 h-80 bg-primary/12 rounded-full blur-3xl animate-blob animate-float-slow"
        />
        <div
          className="absolute bottom-24 right-8 w-96 h-96 bg-accent/10 rounded-full blur-3xl animate-blob"
          style={{ animationDelay: "2s", animationDuration: "10s, 7s" }}
        />
        <div
          className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-primary/4 rounded-full blur-3xl animate-float-slow"
          style={{ animationDelay: "1s" }}
        />

        {/* Dot grid */}
        <div
          className="absolute inset-0 opacity-[0.03]"
          style={{
            backgroundImage:
              "radial-gradient(circle, oklch(0.65 0.22 35) 1px, transparent 1px)",
            backgroundSize: "40px 40px",
          }}
        />
      </div>

      <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
        {/* Logo */}
        <div className="animate-fade-in-up animate-float" style={{ animationDelay: "0.1s" }}>
          <img
            src="/ai4g logo.png"
            alt="AI for Good Logo"
            className="mx-auto mb-8 w-48 sm:w-64 h-auto drop-shadow-md"
          />
        </div>

        {/* Eyebrow badge */}
        <div
          className="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary/10 border border-primary/20 text-sm font-medium text-primary mb-6 animate-fade-in-up"
          style={{ animationDelay: "0.2s" }}
        >
          <span className="relative flex w-2 h-2">
            <span className="pulse-ring absolute inline-flex w-full h-full rounded-full bg-primary opacity-75" />
            <span className="relative inline-flex w-2 h-2 rounded-full bg-primary" />
          </span>
          AI Singapore · Talent Development
        </div>

        {/* Main headline */}
        <h1
          className="text-4xl sm:text-5xl lg:text-7xl font-bold text-foreground mb-6 leading-tight text-balance animate-fade-in-up"
          style={{ animationDelay: "0.3s" }}
        >
          Scaling Inclusive AI
          <br />
          <span className="animate-shimmer-text">from Singapore to the World</span>
        </h1>

        {/* Typewriter subheading */}
        <p
          className="text-lg sm:text-xl text-muted-foreground max-w-3xl mx-auto mb-10 text-pretty min-h-[3.5rem] sm:min-h-[2rem] animate-fade-in"
          style={{ animationDelay: "0.5s" }}
        >
          <TypewriterText
            text="AI for Good is AI Singapore's flagship initiative to advance inclusive, responsible AI education across Southeast Asia and beyond — empowering learners, educators, and communities for the AI era."
            delay={900}
            speed={22}
          />
        </p>

        {/* CTAs */}
        <div
          className="flex flex-col sm:flex-row items-center justify-center gap-4 mb-20 animate-fade-in-up"
          style={{ animationDelay: "0.6s" }}
        >
          <Button
            size="lg"
            className="gap-2 shadow-lg hover:shadow-primary/30 hover:-translate-y-1 active:scale-95 transition-all duration-300 ripple"
            asChild
          >
            <a href="#programs">
              Explore Programmes <ArrowRight className="w-4 h-4" />
            </a>
          </Button>
          <Button
            size="lg"
            variant="outline"
            className="gap-2 hover:-translate-y-1 active:scale-95 transition-all duration-300 ripple"
            asChild
          >
            <a
              href="https://aisingapore.org/home/contact-us/"
              target="_blank"
              rel="noopener noreferrer"
            >
              Partner With Us <ExternalLink className="w-4 h-4" />
            </a>
          </Button>
        </div>

        {/* Animated stats */}
        <div
          className="flex flex-wrap justify-center gap-4 sm:gap-6 max-w-xl mx-auto animate-fade-in-up [&>*]:flex-1 [&>*]:min-w-[140px] sm:[&>*]:min-w-[160px]"
          style={{ animationDelay: "0.75s" }}
        >
          {stats.map((stat) => (
            <AnimatedStat key={stat.label} value={stat.value} label={stat.label} />
          ))}
        </div>
      </div>
    </section>
  );
}
