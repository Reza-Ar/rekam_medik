<?php
  if($_GET["ke"] == "hm"){
    include "home.html";
  }
  else if($_GET["ke"]=="lgn"){
    include "login.php";
  }
  else if($_GET["ke"]=="al"){
    include "admin-login.php";
  }
  else if($_GET["ke"]=="inp"){
	include "inputData.php";
  }
  else if($_GET["ke"]=="adm"){
	include "admin-daftar.php";
  }
  else if($_GET["ke"]=="cri"){
	include "cari.html";
  }
  else if($_GET["ke"]=="cr2"){
	include "cari.php";
  }
  else if($_GET["ke"]=="pbr"){
	include "inputPasien.php";
  }
  else if($_GET["ke"]=="dp"){
	include "data-pasien.php";
  }
  else if($_GET["ke"]=="drm"){
	include "data-rekamMedik.php";
  }
  else if($_GET["ke"]=="sd"){
	include "semua_data.php";
  }
  else if($_GET["ke"]=="rkm"){
	include "rekammedik.php";
  }
  ?>