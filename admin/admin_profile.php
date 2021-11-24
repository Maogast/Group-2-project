<?php 
$i=1;
$sql=mysqli_query($con,"select * from admin");
while($res=mysqli_fetch_assoc($sql))
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lemonade Hotel.Com</title>
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
</head>
<body>
<h1 style="background-color:#ed2553;border-radius:50px;text-align:center;font-family: 'Baloo Bhai', cursive;box-shadow:5px 5px 9px black;text-shadow:2px 2px #fff;">Admin Profile</h1><br>
<center><img src="https://lh3.googleusercontent.com/_Vg-kIpq1J43oL4S2sZTDrZUVfZQ5Sc0Hhbg-2R24TfBFZKUgZ6QDnqrjoO46NQJw8ub7_dQSYM9GdPB7H1ggws7PG-U9Lgu5POrAnFeICtrf7Vlgt6695Wv7C5p_4pXholC2D_RXcM9zigdNnj9f4Ssjpqq_GSHW_qFg1QqI_kmdpi1u7qGhgW6_CQyngY3DqhwIMydmazz9a4i_DwLqRU64ukJsqmt4W6sUhUITVsWDm9CZR-vOSVgdUYI6veiwPa1ajms5mOD7wrlRu8ypBW0mvoU-f7PV8dJY6vFVCWL5aUtgCfvuYYBgU4s5mDEKXI3K6iJ2-Z9GYctKBEdizLCCWTvotcXM35UcDesBMMQdBKPbn5P5H8Zy5WO1G7_4jlS9t6jpwH_126JLI0jW3V10HwDIXIYWYvQmB8K3BuYwmo-MhUApL_PeAJwkx-KwF3IPSDZWYsbcPeKjoAhsSA1mH1EwoB65H1-JZDQCGVdXD5NmZQuk7wjCq7BnX3L690604pz0fHeOuHxj9ZIl9fGuor8jKmENTqHFk4zu3SLQ3aptz281Jg7z0DdI4RUjLZUGMWAx28saNaRhcyn6hj_Cf-9Vg7kJWJi-wWi4BwOtBcfGss5cEAog_mC8Zaqwt_Y-Rr36iZNcD9aoHsQLnT0a8xy4S0U2t5IX-ZXrrX7rsDVLdaThoo19fIIsDdQfhSw1B4Ec198YYZWTyTJDcIt=w443-h668-no?authuser=0"style="width:300px;height: 330px;background-color:blue;</center>
<div class="container"style="width:100%;">
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Name:</label>
       <input type="text" id="username" value="<?php echo $res['username']; ?>" class="form-control" name="name" readonly="readonly"/>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd"value="<?php echo $res['password']; ?>">
    </div>
  </form>
</div>
<?php 	
}
?>
</body>
</html>