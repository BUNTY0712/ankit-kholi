<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meet Ankit Kohli</title>
  <style>
    /* Scoped Custom CSS with ymb- Prefix to Avoid CSS Conflicts */
    .ymb-section {
      background-color: #f3f6fb;
      color: #0f172a;
      padding: 3rem 1rem;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      transition: all 0.3s ease;
      box-sizing: border-box;
    }

    .ymb-section *,
    .ymb-section *::before,
    .ymb-section *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    .ymb-container {
      max-width: 1152px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 4rem;
    }

    /* Top Section: Grid Layout */
    .ymb-grid {
      display: flex;
      flex-direction: column;
      gap: 2rem;
      align-items: center;
    }

    /* Left Column: Media Showcase */
    .ymb-media-col {
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .ymb-portrait-border {
      position: relative;
      padding: 2.5px;
      border-radius: 1.5rem;
      background: linear-gradient(to bottom, #fbbf24, #f59e0b, #d97706);
      box-shadow: 0 0 30px rgba(245, 158, 11, 0.25);
      transition: all 0.3s ease;
      max-width: 24rem;
      width: 100%;
    }

    .ymb-portrait-border:hover {
      box-shadow: 0 0 35px rgba(245, 158, 11, 0.35);
    }

    .ymb-portrait-inner {
      border-radius: 22px;
      overflow: hidden;
      background-color: #0f172a;
      aspect-ratio: 3 / 4;
    }

    .ymb-portrait-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      transition: transform 0.5s ease;
      display: block;
    }

    .ymb-portrait-inner:hover .ymb-portrait-img {
      transform: scale(1.05);
    }

    /* Thumbnails Grid */
    .ymb-thumb-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0.625rem;
      max-width: 24rem;
      width: 100%;
      margin-top: 0.875rem;
    }

    .ymb-thumb-card {
      border-radius: 0.75rem;
      overflow: hidden;
      height: 4rem;
      border: 1px solid rgba(226, 232, 240, 0.9);
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .ymb-thumb-card:hover {
      transform: scale(1.05);
    }

    .ymb-thumb-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: opacity 0.3s ease;
      display: block;
    }

    .ymb-thumb-card:hover .ymb-thumb-img {
      opacity: 0.9;
    }

    /* Right Column: Bio Content */
    .ymb-bio-col {
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
      text-align: center;
    }

    .ymb-badge-wrapper {
      display: flex;
      justify-content: center;
    }

    .ymb-pill-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.375rem;
      background-color: #e0e8f9;
      color: #1e3a8a;
      font-size: 0.75rem;
      font-weight: 600;
      padding: 0.375rem 0.875rem;
      border-radius: 9999px;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
      transition: background-color 0.2s ease;
    }

    .ymb-pill-badge:hover {
      background-color: #d0def5;
    }

    .ymb-badge-icon {
      width: 0.875rem;
      height: 0.875rem;
      flex-shrink: 0;
    }

    .ymb-title {
      font-size: 1.5rem;
      font-weight: 800;
      color: #0a1128;
      letter-spacing: -0.025em;
      line-height: 1.25;
    }

    .ymb-bio-text {
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
      color: #475569;
      font-size: 0.75rem;
      line-height: 1.625;
      max-width: 36rem;
      margin: 0 auto;
    }

    .ymb-bold {
      color: #0f172a;
      font-weight: 700;
    }

    .ymb-quote-card {
      border-left: 4px solid #f59e0b;
      padding-left: 1rem;
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
      font-style: italic;
      color: #1e293b;
      font-size: 0.75rem;
      font-weight: 600;
      background-color: rgba(254, 243, 199, 0.6);
      border-top-right-radius: 1rem;
      border-bottom-right-radius: 1rem;
      border-top: 1px solid rgba(253, 230, 138, 0.6);
      border-bottom: 1px solid rgba(253, 230, 138, 0.6);
      border-right: 1px solid rgba(253, 230, 138, 0.6);
      text-align: left;
      max-width: 36rem;
      margin: 0 auto;
    }

    /* Stats Cards Grid */
    .ymb-stats-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0.625rem;
      padding-top: 0.5rem;
      max-width: 36rem;
      margin: 0 auto;
      width: 100%;
    }

    .ymb-stat-card {
      background-color: #ffffff;
      padding: 0.875rem;
      border-radius: 1rem;
      border: 1px solid rgba(241, 245, 249, 0.9);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
      transition: all 0.3s ease;
      text-align: center;
    }

    .ymb-stat-card:hover {
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      border-color: rgba(253, 230, 138, 0.6);
    }

    .ymb-stat-number {
      font-size: 1.125rem;
      font-weight: 800;
      color: #0e2056;
      transition: color 0.2s ease;
    }

    .ymb-stat-card:hover .ymb-stat-number {
      color: #d97706;
    }

    .ymb-stat-label {
      font-size: 0.625rem;
      color: #64748b;
      font-weight: 500;
      margin-top: 0.125rem;
    }

    /* Bottom Section: Audience Audience Grid */
    .ymb-bottom-section {
      text-align: center;
      display: flex;
      flex-direction: column;
      gap: 2rem;
    }

    .ymb-audience-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 1rem;
      max-width: 64rem;
      margin: 0 auto;
      text-align: left;
      width: 100%;
    }

    .ymb-audience-card {
      background-color: #ffffff;
      padding: 1.25rem;
      border-radius: 1rem;
      border: 1px solid rgba(241, 245, 249, 0.9);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .ymb-audience-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
      border-color: rgba(191, 219, 254, 0.7);
    }

    .ymb-card-icon-box {
      width: 2.5rem;
      height: 2.5rem;
      border-radius: 0.75rem;
      background-color: rgba(239, 246, 255, 0.8);
      color: #0e2056;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
    }

    .ymb-card-icon-box svg {
      width: 1.25rem;
      height: 1.25rem;
    }

    .ymb-audience-card:hover .ymb-card-icon-box {
      background-color: #0e2056;
      color: #ffffff;
    }

    .ymb-audience-text {
      font-weight: 700;
      color: #1e293b;
      font-size: 0.75rem;
      transition: color 0.2s ease;
    }

    .ymb-audience-card:hover .ymb-audience-text {
      color: #0e2056;
    }

    /* Tablet Responsive Styles (640px+) */
    @media (min-width: 640px) {
      .ymb-section {
        padding: 4rem 1.5rem;
      }

      .ymb-container {
        gap: 5rem;
      }

      .ymb-grid {
        gap: 2.5rem;
      }

      .ymb-title {
        font-size: 2.25rem;
      }

      .ymb-bio-text {
        font-size: 0.875rem;
      }

      .ymb-quote-card {
        font-size: 0.875rem;
        padding-left: 1rem;
      }

      .ymb-stats-grid {
        gap: 0.875rem;
      }

      .ymb-stat-card {
        padding: 1rem;
      }

      .ymb-stat-number {
        font-size: 1.5rem;
      }

      .ymb-stat-label {
        font-size: 0.75rem;
      }

      .ymb-audience-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 1.25rem;
      }

      .ymb-audience-card {
        padding: 1.5rem;
      }

      .ymb-audience-text {
        font-size: 0.875rem;
      }
    }

    /* Desktop Responsive Styles (1024px+) */
    @media (min-width: 1024px) {
      .ymb-section {
        padding: 5rem 2rem;
      }

      .ymb-grid {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 3rem;
        align-items: center;
      }

      .ymb-media-col {
        grid-column: span 5;
      }

      .ymb-bio-col {
        grid-column: span 7;
        text-align: left;
        gap: 1.5rem;
      }

      .ymb-badge-wrapper {
        justify-content: flex-start;
      }

      .ymb-bio-text,
      .ymb-quote-card,
      .ymb-stats-grid {
        margin: 0;
      }

      .ymb-audience-grid {
        grid-template-columns: repeat(3, 1fr);
      }

      .ymb-audience-text {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

<section class="ymb-section">
  <div class="ymb-container">
    
    <!-- Top Section: Meet Ankit Kohli -->
    <div class="ymb-grid">
      
      <!-- Left Column: Media Showcase (Main Portrait + 3 Thumbnails) -->
      <div class="ymb-media-col">
        
        <!-- Main Portrait with Glowing Gold Border -->
        <div class="ymb-portrait-border">
          <div class="ymb-portrait-inner">
            <img 
              src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=800&q=80" 
              alt="Ankit Kohli" 
              class="ymb-portrait-img"
            />
          </div>
        </div>

        <!-- 3 Thumbnail Photos Grid -->
        <div class="ymb-thumb-grid">
          <div class="ymb-thumb-card">
            <img 
              src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?auto=format&fit=crop&w=300&q=80" 
              alt="Ankit Kohli on Stage" 
              class="ymb-thumb-img"
            />
          </div>
          <div class="ymb-thumb-card">
            <img 
              src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=300&q=80" 
              alt="Audience Event" 
              class="ymb-thumb-img"
            />
          </div>
          <div class="ymb-thumb-card">
            <img 
              src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=300&q=80" 
              alt="Live Seminar" 
              class="ymb-thumb-img"
            />
          </div>
        </div>

      </div>

      <!-- Right Column: Bio Content -->
      <div class="ymb-bio-col">
        
        <!-- Pill Badge -->
        <div class="ymb-badge-wrapper">
          <div class="ymb-pill-badge">
            <svg class="ymb-badge-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
            </svg>
            <span>Your Financial Guardian</span>
          </div>
        </div>

        <!-- Heading -->
        <h2 class="ymb-title">
          Meet Ankit Kohli
        </h2>

        <!-- Bio Paragraphs -->
        <div class="ymb-bio-text">
          <p>
            For over <strong class="ymb-bold">25 years</strong>, Ankit Kohli has personally guided families in child future planning and financial readiness.
          </p>
          <p>
            With <strong class="ymb-bold">3000+ families guided</strong> across India, he created the Child's Future Readiness Survey to give parents an honest, 3-minute mirror of where they truly stand.
          </p>
        </div>

        <!-- Quote Block -->
        <div class="ymb-quote-card">
          "A child's dream should never have to begin with financial pressure."
        </div>

        <!-- 3 Stats Cards -->
        <div class="ymb-stats-grid">
          
          <div class="ymb-stat-card">
            <div class="ymb-stat-number">25+</div>
            <div class="ymb-stat-label">Years Experience</div>
          </div>

          <div class="ymb-stat-card">
            <div class="ymb-stat-number">3000+</div>
            <div class="ymb-stat-label">Families Guided</div>
          </div>

          <div class="ymb-stat-card">
            <div class="ymb-stat-number">PAN</div>
            <div class="ymb-stat-label">India Reach</div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bottom Section: This Survey Is Made For -->
    <div class="ymb-bottom-section">
      
      <!-- Section Heading -->
      <h2 class="ymb-title">
        This Survey Is Made For:
      </h2>

      <!-- Target Audience Grid (3x2) -->
      <div class="ymb-audience-grid">
        
        <!-- Card 1 -->
        <div class="ymb-audience-card">
          <div class="ymb-card-icon-box">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
          </div>
          <span class="ymb-audience-text">Salaried Parents</span>
        </div>

        <!-- Card 2 -->
        <div class="ymb-audience-card">
          <div class="ymb-card-icon-box">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
            </svg>
          </div>
          <span class="ymb-audience-text">Business Owners</span>
        </div>

        <!-- Card 3 -->
        <div class="ymb-audience-card">
          <div class="ymb-card-icon-box">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
          </div>
          <span class="ymb-audience-text">Parents Of Young Children</span>
        </div>

        <!-- Card 4 -->
        <div class="ymb-audience-card">
          <div class="ymb-card-icon-box">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
            </svg>
          </div>
          <span class="ymb-audience-text">Planning Higher Education</span>
        </div>

        <!-- Card 5 -->
        <div class="ymb-audience-card">
          <div class="ymb-card-icon-box">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="9" stroke-width="2"></circle>
              <circle cx="12" cy="12" r="5" stroke-width="2"></circle>
              <circle cx="12" cy="12" r="1.5" fill="currentColor"></circle>
            </svg>
          </div>
          <span class="ymb-audience-text">Want Structured Planning</span>
        </div>

        <!-- Card 6 -->
        <div class="ymb-audience-card">
          <div class="ymb-card-icon-box">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
            </svg>
          </div>
          <span class="ymb-audience-text">Avoid Education Loans</span>
        </div>

      </div>

    </div>

  </div>
</section>

</body>
</html>