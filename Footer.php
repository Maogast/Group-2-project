<?php 
include('connection.php');
extract($_REQUEST);
if(isset($send))
{
mysqli_query($con,"insert into feedback values('','$n','$e','$mob','$msg')");	
$msg= "<h4 style='color:green;'>feedback sent successfully</h4>";
}
?>
<!-- Footer1 Start Here-->

<footer style="background-color: #393939;">
    <div class="container-fluid">
	<div class="col-sm-4 hov">
		<img src="logo/logo2.png"width="200px"height="50px"/><br><br>
    <p class="text-justify">When Life gives you Lemons, come make lemonades at Lemonade🥃Hotel 😀</p><br>
      <center><a href="about.php" class="btn btn-danger"><b>Read More..</b></a></center><br><br><br>
 <?php
  include('Social ican.php')
?>
	</div>&nbsp;&nbsp;
	<div class="col-sm-4 text-justify">
	       <h3 style="color:#cdd51f;">Contact Us</h3>
      <p style="color:white;"><strong>Address:&nbsp;</strong>Haile Salessie</p>
      <p style="color:white;"><strong>Email-Id:&nbsp;</strong>lemonadehotel@gmail.com</p>
      <p style="color:white;"><strong>Contact Us:&nbsp;</strong>(+254) 0704313849</p><br><br><br>
     <center><img src="https://lh3.googleusercontent.com/_Bl2CKlx00IGZmgYowAj3iYUeEmDONW2KBc0mvAQchvWoF6GM7Uok8SBVF4hJNcR_PdkQvbstfAgaXI6uhGqxurJw5Pq-SanVBoXWqrB6Rzs05Q3Pa94KPY8urHH7N3TDSQNDCQaNAx_xZkxM6qlXwcQv_71GurUJn2-04ZhGLaWEpe8Y44_bdPh4hVEnfKfUOHAjjFwcwwn2BgOBJkglTZv9ZiLAuaeM4jpy_9AcKjcubrdX3BuU7cZfZmpn1jsVWnSYhYy5MVlxrx1eAUB2BXesPUGZbjjP9stdmkwC06LlubgfUa-J6S-Umsgqq5JEo80Ih-XmbWeTHHrwKNfmIValLfRAgWQVAxqN8KjoPr8VnEPnb-HyTRJiitd15u_nYZ-Oj5S2w1UnI3qjDdsBTafF0pU858B-Rtej4lXeCB-hDRjCayLROpeTY-wkg4BUYyuZ4rzNrmwD4WtxiyVyDytdr2XQFB9g7v1ADQtZuQKFpZNK5HFW7-Jmk_ir6ZqO-2toPxInWPzohNlozLE3jzN8JRWYIf_i4SK3XARLsIXNtSnPbNaWPow5VUFszFj2qDUNpHwYda72XbpfTK6R2KSRUlhAL2ob46CClcJv1yiMQzTP-PBKy51X4kn_T56hDrV_a-MUXN3DeqqwVLM6FvX1IW8ceJY1w8h5q8ggVTMb1oRQaT-meUneA3V0Umut95KuvfnJax11JBXPzsIyW0R=w501-h668-no?authuser=0"class="img-responsive"style="width:270px;height:250px;border-radius:100%;"></center>
	</div>&nbsp;

  <!--Feedback Start Here-->
	<div class="col-sm-4 text-center">
      <div class="panel panel-primary">
        <div class="panel-heading">Feedback</div>
          <div class="panel-body">
            <?php echo @$msg; ?>
      <div class="feedback">
      <form method="post"><br>
        <div class="form-group">
          <input type="text" name="n" class="form-control" id="#"placeholder="Enter Your Name"required>
        </div>
        <div class="form-group">
          <input type="Email" name="e" class="form-control" id="#"placeholder="Email"required>
        </div>
        <div class="form-group">
          <input type="Number" name="mob" class="form-control" id="#"placeholder="Mobile Number"required>
        </div>
        <div class="form-group">
          <textarea type="Text" name="msg" class="form-control" id="#"placeholder="Type Your Massage"required></textarea>
        </div>
          <input type="submit" value="send" name="send" class="btn btn-primary btn-group-justified"required>
      </form>     
        </div>
       </div>
      </div>
    </div>

    <!--Feedback Panel Close here-->

  </div>
</footer>
<!--Footer1 Close Here-->

<!--Footer2 start Here-->

<footer class="container-fluid text-center"style="background-color:#000408;height:40px;padding-top:10px;color:#f0f0f0;">
  <p>Developed By Cr.Steve, Gordon, Boni, Shumi & Dennis | All Rights Reserved 2021</p>
</footer>

<!--Footer2 start Here-->