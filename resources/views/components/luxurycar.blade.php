<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Priority Question</title>
  <style>
    /* Scoped Reset & Base Styles to Prevent External CSS Interference */
    .pq-section-wrapper {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      box-sizing: border-box;
      background-color: #f8fafc;
    }

    .pq-section-wrapper *,
    .pq-section-wrapper *::before,
    .pq-section-wrapper *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    /* Section & Container Layout */
    .pq-priority-section {
      background-color: rgba(248, 250, 252, 0.7);
      color: #0f172a;
      padding: 3rem 1rem;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    .pq-priority-container {
      max-width: 1152px;
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 2rem;
      align-items: center;
    }

    /* Video Column & Container */
    .pq-video-col {
      width: 100%;
      display: flex;
      justify-content: center;
    }

    .pq-video-border-accent {
      position: relative;
      width: 100%;
      max-width: 20rem; /* ~320px */
      border-radius: 1.5rem;
      padding: 2.5px;
      background: linear-gradient(to bottom, #fbbf24, #f59e0b, #d97706);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
      transition: all 0.3s ease;
    }

    .pq-video-border-accent:hover {
      box-shadow: 0 20px 25px -5px rgba(245, 158, 11, 0.2);
    }

    .pq-video-inner-card {
      position: relative;
      border-radius: 22px;
      overflow: hidden;
      background-color: #0f172a;
      aspect-ratio: 3 / 4;
    }

    .pq-video-thumb-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      transition: transform 0.5s ease;
      display: block;
    }

    .pq-video-inner-card:hover .pq-video-thumb-img {
      transform: scale(1.05);
    }

    .pq-video-dark-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom, rgba(2, 6, 23, 0.5) 0%, rgba(2, 6, 23, 0.2) 50%, rgba(2, 6, 23, 0.85) 100%);
      pointer-events: none;
    }

    /* Video Badges & Play Button Overlay */
    .pq-video-top-badge {
      position: absolute;
      top: 1rem;
      left: 1rem;
      z-index: 10;
    }

    .pq-watch-badge-pill {
      display: inline-flex;
      align-items: center;
      gap: 0.375rem;
      background-color: rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 9999px;
      padding: 0.25rem 0.75rem;
      font-size: 0.75rem;
      font-weight: 600;
      color: #ffffff;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .pq-badge-icon {
      width: 0.875rem;
      height: 0.875rem;
      color: #fbbf24;
      flex-shrink: 0;
    }

    .pq-video-play-overlay {
      position: absolute;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 10;
    }

    .pq-play-btn {
      width: 3.5rem;
      height: 3.5rem;
      background-color: rgba(220, 38, 38, 0.9);
      color: #ffffff;
      border-radius: 9999px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
      backdrop-filter: blur(4px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .pq-play-btn:hover {
      background-color: #dc2626;
      transform: scale(1.1);
      box-shadow: 0 20px 25px -5px rgba(220, 38, 38, 0.5);
    }

    .pq-play-btn:active {
      transform: scale(0.95);
    }

    .pq-play-svg {
      width: 1.75rem;
      height: 1.75rem;
      fill: currentColor;
      transform: translateX(2px);
    }

    .pq-subtitle-pill-box {
      position: absolute;
      bottom: 4rem;
      left: 1rem;
      right: 1rem;
      text-align: center;
      z-index: 10;
    }

    .pq-subtitle-pill {
      background-color: rgba(0, 0, 0, 0.85);
      backdrop-filter: blur(8px);
      color: #fbbf24;
      font-weight: 800;
      font-size: 0.875rem;
      padding: 0.375rem 0.875rem;
      border-radius: 0.5rem;
      border: 1px solid rgba(251, 191, 36, 0.3);
      letter-spacing: 0.025em;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      display: inline-block;
    }

    .pq-video-caption-box {
      position: absolute;
      bottom: 1rem;
      left: 1rem;
      right: 1rem;
      text-align: center;
      z-index: 10;
    }

    .pq-video-caption-text {
      color: #e2e8f0;
      font-size: 0.75rem;
      font-weight: 500;
      line-height: 1.375;
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    }

    /* Embedded Video Frame */
    .pq-iframe-embed {
      width: 100%;
      height: 100%;
      border-radius: 22px;
      border: none;
    }

    /* Text & Content Column */
    .pq-content-col {
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
      text-align: center;
    }

    .pq-badge-wrapper {
      display: flex;
      justify-content: center;
    }

    .pq-priority-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background-color: rgba(254, 243, 199, 0.8);
      border: 1px solid rgba(253, 230, 138, 0.9);
      border-radius: 9999px;
      padding: 0.375rem 0.875rem;
      font-size: 0.75rem;
      font-weight: 600;
      color: #92400e;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
      transition: background-color 0.2s ease;
    }

    .pq-priority-badge:hover {
      background-color: #fef3c7;
    }

    .pq-badge-icon-amber {
      width: 0.875rem;
      height: 0.875rem;
      color: #d97706;
      flex-shrink: 0;
    }

    .pq-main-heading {
      font-size: 1.5rem;
      font-weight: 800;
      letter-spacing: -0.025em;
      line-height: 1.25;
      color: #0a1128;
    }

    .pq-heading-break {
      display: none;
    }

    .pq-highlight-underline {
      color: #0e21a0;
  
    }

    .pq-description-box {
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
      color: #475569;
      font-size: 0.875rem;
      line-height: 1.625;
      max-width: 36rem;
      margin: 0 auto;
    }

    .pq-description-bold {
      font-weight: 700;
      color: #0f172a;
    }

    .pq-action-container {
      padding-top: 0.5rem;
    }

    .pq-cta-button {
      width: 100%;
      background: linear-gradient(to right, #fbbf24, #f59e0b, #f97316);
      color: #020617;
      font-weight: 800;
      font-size: 0.875rem;
      padding: 1rem 2rem;
      border-radius: 1rem;
      border: none;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.625rem;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .pq-cta-button:hover {
      background: linear-gradient(to right, #f59e0b, #ea580c);
      box-shadow: 0 10px 15px -3px rgba(245, 158, 11, 0.25);
    }

    .pq-cta-button:active {
      transform: scale(0.95);
    }

    /* Tablet Responsive Styles (640px+) */
    @media (min-width: 640px) {
      .pq-priority-section {
        padding: 4rem 1.5rem;
      }

      .pq-priority-container {
        gap: 2.5rem;
      }

      .pq-video-border-accent {
        max-width: 24rem; /* ~384px */
      }

      .pq-video-inner-card {
        aspect-ratio: 10 / 16;
      }

      .pq-play-btn {
        width: 4rem;
        height: 4rem;
      }

      .pq-play-svg {
        width: 1.75rem;
        height: 1.75rem;
      }

      .pq-subtitle-pill-box {
        bottom: 5rem;
      }

      .pq-subtitle-pill {
        font-size: 1rem;
      }

      .pq-video-caption-box {
        bottom: 1.5rem;
        left: 1.25rem;
        right: 1.25rem;
      }

      .pq-video-caption-text {
        font-size: 0.875rem;
      }

      .pq-heading-break {
        display: inline;
      }

      .pq-main-heading {
        font-size: 2.25rem;
      }

      .pq-description-box {
        font-size: 1rem;
        gap: 1rem;
      }

      .pq-cta-button {
        width: auto;
        font-size: 1rem;
      }
    }

    /* Desktop Responsive Styles (1024px+) */
    @media (min-width: 1024px) {
      .pq-priority-section {
        padding: 5rem 3rem;
      }

      .pq-priority-container {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 4rem;
      }

      .pq-video-col {
        grid-column: span 5;
        justify-content: flex-start;
      }

      .pq-video-caption-box {
        text-align: left;
      }

      .pq-content-col {
        grid-column: span 7;
        text-align: left;
        gap: 1.5rem;
      }

      .pq-badge-wrapper {
        justify-content: flex-start;
      }

      .pq-main-heading {
        font-size: 3rem;
        line-height: 1.15;
      }

      .pq-description-box {
        margin: 0;
      }
    }
  </style>
</head>
<body>

<div class="pq-section-wrapper">
  <section class="pq-priority-section">
    <div class="pq-priority-container">
      
      <!-- Left Column: Video Card -->
      <div class="pq-video-col">
        
        <!-- Video Container with Gold Border Accent -->
        <div class="pq-video-border-accent">
          <div id="luxurycar-video-container" class="pq-video-inner-card">
            
            <!-- Portrait Video Thumbnail -->
            <img 
              id="luxurycar-video-thumb"
              src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=800&q=80" 
              alt="Presenter video portrait" 
              class="pq-video-thumb-img"
            />

            <!-- Dark Gradient Overlay -->
            <div class="pq-video-dark-overlay"></div>

            <!-- Top Badge: Watch -->
            <div class="pq-video-top-badge">
              <div class="pq-watch-badge-pill">
                <svg class="pq-badge-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                </svg>
                <span>3-Min Video</span>
              </div>
            </div>

            <!-- Center Play Button -->
            <div class="pq-video-play-overlay">
              <button 
                id="luxurycar-play-btn"
                aria-label="Play Portrait Video"
                class="pq-play-btn"
              >
                <svg class="pq-play-svg" viewBox="0 0 24 24">
                  <path d="M8 5v14l11-7z" />
                </svg>
              </button>
            </div>

            <!-- Subtitle Pill Accent -->
            <div class="pq-subtitle-pill-box">
              <span class="pq-subtitle-pill">
                3-Min Readiness Check ⏱️
              </span>
            </div>

            <!-- Bottom Caption Overlay -->
            <div class="pq-video-caption-box">
              <p class="pq-video-caption-text">
                A luxury car today... or your child's higher education tomorrow?
              </p>
            </div>

          </div>
        </div>

      </div>

      <!-- Right Column: Text & CTA Content -->
      <div class="pq-content-col">
        
        <!-- Pill Badge -->
        <div class="pq-badge-wrapper">
          <div class="pq-priority-badge">
            <svg class="pq-badge-icon-amber" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
            </svg>
            <span>The Priority Question</span>
          </div>
        </div>

        <!-- Main Headline -->
        <h1 class="pq-main-heading">
          A Luxury Car Today... <br class="pq-heading-break" />
          Or Your Child's <span class="pq-highlight-underline">Higher Education</span> Tomorrow?
        </h1>

        <!-- Description Paragraphs -->
        <div class="pq-description-box">
          <p>
            Every rupee has a choice. Many families realize — often too late — that today's lifestyle upgrades quietly cost tomorrow's admission letter.
          </p>
          <p class="pq-description-bold">
            The survey doesn't judge your lifestyle. It simply reveals whether your money is aligned with what matters most to you.
          </p>
        </div>

        <!-- Action Button -->
        <div class="pq-action-container">
          <button class="pq-cta-button">
            <span style="font-size: 1.125rem;">🎯</span>
            <span>Take The 3-Min Readiness Survey</span>
          </button>
        </div>

      </div>

    </div>
  </section>
</div>

<!-- Embedded Video Loader Script -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const playBtn = document.getElementById('luxurycar-play-btn');
    const container = document.getElementById('luxurycar-video-container');
    
    if (playBtn && container) {
      playBtn.addEventListener('click', function() {
        container.innerHTML = `
          <iframe 
            class="pq-iframe-embed" 
            src="https://www.youtube.com/embed/M7lc1UVf-VE?autoplay=1&mute=1&rel=0" 
            title="A Luxury Car Today or Your Child Higher Education Tomorrow?" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen>
          </iframe>
        `;
      });
    }
  });
</script>

</body>
</html>