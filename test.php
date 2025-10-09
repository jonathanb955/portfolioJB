<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - BTS SIO</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #00f5ff;
            --secondary: #7c3aed;
            --accent: #ec4899;
            --bg-dark: #0a0a0f;
            --bg-card: #1a1a2e;
            --text: #e0e0e0;
            --text-dim: #a0a0a0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: var(--bg-dark);
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.3;
        }

        .particle {
            position: absolute;
            border-radius: 50%;
            background: var(--primary);
            animation: float 20s infinite;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0); }
            25% { transform: translate(100px, -100px); }
            50% { transform: translate(-50px, -200px); }
            75% { transform: translate(-150px, -50px); }
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(10, 10, 15, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
            border-bottom: 1px solid rgba(0, 245, 255, 0.1);
        }

        nav {
            max-width: 1400px;
            margin: 0 auto;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: var(--text);
            text-decoration: none;
            transition: all 0.3s;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
        }

        section {
            margin: 6rem 0;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeInUp 0.8s forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero p {
            font-size: 1.5rem;
            color: var(--text-dim);
            margin-bottom: 2rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 0 20px rgba(0, 245, 255, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 30px rgba(0, 245, 255, 0.5);
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 3rem;
            text-align: center;
            position: relative;
            padding-bottom: 1rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text {
            background: var(--bg-card);
            padding: 2rem;
            border-radius: 20px;
            border: 1px solid rgba(0, 245, 255, 0.1);
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1.5rem;
        }

        .skill-card {
            background: var(--bg-card);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            border: 1px solid rgba(0, 245, 255, 0.1);
            transition: all 0.3s;
            cursor: pointer;
        }

        .skill-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 10px 30px rgba(0, 245, 255, 0.2);
        }

        .skill-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .project-card {
            background: var(--bg-card);
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid rgba(0, 245, 255, 0.1);
            transition: all 0.3s;
            cursor: pointer;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 245, 255, 0.2);
        }

        .project-img {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, var(--secondary), var(--accent));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
        }

        .project-content {
            padding: 1.5rem;
        }

        .project-title {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--primary);
        }

        .project-tags {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            margin-top: 1rem;
        }

        .tag {
            background: rgba(0, 245, 255, 0.1);
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.85rem;
            border: 1px solid var(--primary);
        }

        .timeline {
            position: relative;
            padding-left: 3rem;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 2px;
            background: linear-gradient(180deg, var(--primary), var(--accent));
        }

        .timeline-item {
            position: relative;
            margin-bottom: 3rem;
            background: var(--bg-card);
            padding: 1.5rem;
            border-radius: 15px;
            border: 1px solid rgba(0, 245, 255, 0.1);
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -3.5rem;
            top: 1.5rem;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: var(--primary);
            box-shadow: 0 0 20px var(--primary);
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background: var(--bg-card);
            padding: 2rem;
            border-radius: 20px;
            border: 1px solid rgba(0, 245, 255, 0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--primary);
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(0, 245, 255, 0.2);
            border-radius: 10px;
            color: var(--text);
            font-family: inherit;
            transition: all 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 15px rgba(0, 245, 255, 0.2);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .info-card {
            background: var(--bg-card);
            padding: 1.5rem;
            border-radius: 15px;
            text-align: center;
            border: 1px solid rgba(0, 245, 255, 0.1);
        }

        .info-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .veille-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .veille-card {
            background: var(--bg-card);
            padding: 1.5rem;
            border-radius: 15px;
            border: 1px solid rgba(0, 245, 255, 0.1);
            transition: all 0.3s;
        }

        .veille-card:hover {
            transform: translateY(-5px);
            border-color: var(--secondary);
        }

        footer {
            background: var(--bg-card);
            text-align: center;
            padding: 2rem;
            margin-top: 4rem;
            border-top: 1px solid rgba(0, 245, 255, 0.1);
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .nav-links {
                display: none;
            }

            .about-content {
                grid-template-columns: 1fr;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<div class="bg-animation" id="particles"></div>

<header>
    <nav>
        <div class="logo">Portfolio</div>
        <ul class="nav-links">
            <li><a href="#accueil">Accueil</a></li>
            <li><a href="#apropos">À propos</a></li>
            <li><a href="#competences">Compétences</a></li>
            <li><a href="#projets">Projets</a></li>
            <li><a href="#parcours">Parcours</a></li>
            <li><a href="#veille">Veille</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<section class="hero" id="accueil">
    <div class="container">
        <h1>Votre Nom</h1>
        <p>Étudiant en BTS SIO - 2ème année</p>
        <p>Développeur Full Stack | Passionné par la technologie</p>
        <a href="#contact" class="btn-primary">Me contacter</a>
    </div>
</section>

<div class="container">
    <section id="apropos">
        <h2 class="section-title">À propos de moi</h2>
        <div class="about-content">
            <div class="about-text">
                <h3>Qui suis-je ?</h3>
                <p>
                    Étudiant passionné en 2ème année de BTS SIO (Services Informatiques aux Organisations),
                    je me spécialise dans le développement d'applications et la gestion de solutions informatiques.
                </p>
                <p style="margin-top: 1rem;">
                    Mon objectif est de devenir un développeur full stack compétent, capable de créer
                    des solutions innovantes et de résoudre des problèmes complexes grâce à la technologie.
                </p>
                <a href="cv.pdf" download class="btn-primary" style="margin-top: 2rem;">Télécharger mon CV</a>
            </div>
            <div class="about-text">
                <h3>Mes atouts</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin: 1rem 0;">✓ Capacité d'adaptation rapide</li>
                    <li style="margin: 1rem 0;">✓ Esprit d'équipe et collaboration</li>
                    <li style="margin: 1rem 0;">✓ Autonomie et prise d'initiative</li>
                    <li style="margin: 1rem 0;">✓ Curiosité technique permanente</li>
                    <li style="margin: 1rem 0;">✓ Résolution créative de problèmes</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="competences">
        <h2 class="section-title">Compétences & Langages</h2>
        <div class="skills-grid">
            <div class="skill-card">
                <div class="skill-icon">💻</div>
                <h3>HTML/CSS</h3>
                <p>Avancé</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon">⚡</div>
                <h3>JavaScript</h3>
                <p>Intermédiaire</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon">🐍</div>
                <h3>Python</h3>
                <p>Avancé</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon">🐘</div>
                <h3>PHP</h3>
                <p>Intermédiaire</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon">🗄️</div>
                <h3>SQL/MySQL</h3>
                <p>Avancé</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon">⚛️</div>
                <h3>React</h3>
                <p>Débutant</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon">🎨</div>
                <h3>UI/UX Design</h3>
                <p>Intermédiaire</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon">🔧</div>
                <h3>Git/GitHub</h3>
                <p>Intermédiaire</p>
            </div>
        </div>
    </section>

    <section id="projets">
        <h2 class="section-title">Mes Projets</h2>
        <div class="projects-grid">
            <div class="project-card">
                <div class="project-img">🌐</div>
                <div class="project-content">
                    <h3 class="project-title">Site E-commerce</h3>
                    <p>Développement d'une plateforme de vente en ligne complète avec système de panier et gestion des utilisateurs.</p>
                    <div class="project-tags">
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">JavaScript</span>
                    </div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-img">📱</div>
                <div class="project-content">
                    <h3 class="project-title">Application Mobile</h3>
                    <p>Application de gestion de tâches avec synchronisation cloud et notifications push.</p>
                    <div class="project-tags">
                        <span class="tag">React Native</span>
                        <span class="tag">Firebase</span>
                        <span class="tag">API REST</span>
                    </div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-img">🤖</div>
                <div class="project-content">
                    <h3 class="project-title">Bot Discord</h3>
                    <p>Bot multifonction pour serveur Discord avec commandes de modération et système de niveaux.</p>
                    <div class="project-tags">
                        <span class="tag">Python</span>
                        <span class="tag">Discord.py</span>
                        <span class="tag">SQLite</span>
                    </div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-img">📊</div>
                <div class="project-content">
                    <h3 class="project-title">Dashboard Analytics</h3>
                    <p>Tableau de bord interactif pour visualiser des données en temps réel avec graphiques dynamiques.</p>
                    <div class="project-tags">
                        <span class="tag">React</span>
                        <span class="tag">Chart.js</span>
                        <span class="tag">Node.js</span>
                    </div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-img">🔐</div>
                <div class="project-content">
                    <h3 class="project-title">Système d'authentification</h3>
                    <p>Plateforme sécurisée avec authentification multi-facteurs et gestion des rôles.</p>
                    <div class="project-tags">
                        <span class="tag">PHP</span>
                        <span class="tag">JWT</span>
                        <span class="tag">MySQL</span>
                    </div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-img">🎮</div>
                <div class="project-content">
                    <h3 class="project-title">Jeu Web</h3>
                    <p>Mini-jeu interactif en JavaScript avec système de scores et classements en ligne.</p>
                    <div class="project-tags">
                        <span class="tag">JavaScript</span>
                        <span class="tag">Canvas</span>
                        <span class="tag">WebSocket</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="parcours">
        <h2 class="section-title">Mon Parcours</h2>
        <div class="timeline">
            <div class="timeline-item">
                <h3>BTS SIO - 2ème année</h3>
                <p style="color: var(--primary);">2024 - 2025</p>
                <p>Approfondissement des compétences en développement, gestion de projets et infrastructure réseau. Spécialisation SLAM (Solutions Logicielles et Applications Métiers).</p>
            </div>

            <div class="timeline-item">
                <h3>BTS SIO - 1ère année</h3>
                <p style="color: var(--primary);">2023 - 2024</p>
                <p>Acquisition des fondamentaux en programmation, bases de données, réseaux et systèmes. Premiers projets de développement web et découverte des méthodologies agiles.</p>
            </div>

            <div class="timeline-item">
                <h3>Baccalauréat</h3>
                <p style="color: var(--primary);">2023</p>
                <p>Obtention du baccalauréat avec mention. Premiers pas dans le monde de l'informatique et développement de la passion pour la programmation.</p>
            </div>

            <div class="timeline-item">
                <h3>Stage en entreprise</h3>
                <p style="color: var(--primary);">2024</p>
                <p>Stage de 6 semaines dans une entreprise de services numériques. Participation au développement d'applications web et découverte du monde professionnel.</p>
            </div>
        </div>
    </section>

    <section id="veille">
        <h2 class="section-title">Veille Technologique</h2>
        <div class="veille-grid">
            <div class="veille-card">
                <h3>🚀 Intelligence Artificielle</h3>
                <p>Suivi des avancées en IA, machine learning et deep learning. Exploration des nouveaux modèles comme GPT-4, Claude et leurs applications pratiques.</p>
            </div>

            <div class="veille-card">
                <h3>🔒 Cybersécurité</h3>
                <p>Surveillance des nouvelles menaces et vulnérabilités. Étude des meilleures pratiques de sécurisation des applications et données.</p>
            </div>

            <div class="veille-card">
                <h3>☁️ Cloud Computing</h3>
                <p>Technologies cloud (AWS, Azure, Google Cloud), serverless computing et architectures microservices modernes.</p>
            </div>

            <div class="veille-card">
                <h3>📱 Développement Mobile</h3>
                <p>Tendances en développement mobile, frameworks cross-platform (React Native, Flutter) et nouvelles fonctionnalités iOS/Android.</p>
            </div>

            <div class="veille-card">
                <h3>🌐 Web 3.0</h3>
                <p>Blockchain, cryptomonnaies, NFTs et technologies décentralisées. Impact sur le développement web moderne.</p>
            </div>

            <div class="veille-card">
                <h3>🎨 UI/UX Design</h3>
                <p>Nouvelles tendances en design d'interfaces, accessibilité et expérience utilisateur. Outils et méthodologies de conception.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2 class="section-title">Me Contacter</h2>

        <div class="contact-info">
            <div class="info-card">
                <div class="info-icon">📧</div>
                <h3>Email</h3>
                <p>votre.email@exemple.fr</p>
            </div>

            <div class="info-card">
                <div class="info-icon">📱</div>
                <h3>Téléphone</h3>
                <p>06 XX XX XX XX</p>
            </div>

            <div class="info-card">
                <div class="info-icon">📍</div>
                <h3>Localisation</h3>
                <p>Sarcelles, Île-de-France</p>
            </div>

            <div class="info-card">
                <div class="info-icon">💼</div>
                <h3>LinkedIn</h3>
                <p>linkedin.com/in/votreprofil</p>
            </div>
        </div>

        <form class="contact-form" id="contactForm">
            <div class="form-group">
                <label for="name">Nom complet</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="subject">Sujet</label>
                <input type="text" id="subject" name="subject" required>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>

            <button type="submit" class="btn-primary" style="width: 100%;">Envoyer le message</button>
        </form>
    </section>
</div>

<footer>
    <p>&copy; 2025 Votre Nom - Portfolio BTS SIO. Tous droits réservés.</p>
    <p style="margin-top: 0.5rem; color: var(--text-dim);">Fait avec passion et technologie</p>
</footer>

<script>
    // Animation des particules
    const particlesContainer = document.getElementById('particles');
    for (let i = 0; i < 20; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.width = Math.random() * 5 + 2 + 'px';
        particle.style.height = particle.style.width;
        particle.style.left = Math.random() * 100 + '%';
        particle.style.top = Math.random() * 100 + '%';
        particle.style.animationDuration = Math.random() * 20 + 10 + 's';
        particle.style.animationDelay = Math.random() * 5 + 's';
        particlesContainer.appendChild(particle);
    }

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Form submission
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Message envoyé ! (Fonctionnalité à connecter avec un backend)');
        this.reset();
    });

    // Animation au scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationDelay = '0s';
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    document.querySelectorAll('section').forEach(section => {
        observer.observe(section);
    });

    // Effet de parallaxe léger sur le hero
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const hero = document.querySelector('.hero');
        if (hero) {
            hero.style.transform = `translateY(${scrolled * 0.5}px)`;
        }
    });
</script>
</body>
</html>