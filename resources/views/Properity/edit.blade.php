<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{Url('css/style.css')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="fahd">
    <div class="container" >
    <h1>add your property</h1>
<form method="POST" action="{{route('properities.update',['properity'=>$properity])}}">
  @csrf
  @method('PUT')
  {{-- <label >property id</label> 
    <input type="text" name="id"class="form-control" placeholder="5 eltahrir street" aria-label="property name" aria-describedby="basic-addon1"> --}}
  <label >property name</label> 
    <input type="text" name="name"class="form-control" value="{{$properity['name']}}" placeholder="eltahrir street" aria-label="property name" aria-describedby="basic-addon1">
  <label >property address</label> 
    <input type="text" name="address"class="form-control" value="{{$properity['address']}}" placeholder="aswan" aria-label="property address" aria-describedby="basic-addon1">
  <label >property price</label> 
    <input type="text" name="price" class="form-control" value="{{$properity['price']}}" placeholder="$" aria-label="property price" aria-describedby="basic-addon1">
  <label >image</label> 
    <input type="file" name="image"class="form-control"  value="{{$properity['image']}}"placeholder="appartment" aria-label="property type" aria-describedby="basic-addon1">
  <label for="img">property type</label> 
    <input type="text" id="number_of_beds" name="properity_type" value="{{$properity['properity_type']}}" accept="image"><br>
    <label for="img">number of beds</label> 
    <input type="text" id="img" name="number_of_beds" value="{{$properity['number_of_beds']}}" accept="number_of_beds"><br>
    <label for="img">type of process</label> 
    <input type="text" id="img" name="type_of_process" value="{{$properity['type_of_process']}}" accept="type_of_process"><br>
    <label for="img">number of rooms</label> 
    <input type="text" id="img" name="number_of_rooms" value="{{$properity['number_of_rooms']}}" accept="number_of_rooms"><br>
  {{-- <label for="beds">number of  beds:</label>  <br>
    <select class="form-select" name="number_of_beds"  value="{{$data['name']}}" aria-label= disabled>
        <option selected>number of beds</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="3">four</option>
        <option value="3">five</option>
        <option value="3">six</option>
        <option value="3">more</option>

    </select> --}}
    {{-- <br>
    <label for="type">type of process</label>
 <select class="form-select" aria-label= disabled name="type_of_process">
    <option value="1">buy</option>
    <option value="2">rent</option>
  </select>
<label for="">number of rooms</label> --}}
</div>
{{-- <div class="input-group">
    <span class="input-group-text">more details of property</span>
    <textarea class="form-control" aria-label="With textarea"></textarea>
  </div><br><br> --}}

  <button type="button" class="btn btn-warning"><a href="../advertiser dashboard/dash.html"></a> to Dashboard</button><br><br>
  <input type="submit" name="submit" value="submit">
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>
    