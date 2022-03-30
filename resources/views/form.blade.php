<!DOCTYPE html>
<html lang="en">
<head>
   
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <strong>add new product her:</strong>
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name"> 
        <br>
        <input type="text" name="price"> 
        <br>
        {{-- <input type="file" name="img" >  --}}
        <br>
        <input type="submit" name="submit" value="add"> 
     </form>
  

</body>
</html>