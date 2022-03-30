



<body style="text-align: center">


    <form method="POST" action="{{route('posts.update',['providers'=>$provider])}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="username">UserName : </label><input id="username"type="text" name="name" value="{{$provider['name']}}"/>
        <br><br>
        <label for="password">Password : </label><input id="password"type="text" name="password" value="{{$provider['password']}}"/>
        <br><br>
        <label for="email">Email : </label><input id="email" type="text" name="email" value="{{$provider['email']}}"/>
        <br><br>
        <label for="address">Address : </label><input id="address" type="text" name="address" value="{{$provider['address']}}"/>
        <br><br>
        <label for="phone">Phone : </label><input id="phone" type="text" name="phone" value="{{$provider['phone']}}"/>
        <br><br>
        <label for="img">Your Profile img : </label><input id="img" type="file" name="img" placeholder="Profile img" value="{{$provider['img']}}"/>
        <br><br>
        <label for="workimg">Picture of Your Business record : </label><input id="workimg" type="file" name="workimg" placeholder="work" value="{{$provider['workimg']}}"/>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
