<?php
/****************************************
 *                                      *
 * EXAMPLE 2:                           *
 * -----------------------------------  *
 * How to create a checkrobin parcel    *
 *                                      *
 * @author     David Tschische          *
 * @copyright  (c) 2018 checkrobin GmbH *
 * @license    all rights reserved      *
 ***************************************/

require_once('.'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'autoload.php');

use Checkrobin\Webshopconnect\Contract;
use Checkrobin\Webshopconnect\ContractParcel;
use Checkrobin\Webshopconnect\ContractCourierProduct;
use Checkrobin\CrException;

//please change to reflect correct versions of your shop setup below!
$shopFrameWorkName 		= 'TestWebconn';
$shopFrameWorkVersion	= '0.1';
$shopModuleVersion 		= 'beta1';



try{
	
		
	$authToken = '2969d295ade9664007eaea5dce4c3b91f5e2e022'; //refer to ~Example1~ to find out how to get the auth token!
	
	
	//instantiate the contract class
	$mContract = new Contract($shopFrameWorkName, $shopFrameWorkVersion, $shopModuleVersion, $authToken);
	
	
	//build the request object
	$requestObj = new ContractParcel();
	
	$requestObj->receiver['first_name'] 	= 'Max';
	$requestObj->receiver['last_name']		= 'Mustermann'; 
	$requestObj->receiver['company']		= 'Test Inc.';
	$requestObj->receiver['phone']			= '+43 12345';
	$requestObj->receiver['email']			= 'mm@test.fake';
	$requestObj->receiver['street']			= 'Teststraße';
	$requestObj->receiver['house_number']	= '1';
	$requestObj->receiver['postal_cod']		= '81641';
	$requestObj->receiver['city']			= 'München';
	$requestObj->receiver['country']		= 'DE';
	
	$requestObj->order['id'] 		= '123'; 					//Unique order id assigned by the shop sw (typically database PK)
	$requestObj->order['reference'] = 'Bestellung-20_'.time();	//Unique alphanumerical reference (typically the name presented to the end user to identify the order)
	$requestObj->order['net_value'] = 679.90;  					//Sum of value of all products in this order. Currency EUR, before taxes.
	$requestObj->order['tax_value'] = 809.08; 					//Sum of value of all products in this order. Currency EUR, taxes included.
	
	$requestObj->package['length'] 	= null;	//Length in cm (unknown)
	$requestObj->package['width'] 	= null; //Width  in cm (unknown)
	$requestObj->package['height'] 	= null; //Height in cm (unknown)
	$requestObj->package['weight'] 	= 1500; //Weight in gr
	
	$product1 = new ContractCourierProduct();
	$product1->name 			= 'Laptop XYZ';
	$product1->length			= 48;
	$product1->width			= 23;
	$product1->height			= 4.5;
	$product1->weight			= 1100;
	$product1->net_value		= 600.0;
	$product1->tax_value		= 714.0;
	$product1->code		        = 'EAN-Dummy-001';
	
	$product2 = new ContractCourierProduct();
	$product2->name 			= 'Charger';
	$product2->length			= null;
	$product2->width			= null;
	$product2->height			= null;
	$product2->weight			= 300;
	$product2->net_value		= 79.9;
	$product2->tax_value		= 95.08;
	$product1->code		        = 'EAN-Dummy-002';
	
	$requestObj->courier_contract_products[] = $product1;
	$requestObj->courier_contract_products[] = $product2;
	
	
	//fire away... and check the outcome
	$status = $mContract->create($requestObj);
	if($status['success']){
		
		echo "Successfully created parcel. <br/>";
		if(ENVIRONMENT != 'DEV'){
			echo "(pretty printing parcel data)";
			echo "<pre>";
			print_r($status['data']);
			echo "</pre>";
		}
		
	}else{
		
		echo "Failed to create parcel: <br/>";		
		foreach($status['errors'] as $msg){
			echo $msg."<br/>";
		}
		
	}
	
}catch(CrException $e){

	echo 'Exception: error in communication with checkrobin server: ' .$e->getMessage()."<br/>\n";
	echo 'Trace: '.$e->getTraceAsString();
		
}catch(Exception $e){

	echo "Something else went terribly wrong: ".$e->getMessage()."<br/>\n";
	echo 'Trace: '.$e->getTraceAsString();
}




?>