<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown Menu</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        .container{
            display: flex;
            align-items: center;
            gap: 10px;
        }

        select{
            width: 180px;
            padding: 8px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<div class="container">

    <img src="logo.png" alt="Logo" width="60">

    <h3>Menu</h3>

    <select name="menu" id="menu">
        <option value="dosen">Dosen</option>
        <option value="mahasiswa">Mahasiswa</option>
        <option value="jurusan">Jurusan</option>
        <option value="matakuliah">Mata Kuliah</option>
    </select>

</div>

</body>
</html>