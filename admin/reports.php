<?php 
$i=1;
$sql=mysqli_query($con,"select * from admin");
while($res=mysqli_fetch_assoc($sql))
{
?>
<!DOCTYPE html>
<html>
<head>
  <title>Lemonade Hotel.com</title>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
</head>
<body>
<h1 style="background-color:#ed2553;border-radius:50px;text-align:center;font-family: 'Baloo Bhai', cursive;box-shadow:5px 5px 9px black;text-shadow:2px 2px #fff;">Admin Profile</h1><br>
<center><img src="https://lh3.googleusercontent.com/BpIO0eyXx1tBUClhUMDAlv5KKhjTIR2t12K29yI3YZllxWAaJ2OAJld0MLGLqNZhY5hTtLsbJdW9gzzL7Q8iobotx-4UOAoN3diP1772qeYysQJFW3XYZdAEnOHDzx_1Uv2N2oHvjeWvw_5cvkIYUBkVbdnuyBOakek7ZZYfpy3GOK6YXohV6V3tuNC3e9njjsWbR8YdxcQYRESSF-vDi_7EnyMbixlzMUhD82VctvWK7mLmqX4d_WXikZ0WOlH9CRv3i8v3rN_hFtY2iEs_TjMhxvxlOf2NJr6xr3CL09YPxvvTdlKKsYWYJU3ro5SL-pHnmm8DCPhx2OQbt6XWliGiNhlj6j6HEwEYj_mrMsZBnUCca2kwhltIObaqhlQEj9Uq5uYwhO5-08sos7VFEqsPjoY9wgY4f7UWPWWE-gXLgyBaimM8-jyD30dsGxrjMaOKB4AgkBPu1vWzY-6Yw79HRMbzFVxGhEVx8O7SQ_G4TVCPaV2IqtJQBBSHydXbOS7JEQ1LhmoqymdUuzkokeseyAR19JzY_72tbszmXrnl_vaaR9kzRLM8AP3bKI6qE3nE9yP3J-Hdg9A7kJFSao6tp3qPEx6a8GrZ9IN0xXlGCEbrnLQHN8pIUWIt8QS18ORo3MLigzrGSAkjLkhmSwJfVMJWbFRLvx1s-qCzgufRGhLg7GCJQgWIo3qC6GRxaYSLKqUl6MIsLMO0Atr4BKmO=s250-k-rw-no"style="width:180px;height:180px;background-color:blue;"class="img-circle"></center>
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