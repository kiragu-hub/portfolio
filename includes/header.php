<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$siteName = 'Joseph Kiragu';

$defaultDescription = 'Joseph Kiragu is an Applied Computer Science student and aspiring Software Developer building practical digital solutions.';

$pageDescriptions = [
    'index.php' => 'Explore Joseph Kiragu\'s software development portfolio, technical skills, projects and professional journey.',
    'about.php' => 'Learn about Joseph Kiragu, his education, background, technical interests and journey in Applied Computer Science.',
    'services.php' => 'Explore software development, backend APIs, mobile applications, database solutions and technical services.',
    'projects.php' => 'Explore software development projects by Joseph Kiragu, including Fikisha Delivery, HALI Wellness and TenantConnect.',
    'contact.php' => 'Contact Joseph Kiragu for software development opportunities, collaborations and technical projects.'
];

$description = $pageDescriptions[$currentPage] ?? $defaultDescription;
$pageTitle = $pageTitle ?? 'Home';

$isHttps = (
    (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https')
);

$scheme = $isHttps ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';

$basePath = rtrim(
    str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')),
    '/'
);

$baseUrl = $scheme . '://' . $host . $basePath;

$pageUrl = $baseUrl . '/' . rawurlencode($currentPage);
$imageUrl = $baseUrl . '/assets/images/profile.webp';
?><?php
$currentPage = basename($_SERVER['PHP_SELF']);
$siteName = 'Joseph Kiragu';

$defaultDescription = 'Joseph Kiragu is an Applied Computer Science student and aspiring Software Developer building practical digital solutions.';

$pageDescriptions = [
    'index.php' => 'Explore Joseph Kiragu\'s software development portfolio, technical skills, projects and professional journey.',
    'about.php' => 'Learn about Joseph Kiragu, his education, background, technical interests and journey in Applied Computer Science.',
    'services.php' => 'Explore software development, backend APIs, mobile applications, database solutions and technical services.',
    'projects.php' => 'Explore software development projects by Joseph Kiragu, including Fikisha Delivery, HALI Wellness and TenantConnect.',
    'contact.php' => 'Contact Joseph Kiragu for software development opportunities, collaborations and technical projects.'
];

$description = $pageDescriptions[$currentPage] ?? $defaultDescription;
$pageTitle = $pageTitle ?? 'Home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">

    <meta name="author" content="Joseph Kiragu">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:title"
          content="<?= htmlspecialchars($pageTitle . ' | ' . $siteName, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description"
          content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:site_name" content="Joseph Kiragu">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title"
          content="<?= htmlspecialchars($pageTitle . ' | ' . $siteName, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:description"
          content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">

    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?> | <?= htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8') ?></title>

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/main.js" defer></script>
</head>
<body>

<header class="site-header">
    <nav class="navbar container" aria-label="Main navigation">
        <a href="index.php" class="brand" aria-label="Joseph Kiragu home">
            <span class="brand-mark">JK</span>
            <span class="brand-name">Joseph<span>.</span></span>
        </a>

        <button class="menu-toggle" id="menuToggle"
                aria-label="open navigation menu"
                aria-label="navLinks"
                aria-expanded="false">
            <span></span><span></span><span></spans>
        </button>

        <ul class="nav-links" id="navLinks">
            <?php
            $navigation = [
                'index.php' => 'Home',
                'about.php' => 'About',
                'services.php' => 'Services',
                'projects.php' => 'Projects',
                'contact.php' => 'Contact'
            ];

            foreach ($navigation as $file => $label):
            ?>
                <li>
                    <a href="<?= $file ?>"
                       class="<?= $currentPage === $file ? 'active' : '' ?>">
                        <?= $label ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>

<main>
