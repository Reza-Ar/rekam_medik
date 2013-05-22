

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
 include ('log_rel.php');
 require_once("system/config.php");
 ?>

<title>RS Unsyiah - Login</title>

</head>

<body>

    <div id="mws-login-wrapper">
        <div id="mws-login">
			<div id="mws-usk">
            <div id="mws-rel">Rumah Sakit Umum</div>
			<h1>Universitas Syiah Kuala</h1>
			</div>
            <div class="mws-login-lock"><img src="css/icons/24/locked-2.png" alt="" /></div>
			<div align="center">
			<h2>Login Admin</h2>
			<img src="images/kedokteran.png" alt="" width="35%" />
			</div>
            <div id="mws-login-form">
                <form class="mws-form" action="system/login.php" method="post">
                    <div class="mws-form-row">
                        <div class="mws-form-item large">
                            <input type="text" name="username" class="mws-login-username mws-textinput required" placeholder="username" />
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item large">
                            <input type="password" name="password" class="mws-login-password mws-textinput required" placeholder="password" />
                        </div>
                    </div>
					<div class="mws-form-row mws-inset">
					<?php
						if (!empty($_GET['msg']))
						{
							$msg = $_GET['msg'];isset($_GET['msg']);
						}
						else{
							$msg = '0';
						}
						
						switch($msg){
							case '1' : echo "<div class='mws-form-row mws-inset'><label><b><font color='red'>Masukkan Login Dengan Benar !</font></b></label></div>"; break;
							case '2' : echo "<div class='mws-form-row mws-inset'><label><b><font color='red'>Maaf, Anda Tidak Terdaftar !</font></b></label></div>"; break;
							case '3' : echo "<div class='mws-form-row mws-inset'><label><b><font color='red'>Password Salah !</font></b></label></div>"; break;
						}
					?>
					
					<div>
					<br />
					</div>
                    <div class="mws-form-row mws-inset">
                        <ul class="mws-form-list inline">
                            <li><input type="checkbox" /> <label>Remember me</label></li>
                        </ul>
                    </div>
                    <div class="mws-form-row">
                        <input type="submit" value="Login" class="mws-button green mws-login-button" />
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
