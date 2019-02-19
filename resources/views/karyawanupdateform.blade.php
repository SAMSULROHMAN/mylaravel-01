<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Karyawan</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container-fluid">
        <h1>New Karyawan</h1>
        <form enctype="multipart/form-data" action="/updateimage/{{$karyawan->id}}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT')}}
            <input type="hidden" name="id" id="id" value="{{$karyawan->id}}">
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" name="name" class="form-control" type="text" value="{{$karyawan->name}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" name="email" class="form-control" type="email" value="{{$karyawan->email}}">
            </div>
            <div class="form-group">
                <label for="post">Post</label>
                <input id="post" name="post" class="form-control" type="text" value="{{$karyawan->post}}">
            </div>
            <div class="input-group">
                <div class="custom-file">
                    <input class="custom-file-input" name="image" type="file" value="{{$karyawan->image}}">
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
