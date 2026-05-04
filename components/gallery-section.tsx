"use client";

import Image from "next/image";
import { Badge } from "@/components/ui/badge";
import { galleryItems, getGalleryRevealFallback } from "@/lib/gallery-items";

export function GallerySection() {
  return (
    <section id="gallery" className="section-warm py-24 border-t border-border">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16 reveal">
          <Badge variant="secondary" className="mb-4">
            Moments &amp; milestones
          </Badge>
          <h2 className="text-3xl sm:text-4xl font-bold text-foreground mb-6 heading-underline text-balance">
            Gallery
          </h2>
          <p className="text-lg text-muted-foreground max-w-3xl mx-auto text-pretty leading-relaxed">
            Highlights from outreach, trainings, festivals, and partnership moments.
          </p>
        </div>

        <div
          className="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-5 lg:grid-cols-12"
          aria-label="Photo gallery"
        >
          {galleryItems.map((item, i) => {
            const reveal = item.reveal ?? getGalleryRevealFallback(i);
            const delay = String(Math.min((i % 7) + 1, 7));
            const baseMin = item.minHeightClass ?? "min-h-[200px] sm:min-h-[220px]";
            const fullBleedHero = item.layout?.includes("col-span-12");
            return (
              <figure
                key={`${typeof item.src === "string" ? item.src : "asset"}-${i}`}
                className={`group relative overflow-hidden rounded-2xl border border-border bg-card shadow-sm card-hover-glow ${baseMin} ${fullBleedHero ? "sm:col-span-2" : ""} ${reveal} ${item.layout ?? "lg:col-span-6"}`}
                data-delay={delay}
              >
                <div className="absolute inset-0 bg-gradient-to-t from-black/55 via-transparent to-transparent z-10 opacity-80 transition-opacity duration-300 group-hover:opacity-90 pointer-events-none" />
                <div className="absolute inset-0 overflow-hidden">
                  <Image
                    src={item.src}
                    alt={item.alt}
                    fill
                    sizes="(max-width: 640px) 100vw, (max-width: 1024px) 50vw, (max-width: 1280px) 33vw, 400px"
                    className="object-cover transition-transform duration-500 ease-out group-hover:scale-105 group-focus-within:scale-105"
                  />
                </div>
                {item.caption ? (
                  <figcaption className="absolute bottom-0 left-0 right-0 z-20 p-4 sm:p-5">
                    <span className="text-sm font-medium text-white drop-shadow-md">{item.caption}</span>
                  </figcaption>
                ) : (
                  <span className="sr-only">{item.alt}</span>
                )}
              </figure>
            );
          })}
        </div>
      </div>
    </section>
  );
}
