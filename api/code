<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sara | Digital Dev Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg-color: #050505; /* K7al ghameq fhal l-image */
            --accent-blue: #4facfe; /* Loun l-azraq professional */
            --text-main: #ffffff;
            --text-muted: #888888;
            --card-bg: #0f0f0f;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: var(--bg-color); 
            color: var(--text-main);
            line-height: 1.6;
        }

        /* --- NAVIGATION --- */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 40px 10%;
        }
        .logo { font-weight: 800; font-size: 30px; letter-spacing: -1px; }
        .nav-links a { color: var(--text-muted); text-decoration: none; margin-left: 30px; font-size: 14px; transition: 0.3s; }
        .nav-links a:hover { color: var(--text-main); }
        .btn-contact { border: 1px solid var(--accent-blue); padding: 8px 20px; border-radius: 5px; color: var(--accent-blue) !important; }

        /* --- HERO SECTION --- */
        .hero {
            display: flex;
            padding: 40px 10%;
            align-items: center;
            justify-content: space-between;
            min-height: 80vh;
        }
        .hero-text { flex: 1.5; }
        .hero-text .subtitle { 
            font-size: 10px; 
            letter-spacing: 2px; 
            color: var(--text-muted); 
            text-transform: uppercase;
            margin-bottom: 20px;
            display: block;
        }
        .hero-text h1 { font-size: 3.5rem; font-weight: 800; line-height: 1.1; margin-bottom: 30px; }
        .hero-text h1 span { color: var(--accent-blue); }
        .hero-text p { color: var(--text-muted); max-width: 500px; margin-bottom: 40px; font-size: 1.1rem; }

        .hero-image { flex: 1; display: flex; justify-content: flex-end; }
        .hero-image img { 
            width: 100%; max-width: 400px; 
            border-radius: 12px; 
            filter: grayscale(100%); /* Effect professional B&W */
            border: 1px solid rgba(255,255,255,0.1);
        }

        /* --- PROJECTS & REPORTS SECTION --- */
        .work-section { padding: 80px 10%; }
        .section-title { font-size: 1.5rem; margin-bottom: 40px; border-bottom: 1px solid #222; padding-bottom: 10px; }
        
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; }
        
        .card {
            background: var(--card-bg);
            padding: 30px;
            border-radius: 10px;
            text-decoration: none;
            color: white;
            transition: 0.3s;
            border: 1px solid #1a1a1a;
            display: block;
        }
        .card:hover { border-color: var(--accent-blue); transform: translateY(-5px); }
        .card h3 { margin-bottom: 10px; font-size: 1.2rem; }
        .card p { color: var(--text-muted); font-size: 0.9rem; margin-bottom: 20px; }
        .card .tag { font-size: 10px; font-weight: 700; color: var(--accent-blue); text-transform: uppercase; }

        @media (max-width: 900px) {
            .hero { flex-direction: column; text-align: center; }
            .hero-text h1 { font-size: 2.5rem; }
            .hero-image { margin-top: 50px; }
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">SARA  HAMDA.</div>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#work">Projects</a>
            <a href="#" class="btn-contact">Contact Me</a>
        </div>
    </nav>

    <header class="hero">
        <div class="hero-text">
            <span class="subtitle">DÉVELOPPEMENT DIGITAL | 1ÈRE ANNÉE | ISTA</span>
            <h1>Bridging <span>Expertise</span> and Digital Intelligence.</h1>
            <p>Étudiante en première année, je me spécialise dans le développement web et la gestion de données.</p>
            <a href="#work" style="background:var(--accent-blue); color:white; padding:15px 35px; border-radius:5px; text-decoration:none; font-weight:600;">Voir mes travaux</a>
        </div>

        <div class="hero-image">
            <img src="/sara.jpeg" alt="Sara Portrait">
        </div>
    </header>

    <section id="work" class="work-section">
        <h2 class="section-title">Mes Travaux</h2>
        <div class="grid">
            
            <a href="exercice1.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>Atelier 01:</h3>
                <p>Manipulation des variables et structures de base en PHP.</p>
                <span>Consulter le code →</span>
            </a>

            <a href="exercice2.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>Atelier 02:</h3>
                <p>Mise en place des conditions et des boucles dynamiques.</p>
                <span>Consulter le code →</span>
            </a>

            <a href="rapport 11.pdf" target="_blank" class="card">
                <span class="tag">Documentation</span>
                <h3>Rapport de Stage 01</h3>
                <p>Analyse technique et environnement de développement.</p>
                <span>Ouvrir le PDF ↓</span>
            </a>

            <a href="Rapport  2.pdf" target="_blank" class="card">
                <span class="tag">Documentation</span>
                <h3>Rapport de Stage 02</h3>
                <p>Bilan des compétences et réalisations techniques.</p>
                <span>Ouvrir le PDF ↓</span>
            </a>
            <a href="exercice3TD1.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3></h3>
                <p>Mise en place des conditions et des boucles dynamiques.</p>
                <span>Consulter le code →</span>
            </a>

            <a href="exercice3TD2.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3></h3>
                <p>Mise en place des conditions et des boucles dynamiques.</p>
                <span>Consulter le code →</span>
            </a>





            <a href="PARTIE1td1.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>TD 01:</h3>
                <p>Tableaux numérotés .</p>
                <span>Consulter le code →</span>
            </a>
            <a href="PARTIE1td2.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>TD 02:</h3>
                <p>Tableaux numérotés .</p>
                <span>Consulter le code →</span>
            </a>
            <a href="PARTIE1td3.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>TD 03:</h3>
                <p>Tableaux numérotés .</p>
                <span>Consulter le code →</span>
            </a>
            <a href="PARTIE1td4.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>TD 04:</h3>
                <p>Tableaux numérotés .</p>
                <span>Consulter le code →</span>
            </a>
            <a href="PARTIE1td5.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>TD 05:</h3>
                <p>Tableaux numérotés .</p>
                <span>Consulter le code →</span>
            </a>
            <a href="PARTIE1td6.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>TD 06:</h3>
                <p>Tableaux numérotés .</p>
                <span>Consulter le code →</span>
            </a>
            <a href="PARTIE1td7.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>TD 07:</h3>
                <p>Tableaux numérotés .</p>
                <span>Consulter le code →</span>
            </a>




            <a href="PARTIE2td8.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>TD 08:</h3>
                <p>Tableaux associatifs .</p>
                <span>Consulter le code →</span>
            </a>
            <a href="PARTIE2td9.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>TD 09:</h3>
                <p>Tableaux associatifs .</p>
                <span>Consulter le code →</span>
            </a>
            <a href="PARTIE2td10.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>TD 10:</h3>
                <p>Tableaux associatifs .</p>
                <span>Consulter le code →</span>
            </a>
            <a href="PARTIE2td11.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>TD 11:</h3>
                <p>Tableaux associatifs .</p>
                <span>Consulter le code →</span>
            </a>



            <a href="PARTIE3td12.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>TD 12:</h3>
                <p>Nombres pairs  .</p>
                <span>Consulter le code →</span>
            </a>
            <a href="PARTIE3td13.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>TD 13:</h3>
                <p>Nombres pairs  .</p>
                <span>Consulter le code →</span>
            </a>
            <a href="PARTIE3td14.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>TD 14:</h3>
                <p>Nombres pairs  .</p>
                <span>Consulter le code →</span>
            </a>
            <a href="PARTIE3td15.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>TD 15:</h3>
                <p>Nombres pairs  .</p>
                <span>Consulter le code →</span>
            </a>


            

                



            <a href="TD 1.pdf" target="_blank" class="card">
                <span class="tag">Documentation</span>
                <h3>Rapport De TD 01</h3>
                <p>Tableaux numérotés .</p>
                <span>Ouvrir le PDF ↓</span>
            </a>
            <a href="TD 2.pdf" target="_blank" class="card">
                <span class="tag">Documentation</span>
                <h3>Rapport De TD 02</h3>
                <p>Tableaux numérotés .</p>
                <span>Ouvrir le PDF ↓</span>
            </a>
            <a href="TD3.pdf" target="_blank" class="card">
                <span class="tag">Documentation</span>
                <h3>Rapport De TD 03</h3>
                <p>Tableaux numérotés .</p>
                <span>Ouvrir le PDF ↓</span>
            </a>
            <a href="TD 4.pdf" target="_blank" class="card">
                <span class="tag">Documentation</span>
                <h3>Rapport De TD 04</h3>
                <p>Tableaux numérotés .</p>
                <span>Ouvrir le PDF ↓</span>
            </a>
            <a href="TD 5.pdf" target="_blank" class="card">
                <span class="tag">Documentation</span>
                <h3>Rapport De TD 05</h3>
                <p>Tableaux numérotés .</p>
                <span>Ouvrir le PDF ↓</span>
            </a>
            <a href="PARTIE1 td1.pdf" target="_blank" class="card">
                <span class="tag">Documentation</span>
                <h3>Rapport De TD 06</h3>
                <p>Tableaux numérotés .</p>
                <span>Ouvrir le PDF ↓</span>
            </a>
            <a href="TD 7.pdf" target="_blank" class="card">
                <span class="tag">Documentation</span>
                <h3>Rapport De TD 07</h3>
                <p>Tableaux numérotés .</p>
                <span>Ouvrir le PDF ↓</span>
            </a>
            <a href="TD 8.pdf" target="_blank" class="card">
                <span class="tag">Documentation</span>
                <h3>Rapport De TD 08</h3>
                <p>Tableaux associatifs.</p>
                <span>Ouvrir le PDF ↓</span>
            </a>
            <a href="TD 9.pdf" target="_blank" class="card">
                <span class="tag">Documentation</span>
                <h3>Rapport De TD 09</h3>
                <p>Tableaux associatifs.</p>
                <span>Ouvrir le PDF ↓</span>
            </a>
            <a href="TD 10.pdf" target="_blank" class="card">
                <span class="tag">Documentation</span>
                <h3>Rapport De TD 10</h3>
                <p>Tableaux associatifs.</p>
                <span>Ouvrir le PDF ↓</span>
            </a>
            <a href="TD 11.pdf" target="_blank" class="card">
                <span class="tag">Documentation</span>
                <h3>Rapport De TD 11</h3>
                <p>Tableaux associatifs.</p>
                <span>Ouvrir le PDF ↓</span>
            </a>
            <a href="PARTIE1 td1.pdf" target="_blank" class="card">
                <span class="tag">Documentation</span>
                <h3>Rapport De TD 12</h3>
                <p>Nombres pairs .</p>
                <span>Ouvrir le PDF ↓</span>
            </a>
            <a href="TD 13.pdf" target="_blank" class="card">
                <span class="tag">Documentation</span>
                <h3>Rapport De TD 13</h3>
                <p>Nombres pairs .</p>
                <span>Ouvrir le PDF ↓</span>
            </a>
            <a href="TD 14.pdf" target="_blank" class="card">
                <span class="tag">Documentation</span>
                <h3>Rapport De TD 14</h3>
                <p>Nombres pairs .</p>
                <span>Ouvrir le PDF ↓</span>
            </a>
            <a href="TD 15.pdf" target="_blank" class="card">
                <span class="tag">Documentation</span>
                <h3>Rapport De TD 15</h3>
                <p>Nombres pairs .</p>
                <span>Ouvrir le PDF ↓</span>
            </a>

            
            
        </div>
    </section>

    <footer style="text-align: center; padding: 50px; color: #ccafaf; font-size: 12px;">
        © 2026 SARA PORTFOLIO - ISTA DIGITAL DEV
    </footer>

</body>
</html>


   
