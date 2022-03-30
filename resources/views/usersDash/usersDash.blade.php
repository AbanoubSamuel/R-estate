<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DAshboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ Url('css/user.css') }}" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="m-4 ms-100">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $value)
                    <tr class="table-primary">

                        {{-- <td>{{$value->adevertiser->user['name']}}</td> --}}
                        <td>{{ $value['id'] }}</td>
                        <td>{{ $value['name'] }}</td>
                        <td>{{ $value['email'] }}</td>
                        {{-- <td>{{$value['password']}}</td> --}}
                        <td>{{ $value['age'] }}</td>
                        <td>{{ $value['mobile'] }}</td>
                        <td>{{ $value['address'] }}</td>
                        {{-- <td><form method="POST" action="{{route('admin.destroy',['data'=>$value])}}"> --}}
                        <td><a href={{ 'delete/' . $value['id'] }}>Delete</a></td>


                        {{-- @csrf
            @method('DELETE') --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
