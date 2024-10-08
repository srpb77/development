<?php
require('connection.inc.php');
require('functions.inc.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
   header('location:login.php');
   die();
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>ADMIN DASHBOARD PAGE</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
     
      <link href="../website/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
	  
	   <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css' rel='stylesheet' type='text/css'>
	   
	    <link href='https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css' rel='stylesheet' type='text/css'>
	  	  
   <link href=' https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css' rel='stylesheet' type='text/css'>

  <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" type="text/javascript"></script>
	  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
	  

   </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">MENU</li>
                  <?php if($_SESSION['ADMIN_ROLE']!=1){?>
				  
				  <li class="menu-item-has-children dropdown">
                     <a href="enquiry.php" > CONTACT US</a>
                  </li>
                 
				  <?php } ?>
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="index.php"><img src="../website/img/logo-white.png" alt="Logo"></a>
                  <a class="navbar-brand hidden" href="index.php"><img src="../website/img/logo-white.png" alt="Logo"></a>
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">WELCOME <?php echo $_SESSION['ADMIN_USERNAME']?></a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>LOGOUT</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>