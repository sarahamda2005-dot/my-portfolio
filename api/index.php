<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Sara Hamda — Portfolio</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet"/>
<style>
  *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

  :root {
    --bg-dark: #0d1117;
    --bg-card: #161b22;
    --bg-card2: #1a2030;
    --accent: #4f6ef7;
    --accent-hover: #3a57e8;
    --text-primary: #ffffff;
    --text-secondary: #a0aec0;
    --border: rgba(255,255,255,0.08);
  }

  html { scroll-behavior: smooth; }

  body {
    font-family: 'Poppins', sans-serif;
    background: var(--bg-dark);
    color: var(--text-primary);
    min-height: 100vh;
  }

  /* ── NAVBAR ── */
  nav {
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 100;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 6vw;
    height: 64px;
    background: rgba(13,17,23,0.92);
    backdrop-filter: blur(12px);
    border-bottom: 1px solid var(--border);
  }

  .nav-logo {
    font-size: 20px;
    font-weight: 700;
    color: var(--text-primary);
    text-decoration: none;
    letter-spacing: -0.3px;
  }

  .nav-links {
    display: flex;
    align-items: center;
    gap: 0;
    list-style: none;
  }

  .nav-links li a {
    color: var(--text-secondary);
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    padding: 8px 20px;
    transition: color 0.2s;
    position: relative;
  }

  .nav-links li a:hover { color: var(--text-primary); }

  .nav-links li:not(:last-child) a::after {
    content: '|';
    position: absolute;
    right: 0;
    color: var(--border);
  }

  .nav-links li.active a {
    color: var(--text-primary);
    font-weight: 600;
  }

  .nav-links li.active a::before {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 20px;
    right: 20px;
    height: 2px;
    background: var(--accent);
    border-radius: 2px;
  }

  /* ── HERO ── */
  #home {
    min-height: 100vh;
    display: flex;
    align-items: center;
    padding: 80px 6vw 60px;
    position: relative;
    overflow: hidden;
    background:
      radial-gradient(ellipse 60% 50% at 20% 60%, rgba(79,110,247,0.12) 0%, transparent 70%),
      radial-gradient(ellipse 40% 40% at 80% 30%, rgba(79,110,247,0.06) 0%, transparent 70%),
      var(--bg-dark);
  }

  /* subtle grid texture */
  #home::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(rgba(255,255,255,0.02) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255,255,255,0.02) 1px, transparent 1px);
    background-size: 40px 40px;
    pointer-events: none;
  }

  .hero-inner {
    display: flex;
    align-items: center;
    gap: 4vw;
    max-width: 1200px;
    margin: 0 auto;
    width: 100%;
    position: relative;
    z-index: 1;
  }

  .hero-photo {
    flex-shrink: 0;
    width: 340px;
    height: 420px;
    position: relative;
  }

  .hero-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top center;
    border-radius: 12px;
    display: block;
    filter: brightness(0.95) contrast(1.05);
  }

  /* glow behind photo */
  .hero-photo::after {
    content: '';
    position: absolute;
    bottom: -20px;
    left: 10%;
    right: 10%;
    height: 60px;
    background: rgba(79,110,247,0.25);
    filter: blur(30px);
    border-radius: 50%;
    z-index: -1;
  }

  /* placeholder when no photo */
  .photo-placeholder {
    width: 100%;
    height: 100%;
    border-radius: 12px;
    background: linear-gradient(135deg, #1a2040 0%, #2a3060 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 80px;
    font-weight: 700;
    color: rgba(79,110,247,0.4);
    letter-spacing: -2px;
    border: 1px solid rgba(79,110,247,0.2);
  }

  .hero-text { flex: 1; }

  .hero-text .hello {
    font-size: 20px;
    font-weight: 400;
    color: var(--text-secondary);
    margin-bottom: 8px;
    opacity: 0;
    animation: fadeUp 0.6s 0.1s forwards;
  }

  .hero-text h1 {
    font-size: clamp(38px, 5vw, 60px);
    font-weight: 800;
    line-height: 1.05;
    letter-spacing: -1px;
    margin-bottom: 20px;
    opacity: 0;
    animation: fadeUp 0.6s 0.25s forwards;
  }

  .hero-text .subtitle {
    font-size: 16px;
    color: var(--text-secondary);
    font-weight: 400;
    line-height: 1.6;
    margin-bottom: 8px;
    opacity: 0;
    animation: fadeUp 0.6s 0.4s forwards;
  }

  .hero-text .subtitle strong {
    color: var(--text-primary);
    font-weight: 600;
  }

  .hero-text .tagline {
    font-size: 14px;
    color: var(--text-secondary);
    margin-bottom: 36px;
    opacity: 0;
    animation: fadeUp 0.6s 0.5s forwards;
  }

  .btn-cv {
    display: inline-block;
    padding: 13px 32px;
    background: var(--accent);
    color: white;
    text-decoration: none;
    font-size: 15px;
    font-weight: 600;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    transition: background 0.2s, transform 0.15s;
    opacity: 0;
    animation: fadeUp 0.6s 0.6s forwards;
  }

  .btn-cv:hover { background: var(--accent-hover); transform: translateY(-1px); }
  .btn-cv:active { transform: translateY(0); }

  /* ── PROJECTS ── */
  #projects {
    padding: 80px 6vw;
    background:
      radial-gradient(ellipse 50% 60% at 80% 50%, rgba(79,110,247,0.07) 0%, transparent 70%),
      var(--bg-dark);
  }

  .section-header {
    text-align: center;
    margin-bottom: 50px;
  }

  .section-header h2 {
    font-size: 32px;
    font-weight: 700;
    letter-spacing: -0.5px;
    position: relative;
    display: inline-block;
  }

  .section-header h2::before,
  .section-header h2::after {
    content: '——';
    color: var(--accent);
    font-weight: 300;
    margin: 0 16px;
    font-size: 20px;
    vertical-align: middle;
  }

  .projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 24px;
    max-width: 1100px;
    margin: 0 auto;
  }

  .project-card {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: 14px;
    overflow: hidden;
    transition: transform 0.25s, border-color 0.25s, box-shadow 0.25s;
  }

  .project-card:hover {
    transform: translateY(-6px);
    border-color: rgba(79,110,247,0.35);
    box-shadow: 0 20px 40px rgba(0,0,0,0.4), 0 0 0 1px rgba(79,110,247,0.1);
  }

  .project-thumb {
    width: 100%;
    height: 200px;
    overflow: hidden;
    background: var(--bg-card2);
    position: relative;
  }

  .project-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.4s;
  }

  .project-card:hover .project-thumb img {
    transform: scale(1.04);
  }

  /* SVG illustration fallback */
  .thumb-illustration {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .project-info {
    padding: 20px;
    text-align: center;
  }

  .project-info h3 {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 16px;
    letter-spacing: -0.2px;
  }

  .project-actions {
    display: flex;
    gap: 10px;
    justify-content: center;
  }

  .btn-live {
    padding: 9px 22px;
    background: var(--accent);
    color: white;
    border: none;
    border-radius: 7px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    transition: background 0.2s, transform 0.15s;
    font-family: 'Poppins', sans-serif;
  }

  .btn-live:hover { background: var(--accent-hover); transform: translateY(-1px); }

  .btn-code {
    padding: 9px 22px;
    background: transparent;
    color: var(--text-primary);
    border: 1px solid rgba(255,255,255,0.18);
    border-radius: 7px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    transition: border-color 0.2s, background 0.2s, transform 0.15s;
    font-family: 'Poppins', sans-serif;
  }

  .btn-code:hover {
    border-color: rgba(255,255,255,0.4);
    background: rgba(255,255,255,0.05);
    transform: translateY(-1px);
  }

  /* ── ABOUT ── */
  #about {
    padding: 80px 6vw;
    background: var(--bg-card);
    border-top: 1px solid var(--border);
    border-bottom: 1px solid var(--border);
  }

  .about-inner {
    max-width: 700px;
    margin: 0 auto;
    text-align: center;
  }

  .about-inner h2 {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 20px;
  }

  .about-inner p {
    color: var(--text-secondary);
    font-size: 15px;
    line-height: 1.8;
    margin-bottom: 32px;
  }

  .skills-row {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
  }

  .skill-badge {
    padding: 6px 16px;
    background: rgba(79,110,247,0.12);
    border: 1px solid rgba(79,110,247,0.25);
    border-radius: 20px;
    font-size: 13px;
    font-weight: 500;
    color: #a0b4ff;
  }

  /* ── CONTACT ── */
  #contact {
    padding: 80px 6vw;
    text-align: center;
  }

  #contact h2 {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 12px;
  }

  #contact p {
    color: var(--text-secondary);
    font-size: 15px;
    margin-bottom: 32px;
  }

  .contact-links {
    display: flex;
    gap: 16px;
    justify-content: center;
    flex-wrap: wrap;
  }

  .contact-link {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 12px 24px;
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: 8px;
    color: var(--text-primary);
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    transition: border-color 0.2s, background 0.2s, transform 0.15s;
  }

  .contact-link:hover {
    border-color: rgba(79,110,247,0.4);
    background: rgba(79,110,247,0.08);
    transform: translateY(-2px);
  }

  /* ── FOOTER ── */
  footer {
    padding: 24px 6vw;
    text-align: center;
    border-top: 1px solid var(--border);
    color: var(--text-secondary);
    font-size: 13px;
  }

  /* ── ANIMATIONS ── */
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  .fade-in {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 0.6s, transform 0.6s;
  }
  .fade-in.visible {
    opacity: 1;
    transform: translateY(0);
  }

  /* ── RESPONSIVE ── */
  @media (max-width: 768px) {
    .hero-inner { flex-direction: column; text-align: center; }
    .hero-photo { width: 220px; height: 280px; }
    .nav-links { gap: 0; }
    .nav-links li a { padding: 8px 12px; font-size: 13px; }
  }
</style>
</head>
<body>

<!-- NAVBAR -->
<nav>
  <a class="nav-logo" href="#home">Sara Hamda</a>
  <ul class="nav-links">
    <li class="active"><a href="#home">Home</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>

<!-- HERO -->
<section id="home">
  <div class="hero-inner">
    <div class="hero-photo">
      <!--
        ⬇ REMPLACE "ta-photo.jpg" par le chemin de ta vraie photo
        <img src="ta-photo.jpg" alt="Sara Hamda"/>
        Si pas encore de photo, on garde le placeholder :
      -->
      <img src="/sara hm.jpeg" alt="Sara Hamda"/>
    </div>

    <div class="hero-text">
      <p class="hello">Hello, I'm</p>
      <h1>Sara Hamda</h1>
      <p class="subtitle">Étudiante en première année, spécialisée dans le <strong>développement web</strong>.</p>
      <p class="tagline">Passionnée par la création de sites web modernes et interactifs.</p>
      <a class="btn-cv" href="#" onclick="alert('Ton CV sera ici!')">Download CV</a>
    </div>
  </div>
</section>

<!-- PROJECTS -->
<section id="projects">
  <div class="section-header fade-in">
    <h2>Mes Projets</h2>
  </div>

  <div class="projects-grid">

    <!-- Projet 1 -->
    <div class="project-card fade-in">
      <div class="project-thumb">
        <!--
          REMPLACE par une vraie capture d'écran :
          <img src="projet1.png" alt="Projet 1"/>
        -->
        <div class="thumb-illustration">
          <svg width="260" height="180" viewBox="0 0 260 180" fill="none">
            <rect x="20" y="20" width="180" height="120" rx="8" fill="#1e2a4a" stroke="#4f6ef7" stroke-width="1"/>
            <rect x="20" y="20" width="180" height="22" rx="8" fill="#4f6ef7" opacity="0.4"/>
            <circle cx="33" cy="31" r="4" fill="#4f6ef7" opacity="0.7"/>
            <circle cx="46" cy="31" r="4" fill="#4f6ef7" opacity="0.4"/>
            <rect x="30" y="55" width="50" height="60" rx="4" fill="#2a3a6a"/>
            <rect x="90" y="55" width="50" height="60" rx="4" fill="#2a3a6a"/>
            <rect x="150" y="55" width="40" height="60" rx="4" fill="#2a3a6a"/>
            <rect x="30" y="118" width="50" height="8" rx="3" fill="#4f6ef7" opacity="0.6"/>
            <rect x="90" y="118" width="50" height="8" rx="3" fill="#4f6ef7" opacity="0.6"/>
            <rect x="150" y="118" width="40" height="8" rx="3" fill="#4f6ef7" opacity="0.6"/>
            <!-- phone -->
            <rect x="195" y="60" width="45" height="76" rx="6" fill="#1e2a4a" stroke="#4f6ef7" stroke-width="1"/>
            <rect x="199" y="68" width="37" height="60" rx="3" fill="#2a3a6a"/>
            <rect x="207" y="138" width="20" height="4" rx="2" fill="#4f6ef7" opacity="0.4"/>
          </svg>
        </div>
      </div>
      <div class="project-info">
        <h3>atelier 1</h3>
        <p>TD 1</p>
        <div class="project-actions">
          <a class="btn-live" href="TD 1.pdf" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="PARTIE1td1.php" onclick="alert('Lien code ici')">Code</a>
        </div> 
        <div class="project-info">
        
        <p>TD 2</p>
       <div class="project-actions">
          <a class="btn-live" href="TD 1.pdf" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="PARTIE1td1.php" onclick="alert('Lien code ici')">Code</a>
        </div>
      </div>
      <div class="project-info">
        
        <p>TD 3</p>
       <div class="project-actions">
          <a class="btn-live" href="TD3.pdf" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="PARTIE1td3.php" onclick="alert('Lien code ici')">Code</a>
        </div>
      </div>

      <div class="project-info">
        
        <p>TD 4</p>
       <div class="project-actions">
          <a class="btn-live" href="TD 4.pdf" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="PARTIE1td4.php" onclick="alert('Lien code ici')">Code</a>
        </div>
      </div>

      <div class="project-info">
        
        <p>TD 5</p>
       <div class="project-actions">
          <a class="btn-live" href="TD 5.pdf" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="PARTIE1td5.php" onclick="alert('Lien code ici')">Code</a>
        </div>
      </div>

      <div class="project-info">
        
        <p>TD 6</p>
       <div class="project-actions">
          <a class="btn-live" href="Rapport TD6.pdf" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="PARTIE1td6.php" onclick="alert('Lien code ici')">Code</a>
        </div>
      </div> 

      <div class="project-info">
        
        <p>TD 7</p>
       <div class="project-actions">
          <a class="btn-live" href="TD 7.pdf" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="PARTIE1td7.php" onclick="alert('Lien code ici')">Code</a>
        </div>
      </div>

      <div class="project-info">
        
        <p>TD 8</p>
       <div class="project-actions">
          <a class="btn-live" href="TD 8.pdf" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="PARTIE2td8.php" onclick="alert('Lien code ici')">Code</a>
        </div>
      </div>

      <div class="project-info">
        
        <p>TD 9</p>
       <div class="project-actions">
          <a class="btn-live" href="TD 9.pdf" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="PARTIE2td9.php" onclick="alert('Lien code ici')">Code</a>
        </div>
      </div>

      <div class="project-info">
        
        <p>TD 10</p>
       <div class="project-actions">
          <a class="btn-live" href="TD 10.pdf" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="PARTIE2td10.php" onclick="alert('Lien code ici')">Code</a>
        </div>
      </div>

      <div class="project-info">
        
        <p>TD 11</p>
       <div class="project-actions">
          <a class="btn-live" href="TD 11.pdf" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="PARTIE2td11.php" onclick="alert('Lien code ici')">Code</a>
        </div>
      </div>
      <div class="project-info">
        
        <p>TD 12</p>
       <div class="project-actions">
          <a class="btn-live" href="Rapport TD12.pdf" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="PARTIE3td12.php" onclick="alert('Lien code ici')">Code</a>
        </div>
      </div>

      <div class="project-info">
        
        <p>TD 13</p>
       <div class="project-actions">
          <a class="btn-live" href="TD 13.pdf" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="PARTIE3td13.php" onclick="alert('Lien code ici')">Code</a>
        </div>
      </div>
      <div class="project-info">
        
        <p>TD 14</p>
       <div class="project-actions">
          <a class="btn-live" href="TD 14.pdf" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="PARTIE3td14.php" onclick="alert('Lien code ici')">Code</a>
        </div>
      </div>

      <div class="project-info">
        
        <p>TD 15</p>
       <div class="project-actions">
          <a class="btn-live" href="TD 15.pdf" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="PARTIE3td15.php" onclick="alert('Lien code ici')">Code</a>
        </div>
      </div>





    </div>
</div>

    <!-- Projet 2 -->
    <div class="project-card fade-in">
      <div class="project-thumb">
        <div class="thumb-illustration">
          <svg width="260" height="180" viewBox="0 0 260 180" fill="none">
            <rect x="15" y="25" width="230" height="140" rx="6" fill="#1a2035" stroke="#4f6ef7" stroke-width="0.8"/>
            <!-- sidebar -->
            <rect x="15" y="25" width="55" height="140" rx="6" fill="#151e32"/>
            <rect x="22" y="40" width="40" height="6" rx="3" fill="#4f6ef7" opacity="0.5"/>
            <rect x="22" y="54" width="35" height="5" rx="2" fill="#ffffff" opacity="0.15"/>
            <rect x="22" y="66" width="38" height="5" rx="2" fill="#ffffff" opacity="0.15"/>
            <rect x="22" y="78" width="32" height="5" rx="2" fill="#ffffff" opacity="0.15"/>
            <!-- main content -->
            <rect x="80" y="35" width="70" height="24" rx="4" fill="#2a3a6a"/>
            <text x="115" y="51" font-size="11" fill="#4f6ef7" font-family="sans-serif" text-anchor="middle" font-weight="600">30.15</text>
            <rect x="160" y="35" width="70" height="24" rx="4" fill="#1e3040"/>
            <!-- donut chart -->
            <circle cx="105" cy="110" r="28" stroke="#4f6ef7" stroke-width="10" fill="none" stroke-dasharray="88 88" stroke-dashoffset="22" opacity="0.8"/>
            <circle cx="105" cy="110" r="28" stroke="#5dcaa5" stroke-width="10" fill="none" stroke-dasharray="40 136" stroke-dashoffset="-66" opacity="0.7"/>
            <circle cx="105" cy="110" r="28" stroke="#f7c94f" stroke-width="10" fill="none" stroke-dasharray="30 146" stroke-dashoffset="-106" opacity="0.6"/>
            <!-- bars -->
            <rect x="150" y="140" width="12" height="20" rx="2" fill="#4f6ef7" opacity="0.8"/>
            <rect x="166" y="128" width="12" height="32" rx="2" fill="#4f6ef7" opacity="0.7"/>
            <rect x="182" y="118" width="12" height="42" rx="2" fill="#4f6ef7" opacity="0.8"/>
            <rect x="198" y="108" width="12" height="52" rx="2" fill="#4f6ef7"/>
            <rect x="214" y="120" width="12" height="40" rx="2" fill="#4f6ef7" opacity="0.7"/>
          </svg>
        </div>
      </div>
      <div class="project-info">
        <h3>atelier 2</h3>
        <p>Exercice 1</p>
        <div class="project-actions">
          <a class="btn-live" href="rapport 11.pdf" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="exercice1.php" onclick="alert('Lien code ici')">Code</a>
        </div>
      </div><br>
      <div class="project-info">
        <p>Exercice 2</p>
        <div class="project-actions">
          <a class="btn-live" href="Rapport  2.pdf" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="exercice2.php" onclick="alert('Lien code ici')">Code</a>
        </div>
      </div>
    </div>

    <!-- Projet 3 -->
    <div class="project-card fade-in">
      <div class="project-thumb">
        <div class="thumb-illustration">
          <svg width="260" height="180" viewBox="0 0 260 180" fill="none">
            <!-- ecommerce site -->
            <rect x="10" y="15" width="240" height="155" rx="6" fill="#f9f5f2"/>
            <!-- navbar -->
            <rect x="10" y="15" width="240" height="28" rx="6" fill="#ffffff" stroke="#e0d5cc" stroke-width="0.5"/>
            <rect x="20" y="22" width="50" height="6" rx="3" fill="#c8a882"/>
            <rect x="170" y="21" width="22" height="8" rx="2" fill="#e8b89a"/>
            <rect x="196" y="21" width="22" height="8" rx="2" fill="#e8b89a" opacity="0.5"/>
            <rect x="222" y="21" width="22" height="8" rx="2" fill="#e8b89a" opacity="0.5"/>
            <!-- hero image area -->
            <rect x="10" y="43" width="120" height="90" fill="#edd5c0"/>
            <rect x="130" y="43" width="120" height="90" fill="#d4c4b8"/>
            <!-- product cards row -->
            <rect x="14" y="138" width="56" height="28" rx="3" fill="#f0e8e0" stroke="#ddd" stroke-width="0.5"/>
            <rect x="76" y="138" width="56" height="28" rx="3" fill="#f0e8e0" stroke="#ddd" stroke-width="0.5"/>
            <rect x="138" y="138" width="56" height="28" rx="3" fill="#f0e8e0" stroke="#ddd" stroke-width="0.5"/>
            <rect x="200" y="138" width="46" height="28" rx="3" fill="#f0e8e0" stroke="#ddd" stroke-width="0.5"/>
          </svg>
        </div>
      </div>
      <div class="project-info">
        <h3>atelier 3</h3>
        <div class="project-actions">
         
        </div>
      </div>

       <div class="project-info">
        <h3>Exercice 1</h3>
        <div class="project-actions">
          <a class="btn-live" href="#" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="#" onclick="alert('Lien code ici')">Code</a>
        </div>
      </div>

       <div class="project-info">
        <h3>Exercice 2</h3>
        <div class="project-actions">
          <a class="btn-live" href="#" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="#" onclick="alert('Lien code ici')">Code</a>
        </div>
      </div>
    </div>

  </div>

  <div class="projects-grid">
  <!-- Projet 4 -->
    <div class="project-card fade-in">
      <div class="project-thumb">
        <!--
          REMPLACE par une vraie capture d'écran :
          <img src="projet1.png" alt="Projet 1"/>
        -->
        <div class="thumb-illustration">
          <svg width="260" height="180" viewBox="0 0 260 180" fill="none">
            <rect x="20" y="20" width="180" height="120" rx="8" fill="#1e2a4a" stroke="#4f6ef7" stroke-width="1"/>
            <rect x="20" y="20" width="180" height="22" rx="8" fill="#4f6ef7" opacity="0.4"/>
            <circle cx="33" cy="31" r="4" fill="#4f6ef7" opacity="0.7"/>
            <circle cx="46" cy="31" r="4" fill="#4f6ef7" opacity="0.4"/>
            <rect x="30" y="55" width="50" height="60" rx="4" fill="#2a3a6a"/>
            <rect x="90" y="55" width="50" height="60" rx="4" fill="#2a3a6a"/>
            <rect x="150" y="55" width="40" height="60" rx="4" fill="#2a3a6a"/>
            <rect x="30" y="118" width="50" height="8" rx="3" fill="#4f6ef7" opacity="0.6"/>
            <rect x="90" y="118" width="50" height="8" rx="3" fill="#4f6ef7" opacity="0.6"/>
            <rect x="150" y="118" width="40" height="8" rx="3" fill="#4f6ef7" opacity="0.6"/>
            <!-- phone -->
            <rect x="195" y="60" width="45" height="76" rx="6" fill="#1e2a4a" stroke="#4f6ef7" stroke-width="1"/>
            <rect x="199" y="68" width="37" height="60" rx="3" fill="#2a3a6a"/>
            <rect x="207" y="138" width="20" height="4" rx="2" fill="#4f6ef7" opacity="0.4"/>
          </svg>
        </div>
</div>

      <div class="project-info">
        <h3>atelier 4</h3>
        <p></p>
        <div class="project-actions">
          <a class="btn-live" href="" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="atelier 4.php" onclick="alert('Lien code ici')">Code</a>
          <a class="btn-code" href="https://github.com/sarahamda2005-dot/atelier4.git" onclick="alert('Lien GitHub ici')">GitHub</a>

        </div> 
</div>
</div><br>

        <!-- Projet 5 -->
    <div class="project-card fade-in">
      <div class="project-thumb">
        <!--
          REMPLACE par une vraie capture d'écran :
          <img src="projet1.png" alt="Projet 1"/>
        -->
        <div class="thumb-illustration">
          <svg width="260" height="180" viewBox="0 0 260 180" fill="none">
            <!-- sidebar -->
            <rect x="15" y="25" width="55" height="140" rx="6" fill="#151e32"/>
            <rect x="22" y="40" width="40" height="6" rx="3" fill="#4f6ef7" opacity="0.5"/>
            <rect x="22" y="54" width="35" height="5" rx="2" fill="#ffffff" opacity="0.15"/>
            <rect x="22" y="66" width="38" height="5" rx="2" fill="#ffffff" opacity="0.15"/>
            <rect x="22" y="78" width="32" height="5" rx="2" fill="#ffffff" opacity="0.15"/>
            <!-- main content -->
            <rect x="80" y="35" width="70" height="24" rx="4" fill="#2a3a6a"/>
            <text x="115" y="51" font-size="11" fill="#4f6ef7" font-family="sans-serif" text-anchor="middle" font-weight="600">30.15</text>
            <rect x="160" y="35" width="70" height="24" rx="4" fill="#1e3040"/>
            <!-- donut chart -->
            <circle cx="105" cy="110" r="28" stroke="#4f6ef7" stroke-width="10" fill="none" stroke-dasharray="88 88" stroke-dashoffset="22" opacity="0.8"/>
            <circle cx="105" cy="110" r="28" stroke="#5dcaa5" stroke-width="10" fill="none" stroke-dasharray="40 136" stroke-dashoffset="-66" opacity="0.7"/>
            <circle cx="105" cy="110" r="28" stroke="#f7c94f" stroke-width="10" fill="none" stroke-dasharray="30 146" stroke-dashoffset="-106" opacity="0.6"/>
            <!-- bars -->
            <rect x="150" y="140" width="12" height="20" rx="2" fill="#4f6ef7" opacity="0.8"/>
            <rect x="166" y="128" width="12" height="32" rx="2" fill="#4f6ef7" opacity="0.7"/>
            <rect x="182" y="118" width="12" height="42" rx="2" fill="#4f6ef7" opacity="0.8"/>
            <rect x="198" y="108" width="12" height="52" rx="2" fill="#4f6ef7"/>
            <rect x="214" y="120" width="12" height="40" rx="2" fill="#4f6ef7" opacity="0.7"/>
          </svg>
        </div>
      </div>
      <div class="project-info">
        <h3>atelier 5</h3>
        <p></p>
        <div class="project-actions">
          <a class="btn-live" href="" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href=" " onclick="alert('Lien code ici')">Code</a>
          <a class="btn-code" href="https://github.com/sarahamda2005-dot/ateliers5.git" onclick="alert('Lien GitHub ici')">GitHub</a>
        </div>
</div>
</div>


<!-- Projet 6 -->
    <div class="project-card fade-in">
      <div class="project-thumb">
        <div class="thumb-illustration">
          <svg width="260" height="180" viewBox="0 0 260 180" fill="none">
            <!-- ecommerce site -->
            <rect x="10" y="15" width="240" height="155" rx="6" fill="#f9f5f2"/>
            <!-- navbar -->
            <rect x="10" y="15" width="240" height="28" rx="6" fill="#ffffff" stroke="#e0d5cc" stroke-width="0.5"/>
            <rect x="20" y="22" width="50" height="6" rx="3" fill="#c8a882"/>
            <rect x="170" y="21" width="22" height="8" rx="2" fill="#e8b89a"/>
            <rect x="196" y="21" width="22" height="8" rx="2" fill="#e8b89a" opacity="0.5"/>
            <rect x="222" y="21" width="22" height="8" rx="2" fill="#e8b89a" opacity="0.5"/>
            <!-- hero image area -->
            <rect x="10" y="43" width="120" height="90" fill="#edd5c0"/>
            <rect x="130" y="43" width="120" height="90" fill="#d4c4b8"/>
            <!-- product cards row -->
            <rect x="14" y="138" width="56" height="28" rx="3" fill="#f0e8e0" stroke="#ddd" stroke-width="0.5"/>
            <rect x="76" y="138" width="56" height="28" rx="3" fill="#f0e8e0" stroke="#ddd" stroke-width="0.5"/>
            <rect x="138" y="138" width="56" height="28" rx="3" fill="#f0e8e0" stroke="#ddd" stroke-width="0.5"/>
            <rect x="200" y="138" width="46" height="28" rx="3" fill="#f0e8e0" stroke="#ddd" stroke-width="0.5"/>
          </svg>
        </div>
      </div>
      <div class="project-info">
        <h3>atelier 6</h3><br>
        <p>Exercice 1</p>
       <div class="project-actions">
          <a class="btn-live" href="Atelier  6 ex1.pdf" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="exercice9.php" onclick="alert('Lien code ici')">Code</a>
        </div>
      </div>
        <div class="project-info">
          <p>Exercice 2</p>
        <div class="project-actions">
            <a class="btn-live" href="atelier 6 ex 2.pdf" onclick="alert('Lien live demo ici')">View Live</a>
            <a class="btn-code" href="exercice10.php" onclick="alert('Lien code ici')">Code</a>
          </div>
</div>
        <div class="project-info">
          <p>Exercice 3</p>
        <div class="project-actions">
            <a class="btn-live" href="Atelier  6 ex 3.pdf" onclick="alert('Lien live demo ici')">View Live</a>
            <a class="btn-code" href="exercice11.php" onclick="alert('Lien code ici')">Code</a>
          </div>
</div>
        <div class="project-info">
          <p>Exercice 4</p>
        <div class="project-actions">
            <a class="btn-live" href="Atelier  6 ex4.pdf" onclick="alert('Lien live demo ici')">View Live</a>
            <a class="btn-code" href="exercice12.php" onclick="alert('Lien code ici')">Code</a>
          </div>
</div>
        <div class="project-info">
          <p>Exercice 5</p>
        <div class="project-actions">
            <a class="btn-live" href="Atelier  6 ex 5.pdf" onclick="alert('Lien live demo ici')">View Live</a>
            <a class="btn-code" href="exercice13.php" onclick="alert('Lien code ici')">Code</a>
          </div>
</div>
      
</div>
</div>
</div><br>
  <div class="projects-grid">
  <!-- Projet 7 -->
    <div class="project-card fade-in">
      <div class="project-thumb">
        <div class="thumb-illustration">
          <svg width="260" height="180" viewBox="0 0 260 180" fill="none">
            <!-- ecommerce site -->
            <rect x="10" y="15" width="240" height="155" rx="6" fill="#f9f5f2"/>
            <!-- navbar -->
            <rect x="10" y="15" width="240" height="28" rx="6" fill="#ffffff" stroke="#e0d5cc" stroke-width="0.5"/>
            <rect x="20" y="22" width="50" height="6" rx="3" fill="#c8a882"/>
            <rect x="170" y="21" width="22" height="8" rx="2" fill="#e8b89a"/>
            <rect x="196" y="21" width="22" height="8" rx="2" fill="#e8b89a" opacity="0.5"/>
            <rect x="222" y="21" width="22" height="8" rx="2" fill="#e8b89a" opacity="0.5"/>
            <!-- hero image area -->
            <rect x="10" y="43" width="120" height="90" fill="#edd5c0"/>
            <rect x="130" y="43" width="120" height="90" fill="#d4c4b8"/>
            <!-- product cards row -->
            <rect x="14" y="138" width="56" height="28" rx="3" fill="#f0e8e0" stroke="#ddd" stroke-width="0.5"/>
            <rect x="76" y="138" width="56" height="28" rx="3" fill="#f0e8e0" stroke="#ddd" stroke-width="0.5"/>
            <rect x="138" y="138" width="56" height="28" rx="3" fill="#f0e8e0" stroke="#ddd" stroke-width="0.5"/>
            <rect x="200" y="138" width="46" height="28" rx="3" fill="#f0e8e0" stroke="#ddd" stroke-width="0.5"/>
          </svg>
        </div>
      </div>
      <div class="project-info">
        <h3>atelier 7</h3>
        <div class="project-actions">
          <a class="btn-live" href="#" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="https://github.com/sarahamda2005-dot/atelier7.git" onclick="alert('Lien GitHub ici')">GitHub</a>
         
        </div>
      </div>
    </div>

  <!-- Projet 8 -->
    <div class="project-card fade-in">
      <div class="project-thumb">
        <div class="thumb-illustration">
          <svg width="260" height="180" viewBox="0 0 260 180" fill="none">
            <!-- sidebar -->
            <rect x="15" y="25" width="55" height="140" rx="6" fill="#151e32"/>
            <rect x="22" y="40" width="40" height="6" rx="3" fill="#4f6ef7" opacity="0.5"/>
            <rect x="22" y="54" width="35" height="5" rx="2" fill="#ffffff" opacity="0.15"/>
            <rect x="22" y="66" width="38" height="5" rx="2" fill="#ffffff" opacity="0.15"/>
            <rect x="22" y="78" width="32" height="5" rx="2" fill="#ffffff" opacity="0.15"/>
            <!-- main content -->
            <rect x="80" y="35" width="70" height="24" rx="4" fill="#2a3a6a"/>
            <text x="115" y="51" font-size="11" fill="#4f6ef7" font-family="sans-serif" text-anchor="middle" font-weight="600">30.15</text>
            <rect x="160" y="35" width="70" height="24" rx="4" fill="#1e3040"/>
            <!-- donut chart -->
            <circle cx="105" cy="110" r="28" stroke="#4f6ef7" stroke-width="10" fill="none" stroke-dasharray="88 88" stroke-dashoffset="22" opacity="0.8"/>
            <circle cx="105" cy="110" r="28" stroke="#5dcaa5" stroke-width="10" fill="none" stroke-dasharray="40 136" stroke-dashoffset="-66" opacity="0.7"/>
            <circle cx="105" cy="110" r="28" stroke="#f7c94f" stroke-width="10" fill="none" stroke-dasharray="30 146" stroke-dashoffset="-106" opacity="0.6"/>
            <!-- bars -->
            <rect x="150" y="140" width="12" height="20" rx="2" fill="#4f6ef7" opacity="0.8"/>
            <rect x="166" y="128" width="12" height="32" rx="2" fill="#4f6ef7" opacity="0.7"/>
            <rect x="182" y="118" width="12" height="42" rx="2" fill="#4f6ef7" opacity="0.8"/>
            <rect x="198" y="108" width="12" height="52" rx="2" fill="#4f6ef7"/>
            <rect x="214" y="120" width="12" height="40" rx="2" fill="#4f6ef7" opacity="0.7"/>
          </svg>
        </div>
      </div>
      <div class="project-info">
        <h3>atelier 8</h3>
        <div class="project-actions">
          <a class="btn-live" href="#" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="https://github.com/sarahamda2005-dot/atelier8.git" onclick="alert('Lien GitHub ici')">GitHub</a>
         
        </div>
      </div>
    </div>
    <!-- Projet CC -->
    <div class="project-card fade-in">
      <div class="project-thumb">
        <div class="thumb-illustration">
          <svg width="260" height="180" viewBox="0 0 260 180" fill="none">
            <!-- ecommerce site -->
            <rect x="10" y="15" width="240" height="155" rx="6" fill="#f9f5f2"/>
            <!-- navbar -->
            <rect x="10" y="15" width="240" height="28" rx="6" fill="#ffffff" stroke="#e0d5cc" stroke-width="0.5"/>
            <rect x="20" y="22" width="50" height="6" rx="3" fill="#c8a882"/>
            <rect x="170" y="21" width="22" height="8" rx="2" fill="#e8b89a"/>
            <rect x="196" y="21" width="22" height="8" rx="2" fill="#e8b89a" opacity="0.5"/>
            <rect x="222" y="21" width="22" height="8" rx="2" fill="#e8b89a" opacity="0.5"/>
            <!-- hero image area -->
            <rect x="10" y="43" width="120" height="90" fill="#edd5c0"/>
            <rect x="130" y="43" width="120" height="90" fill="#d4c4b8"/>
            <!-- product cards row -->
            <rect x="14" y="138" width="56" height="28" rx="3" fill="#f0e8e0" stroke="#ddd" stroke-width="0.5"/>
            <rect x="76" y="138" width="56" height="28" rx="3" fill="#f0e8e0" stroke="#ddd" stroke-width="0.5"/>
            <rect x="138" y="138" width="56" height="28" rx="3" fill="#f0e8e0" stroke="#ddd" stroke-width="0.5"/>
            <rect x="200" y="138" width="46" height="28" rx="3" fill="#f0e8e0" stroke="#ddd" stroke-width="0.5"/>
          </svg>
        </div>
      </div>
      <div class="project-info">
        <h3> Mon Projet</h3>
        <div class="project-actions">
          <a class="btn-live" href="#" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="https://github.com/sarahamda2005-dot/Mon-projet.git" onclick="alert('Lien GitHub ici')">GitHub</a>
         
        </div>
      </div>
    </div>

</div>
<br>c:\wamp6\www\portfolio\public\hm.jpegc:\wamp6\www\portfolio\public\hm.jpeg



 <div class="projects-grid">
  <!-- Projet 9 -->
    <div class="project-card fade-in">
      <div class="project-thumb">
        <div class="thumb-illustration">
          <svg width="260" height="180" viewBox="0 0 260 180" fill="none">
            <!-- sidebar -->
            <rect x="15" y="25" width="55" height="140" rx="6" fill="#151e32"/>
            <rect x="22" y="40" width="40" height="6" rx="3" fill="#4f6ef7" opacity="0.5"/>
            <rect x="22" y="54" width="35" height="5" rx="2" fill="#ffffff" opacity="0.15"/>
            <rect x="22" y="66" width="38" height="5" rx="2" fill="#ffffff" opacity="0.15"/>
            <rect x="22" y="78" width="32" height="5" rx="2" fill="#ffffff" opacity="0.15"/>
            <!-- main content -->
            <rect x="80" y="35" width="70" height="24" rx="4" fill="#2a3a6a"/>
            <text x="115" y="51" font-size="11" fill="#4f6ef7" font-family="sans-serif" text-anchor="middle" font-weight="600">30.15</text>
            <rect x="160" y="35" width="70" height="24" rx="4" fill="#1e3040"/>
            <!-- donut chart -->
            <circle cx="105" cy="110" r="28" stroke="#4f6ef7" stroke-width="10" fill="none" stroke-dasharray="88 88" stroke-dashoffset="22" opacity="0.8"/>
            <circle cx="105" cy="110" r="28" stroke="#5dcaa5" stroke-width="10" fill="none" stroke-dasharray="40 136" stroke-dashoffset="-66" opacity="0.7"/>
            <circle cx="105" cy="110" r="28" stroke="#f7c94f" stroke-width="10" fill="none" stroke-dasharray="30 146" stroke-dashoffset="-106" opacity="0.6"/>
            <!-- bars -->
            <rect x="150" y="140" width="12" height="20" rx="2" fill="#4f6ef7" opacity="0.8"/>
            <rect x="166" y="128" width="12" height="32" rx="2" fill="#4f6ef7" opacity="0.7"/>
            <rect x="182" y="118" width="12" height="42" rx="2" fill="#4f6ef7" opacity="0.8"/>
            <rect x="198" y="108" width="12" height="52" rx="2" fill="#4f6ef7"/>
            <rect x="214" y="120" width="12" height="40" rx="2" fill="#4f6ef7" opacity="0.7"/>
          </svg>
        </div>
      </div>
      <div class="project-info">
        <h3>atelier 9</h3>
        <div class="project-actions">
          <a class="btn-live" href="#" onclick="alert('Lien live demo ici')">View Live</a>
          <a class="btn-code" href="https://github.com/sarahamda2005-dot/atelier-9.git" onclick="alert('Lien GitHub ici')">GitHub</a>
         
        </div>
      </div>
    </div>
</div>

</section>

<!-- ABOUT -->
<section id="about">
  <div class="about-inner">
    <h2 class="fade-in">À propos</h2>
    <p class="fade-in">Je suis Sara Hamda, étudiante en première année spécialisée dans le développement web. Passionnée par la création d'interfaces modernes et intuitives, je construis des projets avec HTML, CSS et JavaScript.</p>
    <div class="skills-row fade-in">
      <span class="skill-badge">HTML5</span>
      <span class="skill-badge">CSS3</span>
      <span class="skill-badge">JavaScript</span>
      <span class="skill-badge">Responsive Design</span>
      <span class="skill-badge">Git & GitHub</span>
      <span class="skill-badge">Flexbox / Grid</span>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <h2 class="fade-in">Contact</h2>
  <p class="fade-in">Tu veux collaborer ou juste dire bonjour ?</p>
  <div class="contact-links fade-in">
    <a class="contact-link" href="mailto:sarahamda2005@gmail.com">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="1" y="3" width="14" height="10" rx="1.5" stroke="currentColor" stroke-width="1.3"/><path d="M1 5l7 5 7-5" stroke="currentColor" stroke-width="1.3"/></svg>
      sarahamda2005@gmail.com
    </a>
    <a class="contact-link" href="https://github.com" target="_blank">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"><path d="M8 1C4.13 1 1 4.13 1 8c0 3.09 2.01 5.71 4.79 6.63.35.06.48-.15.48-.33v-1.16c-1.95.42-2.36-.94-2.36-.94-.32-.81-.78-1.03-.78-1.03-.64-.44.05-.43.05-.43.7.05 1.07.72 1.07.72.62 1.07 1.63.76 2.03.58.06-.45.24-.76.44-.93-1.56-.18-3.2-.78-3.2-3.47 0-.77.27-1.39.72-1.88-.07-.18-.31-.89.07-1.86 0 0 .59-.19 1.93.72A6.7 6.7 0 018 5.3c.6 0 1.2.08 1.77.23 1.34-.91 1.93-.72 1.93-.72.38.97.14 1.68.07 1.86.45.49.72 1.11.72 1.88 0 2.7-1.64 3.29-3.2 3.47.25.22.47.65.47 1.31v1.94c0 .19.13.4.48.33A6.995 6.995 0 0015 8c0-3.87-3.13-7-7-7z"/></svg>
      GitHub
    </a>
    <a class="contact-link" href="https://linkedin.com" target="_blank">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"><path d="M13.5 1h-11A1.5 1.5 0 001 2.5v11A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-11A1.5 1.5 0 0013.5 1zM5 12H3V6.5h2V12zm-1-6.27a1.15 1.15 0 110-2.3 1.15 1.15 0 010 2.3zM13 12h-2V9.25c0-.8-.69-1.44-1.5-1.44S8 8.45 8 9.25V12H6V6.5h2v.9C8.5 6.83 9.36 6.5 10.25 6.5 11.77 6.5 13 7.63 13 9.25V12z"/></svg>
      LinkedIn
    </a>
  </div>
</section>

<footer>
  <p>© 2025 Sara Hamda — Fait avec passion 💙</p>
</footer>

<script>
  // Smooth active nav on scroll
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.nav-links li');

  window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(s => {
      if (window.scrollY >= s.offsetTop - 100) current = s.id;
    });
    navLinks.forEach(li => {
      li.classList.remove('active');
      if (li.querySelector('a').getAttribute('href') === '#' + current) {
        li.classList.add('active');
      }
    });
  });

  // Fade-in on scroll
  const fadeEls = document.querySelectorAll('.fade-in');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((e, i) => {
      if (e.isIntersecting) {
        setTimeout(() => e.target.classList.add('visible'), i * 100);
      }
    });
  }, { threshold: 0.15 });
  fadeEls.forEach(el => observer.observe(el));
</script>
</body>
</html>
