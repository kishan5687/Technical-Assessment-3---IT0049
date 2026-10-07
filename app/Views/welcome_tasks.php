<?= view('templates/header') ?>

<h2><?= esc($title) ?></h2>
<p>Displaying only tasks scheduled for today (<?= date('F d, Y') ?>):</p>

<?php if (!empty($tasks) && is_array($tasks)): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Task Title</th>
                <th>Status</th>
                <th>Task Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= esc($task['id']) ?></td>
                    <td><?= esc($task['title']) ?></td>
                    <td>
                        <span class="badge <?= esc($task['status']) ?>"><?= esc(ucfirst($task['status'])) ?></span>
                    </td>
                    <td><?= esc($task['task_date']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No tasks scheduled for today!</p>
<?php endif; ?>

<?= view('templates/footer') ?>
