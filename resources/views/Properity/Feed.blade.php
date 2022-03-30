<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ Url('dash_css/dash.css') }}" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LooP</title>
</head>

<body>
    <button><a class='btn btn-danger' href="{{ route('properities.create') }}">add</a></button>
    <table class="table">
        <thead>
            <th>
                <tr>
                    <th scope="col">property name</th>
                    <th scope="col">property address</th>
                    <th scope="col">property price</th>
                    <th scope="col">image</th>
                    <th scope="col">property type</th>
                    <th scope="col">number of beds</th>
                    <th scope="col">type of process</th>
                    <th scopez="col">number of rooms</th>
                </tr>
            </th>
        </thead>
        <tbody class="center">
            @foreach ($data as $value)
                <tr>
                    {{-- <td>{{ $value->adevertisers->user['name'] }}</td> --}}
                    <td>{{ $value['name'] }}</td>
                    <td>{{ $value['address'] }}</td>
                    <td>{{ $value['price'] }}</td>
                    <td><img src="/storage/{{ $value['image'] }}" height="50px"></td>
                    <td>{{ $value['properity_type'] }}</td>
                    <td>{{ $value['number_of_beds'] }}</td>
                    <td>{{ $value['type_of_process'] }}</td>
                    <td>{{ $value['number_of_rooms'] }}</td>


                    <td><a class='btn btn-secondary'
                            href="{{ route('properities.edit', ['properity' => $value]) }}">Edit</a></td>
                    <td>
                        <form method="POST" action="{{ route('properities.destroy', ['properity' => $value]) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class='btn btn-danger' name="submit" value="delete">
                        </form>
                    </td>


                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</body>

</html>
