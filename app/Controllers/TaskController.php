<?php

namespace App\Controllers;

use App\Models\TaskModel;

class TaskController extends BaseController
{
    public function welcome()
    {
        $taskModel = new TaskModel();
        
        // Query tasks where task_date equals today's date
        $todayDate = date('Y-m-d');
        $data['tasks'] = $taskModel->where('task_date', $todayDate)->findAll();
        $data['title'] = "Today's Tasks Dashboard";

        return view('welcome_tasks', $data);
    }

    public function index()
    {
        $taskModel = new TaskModel();
        
        // Query every task ordered by date
        $data['tasks'] = $taskModel->orderBy('task_date', 'ASC')->findAll();
        $data['title'] = "All System Tasks";

        return view('task_list', $data);
    }
}
