<?php
namespace App\Enums;

enum Role: int

{
    case ProjectManager = 1;
    case SiteEngineer = 2;
    case Architect = 3;
    case Foreman = 4;
    case Estimator = 5;
    case SafetyOfficer = 6;
    case Laborer = 7;
}
