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
}