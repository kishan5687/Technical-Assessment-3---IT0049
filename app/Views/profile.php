<?= view('templates/header') ?>

<h2><?= esc($title) ?></h2>
<p>Below are the details for the system's demo user record:</p>

<?php if (!empty($user)): ?>
    <div class="card">
        <p><strong>User ID:</strong> <?= esc($user['id']) ?></p>
        <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
        <p><strong>Full Name:</strong> <?= esc($user['full_name']) ?></p>
        <p><strong>Email Address:</strong> <?= esc($user['email']) ?></p>
        <p><strong>Account Created:</strong> <?= esc($user['created_at']) ?></p>
    </div>
<?php else: ?>
    <p>No demo profile record found in the database.</p>
<?php endif; ?>

<?= view('templates/footer') ?>
