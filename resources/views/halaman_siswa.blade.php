<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>data</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Kelas</th>
        </tr>
        @foreach ($siswa as $s)
         <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->nama_lengkap }}</td>
            <td>{{ $s->jenis_kelamin }}</td>
            <td>{{ $s->tanggal_lahir }}</td>
            <td>{{ $s->kelas }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>