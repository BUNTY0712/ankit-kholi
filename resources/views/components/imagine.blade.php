<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Moment No Parent Wants</title>
  <style>
    /* Scoped Base & Reset to Avoid Global CSS Interference */
    .npw-section-wrapper {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      box-sizing: border-box;
      background-color: #f6f1ea;
    }

    .npw-section-wrapper *,
    .npw-section-wrapper *::before,
    .npw-section-wrapper *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    /* Section & Container */
    .npw-story-section {
      background-color: #f6f1ea;
      color: #0f172a;
      padding: 2rem 0.875rem;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    .npw-story-container {
      max-width: 1152px;
      width: 100%;
      background-color: rgba(255, 255, 255, 0.9);
      border: 1px solid #e2d8ce;
      border-radius: 1.5rem;
      padding: 1rem;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.04);
      backdrop-filter: blur(16px);
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
      align-items: center;
    }

    /* Left Column Content */
    .npw-content-col {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      text-align: center;
      width: 100%;
    }

    /* Header Pill Badge */
    .npw-badge-wrapper {
      display: flex;
      justify-content: center;
    }

    .npw-pill-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background-color: #fef2f2;
      border: 1px solid rgba(254, 202, 202, 0.9);
      border-radius: 9999px;
      padding: 0.375rem 0.875rem;
      font-size: 0.75rem;
      font-weight: 700;
      color: #dc2626;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
      transition: background-color 0.2s ease;
    }

    .npw-pill-badge:hover {
      background-color: rgba(254, 226, 226, 0.8);
    }

    .npw-ping-container {
      position: relative;
      display: flex;
      height: 0.5rem;
      width: 0.5rem;
    }

    .npw-ping-dot {
      position: absolute;
      display: inline-flex;
      height: 100%;
      width: 100%;
      border-radius: 9999px;
      background-color: #ef4444;
      opacity: 0.75;
      animation: npw-ping-anim 1s cubic-bezier(0, 0, 0.2, 1) infinite;
    }

    .npw-static-dot {
      position: relative;
      display: inline-flex;
      border-radius: 9999px;
      height: 0.5rem;
      width: 0.5rem;
      background-color: #dc2626;
    }

    .npw-badge-icon {
      width: 0.875rem;
      height: 0.875rem;
      color: #ef4444;
      flex-shrink: 0;
    }

    /* Main Headline */
    .npw-main-heading {
      font-size: 1.5rem;
      font-weight: 900;
      letter-spacing: -0.025em;
      line-height: 1.375;
      color: #0a1128;
    }

    .npw-highlight-box {
      color: #ef4444;
      background-color: rgba(254, 226, 226, 0.7);
      padding: 0.125rem 0.5rem;
      border-radius: 0.75rem;
      border: 1px solid rgba(254, 202, 202, 0.8);
      display: inline-block;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    /* Description Paragraphs */
    .npw-description-box {
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
      color: #475569;
      font-size: 0.75rem;
      line-height: 1.625;
      padding-top: 0.25rem;
      max-width: 42rem;
      margin: 0 auto;
    }

    .npw-callout-box {
      font-weight: 800;
      color: #0f172a;
      background: linear-gradient(to right, rgba(254, 242, 242, 0.9), #ffffff, rgba(254, 243, 199, 0.7));
      padding: 1rem;
      border-radius: 1rem;
      border: 1px solid rgba(254, 226, 226, 0.9);
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      font-size: 0.75rem;
    }

    /* Right Column Video Player */
    .npw-video-col {
      display: flex;
      justify-content: center;
      width: 100%;
    }

    .npw-video-card-border {
      position: relative;
      width: 100%;
      max-width: 310px;
      border-radius: 1.5rem;
      padding: 2px;
      background: linear-gradient(to bottom, #fbbf24, #f59e0b, #d97706);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
      transition: all 0.3s ease;
    }

    .npw-video-card-border:hover {
      box-shadow: 0 20px 25px -5px rgba(245, 158, 11, 0.2);
    }

    .npw-video-card-inner {
      position: relative;
      border-radius: 22px;
      overflow: hidden;
      background-color: #0f172a;
      aspect-ratio: 3 / 4;
    }

    .npw-video-player {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      transition: transform 0.5s ease;
      display: block;
    }

    .npw-video-card-inner:hover .npw-video-player {
      transform: scale(1.05);
    }

    .npw-video-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom, rgba(2, 6, 23, 0.6) 0%, transparent 50%, rgba(2, 6, 23, 0.9) 100%);
      pointer-events: none;
    }

    .npw-video-top-badge {
      position: absolute;
      top: 0.875rem;
      left: 0.875rem;
      pointer-events: none;
      z-index: 10;
    }

    .npw-badge-pill {
      display: inline-flex;
      align-items: center;
      gap: 0.375rem;
      background-color: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 9999px;
      padding: 0.25rem 0.75rem;
      font-size: 0.6875rem;
      font-weight: 700;
      color: #ffffff;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .npw-camera-icon {
      width: 0.875rem;
      height: 0.875rem;
      color: #fbbf24;
      flex-shrink: 0;
    }

    .npw-video-caption-box {
      position: absolute;
      bottom: 0.875rem;
      left: 0.875rem;
      right: 0.875rem;
      text-align: center;
      pointer-events: none;
      z-index: 10;
    }

    .npw-video-caption {
      color: #f8fafc;
      font-weight: 600;
      font-size: 0.75rem;
      line-height: 1.375;
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    }

    /* Keyframe Animations */
    @keyframes npw-ping-anim {
      75%, 100% {
        transform: scale(2);
        opacity: 0;
      }
    }

    /* Tablet Responsive Styles (640px+) */
    @media (min-width: 640px) {
      .npw-story-section {
        padding: 4rem 1.5rem;
      }

      .npw-story-container {
        background-color: transparent;
        border: none;
        border-radius: 0;
        padding: 0;
        box-shadow: none;
        backdrop-filter: none;
        gap: 2.5rem;
      }

      .npw-content-col {
        gap: 1.5rem;
      }

      .npw-main-heading {
        font-size: 2.25rem;
        line-height: 1.25;
      }

      .npw-description-box {
        font-size: 1rem;
        gap: 1rem;
      }

      .npw-callout-box {
        padding: 1.25rem;
        font-size: 1rem;
        border-radius: 1rem;
      }

      .npw-video-card-border {
        max-width: 380px;
      }

      .npw-video-card-inner {
        aspect-ratio: 10 / 16;
      }

      .npw-video-caption-box {
        bottom: 1.5rem;
        left: 1.25rem;
        right: 1.25rem;
      }

      .npw-video-caption {
        font-size: 0.875rem;
      }
    }

    /* Desktop Responsive Styles (1024px+) */
    @media (min-width: 1024px) {
      .npw-story-section {
        padding: 5rem 3rem;
      }

      .npw-story-container {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 4rem;
        align-items: center;
      }

      .npw-content-col {
        grid-column: span 7;
        text-align: left;
      }

      .npw-badge-wrapper {
        justify-content: flex-start;
      }

      .npw-main-heading {
        font-size: 2.875rem;
        line-height: 1.16;
      }

      .npw-description-box {
        margin: 0;
      }

      .npw-video-col {
        grid-column: span 5;
        justify-content: flex-end;
      }

      .npw-video-caption-box {
        text-align: left;
      }
    }
  </style>
</head>
<body>

<div class="npw-section-wrapper">
  <section class="npw-story-section">
    <!-- Container Shell Wrapper -->
    <div class="npw-story-container">
      
      <!-- Left Column Content -->
      <div class="npw-content-col">
        
        <!-- Pill Badge -->
        <div class="npw-badge-wrapper">
          <div class="npw-pill-badge">
            <span class="npw-ping-container">
              <span class="npw-ping-dot"></span>
              <span class="npw-static-dot"></span>
            </span>
            <svg class="npw-badge-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
            <span>The Moment No Parent Wants</span>
          </div>
        </div>

        <!-- Main Headline -->
        <h1 class="npw-main-heading">
          Imagine Your Child Asking For Their Dream... And Hearing <span class="npw-highlight-box">"We Don't Have Money."</span>
        </h1>

        <!-- Description Paragraphs -->
        <div class="npw-description-box">
          <p>
            A child's ambition is priceless. But every year, thousands of parents are forced to say "no" — not because the dream was too big, but because the plan started too late.
          </p>
          <div class="npw-callout-box">
            The Child's Future Readiness Survey helps you make sure you never have to say those words.
          </div>
        </div>

      </div>

      <!-- Right Column Video Player -->
      <div class="npw-video-col">
        
        <!-- Video Border Accent Container -->
        <div class="npw-video-card-border">
          <div class="npw-video-card-inner">
            
            <!-- Portrait Video Element -->
            <iframe
              class="npw-video-player"
              src="https://www.youtube.com/embed/mfQUv2bj0Bs?autoplay=1&mute=1&playlist=mfQUv2bj0Bs&loop=1&rel=0&enablejsapi=1"
              title="YouTube video player"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
              style="border: none;"
            ></iframe>

            <!-- Gradient Dark Overlay -->
            <div class="npw-video-overlay"></div>

            <!-- Top Badge -->
            <div class="npw-video-top-badge">
              <div class="npw-badge-pill">
                <svg class="npw-camera-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                </svg>
                <span>Watch Story</span>
              </div>
            </div>

            <!-- Bottom Caption Overlay -->
            <div class="npw-video-caption-box">
              <p class="npw-video-caption">
                A child's silent question every parent must be ready to answer.
              </p>
            </div>

          </div>
        </div>

      </div>

    </div>
  </section>
</div>

</body>
</html>