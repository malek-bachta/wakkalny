<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "../../config.php";

include '../../controller/CmdC.php';
include '../../model/cmd.php';
include "../../controller/shopC.php";
include 'barcode128.php';

$core=new shopC();
$CmdC=new CmdC();
$listecmd=$CmdC->recherchecmd($_POST['id_commande']);



		$id_commande = $_POST['id_commande'];
		$nomcomplet = $_POST['nom'].' '.$_POST['prenom'];
		$adresse = $_POST['adresse'];
		$tel = $_POST['tel'];
		$prix = $_POST['total'];

	

   
    ?>  
    <html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords"
            content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, pixel  design, pixel  dashboard bootstrap 4 dashboard template">
        <meta name="description"
            content="Pixel Admin is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
        <meta name="robots" content="noindex,nofollow">
        <title>wakkalny</title>
        
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.ico">
       
        <!-- Custom CSS -->
        <!-- color CSS -->
<style>
p.inline {display: inline-block;
    margin-left: auto;
    margin-right: auto;
    width: 8em;}
span { font-size: 13px;}
</style>
<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */

    }
</style>
</head>
<body onload="window.print();">
	<div style="margin-left: 5%" >
		<?php

echo "<img src='images/logo.png' style='width: 130px; text-align: center'>";
echo  " &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;";

            echo "<p class='inline' ><span ><b></b></span>".bar128(stripcslashes($_POST['id_commande']))."<span ><b></b><span></p>";
            echo  " &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;";

      ?>
  <div class="box js-box" style="border:1px solid #000">


<!-- END NAVBAR-->
<div class="site-wrap js-site-wrap">

    <div class="center">
        <div class="container">
            <div class="row">
                <div class="listing listing--properties-list" style="width: 100%">

                    <div class="listing__main">
                        <div class="form-property">

                            <table style="width: 100%">
                                <tbody><tr>
                                    <td style="width: 20%"></td>
                                    <td style="width: 60%;text-align: center"><table style="width: 100%;margin-top: 20px;margin-bottom: 40px;">
                                            <tbody><tr>
                                                <td style="width: 10%"></td>
                                                <td style="font-size: 17px; padding: 5px;text-align: left;">

                                                    <div><b> </b></div>
                                                    <div><b>Nom commercial: </b> <?PHP echo  "Wakkalny"; ?></div>
                                                    <div><b>ADRESSE:</b> <?PHP echo "Tunis"; ?> </div>
                                                    <div><b>TELEPHONE:</b> <?PHP echo "52717009"; ?></div>

                                                </td>
                                                <td style="width: 20%"></td>
                                            </tr>
                                        </tbody></table></td>
                                </tr>
                            </tbody></table>
                            <table style="width: 100%">
                                <tbody><tr>
                                    <td style="width: 20%;"></td>
                                    <td style="width: 60%"><div style="text-align: center;font-size: 26px;border: 1px solid #000;padding-left: 0px;margin-left: 0px;font-weight: bold;margin-top: 30px;margin-bottom: 30px;">BON DE COMMANDE <?PHP echo $_POST['id_commande'] ?> </div></td>
                                    <td style="width: 20%;text-align: center"></td>
                                </tr>
                            </tbody></table>
                        

                            <table border="1" style="width: 100%;margin-top: 20px;margin-bottom: 40px;font-size: 15px;">
                            <tbody><tr>
                            <th style="width: 10%; text-align: center">ID</th>

                                                <th style="width: 60%; text-align: center">Produit</th>
                                                <th style="width: 10%;text-align: center">Quantité</th>
                                                <th style="width: 15%; text-align: center">Montant Total </th>
                                            </tr>
                                          <?php
                                          $total=0;  foreach($listecmd as $row){
    $prod=$core->recuperershops($row['id_produit']);
    foreach($prod as $prodd){
	?>
	<tr>
		

    <td style="padding: 10px"><?PHP echo $prodd['id'];; ?>
    <td style="padding: 10px"><?PHP echo $prodd['nom'];; ?>

                                       <br><br>
                                    </td>
                                    <td style="padding: 10px; text-align: center"><?PHP echo $row['qty']; ?>
                                       <br><br></td>
                                     <br></td>
                                    <td style="padding: 10px; text-align: center"><?PHP echo  (int)$prixht=((int)$prodd['prix']*(int)$row['qty']);(int)$total=+(int)$prixht; ?> 
                                        <br><br></td>
	</tr>
	<?PHP
}}
?>    <tr>
                                
                                </tr>
                            </tbody></table>

                            <div style="text-align: right">
                                <table style="width: 100%">
  
                                        </td>
                                        <td style="border: 1px solid #000; text-align: left; width: 40%">
                                            <div></div>  
                                        </td>
                                    </tr>
                                </tbody></table>

                            </div>


                        </div>


                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- END CENTER SECTION-->
<!-- BEGIN AFTER CENTER SECTION-->
<!-- END AFTER CENTER SECTION-->
<!-- BEGIN PARTNERS-->


</div>



</body></html>