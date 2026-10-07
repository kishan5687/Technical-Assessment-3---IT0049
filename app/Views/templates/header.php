<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f9f9f9; color: #333; }
        nav { margin-bottom: 20px; padding: 10px; background: #e3e3e3; border-radius: 4px; }
        nav a { margin-right: 15px; text-decoration: none; color: #0066cc; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; background: #fff; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        .badge { padding: 4px 8px; border-radius: 4px; font-size: 0.9em; font-weight: bold; }
        .pending { background-color: #ffeeba; color: #856404; }
        .completed { background-color: #d4edda; color: #155724; }
        .card { background: white; padding: 20px; border: 1px solid #ccc; border-radius: 5px; max-width: 500px; }
    </style>
</head>
<body>
    <header>
        <h1>Management System</h1>
        <nav>
            <a href="<?= base_url('/') ?>">Dashboard</a>
            <a href="<?= base_url('/tasks') ?>">All Tasks</a>
            <a href="<?= base_url('/profile') ?>">Profile</a>
            <a href="<?= base_url('/about') ?>">About Developer</a>
        </nav>
    </header>
