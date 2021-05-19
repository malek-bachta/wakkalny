<?PHP
session_start(); 

include "../config.php";

include 'CouponC.php';
include '../model/coupon.php';


if (isset($_POST['code'],$_POST['pourcentage'])) {
$core=new couponc();
$coupon=new coupon($_POST['code'],1,$_POST['pourcentage']);
$core->AjouterCoupon($coupon);

  


 
header('Location: ../view/front/thankyou.php');

      
}else{
	echo "vérifier les champs";
}


?>