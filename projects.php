<?php
$pageTitle = 'Projects';
require_once __DIR__ . '/includes/header.php';

$projects = [
    [
        'number' => '01',
        'name' => 'Fikisha Delivery',
        'category' => 'MOBILE APPLICATION & BACKEND',
        'initials' => 'FD',
        'class' => 'fikisha',
        'description' => 'A campus-focused delivery platform designed to connect customers, vendors and delivery riders within a university community.',
        'contribution' => 'Mobile application development, authentication, API integration and order management workflows.',
        'technologies' => ['Flutter', 'Dart', 'PHP', 'MySQL'],
        'status' => 'Academic project in development',
        'github' => 'https://github.com/kiragu-hub/fikisha-delivery'
    ],
    [
        'number' => '02',
        'name' => 'HALI Wellness',
        'category' => 'BACKEND DEVELOPMENT & WELLNESS TECHNOLOGY',
        'initials' => 'H',
        'class' => 'hali',
        'description' => 'A university wellness platform developed for a hackathon, with an emphasis on privacy-conscious data handling and structured wellness support.',
        'contribution' => 'Python backend foundation, API development and backend architecture.',
        'technologies' => ['Python', 'PostgreSQL', 'REST APIs', 'JWT'],
        'status' => 'Hackathon project prototype',
        'github' => 'https://github.com/kiragu-hub/hali-backend'
    ],
    [
        'number' => '03',
        'name' => 'TenantConnect',
        'category' => 'PROPERTY MANAGEMENT CONCEPT',
        'initials' => 'TC',
        'class' => 'tenant',
        'description' => 'A property and tenant management concept exploring how digital systems can improve communication and everyday property management.',
        'contribution' => 'Project concept and software development exploration.',
        'technologies' => ['Web Development', 'PHP', 'MySQL'],
        'status' => 'Project concept',
        'github' => null
    ]
];
?>

<section class="page-hero">
    <div class="container">
        <p class="eyebrow">MY WORK & EXPERIMENTS</p>
        <h1>Projects I've <span class="gradient-text">worked on.</span></h1>
        <p>Practical projects, learning experiences and ideas turned into technology.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading">
            <div>
                <p class="eyebrow">SELECTED PROJECTS</p>
                <h2>Building through experience</h2>
            </div>
            <span class="project-count">03 PROJECTS</span>
        </div>

        <div class="projects-list">
            <?php foreach ($projects as $project): ?>
                <article class="project-detail-card">

                    <div class="project-detail-visual project-<?= htmlspecialchars($project['class']) ?>">
                        <span><?= htmlspecialchars($project['initials']) ?></span>
                        <small><?= htmlspecialchars($project['category']) ?></small>
                    </div>

                    <div class="project-detail-content">
                        <div class="project-detail-top">
                            <span class="project-number"><?= htmlspecialchars($project['number']) ?></span>
                            <span class="project-status"><?= htmlspecialchars($project['status']) ?></span>
                        </div>

                        <h2><?= htmlspecialchars($project['name']) ?></h2>

                        <p class="project-description">
                            <?= htmlspecialchars($project['description']) ?>
                        </p>

                        <div class="contribution">
                            <h4>MY CONTRIBUTION</h4>
                            <p><?= htmlspecialchars($project['contribution']) ?></p>
                        </div>

                        <div class="tech-list">
                            <?php foreach ($project['technologies'] as $technology): ?>
                                <span><?= htmlspecialchars($technology) ?></span>
                            <?php endforeach; ?>
                        </div>

                        <?php if ($project['github']): ?>
                            <a href="<?= htmlspecialchars($project['github']) ?>"
                               class="project-link"
                               target="_blank"
                               rel="noopener noreferrer">
                                View GitHub Repository &rarr;
                            </a>
                        <?php endif; ?>
                    </div>

                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="contact-banner">
    <div class="container contact-banner-content">
        <div>
            <p class="eyebrow">HAVE AN IDEA?</p>
            <h2>Let's create the next solution.</h2>
            <p>I'm always interested in learning, building and collaborating.</p>
        </div>
        <a href="contact.php" class="btn btn-primary">Contact Me &rarr;</a>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
