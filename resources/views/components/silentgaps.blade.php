<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Readiness Survey</title>
  <style>
    /* Scoped Base & Reset to Avoid Global CSS Interference */
    .sg-section-root {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      box-sizing: border-box;
    }

    .sg-section-root *,
    .sg-section-root *::before,
    .sg-section-root *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    /* Main Section Styling */
    .sg-survey-section {
      background-color: #f4f7fc;
      color: #0f172a;
      padding: 2rem 1rem;
      transition: all 0.3s ease;
    }

    .sg-survey-container {
      max-width: 1152px;
      margin: 0 auto;
      text-align: center;
    }

    /* Header Elements */
    .sg-pill-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.375rem;
      background-color: #e0e9f8;
      color: #1e3a8a;
      font-size: 0.75rem;
      font-weight: 600;
      padding: 0.35rem 0.875rem;
      border-radius: 9999px;
      margin-bottom: 0.75rem;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .sg-badge-icon {
      width: 0.875rem;
      height: 0.875rem;
      color: #1e3a8a;
      flex-shrink: 0;
    }

    .sg-main-heading {
      font-size: 1.25rem;
      font-weight: 800;
      color: #0f172a;
      letter-spacing: -0.025em;
      line-height: 1.25;
      margin-bottom: 0.75rem;
    }

    .sg-desktop-only {
      display: none;
    }

    .sg-subtitle {
      color: #64748b;
      font-size: 0.75rem;
      line-height: 1.6;
      max-width: 48rem;
      margin: 0 auto 1.5rem auto;
    }

    /* Flexbox Container with Wrapping */
    .sg-cards-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 0.875rem;
      text-align: left;
      padding-top: 1rem;
    }

    /* Card Base Styles - 100% Width on Mobile */
    .sg-card {
      width: 100%; /* Guarantees 1 single card per row on mobile */
      background-color: #ffffff;
      padding: 1.25rem;
      border-radius: 1rem;
      border: 1px solid rgba(241, 245, 249, 0.9);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: all 0.3s ease;
    }

    .sg-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
      border-color: rgba(191, 219, 254, 0.7);
    }

    .sg-card-icon {
      width: 2.5rem;
      height: 2.5rem;
      border-radius: 0.75rem;
      background-color: rgba(239, 246, 255, 0.8);
      color: #1e3a8a;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 0.75rem;
      transition: all 0.3s ease;
    }

    .sg-card-icon svg {
      width: 1.25rem;
      height: 1.25rem;
    }

    .sg-card:hover .sg-card-icon {
      background-color: #1e3a8a;
      color: #ffffff;
    }

    .sg-card-title {
      font-size: 1rem;
      font-weight: 700;
      color: #0f172a;
      margin-bottom: 0.375rem;
      transition: color 0.2s ease;
    }

    .sg-card:hover .sg-card-title {
      color: #1e3a8a;
    }

    .sg-card-text {
      color: #64748b;
      font-size: 0.75rem;
      line-height: 1.5;
    }

    /* Callout Section & CTA */
    .sg-cta-wrapper {
      margin-top: 2rem;
    }

    .sg-callout-text {
      font-size: 0.875rem;
      color: #0f172a;
      font-weight: 500;
      margin-bottom: 1rem;
    }

    .sg-highlight {
      color: #1e3a8a;
      font-weight: 700;
     
    }

    .sg-cta-button {
      width: 100%;
      background: linear-gradient(to right, #fba028, #f38118);
      color: #0f172a;
      font-weight: 800;
      font-size: 0.875rem;
      padding: 0.875rem 1.5rem;
      border-radius: 0.75rem;
      border: none;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .sg-cta-button:hover {
      background: linear-gradient(to right, #f38118, #e0700d);
    }

    .sg-cta-button:active {
      transform: scale(0.98);
    }

    .sg-currency-symbol {
      font-size: 1.125rem;
      font-weight: 900;
    }

    /* Tablet Responsive Breakpoint (768px+) -> 2 Cards Per Row */
    @media (min-width: 768px) {
      .sg-survey-section {
        padding: 3rem 1.5rem;
      }

      .sg-cards-grid {
        gap: 1.5rem;
      }

      .sg-card {
        width: calc(50% - 0.75rem);
        padding: 1.5rem;
      }

      .sg-card-last {
        width: 100%; /* Spans full row when centered on 2-column layout */
      }

      .sg-main-heading {
        font-size: 2.25rem;
      }

      .sg-subtitle, .sg-callout-text {
        font-size: 1rem;
      }

      .sg-cta-button {
        width: auto;
        font-size: 1.125rem;
        padding: 1rem 2.25rem;
        border-radius: 1rem;
      }
    }

    /* Desktop Responsive Breakpoint (1024px+) -> 3 Cards Per Row */
    @media (min-width: 1024px) {
      .sg-survey-section {
        padding: 5rem 2rem;
      }

      .sg-desktop-only {
        display: inline;
      }

      .sg-card, .sg-card-last {
        width: calc(33.333% - 1rem);
        padding: 2rem;
      }

      .sg-main-heading {
        font-size: 3rem;
      }
    }
  </style>
</head>
<body>

<div class="sg-section-root">
  <section class="sg-survey-section">
    <div class="sg-survey-container">
      
      <!-- Top Pill Badge -->
      <div class="sg-pill-badge">
        <svg class="sg-badge-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 022 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
        </svg>
        <span>Why This Survey Exists</span>
      </div>

      <!-- Main Section Heading -->
      <h2 class="sg-main-heading">
        7 Silent Gaps That Can <br class="sg-desktop-only" />
        Break Your Child's Future 🚨
      </h2>

      <!-- Subtitle Description -->
      <p class="sg-subtitle">
        Most parents are investing — but very few have measured whether it will actually be enough. The Readiness Survey uses a proven 7-point check to expose the gaps you can't see yet.
      </p>

      <!-- Cards Flex Container -->
      <div class="sg-cards-grid">
        
        <!-- Card 1 -->
        <div class="sg-card">
          <div class="sg-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="9" stroke-width="2.2"></circle>
              <circle cx="12" cy="12" r="5" stroke-width="2.2"></circle>
              <circle cx="12" cy="12" r="1.5" fill="currentColor"></circle>
            </svg>
          </div>
          <h3 class="sg-card-title">Goal Gap</h3>
          <p class="sg-card-text">Do you know what your child's dream could cost when the time actually comes?</p>
        </div>

        <!-- Card 2 -->
        <div class="sg-card">
          <div class="sg-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
            </svg>
          </div>
          <h3 class="sg-card-title">Inflation Gap</h3>
          <p class="sg-card-text">Will ₹20 lakh today still mean the same thing 10–15 years from now?</p>
        </div>

        <!-- Card 3 -->
        <div class="sg-card">
          <div class="sg-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
            </svg>
          </div>
          <h3 class="sg-card-title">Protection Gap</h3>
          <p class="sg-card-text">If something happens to you, does the plan still survive?</p>
        </div>

        <!-- Card 4 -->
        <div class="sg-card">
          <div class="sg-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
          </div>
          <h3 class="sg-card-title">Timing Gap</h3>
          <p class="sg-card-text">Will your money be ready exactly when your child needs it?</p>
        </div>

        <!-- Card 5 -->
        <div class="sg-card">
          <div class="sg-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
            </svg>
          </div>
          <h3 class="sg-card-title">Loan Trap Gap</h3>
          <p class="sg-card-text">Could poor planning leave your child dependent on loans later?</p>
        </div>

        <!-- Card 6 -->
        <div class="sg-card">
          <div class="sg-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
          </div>
          <h3 class="sg-card-title">Life-Stage Gap</h3>
          <p class="sg-card-text">Have you planned for marriage / settling-down expenses too?</p>
        </div>

        <!-- Card 7 -->
        <div class="sg-card sg-card-last">
          <div class="sg-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 022 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
            </svg>
          </div>
          <h3 class="sg-card-title">Action & Review Gap</h3>
          <p class="sg-card-text">Do you have an active, dynamic annual review roadmap for your child's portfolio?</p>
        </div>

      </div>

      <!-- Callout & CTA -->
      <div class="sg-cta-wrapper">
        <p class="sg-callout-text">
          The survey reveals your exact <span class="sg-highlight">Readiness Score</span> — in just 3 minutes.
        </p>
        <a href="https://rzp.io/rzp/mosB0TR" target="_blank" rel="noopener noreferrer" class="sg-cta-button" style="text-decoration: none;">
          <span class="sg-currency-symbol">₹</span>
          <span>Book My Survey Slot Now</span>
        </a>
      </div>

    </div>
  </section>
</div>

</body>
</html>