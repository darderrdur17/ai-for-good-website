"use client";

import { useState, useEffect } from "react";
import Link from "next/link";
import { Button } from "@/components/ui/button";
import { Menu, X, ExternalLink } from "lucide-react";

const navItems = [
  { name: "Overview", href: "#about" },
  { name: "Approach", href: "#approach" },
  { name: "Impact", href: "#impact" },
  { name: "Programmes", href: "#programs" },
  { name: "Partners", href: "#partners" },
  { name: "Contact", href: "#contact" },
];

const quickLinks = [
  { name: "AI for Good (Youth)", href: "https://aisingapore.org/talent/ai-for-good/" },
  { name: "AI for Good (Educator)", href: "https://aisingapore.org/talent/ai-for-good-educator/" },
  { name: "AI Ready ASEAN", href: "https://aisingapore.org/talent/ai-ready-asean/" },
  { name: "AI Opportunity Fund", href: "https://aifundamentals.aisingapore.org/" },
  { name: "Learn AI", href: "https://learn.aisingapore.org/" },
  { name: "Contact Us", href: "https://aisingapore.org/home/contact-us/" },
];

export function Navigation() {
  const [isOpen, setIsOpen] = useState(false);
  const [scrolled, setScrolled] = useState(false);

  useEffect(() => {
    const onScroll = () => setScrolled(window.scrollY > 20);
    window.addEventListener("scroll", onScroll, { passive: true });
    return () => window.removeEventListener("scroll", onScroll);
  }, []);

  return (
    <nav
      className={`fixed top-0 left-0 right-0 z-50 transition-all duration-300 ${
        scrolled
          ? "bg-background/95 backdrop-blur-md shadow-sm border-b border-border"
          : "bg-background/80 backdrop-blur-md border-b border-border"
      }`}
    >
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex items-center justify-between h-16">
          <Link
            href="https://aisingapore.org/talent/ai-for-good/"
            className="flex items-center gap-2 group"
          >
            <div className="w-8 h-8 flex items-center justify-center">
              <img
                src="/ai4g logo.png"
                alt="AI for Good Logo"
                className="w-full h-full object-contain group-hover:scale-105 transition-transform"
              />
            </div>
            <span className="font-semibold text-foreground">AI For Good</span>
          </Link>

          {/* Desktop Navigation */}
          <div className="hidden md:flex items-center gap-6">
            {navItems.map((item) => (
              <Link
                key={item.name}
                href={item.href}
                className="text-sm text-muted-foreground hover:text-foreground transition-colors relative after:absolute after:bottom-[-2px] after:left-0 after:w-0 after:h-[2px] after:bg-primary after:transition-all hover:after:w-full"
              >
                {item.name}
              </Link>
            ))}
            <Button size="sm" className="ml-4 ripple" asChild>
              <a
                href="https://aisingapore.org/home/contact-us/"
                target="_blank"
                rel="noopener noreferrer"
              >
                Partner With Us
              </a>
            </Button>
          </div>

          {/* Mobile Menu Button */}
          <button
            className="md:hidden p-2 text-foreground rounded-md hover:bg-secondary transition-colors"
            onClick={() => setIsOpen(!isOpen)}
            aria-label="Toggle menu"
            aria-expanded={isOpen}
          >
            {isOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
          </button>
        </div>
      </div>

      {/* Mobile Navigation */}
      <div
        className={`md:hidden bg-background border-t border-border overflow-hidden transition-all duration-300 ${
          isOpen ? "max-h-[600px] opacity-100" : "max-h-0 opacity-0"
        }`}
      >
        <div className="px-4 py-5 space-y-1">
          <p className="text-xs font-semibold text-muted-foreground uppercase tracking-wider px-3 pb-2">
            On This Page
          </p>
          {navItems.map((item) => (
            <Link
              key={item.name}
              href={item.href}
              className="block px-3 py-2 rounded-md text-sm text-muted-foreground hover:text-foreground hover:bg-secondary transition-colors"
              onClick={() => setIsOpen(false)}
            >
              {item.name}
            </Link>
          ))}

          <div className="pt-4 border-t border-border mt-4">
            <p className="text-xs font-semibold text-muted-foreground uppercase tracking-wider px-3 pb-2">
              Quick Links
            </p>
            {quickLinks.map((link) => (
              <a
                key={link.name}
                href={link.href}
                target="_blank"
                rel="noopener noreferrer"
                className="flex items-center justify-between px-3 py-2 rounded-md text-sm text-muted-foreground hover:text-foreground hover:bg-secondary transition-colors"
                onClick={() => setIsOpen(false)}
              >
                {link.name}
                <ExternalLink className="w-3 h-3 shrink-0" />
              </a>
            ))}
          </div>

          <div className="pt-4">
            <Button size="sm" className="w-full ripple" asChild>
              <a
                href="https://aisingapore.org/home/contact-us/"
                target="_blank"
                rel="noopener noreferrer"
              >
                Partner With Us
              </a>
            </Button>
          </div>
        </div>
      </div>
    </nav>
  );
}
