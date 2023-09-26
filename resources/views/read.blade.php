<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('home')}}">Home</a>
    <a href="{{route('read')}}" >Read</a>
        <br>

    <table>
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Dept name</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        @foreach ($tea as $teas)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$teas->name}}</td>
            <td>{{$teas->phone}}</td>
            <td>{{$teas->department->name}}</td>
            <td><img src="{{asset($teas->image)}}" alt="" height="50px" width="50px"></td>
            <td>
                <a href="{{route('edit',['id'=>$teas->id])}}">Edit</a>
                <a href="{{route('delete',['id'=>$teas->id])}}">Delete</a>
            </td>
        </tr>
        @endforeach

    </table>
</body>
</html>
