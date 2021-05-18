<?php
class Commande
{
    private  $id=null ;
    private  $product_name=null ;
    private  $client_name=null ;
    private  $email=null ;
    private  $adresse=null ;
    private  $phone=null ;

    public function __construct(string $product_name,string $client_name,string $email,string $adresse,int $phone)
    {
        
        $this->product_name=$product_name;
        $this->client_name=$client_name;
        $this->email=$email;
        $this->adresse=$adresse;
        $this->phone=$phone;
    }
    function getid():int{
		return $this->id;
	}
	function getproduct_name():string{
		return $this->product_name;
	}
	function getclient_name():string{
		return $this->client_name;
	}
	function getemail():string{
		return $this->email;
	}
    function getadresse():string{
		return $this->adresse;
	}
    function getphone():int{
		return $this->phone;
	}

	function setproduct_name($product_name):void{
		$this->product_name=$product_name;
	}
	function setclient_name($client_name):void{
		$this->client_name=$client_name;
	}
	function setemail($email):void{
		$this->email=$email;
	}
    function setadresse($adresse):void{
		$this->adresse=$adresse;
	}
    function setphone($phone):void{
		$this->phone=$phone;
	}
	
}
?>