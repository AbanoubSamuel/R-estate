
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Provider</title>
</head>
<body>

        <a style="margin:0px 45%;width:70px;padding:20px;background-color:royalblue;color:white;text-decoration:none;border-radius:5px;" href="{{route('indexofprovider.create')}}"  >Add</a>
    <table class="table" style="margin: 30px 0">
        <thead>
            <th>
                <td>Name</td>
                <td>Password</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Address</td>
                <td>Img</td>
                <td>Work Img</td>
            </th>
        </thead>
        <tbody>
            @foreach ($data as $value)
            <tr>
                <td>{{$value['name']}}</td>
                <td>{{$value['password']}}</td>
                <td>{{$value['email']}}</td>
                <td>{{$value['address']}}</td>
                <td>{{$value['phone']}}</td>
                <td>{{$value['img']}}</td>
                <td>{{$value['workimg']}}</td>


            </tr>
            @endforeach
            </thead>
            </tbody>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
