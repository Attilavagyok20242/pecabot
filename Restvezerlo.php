<?php
require_once("fishingRodrestKezelo.php");
$view ="";
if(isset($_GET["view"])){
    $view=$_GET["view"];
    switch ($view){
        case "all":
            $FishingRodrest=new fishingRodrestKezelo();
            $FishingRodrest->getAllFRod();
            break;
        case "single":
            $FishingRodrest=new fishingRodrestKezelo();
            $FishingRodrest->getRodById($_GET["id"]);
            break;
        case "tipus":
            $FishingRodrest=new fishingRodrestKezelo();
            $FishingRodrest->getRodByType($_GET["tid"]);
            break;
            default:
            $FishingRodrest=new fishingRodrestKezelo();
            $FishingRodrest->getFault();
           
    }
    }
}