<?php
namespace geekhubtraining;

use AbstractTemporaryGroup;
use RequirableInterface;

include "AbstractTemporaryGroup.php";
include "RequirableInterface.php";

class JavaForWebGroup extends AbstractTemporaryGroup implements RequirableInterface
{
    private $dayOfWeek;

    function __construct($nameOfGroup, $numberOfStudents, $dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;
        parent::__construct($nameOfGroup, $numberOfStudents);
    }

    public function showSchedule()
    {
        echo $this->getNameOfGroup(). " schedule: every ".$this->dayOfWeek." on 18-30. </br>";
    }

    public function showRequirements()
    {
        echo "If you want to be one of ".$this->getNumberOfStudents()."Java students in ". $this->getNameOfGroup().
            " you must have basic knowledge of: Java and OOP. </br>";
    }
}
