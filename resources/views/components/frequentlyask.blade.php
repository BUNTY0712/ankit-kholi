<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FAQ & Final CTA</title>
  <style>
    /* Scoped Custom CSS with faq- Prefix to Avoid Conflicts */
    .faq-wrapper-root {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      box-sizing: border-box;
      transition: all 0.3s ease;
    }

    .faq-wrapper-root *,
    .faq-wrapper-root *::before,
    .faq-wrapper-root *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    /* FAQ Section Container */
    .faq-section {
      background-color: #f3f6fb;
      padding: 3rem 1rem;
    }

    .faq-container {
      max-width: 56rem; /* 896px */
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 2rem;
    }

    /* FAQ Header */
    .faq-header {
      text-align: center;
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
      align-items: center;
    }

    .faq-pill-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background-color: #e0e9f8;
      color: #1e3a8a;
      font-size: 0.75rem;
      font-weight: 600;
      padding: 0.375rem 1rem;
      border-radius: 9999px;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
      transition: background-color 0.2s ease;
    }

    .faq-pill-badge:hover {
      background-color: #d0def5;
    }

    .faq-badge-icon {
      width: 1rem;
      height: 1rem;
      color: #1e3a8a;
      flex-shrink: 0;
    }

    .faq-title {
      font-size: 1.5rem;
      font-weight: 800;
      color: #0a1128;
      letter-spacing: -0.025em;
      line-height: 1.25;
    }

    .faq-subtitle {
      color: #64748b;
      font-size: 0.75rem;
      font-weight: 500;
      max-width: 36rem;
      margin: 0 auto;
    }

    /* FAQ Accordion List */
    .faq-accordion-list {
      display: flex;
      flex-direction: column;
      gap: 0.875rem;
    }

    .faq-item {
      overflow: hidden;
      border-radius: 1rem;
      border: 1px solid rgba(226, 232, 240, 0.9);
      background-color: #ffffff;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
      transition: all 0.3s ease;
    }

    .faq-item:hover {
      border-color: rgba(253, 230, 138, 0.6);
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    }

    .faq-summary {
      display: flex;
      cursor: pointer;
      list-style: none;
      align-items: center;
      justify-content: space-between;
      gap: 1rem;
      padding: 1.25rem;
      font-size: 0.875rem;
      font-weight: 700;
      color: #0f172a;
      user-select: none;
    }

    .faq-summary::-webkit-details-marker {
      display: none;
    }

    .faq-chevron {
      height: 1.25rem;
      width: 1.25rem;
      color: #94a3b8;
      flex-shrink: 0;
      transition: transform 0.3s ease, color 0.3s ease;
    }

    .faq-item[open] .faq-chevron {
      transform: rotate(180deg);
      color: #f59e0b;
    }

    .faq-content {
      border-top: 1px solid rgba(241, 245, 249, 0.8);
      padding: 1.125rem 1.25rem;
      font-size: 0.75rem;
      line-height: 1.625;
      color: #475569;
      background-color: rgba(248, 250, 252, 0.5);
    }

    /* Bottom CTA Section */
    .faq-cta-section {
      position: relative;
      overflow: hidden;
      background: linear-gradient(135deg, #0c134f 0%, #121c54 50%, #1e2875 100%);
      padding: 3rem 1rem;
      text-align: center;
      color: #ffffff;
    }

    .faq-bg-glow {
      position: absolute;
      top: -6rem;
      left: 50%;
      transform: translateX(-50%);
      width: 24rem;
      height: 24rem;
      background-color: rgba(245, 158, 11, 0.1);
      border-radius: 9999px;
      filter: blur(48px);
      pointer-events: none;
    }

    .faq-cta-container {
      max-width: 48rem;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
      position: relative;
      z-index: 10;
      align-items: center;
    }

    .faq-icon-box {
      width: 3rem;
      height: 3rem;
      border-radius: 1rem;
      background-color: rgba(251, 191, 36, 0.2);
      border: 1px solid rgba(251, 191, 36, 0.3);
      color: #fbbf24;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .faq-icon-svg {
      height: 1.5rem;
      width: 1.5rem;
    }

    .faq-cta-title {
      font-size: 1.25rem;
      font-weight: 800;
      line-height: 1.25;
      letter-spacing: -0.025em;
      color: #ffffff;
      padding: 0 0.5rem;
    }

    .faq-highlight-span {
      display: block;
      color: #fca510;
   
      margin-top: 0.25rem;
    }

    .faq-cta-desc {
      max-width: 32rem;
      margin: 0 auto;
      font-size: 0.75rem;
      line-height: 1.625;
      color: #cbd5e1;
      padding: 0 0.5rem;
    }

    .faq-btn-wrapper {
      padding-top: 0.5rem;
      width: 100%;
    }

    .faq-cta-button {
      width: 100%;
      background: linear-gradient(to right, #fbbf24, #f59e0b, #f97316);
      color: #020617;
      font-weight: 800;
      font-size: 0.75rem;
      padding: 0.875rem 1.75rem;
      border-radius: 1rem;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.625rem;
      border: none;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .faq-cta-button:hover {
      background: linear-gradient(to right, #f59e0b, #ea580c);
      box-shadow: 0 10px 20px -3px rgba(245, 158, 11, 0.25);
    }

    .faq-cta-button:active {
      transform: scale(0.95);
    }

    .faq-arrow-svg {
      height: 1rem;
      width: 1rem;
      flex-shrink: 0;
      transform: translateX(2px);
    }

    .faq-footer-note {
      font-size: 0.75rem;
      color: #94a3b8;
      padding-top: 0.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      flex-wrap: wrap;
    }

    .faq-bold-gold {
      font-weight: 700;
      color: #fbbf24;
    }

    /* Tablet Responsive Styles (640px+) */
    @media (min-width: 640px) {
      .faq-section {
        padding: 4rem 1.5rem;
      }

      .faq-title {
        font-size: 2.25rem;
      }

      .faq-subtitle {
        font-size: 0.875rem;
      }

      .faq-summary {
        font-size: 1rem;
      }

      .faq-content {
        font-size: 0.875rem;
      }

      .faq-cta-section {
        padding: 4rem 1.5rem;
      }

      .faq-cta-title {
        font-size: 1.875rem;
      }

      .faq-cta-desc {
        font-size: 0.875rem;
      }

      .faq-btn-wrapper {
        width: auto;
      }

      .faq-cta-button {
        width: auto;
        font-size: 0.875rem;
        padding: 1rem 2.25rem;
      }
    }

    /* Desktop Responsive Styles (1024px+) */
    @media (min-width: 1024px) {
      .faq-section {
        padding: 5rem 2rem;
      }

      .faq-cta-section {
        padding: 5rem 2rem;
      }

      .faq-cta-title {
        font-size: 2.25rem;
      }

      .faq-cta-desc {
        font-size: 1rem;
      }

      .faq-cta-button {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

<div class="faq-wrapper-root">

  <!-- FAQ Section -->
  <section class="faq-section">
    <div class="faq-container">

      <!-- Header -->
      <div class="faq-header">
        <div class="faq-pill-badge">
          <svg class="faq-badge-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <span>Clear Answers & Transparency</span>
        </div>

        <h2 class="faq-title">
          Frequently Asked Questions
        </h2>
        <p class="faq-subtitle">
          Everything you need to know before booking your 3-minute readiness survey session.
        </p>
      </div>

      <!-- Accordion -->
      <div class="faq-accordion-list">

        <details open class="faq-item">
          <summary class="faq-summary">
            <span>How is the survey conducted?</span>
            <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </summary>
          <div class="faq-content">
            The Child's Future Readiness Survey is conducted personally by Ankit Kohli, either face-to-face or through a live video call. It takes around 3 minutes and is followed by practical guidance.
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-summary">
            <span>Do I need to prepare anything?</span>
            <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </summary>
          <div class="faq-content">
            No preparation or financial documents are required. Simply join the session and answer a few questions honestly.
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-summary">
            <span>Is this only for wealthy families?</span>
            <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </summary>
          <div class="faq-content">
            No. The survey is designed for every parent who wants to secure their child's future, regardless of income level.
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-summary">
            <span>Is ₹99 the total fee?</span>
            <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </summary>
          <div class="faq-content">
            Yes. ₹99 is the complete booking amount to reserve your one-on-one survey session.
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-summary">
            <span>What will I receive?</span>
            <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </summary>
          <div class="faq-content">
            You'll receive your personalized Readiness Score, identify financial gaps, and get clear recommendations on your next steps.
          </div>
        </details>

        <details class="faq-item">
          <summary class="faq-summary">
            <span>Can parents of young children join?</span>
            <svg class="faq-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </summary>
          <div class="faq-content">
            Absolutely. Starting early gives you the biggest advantage because of long-term planning and compounding.
          </div>
        </details>

      </div>
    </div>
  </section>

  <!-- Bottom CTA Section -->
  <section class="faq-cta-section">
    
    <!-- Background Glow -->
    <div class="faq-bg-glow"></div>

    <div class="faq-cta-container">

      <!-- Icon -->
      <div class="faq-icon-box">
        <svg class="faq-icon-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
        </svg>
      </div>

      <!-- Heading -->
      <h2 class="faq-cta-title">
        3 Minutes Today Can Protect
        <span class="faq-highlight-span">
          15 Years Of Your Child's Future
        </span>
      </h2>

      <!-- Description -->
      <p class="faq-cta-desc">
        Take the Child's Future Readiness Survey with Ankit Kohli and know exactly where you stand before life decides for you.
      </p>

      <!-- Button -->
      <div class="faq-btn-wrapper">
        <button class="faq-cta-button">
          <span style="font-size: 1.125rem;">🎯</span>
          <span>Book My ₹99 Survey Session</span>
          <svg class="faq-arrow-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7m7-7H3"/>
          </svg>
        </button>
      </div>

      <!-- Footer Note -->
      <p class="faq-footer-note">
        <span>Guided by <strong class="faq-bold-gold">Ankit Kohli</strong></span>
        <span>•</span>
        <span>25+ Years Experience</span>
        <span>•</span>
        <span>3000+ Families Guided</span>
      </p>

    </div>
  </section>

</div>

</body>
</html>