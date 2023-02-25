<?php
session_start();

if(!isset($_SESSION['values'])){
	$_SESSION['values']['txtUsername'] = '';
	$_SESSION['values']['txtPassword'] = '';
	$_SESSION['values']['txtRePassword'] = '';
	$_SESSION['values']['selDept'] = '';
	$_SESSION['values']['selSection'] = '';
	$_SESSION['values']['selGender'] = '';
}

if(!isset($_SESSION['errors'])){
	$_SESSION['errors']['txtUsername'] = 'none';
	$_SESSION['errors']['txtUsernameLen'] = 'none';
	$_SESSION['errors']['txtPassword'] = 'none';
	$_SESSION['errors']
}
?>