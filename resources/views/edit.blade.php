<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container"> 
            <h1>Update Data</h1>
            <form method="POST" action="/update/{{$courses->id}}">
                @csrf
                <div class=mb-3>
                    <lable><b>Course Name</b></lable>
                    <input type="text" name="title" class="form-control" value={{$courses->coursename}}>
                </div>
                <div class=mb-3>
                    <lable><b>Course Fee</b></lable>
                    <input type="text" name="fee" class="form-control" value={{$courses->fee}}>
                </div>
                <input type="submit" name="update" value="update" class="btn btn-success">
            </form>
        </div>
    </body>
</html>