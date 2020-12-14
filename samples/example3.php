<?php
/****************************************
 *                                      *
 * EXAMPLE 3:                           *
 * -----------------------------------  *
 * How to delete a checkrobin parcel	*
 *                                      *
 * @author     David Tschische          *
 * @copyright  (c) 2018 checkrobin GmbH *
 * @license    all rights reserved      *
 ***************************************/

require_once('.'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'autoload.php');

use Checkrobin\Webshopconnect\Contract;
use Checkrobin\CrException;


//please change to reflect correct versions of your shop setup below!
$shopFrameWorkName 		= 'TestWebconn';
$shopFrameWorkVersion	= '0.1';
$shopModuleVersion 		= 'beta1';


try{
		
	$authToken = '2969d295ade9664007eaea5dce4c3b91f5e2e022'; //refer to ~Example1~ to find out how to get the auth token!
	
	
	$pk = isset($_GET['delete_id']) ? $_GET['delete_id'] : 123;  //refer to ~Example2~ to find out how to create a checkrobin parcel and retrieve the primary key (pk) of the entity
	
	
	//instantiate the contract class
	$mContract = new Contract($shopFrameWorkName, $shopFrameWorkVersion, $shopModuleVersion, $authToken);
	
	
	//fire away... and check the outcome
	$status = $mContract->delete($pk);
	if($status['success']){
		
		echo "Successfully deleted parcel with id $pk. <br/>";
		if(ENVIRONMENT != 'DEV'){
			echo "(pretty printing parcel data)";
			echo "<pre>";
			print_r($status['data']);
			echo "</pre>";
		}
		
	}else{
		
		echo "Failed to delete parcel with id $pk: <br/>";		
		foreach($status['errors'] as $msg){
			echo $msg."<br/>";
		}
		
	}
	
}catch(CrException $e){

	echo 'Exception: error in communication with checkrobin server: ' .$e->getMessage()."<br/>\n";
	echo 'Code: '.$e->getCode()."<br/>\n";
	echo 'Trace: '.$e->getTraceAsString();
		
}catch(Exception $e){

	echo "Something else went terribly wrong: ".$e->getMessage()."<br/>\n";
	echo 'Trace: '.$e->getTraceAsString();
}




?>