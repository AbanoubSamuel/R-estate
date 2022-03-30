@extends('template')
@section('nav')
@endsection
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
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Age</th>
                <th>Phone</th>
                <th>National ID</th>
                <th>ID Photo</th>
                <th>Bank Account</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $value)
            <tr class="table-primary">
            
            {{-- <td>{{$value->adevertiser->user['name']}}</td> --}}
            <td>{{$value['id']}}</td>
            <td>{{$value['name']}}</td>
            <td>{{$value['email']}}</td>
            <td>{{$value['age']}}</td>
           <td>{{$value['mobile']}}</td>
           <td>{{$value['address']}}</td>
           <td>{{$value->Advertiser['national_id']}}</td>
           <td>{{$value->Advertiser['id_photo']}}</td>
           <td>{{$value->Advertiser['bank_account']}}</td>
           <td><form method="POST" action="{{route('destroy',['id'=>$value->Advertiser['id']])}}">
            @csrf
           @method('DELETE') 
                <input name="submit" type="submit" value="Delete"/></form></td>
          </tr>
          
          @endforeach
        </tbody>
    </table>
</div>
</body>