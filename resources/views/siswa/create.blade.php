<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halooo Ini Crudku lohhh</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a href="{{URL::to('siswa')}}" class="navbar-brand">Laravelkuuu</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{URL::to('siswa')}}">Melihat Semua Siswa</a></li>
                <li><a href="{{URL::to('siswa/create')}}">Membuat Siswa</a></li>
            </ul>
        </nav>

        <h1>Membuat Siswa</h1>
        <form method="POST" action="{{url('siswa')}}">
            @csrf
            Nama: <br>
            <input type="text" name="nama">
            <br>
            Alamat: <br>
            <input type="text" name="alamat">
            <br>
            No HP:<br>
            <input type="text" name="no_hp">
            <br><br>
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>

</html>
