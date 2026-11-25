<?php
$pageTitle = 'Home';
require_once __DIR__ . '/includes/header.php';
?>

<section class="hero">
    <div class="container hero-content">
        <div class="hero-text">
            <p class="eyebrow">
                <span class="status-dot"></span>
                SOFTWARE DEVELOPER
            </p>

            <h1>
                Turning ideas into
                <span class="gradient-text">digital solutions.</span>
            </h1>

            <p class="hero-description">
                Hello, I'm <strong>Joseph Kiragu</strong>, an Applied Computer
                Science student and aspiring software developer passionate
                about building practical, reliable and meaningful technology.
            </p>

            <div class="hero-actions">
                <a href="projects.php" class="btn btn-primary">
                    Explore My Work <span>&rarr;</span>
                </a>
                <a href="contact.php" class="btn btn-outline">
                    Let's Talk
                </a>
            </div>

            <div class="hero-meta">
                <span>Based in Kenya</span>
                <span class="meta-divider"></span>
                <span>Open to opportunities</span>
            </div>
        </div>

        <div class="hero-visual">
            <div class="visual-glow"></div>

            <div class="profile-frame">
                <img
                    src="assets/images/profile.webp"
                    alt="Joseph Kiragu"
                    class="profile-photo"
                    width="1536"
                    height="1024"
                    fetchpriority="high"
                >
            </div>

            <div class="floating-tag tag-top">&lt;/&gt; Software Developer</div>
            <div class="floating-tag tag-bottom">✦ Always learning</div>
        </div>
    </div>
</section>

<section class="intro-strip">
    <div class="container intro-grid">
        <div>
            <span class="intro-number">01</span>
            <h3>Problem solving</h3>
            <p>Understanding challenges and designing useful solutions.</p>
        </div>
        <div>
            <span class="intro-number">02</span>
            <h3>Development</h3>
            <p>Building applications with modern development tools.</p>
        </div>
        <div>
            <span class="intro-number">03</span>
            <h3>Continuous learning</h3>
            <p>Growing through practical projects and experimentation.</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading">
            <div>
                <p class="eyebrow">WHAT I WORK WITH</p>
                <h2>My technical interests</h2>
            </div>
            <a href="about.php" class="text-link">More about me &rarr;</a>
        </div>

        <div class="skills-grid">
            <div class="skill-card"><span>01</span><h3>Web Development</h3><p>HTML, CSS, JavaScript and PHP</p></div>
            <div class="skill-card"><span>02</span><h3>Backend Development</h3><p>APIs, server-side logic and databases</p></div>
            <div class="skill-card"><span>03</span><h3>Mobile Development</h3><p>Flutter and Dart</p></div>
            <div class="skill-card"><span>04</span><h3>Data & Security</h3><p>Python, SQL and cybersecurity interests</p></div>
        </div>
    </div>
</section>

<section class="section projects-preview">
    <div class="container">
        <div class="section-heading">
            <div>
                <p class="eyebrow">SELECTED WORK</p>
                <h2>Projects I'm building</h2>
            </div>
            <a href="projects.php" class="text-link">View all projects &rarr;</a>
        </div>

        <div class="project-grid">
            <article class="project-card">
                <div class="project-visual project-fikisha">
                    <span>FD</span>
                    <small>01 / MOBILE APPLICATION</small>
                </div>
                <div class="project-info">
                    <p class="project-type">MOBILE & BACKEND</p>
                    <h3>Fikisha Delivery</h3>
                    <p>A campus-focused delivery application connecting customers, vendors and delivery riders.</p>
                    <div class="tech-list"><span>Flutter</span><span>Dart</span><span>PHP</span><span>MySQL</span></div>
                </div>
            </article>

            <article class="project-card">
                <div class="project-visual project-hali">
                    <span>H</span>
                    <small>02 / WELLNESS PLATFORM</small>
                </div>
                <div class="project-info">
                    <p class="project-type">BACKEND DEVELOPMENT</p>
                    <h3>HALI Wellness</h3>
                    <p>A university wellness platform concept focused on privacy-conscious digital support.</p>
                    <div class="tech-list"><span>Python</span><span>PostgreSQL</span><span>REST APIs</span></div>
                </div>
            </article>

            <article class="project-card">
                <div class="project-visual project-tenant">
                    <span>TC</span>
                    <small>03 / WEB APPLICATION</small>
                </div>
                <div class="project-info">
                    <p class="project-type">WEB DEVELOPMENT</p>
                    <h3>TenantConnect</h3>
                    <p>A property and tenant management project exploring better communication and management workflows.</p>
                    <div class="tech-list"><span>Web Development</span><span>PHP</span><span>MySQL</span></div>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="contact-banner">
    <div class="container contact-banner-content">
        <div>
            <p class="eyebrow">HAVE A PROJECT IN MIND?</p>
            <h2>Let's build something meaningful.</h2>
            <p>I'm interested in opportunities, collaborations and challenging ideas.</p>
        </div>
        <a href="contact.php" class="btn btn-primary">Get in touch &rarr;</a>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
