<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Gambar</title>
</head>

<body>
    <div class="container mt-3">
        @if (session('namaFile'))
            <div class="alert alert-success" role="alert">
                Gambar berhasil diupload ke <strong>{{ session('namaFile') }}</strong>.
            </div>
            <img src="{{ asset('gambar/' . session('namaFile')) }}" alt="Gambar yang diunggah" class="img-fluid mt-3">
        @else
            <div class="alert alert-danger" role="alert">
                Tidak ada gambar yang diunggah.
            </div>
        @endif
    </div>
</body>

</html>
