<?php    
	include "../config.php";
	require_once '../Model/commande.php';

	class commandeC {
		
		function ajoutercommande($commande){
			$sql="INSERT INTO commande ( product_name , client_name , email , adresse , phone) 
			VALUES (:product_name , :client_name , :email , :adresse , :phone)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			 
				$query->execute([
					'product_name' => $commande->getproduct_name(),
					'client_name' => $commande->getclient_name(),
					'email' => $commande->getemail(),
                    'adresse' => $commande->getadresse(),
                    'phone' => $commande->getphone(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
    
	function supprimercommande($id){
        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare(
                'DELETE FROM commande WHERE id = :id'
            );
            $query->execute([
                'id' => $id
            ]);
        } catch (Exception $e) {
            die('Erreur: '.$e->getMessage());
        }
    }
	 function affichercommande(){
			
		$sql="SELECT * FROM commande";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}

	 function getclient_name($client_name) {
		try {
			$pdo = config::getConnexion();
			$query = $pdo->prepare(
				'SELECT * FROM commande WHERE client_name = :client_name'
			);
			$query->execute([
				'client_name' => $client_name
			]);
			return $query->fetch();
		} catch (Exception $e) {
			$e->getMessage();
		}
	}




}
    ?>