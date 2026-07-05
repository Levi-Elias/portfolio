<?php include 'assets/includes/header.php'; ?>
<?php include 'assets/includes/nav.php'; ?>



<main>
  <!-- ===== HERO ===== -->
  <section class="hero">
    <!-- Grid background -->
    <div class="hero-grid"></div>
    <!-- Radial glow -->
    <div class="hero-glow"></div>

    <div class="hero-content hero-split">
      <div class="hero-text">
        <p class="hero-label anim-fade-up">Web Developer</p>
        <h1 class="hero-title anim-fade-up anim-delay-1">Levi<br><span class="accent">Sastro</span></h1>
        <p class="hero-tagline anim-fade-up anim-delay-2">Ik bouw snelle, elegante webapplicaties met een scherp oog
          voor design en bruikbaarheid. Van concept tot deployment.</p>
        <div class="hero-cta anim-fade-up anim-delay-3">
          <button class="btn-outline" onclick="smoothScroll('projects')">Bekijk mijn werk</button>
          <button class="btn-text" onclick="smoothScroll('contact')">Contact →</button>
        </div>
      </div>
      <div class="hero-image anim-fade-up anim-delay-2">
        <div class="hero-collage">
          <img src="assets/fotos/Ontwerp_zonder_titel-removebg-preview.png" class="hc-sub1" alt="Levi Sastro" />
          <img src="assets/fotos/fotoL-removebg-preview.png" class="hc-main" alt="Levi Sastro" />
          <img src="assets/fotos/Ontwerp_zonder_titel__1_-removebg-preview.png" class="hc-sub2" alt="Levi Sastro" />
        </div>
        <div class="hero-image-fade"></div>
      </div>
    </div>

    <div class="hero-arrow anim-fade-up anim-delay-4">
      <div class="arrow-bounce">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 5v14"></path>
          <path d="m19 12-7 7-7-7"></path>
        </svg>
      </div>
    </div>
  </section>

  <!-- ===== ABOUT ===== -->
  <section class="section" id="about">
    <div class="container about-grid">
      <div class="about-text reveal">
        <p class="section-label">01 — Over mij</p>
        <h2 class="section-title">Bouwen met passie &amp; precisie</h2>
        <div class="about-body">
          <p>Mijn naam is Levi Sastro en ik ben een enthousiaste student Creative Software Development aan het Grafisch
            Lyceum Utrecht. Ik ben creatief, leergierig en werk graag aan technische oplossingen. Ik functioneer goed
            zowel zelfstandig als in teamverband, ben klantvriendelijk, betrouwbaar en zet mij altijd volledig in om de
            beste resultaten te behalen. Nieuwe processen en technologieën leer ik snel en met plezier.
            Op deze website presenteer ik een selectie van mijn werk en deel ik mijn voortdurende reis in de wereld
            van web development. Ik nodig je uit om mijn projecten te bekijken, mijn vaardigheden te ontdekken en
            meer te leren over mijn passie voor het creëren van digitale ervaringen. </p>
        </div>
        <div class="about-stats">
          <div class="stat">
            <p class="stat-num">2+</p>
            <p class="stat-label">Jaar ervaring</p>
          </div>
          <div class="stat">
            <p class="stat-num">20+</p>
            <p class="stat-label">Projecten afgerond</p>
          </div>
          <div class="stat">
            <p class="stat-num">100%</p>
            <p class="stat-label">Commitment</p>
          </div>
        </div>
        <div class="cv-wrapper">
          <a href="assets/fotos/CV.pdf" target="_blank" rel="noopener noreferrer" class="btn-outline">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
            Bekijk mijn CV
          </a>
        </div>
      </div>
      <div class="about-dual-collage reveal">
        <div class="dual-img-wrapper dual-img-1">
          <img src="assets/fotos/pen.jpg" alt="Pen" />
        </div>
        <div class="dual-img-wrapper dual-img-2">
          <img src="assets/fotos/car.jpg" alt="Car" />
        </div>
        <!-- Decorations -->
        <div class="collage-decoration collage-dot collage-dot-1"></div>
        <div class="collage-decoration collage-dot collage-dot-2"></div>
      </div>
    </div>
  </section>

  <!-- ===== PROJECTS ===== -->
  <section class="section section-border" id="projects">
    <div class="container">
      <div class="reveal">
        <p class="section-label">02 — Live Projecten</p>
        <h2 class="section-title">beste werk</h2>
      </div>
      <div class="projects-grid">
        <!-- Project 1 -->
        <div class="project-card reveal">
          <div class="project-image">
            <img src="assets/fotos/FK.png" alt="FreshKicks" />
            <div class="project-image-overlay"></div>
            <span class="project-id">01</span>
          </div>
          <div class="project-body">
            <h3 class="project-title">FreshKicks</h3>
            <p class="project-desc">Demo webshop voor schoenen. gemaakt in opdracht van school in leerjaar 1 module 4.
            </p>
            <div class="project-tags">
              <span>HTML</span>
              <span>CSS</span>
              <span>PHP</span>
              <span>JavaScript</span>
              <span>MySQL</span>
            </div>
            <div class="project-links">
              <a href="https://u240669.gluwebsite.nl/Fresh-Kicks/" class="link-live" target="_blank"
                rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M15 3h6v6" />
                  <path d="M10 14 21 3" />
                  <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                </svg>
                Live
              </a>
              <a href="https://github.com/GLU-CSD/module-4-1-webshop-backend-crud-eindopdracht-Levi-Elias"
                class="link-code" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path
                    d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4" />
                  <path d="M9 18c-4.51 2-5-2-7-2" />
                </svg>
                Code
              </a>
            </div>
          </div>
        </div>
        <!-- Project 2 -->
        <div class="project-card reveal">
          <div class="project-image">
            <img src="assets/fotos/MK.png" alt="Task Management App" />
            <div class="project-image-overlay"></div>
            <span class="project-id">02</span>
          </div>
          <div class="project-body">
            <h3 class="project-title">MissKARIN Taallessen</h3>
            <p class="project-desc">klant opdracht onder werking van het Bureau website om je in te schrijven voor
              taallessen.(Grafisch Lyceum Utrecht)</p>
            <div class="project-tags">
              <span>HTML</span>
              <span>CSS</span>
              <span>PHP</span>
              <span>MySQL</span>
            </div>
            <div class="project-links">
              <a href="https://u240669.gluwebsite.nl/misskarin/" class="link-live" target="_blank"
                rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M15 3h6v6" />
                  <path d="M10 14 21 3" />
                  <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                </svg>
                Live
              </a>
              <a href="https://github.com/basspies/missKARIN-Promo-video-website-" class="link-code" target="_blank"
                rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path
                    d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4" />
                  <path d="M9 18c-4.51 2-5-2-7-2" />
                </svg>
                Code
              </a>
            </div>
          </div>
        </div>
        <!-- Project 3 -->
        <div class="project-card reveal">
          <div class="project-image">
            <img src="assets/fotos/ufes.png" alt="Portfolio Generator" />
            <div class="project-image-overlay"></div>
            <span class="project-id">03</span>
          </div>
          <div class="project-body">
            <h3 class="project-title">Ufestival telefoon app</h3>
            <p class="project-desc">Ufestival telefoon app gemaakt in opdracht van school in leerjaar 2 voor de
              organisatie Ufestival met de app kun je informatie vinden over het gehele festival</p>
            <div class="project-tags">
              <span>HTML</span>
              <span>CSS</span>
              <span>JavaScript</span>
              <span>JSON</span>
            </div>
            <div class="project-links">
              <a href="https://ufestival-1.onrender.com" class="link-live" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M15 3h6v6" />
                  <path d="M10 14 21 3" />
                  <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                </svg>
                Live
              </a>
              <a href="https://github.com/Levi-Elias/Ufestival" class="link-code" target="_blank"
                rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path
                    d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4" />
                  <path d="M9 18c-4.51 2-5-2-7-2" />
                </svg>
                Code
              </a>
            </div>
          </div>
        </div>
        <!-- Project 4 -->
        <div class="project-card reveal">
          <div class="project-image">
            <img src="assets/fotos/HH.png" alt="Restaurant Booking System" />
            <div class="project-image-overlay"></div>
            <span class="project-id">04</span>
          </div>
          <div class="project-body">
            <h3 class="project-title">Happy Herbivore kiosk</h3>
            <p class="project-desc">kiosk bestel app gemaakt in opdracht van school in leerjaar 2 genaamd Happy
              herbivore we moesten ervoor zorgen dat mensen via deze kiosk eten konden bestellen</p>
            <div class="project-tags">
              <span>HTML</span>
              <span>CSS</span>
              <span>JavaScript</span>
              <span>PHP</span>
              <span>MySQL</span>
            </div>
            <div class="project-links">
              <a href="https://u240669.gluwebsite.nl/Happy-Herbivore/" class="link-live" target="_blank"
                rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M15 3h6v6" />
                  <path d="M10 14 21 3" />
                  <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                </svg>
                Live
              </a>
              <a href="https://github.com/Levi-Elias/happy-herbivore" class="link-code" target="_blank"
                rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path
                    d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4" />
                  <path d="M9 18c-4.51 2-5-2-7-2" />
                </svg>
                Code
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-wrapper">
        <a href="projects.php" class="btn-outline">Meer projecten</a>
      </div>
    </div>
  </section>

  <!-- ===== SKILLS ===== -->
  <section class="section section-border" id="skills">
    <div class="container">
      <div class="reveal">
        <p class="section-label">03 — Skills</p>
        <h2 class="section-title">Mijn toolkit</h2>
      </div>
      <div class="skills-grid">
        <div class="skill-group reveal">
          <p class="skill-group-label">Frontend</p>
          <div class="skill-tags">
            <span>HTML</span>
            <span>CSS</span>
            <span>JavaScript</span>
            <span>JSON</span>
          </div>
        </div>
        <div class="skill-group reveal">
          <p class="skill-group-label">Backend</p>
          <div class="skill-tags">
            <span>PHP</span>
            <span>MySQL</span>
            <span>JSON</span>
            <span>JavaScript</span>
          </div>
        </div>
        <div class="skill-group reveal">
          <p class="skill-group-label">Tools &amp; Overig</p>
          <div class="skill-tags">
            <span>Git / GitHub</span>
            <span>Docker</span>
            <span>Figma</span>
            <span>Powershell</span>
            <span>VS Code</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== CONTACT ===== -->
  <section class="section section-border" id="contact">
    <div class="container contact-grid">
      <div class="contact-info reveal">
        <p class="section-label">04 — Contact</p>
        <h2 class="section-title">Laten we iets bouwen samen</h2>
        <p class="contact-intro">Ben je op zoek naar een developer voor jouw project? Of wil je gewoon even
          kennismaken? Stuur me een bericht — ik reageer binnen 24 uur.</p>
        <div class="contact-links">
          <a href="mailto:le.sastro@outlook.com" class="contact-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect width="20" height="16" x="2" y="4" rx="2" />
              <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
            </svg>
            <span>le.sastro@outlook.com</span>
          </a>
          <a href="https://github.com/Levi-Elias" class="contact-link" target="_blank" rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path
                d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4" />
              <path d="M9 18c-4.51 2-5-2-7-2" />
            </svg>
            <span>github.com/Levi-Elias</span>
          </a>
          <a href="https://www.linkedin.com/in/levi-sastro-022612417/" class="contact-link" target="_blank"
            rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
              <rect width="4" height="12" x="2" y="9" />
              <circle cx="4" cy="4" r="2" />
            </svg>
            <span>linkedin.com/in/Levi Sastro</span>
          </a>
        </div>
      </div>
      <div class="contact-form-wrapper reveal" id="contact-form-wrapper">
        <form class="contact-form" id="contact-form">
          <div class="form-group">
            <label for="name">NAAM</label>
            <input type="text" id="name" name="name" placeholder="Jouw naam" required />
          </div>
          <div class="form-group">
            <label for="email">E-MAIL</label>
            <input type="email" id="email" name="email" placeholder="jouw@email.com" required />
          </div>
          <div class="form-group">
            <label for="message">BERICHT</label>
            <textarea id="message" name="message" rows="5" placeholder="Vertel me over jouw project..."
              required></textarea>
          </div>
          <button type="submit" class="btn-submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path
                d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z" />
              <path d="m21.854 2.147-10.94 10.939" />
            </svg>
            Verstuur bericht
          </button>
        </form>
        <!-- Success state -->
        <div class="form-success hidden" id="form-success">
          <div class="success-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path
                d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z" />
              <path d="m21.854 2.147-10.94 10.939" />
            </svg>
          </div>
          <h3>Bericht verzonden!</h3>
          <p>Ik neem zo snel mogelijk contact met je op.</p>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'assets/includes/footer.php'; ?>