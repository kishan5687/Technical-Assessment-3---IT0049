<?= view('templates/header') ?>

<h2><?= esc($title) ?></h2>
<p>Displaying all tasks logged within the database management system system:</p>

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
                        <?php if (strtolower($task['status']) === 'completed'): ?>
                            <span class="status-badge badge-completed">Completed</span>
                        <?php else: ?>
                            <span class="status-badge badge-pending">Pending</span>
                        <?php endif; ?>
                    </td>
                    <td><?= esc($task['task_date']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No task entries found.</p>
<?php endif; ?>

<style>
    .status-badge {
        display: inline-block;
        padding: 4px 12px;
        font-size: 0.85rem;
        font-weight: 600;
        border-radius: 50px;
        text-align: center;
    }

    .badge-completed {
        background-color: #d1e7dd; 
        color: #0f5132;            
    }

    .badge-pending {
        background-color: #fff3cd; 
        color: #664d03;            
    }
</style>

<?= view('templates/footer') ?>
