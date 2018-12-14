
<nav class="navbar navbar-inverse">
   <div class="container">   
       <div class="navbar-header">
       		<img src="images/bklogo.png" height="30px"/>
            <button type="button" class="navbar-toggle" data-toggle="collapse" 
            data-target="#mynav" style="color:#FFF">
            Menu
            </button>
       </div>
   
      <div class="collapse navbar-collapse" id="mynav">
      	   <ul class="nav navbar-nav">
               <li class="active"><a href="index.html">Home</a></li>
               <li class="dropdown">
               	<a class="dropdown-toggle" data-toggle="dropdown" role="button">Product</a>
               		<ul class="dropdown-menu">
                       <?php
                       include('dbConfig.php');
                        $query = mysqli_query($con,"select * from product_cat");
while($row = mysqli_fetch_array($query))
{
    ?>
                    	<li class="dropdown-submenu"><a  class="mymenu" href="pro.php?id=<?php echo $row['P_id'];?>"> 

                       <?php echo $row['P_cat'];?>
                    </a>
                        </li>
                       
                      <?php
}
                      ?> 
                    </ul>
              
               <li><a href="#">About</a></li>
               <li><a href="contact_us.html">Contact Us</a></li>
           </ul>
           
           <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Login</a></li>
                <li><a href="#">Signup</a></li>
           </ul>
      </div>
    </div>
</nav>
