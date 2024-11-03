<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Grosery Website-Admin </title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
      

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom-styles.css" rel="stylesheet">
    <link href="css/image-effects.css" rel="stylesheet">
	
	   <link href="css/normalize.css" rel="stylesheet">
		 <link href="css/component.css" rel="stylesheet">
      <link rel="stylesheet" href="css/font-awesome.css">
      <link rel="stylesheet" href="css/font-awesome-ie7.css">
	  
    <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
	  <script src="js/modernizr.custom.js"></script>
</head>
<body>
	 <div class="container page-styling">
    <div class="header-wrapper">
      <div class="site-name">
        <h1> Grocery Super Market </h1>
      </div>
      <div class="menu">
        <div class="navbar">
         
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
			
              <div class="navbar-collapse collapse">
               <ul class="nav navbar-nav ">
                <li><a href="index.php">Company</a></li>
                
            <li><a href="AddProductPage.php">Product</a></li>
                <li><a href="ProductPurchasePage.php">Purchase</a></li>
                <li><a href="sales.php">Sales</a></li>
                <li><a href="alertpage.php">Alert</a></li>                
                <li class="dropdown ">
              <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Staff <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="emp.php">Staff Details</a></li>
                <li><a href="Salary.php">Salary</a></li>                   
              </ul>
            </li>
                       
            <li class="dropdown ">
              <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Report <b class="caret"></b></a>
              <ul class="dropdown-menu">
			   <li><a href="sto.php">Stock</a></li>
			  
              <li><a href="CompanyReport.php">Company</a></li>
               <li><a href="PurchaseRpt.php">Purchase</a></li>
                <li><a href="SalesReport.php">Sales</a></li>               
                 <li><a href="StaffReport.php">Staff </a></li>
                <li><a href="SalaryReport.php">Salary</a></li>
                 <li><a href="AlertReport.php">Alert</a></li>
               
              </ul>
            </li>
              </ul>

            </div>  

          </div>
         
    </div>
      </div>
	<?php
	require_once 'db.php';
	?>