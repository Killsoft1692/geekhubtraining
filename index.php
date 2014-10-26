<?php
namespace geekhubtraining;

include "JavaForWebGroup.php";
include "AdvancedPHPGroup.php";

$groupPHPFirst = new AdvancedPHPGroup("Symfony2 Group", 15, "O.Zinchenko");
$groupPHPSecond = new AdvancedPHPGroup("Yii2 Group", 17, "D.Nemesh");
$groupJavaFirst = new JavaForWebGroup("Java Group 1", 16, "Wednesday");
$groupJavaSecond = new JavaForWebGroup("Java Group 2", 15, "Thursday");

$groupPHPFirst->showSchedule();
$groupPHPFirst->showRequirements();
$groupPHPSecond->showSchedule();
$groupJavaFirst->showSchedule();
$groupJavaSecond->showSchedule();
$groupJavaSecond->showRequirements();
