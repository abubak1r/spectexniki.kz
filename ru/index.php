<?php
	include('blocks/db.php');
?>
<?PHP header('Content-type: text/html; charset=utf-8'); ?>
<!doctype html>
<html lang="ru">
<head>
	<link rel="icon" href="favicon.ico" type="image/x-icon"> 
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta charset="utf8">
	<meta name="description" content="Спецтехники - все объявления о продаже новой и БУ спецтехники в Казахстане на одном сайте: грузовики, автобусы и другая спецтехника в Казахстане."/>
    <meta name="keywords" content="Спецтехники, объявления, продаже, спецтехники, Казахстане"/>
    <meta name="viewport" content="width=device-width"/>
    <meta property="ya:interaction" content="XML_FORM" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<link rel="stylesheet" charset="utf-8" href="assets/css/style.css" />
	<link rel="stylesheet" charset="utf-8" href="assets/css/styles.css" />
	<link rel="stylesheet" charset="utf-8" href="assets/css/header.css" />
	<script type="text/javascript" src="assets/js/header.js"></script>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>

	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script>
$(document).ready(function(){

  $(".btn-slide").click(function(){
    $("#panel").slideToggle("slow");
    $(this).toggleClass("active"); return false;
  });
});
$(document).ready(function() {
    $("#content").find("[id^='tab']").hide(); // Hide all content
    $("#tabs li:first").attr("id","current"); // Activate the first tab
    $("#content #tab1").fadeIn(); // Show first tab's content
    
    $('#tabs a').click(function(e) {
        e.preventDefault();
        if ($(this).closest("li").attr("id") == "current"){ //detection for current tab
         return;       
        }
        else{             
          $("#content").find("[id^='tab']").hide(); // Hide all content
          $("#tabs li").attr("id",""); //Reset id's
          $(this).parent().attr("id","current"); // Activate this
          $('#' + $(this).attr('name')).fadeIn(); // Show content for the current tab
        }
    });
});
</script>
<style type="text/css">
a:focus {
	
}
#panel {
	height: 326px;
	display: none;
	top:0px;
	border-radius: 2px 2px 2px 2px;
}
.slide {
	margin: 0;
	padding: 0;
	border-top: solid 4px green;
	background: url(assets/img/btn-slide.gif) no-repeat left top;
	border-radius: 2px 2px 2px 2px;
	margin: -1px -1px -1px -1px; 
}
.btn-slide {
	background: url(assets/img/white-arrow.gif) no-repeat right -50px;
	text-align: center;
	width: 144px;
	height: 31px;
	padding: 10px 10px 0 0;
	margin: 0 auto;
	margin-bottom: -2px;
	border-radius: 2px 2px 2px 2px;
	display: inline-block;
	font: bold 120%/100% Verdana, Helvetica, sans-serif;

}
.active {
	background-position: right 12px;
}
</style>

	<title>SpecTexniki</title>
</head>
<body style="background-image:url(assets/img/bground.png); ">
<?php include("blocks/header.php");?>
<?php include("blocks/header2.php");?>
<?php include("blocks/header3.php");?>
<?php //include("blocks/left.php");?>
<?php //include("blocks/content.php");?>
<?php //include("blocks/right.php");?>
<?php include("blocks/footer2.php");?>
<?php //include("blocks/footer.php");?>
	</body>
</html>