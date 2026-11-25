<?php
$pageTitle = 'Services';
require_once __DIR__ . '/includes/header.php';

$services = [
    [
        'number' => '01',
        'icon' => '</>',
        'title' => 'Web Development',
        'description' => 'Responsive, user-friendly websites designed to help individuals and businesses establish a professional online presence.',
        'technologies' => ['HTML', 'CSS', 'JavaScript', 'PHP']
    ],
    [
        'number' => '02',
        'icon' => '{ }',
        'title' => 'Backend Development',
        'description' => 'Server-side application development, business logic and API integration to power reliable digital products.',
        'technologies' => ['PHP', 'Python', 'REST APIs']
    ],
    [
        'number' => '03',
        'icon' => '▣',
        'title' => 'Mobile Applications',
        'description' => 'Cross-platform mobile application development focused on usability and practical everyday experiences.',
        'technologies' => ['Flutter', 'Dart']
    ],
    [
        'number' => '04',
        'icon' => '▤',
        'title' => 'Database Solutions',
        'description' => 'Database design, data organization and integration to support efficient application functionality.',
        'technologies' => ['MySQL', 'PostgreSQL', 'SQL']
    ],
    [
        'number' => '05',
        'icon' => '⌘',
        'title' => 'Software Solutions',
        'description' => 'Development of practical software solutions that address specific operational and user challenges.',
        'technologies' => ['Problem Solving', 'System Design']
    ],
    [
        'number' => '06',
        'icon' => '↗',
        'title' => 'Technical Consultation',
        'description' => 'Technology guidance, project planning and assistance in identifying suitable approaches to digital challenges.',
        'technologies' => ['Planning', 'Research', 'Technology']
    ]
];
?>

<section class="page-hero">
    <div class="container">
        <p class="eyebrow">WHAT I CAN DO</p>
        <h1>Services & <span class="gradient-text">Solutions.</span></h1>
        <p>Technology services focused on solving practical problems.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading">
            <div>
                <p class="eyebrow">MY CAPABILITIES</p>
                <h2>How I can help</h2>
            </div>
        </div>

        <div class="services-grid">
            <?php foreach ($services as $service): ?>
                <article class="service-card">
                    <div class="service-top">
                        <span class="service-number"><?= htmlspecialchars($service['number']) ?></span>
                        <span class="service-icon"><?= htmlspecialchars($service['icon']) ?></span>
                    </div>

                    <h3><?= htmlspecialchars($service['title']) ?></h3>

                    <p><?= htmlspecialchars($service['description']) ?></p>

                    <div class="tech-list">
                        <?php foreach ($service['technologies'] as $technology): ?>
                            <span><?= htmlspecialchars($technology) ?></span>
                        <?php endforeach; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section process-section">
    <div class="container">
        <div class="section-heading">
            <div>
                <p class="eyebrow">HOW I WORK</p>
                <h2>From idea to solution</h2>
            </div>
        </div>

        <div class="process-grid">
            <article class="process-card">
                <span>01</span>
                <h3>Understand</h3>
                <p>Understand the problem, users and project objectives.</p>
            </article>

            <article class="process-card">
                <span>02</span>
                <h3>Plan & Design</h3>
                <p>Identify requirements and plan an appropriate solution.</p>
            </article>

            <article class="process-card">
                <span>03</span>
                <h3>Develop</h3>
                <p>Build the solution using suitable technologies and practices.</p>
            </article>

            <article class="process-card">
                <span>04</span>
                <h3>Test & Improve</h3>
                <p>Test functionality, address issues and improve the experience.</p>
            </article>
        </div>
    </div>
</section>

<section class="contact-banner">
    <div class="container contact-banner-content">
        <div>
            <p class="eyebrow">LET'S WORK TOGETHER</p>
            <h2>Have a challenge worth solving?</h2>
            <p>Let's discuss your idea and explore how technology can help.</p>
        </div>

        <a href="contact.php" class="btn btn-primary">Start a Conversation &rarr;</a>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
