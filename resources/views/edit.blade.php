<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$tea->id}}">

        Name : <input type="text" name="name" value="{{$tea->name}}"><br>
        Phone : <input type="text" name="phone" value="{{$tea->phone}}"><br>
        Phone : <input type="file" name="image" enctype="image/*"><br>
        <img src="{{asset($tea->image)}}" alt="" style="height: 50px; width: 50px;">

        <button type="submit">Submit</button>
    </form>
</body>
</html>
