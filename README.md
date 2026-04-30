# AI for Good — website

Public-facing site for **AI for Good** under **AI Singapore**: scaling inclusive AI from Singapore into Southeast Asia and beyond. The experience is a single long-form page with anchored sections, scroll affordances, and a contact area.

## What’s on the site

The home page (`app/page.tsx`) is built from focused sections:

- **Hero** — headline, typewriter-style emphasis, and impact stats (beneficiaries, ASEAN coverage, programmes, partners).
- **AI era** — context on AI and society.
- **Theory of change** — how interventions connect to outcomes.
- **SDGs** — alignment with sustainable development goals.
- **Global reach** — geographic and partnership footprint.
- **Programmes** — active initiatives.
- **Partners** — organisations involved.
- **Collaboration** — how to work together.
- **Contact** — ways to get in touch.
- **Footer** — site-wide links and closing content.

UI patterns include a top **navigation**, **section dot navigation**, **scroll progress**, **back to top**, light/dark theming via `next-themes`, and **Vercel Web Analytics** in the root layout.

## Tech stack

- [Next.js](https://nextjs.org) (App Router) with React and TypeScript
- [Tailwind CSS](https://tailwindcss.com) v4 for styling
- [shadcn/ui](https://ui.shadcn.com)-style primitives under `components/ui`
- [Lucide](https://lucide.dev) icons

## WordPress theme

A companion theme lives in `wordpress-theme/` for teams that publish the same story on WordPress (templates, assets, and block-oriented page content where noted).

## Local development

Install dependencies, then start the dev server:

```bash
npm install
npm run dev
```

Or with your preferred package manager (`pnpm dev`, `yarn dev`).

Open [http://localhost:3000](http://localhost:3000) to preview the site.

**Production build:**

```bash
npm run build
npm run start
```

## Project layout (high level)

| Path | Role |
|------|------|
| `app/` | Routes, layout, global styles |
| `components/` | Page sections and shared UI |
| `hooks/` | Scroll, motion, and interaction hooks |
| `lib/` | Shared utilities |
| `public/` | Static assets (logos, icons, imagery) |
| `wordpress-theme/` | PHP theme for WordPress |

## Learn more

- [Next.js documentation](https://nextjs.org/docs)
- [Learn Next.js](https://nextjs.org/learn) — guided tutorial
