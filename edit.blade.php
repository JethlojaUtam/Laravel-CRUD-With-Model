<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('update',$students->id)}}" method="post">
        @csrf
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" placeholder="Enter your name" value="{{$students->name}}">
                    @error('name')
                        <div style="color:red">{{$message}}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Roll No</td>
                <td>
                    <input type="text" name="roll" placeholder="Enter your rollno" value="{{$students->roll}}">
                    @error('roll')
                        <div style="color:red">{{$message}}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Course</td>
                <td>
                    <input type="text" name="course" placeholder="Enter your course" value="{{$students->course}}">
                    @error('course')
                        <div style="color:red">{{$message}}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>College</td>
                <td>
                    <input type="text" name="collage" placeholder="Enter your college" value="{{$students->collage}}">
                    @error('collage')
                        <div style="color:red">{{$message}}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Update">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>