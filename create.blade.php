<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <table border="1px">
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" placeholder="Enter your name">
                    @error('name')
                        <div style="color:red">{{$message}}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Roll No</td>
                <td>
                    <input type="text" name="roll" placeholder="Enter your rollno">
                    @error('roll')
                        <div style="color:red">{{$message}}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Course</td>
                <td>
                    <input type="text" name="course" placeholder="Enter your course">
                    @error('course')
                        <div style="color:red">{{$message}}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>College</td>
                <td>
                    <input type="text" name="collage" placeholder="Enter your college">
                    @error('collage')
                        <div style="color:red">{{$message}}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>