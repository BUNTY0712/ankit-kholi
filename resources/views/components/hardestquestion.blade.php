<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Hardest Question</title>
  <style>
    /* Reset & Base Styles */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      background-color: #f6f1ea;
    }

    /* Section & Container */
    .hero-section {
      position: relative;
      overflow: hidden;
      background: linear-gradient(135deg, #f6f1ea 0%, #f0e9df 50%, #e7ded0 100%);
      color: #0f172a;
      padding: 3rem 1rem;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    /* Background Glow Effects */
    .glow-top-left {
      position: absolute;
      top: -8rem;
      left: -8rem;
      width: 20rem;
      height: 20rem;
      background-color: rgba(245, 158, 11, 0.12);
      border-radius: 9999px;
      filter: blur(48px);
      pointer-events: none;
    }

    .glow-bottom-right {
      position: absolute;
      bottom: -8rem;
      right: -8rem;
      width: 20rem;
      height: 20rem;
      background-color: rgba(217, 119, 6, 0.1);
      border-radius: 9999px;
      filter: blur(48px);
      pointer-events: none;
    }

    .hero-container {
      max-width: 1152px;
      width: 100%;
      position: relative;
      z-index: 10;
      display: flex;
      flex-direction: column;
      gap: 2rem;
      align-items: center;
    }

    /* Left Column Content */
    .content-col {
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
      text-align: center;
    }

    .pill-badge-wrapper {
      display: flex;
      justify-content: center;
    }

    .pill-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background-color: #eee4d5;
      color: #92400e;
      border-radius: 9999px;
      padding: 0.375rem 1rem;
      font-size: 0.75rem;
      font-weight: 800;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
      transition: background-color 0.2s ease;
    }

    .pill-badge:hover {
      background-color: #e5d8c5;
    }

    .badge-icon {
      width: 0.875rem;
      height: 0.875rem;
      color: #d97706;
      flex-shrink: 0;
    }

    .main-heading {
      font-size: 1.5rem;
      font-weight: 800;
      letter-spacing: -0.025em;
      line-height: 1.25;
      color: #0f172a;
    }

    .highlight-text {
      color: #b45309;
    
    }

    .description-box {
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
      color: #475569;
      font-size: 0.875rem;
      line-height: 1.625;
      padding-top: 0.25rem;
      max-width: 36rem;
      margin: 0 auto;
    }

    .callout-card {
      font-weight: 700;
      color: #1e293b;
      background-color: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(12px);
      padding: 1rem;
      border-radius: 1rem;
      border: 1px solid #e2d8ce;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
    }

    .action-container {
      padding-top: 0.5rem;
    }

    .cta-button {
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

    .cta-button:hover {
      background: linear-gradient(to right, #f59e0b, #ea580c);
      box-shadow: 0 10px 20px -3px rgba(245, 158, 11, 0.3);
    }

    .cta-button:active {
      transform: scale(0.95);
    }

    /* Right Column Video Card */
    .video-col {
      width: 100%;
      display: flex;
      justify-content: center;
    }

    .video-card-border {
      position: relative;
      width: 100%;
      max-width: 20rem; /* ~320px */
      border-radius: 1.5rem;
      padding: 2.5px;
      background: linear-gradient(to bottom, #fbbf24, #f59e0b, #d97706);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
      transition: all 0.3s ease;
    }

    .video-card-border:hover {
      box-shadow: 0 20px 25px -5px rgba(245, 158, 11, 0.2);
    }

    .video-card-inner {
      position: relative;
      border-radius: 22px;
      overflow: hidden;
      background-color: #0f172a;
      aspect-ratio: 3 / 4;
    }

    .video-thumb-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      transition: transform 0.5s ease;
      display: block;
    }

    .video-card-inner:hover .video-thumb-img {
      transform: scale(1.05);
    }

    .video-dark-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom, rgba(2, 6, 23, 0.5) 0%, rgba(2, 6, 23, 0.2) 50%, rgba(2, 6, 23, 0.85) 100%);
      pointer-events: none;
    }

    .video-top-badge {
      position: absolute;
      top: 1rem;
      left: 1rem;
      z-index: 10;
    }

    .watch-badge-pill {
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

    .video-icon {
      width: 0.875rem;
      height: 0.875rem;
      color: #fbbf24;
      flex-shrink: 0;
    }

    .video-play-overlay {
      position: absolute;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 10;
    }

    .play-btn {
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

    .play-btn:hover {
      background-color: #dc2626;
      transform: scale(1.1);
      box-shadow: 0 20px 25px -5px rgba(220, 38, 38, 0.5);
    }

    .play-btn:active {
      transform: scale(0.95);
    }

    .play-svg {
      width: 1.75rem;
      height: 1.75rem;
      fill: currentColor;
      transform: translateX(2px);
    }

    .subtitle-pill-box {
      position: absolute;
      bottom: 3.5rem;
      left: 1rem;
      right: 1rem;
      text-align: center;
      z-index: 10;
    }

    .subtitle-pill {
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

    .video-caption-box {
      position: absolute;
      bottom: 0.75rem;
      left: 1rem;
      right: 1rem;
      text-align: center;
      z-index: 10;
    }

    .video-caption-text {
      color: #cbd5e1;
      font-size: 0.75rem;
      line-height: 1.375;
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    }

    .iframe-embed {
      width: 100%;
      height: 100%;
      border-radius: 22px;
      border: none;
    }

    /* Tablet Responsive Styles (640px+) */
    @media (min-width: 640px) {
      .hero-section {
        padding: 4rem 1.5rem;
      }

      .hero-container {
        gap: 2.5rem;
      }

      .main-heading {
        font-size: 2.25rem;
      }

      .description-box {
        font-size: 1rem;
        gap: 1rem;
      }

      .cta-button {
        width: auto;
        font-size: 1rem;
      }

      .video-card-border {
        max-width: 24rem; /* ~384px */
      }

      .video-card-inner {
        aspect-ratio: 10 / 16;
      }

      .play-btn {
        width: 4rem;
        height: 4rem;
      }

      .subtitle-pill-box {
        bottom: 4.5rem;
      }

      .subtitle-pill {
        font-size: 1rem;
      }

      .video-caption-box {
        bottom: 1.25rem;
        left: 1.25rem;
        right: 1.25rem;
      }

      .video-caption-text {
        font-size: 0.875rem;
      }
    }

    /* Desktop Responsive Styles (1024px+) */
    @media (min-width: 1024px) {
      .hero-section {
        padding: 5rem 3rem;
      }

      .hero-container {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 4rem;
      }

      .content-col {
        grid-column: span 7;
        text-align: left;
        gap: 1.5rem;
      }

      .pill-badge-wrapper {
        justify-content: flex-start;
      }

      .main-heading {
        font-size: 3rem;
        line-height: 1.15;
      }

      .description-box {
        margin: 0;
      }

      .video-col {
        grid-column: span 5;
        justify-content: flex-end;
      }

      .video-caption-box {
        text-align: left;
      }
    }
  </style>
</head>
<body>

<section class="hero-section">
  <!-- Subtle Background Glows -->
  <div class="glow-top-left"></div>
  <div class="glow-bottom-right"></div>

  <div class="hero-container">
    
    <!-- Left Column: Content & CTA -->
    <div class="content-col">
      
      <!-- Pill Badge -->
      <div class="pill-badge-wrapper">
        <div class="pill-badge">
          <svg class="badge-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
          </svg>
          <span>The Hardest Question</span>
        </div>
      </div>

      <!-- Main Headline -->
      <h1 class="main-heading">
        If Something Happens To You Tomorrow — Will Your Child's Future <span class="highlight-text">Still Continue?</span>
      </h1>

      <!-- Description Paragraphs -->
      <div class="description-box">
        <p>
          This is the one question most parents avoid. But it's also the one that decides whether your child's dream survives beyond you.
        </p>
        <div class="callout-card">
          The Readiness Survey answers it honestly — so you can act before life forces you to.
        </div>
      </div>

      <!-- Action Button -->
      <div class="action-container">
        <a href="https://rzp.io/rzp/mosB0TR" target="_blank" rel="noopener noreferrer" class="cta-button" style="text-decoration: none;">
          <span style="font-size: 1.125rem;">🎯</span>
          <span>Book My Confidential Survey</span>
        </a>
      </div>

    </div>

    <!-- Right Column: Video Card -->
    <div class="video-col">
      
      <!-- Video Container with Gold Border Accent -->
      <div class="video-card-border">
        <div id="hardestquestion-video-container" class="video-card-inner">
          <iframe 
            class="iframe-embed" 
            src="https://www.youtube.com/embed/QOWQBdkjuQA?autoplay=1&mute=1&playlist=QOWQBdkjuQA&loop=1&rel=0&enablejsapi=1" 
            title="If Something Happens To You Tomorrow Will Your Child Future Still Continue?" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen>
          </iframe>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Embedded Video Loader Script -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const playBtn = document.getElementById('hardestquestion-play-btn');
    const container = document.getElementById('hardestquestion-video-container');
    
    if (playBtn && container) {
      playBtn.addEventListener('click', function() {
        container.innerHTML = `
          <iframe 
            class="iframe-embed" 
            src="https://www.youtube.com/embed/QOWQBdkjuQA?autoplay=1&mute=1&playlist=QOWQBdkjuQA&loop=1&rel=0&enablejsapi=1" 
            title="If Something Happens To You Tomorrow Will Your Child Future Still Continue?" 
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