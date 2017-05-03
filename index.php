<?php 
	include "includes/common.php";
	include_once $config['SiteClassPath']."class.Admin.php";
	
	$objAdmin	= new Admin();
	
	
	$objSmarty->assign("objAdmin",$objUser);
	$objSmarty->assign("IncludeTpl", "petowner.tpl");
	$objSmarty->display("activepagetemplate.tpl");
	$objSmarty->assign("CurPage","1");
?>