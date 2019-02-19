<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Daftar Karyawan Tokoku</h1>
            <br>
            <a href="/karyawan" class="btn btn-primary">Create New Karyawan</a>
            <br><br>

            <table class="table table-stripped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Post</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawan as $karyawan)
                        <tr>
                            <td>{{$karyawan->id}}</td>
                            <td>{{$karyawan->name}}</td>
                            <td>{{$karyawan->email}}</td>
                            <td>{{$karyawan->post}}</td>
                            <td>
                                <img src="{{asset('upload/karyawan/'.$karyawan->image)}}" width="100px" height="100px" alt="Image">
                            </td>
                            <td>
                                <a href="/editimage/{{$karyawan->id}}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <a href="/deleteimage/{{$karyawan->id}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
