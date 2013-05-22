<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include ('css_rel.php');
require_once("../system/config.php");
require_once("../system/auth.php");
$query = "SELECT * FROM admin where username='$username' "; 
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result) or die(mysql_error());
?>
<title>RS Unsyiah - Dashboard</title>

</head>

<body>
	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="../images/logo.png" alt="mws admin" />
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
        	<!-- Notifications -->
        	<div id="mws-user-notif" class="mws-dropdown-menu">
            	<?php
					include ('notif.php');
				?>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
            	<?php
					include ('message.php');
				?>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="example/profile.jpg" alt="User Photo" />
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, <? echo ucwords($row['name']); ?>
                    </div>
                    <ul>
                    	<li><a href=""><img src="../css/icons/16/cog.png" />Profile</a></li>
                        <li><a href="../system/logout.php"><img src="../css/icons/16/disconnect.png" />Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
        	<!-- Searchbox -->
        	<div id="mws-searchbox" class="mws-inset">
            	<form action="http://www.malijuthemeshop.com/themes/mws-admin/1.3/typography.html">
                	<input type="text" class="mws-search-input" />
                    <input type="submit" class="mws-search-submit" />
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
            	<?php
					include ('menu.php');
				?>
            </div>            
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
            <?php
				if (!empty($_GET['pilih']))
				{
					$pilih = $_GET['pilih'];isset($_GET['pilih']);
				}
				else{
					$pilih = "index";
				}
				switch($pilih){
				case 'home' : include("default.php"); break;
				case 'dat_pasien' : include ("inputData.php");break;
				case 'add_rm' : include ("data-rekamMedik.php");break;
				case 'list' : include ("about.php");break;
				default : case 'index' :  include("default.php");break;
				}
			?>
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
            <div id="mws-footer">
            	RPL Rekam Medik 2013. All Rights Reserved.
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>

</body>
</html>