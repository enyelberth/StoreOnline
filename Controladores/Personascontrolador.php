<?php 

$onename = $_POST["oneName"];

 $twoname = $_POST["twoName"];
 $OneLastName = $_POST["OneLastName"];
 $TwoLastName = $_POST["TwoLastName"];
 $Cedula = $_POST["Cedula"];
 $Email = $_POST["Email"];
 $UserName = $_POST["UserName"];
 $Password = $_POST["Password"];

// Variables de personas
class persona {


 private $onename;

 private $twoname;
 private $OneLastName;
 private $TwoLastName;
 private $Cedula;
 private $Email;
 private $UserName;
 private $Password;

    public function getPrimerNombre(){return $this->onename;}
    public function setPrimerNombre($onename) {$this->onename = $onename;}

    public function getSegundoNombre(){return $this->twoname;}
    public function setSegundoNombre($twoname) {$this->twoname = $twoname;}

    public function getPrimerApellido(){return $this->OneLastName;}
    public function setPrimerApellido($OneLastName) {$this->OneLastName = $OneLastName;}

    public function getSegundoApellido(){return $this->TwoLastName;}
    public function setSegundoApellido($TwoLastName) {$this->TwoLastName = $TwoLastName;}

    public function getCedula(){return $this->Cedula;}
    public function setCedula($Cedula) {$this->Cedula = $Cedula;}

    public function getEmail(){return $this->Email;}
    public function setEmail($Email) {$this->Email = $Email;}

    public function getUsuario(){return $this->UserName;}
    public function setUsuario($UserName) {$this->UserName = $UserName;}

    public function getContraseña(){return $this->Password;}
    public function setContraseña($Password) {$this->Password = $Password;}



    public function __construct($onename,$twoname,$OneLastName,$TwoLastName,$Cedula,$Email,$UserName,$Password)
    {
        $this->onename = $onename;
        $this->twoname = $twoname;
        $this->OneLastName = $OneLastName;
        $this->TwoLastName = $TwoLastName;
        $this->Cedula = $Cedula;
        $this->Email = $Email;
        $this->UserName = $UserName;
        $this->Password = $Password;
    } 
}
$enyelberth = new persona($onename,$twoname,$OneLastName,$TwoLastName,$Cedula,$Email,$UserName,$Password);

var_dump($enyelberth);