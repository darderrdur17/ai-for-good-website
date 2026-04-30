"use client";

import React from "react";
import { useScrollReveal } from "@/hooks/use-scroll-reveal";
import { Navigation } from "@/components/navigation";
import { HeroSection } from "@/components/hero-section";
import { AIEraSection } from "@/components/ai-era-section";
import { TheoryOfChangeSection } from "@/components/theory-of-change-section";
import { SDGSection } from "@/components/sdg-section";
import { GlobalReachSection } from "@/components/global-reach-section";
import { ProgramsSection } from "@/components/programs-section";
import { PartnersSection } from "@/components/partners-section";
import { CollaborationSection } from "@/components/collaboration-section";
import { ContactSection } from "@/components/contact-section";
import { Footer } from "@/components/footer";
import { ScrollProgress } from "@/components/scroll-progress";
import { BackToTop } from "@/components/back-to-top";
import { SectionNavDots } from "@/components/section-nav-dots";

export default function AIForGoodPage() {
  useScrollReveal();

  // Global ripple effect on .ripple elements
  React.useEffect(() => {
    const handler = (e: MouseEvent) => {
      const target = (e.target as HTMLElement).closest(".ripple") as HTMLElement | null;
      if (!target) return;
      const rect = target.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      const x = e.clientX - rect.left - size / 2;
      const y = e.clientY - rect.top - size / 2;
      const ripple = document.createElement("span");
      ripple.className = "ripple-circle";
      ripple.style.cssText = `width:${size}px;height:${size}px;left:${x}px;top:${y}px`;
      target.appendChild(ripple);
      ripple.addEventListener("animationend", () => ripple.remove());
    };
    document.addEventListener("click", handler);
    return () => document.removeEventListener("click", handler);
  }, []);

  return (
    <>
      <ScrollProgress />
      <SectionNavDots />
      <BackToTop />
      <main className="min-h-screen">
        <Navigation />
        <HeroSection />
        <AIEraSection />
        <TheoryOfChangeSection />
        <SDGSection />
        <GlobalReachSection />
        <ProgramsSection />
        <PartnersSection />
        <CollaborationSection />
        <ContactSection />
        <Footer />
      </main>
    </>
  );
}
