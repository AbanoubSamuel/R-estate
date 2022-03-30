<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Provider</title>
    <link href="{{URL::asset('css/style.css')}}" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body style="text-align: center">
	
    <div id="myDiv">
        <h3 align="center">Registration</h3>
        <form onsubmit="return validation()" method="POST" name="regForm"  action="{{route('indexofprovider.store')}}" enctype="multipart/form-data">
          @csrf
              {{-- <label>First Name: *</label> --}}
              {{-- <input type="text" name="firstName" placeholder="Your First Name" size="25" /> --}}

              <label>Photo:</label>
              <input type="file" name="img" size="50" placeholder="img" />
              <br>

              <label> Name: *</label>
              <input type="text" name="name" placeholder="Your  Name" size="25" />
              <label>Email: *</label>
              <input type="text" name="email" size="25" placeholder="Your Email" />
              <label>Password: *</label>
              <input type="password" name="password" placeholder="Your Password" size="25" />
              <label>Age:</label>
              <input type="text" name="age" size="25" placeholder="Your Age" />
              <label>Mobile:</label>
              <input type="text" name="phone" size="25" placeholder="Your Mobile" />
              <label>Address:</label>
              <input type="text" name="address" size="50" placeholder="Your address" />
              <label>Photo:</label>
              <input type="number" name="national_id" size="50"placeholder="national_id"/>
              <br>
              <label>photo prof of Identity:</label>
              <input type="file" name="id_photo" size="50" placeholder=" ID Photo prof of Identity" />
              <br>
              <label>Bank account number:</label>
              <input type="text" name="bank_acconut" size="50" placeholder="Bancke account number" />
              
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

    {{-- <form method="POST" action="{{route('indexofprovider.store')}}" enctype="multipart/form-data"> --}}
        {{-- 
        <label for="username">UserName : </label><input id="username"type="text" name="name" />
        <br><br>
        <label for="password">Password : </label><input id="password"type="text" name="password" />
        <br><br>
        <label for="email">Email : </label><input id="email" type="text" name="email" />
        <br><br>
        <label for="address">Address : </label><input id="address" type="text" name="address" />
        <br><br>
        <label for="phone">Phone : </label><input id="phone" type="text" name="phone" />
        <br><br>
        <label for="img">Your Profile img : </label><input id="img" type="file" name="img" placeholder="Profile img"/>
        <br><br>
        <label for="workimg">Picture of Your Business record : </label><input id="workimg" type="file" name="workimg" placeholder="work"/>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}

</body>
</html>


