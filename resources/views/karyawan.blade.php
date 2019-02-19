<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Karyawan</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container-fluid">
        <h1>New Karyawan</h1>
        <form enctype="multipart/form-data" action="{{route ('addimage')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" name="name" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" name="email" class="form-control" type="email">
            </div>
            <div class="form-group">
                <label for="post">Post</label>
                <input id="post" name="post" class="form-control" type="text">
            </div>
            <div class="input-group">
                <div class="custom-file">
                    <input class="custom-file-input" name="image" type="file">
                    <label class="custom-file-label">Image</label>
                </div>
            </div>
            <br>
            <button class="btn btn-primary" type="submit">Save Data</button>
        </form>
    </div>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
