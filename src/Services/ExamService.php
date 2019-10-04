<?php


namespace App\Services;


class ExamService
{

    public $exams = ['mcq', 'yes/no', 'fib'];


    public function __construct()
    {
        shuffle($this->exams);
    }
}