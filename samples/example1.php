<?php
/****************************************
 *                                      *
 * EXAMPLE 1:                           *
 * -----------------------------------  *
 * How to get the AUTH TOKEN            *
 *                                      *
 * @author     David Tschische          *
 * @copyright  (c) 2018 checkrobin GmbH *
 * @license    all rights reserved      *
 ***************************************/


require_once('.'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'autoload.php');

use Checkrobin\Webshopconnect\Authentication;
use Checkrobin\CrException;


//please change to reflect correct versions of your shop setup below!
$shopFrameWorkName 		= 'TestWebconn';
$shopFrameWorkVersion	= '0.1';
$shopModuleVersion 		= 'beta1';

//please set the correct login credentials as used @ business.checkrobin.com below!
$checkrobinUserName = 'webshopconnect@checkrobin.com';
$checkrobinPassword = 'WebConn0';


/**
 * Login to retrieve a valid webshop AUTH TOKEN.
 */

$mAuth = new Authentication($shopFrameWorkName, $shopFrameWorkVersion, $shopModuleVersion);

try{
		
	$authToken = $mAuth->getAuthToken($checkrobinUserName, $checkrobinPassword);
	
	echo "The following auth token shall be used for any further calls to checkrobin: $authToken";
	
}catch(CrException $e){
	
	echo 'Exception: Failed to retrieve auth token from checkrobin: ' .$e->getMessage()."<br/>\n";	
	echo 'Trace: '.$e->getTraceAsString();
	
}catch(Exception $e){
	
	echo "Something else went terribly wrong: ".$e->getMessage()."<br/>\n";
	echo 'Trace: '.$e->getTraceAsString();
}

?>