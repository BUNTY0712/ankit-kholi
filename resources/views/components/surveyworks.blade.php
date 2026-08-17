<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>How The Survey Works</title>
  <style>
    /* Scoped Custom CSS with hsw- Prefix to Prevent Class Conflicts */
    .hsw-section {
      background-color: #f3f6fb;
      color: #0f172a;
      padding: 3rem 1rem;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      transition: all 0.3s ease;
      box-sizing: border-box;
    }

    .hsw-section *,
    .hsw-section *::before,
    .hsw-section *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    .hsw-container {
      max-width: 1152px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 3rem;
    }

    /* Top Section: Header */
    .hsw-header {
      text-align: center;
      display: flex;
      flex-direction: column;
      gap: 2rem;
    }

    .hsw-header-title-box {
      max-width: 42rem;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }

    .hsw-title {
      font-size: 1.5rem;
      font-weight: 800;
      color: #0a1128;
      letter-spacing: -0.025em;
      line-height: 1.25;
    }

    .hsw-subtitle {
      color: #64748b;
      font-size: 0.875rem;
      font-weight: 500;
    }

    /* Step Cards Grid */
    .hsw-steps-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 1rem;
      text-align: left;
    }

    .hsw-step-card {
      background-color: #ffffff;
      padding: 1.25rem;
      border-radius: 1.5rem;
      border: 1px solid rgba(241, 245, 249, 0.8);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: all 0.3s ease;
    }

    .hsw-step-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
      border-color: rgba(253, 230, 138, 0.6);
    }

    .hsw-step-num {
      width: 2.5rem;
      height: 2.5rem;
      border-radius: 0.75rem;
      background-color: #fca510;
      color: #020617;
      font-weight: 700;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1rem;
      margin-bottom: 1rem;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
    }

    .hsw-step-card:hover .hsw-step-num {
      transform: scale(1.1);
      background-color: #fbbf24;
    }

    .hsw-step-heading {
      font-size: 0.875rem;
      font-weight: 700;
      color: #0a1128;
      margin-bottom: 0.375rem;
      transition: color 0.2s ease;
    }

    .hsw-step-card:hover .hsw-step-heading {
      color: #d97706;
    }

    .hsw-step-desc {
      color: #64748b;
      font-size: 0.75rem;
      line-height: 1.625;
    }

    /* Bottom Section: Personal Welcome */
    .hsw-bottom-section {
      text-align: center;
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
      padding-top: 1rem;
    }

    .hsw-badge-wrapper {
      display: flex;
      justify-content: center;
    }

    .hsw-pill-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background-color: #e0e8f9;
      color: #1e3a8a;
      font-size: 0.75rem;
      font-weight: 600;
      padding: 0.375rem 1rem;
      border-radius: 9999px;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
      transition: background-color 0.2s ease;
    }

    .hsw-pill-badge:hover {
      background-color: #d4e1f7;
    }

    .hsw-badge-icon {
      width: 0.875rem;
      height: 0.875rem;
      flex-shrink: 0;
    }

    .hsw-yogi-name {
      color: #0e2056;
    }

    /* Video Player Frame */
    .hsw-video-wrapper {
      max-width: 48rem;
      margin: 0 auto;
      width: 100%;
      padding-top: 0.5rem;
    }

    .hsw-video-border {
      position: relative;
      border-radius: 1rem;
      padding: 2.5px;
      background: linear-gradient(to bottom, #fbbf24, #f59e0b, #d97706);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
      transition: all 0.3s ease;
    }

    .hsw-video-container {
      position: relative;
      border-radius: 20px;
      overflow: hidden;
      background-color: #0f172a;
      aspect-ratio: 16 / 9;
    }

    .hsw-video-thumb {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      transition: transform 0.5s ease;
      display: block;
    }

    .hsw-video-container:hover .hsw-video-thumb {
      transform: scale(1.05);
    }

    .hsw-video-overlay {
      position: absolute;
      inset: 0;
      background-color: rgba(0, 0, 0, 0.25);
      transition: background-color 0.3s ease;
    }

    .hsw-video-container:hover .hsw-video-overlay {
      background-color: rgba(0, 0, 0, 0.15);
    }

    .hsw-video-header {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      padding: 0.75rem;
      background: linear-gradient(to bottom, rgba(0,0,0,0.85), rgba(0,0,0,0.4), transparent);
      display: flex;
      align-items: center;
      justify-content: space-between;
      color: #ffffff;
      font-size: 0.75rem;
      z-index: 10;
    }

    .hsw-author-info {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-weight: 500;
      max-width: 85%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .hsw-avatar-ring {
      width: 1.5rem;
      height: 1.5rem;
      border-radius: 9999px;
      background-color: #e2e8f0;
      overflow: hidden;
      flex-shrink: 0;
      box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.2);
    }

    .hsw-avatar-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .hsw-video-title {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      color: #f1f5f9;
      font-size: 0.75rem;
    }

    /* Play Button Overlay */
    .hsw-play-wrapper {
      position: absolute;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 10;
    }

    .hsw-play-btn {
      width: 3.5rem;
      height: 2.5rem;
      background-color: #dc2626;
      color: #ffffff;
      border-radius: 1rem;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
      border: none;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .hsw-play-btn:hover {
      background-color: #b91c1c;
      transform: scale(1.1);
      box-shadow: 0 20px 25px -5px rgba(220, 38, 38, 0.4);
    }

    .hsw-play-btn:active {
      transform: scale(0.95);
    }

    .hsw-play-svg {
      width: 1.5rem;
      height: 1.5rem;
      fill: currentColor;
      transform: translateX(1px);
    }

    /* Bottom Video Actions */
    .hsw-actions-left {
      position: absolute;
      bottom: 0.75rem;
      left: 0.75rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      color: rgba(255, 255, 255, 0.9);
      font-size: 0.75rem;
      z-index: 10;
    }

    .hsw-action-btn {
      background-color: rgba(0, 0, 0, 0.5);
      padding: 0.5rem;
      border-radius: 9999px;
      backdrop-filter: blur(8px);
      transition: all 0.2s ease;
      border: 1px solid rgba(255, 255, 255, 0.1);
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #ffffff;
    }

    .hsw-action-btn:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    .hsw-action-btn:active {
      transform: scale(0.9);
    }

    .hsw-action-btn svg {
      width: 1rem;
      height: 1rem;
    }

    .hsw-actions-right {
      position: absolute;
      bottom: 0.75rem;
      right: 0.75rem;
      z-index: 10;
    }

    .hsw-yt-link {
      display: inline-flex;
      align-items: center;
      gap: 0.375rem;
      background-color: rgba(0, 0, 0, 0.6);
      color: #ffffff;
      font-size: 0.75rem;
      font-weight: 600;
      padding: 0.375rem 0.625rem;
      border-radius: 0.5rem;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      transition: all 0.2s ease;
      border: 1px solid rgba(255, 255, 255, 0.1);
      text-decoration: none;
      backdrop-filter: blur(8px);
    }

    .hsw-yt-link:hover {
      background-color: rgba(0, 0, 0, 0.85);
      transform: scale(1.05);
    }

    .hsw-yt-tag {
      color: #ef4444;
      font-weight: 700;
      display: flex;
      align-items: center;
      gap: 0.125rem;
    }

    .hsw-yt-tag svg {
      width: 0.875rem;
      height: 0.875rem;
      fill: currentColor;
    }

    .hsw-iframe {
      width: 100%;
      height: 100%;
      border-radius: 20px;
      border: none;
    }

    /* Tablet Responsive Styles (640px+) */
    @media (min-width: 640px) {
      .hsw-section {
        padding: 4rem 1.5rem;
      }

      .hsw-container {
        gap: 4rem;
      }

      .hsw-title {
        font-size: 2.25rem;
      }

      .hsw-subtitle {
        font-size: 1rem;
      }

      .hsw-steps-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 1.25rem;
      }

      .hsw-step-card {
        padding: 1.5rem;
      }

      .hsw-step-heading {
        font-size: 1rem;
      }

      .hsw-step-num {
        margin-bottom: 1.25rem;
      }

      .hsw-video-border {
        border-radius: 1.5rem;
      }

      .hsw-video-container {
        border-radius: 22px;
      }

      .hsw-video-header {
        padding: 1rem;
      }

      .hsw-author-info {
        max-width: 90%;
      }

      .hsw-video-title {
        font-size: 0.875rem;
      }

      .hsw-play-btn {
        width: 4rem;
        height: 3rem;
      }

      .hsw-play-svg {
        width: 1.75rem;
        height: 1.75rem;
      }

      .hsw-actions-left {
        bottom: 1rem;
        left: 1rem;
      }

      .hsw-actions-right {
        bottom: 1rem;
        right: 1rem;
      }

      .hsw-yt-link {
        padding: 0.375rem 0.75rem;
      }

      .hsw-iframe {
        border-radius: 22px;
      }
    }

    /* Desktop Responsive Styles (1024px+) */
    @media (min-width: 1024px) {
      .hsw-section {
        padding: 5rem 2rem;
      }

      .hsw-container {
        gap: 0rem;
      }

      .hsw-steps-grid {
        grid-template-columns: repeat(4, 1fr);
      }
    }
  </style>
</head>
<body>

<section class="hsw-section">
  <div class="hsw-container">
    
    <!-- Top Section: How The Survey Works -->
    <div class="hsw-header">
      
      <!-- Section Title & Subtitle -->
      <div class="hsw-header-title-box">
        <h2 class="hsw-title">
          How The Survey Works
        </h2>
        <p class="hsw-subtitle">
          Simple. Personal. Confidential.
        </p>
      </div>

      <!-- 4 Step Cards Grid -->
      <div class="hsw-steps-grid">
        
        <!-- Step 1 -->
        <div class="hsw-step-card">
          <div>
            <div class="hsw-step-num">
              1
            </div>
            <h3 class="hsw-step-heading">
              Book Your Slot
            </h3>
            <p class="hsw-step-desc">
              Confirm your ₹99 slot on Razorpay in under a minute.
            </p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="hsw-step-card">
          <div>
            <div class="hsw-step-num">
              2
            </div>
            <h3 class="hsw-step-heading">
              Get Scheduled
            </h3>
            <p class="hsw-step-desc">
              You'll receive a face-to-face or live video call time from Yogi's team.
            </p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="hsw-step-card">
          <div>
            <div class="hsw-step-num">
              3
            </div>
            <h3 class="hsw-step-heading">
              Take The 3-Min Survey
            </h3>
            <p class="hsw-step-desc">
              Yogi personally walks you through the readiness questions.
            </p>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="hsw-step-card">
          <div>
            <div class="hsw-step-num">
              4
            </div>
            <h3 class="hsw-step-heading">
              Get Your Score & Plan
            </h3>
            <p class="hsw-step-desc">
              Clear Readiness Score + a free direction for your child's future.
            </p>
          </div>
        </div>

      </div>

    </div>

    <!-- Bottom Section: Personal Message -->
    <div class="hsw-bottom-section">
      

      <!-- <div class="hsw-badge-wrapper">
        <div class="hsw-pill-badge">
          <svg class="hsw-badge-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
          </svg>
          <span>Personal Welcome</span>
        </div>
      </div>


      <h2 class="hsw-title">
        A Personal Message From <span class="hsw-yogi-name">Ankit Kohli</span>
      </h2>


      <div class="hsw-video-wrapper">
        <div class="hsw-video-border">
          <div id="survey-video-container" class="hsw-video-container">
            

            <img 
              id="survey-video-thumb"
              src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=1200&q=80" 
              alt="Ankit Kohli personal message video" 
              class="hsw-video-thumb"
            />


            <div id="survey-video-overlay-bg" class="hsw-video-overlay"></div>


            <div id="survey-video-header" class="hsw-video-header">
              <div class="hsw-author-info">
                <span class="hsw-avatar-ring">
                  <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&q=80" alt="Avatar" class="hsw-avatar-img" />
                </span>
                <span class="hsw-video-title">Do you know 80% Parents Take Loan to Pay for Marriage and Child Education? Plan</span>
              </div>
            </div>


            <div id="survey-video-play-wrapper" class="hsw-play-wrapper">
              <button 
                id="survey-play-btn"
                aria-label="Play Video"
                class="hsw-play-btn"
              >
                <svg class="hsw-play-svg" viewBox="0 0 24 24">
                  <path d="M8 5v14l11-7z" />
                </svg>
              </button>
            </div>


            <div id="survey-video-actions-left" class="hsw-actions-left">
              <button 
                type="button" 
                title="Share Video"
                onclick="navigator.share ? navigator.share({title: 'Personal Message From Ankit Kohli', url: window.location.href}) : navigator.clipboard.writeText(window.location.href).then(() => alert('Link copied to clipboard!'))"
                class="hsw-action-btn"
              >
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                </svg>
              </button>
              <button 
                type="button" 
                title="Watch Later"
                onclick="alert('Saved to watch later!')"
                class="hsw-action-btn"
              >
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </button>
            </div>


            <div id="survey-video-actions-right" class="hsw-actions-right">
              <a 
                href="https://www.youtube.com" 
                target="_blank" 
                rel="noopener noreferrer"
                class="hsw-yt-link"
              >
                <span>Watch on</span>
                <span class="hsw-yt-tag">
                  <svg viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                  YouTube
                </span>
              </a>
            </div>

          </div>
        </div>
      </div> -->

    </div>

  </div>
</section>

<!-- Video Play Handler Script -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const playBtn = document.getElementById('survey-play-btn');
    const container = document.getElementById('survey-video-container');
    
    if (playBtn && container) {
      playBtn.addEventListener('click', function() {
        container.innerHTML = `
          <iframe 
            class="hsw-iframe" 
            src="https://www.youtube.com/embed/M7lc1UVf-VE?autoplay=1&mute=1&rel=0" 
            title="A Personal Message From Ankit Kohli" 
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