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
        if ($this->schoolYear != $schoolYear) {
            $this->schoolYear = $schoolYear;
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getSchoolYear()
    {
        return $this->schoolYear;
    }

    public function isEmptyData()
    {
        return parent::isEmptyData() || empty($this->schoolYear);
    }
}