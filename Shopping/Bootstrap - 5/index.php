<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Burger King</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
}
</style>


<!-- <script>
$(document).ready(function(){
  $('.dropdown-submenu a.mymenu').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script> -->
</head>

<body>
<?php
include('dbConfig.php');


?>
	<div style="background-color:#333;min-height:100px;" class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="images/bklogo.png"/>
            </div>
            <div class="col-md-5">
                <H1 style="color:#FFF">Burger King</H1>
                <h5 style="color:#FFF;" class="text-center">Taste You Require</h5>
            </div>
            <div class="col-md-3">
                <p style="color:#FFF;" class="text-center">
                    <img src="images/bklogo.png" width="10%"/>48329575394            
                </p>
            </div>
           
         </div>
	</div>
<br />

<?php
include('nav.php');
?>


<div class="container">
    <div class="row">
     
        
        
        <div class="col-md-10" style="min-height:450px;">		
        		
        	<div class="carousel slide" id="myslider" data-ride="carousel">
            
            	<ol class="carousel-indicators">
                	<li data-target="myslider" data-slide-to="0" class="active"></li>
                    <li data-target="myslider" data-slide-to="1"></li>
                    <li data-target="myslider" data-slide-to="2"></li>
                    <li data-target="myslider" data-slide-to="3"></li>
                </ol>
                
                <div class="carousel-inner">
                	<div class="item active">
                    	<img src="images/slider/s1.jpg"/>
                    </div>
                    
                    <div class="item">
                    	<img src="images/slider/s2.jpg"/>
                    </div>
                    
                    <div class="item">
                    	<img src="images/slider/s3.jpg"/>
                    </div>
                    
                    <div class="item">
                    	<img src="images/slider/s4.jpg"/>
                    </div>
                </div>
                <a class="left carousel-control" data-slide="prev" href="#myslider">
                	<span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" data-slide="next" href="#myslider">
                	<span  class="glyphicon glyphicon-chevron-right"></span>
                </a>     
            </div>
            
            
        </div>
        
        
       
        <div class="col-md-2">
        	<img  src="images/ad - 1.jpg" width="100%"/> 
        </div>
    <div>
</div>




<footer class="col-md-12">
	<div style="background-color:#333;min-height:100px;padding:20px;" class="row"  >
        <div class="col-md-4">
                <h4 style="color:#FFF;">Let Us Help You</h4>    
                <a href="#" style="text-decoration:none;">Help Center</a><br/>
                <a href="#" style="text-decoration:none;">How to Shop</a><br/>
                <a href="#" style="text-decoration:none;">Help Center</a><br/>
                <a href="#" style="text-decoration:none;">Contact Us</a><br/>    
        </div>       
        <div class="col-md-4">
            	<h4 style="color:#FFF;">Get to Know Us</h4>    
                <a href="#" style="text-decoration:none;">About Us</a><br/>
                <a href="#" style="text-decoration:none;">Careers</a><br/>
                <a href="#" style="text-decoration:none;">Term & Conditions</a><br/>
                <a href="#" style="text-decoration:none;">Privacy & Arguments</a><br/>   
        </div>
           
        <div class="col-md-4">
            	<h4 style="color:#FFF;">Join US On</h4>    
                <a href="#" style="text-decoration:none;"><span class="fa fa-youtube"></span></a>
                <a href="#" style="text-decoration:none;"><span class="fa fa-facebook"></span></a>
                <a href="#" style="text-decoration:none;"><span class="fa fa-twitter"></span></a>
                <a href="#" style="text-decoration:none;"><span class="fa fa-skype"></span></a>
                <br />
                <h4 style="color:#FFF;">Payment Method</h4> 
                <img src="#"/>	<img src="#"/>	<img src="#"/>	<img src="#"/>
        </div>
        <div class="col-md-12 text-center" style="margin-top:20px;">
        	<h5 style="color:#FFF;">&copy;Copyright 2014 XYZ Company</h5>    
            </div>
	</div>
</footer>


</body>
</html>
