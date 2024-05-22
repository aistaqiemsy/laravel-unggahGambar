<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Unggah Gambar</title>
</head>
<body>
    <form action="/gambar/simpanGambar" method="post" enctype="multipart/form-data">
        @csrf
        Pilih Gambar <br>
        <input type="file" name="gambar"><button type="submit">Unggah</button>
    </form>
</body>
</html>