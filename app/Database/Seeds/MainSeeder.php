<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MainSeeder extends Seeder
{
    public function run()
    {
        
        $userData = [
            'username'   => 'raina_kishan',
            'full_name'  => 'QUEJADA, RAINA KISHAN S.',
            'email'      => 'raina.quejada@student.feutech.edu.ph',
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->db->table('users')->insert($userData);

        $today = date('Y-m-d');
        $tomorrow = date('Y-m-d', strtotime('+1 day'));
        $yesterday = date('Y-m-d', strtotime('-2 days'));

        $tasksData = [
            ['title' => 'Review IT0049 Lecture Notes', 'status' => 'completed', 'task_date' => $today, 'created_at' => date('Y-m-d H:i:s')],
            ['title' => 'Setup CodeIgniter 4 Project environment', 'status' => 'completed', 'task_date' => $today, 'created_at' => date('Y-m-d H:i:s')],
            ['title' => 'Create database schema and tables', 'status' => 'pending', 'task_date' => $today, 'created_at' => date('Y-m-d H:i:s')],
            ['title' => 'Implement TaskModel and UserModel classes', 'status' => 'pending', 'task_date' => $today, 'created_at' => date('Y-m-d H:i:s')],
            ['title' => 'Submit Web System Technologies assignment', 'status' => 'pending', 'task_date' => $tomorrow, 'created_at' => date('Y-m-d H:i:s')],
            ['title' => 'Prepare for upcoming technical quiz', 'status' => 'pending', 'task_date' => $tomorrow, 'created_at' => date('Y-m-d H:i:s')],
            ['title' => 'Review relational database normalization', 'status' => 'completed', 'task_date' => $yesterday, 'created_at' => date('Y-m-d H:i:s')],
            ['title' => 'Read CodeIgniter Query Builder documentation', 'status' => 'completed', 'task_date' => $yesterday, 'created_at' => date('Y-m-d H:i:s')],
        ];

        $this->db->table('tasks')->insertBatch($tasksData);
    }
}
