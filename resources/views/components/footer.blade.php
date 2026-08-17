<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Footer - Ankit Kohli</title>
  <style>
    /* Scoped Reset & Base Styles to Prevent External Conflicts */
    .ftr-section-wrapper {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      box-sizing: border-box;
      background-color: #0b174b;
    }

    .ftr-section-wrapper *,
    .ftr-section-wrapper *::before,
    .ftr-section-wrapper *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    /* Footer Container */
    .ftr-container {
      background-color: #0b174b;
      color: #cbd5e1;
      padding: 2.5rem 1.5rem;
      text-align: center;
      font-size: 0.75rem;
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
      align-items: center;
    }

    /* Brand Title */
    .ftr-brand-title {
      color: #ffffff;
      font-weight: 700;
      font-size: 0.875rem;
      letter-spacing: 0.025em;
      line-height: 1.375;
    }

    /* Subtitle */
    .ftr-subtitle {
      color: #cbd5e1;
      font-size: 0.75rem;
      font-weight: 400;
      line-height: 1.5;
    }

    /* Legal Disclaimer */
    .ftr-disclaimer {
      color: #94a3b8;
      font-size: 0.6875rem;
      max-width: 42rem;
      margin: 0 auto;
      line-height: 1.625;
      padding-top: 0.25rem;
    }

    /* Copyright Notice */
    .ftr-copyright {
      color: #94a3b8;
      font-size: 0.6875rem;
      padding-top: 0.5rem;
    }

    /* Responsive Adjustments (640px+) */
    @media (min-width: 640px) {
      .ftr-brand-title {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

<div class="ftr-section-wrapper">
  <footer class="ftr-container">
    
    <!-- Brand Title -->
    <h2 class="ftr-brand-title">
      Coach Ankit Kohli
    </h2>

    <!-- Subtitle -->
    <p class="ftr-subtitle">
      Child's Future Readiness Survey · Financial Awareness Mentor
    </p>

    <!-- Legal Disclaimer -->
    <p class="ftr-disclaimer">
      Disclaimer: This page and the Child's Future Readiness Survey are intended for educational and awareness purposes related to child future planning and financial preparedness only.
    </p>

    <!-- Copyright -->
    <p class="ftr-copyright">
      © 2026 Ankit Kohli. All rights reserved.
    </p>

  </footer>
</div>

</body>
</html>