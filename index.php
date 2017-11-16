<?php
require("vendor/autoload.php");
use \DrewM\MailChimp\MailChimp;

$MailChimp = new MailChimp('f56dd2a57b96927d3291ef264a32205f-us17');
$result = $MailChimp->get('lists');

// print_r($result);

$list_id = '5caef3abcb';

//$result = $MailChimp->post("lists/$list_id/members", [
//				'email_address' => 'mbuluma@gbc.co.ke',
//				'status'        => 'subscribed',
//			]);

// print_r($result);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yami Sports - Coming Soon</title>
<link href="tools/style.css" rel="stylesheet" type="text/css" />
<link href="tools/subscribe.css" rel="stylesheet" type="text/css" />
<link href="tools/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- <link href="tools/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
<script type="text/javascript" src="tools/jquery.min.js"></script> 
<script type="text/javascript" src="tools/cufon-yui.js"></script>
<script type="text/javascript" src="tools/Comfortaa_250-Comfortaa_700.font.js"></script>
<script type="text/javascript" src="tools/subscribe.js"></script>
<script type="text/javascript">
	Cufon.replace('h1', {fontFamily: 'Comfortaa'});
	Cufon.replace('p.c_soon strong', {fontFamily: 'Comfortaa'});
</script>

<script type="text/javascript">
        $(document).ready(function() {
            // jQuery Validation
            $("#signup").validate({
                // if valid, post data via AJAX
                submitHandler: function(form) {
                    $.post("subscribe.php", { fname: $("#fname").val(), lname: $("#lname").val(), email: $("#email").val() }, function(data) {
                        $('#response').html(data);
                    });
                },
                // all fields are required
                rules: {
                    fname: {
                        required: true
                    },
                    lname: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    }
                }
            });
        });
    </script>
</head>
<body>
<div class="content_wrapper">
	<div class="top_content">
		<div class="header">
			<div class="iphone">
				<img src="images/image.jpg" alt="" />
			</div>
			<div class="logo_content">
				<h1><strong>Yami</strong> Sports</h1>
				<h3>The <strong>SMART</strong> way to track your sports performance, <strong>or favorite athlete</strong></h3>
				<p>Track your training, nutrition and performance on the Yami Sports App</p>
				<a href="#" class="get_notified"><strong>Get Notified</strong> on the day of launch!</a>
				<!-- <div class="input-group">
        <input type="email" class="form-control email_address" id="exampleInputAmount" placeholder="Enter your email address">
        <div class="input-group-addon subscribe-button"><i class="fa fa-paper-plane" aria-hidden="true"></i></div>  
      </div> -->
      <!-- <form id="signup" class="formee" action="subscribe.php" method="post">
            <fieldset>
                <legend>Sign Up</legend>
                <div>
                    <label for="fname">First Name *</label> <input name="fname" id="fname" type="text" />
                </div>
                <div>
                    <label for="lname">Last Name *</label> <input name="lname" id="lname" type="text" />
                </div>
                <div>
                    <label for="email">Email Address *</label> <input name="email" id="email" type="text" />
                </div>
                <div>
                    <input class="right inputnew" type="submit" title="Send" value="Send" />
                </div>
            </fieldset>
        </form>
        <div id="response"></div> -->
			</div>
		</div>
	</div>
	
	<div class="shadow"></div>
	<div class="white_content">
		<div class="top_content">
			<div class="header">
				<div class="coming_soon">
					<p class="c_soon"><strong>Coming Soon</strong> <br/> to your Phone</p>
				</div>
				
				<ul class="social">
					<li><a href="#" class="twitter">twitter</a></li>
					<li><a href="#" class="facebook">facebook</a></li>
					<li><a href="#" class="email">email</a></li>
				</ul>
				
				<div class="copyright"><p>Copyright 2017. <br/> All Rights Reserved. <br/> <span><strong>Yami</strong> Sports</span></p></div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
