<?php
namespace geekhubtraining;

use AbstractTemporaryGroup;
use RequirableInterface;

class AdvancedPHPGroup extends AbstractTemporaryGroup implements RequirableInterface
{
    private $teacher;

    function __construct($nameOfGroup, $numberOfStudents, $teacher)
    {
        $this->teacher = $teacher;
        parent::__construct($nameOfGroup, $numberOfStudents);
    }

    public function showSchedule()
    {
        echo $this->getNameOfGroup(). " schedule: every Tuesday on 18-30 (Teacher - ". $this->teacher."). </br>";
    }

    public function showRequirements()
    {
        echo "If you want to be one of ".$this->getNumberOfStudents()." PHP students in ".$this->getNameOfGroup().
            " you must have basic knowledge of: HTML / CSS, PHP, OOP, Unix commands. </br>";
    }
}
