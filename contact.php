<?php
session_start();

$pageTitle = "Contact";

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$errors = [];
$old = [
    'name' => '',
    'email' => '',
    'subject' => '',
    'message' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($old as $field => $value) {
        $old[$field] = trim($_POST[$field] ?? '');
    }

    $token = $_POST['csrf_token'] ?? '';
    $honeypot = trim($_POST['website'] ?? '');

    if (!hash_equals($_SESSION['csrf_token'], $token)) {
        $errors[] = 'Your session expired. Please refresh and try again.';
    }

    if ($honeypot !== '') {
        $errors[] = 'Your submission could not be processed.';
    }

    if ($old['name'] === '' || strlen($old['name']) > 100) {
        $errors[] = 'Please enter a name of up to 100 characters.';
    }

    if (!filter_var($old['email'], FILTER_VALIDATE_EMAIL)
        || strlen($old['email']) > 254) {
        $errors[] = 'Please enter a valid email address.';
    }

    if ($old['subject'] === '' || strlen($old['subject']) > 150) {
        $errors[] = 'Please enter a subject of up to 150 characters.';
    }

    if ($old['message'] === '' || strlen($old['message']) > 5000) {
        $errors[] = 'Your message must be between 1 and 5000 characters.';
    }

    if (empty($errors)) {
        try {
            $pdo = require dirname(__DIR__)
                . '/portfolio-private/config.php';

            $stmt = $pdo->prepare(
                'INSERT INTO contact_messages (name, email, subject, message)
                 VALUES (:name, :email, :subject, :message)'
            );

            $stmt->execute([
                ':name' => $old['name'],
                ':email' => $old['email'],
                ':subject' => $old['subject'],
                ':message' => $old['message']
            ]);

            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

            header('Location: contact.php?sent=1');
            exit;

        } catch (Throwable $e) {
            error_log('Contact form error: ' . $e->getMessage());
            $errors[] = 'We could not save your message. Please try again later.';
        }
    }
}

function escapeOutput($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

include 'includes/header.php';
?>

<main>
    <section class="page-hero">
        <div class="container">
            <p class="eyebrow">GET IN TOUCH</p>
            <h1>Let's build something <span>meaningful.</span></h1>
            <p>
                Have a project, opportunity, or idea you'd like to discuss?
                I'd be glad to hear from you.
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container contact-layout">

            <div class="contact-info">
                <p class="eyebrow">CONTACT INFORMATION</p>
                <h2>Let's start a conversation.</h2>
                <p>
                    Whether you're looking for a developer, exploring a
                    collaboration, or simply want to connect, feel free
                    to reach out.
                </p>

                <div class="contact-detail">
                    <span>Email</span>
                    <p>Available on request</p>
                </div>

                <div class="contact-detail">
                    <span>Location</span>
                    <p>Kenya</p>
                </div>

                <div class="contact-detail">
                    <span>GitHub</span>
                    <p>
                        <a href="https://github.com/kiragu-hub"
                           target="_blank"
                           rel="noopener noreferrer">
                            github.com/kiragu-hub
                        </a>
                    </p>
                </div>
            </div>

            <div class="contact-form-wrapper">

                <?php if (isset($_GET['sent'])): ?>
                    <p class="form-success">
                        Thank you! Your message has been received.
                    </p>
                <?php endif; ?>

                <?php if (!empty($errors)): ?>
                    <div class="form-errors" role="alert">
                        <p>Please correct the following:</p>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li><?= escapeOutput($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="contact.php" method="POST"
                      class="contact-form">

                    <input type="hidden" name="csrf_token"
                           value="<?= escapeOutput($_SESSION['csrf_token']) ?>">

                    <div class="form-group" style="position:absolute;left:-9999px;">
                        <label for="website">Leave this field empty</label>
                        <input type="text" id="website" name="website"
                               tabindex="-1" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name"
                               maxlength="100"
                               value="<?= escapeOutput($old['name']) ?>"
                               placeholder="Enter your name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email"
                               maxlength="254"
                               value="<?= escapeOutput($old['email']) ?>"
                               placeholder="Enter your email" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject"
                               maxlength="150"
                               value="<?= escapeOutput($old['subject']) ?>"
                               placeholder="What would you like to discuss?"
                               required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="6"
                                  maxlength="5000"
                                  placeholder="Write your message..."
                                  required><?= escapeOutput($old['message']) ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Send Message
                    </button>

                </form>
            </div>

        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
