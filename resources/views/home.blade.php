<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD - LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">

    <h1>Data Diri</h1>
        <ul>
            @foreach ($users as $u)
            <p>Nama: {{ $u->nama }}</p>
            <p>NIM: {{ $u->nim }}</p>
            <p>Program Studi: {{ $u->prodi }}</p>
            <p>Fakultas: {{ $u->fakultas }}</p>
            @endforeach
        </ul>
        <h2>Daftar Nama Matakuliah</h2>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-primary mb-3">Tambah Matakuliah</a>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Matakuliah</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Dosen</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>


                @foreach ($matakuliahs as $m)
                <tr>
                    <th scope="row">{{ $m->id }}</th>
                    <td>{{ $m->nama_matakuliah }}</td>
                    <td>{{ $m->sks }}</td>
                    <td>{{ $m->dosen}}</td>
                    <td>
                        <a href="{{ route('matakuliah.edit', ['matakuliah' => $m->id]) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('matakuliah.show', ['matakuliah' => $m->id]) }}" class="btn btn-warning">Detail</a>
                        <form action="{{ route('matakuliah.destroy', ['matakuliah' => $m->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>