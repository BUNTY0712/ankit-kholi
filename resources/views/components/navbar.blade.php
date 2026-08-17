<style>
  /* Scoped Reset & Base Styles to Prevent External Conflicts */
  .stb-wrapper {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    box-sizing: border-box;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    z-index: 99999;
  }

  .stb-wrapper *,
  .stb-wrapper *::before,
  .stb-wrapper *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  /* Banner Container */
  .stb-banner {
    position: relative;
    background-color: #031548;
    color: #ffffff;
    padding: 0.75rem 1rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }

  /* Spacer to preserve natural flow height for content below fixed navbar */
  .stb-spacer {
    height: 64px;
    width: 100%;
    visibility: hidden;
    pointer-events: none;
  }

  /* Inner Layout */
  .stb-container {
    max-width: 80rem; /* 1280px */
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 0.25rem;
    text-align: center;
  }

  /* Text & Link Styling */
  .stb-text {
    font-size: 0.75rem;
    font-weight: 500;
  }

  .stb-link {
    color: #FFB800;
    font-weight: 700;
    text-decoration: underline;
    white-space: nowrap;
    font-size: 0.875rem;
    transition: color 0.2s ease;
  }

  .stb-link:hover {
    color: #fde047; /* Lighter amber for hover */
  }

  /* Tablet Responsive Styles (640px+) */
  @media (min-width: 640px) {
    .stb-spacer {
      height: 48px;
    }

    .stb-container {
      flex-direction: row;
      gap: 0.5rem;
    }

    .stb-text {
      font-size: 0.875rem;
    }
  }

  /* Desktop Responsive Styles (768px+) */
  @media (min-width: 768px) {
    .stb-text,
    .stb-link {
      font-size: 1rem;
    }
  }
</style>

<div class="stb-wrapper">
  <div class="stb-banner">
    <div class="stb-container">
      <span class="stb-text">
        🎯 Only a few survey slots left this week —
      </span>

      <a href="https://rzp.io/rzp/mosB0TR" target="_blank" rel="noopener noreferrer" class="stb-link">
        Book Your ₹99 Survey Slot →
      </a>
    </div>
  </div>
</div>
<div class="stb-spacer" aria-hidden="true"></div>