<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 align="center">Student Table</h2> 
    <a href="{{route('create')}}" class="btn btn-success float-end">Add</a>
    <table align="center" border="2px">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>roll</td>
            <td>course</td>
            <td>collage</td>
        </tr>

        @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->roll}}</td>
                <td>{{$student->course}}</td>
                <td>{{$student->collage}}</td>
                <td><a href="{{ route('show', $student->id) }}">Show</a></td>
                <td><a href="{{ route('edit', $student->id) }}">Edit</a></td>
                <td><a href="{{ route('delete', $student->id) }}">Delete</a></td>
            </tr>
        @endforeach

    </table>
</body>
</html>