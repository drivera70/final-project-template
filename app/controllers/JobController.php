<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Job;

class JobController extends Controller
{
    public function getJobs()
    {
        $jobModel = new Job();
        header("Content-Type: application/json");
        $jobs = $jobModel->getAllJobs();
        echo json_encode($jobs);
        exit();
    }

    public function saveJob() 
    {
        $inputData = [
            'title' => $_POST['title'] ? $_POST['title'] : false,
            'company' => $_POST['company'] ? $_POST['company'] : false,
            'years_worked' => $_POST['years_worked'] ? $_POST['years_worked'] : false,
            'description' => $_POST['description'] ? $_POST['description'] : false,
        ];

        $job = new Job();
        $job->saveJob(
            [
                'title' => $inputData['title'],
                'company' => $inputData['company'],
                'years_worked' => $inputData['years_worked'],
                'description' => $inputData['description'],
            ]
            );
            http_response_code(200);
            echo json_encode([
            'success' => true
        ]);
        exit();
    }

    public function viewJobs() {
        include '../public/assets/views/main/experience.php';
        exit();  
    }

    public function viewAddJobs() {
        include '../public/assets/views/main/experience-add.php';
        exit();  
    }
    
}