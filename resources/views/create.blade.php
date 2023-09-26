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
        <form action="{{route('create')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label>Department</label>
            <select name="dept_id">
                @foreach ($departments as $department)
                <option value="{{$department->id}}">{{$department->name}}</option>
                @endforeach
            </select>
            Name : <input type="text" name="name"><br>
            Phone : <input type="text" name="phone"><br>
            Image : <input type="file" name="image" enctype="image/*"><br>

            <button class="submut" type="submit">Submit</button>
        </form>
    </body>
</html>
