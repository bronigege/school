<?php

namespace app\model;


class Teacher extends Person
{
    private $nrp;
    private $experience;

    public function __construct($name, $surname, $email, $nrp, $experience) {
        parent::__construct($name, $surname, $email);
        $this->nrp = $nrp;
        $this->experience = $experience;
    }

    /**
     * @return mixed
     */
    public function getNrp()
    {
        return $this->nrp;
    }

    /**
     * @param mixed $nrp
     */
    public function setNrp($nrp)
    {
        $this->nrp = $nrp;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    public function isEmptyData()
    {
        return parent::isEmptyData() || empty($this->nrp) || empty($this->experience);
    }
}