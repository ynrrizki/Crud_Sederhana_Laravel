<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ini Crudku Lhooo</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a href="{{ URL::to('siswa') }}" class="navbar-brand">
                    Laravelkuuu
                </a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('siswa') }}">Melihat Semua Siswa</a></li>
                <li><a href="{{ URL::to('siswa/create') }}">Membuat Data Siswa</a></li>
            </ul>
        </nav>

        <h1>Semua Siswa</h1>
        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>No Hp</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $key => $value)
                <tr>
                    <td>{{ $value->id_siswa}}</td>
                    <td>{{ $value->nama}}</td>
                    <td>{{ $value->alamat}}</td>
                    <td>{{ $value->no_hp}}</td>
                    <td>
                        <a href="{{URL::to('siswa/' . $value->id_siswa)}}" class="btn btn-small btn-success">Tampilkan Siswa Ini</a>
                        <a href="{{URL::to('siswa/' . $value->id_siswa . '/edit')}}" class="btn btn-small btn-info">Edit Siswa Ini</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
