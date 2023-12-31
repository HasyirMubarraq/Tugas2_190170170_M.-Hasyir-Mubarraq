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
        <h2>Form Tambah Data Matakuliah</h2>
        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_matakuliah" class="form-label">Nama Matakuliah</label>
                <input type="text" class="form-control" name="nama_matakuliah" placeholder="Nama Matakuliah">
            </div>
            <div class="mb-3">
                <label for="sks" class="form-label">SKS</label>
                <input type="text" class="form-control" name="sks" placeholder="SKS">
            </div>
            <div class="mb-3">
                <label for="dosen" class="form-label">Dosen</label>
                <input type="text" class="form-control" name="dosen" placeholder="Dosen">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>