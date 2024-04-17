<?php

namespace app\models;
use app\core\Model;

class Job

{
    use Model;

    protected $table = 'jobs';

    public function getAllJobs() {
        return $this->findAll();
    }

    public function saveJob($inputData)
    {
        $query = "insert into jobs (title, company, years_worked, description) values (:title, :company, :years_worked, :description);";
        return $this->query($query, $inputData);
    }
}