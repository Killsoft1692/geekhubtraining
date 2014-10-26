<?php
abstract class AbstractTemporaryGroup
{
    private $nameOfGroup;
    private $numberOfStudents;

    public function __construct($nameOfGroup, $numberOfStudents)
    {
        $this->nameOfGroup = $nameOfGroup;
        $this->numberOfStudents = $numberOfStudents;
    }

    public function getNumberOfStudents()
    {
        return $this->numberOfStudents;
    }

    public function getNameOfGroup()
    {
        return $this->nameOfGroup;
    }

    abstract protected function showSchedule();
}
