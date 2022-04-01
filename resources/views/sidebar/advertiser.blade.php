<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DAshboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{Url('css/user.css')}}" />

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="m-4 ms-100">
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>EMAil</th>
                <th>Address</th>
                <th>Age</th>
                <th>Phone</th>
                <th>national Id</th>
                <th>Idphoto</th>
                <th>bank Account</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $value)
            <tr class="table-primary">
            <td>{{$value['id']}}</td>
            <td>{{$value['name']}}</td>
            <td>{{$value['email']}}</td>
            <td>{{$value['age']}}</td>
           <td>{{$value['mobile']}}</td>
           <td>{{$value['address']}}</td>
           <td>{{$value->user['national_id']}}</td>
           <td>{{$value->user['id_photo']}}</td>
           <td>{{$value->user['bank_account']}}</td>
           <td><form method="post" action="{{route('destroy',['id'=>$value->user['id']])}}">
            @csrf
           @method('DELETE') 
                <input name="supmiet" type="submit" value="Delete"/></form></td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>
</body>