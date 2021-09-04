<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
    <div class="container-fluid bg-dark  text-center shadow-sm">
            <div class="container pb-2 pt-2">
                <h1 class="text-white ">Course Details</h1>
            </div>
        </div>
        <div class="bg-white shadow-sm">
            <div class="container">
                <div class="row">
                    <nav class="nav nav-underline">
                        <div class="nav-link">Course / View</div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="text-left mt-4 pl-4">
            <a href="/" class="btn btn-success ">Add</a>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="card pt-4">
                    <table class="table table-bordered shadow  text-center table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Course Name</th>
                            <th>Fee</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>     
                        @foreach($courses as $course)
                        <tr>
                            <td>{{$course->id}}</td>
                            <td>{{$course->coursename}}</td>
                            <td>{{$course->fee}}</td>
                            <td><a href="/edit/{{$course->id}}" class="btn btn-success">Edit</a></td>
                            <td><a href="/delete/{{$course->id}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div> 
            </div>

        </div>    
    </body>
</html>