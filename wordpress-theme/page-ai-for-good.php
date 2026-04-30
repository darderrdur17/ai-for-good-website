<?php
/**
 * Template Name: AI for Good
 * Template Post Type: page
 *
 * Full-page template for the AI Singapore — AI for Good initiative.
 * Incorporates all content from the Next.js codebase and the Kadence
 * block structure provided. Fully responsive: mobile, tablet, desktop.
 */
get_header();
?>

<main id="main-content" role="main">

    <!-- ===========================================================
         1. HERO SECTION
         =========================================================== -->
    <section class="hero" aria-labelledby="hero-heading">
        <!-- Decorative blobs -->
        <div class="hero-blob hero-blob--1" aria-hidden="true"></div>
        <div class="hero-blob hero-blob--2" aria-hidden="true"></div>

        <div class="container">
            <div class="hero-inner">

                <!-- Hero banner image (desktop) — from Kadence block -->
                <div class="hero-banner hero-banner--desktop">
                    <img
                        src="https://aisingapore.org/wp-content/uploads/2025/12/ai-for-good-1920-x-720-px-1024x384.webp"
                        alt="AI for Good — AI Singapore initiative banner"
                        width="1024"
                        height="384"
                        loading="eager"
                    >
                </div>

                <!-- Hero banner image (mobile) — from Kadence block -->
                <div class="hero-banner hero-banner--mobile">
                    <img
                        src="https://aisingapore.org/wp-content/uploads/2025/12/ai-for-good-600-x-600-px.jpg"
                        alt="AI for Good — AI Singapore initiative"
                        width="600"
                        height="600"
                        loading="eager"
                    >
                </div>

                <!-- Pill badge -->
                <div class="hero-pill" aria-label="AI Singapore Initiative">
                    <span class="hero-pill-dot" aria-hidden="true"></span>
                    AI Singapore Initiative
                </div>

                <!-- Heading -->
                <h1 class="hero-title" id="hero-heading">
                    Scaling Inclusive AI<br>
                    <span class="highlight">from Singapore to the World</span>
                </h1>

                <!-- Subtitle -->
                <p class="hero-subtitle">
                    AI Singapore advances AI for Good by turning AI education into scalable social impact across Southeast Asia and beyond.
                </p>

                <!-- CTAs -->
                <div class="hero-actions">
                    <a href="#programs" class="btn btn--primary btn--lg">
                        Explore Programs
                        <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <a href="#contact" class="btn btn--outline btn--lg">
                        Partner With Us
                    </a>
                </div>

                <!-- Stats -->
                <div class="hero-stats" aria-label="Key statistics">
                    <div class="stat-card">
                        <svg class="stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        <span class="stat-number">100,000+</span>
                        <span class="stat-label">Learners Reached</span>
                    </div>
                    <div class="stat-card">
                        <svg class="stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                        <span class="stat-number">15+</span>
                        <span class="stat-label">Countries</span>
                    </div>
                    <div class="stat-card">
                        <svg class="stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                        <span class="stat-number">200+</span>
                        <span class="stat-label">Master Trainers</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / HERO -->


    <!-- ===========================================================
         2. ABOUT / OUR MISSION SECTION
         =========================================================== -->
    <section id="about" class="section section--bg-card" aria-labelledby="about-heading">
        <div class="container">

            <div class="about-grid">
                <!-- Left column: mission text -->
                <div>
                    <span class="section-badge">About AI Singapore</span>
                    <h2 class="section-title" id="about-heading">Our Mission</h2>
                    <p style="color:var(--muted-foreground);font-size:1.0625rem;margin-bottom:1.25rem;line-height:1.7;">
                        AI for Good is a branch of initiatives under LearnAI, focusing on outreach initiatives to underprivileged communities. This initiative seeks to bridge the digital divide by making AI resources, tools and knowledge accessible to those who may otherwise lack opportunities, creating meaningful and positive impact.
                    </p>
                    <p style="color:var(--muted-foreground);font-size:1rem;margin-bottom:1.5rem;line-height:1.7;">
                        Launched in May 2017, AI Singapore is Singapore's national research and development programme in AI — the first of its kind national-level setup.
                    </p>
                    <h3 style="font-size:1rem;font-weight:700;color:var(--foreground);margin-bottom:.75rem;">Our Mission:</h3>
                    <ul class="about-mission-list">
                        <li><span class="bullet-dot" aria-hidden="true"></span>Build deep national capabilities in AI</li>
                        <li><span class="bullet-dot" aria-hidden="true"></span>Create social and economic impacts</li>
                        <li><span class="bullet-dot" aria-hidden="true"></span>Grow local talent</li>
                        <li><span class="bullet-dot" aria-hidden="true"></span>Accelerate AI ecosystem</li>
                        <li><span class="bullet-dot" aria-hidden="true"></span>Put Singapore on the world map</li>
                    </ul>
                </div>

                <!-- Right column: partner cards -->
                <div style="display:flex;flex-direction:column;gap:1.25rem;">
                    <div class="card" style="display:flex;flex-direction:column;gap:.75rem;">
                        <div style="display:flex;align-items:center;gap:1rem;">
                            <div class="card-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="1"/><path d="M3 9h18M9 21V9"/></svg>
                            </div>
                            <h3 class="card-title" style="margin:0;">Government</h3>
                        </div>
                        <p class="card-text">Driven by NRF, Smart Nation Group, IMDA, EDB, Enterprise Singapore, and other government agencies.</p>
                    </div>
                    <div class="card" style="display:flex;flex-direction:column;gap:.75rem;">
                        <div style="display:flex;align-items:center;gap:1rem;">
                            <div class="card-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22" aria-hidden="true"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                            </div>
                            <h3 class="card-title" style="margin:0;">Academia</h3>
                        </div>
                        <p class="card-text">Partnering with leading universities and research institutions to advance AI research and education.</p>
                    </div>
                    <div class="card" style="display:flex;flex-direction:column;gap:.75rem;">
                        <div style="display:flex;align-items:center;gap:1rem;">
                            <div class="card-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                            </div>
                            <h3 class="card-title" style="margin:0;">Industry</h3>
                        </div>
                        <p class="card-text">Collaborating with industry partners to drive AI adoption and innovation across sectors.</p>
                    </div>
                </div>
            </div>

            <!-- Mission photo gallery (from Kadence block) -->
            <div class="gallery-grid" role="list" aria-label="AI for Good gallery">
                <div role="listitem">
                    <a href="https://aisingapore.org/ai-for-good-2/aiforgood1/" target="_blank" rel="noopener noreferrer" aria-label="View AI for Good photo 1">
                        <img
                            src="https://aisingapore.org/wp-content/uploads/2025/12/aiforgood1.jpg"
                            alt="AI for Good community engagement session"
                            width="600" height="450"
                            loading="lazy"
                        >
                    </a>
                </div>
                <div role="listitem">
                    <a href="https://aisingapore.org/ai-for-good-2/aiforgood2/" target="_blank" rel="noopener noreferrer" aria-label="View AI for Good photo 2">
                        <img
                            src="https://aisingapore.org/wp-content/uploads/2025/12/aiforgood2.jpg"
                            alt="AI for Good training workshop"
                            width="600" height="450"
                            loading="lazy"
                        >
                    </a>
                </div>
                <div role="listitem">
                    <a href="https://aisingapore.org/ai-for-good-2/aiforgood3/" target="_blank" rel="noopener noreferrer" aria-label="View AI for Good photo 3">
                        <img
                            src="https://aisingapore.org/wp-content/uploads/2025/12/aiforgood3.jpg"
                            alt="AI for Good participants learning"
                            width="600" height="450"
                            loading="lazy"
                        >
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- / ABOUT -->


    <!-- ===========================================================
         3. THE AI ERA SECTION
         =========================================================== -->
    <section class="section" aria-labelledby="ai-era-heading">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">The Challenge</span>
                <h2 class="section-title" id="ai-era-heading">The AI Era is Here — Are We Ready?</h2>
                <p class="section-subtitle">
                    AI is rapidly reshaping how societies learn, work, and participate in the global economy. Without deliberate action, AI will widen inequality — leaving behind youth, workers, educators, and underserved communities.
                </p>
            </div>

            <div class="ai-era-grid">
                <div class="ai-era-card">
                    <div class="ai-era-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="26" height="26"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                    </div>
                    <h3>Learn</h3>
                    <p class="subtitle">AI is reshaping how we learn</p>
                    <p>AI is redefining how knowledge is created, accessed, and applied. We are moving from tools to intelligent collaborators.</p>
                </div>
                <div class="ai-era-card">
                    <div class="ai-era-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="26" height="26"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                    </div>
                    <h3>Work</h3>
                    <p class="subtitle">AI is reshaping jobs</p>
                    <p>Automation is reshaping jobs, skills, and economic participation. AI is no longer optional — it defines how we work and live.</p>
                </div>
                <div class="ai-era-card">
                    <div class="ai-era-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="26" height="26"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                    </div>
                    <h3>Global</h3>
                    <p class="subtitle">AI is reshaping access</p>
                    <p>Without intervention, the AI divide will exclude underserved communities from opportunities in the global digital economy.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- / AI ERA -->


    <!-- ===========================================================
         4. PILLARS SECTION
         =========================================================== -->
    <section id="pillars" class="section section--bg-card" aria-labelledby="pillars-heading">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Our Focus</span>
                <h2 class="section-title" id="pillars-heading">AI Singapore Pillars</h2>
                <p class="section-subtitle">
                    Support Singapore's vision to be a leader in developing scalable, impactful AI solutions strategic to the nation and beyond.
                </p>
            </div>

            <div class="grid-3">
                <?php
                $pillars = [
                    [
                        'icon'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22" aria-hidden="true"><path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v11m0 0H5a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-4m-4 0V9"/></svg>',
                        'title'  => 'AI Research',
                        'desc'   => "Sustain investments in fundamental AI research to ensure Singapore's relevance in the global AI race",
                        'points' => ['Build Strategic Capabilities', 'Retain and Nurture Local Talent', 'Preposition SG for Future Applications'],
                    ],
                    [
                        'icon'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22" aria-hidden="true"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>',
                        'title'  => 'AI Technology',
                        'desc'   => 'Support applied AI research projects aligned to the National AI Strategy',
                        'points' => ['AI Solutions with High Social and Economic Impacts', 'Sector-wide or National Scale Challenges'],
                    ],
                    [
                        'icon'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22" aria-hidden="true"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg>',
                        'title'  => 'AI Innovation',
                        'desc'   => 'Catalyse and support more widespread industry adoption of AI',
                        'points' => ['AI Adoption in Industry through Talent and Projects', 'AI Standards', 'Industry Consortia'],
                    ],
                    [
                        'icon'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
                        'title'  => 'AI Governance',
                        'desc'   => 'Establish Singapore as a leading hub for responsible and trusted AI',
                        'points' => ['Fairness, Accountability and Transparency', 'Privacy and Ethics', 'Risk and Mitigations'],
                    ],
                    [
                        'icon'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22" aria-hidden="true"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"/><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>',
                        'title'  => 'AI Products',
                        'desc'   => 'Build catalytic AI products/solutions to enrich Singapore AI Ecosystem',
                        'points' => ['Project SEA-LION', 'Large Language Models', 'Multilingual Capabilities & Multimodality'],
                    ],
                    [
                        'icon'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
                        'title'  => 'AI Talent Development',
                        'desc'   => 'Nurture and empower the next generation of AI bilinguals',
                        'points' => ['AI Capacity Building for Organisations', 'AI Education for Students & Educators', 'AI for Good Initiatives'],
                    ],
                ];
                foreach ( $pillars as $pillar ) :
                ?>
                <div class="card">
                    <div class="card-icon"><?php echo $pillar['icon']; ?></div>
                    <h3 class="card-title"><?php echo esc_html( $pillar['title'] ); ?></h3>
                    <p class="card-text" style="margin-bottom:.75rem;"><?php echo esc_html( $pillar['desc'] ); ?></p>
                    <ul class="pillars-list">
                        <?php foreach ( $pillar['points'] as $pt ) : ?>
                            <li>
                                <span class="bullet-dot" aria-hidden="true"></span>
                                <?php echo esc_html( $pt ); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- / PILLARS -->


    <!-- ===========================================================
         5. THEORY OF CHANGE
         =========================================================== -->
    <section class="section" aria-labelledby="toc-heading">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Our Approach</span>
                <h2 class="section-title" id="toc-heading">AI for Good — Theory of Change</h2>
                <p class="section-subtitle">
                    Our systematic approach to creating lasting impact through inclusive AI education and capacity building.
                </p>
            </div>

            <div class="toc-grid" role="list">
                <?php
                $stages = [
                    [ 'title' => 'Problem / Need',  'content' => 'Uneven access to AI capabilities, with varying levels of readiness across communities, sectors, and markets', 'cls' => 'toc-card-1' ],
                    [ 'title' => 'Inputs',           'content' => 'Cross-sector partnerships, Funding &amp; resources, AI expertise, Platforms, tools, and networks',          'cls' => 'toc-card-2' ],
                    [ 'title' => 'Activities',       'content' => 'A portfolio of AI for Good initiatives across: Education, Workforce development, Community programmes, Ecosystem &amp; policy engagement', 'cls' => 'toc-card-3' ],
                    [ 'title' => 'Outputs',          'content' => 'Programmes delivered across markets, Educators, trainers, and facilitators enabled, Learners, workers, and communities reached at scale', 'cls' => 'toc-card-4' ],
                    [ 'title' => 'Outcomes',         'content' => 'Build AI literacy, fluency, and practical application, Strengthen employability and productivity, Engage with AI responsibly and safely', 'cls' => 'toc-card-5' ],
                    [ 'title' => 'Impact',           'content' => 'Inclusive participation in the AI-enabled economy, Expanded access to opportunities, Future-ready workforce and communities', 'cls' => 'toc-card-6' ],
                ];
                foreach ( $stages as $i => $stage ) :
                ?>
                <div class="toc-card <?php echo esc_attr( $stage['cls'] ); ?>" role="listitem">
                    <div class="toc-step" aria-label="Step <?php echo $i + 1; ?>"><?php echo $i + 1; ?></div>
                    <h3><?php echo esc_html( $stage['title'] ); ?></h3>
                    <p><?php echo $stage['content']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- / THEORY OF CHANGE -->


    <!-- ===========================================================
         6. OUR GOALS (SDG) SECTION
         Combines the Kadence accordion with the Next.js SDG cards.
         =========================================================== -->
    <section id="goals" class="section section--bg-card" aria-labelledby="goals-heading">
        <div class="container container--md">

            <div class="section-header">
                <span class="section-badge">UN Sustainable Development Goals</span>
                <h2 class="section-title" id="goals-heading">Our Goals</h2>
                <p class="section-subtitle">
                    Driving inclusive, equitable AI education — aligned to UN SDG 4: Quality Education.
                </p>
            </div>

            <!-- Accordion (mirrors Kadence accordion from block content) -->
            <div class="accordion" role="list" aria-label="Our goals accordion">

                <!-- Goal 1 -->
                <div class="accordion-item" role="listitem">
                    <button
                        class="accordion-trigger"
                        aria-expanded="true"
                        aria-controls="accordion-panel-1"
                        id="accordion-btn-1"
                    >
                        <strong>United Nations Sustainable Development Goals</strong>
                        <span class="accordion-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" width="16" height="16"><polyline points="6 9 12 15 18 9"/></svg>
                        </span>
                    </button>
                    <div
                        class="accordion-panel is-open"
                        id="accordion-panel-1"
                        role="region"
                        aria-labelledby="accordion-btn-1"
                    >
                        <p>
                            <strong>SDG 4:</strong> Ensure inclusive and equitable quality education and promote lifelong learning opportunities for all.<br><br>
                            With AI for Good, we aim to align ourselves with SDG 4 by empowering communities, reducing inequality, and driving progress across other SDGs as we believe that education underpins other goals.
                        </p>
                    </div>
                </div>

                <!-- Goal 2 -->
                <div class="accordion-item" role="listitem">
                    <button
                        class="accordion-trigger"
                        aria-expanded="false"
                        aria-controls="accordion-panel-2"
                        id="accordion-btn-2"
                    >
                        Foster Collaboration
                        <span class="accordion-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" width="16" height="16"><polyline points="6 9 12 15 18 9"/></svg>
                        </span>
                    </button>
                    <div
                        class="accordion-panel"
                        id="accordion-panel-2"
                        role="region"
                        aria-labelledby="accordion-btn-2"
                    >
                        <p>
                            Collaboration is key to ensuring the widespread adoption and implementation of AI-driven solutions that address community-specific challenges. By partnering with governments, academic institutions, non-profits, and private sector organisations, we hope to create strengthened community networks through shared resources and expertise.
                        </p>
                    </div>
                </div>

                <!-- Goal 3 -->
                <div class="accordion-item" role="listitem">
                    <button
                        class="accordion-trigger"
                        aria-expanded="false"
                        aria-controls="accordion-panel-3"
                        id="accordion-btn-3"
                    >
                        Upskill Communities
                        <span class="accordion-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" width="16" height="16"><polyline points="6 9 12 15 18 9"/></svg>
                        </span>
                    </button>
                    <div
                        class="accordion-panel"
                        id="accordion-panel-3"
                        role="region"
                        aria-labelledby="accordion-btn-3"
                    >
                        <p>
                            AI for Good aims to provide hands-on training programmes to equip individuals with the practical skills needed for future-proof careers, enabling them to actively participate in and contribute to a tech-driven economy.
                        </p>
                    </div>
                </div>

            </div>

            <!-- SDG goal cards -->
            <div class="grid-3" style="margin-top:3rem;">
                <?php
                $sdg_goals = [
                    [
                        'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22" aria-hidden="true"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>',
                        'title' => 'AI Literacy for All',
                        'desc'  => 'Equip learners with core AI skills for life & employability',
                        'sdg'   => 'SDG 4.1 | 4.4',
                        'detail'=> 'Skills for employment and livelihoods',
                    ],
                    [
                        'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
                        'title' => 'Empowering Educators',
                        'desc'  => 'Enable educators to integrate AI into learning systems',
                        'sdg'   => 'SDG 4.6 | 4.c',
                        'detail'=> 'Scale teacher capacity and AI diffusion',
                    ],
                    [
                        'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>',
                        'title' => 'Inclusive Access',
                        'desc'  => 'Expand AI learning to underserved & under-represented communities',
                        'sdg'   => 'SDG 4.5',
                        'detail'=> 'Reduce disparities and ensure equitable access',
                    ],
                    [
                        'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22" aria-hidden="true"><path d="M12 22V2M2 12h20M4.93 4.93l14.14 14.14M19.07 4.93L4.93 19.07"/></svg>',
                        'title' => 'Responsible AI & Governance',
                        'desc'  => 'Promote safe, trustworthy, and human-centric AI use',
                        'sdg'   => 'SDG 4.7',
                        'detail'=> 'Support sustainable development and citizenship',
                    ],
                    [
                        'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
                        'title' => 'Sustainable Ecosystem Building',
                        'desc'  => 'Strengthen institutions and partnerships to scale AI for Good sustainably',
                        'sdg'   => 'SDG 4.b',
                        'detail'=> 'Expand global capacity-building effort',
                    ],
                ];
                foreach ( $sdg_goals as $goal ) :
                ?>
                <div class="card">
                    <div class="card-icon"><?php echo $goal['icon']; ?></div>
                    <h3 class="card-title"><?php echo esc_html( $goal['title'] ); ?></h3>
                    <p class="card-text" style="margin-bottom:1rem;"><?php echo esc_html( $goal['desc'] ); ?></p>
                    <div style="display:flex;align-items:center;gap:.5rem;padding-top:.875rem;border-top:1px solid var(--border);">
                        <span style="font-size:.75rem;font-weight:700;color:var(--primary);"><?php echo esc_html( $goal['sdg'] ); ?></span>
                        <span style="font-size:.75rem;color:var(--muted-foreground);">— <?php echo esc_html( $goal['detail'] ); ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- / GOALS -->


    <!-- ===========================================================
         7. GLOBAL REACH SECTION
         =========================================================== -->
    <section id="impact" class="section" aria-labelledby="impact-heading">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Our Reach</span>
                <h2 class="section-title" id="impact-heading">Global Reach and Impact</h2>
                <p class="section-subtitle">
                    AI Singapore advances AI for Good by turning AI education into scalable social impact across Southeast Asia and beyond.
                </p>
            </div>

            <!-- World map image -->
            <div class="map-container" role="img" aria-label="World map showing AI for Good global reach across Southeast Asia, South Asia, Caribbean, and Pacific Islands">
                <img
                    src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/map-na1yxIk8a3BtlzDr3ijyuGTKUE00FC.png"
                    alt="World map showing AI for Good global reach — Southeast Asia, South Asia, Caribbean (In Progress), and Pacific Islands (In Progress)"
                    width="1200"
                    height="600"
                    loading="lazy"
                    style="padding:2rem;"
                >
            </div>

            <!-- Region cards -->
            <div class="region-grid">
                <div class="region-card region-card--active">
                    <div class="region-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        Southeast Asia
                    </div>
                    <div class="region-tags">
                        <?php foreach ( ['Singapore','Brunei','Cambodia','Indonesia','Laos','Malaysia','Myanmar','Philippines','Thailand','Vietnam','Timor-Leste'] as $c ) : ?>
                            <span class="region-tag region-tag--active"><?php echo esc_html( $c ); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="region-card region-card--active">
                    <div class="region-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        South Asia
                    </div>
                    <div class="region-tags">
                        <?php foreach ( ['Pakistan','Sri Lanka','Bangladesh'] as $c ) : ?>
                            <span class="region-tag region-tag--active"><?php echo esc_html( $c ); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="region-card region-card--progress">
                    <div class="region-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18" style="color:var(--muted-foreground)" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        Caribbean
                        <span class="region-badge">In Progress</span>
                    </div>
                    <div class="region-tags">
                        <span class="region-tag region-tag--progress">Coming soon</span>
                    </div>
                </div>
                <div class="region-card region-card--progress">
                    <div class="region-title">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18" style="color:var(--muted-foreground)" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        Pacific Islands
                        <span class="region-badge">In Progress</span>
                    </div>
                    <div class="region-tags">
                        <span class="region-tag region-tag--progress">Coming soon</span>
                    </div>
                </div>
            </div>

            <!-- Impact stats -->
            <div class="impact-stats" aria-label="Impact statistics">
                <div class="impact-stat">
                    <div class="impact-stat-number" aria-label="11 ASEAN Member States">11</div>
                    <p class="impact-stat-label">ASEAN Member States</p>
                </div>
                <div class="impact-stat">
                    <div class="impact-stat-number" aria-label="Over 100,000 learners reached">100K+</div>
                    <p class="impact-stat-label">Learners Reached</p>
                </div>
                <div class="impact-stat">
                    <div class="impact-stat-number" aria-label="Over 200 Master Trainers">200+</div>
                    <p class="impact-stat-label">Master Trainers</p>
                </div>
                <div class="impact-stat">
                    <div class="impact-stat-number" aria-label="Over 6,000 downstream training">6,000+</div>
                    <p class="impact-stat-label">Downstream Training</p>
                </div>
            </div>
        </div>
    </section>
    <!-- / GLOBAL REACH -->


    <!-- ===========================================================
         8. PROGRAMS / OUR INITIATIVES SECTION
         Combines the Next.js interactive tabs + Kadence initiative cards.
         =========================================================== -->
    <section id="programs" class="section section--bg-secondary" aria-labelledby="programs-heading">
        <div class="container">

            <div class="section-header">
                <span class="section-badge">Our Initiatives</span>
                <h2 class="section-title" id="programs-heading">AI for Good Initiatives</h2>
                <p class="section-subtitle">
                    A portfolio of programmes designed to scale inclusive AI education across Southeast Asia and beyond.
                </p>
            </div>

            <!-- ── Kadence-style 3-initiative cards (from block content) ── -->
            <div class="initiatives-grid">
                <!-- AI Ready ASEAN -->
                <div class="initiative-card">
                    <h3 class="initiative-card-title">AI Ready ASEAN</h3>
                    <p class="initiative-card-desc">
                        AI Singapore is the local implementing partner for the AI Ready ASEAN initiative, in partnership with the ASEAN Foundation and supported by Google.org. The initiative is committed to empowering ASEAN citizens to thrive in the era of AI. Running from 2024 to 2026, the programme will engage individuals in AI learning, cultivate Master Trainers, and establish a central e-learning platform, ensuring the region is equipped with the foundational knowledge of AI literacy, thereby helping ASEAN citizens navigate their future with confidence.
                    </p>
                    <a href="https://aisingapore.org/talent/ai-ready-asean/" target="_blank" rel="noopener noreferrer" class="btn btn--primary btn--sm btn--full">
                        Learn More
                    </a>
                </div>

                <!-- AI for Good (Educator) -->
                <div class="initiative-card">
                    <h3 class="initiative-card-title">AI for Good (Educator) Train-the-Trainer Programme</h3>
                    <p class="initiative-card-desc">
                        The AI For Good (Educator) Train-the-Trainer Programme aims to #PLUSskill 100 educators from ASEAN and empower them to conduct 40 AI classes for 5,000 students in their home communities. We equip trainers to conduct their own workshops which touch on crucial topics such as Basic AI, Limitations of AI and Responsible AI Use.
                    </p>
                    <a href="https://aisingapore.org/talent/ai-for-good-educator/" target="_blank" rel="noopener noreferrer" class="btn btn--primary btn--sm btn--full">
                        Learn More
                    </a>
                </div>

                <!-- AI Opportunity Fund -->
                <div class="initiative-card">
                    <h3 class="initiative-card-title">AI Opportunity Fund: Asia-Pacific</h3>
                    <p class="initiative-card-desc">
                        AI Singapore, as a Strategic Partner, develops, delivers, and manages the Train-the-Trainer programme with AVPN. AVPN, in collaboration with Google.org and Asian Development Bank (ADB), will support workers across Asia Pacific who are most impacted by workforce transitions that are driven by AI.
                    </p>
                    <a href="https://aifundamentals.aisingapore.org/" target="_blank" rel="noopener noreferrer" class="btn btn--primary btn--sm btn--full">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- ── Interactive program detail tabs ── -->
            <h3 style="text-align:center;font-size:1.375rem;font-weight:700;margin-bottom:1.75rem;color:var(--foreground);">Programme Details</h3>

            <div class="programs-tabs" role="tablist" aria-label="AI for Good programmes">
                <button class="program-tab is-active" role="tab" aria-selected="true"  aria-controls="program-ai-ready-asean"   id="tab-ai-ready-asean"   data-target="program-ai-ready-asean">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                    <span class="tab-label-long">AI Ready ASEAN</span>
                    <span class="tab-label-short" aria-hidden="true">AI Ready</span>
                </button>
                <button class="program-tab" role="tab" aria-selected="false" aria-controls="program-ai-opp-fund"       id="tab-ai-opp-fund"       data-target="program-ai-opp-fund">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    <span class="tab-label-long">AI Opportunity Fund: APAC</span>
                    <span class="tab-label-short" aria-hidden="true">Opp. Fund</span>
                </button>
                <button class="program-tab" role="tab" aria-selected="false" aria-controls="program-ai-for-good-edu"   id="tab-ai-for-good-edu"   data-target="program-ai-for-good-edu">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16" aria-hidden="true"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                    <span class="tab-label-long">AI for Good (Educators)</span>
                    <span class="tab-label-short" aria-hidden="true">Educators</span>
                </button>
                <button class="program-tab" role="tab" aria-selected="false" aria-controls="program-ai-for-good-youth" id="tab-ai-for-good-youth" data-target="program-ai-for-good-youth">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                    <span class="tab-label-long">AI for Good (Youth)</span>
                    <span class="tab-label-short" aria-hidden="true">Youth</span>
                </button>
            </div>

            <?php
            $programs = [
                [
                    'id'           => 'ai-ready-asean',
                    'title'        => 'AI Ready ASEAN',
                    'timeline'     => 'May 2025 – Sep 2026',
                    'highlights'   => [
                        'Reach 100,000+ youths, educators, parents, and underserved communities across Singapore and ASEAN',
                        'Train 200 Master Trainers to scale AI education, reaching 6,000+ learners through downstream training',
                        'Convene national policy dialogues on AI in Education and AI for Youth',
                        'Deliver the AI Ready ASEAN Youth Challenge across all 11 ASEAN Member States',
                    ],
                    'testimonial'  => "The training was engaging and illuminating. The trainers broke down complex concepts into simple, digestible steps. It was a real 'aha' moment — realizing AI isn't a distant concept, but something we can apply in everyday life.",
                    'collaborators'=> ['ASEAN Foundation', 'Google.org', 'IMDA'],
                    'countries'    => '11 ASEAN Member States',
                ],
                [
                    'id'           => 'ai-opp-fund',
                    'title'        => 'AI Opportunity Fund: APAC',
                    'timeline'     => 'May 2025 – Jun 2027',
                    'highlights'   => [
                        'Phase 1: Co-develop regional AI curriculum, enabling scalable AI literacy across diverse markets',
                        'Develop AI training resources, toolkits, and structured learning pathways',
                        'Train 50+ trainers across 5 countries to cascade AI literacy within their communities',
                        'Phase 2: Reach 10,000+ PMETs, vocational, and university learners across 3 countries',
                    ],
                    'testimonial'  => "What I liked most is really the clear programme design and excellent (and patient) facilitation of AI Singapore. They have clearly put in a lot of thought into this programme and have really made it very informative, organized, and also quite immersive and practical.",
                    'collaborators'=> ['AVPN', 'ADB', 'Google.org'],
                    'countries'    => 'Singapore, Philippines, Pakistan, Sri Lanka, Bangladesh, Malaysia',
                ],
                [
                    'id'           => 'ai-for-good-edu',
                    'title'        => 'AI for Good (Educators)',
                    'timeline'     => 'Aug 2024 – Dec 2025',
                    'highlights'   => [
                        'Design and customise training curriculum for educators',
                        'Conduct inbound Train-the-Trainers in Singapore for 100 educators across 3 countries',
                        'Reach 10,000+ community members across respective countries',
                        'Convene AI for Good (Educator) Conference in Malaysia',
                    ],
                    'testimonial'  => null,
                    'collaborators'=> ['Meta', 'NAIO Malaysia'],
                    'countries'    => 'Malaysia, Thailand, Philippines',
                ],
                [
                    'id'           => 'ai-for-good-youth',
                    'title'        => 'AI for Good (Youth)',
                    'timeline'     => 'Jan 2025 – Present',
                    'highlights'   => [
                        'Equip youth leaders with AI literacy and pedagogy to drive peer-led initiatives',
                        'Expand access to AI learning in secondary schools through youth-led outreach',
                        'Reach 2,000+ secondary school students across Singapore',
                    ],
                    'testimonial'  => "The hands-on activities and missions made the programme really fun and engaging, and helped us apply what we learned right away. It made the learning more meaningful and gave us the confidence to use AI in real-world situations.",
                    'collaborators'=> ['Singapore Youth AI', 'National Youth Council'],
                    'countries'    => 'Singapore',
                ],
            ];
            foreach ( $programs as $idx => $prog ) :
                $is_active = $idx === 0;
            ?>
            <div
                class="program-detail <?php echo $is_active ? 'is-active' : ''; ?>"
                id="program-<?php echo esc_attr( $prog['id'] ); ?>"
                role="tabpanel"
                aria-labelledby="tab-<?php echo esc_attr( $prog['id'] ); ?>"
            >
                <div class="program-detail-inner">
                    <div class="program-detail-grid">
                        <!-- Main column -->
                        <div>
                            <div class="program-header">
                                <div class="program-icon-wrap" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                                </div>
                                <div>
                                    <h3 class="program-title"><?php echo esc_html( $prog['title'] ); ?></h3>
                                    <div class="program-timeline">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                        <span><?php echo esc_html( $prog['timeline'] ); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="program-highlights" aria-label="Programme highlights">
                                <?php foreach ( $prog['highlights'] as $i => $hl ) : ?>
                                <div class="program-highlight-item">
                                    <span class="highlight-num" aria-hidden="true"><?php echo $i + 1; ?></span>
                                    <p class="highlight-text"><?php echo esc_html( $hl ); ?></p>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <?php if ( $prog['testimonial'] ) : ?>
                            <div class="testimonial-block" aria-label="Testimonial">
                                <div class="testimonial-quote-icon" aria-hidden="true">&#8220;</div>
                                <p class="testimonial-text"><?php echo esc_html( $prog['testimonial'] ); ?></p>
                            </div>
                            <?php endif; ?>
                        </div>

                        <!-- Sidebar -->
                        <div>
                            <div class="program-meta-card">
                                <div class="program-meta-title">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="1"/><path d="M3 9h18M9 21V9"/></svg>
                                    Key Collaborators
                                </div>
                                <div class="collab-tags">
                                    <?php foreach ( $prog['collaborators'] as $c ) : ?>
                                    <span class="collab-tag"><?php echo esc_html( $c ); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="program-meta-card">
                                <div class="program-meta-title">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                                    Target Countries
                                </div>
                                <p style="font-size:.875rem;color:var(--muted-foreground);"><?php echo esc_html( $prog['countries'] ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

            <!-- In Progress programmes -->
            <h3 style="font-size:1.25rem;font-weight:700;color:var(--foreground);text-align:center;margin-bottom:1.5rem;">In Progress</h3>
            <div class="in-progress-grid">
                <?php
                $in_progress = [
                    [
                        'title'  => 'AI for Good (Community)',
                        'desc'   => 'A Train-the-Trainer programme for Social Service Agencies, enabling them to adapt AI literacy curricula for women, seniors, and underserved communities.',
                        'target' => 'Singapore',
                        'collabs'=> ['Micron Foundation', 'United Women Singapore', 'Daughters of Tomorrow'],
                    ],
                    [
                        'title'  => 'AI for Good Festival',
                        'desc'   => 'A gamified AI literacy festival making AI accessible to students from all backgrounds, featuring interactive booths, workshops, and community, youth, and industry showcases.',
                        'target' => 'Singapore',
                        'collabs'=> ['Micron Foundation', 'AWS', 'ITE', 'Republic Polytechnic'],
                    ],
                    [
                        'title'  => 'AI for Good (Global)',
                        'desc'   => 'Partnering with UNDP to co-develop AI education initiatives that advance inclusive AI readiness and capacity-building across developing regions.',
                        'target' => '2 ASEAN, 2 Caribbean, 2 Pacific Island countries',
                        'collabs'=> ['UNDP'],
                    ],
                ];
                foreach ( $in_progress as $ip ) :
                ?>
                <div class="in-progress-card">
                    <span class="coming-soon-badge">Coming Soon</span>
                    <h4><?php echo esc_html( $ip['title'] ); ?></h4>
                    <p><?php echo esc_html( $ip['desc'] ); ?></p>
                    <div class="in-progress-meta">
                        <p class="in-progress-target"><span>Target:</span> <?php echo esc_html( $ip['target'] ); ?></p>
                        <div class="collab-tags">
                            <?php foreach ( $ip['collabs'] as $c ) : ?>
                            <span class="collab-tag"><?php echo esc_html( $c ); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
    <!-- / PROGRAMS / INITIATIVES -->


    <!-- ===========================================================
         9. PARTNERS SECTION
         =========================================================== -->
    <section id="partners" class="section" aria-labelledby="partners-heading">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Our Partners</span>
                <h2 class="section-title" id="partners-heading">A Collaborative Ecosystem</h2>
                <p class="section-subtitle">
                    AI Singapore's AI for Good initiatives are powered by a diverse, cross-sector ecosystem spanning public agencies, multilateral institutions, industry, philanthropy, and community partners.
                </p>
            </div>

            <!-- Ecosystem image -->
            <div class="ecosystem-image" role="img" aria-label="AI for Good collaborative ecosystem showing all partner organisations">
                <img
                    src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/colla%20white-KthkPr8nsctFttKcAODAeIAx7mfOwv.png"
                    alt="AI for Good collaborative ecosystem diagram showing partners: ASEAN Foundation, Google.org, IMDA, AVPN, ADB, Meta, Micron Foundation, AWS, UNDP, Singapore Youth AI, National Youth Council, MUIS"
                    width="800"
                    height="533"
                    loading="lazy"
                >
            </div>

            <!-- Partner grid -->
            <div class="partners-grid">
                <?php
                $partners = [
                    'ASEAN Foundation', 'Google.org', 'IMDA', 'AVPN', 'ADB',
                    'Meta', 'Micron Foundation', 'AWS', 'UNDP', 'Singapore Youth AI',
                    'National Youth Council', 'MUIS',
                ];
                foreach ( $partners as $partner ) :
                    $initials = implode( '', array_map( fn($w) => strtoupper( $w[0] ), explode( ' ', $partner ) ) );
                    $initials = substr( $initials, 0, 2 );
                ?>
                <div class="partner-card">
                    <div class="partner-initials" aria-hidden="true"><?php echo esc_html( $initials ); ?></div>
                    <p class="partner-name"><?php echo esc_html( $partner ); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- / PARTNERS -->


    <!-- ===========================================================
         10. COLLABORATION SECTION
         =========================================================== -->
    <section class="section section--bg-card" aria-labelledby="collab-heading">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Partner With Us</span>
                <h2 class="section-title" id="collab-heading">Strategic Collaboration Opportunities</h2>
                <p class="section-subtitle">
                    Join us in scaling inclusive AI education and creating lasting impact across Southeast Asia and beyond.
                </p>
            </div>

            <div class="grid-3">
                <?php
                $opportunities = [
                    [
                        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22" aria-hidden="true"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
                        'title' => 'Strategic Investment',
                        'desc'  => 'Catalyse high-impact AI for Good initiatives and unlock scalable models',
                    ],
                    [
                        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22" aria-hidden="true"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg>',
                        'title' => 'Expertise & Thought Leadership',
                        'desc'  => 'Advance domain-driven AI applications and co-create impactful solutions',
                    ],
                    [
                        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>',
                        'title' => 'Ecosystem Access & Partnerships',
                        'desc'  => 'Activate networks to expand reach across communities and regions',
                    ],
                    [
                        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
                        'title' => 'Policy & Systems Influence',
                        'desc'  => 'Shape responsible AI adoption and contribute to national and regional agendas',
                    ],
                    [
                        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22" aria-hidden="true"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>',
                        'title' => 'Scaling Impact',
                        'desc'  => 'Translate proven initiatives into sustainable, system-level impact',
                    ],
                ];
                foreach ( $opportunities as $opp ) :
                ?>
                <div class="card">
                    <div class="card-icon"><?php echo $opp['icon']; ?></div>
                    <h3 class="card-title"><?php echo esc_html( $opp['title'] ); ?></h3>
                    <p class="card-text"><?php echo esc_html( $opp['desc'] ); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- / COLLABORATION -->


    <!-- ===========================================================
         11. CONTACT SECTION
         =========================================================== -->
    <section id="contact" class="section" aria-labelledby="contact-heading">
        <div class="container">
            <div class="contact-wrap">
                <div class="contact-blob contact-blob--1" aria-hidden="true"></div>
                <div class="contact-blob contact-blob--2" aria-hidden="true"></div>

                <div class="contact-inner">
                    <h2 class="contact-title" id="contact-heading">
                        Let's Build the Future of AI Education Together
                    </h2>
                    <p class="contact-subtitle">
                        Interested in partnering with AI Singapore on AI for Good initiatives? We'd love to hear from you.
                    </p>

                    <!-- Contact person card -->
                    <div class="contact-card">
                        <div class="contact-person">
                            <div class="contact-avatar" aria-hidden="true">CO</div>
                            <div>
                                <p class="contact-name">Chandra Ong</p>
                                <p class="contact-role">Head of Programmes &amp; Partnerships</p>
                            </div>
                        </div>
                        <a href="mailto:chandra@aisingapore.org" style="display:inline-flex;align-items:center;gap:.375rem;color:var(--primary);font-weight:600;">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            chandra@aisingapore.org
                        </a>
                    </div>

                    <!-- For enquiries — from Kadence block -->
                    <p style="font-size:.9375rem;color:var(--muted-foreground);margin-bottom:1.75rem;">
                        For further enquiries, please email
                        <a href="mailto:learn-admin@aisingapore.org" style="color:var(--primary);font-weight:600;">learn-admin@aisingapore.org</a>
                    </p>

                    <div class="contact-actions">
                        <a href="mailto:chandra@aisingapore.org" class="btn btn--primary btn--lg">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            Get in Touch
                        </a>
                        <a href="https://www.aisingapore.org" target="_blank" rel="noopener noreferrer" class="btn btn--outline btn--lg">
                            Visit AI Singapore
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16" aria-hidden="true"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / CONTACT -->

    <!-- Spacer (matching Kadence wp:spacer) -->
    <div class="spacer-100" aria-hidden="true"></div>

</main>
<!-- / MAIN CONTENT -->

<?php get_footer(); ?>
