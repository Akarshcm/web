<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	
	<div class="input-group">
  	  <label>Phone</label>
  	  <input type="tel" 
       name="phone_num"
       id="phone_num"/>
  	</div>
	<div class="input-group">
	
  	  <label>Gender</label>
	  
			<input type="radio" name="gender" value="male"> Male
			<input type="radio" name="gender" value="female"> Female
			<input type="radio" name="gender" value="other"> Other
			
			</div>

  <label for="State">Choose a state:</label>

<select name="state" id="state">
  <option value="karnataka">Karnataka</option>
  <option value="kerala">Kearala</option>
  <option value="tamilnadu">Tamilnadu</option>
  <option value="maharashtra">Maharashtra</option>
  <option value="andra">Andra</option>
</select>	
	<div class="input-group">
	
  	  <label>Qualification</label>
	<input type="checkbox" name="qualification" value="BE"> BE
<input type="checkbox" name="qualification" value="MSC"> MSC 
<input type="checkbox" name="qualification" value="MBBS"> MBBS
</div>
<div class="input-group">
  <label><Strong>Upload your Image</Strong></label>
  <input type="file" id="img" name="img" accept="image/*">
  
</div>

  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>