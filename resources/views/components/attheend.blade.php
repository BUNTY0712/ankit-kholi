<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Readiness Score Section</title>
  <style>
    /* Scoped Custom CSS with dga- Prefix to Avoid Class Conflicts */
    .dga-survey-section {
      background-color: #f3f6fb;
      color: #0f172a;
      min-height: auto;
      padding: 3rem 1rem;
      display: flex;
      align-items: flex-start;
      justify-content: center;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      box-sizing: border-box;
    }

    .dga-survey-section *,
    .dga-survey-section *::before,
    .dga-survey-section *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    .dga-main-container {
      max-width: 1152px;
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 2rem;
      align-items: center;
    }

    /* Left Column: Document Card Preview */
    .dga-doc-col {
      width: 100%;
      display: flex;
      justify-content: center;
    }

    .dga-card-border-accent {
      position: relative;
      width: 100%;
      max-width: 32rem; /* 512px */
      border-radius: 1.5rem;
      padding: 2.5px;
      background: linear-gradient(to bottom, #fbbf24, #f59e0b, #d97706);
      box-shadow: 0 10px 35px rgba(245, 158, 11, 0.18);
      transition: all 0.3s ease;
    }

    .dga-card-border-accent:hover {
      box-shadow: 0 15px 45px rgba(245, 158, 11, 0.28);
    }

    .dga-top-badge {
      position: absolute;
      top: -0.75rem;
      right: 1.5rem;
      z-index: 20;
    }

    .dga-badge-text {
      background-color: #0e2056;
      color: #ffffff;
      font-size: 0.625rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      padding: 0.25rem 0.75rem;
      border-radius: 0.375rem;
      text-transform: uppercase;
      border: 1px solid #334155;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .dga-doc-inner {
      background-color: #ffffff;
      border-radius: 22px;
      overflow: hidden;
      color: #1e293b;
      font-size: 0.6875rem;
      line-height: 1.25;
      box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.05);
    }

    /* Document Card Internal Styling */
    .dga-doc-header {
      background: linear-gradient(to right, #061539, #0c1f54);
      color: #ffffff;
      padding: 1rem;
      text-align: center;
      position: relative;
    }

    .dga-doc-subhead {
      font-size: 0.5625rem;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: #fbbf24;
      font-weight: 700;
      margin-bottom: 0.25rem;
    }

    .dga-doc-title {
      font-size: 0.875rem;
      font-weight: 800;
      color: #ffffff;
      letter-spacing: -0.025em;
    }

    .dga-doc-desc {
      font-size: 0.625rem;
      color: #cbd5e1;
      margin-top: 0.25rem;
      max-width: 20rem;
      margin-left: auto;
      margin-right: auto;
    }

    .dga-doc-body {
      padding: 0.875rem;
      background-color: rgba(248, 250, 252, 0.5);
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
    }

    .dga-part-box {
      border: 1px solid rgba(226, 232, 240, 0.9);
      border-radius: 0.75rem;
      background-color: #ffffff;
      padding: 0.625rem;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.02);
    }

    .dga-part-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 0.25rem;
    }

    .dga-part-tag {
      background-color: #0e2056;
      color: #ffffff;
      font-weight: 700;
      font-size: 0.5625rem;
      padding: 0.125rem 0.375rem;
      border-radius: 0.25rem;
    }

    .dga-part-name {
      font-weight: 700;
      color: #1e293b;
      font-size: 0.625rem;
    }

    .dga-part-note {
      font-size: 0.5625rem;
      color: #94a3b8;
      font-style: italic;
    }

    .dga-part-lines {
      display: flex;
      flex-direction: column;
      gap: 0.25rem;
      color: #64748b;
      font-size: 0.59375rem;
      padding-top: 0.25rem;
    }

    .dga-dotted-line {
      border-bottom: 1px dotted #cbd5e1;
      display: inline-block;
    }

    .dga-line-75 { width: 75%; }
    .dga-line-16 { width: 4rem; }
    .dga-line-24 { width: 6rem; }
    .dga-line-8  { width: 2rem; }

    .dga-part-list {
      display: flex;
      flex-direction: column;
      gap: 0.375rem;
      font-size: 0.5625rem;
      color: #475569;
      list-style: none;
    }

    .dga-part-list li {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .dga-highlight-mark {
      background-color: #fef3c7;
      color: #0f172a;
      font-weight: 600;
      padding: 0 0.125rem;
      border-radius: 0.125rem;
    }

    .dga-checkbox {
      color: #94a3b8;
      font-family: monospace;
      font-size: 0.5rem;
      flex-shrink: 0;
      margin-left: 0.25rem;
    }

    /* Score Bar Layout */
    .dga-score-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0.375rem;
      text-align: center;
      font-size: 0.53125rem;
      color: #ffffff;
      font-weight: 700;
    }

    .dga-score-card {
      padding: 0.5rem;
      border-radius: 0.5rem;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .dga-bg-emerald { background-color: #059669; }
    .dga-bg-amber   { background-color: #f59e0b; }
    .dga-bg-rose    { background-color: #e11d48; }

    .dga-score-num { font-size: 0.59375rem; }
    .dga-score-label {
      font-weight: 500;
      font-size: 0.46875rem;
      opacity: 0.9;
    }

    .dga-text-emerald { color: #d1fae5; }
    .dga-text-amber   { color: #fef3c7; }
    .dga-text-rose    { color: #ffe4e6; }

    .dga-doc-footer {
      background-color: #061539;
      color: #cbd5e1;
      padding: 0.625rem 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 0.53125rem;
      border-top: 1px solid #1e293b;
    }

    .dga-footer-gold {
      letter-spacing: 0.1em;
      text-transform: uppercase;
      font-size: 0.46875rem;
      font-weight: 600;
      color: #fbbf24;
    }

    /* Right Column Text & Cards */
    .dga-text-col {
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
      text-align: center;
    }

    .dga-badge-wrapper {
      display: flex;
      justify-content: center;
    }

    .dga-pill-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background-color: #0e2056;
      border-radius: 9999px;
      padding: 0.375rem 1rem;
      font-size: 0.75rem;
      font-weight: 600;
      color: #ffffff;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
      transition: background-color 0.2s ease;
    }

    .dga-pill-badge:hover {
      background-color: #162d73;
    }

    .dga-badge-icon {
      width: 0.875rem;
      height: 0.875rem;
      color: #fbbf24;
      flex-shrink: 0;
    }

    .dga-main-heading {
      font-size: 1.5rem;
      font-weight: 800;
      color: #0a1128;
      line-height: 1.25;
      letter-spacing: -0.025em;
    }

    .dga-description {
      color: #475569;
      font-size: 0.875rem;
      line-height: 1.625;
      max-width: 36rem;
      margin: 0 auto;
    }

    /* Dynamic Result Cards */
    .dga-result-list {
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
      padding-top: 0.25rem;
      text-align: left;
    }

    .dga-result-card {
      display: flex;
      align-items: center;
      gap: 0.875rem;
      border-radius: 1rem;
      padding: 0.875rem 1rem;
      border: 1px solid transparent;
      transition: all 0.3s ease;
    }

    .dga-result-card:hover {
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .dga-card-secure {
      border-color: #d1fae5;
      background-color: #e7f5ee;
    }
    .dga-card-secure:hover { border-color: #6ee7b7; }

    .dga-card-incomplete {
      border-color: #fef3c7;
      background-color: #f7f3ec;
    }
    .dga-card-incomplete:hover { border-color: #fcd34d; }

    .dga-card-risk {
      border-color: #ffe4e6;
      background-color: #faeaf0;
    }
    .dga-card-risk:hover { border-color: #fda4af; }

    .dga-badge-num {
      min-width: 3.5rem;
      border-radius: 0.75rem;
      padding: 0.5rem 0.75rem;
      text-align: center;
      font-size: 1rem;
      font-weight: 800;
      color: #ffffff;
      flex-shrink: 0;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease;
    }

    .dga-result-card:hover .dga-badge-num {
      transform: scale(1.05);
    }

    .dga-num-emerald { background-color: #16a34a; }
    .dga-num-amber   { background-color: #f59e0b; }
    .dga-num-rose    { background-color: #ef4444; }

    .dga-card-info h3 {
      font-size: 0.875rem;
      font-weight: 700;
      color: #0f172a;
      margin-bottom: 0.125rem;
    }

    .dga-card-info p {
      font-size: 0.75rem;
      color: #475569;
      line-height: 1.4;
    }

    /* Tablet Responsive Adjustments (640px+) */
    @media (min-width: 640px) {
      .dga-survey-section {
        padding: 4rem 1.5rem;
      }

      .dga-doc-header {
        padding: 1.25rem;
      }

      .dga-doc-title {
        font-size: 1rem;
      }

      .dga-doc-body {
        padding: 1rem;
        gap: 0.75rem;
      }

      .dga-main-heading {
        font-size: 2.25rem;
      }

      .dga-description {
        font-size: 1rem;
      }

      .dga-badge-num {
        min-width: 4rem;
        font-size: 1.125rem;
      }

      .dga-card-info h3 {
        font-size: 1rem;
      }

      .dga-card-info p {
        font-size: 0.875rem;
      }
    }

    /* Desktop Responsive Adjustments (1024px+) */
    @media (min-width: 1024px) {
      .dga-survey-section {
        min-height: 100vh;
        padding: 5rem 3rem;
        align-items: center;
      }

      .dga-main-container {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 4rem;
        align-items: center;
      }

      .dga-doc-col {
        grid-column: span 6;
      }

      .dga-text-col {
        grid-column: span 6;
        text-align: left;
      }

      .dga-badge-wrapper {
        justify-content: flex-start;
      }

      .dga-description {
        margin: 0;
      }
    }
  </style>
</head>
<body>

<section class="dga-survey-section">
  <div class="dga-main-container">
    
    <!-- Left Column: Survey Document Preview Card -->
    <div class="dga-doc-col">
      
      <!-- Card Frame with Amber/Gold Border Accent -->
      <div class="dga-card-border-accent">
        
        <!-- Top Accent Badge -->
        <div class="dga-top-badge">
          <span class="dga-badge-text">
            INTERNAL USE ONLY
          </span>
        </div>

        <!-- Inner Document Container -->
        <div class="dga-doc-inner">
          
          <!-- Document Header -->
          <div class="dga-doc-header">
           
            <h3 class="dga-doc-title">
              Child's Future Readiness <span style="color: #fbbf24;">Survey</span>
            </h3>
            <p class="dga-doc-desc">
              Your child has a dream — is the money ready for it? Find out in 3 minutes.
            </p>
          </div>

          <!-- Document Content Body -->
          <div class="dga-doc-body">
            
            <!-- Part 1 -->
            <div class="dga-part-box">
              <div class="dga-part-header">
                <span class="dga-part-tag">PART 1</span>
                <span class="dga-part-name">About You</span>
                <span class="dga-part-note">Introduction</span>
              </div>
              <div class="dga-part-lines">
                <p>Name: <span class="dga-dotted-line dga-line-75"></span></p>
                <p>Age: <span class="dga-dotted-line dga-line-16"></span> Occupation: <span class="dga-dotted-line dga-line-24"></span></p>
                <p>Number of children: <span class="dga-dotted-line dga-line-8"></span> Children's ages: <span class="dga-dotted-line dga-line-16"></span></p>
              </div>
            </div>

            <!-- Part 2 -->
            <div class="dga-part-box">
              <div class="dga-part-header">
                <span class="dga-part-tag">PART 2</span>
                <span class="dga-part-name">Your Child's Dream</span>
                <span class="dga-part-note">Say the dream out loud</span>
              </div>
              <div class="dga-part-lines">
                <p>1. What does your child want to become? (Doctor / Engineer / Business / Abroad)</p>
                <p>2. Up to what level do you want to educate them? Graduation / Post-Graduation / Abroad</p>
              </div>
            </div>

            <!-- Part 3 -->
            <div class="dga-part-box">
              <div class="dga-part-header">
                <span class="dga-part-tag">PART 3</span>
                <span class="dga-part-name">Reality Check</span>
                <span class="dga-part-note">Every "No" = one gap</span>
              </div>
              <ul class="dga-part-list">
                <li>
                  <span>1. Have you started a <mark class="dga-highlight-mark">separate fund</mark> for your child's education?</span>
                  <span class="dga-checkbox">☐Yes ☐No</span>
                </li>
                <li>
                  <span>2. Do you know education inflation is <mark class="dga-highlight-mark">10% a year</mark> — ₹15L becomes ₹50L+?</span>
                  <span class="dga-checkbox">☐Yes ☐No</span>
                </li>
                <li>
                  <span>3. <mark class="dga-highlight-mark">If something happened to you</mark> — would education continue?</span>
                  <span class="dga-checkbox">☐Yes ☐No</span>
                </li>
              </ul>
            </div>

            <!-- Part 4 Score Bar -->
            <div class="dga-part-box">
              <div class="dga-part-header">
                <span class="dga-part-tag">PART 4</span>
                <span class="dga-part-name">Your Readiness Score</span>
                <span class="dga-part-note">3-Min Evaluation</span>
              </div>
              <div class="dga-score-grid">
                <div class="dga-score-card dga-bg-emerald">
                  <div class="dga-score-num">0–1 Gaps</div>
                  <div class="dga-score-label dga-text-emerald">Secure</div>
                </div>
                <div class="dga-score-card dga-bg-amber">
                  <div class="dga-score-num">2–4 Gaps</div>
                  <div class="dga-score-label dga-text-amber">Incomplete</div>
                </div>
                <div class="dga-score-card dga-bg-rose">
                  <div class="dga-score-num">5+ Gaps</div>
                  <div class="dga-score-label dga-text-rose">At Risk</div>
                </div>
              </div>
            </div>

          </div>

          <!-- Document Footer Strip -->
          <div class="dga-doc-footer">
            <span>Coach Ankit Kohli | Your Financial Guardian</span>
            <span class="dga-footer-gold">Learn · Implement · Grow</span>
          </div>

        </div>
      </div>

    </div>

    <!-- Right Column: Text & Readiness Score Cards -->
    <div class="dga-text-col">

      <!-- Badge -->
      <div class="dga-badge-wrapper">
        <div class="dga-pill-badge">
          <svg class="dga-badge-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
          </svg>
          <span>Your Readiness Score</span>
        </div>
      </div>

      <!-- Heading -->
      <h2 class="dga-main-heading">
        At The End Of The Survey You Get One Clear Number.
      </h2>

      <!-- Description -->
      <p class="dga-description">
        Ankit Kohli personally scores your responses on a proven readiness framework and shows you exactly where you stand today.
      </p>

      <!-- Dynamic Result Cards -->
      <div class="dga-result-list">

        <div class="dga-result-card dga-card-secure">
          <div class="dga-badge-num dga-num-emerald">
            0–1
          </div>
          <div class="dga-card-info">
            <h3>Secure</h3>
            <p>Your financial foundation is solid. Just needs fine-tuning.</p>
          </div>
        </div>

        <div class="dga-result-card dga-card-incomplete">
          <div class="dga-badge-num dga-num-amber">
            2–4
          </div>
          <div class="dga-card-info">
            <h3>Incomplete</h3>
            <p>Significant gaps identified. Time to act and seal the gaps now.</p>
          </div>
        </div>

        <div class="dga-result-card dga-card-risk">
          <div class="dga-badge-num dga-num-rose">
            5+
          </div>
          <div class="dga-card-info">
            <h3>Dream At Risk</h3>
            <p>Critical vulnerabilities present. Requires immediate action.</p>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>

</body>
</html>