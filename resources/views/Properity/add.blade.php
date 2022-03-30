<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{Url('css/syle.css')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="fahd">
    <div class="container" >
    <h1>add your property</h1>
<form method="POST" action="{{route('properities.store')}}" enctype="multipart/form-data">
  @csrf
  <!-- {{-- <label >property id</label>
    <input type="text" name="id"class="form-control" placeholder="5 eltahrir street" aria-label="property name" aria-describedby="basic-addon1"> --}} -->
  <label ><strong>Property Name</strong></label>
    <input type="text" name="name"class="form-control" placeholder="eltahrir street" aria-label="property name" aria-describedby="basic-addon1">
  <label ><strong>Property Address</strong></label>
    <input type="text" name="address"class="form-control" placeholder="aswan" aria-label="property address" aria-describedby="basic-addon1">
  <label ><strong>Property Price</strong></label>
    <input type="text" name="price" class="form-control" placeholder="$" aria-label="property price" aria-describedby="basic-addon1">
  <label ><strong>Image</strong></label>
    <input type="file" id="image" name="image" class="form-control" multiple placeholder="appartment" aria-label="property type" aria-describedby="basic-addon1">
    <br>
  <label for="img"><strong>Property Type</strong></label>
    <input type="text" id="img" name="type" accept="image/"><br>
    <br>
  <label for="beds">Number of Beds:</label>  <br>
    <select class="form-select" name="number_of_beds" aria-label= disabled>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">four</option>
        <option value="5">five</option>
        <option value="6">six</option>
        <option value="7">more</option>

    </select>

    <label for="beds" class="form-control"><strong>Wi-Fi Connection:</strong></label>  <br>
    <select class="form-select" name="Wi-Fi" aria-label= disabled>
        <option value="Yes" class="form-control">Yes</option>
        <option value="2" class="form-control">No</option>
    </select>
    <br>
    <label for="beds"><strong>Air Condiotioner</strong></label>  <br>
    <select class="form-select" name="Air Conditioner" aria-label= disabled>
        <option value="Yes" class="form-control">Yes</option>
        <option value="No" class="form-control">No</option>
    </select>
    <br>


  </select>
<label for="">number of rooms</label>
<select class="form-select" name="number_of_rooms" aria-label= disabled>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
    <option value="3">four</option>
    <option value="3">five</option>
    <option value="3">more</option>
    <br>
   

  </select><br>
  <textarea name="desc" class="form-control"  placeholder="Type a short description about your ad here."></textarea>


<br>
{{-- <div class="input-group">
    <span class="input-group-text">more details of property</span>
    <textarea class="form-control" aria-label="With textarea"></textarea>
  </div><br><br> --}}

  <button type="button" class="btn btn-warning"><a href="../advertiser dashboard/dash.html"></a> to Dashboard</button><br><br>
  <button type="submit" value="submit" name="submit" class="btn btn-success border border-radious p-3">Submit</button>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>
