<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Child's Future Readiness Survey</title>
  <style>
    /* Scoped Reset & Base Styles to Avoid Global Conflicts */
    .hero-section-root {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      box-sizing: border-box;
      background-color: #0a1128;
    }

    .hero-section-root *,
    .hero-section-root *::before,
    .hero-section-root *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    /* Hero Section Container */
    .hero-main-section {
      position: relative;
      overflow: hidden;
      background: linear-gradient(135deg, #0a1128 0%, #0e1638 50%, #1c2754 100%);
      color: #ffffff;
      padding: 2rem 0.875rem;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    /* Glow Backgrounds */
    .hero-glow-top-left {
      position: absolute;
      top: -8rem;
      left: -8rem;
      width: 24rem;
      height: 24rem;
      background-color: rgba(245, 158, 11, 0.1);
      border-radius: 9999px;
      filter: blur(48px);
      pointer-events: none;
    }

    .hero-glow-bottom-right {
      position: absolute;
      bottom: -8rem;
      right: -8rem;
      width: 24rem;
      height: 24rem;
      background-color: rgba(37, 99, 235, 0.15);
      border-radius: 9999px;
      filter: blur(48px);
      pointer-events: none;
    }

    /* Main Container & Layout */
    .hero-layout-container {
      max-width: 1280px;
      width: 100%;
      position: relative;
      z-index: 10;
      background-color: rgba(13, 22, 54, 0.6);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 1.5rem;
      padding: 1rem;
      backdrop-filter: blur(16px);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    /* Left Column Content */
    .hero-content-col {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      text-align: center;
    }

    /* Pill Badge */
    .hero-pill-wrapper {
      display: flex;
      justify-content: center;
    }

    .hero-pill-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background-color: rgba(28, 39, 84, 0.9);
      border: 1px solid rgba(251, 191, 36, 0.4);
      border-radius: 9999px;
      padding: 0.375rem 0.875rem;
      font-size: 0.75rem;
      font-weight: 700;
      color: #fde68a;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(8px);
      transition: background-color 0.2s ease;
    }

    .hero-pill-badge:hover {
      background-color: #25336d;
    }

    .hero-ping-container {
      position: relative;
      display: flex;
      height: 0.5rem;
      width: 0.5rem;
    }

    .hero-ping-dot {
      position: absolute;
      display: inline-flex;
      height: 100%;
      width: 100%;
      border-radius: 9999px;
      background-color: #fbbf24;
      opacity: 0.75;
      animation: hero-ping-anim 1s cubic-bezier(0, 0, 0.2, 1) infinite;
    }

    .hero-static-dot {
      position: relative;
      display: inline-flex;
      border-radius: 9999px;
      height: 0.5rem;
      width: 0.5rem;
      background-color: #fbbf24;
    }

    .hero-badge-svg {
      width: 0.875rem;
      height: 0.875rem;
      flex-shrink: 0;
      color: #fbbf24;
    }

    /* Main Headline */
    .hero-main-title {
      font-size: 1.5rem;
      font-weight: 900;
      letter-spacing: -0.025em;
      color: #ffffff;
      line-height: 1.375;
    }

    .hero-highlight-span {
      color: #fca510;
      background-color: rgba(245, 158, 11, 0.1);
      padding: 0.125rem 0.5rem;
      border-radius: 0.75rem;
      border: 1px solid rgba(251, 191, 36, 0.3);
      display: inline-block;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    /* Description */
    .hero-text-description {
      color: #cbd5e1;
      font-size: 0.75rem;
      line-height: 1.625;
      max-width: 36rem;
      margin: 0 auto;
    }

    /* Feature Badges Container */
    .hero-feature-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 0.5rem;
      padding-top: 0.25rem;
    }

    .hero-feature-badge {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.375rem;
      background-color: rgba(23, 34, 77, 0.9);
      border: 1px solid #2e3e78;
      border-radius: 0.75rem;
      padding: 0.5rem 0.75rem;
      font-size: 0.75rem;
      font-weight: 600;
      color: #e2e8f0;
      backdrop-filter: blur(4px);
      transition: all 0.2s ease;
    }

    .hero-feature-badge:hover {
      border-color: rgba(251, 191, 36, 0.5);
    }

    .hero-feature-svg {
      width: 1rem;
      height: 1rem;
      color: #fbbf24;
      flex-shrink: 0;
    }

    /* Action CTA Section */
    .hero-action-box {
      padding-top: 0.5rem;
      display: flex;
      flex-direction: column;
      gap: 0.625rem;
    }

    .hero-cta-button {
      width: 100%;
      background: linear-gradient(to right, #fbbf24, #f59e0b, #f97316);
      color: #020617;
      font-weight: 900;
      padding: 1rem 1.5rem;
      border-radius: 1rem;
      box-shadow: 0 20px 25px -5px rgba(245, 158, 11, 0.25);
      border: none;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.625rem;
      font-size: 0.875rem;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .hero-cta-button:hover {
      background: linear-gradient(to right, #f59e0b, #ea580c);
    }

    .hero-cta-button:active {
      transform: scale(0.98);
    }

    .hero-cta-button svg {
      width: 1.25rem;
      height: 1.25rem;
      flex-shrink: 0;
    }

    .hero-cta-note {
      color: #94a3b8;
      font-size: 0.6875rem;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.375rem;
    }

    .hero-note-svg {
      width: 0.875rem;
      height: 0.875rem;
      color: #fbbf24;
      flex-shrink: 0;
    }

    /* Right Media Column */
    .hero-media-col {
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
    }

    /* Main Featured Card Display */
    .hero-card-wrapper {
      position: relative;
      padding: 2px;
      border-radius: 1rem;
      background: linear-gradient(to bottom, #fbbf24, rgba(245, 158, 11, 0.6), rgba(217, 119, 6, 0.2));
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
      overflow: hidden;
    }

    .hero-card-inner {
      position: relative;
      border-radius: 14px;
      overflow: hidden;
      background-color: #0f172a;
    }

    .hero-gallery-badge {
      position: absolute;
      top: 0.75rem;
      left: 0.75rem;
      z-index: 10;
      display: inline-flex;
      align-items: center;
      gap: 0.25rem;
      background-color: rgba(220, 38, 38, 0.9);
      backdrop-filter: blur(8px);
      color: #ffffff;
      font-size: 0.625rem;
      font-weight: 900;
      padding: 0.25rem 0.625rem;
      border-radius: 9999px;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    .hero-live-dot {
      width: 0.375rem;
      height: 0.375rem;
      border-radius: 9999px;
      background-color: #ffffff;
      animation: hero-ping-anim 1s cubic-bezier(0, 0, 0.2, 1) infinite;
    }

    #mainFeaturedVideo,
    #mainFeaturedImage,
    .hero-featured-video {
      width: 100%;
      height: 20rem;
      border: none;
      object-fit: cover;
      object-position: top;
      opacity: 0.95;
      transition: all 0.5s ease;
      display: block;
    }

    .hero-card-inner:hover #mainFeaturedVideo,
    .hero-card-inner:hover #mainFeaturedImage {
      transform: scale(1.02);
    }

    .hero-overlay-shadow {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, #020617 0%, rgba(2, 6, 23, 0.3) 50%, transparent 100%);
    }

    .hero-caption-box {
      position: absolute;
      bottom: 0.75rem;
      left: 0.875rem;
      right: 0.875rem;
      text-align: left;
    }

    .hero-speaker-name {
      font-size: 1rem;
      font-weight: 900;
      color: #fbbf24;
    }

    .hero-speaker-title {
      font-size: 0.6875rem;
      color: #cbd5e1;
      margin-top: 0.125rem;
      font-weight: 600;
    }

    /* Thumbnail Selector Grid */
    .hero-thumb-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0.5rem;
    }

    .hero-thumb-button {
      display: block;
      position: relative;
      padding: 1.5px;
      border-radius: 0.75rem;
      background: linear-gradient(to bottom, rgba(251, 191, 36, 0.8), rgba(245, 158, 11, 0.2));
      overflow: hidden;
      border: none;
      cursor: pointer;
      outline: none;
      transition: all 0.2s ease;
    }

    .hero-thumb-button:focus {
      box-shadow: 0 0 0 2px #fbbf24;
    }

    .hero-thumb-button:active {
      transform: scale(0.95);
    }

    .hero-thumb-inner {
      border-radius: 10px;
      overflow: hidden;
      height: 5rem;
      background-color: #0f172a;
    }

    .hero-thumb-inner img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
      display: block;
    }

    .hero-thumb-button:hover .hero-thumb-inner img {
      transform: scale(1.05);
    }

    .hero-thumb-footer {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      padding-top: 0.25rem;
      font-size: 0.6875rem;
      color: #cbd5e1;
      font-weight: 500;
    }

    .hero-pulse-dot {
      width: 0.5rem;
      height: 0.5rem;
      border-radius: 9999px;
      background-color: #fbbf24;
      animation: hero-pulse-anim 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    /* Keyframe Animations */
    @keyframes hero-ping-anim {
      75%, 100% {
        transform: scale(2);
        opacity: 0;
      }
    }

    @keyframes hero-pulse-anim {
      50% {
        opacity: .5;
      }
    }

    /* Tablet Responsive Styles (640px+) */
    @media (min-width: 640px) {
      .hero-main-section {
        padding: 4rem 1.5rem;
      }

      .hero-layout-container {
        background-color: transparent;
        border: none;
        border-radius: 0;
        padding: 0;
        box-shadow: none;
        backdrop-filter: none;
        gap: 2.5rem;
      }

      .hero-content-col {
        gap: 1.5rem;
      }

      .hero-main-title {
        font-size: 3rem;
        line-height: 1.2;
      }

      .hero-text-description {
        font-size: 1rem;
      }

      .hero-feature-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }

      .hero-cta-button {
        width: auto;
        font-size: 1rem;
        margin: 0 auto;
      }

      .hero-cta-note {
        font-size: 0.75rem;
      }

      #mainFeaturedVideo,
      #mainFeaturedImage,
      .hero-featured-video {
        height: 20rem;
      }

      .hero-caption-box {
        bottom: 1rem;
        left: 1.25rem;
        right: 1.25rem;
      }

      .hero-speaker-name {
        font-size: 1.25rem;
      }

      .hero-speaker-title {
        font-size: 0.75rem;
      }

      .hero-thumb-inner {
        height: 9rem;
        border-radius: 14px;
      }

      .hero-thumb-button {
        border-radius: 1rem;
      }
    }

    /* Desktop Responsive Styles (1024px+) */
    @media (min-width: 1024px) {
      .hero-main-section {
        padding: 5rem 3rem;
      }

      .hero-layout-container {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 3.5rem;
        align-items: center;
      }

      .hero-content-col {
        grid-column: span 6;
        text-align: left;
      }

      .hero-pill-wrapper {
        justify-content: flex-start;
      }

      .hero-main-title {
        font-size: 3.5rem;
        line-height: 1.12;
      }

      .hero-text-description {
        margin: 0;
      }

      .hero-feature-grid {
        justify-content: flex-start;
      }

      .hero-action-box {
        padding-top: 1rem;
      }

      .hero-cta-button {
        margin: 0;
      }

      .hero-cta-note {
        justify-content: flex-start;
      }

      .hero-media-col {
        grid-column: span 6;
        gap: 1rem;
      }

      #mainFeaturedVideo,
      #mainFeaturedImage,
      .hero-featured-video {
        height: 28rem;
      }
    }
  </style>
</head>
<body>

<div class="hero-section-root">
  <section class="hero-main-section">
    <!-- Glow Elements -->
    <div class="hero-glow-top-left"></div>
    <div class="hero-glow-bottom-right"></div>

    <!-- Hero Shell Wrapper -->
    <div class="hero-layout-container">
      
      <!-- Left Column: Content -->
      <div class="hero-content-col">
        
        <!-- Pill Badge -->
        <div class="hero-pill-wrapper">
          <div class="hero-pill-badge">
            <span class="hero-ping-container">
              <span class="hero-ping-dot"></span>
              <span class="hero-static-dot"></span>
            </span>
            <svg class="hero-badge-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
            <span>Child's Future Readiness Survey · 3 Min</span>
          </div>
        </div>

        <!-- Main Headline -->
        <h1 class="hero-main-title">
         You’re Planning Your Child’s Future.</br>
          But Is Your <span class="hero-highlight-span">Money Planning</span>  With You ?
        </h1>

        <!-- Description -->
        <p class="hero-text-description">
          Take the 3-minute Child's Future Readiness Survey with Ankit Kohli and discover the hidden gaps between your child's dream and your current financial plan.
        </p>

        <!-- Feature Badges -->
        <div class="hero-feature-grid">
          <div class="hero-feature-badge">
            <svg class="hero-feature-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>Only 3 Minutes</span>
          </div>
          <div class="hero-feature-badge">
            <svg class="hero-feature-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
            </svg>
            <span>25+ Yrs Experience</span>
          </div>
          <div class="hero-feature-badge">
            <svg class="hero-feature-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
            <span>3000+ Families</span>
          </div>
          <div class="hero-feature-badge">
            <svg class="hero-feature-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
            </svg>
            <span>100% Confidential</span>
          </div>
        </div>

        <!-- Action Button & Note -->
        <div class="hero-action-box">
          <button class="hero-cta-button">
            <span style="font-size: 1.125rem;">🎯</span>
            <span>Book My ₹99 Survey Session</span>
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
          </button>

          <p class="hero-cta-note">
            <svg class="hero-note-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Conducted face-to-face or on live video — limited slots each week.
          </p>
        </div>

      </div>

      <!-- Right Column: Media Gallery -->
      <div class="hero-media-col">
        
        <!-- Main Display Card -->
        <div class="hero-card-wrapper">
          <div class="hero-card-inner">
            
            <div class="hero-gallery-badge">
              <span class="hero-live-dot"></span>
              Live Video
            </div>

            <iframe 
              id="mainFeaturedVideo"
              class="hero-featured-video"
              src="https://www.youtube.com/embed/M7lc1UVf-VE?autoplay=1&mute=1&rel=0&enablejsapi=1" 
              title="Ankit Kohli speaking live" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
              allowfullscreen>
            </iframe>
            
            <div class="hero-overlay-shadow" style="pointer-events: none;"></div>
            
            <div class="hero-caption-box" style="pointer-events: none;">
              <h2 class="hero-speaker-name">Ankit Kohli</h2>
              <p id="mainFeaturedCaption" class="hero-speaker-title">Your Personal Financial Guardian · Live at Manthan Retreat</p>
            </div>
          </div>
        </div>

        <!-- Thumbnails Selector -->
        <!-- <div class="hero-thumb-grid">
          
          <button 
            type="button" 
            onclick="swapMainVideo('https://www.youtube.com/embed/M7lc1UVf-VE', 'Conference Audience · Live Event Gallery')"
            class="hero-thumb-button"
          >
            <div class="hero-thumb-inner">
              <img 
                src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=600&q=80" 
                alt="Conference Audience" 
              />
            </div>
          </button>

          <button 
            type="button" 
            onclick="swapMainVideo('https://www.youtube.com/embed/tgbNymZ7vqY', 'Live Seminar Session · Active Guidance')"
            class="hero-thumb-button"
          >
            <div class="hero-thumb-inner">
              <img 
                src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=600&q=80" 
                alt="Live Seminar" 
              />
            </div>
          </button>

          <button 
            type="button" 
            onclick="swapMainVideo('https://www.youtube.com/embed/LXb3EKWsInQ', 'Live Stage Presentation · Keynote Address')"
            class="hero-thumb-button"
          >
            <div class="hero-thumb-inner">
              <img 
                src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&w=600&q=80" 
                alt="Live Stage Presentation" 
              />
            </div>
          </button>

        </div> -->

        <!-- Caption Footer -->
        <div class="hero-thumb-footer">
          <span class="hero-pulse-dot"></span>
          <span>Tap any thumbnail above to view in main frame</span>
        </div>

      </div>

    </div>
  </section>
</div>

<!-- Media Swap Script -->
<script>
  function formatYoutubeEmbedUrl(url) {
    if (!url) return '';
    let videoId = '';
    if (url.includes('youtu.be/')) {
      videoId = url.split('youtu.be/')[1].split('?')[0];
    } else if (url.includes('watch?v=')) {
      videoId = url.split('watch?v=')[1].split('&')[0];
    } else if (url.includes('/embed/')) {
      videoId = url.split('/embed/')[1].split('?')[0];
    } else {
      videoId = url;
    }
    return `https://www.youtube.com/embed/${videoId}?autoplay=1&mute=1&rel=0&enablejsapi=1`;
  }

  function swapMainVideo(videoUrl, captionText) {
    const mainVideo = document.getElementById('mainFeaturedVideo');
    const mainCaption = document.getElementById('mainFeaturedCaption');
    
    if (mainVideo) {
      mainVideo.style.opacity = '0.3';
      setTimeout(() => {
        mainVideo.src = formatYoutubeEmbedUrl(videoUrl);
        if (mainCaption && captionText) mainCaption.textContent = captionText;
        mainVideo.style.opacity = '1';
      }, 150);
    }
  }

  function swapMainImage(src, captionText, altText) {
    swapMainVideo(src, captionText);
  }
</script>

</body>
</html>