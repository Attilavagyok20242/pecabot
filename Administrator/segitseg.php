<?php
include 'connection/connection.php';
header('Content-Type: application/json;charset=UTF-8');
$sql = "SELECT felhasznalo_nev  as Felhasznalo, uzenettema as Tema,aktiv as függőbenlévő_bejelentések,dates as Dátum FROM felhasznalo inner join segitseg on felhasznalo.id=segitseg.felhasznalo_id";
    $result=$con->query($sql);
    while($row=$result->fetch_assoc())
    {
       $tomb[]=[
        "felhasznalo_nev"=>$row["Felhasznalo"],
        "uzenettema" =>$row["Tema"],
        "aktiv" => $row["függőbenlévő_bejelentések"],
        "dates" =>$row["Dátum"]
       ];
    }
    $json=json_encode($tomb,JSON_UNESCAPED_UNICODE);
    print($json);
?>