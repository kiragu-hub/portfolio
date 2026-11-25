<?php
$pageTitle = 'About Me';
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <p class="eyebrow">GET TO KNOW ME</p>
        <h1>About <span class="gradient-text">Joseph Kiragu.</span></h1>
        <p>My journey, background and passion for building technology.</p>
    </div>
</section>

<section class="section">
    <div class="container about-layout">
        <div class="about-visual">
            <div class="about-monogram">JK</div>
            <div class="about-caption">
                <span class="status-dot"></span>
                Learning. Building. Growing.
            </div>
        </div>

        <div class="about-content">
            <p class="eyebrow">MY INTRODUCTION</p>
            <h2>A developer driven by curiosity and problem-solving.</h2>

            <p>
                I'm Joseph Kiragu, an Applied Computer Science student
                at Daystar University, Kenya, with a strong interest in
                software development and technology.
            </p>

            <p>
                I enjoy transforming ideas into practical digital
                solutions. Through academic work, personal projects
                and collaborative experiences, I've been developing
                my skills in web development, mobile applications,
                backend systems and databases.
            </p>

            <p>
                My goal is to become a versatile software developer
                who builds reliable, accessible and useful technology
                that addresses real-world challenges.
            </p>

            <a href="contact.php" class="btn btn-primary">
                Connect With Me &rarr;
            </a>
        </div>
    </div>
</section>

<section class="section about-background">
    <div class="container">
        <div class="section-heading">
            <div>
                <p class="eyebrow">MY BACKGROUND</p>
                <h2>Education & development journey</h2>
            </div>
        </div>

        <div class="timeline">
            <article class="timeline-item">
                <span class="timeline-marker"></span>
                <div>
                    <p class="timeline-date">2024 – PRESENT</p>
                    <h3>Daystar University</h3>
                    <p class="timeline-role">Bachelor of Science in Applied Computer Science</p>
                    <p class="timeline-description">
                        Developing a foundation in programming, software
                        engineering, databases, computer systems and
                        information technology.
                    </p>
                </div>
            </article>

            <article class="timeline-item">
                <span class="timeline-marker"></span>
                <div>
                    <p class="timeline-date">ONGOING</p>
                    <h3>Practical Software Development</h3>
                    <p class="timeline-role">Academic and personal projects</p>
                    <p class="timeline-description">
                        Applying classroom knowledge through web,
                        mobile and backend development projects,
                        while improving problem-solving and teamwork.
                    </p>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading">
            <div>
                <p class="eyebrow">WHAT DRIVES ME</p>
                <h2>My approach to technology</h2>
            </div>
        </div>

        <div class="skills-grid">
            <article class="skill-card">
                <span>01</span>
                <h3>Curiosity</h3>
                <p>Exploring technologies and continuously learning new skills.</p>
            </article>

            <article class="skill-card">
                <span>02</span>
                <h3>Problem solving</h3>
                <p>Breaking down complex challenges into practical solutions.</p>
            </article>

            <article class="skill-card">
                <span>03</span>
                <h3>Collaboration</h3>
                <p>Learning from others and contributing to shared goals.</p>
            </article>

            <article class="skill-card">
                <span>04</span>
                <h3>Impact</h3>
                <p>Building technology that has practical value to its users.</p>
            </article>
        </div>
    </div>
</section>

<section class="contact-banner">
    <div class="container contact-banner-content">
        <div>
            <p class="eyebrow">LET'S CONNECT</p>
            <h2>Have an opportunity or idea?</h2>
            <p>I'd be glad to hear from you.</p>
        </div>
        <a href="contact.php" class="btn btn-primary">Contact Me &rarr;</a>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
