<?php

namespace app\model;


class Student extends Person
{
    private $schoolYear;

    public function __construct($name, $surname, $email, $schoolYear) {
        parent::__construct($name, $surname, $email);
        $this->schoolYear = $schoolYear;
    }

    /**
     * @param mixed $schoolYear
     */
    public function setSchoolYear($schoolYear)
    {
        $this->schoolYear = $schoolYear;
    }

    /**
     * @return mixed
     */
    public function getSchoolYear()
    {
        return $this->schoolYear;
    }
}