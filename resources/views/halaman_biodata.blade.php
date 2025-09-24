<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Biodata</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Email</th>
        </tr>
        @foreach ($biodata as $b)
         <tr>
            <td>{{ $b->id }}</td>
            <td>{{ $b->nama_lengkap }}</td>
            <td>{{ $b->jenis_kelamin }}</td>
            <td>{{ $b->tanggal_lahir }}</td>
            <td>{{ $b->tempat_lahir }}</td>
            <td>{{ $b->agama }}</td>
            <td>{{ $b->alamat }}</td>
            <td>{{ $b->telepon }}</td>
            <td>{{ $b->email }}</td>    
        </tr>
        @endforeach
    </table>
</body>
</html>