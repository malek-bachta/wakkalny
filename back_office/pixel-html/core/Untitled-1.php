<thead>
                                        <tr>
<th>ID Produit</th>
<th>Titre </th>
<th>Prix</th>
<th>Quantité</th>
<th>total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?PHP
foreach($listecmd as $row){
    $prod=$core->rechercheProduit($row['id_produit']);
    foreach($prod as $prodd){
	?>
	<tr>
			<td><?PHP echo $prodd['product_id']; ?></td>
	<td><?PHP echo $prodd['product_title']; ?></td>
	<td><?PHP echo $prodd['product_price']; ?></td>
	<td><?PHP echo $row['qty']; ?></td>
	<td><?PHP echo $prodd['product_price']*$row['qty']; ?></td>

  
	</tr>
	<?PHP
}}
?>



<?PHP
include 'core/CmdC.php';
include 'entities/cmd.php';
include "core/ProduitCore.php";
$core=new ProduitCore();
$CmdC=new CmdC();
$listecmd=$CmdC->recherchecmd($_GET["id"]);
?>

