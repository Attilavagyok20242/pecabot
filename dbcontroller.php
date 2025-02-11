<?php
class Dbcontroller{
    private $con=null;
    private $host="localhost";
    private $user="root";
    private $password ="";
    private $database="pecabot";
    function __construct()
    {
        $this->connectionDB();
    }
    function connectionDB(){
        try{
            $this->con=new PDO("mysql:host={$this->host};);dbname={$this->database};charset=utf8",$this->user,$this->password);
          $this ->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }
        catch(PDOException $e){
            die("Csatlakozási hiba".$e->getMessage());

        }
    }
    function executeSelectQuery($query,$params=[]){
        try{
          $stmt=$this->con->prepare($query);
          $stmt -> execute($params);
          return $stmt -> fetchALL(PDO::FETCH_ASSOC);

        }
        catch(PDOException $e){
            die("Csatlakozási hiba".$e->getMessage());

        }

    }
    function closeDB(){
        $this->con=null;
    }

}
?>