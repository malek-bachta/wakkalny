<?PHP
session_start(); 
include "../config.php";
include 'CmdC.php';
include '../model/cmd.php';


if (isset($_GET["id"])) {
$CmdC=new CmdC();
$CmdC->validerCmd($_GET["id"]);
	
header('Location: ../view/admin/cmdback.php');
 
      
}else{
	echo "vérifier les champs";
}


?>