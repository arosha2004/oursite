const fs = require('fs');
const path = 'c:/xampp/htdocs/oursite/oursite/styles.css';
let css = fs.readFileSync(path, 'utf8');

const darkThemeOverrides = `
/* --- Dark Theme Overrides --- */
[data-theme="dark"] {
  --bg-primary: #030712;
  --bg-secondary: #0b0f19;
  --bg-card: rgba(17, 24, 39, 0.45);
  --border-card: rgba(255, 255, 255, 0.08);
  --border-glow: rgba(139, 92, 246, 0.35);
  --accent-blue: #3b82f6;
  --accent-purple: #8b5cf6;
  --accent-cyan: #06b6d4;
  --text-main: #f3f4f6;
  --text-secondary: #e5e7eb;
  --text-muted: #9ca3af;
}

[data-theme="dark"] header { background: rgba(3, 7, 18, 0.5); }
[data-theme="dark"] header.scrolled { background: rgba(3, 7, 18, 0.85); border-bottom-color: rgba(255, 255, 255, 0.06); }
[data-theme="dark"] .glass-card { border: 1px solid rgba(255, 255, 255, 0.08); }
[data-theme="dark"] .glass-card::before { background: linear-gradient(180deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0) 100%); }
[data-theme="dark"] .btn-secondary { background: rgba(255, 255, 255, 0.05); color: var(--text-main); }
[data-theme="dark"] .btn-secondary:hover { background: rgba(255, 255, 255, 0.1); border-color: rgba(255, 255, 255, 0.2); }
[data-theme="dark"] .code-floating-card { background: rgba(9, 11, 20, 0.85); border: 1px solid rgba(255, 255, 255, 0.08); color: #8b5cf6; }
[data-theme="dark"] .code-floating-card .keyword { color: #f472b6; }
[data-theme="dark"] .code-floating-card .string { color: #34d399; }
[data-theme="dark"] .code-floating-card .function { color: #60a5fa; }
[data-theme="dark"] .section-tag { background: rgba(59, 130, 246, 0.08); border: 1px solid rgba(59, 130, 246, 0.15); color: #60a5fa; }
[data-theme="dark"] .marquee-content span { color: rgba(255, 255, 255, 0.25); }
[data-theme="dark"] .service-icon { background: rgba(139, 92, 246, 0.1); border: 1px solid rgba(139, 92, 246, 0.2); color: var(--accent-purple); }
[data-theme="dark"] .timeline::before { background: linear-gradient(to right, var(--accent-blue), var(--accent-purple), rgba(255,255,255,0.05)); }
[data-theme="dark"] .timeline-dot { border: 4px solid var(--accent-purple); box-shadow: 0 0 15px var(--accent-purple); }
[data-theme="dark"] .timeline-content h3 { color: #fff; }
[data-theme="dark"] .filter-btn { border: 1px solid rgba(255, 255, 255, 0.08); background: rgba(255, 255, 255, 0.03); }
[data-theme="dark"] footer { background: #02040a; border-top: 1px solid rgba(255, 255, 255, 0.05); }
`;

if (!css.includes('[data-theme="dark"]')) {
  css += darkThemeOverrides;
  fs.writeFileSync(path, css);
  console.log("Dark theme overrides appended successfully.");
} else {
  console.log("Dark theme overrides already exist.");
}
