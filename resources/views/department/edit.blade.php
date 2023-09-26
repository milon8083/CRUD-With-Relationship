<html>
    <head>
        <title>M</title>
    </head>
    <body>
        <a href="{{route('home')}}" >Home</a>
        <a href="{{route('read')}}" >Read</a>
        <a href="{{route('departments.index')}}" >Department Manage</a>
        <a href="{{route('departments.create')}}" >Department Add</a>
            <br>
        <form action="{{route('departments.update',$department->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            Name : <input type="text" name="name" value="{{$department->name}}"><br>
            Code : <input type="text" name="code" value="{{$department->code}}"><br>


            <button class="submut" type="submit">Submit</button>
        </form>
    </body>
</html>
