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
            <th>Code</th>
            <th>Satus</th>
            <th>Action</th>
        </tr>
        @foreach ($departments as $department)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$department->name}}</td>
            <td>{{$department->code}}</td>
            <td>{{$department->status == 1 ? 'active' : 'Inactive'}}</td>
            <td>
                <a href="{{route('departments.edit',$department->id)}}">Edit</a>
                {{-- <a href="{{route('departments.destroy',$department->id)}}">Delete</a> --}}
                <form action="{{route('departments.destroy',$department->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
</body>
</html>
