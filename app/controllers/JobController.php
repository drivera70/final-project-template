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

    public function saveJob() {

    }

    public function viewJobs() {
        include '../public/assets/views/main/experience.php';
        exit();  
    }

    
}