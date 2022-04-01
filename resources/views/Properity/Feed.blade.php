@extends('template')
@section('nav')
<div class="table-container">
  <div class="div">
    <a href="{{route('properities.create')}}"><button class="btn"> Add</button></a>
       
  </div>
  <table>
   <thead>
      <tr>
        <th>ADVERTISER name</th>
        <th>property address</th>
        <th>property price</th>
        <th>image</th>
        <th>property type</th>
        <th>Air Conditioner</th>
        <th>Wi-Fi</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
  </thead>
  <tbody>
        
  @foreach ($data as $value)
    <tr class="table-row">
    

   
      <td>{{ $value['address'] }}</td>
      <td>{{ $value['price'] }}</td>
      <td><img src="/storage/{{ $value ['image'] }}" height="50px"></td>
      <td>{{ $value ['type'] }}</td>
      <td>{{ $value ['Air Conditioner'] }}</td>
      <td>{{ $value ['Wi-Fi'] }}</td>
      <td><form method="POST" action="{{route('status',['status'=>$value])}}">
        @csrf
        @method('PUT')
        <input type="submit" name="accept" value="Accept">
        </form></td>
         <td><form method="POST" action="{{route('statu',['status'=>$value])}}">
          @csrf
          @method('PUT')
          <input type="submit" name="Reject" value="Reject">
          </form></td>

      <td>
      <a class='btn btn-secondary'href="{{ route('properities.edit', ['properity' => $value]) }}">Edit</a>
      <td>
          <form method="POST" action="{{ route('properities.destroy', ['properity' => $value]) }}">
              @csrf
              @method('DELETE')
              <input type="submit" class='btn btn-danger' name="submit" value="delete">
          </form>
      </td>
      <!-- <td>
        <div class="project-status-pill pill-green">Published</div>
      </td>
      <td>
        <div class="dashboard-table-action-icon-container">
          <i class="material-icons dashboard-table-action-icon ">send</i>
          <a href="{{route('properities.edit',['properity'=>$value]) }}"><i class="material-icons dashboard-table-action-icon">edit</i></a>
       </div>
      </td> -->


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
@endsection

