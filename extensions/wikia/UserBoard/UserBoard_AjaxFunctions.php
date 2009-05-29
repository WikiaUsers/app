<?php
$wgAjaxExportList [] = 'wfSendBoardMessage';
function wfSendBoardMessage($user_name,$message,$message_type,$count){ 
	global $IP, $wgMemc, $wgUser;

	$user_name = stripslashes($user_name);
	$user_name = urldecode($user_name);
	$user_id_to = User::idFromName($user_name);
	$b = new UserBoard();
	
	$m = $b->sendBoardMessage($wgUser->getID(),$wgUser->getName(),$user_id_to, $user_name, urldecode($message),$message_type);
	
	return $b->displayMessages($user_id_to,0,$count, 0, true);

}

$wgAjaxExportList [] = 'wfDeleteBoardMessage';
function wfDeleteBoardMessage($ub_id){ 
	global $IP, $wgMemc, $wgUser;

	$b = new UserBoard();
	$isSysop   = ( in_array('sysop', $wgUser->getGroups()) || in_array('staff', $wgUser->getGroups() ) );
	if( $b->doesUserOwnMessage($wgUser->getID(),$ub_id) || $isSysop ){
		$b->deleteMessage($ub_id);
	}
	return "ok";

}



?>
