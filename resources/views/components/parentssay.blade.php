<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>What Parents Say</title>
  <style>
    /* Scoped Custom CSS with wps- Prefix to Avoid CSS Conflicts */
    .wps-section {
      background-color: #f6f1ea;
      color: #0f172a;
      padding: 3rem 1rem;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      transition: all 0.3s ease;
      box-sizing: border-box;
    }

    .wps-section *,
    .wps-section *::before,
    .wps-section *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    .wps-container {
      max-width: 1152px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 3rem;
    }

    /* Top Testimonials Section */
    .wps-top-header {
      text-align: center;
      display: flex;
      flex-direction: column;
      gap: 2rem;
    }

    .wps-header-box {
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
      align-items: center;
    }

    .wps-pill-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background-color: #eee4d5;
      color: #92400e;
      font-size: 0.75rem;
      font-weight: 600;
      padding: 0.375rem 1rem;
      border-radius: 9999px;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
      transition: background-color 0.2s ease;
    }

    .wps-pill-badge:hover {
      background-color: #e5d8c5;
    }

    .wps-badge-icon {
      width: 1rem;
      height: 1rem;
      color: #1e3a8a;
      flex-shrink: 0;
    }

    .wps-title {
      font-size: 1.5rem;
      font-weight: 800;
      color: #0a1128;
      letter-spacing: -0.025em;
      line-height: 1.25;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
    }

    .wps-heart-icon {
      display: inline-block;
      color: #ef4444;
      animation: wps-pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    /* Testimonials Grid */
    .wps-cards-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 1.25rem;
      max-width: 64rem;
      margin: 0 auto;
      text-align: left;
      width: 100%;
    }

    .wps-card {
      background-color: #ffffff;
      padding: 1.5rem;
      border-radius: 1.5rem;
      border: 1px solid rgba(241, 245, 249, 0.9);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
      transition: all 0.3s ease;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      gap: 1.5rem;
    }

    .wps-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
      border-color: rgba(253, 230, 138, 0.7);
    }

    .wps-card-top {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .wps-rating-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .wps-stars {
      display: flex;
      align-items: center;
      gap: 0.25rem;
      color: #fbbf24;
      font-size: 0.875rem;
    }

    .wps-star-svg {
      width: 1rem;
      height: 1rem;
      fill: currentColor;
    }

    .wps-quote-icon {
      color: #cbd5e1;
      transition: color 0.2s ease;
    }

    .wps-card:hover .wps-quote-icon {
      color: #fbbf24;
    }

    .wps-quote-svg {
      width: 1.5rem;
      height: 1.5rem;
      fill: currentColor;
    }

    .wps-quote-text {
      color: #334155;
      font-style: italic;
      font-size: 0.75rem;
      line-height: 1.625;
    }

    /* Author Footer */
    .wps-author-row {
      padding-top: 1rem;
      border-top: 1px solid #f1f5f9;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .wps-author-info {
      display: flex;
      align-items: center;
      gap: 0.75rem;
    }

    .wps-avatar {
      width: 2.25rem;
      height: 2.25rem;
      border-radius: 9999px;
      font-weight: 700;
      font-size: 0.75rem;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .wps-avatar-blue { background-color: #dbeafe; color: #1e3a8a; }
    .wps-avatar-amber { background-color: #fef3c7; color: #92400e; }
    .wps-avatar-emerald { background-color: #d1fae5; color: #065f46; }

    .wps-author-name {
      font-weight: 700;
      color: #0f172a;
      font-size: 0.75rem;
    }

    .wps-author-location {
      font-size: 0.6875rem;
      color: #94a3b8;
    }

    .wps-verified-tag {
      display: inline-flex;
      align-items: center;
      gap: 0.25rem;
      font-size: 0.625rem;
      font-weight: 600;
      color: #059669;
      background-color: #ecfdf5;
      padding: 0.125rem 0.5rem;
      border-radius: 9999px;
      border: 1px solid rgba(209, 250, 229, 0.6);
    }

    /* Bottom Section: WhatsApp VIP Banner */
    .wps-vip-wrapper {
      max-width: 48rem;
      margin: 0 auto;
      width: 100%;
    }

    .wps-vip-card {
      background: linear-gradient(135deg, #e7f0ec 0%, #edf7f2 50%, #dcf0e7 100%);
      border: 1px solid #c3ded2;
      border-radius: 1.5rem;
      padding: 1.5rem 1rem;
      text-align: center;
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
    }

    .wps-vip-card:hover {
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }

    .wps-wa-icon-box {
      width: 3rem;
      height: 3rem;
      background-color: #25D366;
      color: #ffffff;
      border-radius: 1rem;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto;
      box-shadow: 0 10px 15px -3px rgba(37, 211, 102, 0.3);
      transition: transform 0.3s ease;
    }

    .wps-vip-card:hover .wps-wa-icon-box {
      transform: scale(1.1);
    }

    .wps-wa-svg {
      width: 1.75rem;
      height: 1.75rem;
      fill: currentColor;
    }

    .wps-vip-content {
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
    }

    .wps-vip-title {
      font-size: 1.5rem;
      font-weight: 800;
      color: #0a1128;
      letter-spacing: -0.025em;
      line-height: 1.25;
      padding: 0 0.5rem;
    }

    .wps-vip-desc {
      color: #475569;
      font-size: 0.75rem;
      max-width: 32rem;
      margin: 0 auto;
      line-height: 1.625;
      padding: 0 0.5rem;
    }

    .wps-cta-box {
      padding-top: 0.5rem;
    }

    .wps-wa-button {
      background-color: #25D366;
      color: #ffffff;
      font-weight: 800;
      padding: 0.875rem 1.5rem;
      border-radius: 1rem;
      box-shadow: 0 10px 15px -3px rgba(37, 211, 102, 0.3);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.625rem;
      font-size: 0.75rem;
      text-decoration: none;
      cursor: pointer;
      transition: all 0.2s ease;
      border: none;
    }

    .wps-wa-button:hover {
      background-color: #20bd5a;
    }

    .wps-wa-button:active {
      transform: scale(0.95);
    }

    .wps-wa-btn-svg {
      width: 1rem;
      height: 1rem;
      fill: currentColor;
      flex-shrink: 0;
    }

    .wps-br-desktop {
      display: none;
    }

    /* Keyframes */
    @keyframes wps-pulse {
      50% { opacity: 0.5; }
    }

    /* Tablet Responsive Styles (640px+) */
    @media (min-width: 640px) {
      .wps-section {
        padding: 4rem 1.5rem;
      }

      .wps-container {
        gap: 4rem;
      }

      .wps-title,
      .wps-vip-title {
        font-size: 2.25rem;
      }

      .wps-br-desktop {
        display: inline;
      }

      .wps-quote-text {
        font-size: 0.875rem;
      }

      .wps-author-name {
        font-size: 0.875rem;
      }

      .wps-author-location {
        font-size: 0.75rem;
      }

      .wps-vip-card {
        padding: 2.5rem 2rem;
      }

      .wps-wa-icon-box {
        width: 3.5rem;
        height: 3.5rem;
      }

      .wps-wa-svg {
        width: 2rem;
        height: 2rem;
      }

      .wps-vip-desc {
        font-size: 0.875rem;
      }

      .wps-wa-button {
        padding: 1rem 2rem;
        font-size: 0.875rem;
      }

      .wps-wa-btn-svg {
        width: 1.25rem;
        height: 1.25rem;
      }
    }

    /* Desktop Responsive Styles (1024px+) */
    @media (min-width: 1024px) {
      .wps-section {
        padding: 5rem 2rem;
      }

      .wps-container {
        gap: 5rem;
      }

      .wps-title {
        font-size: 3rem;
      }

      .wps-vip-title {
        font-size: 2.25rem;
      }

      .wps-cards-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
      }

      .wps-card {
        padding: 1.75rem;
      }

      .wps-vip-card {
        padding: 3rem;
      }

      .wps-vip-desc {
        font-size: 1rem;
      }

      .wps-wa-button {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

<section class="wps-section">
  <div class="wps-container">
    
    <!-- Top Section: Testimonials -->
    <div class="wps-top-header">
      
      <!-- Top Pill Badge & Heading -->
      <div class="wps-header-box">
        <div class="wps-pill-badge">
          <svg class="wps-badge-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
          </svg>
          <span>Real Parent Stories</span>
        </div>

        <h2 class="wps-title">
          <span>What Parents Say</span>
          <span class="wps-heart-icon">❤️</span>
        </h2>
      </div>

      <!-- 3 Testimonial Cards Grid -->
      <div class="wps-cards-grid">
        
        <!-- Card 1 -->
        <div class="wps-card">
          <div class="wps-card-top">
            <!-- 5 Star Rating + Quote Icon -->
            <div class="wps-rating-row">
              <div class="wps-stars">
                <svg class="wps-star-svg" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="wps-star-svg" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="wps-star-svg" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="wps-star-svg" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="wps-star-svg" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
              </div>
              <span class="wps-quote-icon">
                <svg class="wps-quote-svg" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
              </span>
            </div>
            <!-- Quote -->
            <p class="wps-quote-text">
              "The survey opened our eyes in just 3 minutes. We finally knew where we stood."
            </p>
          </div>
          <!-- Author Info -->
          <div class="wps-author-row">
            <div class="wps-author-info">
              <div class="wps-avatar wps-avatar-blue">
                RP
              </div>
              <div>
                <div class="wps-author-name">Rajesh & Priya</div>
                <div class="wps-author-location">Parents, Delhi</div>
              </div>
            </div>
            <span class="wps-verified-tag">
              ✓ Verified
            </span>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="wps-card">
          <div class="wps-card-top">
            <!-- 5 Star Rating + Quote Icon -->
            <div class="wps-rating-row">
              <div class="wps-stars">
                <svg class="wps-star-svg" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="wps-star-svg" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="wps-star-svg" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="wps-star-svg" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="wps-star-svg" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
              </div>
              <span class="wps-quote-icon">
                <svg class="wps-quote-svg" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
              </span>
            </div>
            <!-- Quote -->
            <p class="wps-quote-text">
              "We thought we were 'well planned' — the Readiness Score showed us 4 gaps we had never seen."
            </p>
          </div>
          <!-- Author Info -->
          <div class="wps-author-row">
            <div class="wps-author-info">
              <div class="wps-avatar wps-avatar-amber">
                AS
              </div>
              <div>
                <div class="wps-author-name">Anjali Sharma</div>
                <div class="wps-author-location">Parent, Mumbai</div>
              </div>
            </div>
            <span class="wps-verified-tag">
              ✓ Verified
            </span>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="wps-card">
          <div class="wps-card-top">
            <!-- 5 Star Rating + Quote Icon -->
            <div class="wps-rating-row">
              <div class="wps-stars">
                <svg class="wps-star-svg" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="wps-star-svg" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="wps-star-svg" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="wps-star-svg" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="wps-star-svg" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
              </div>
              <span class="wps-quote-icon">
                <svg class="wps-quote-svg" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
              </span>
            </div>
            <!-- Quote -->
            <p class="wps-quote-text">
              "Yogi Sir asked one question and I couldn't sleep that night. Best ₹99 I ever spent."
            </p>
          </div>
          <!-- Author Info -->
          <div class="wps-author-row">
            <div class="wps-author-info">
              <div class="wps-avatar wps-avatar-emerald">
                VS
              </div>
              <div>
                <div class="wps-author-name">Vikram Singh</div>
                <div class="wps-author-location">Parent, Bengaluru</div>
              </div>
            </div>
            <span class="wps-verified-tag">
              ✓ Verified
            </span>
          </div>
        </div>

      </div>

    </div>

    <!-- Bottom Section: VIP WhatsApp Community Banner -->
    <div class="wps-vip-wrapper">
      <div class="wps-vip-card">
        
        <!-- WhatsApp Icon Badge -->
        <div class="wps-wa-icon-box">
          <svg class="wps-wa-svg" viewBox="0 0 24 24">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.205 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.156 4.221 4.29-1.134z"/>
          </svg>
        </div>

        <!-- Headline & Subtitle -->
        <div class="wps-vip-content">
          <h3 class="wps-vip-title">
            Join The VIP Child Future <br class="wps-br-desktop" />
            Planning Community
          </h3>
          <p class="wps-vip-desc">
            Get weekly parenting-finance tips, awareness posts, and readiness challenges from Ankit Kohli — completely free.
          </p>
        </div>

        <!-- WhatsApp CTA Button -->
        <div class="wps-cta-box">
          <a 
            href="https://chat.whatsapp.com" 
            target="_blank" 
            rel="noopener noreferrer"
            class="wps-wa-button"
          >
            <svg class="wps-wa-btn-svg" viewBox="0 0 24 24">
              <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.205 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.156 4.221 4.29-1.134z"/>
            </svg>
            <span>Join Free VIP WhatsApp Community</span>
          </a>
        </div>

      </div>
    </div>

  </div>
</section>

</body>
</html>