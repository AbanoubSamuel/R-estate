<html>
<head>
	<title>Registration</title>
	<meta charset="UTF-8" />
	<link href="{{URL::asset('css/style.css')}}" type="text/css" rel="stylesheet">
</head>

<body>
<div id="myDiv">
  <h3 align="center">Registration</h3>
  <form onsubmit="return validation()" method="POST" name="regForm" action="/register">
		<label>First Name: *</label>
		<input type="text" name="firstName" placeholder="Your First Name" size="25" />
		<label>Last Name: *</label>
		<input type="text" name="lastName" placeholder="Your Last Name" size="25" />
		<label>Email: *</label>
		<input type="text" name="email" size="25" placeholder="Your Email" />
		<label>Password: *</label>
		<input type="password" name="password" placeholder="Your Password" size="25" />
		<label>Age:</label>
		<input type="text" name="age" size="25" placeholder="Your Age" />
		<label>Mobile:</label>
		<input type="text" name="mobile" size="25" placeholder="Your Mobile" />
        <label>ADRESS:</label>
		<input type="text" name="adress" size="50" placeholder="Your adress" />
        <label for="form-check">Gender:</label>
        
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              male
            </label>
          
          
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              female
            </label>
          

		<div align="center">
		<input type="submit" value="Register" />
		<input type="reset" value="Clear" onclick="clear2();" />
		<div>
  </form>
</div>
<script src="{{URL::asset('js/script_regValidation.js')}}"></script>

</body>
</html>
