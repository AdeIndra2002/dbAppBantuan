<!DOCTYPE html>
<html>

<head>
    <title>{{ $judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1 align="center">{{ $judul }}</h1>
    <p>Tanggal Cetak : {{ $tanggal }}</p>
    <p>
        <hr>
    </p>

    <table id="table-tunai" class="table table-bordered">
        <tr>
            <th style="width: 10px">#</th>
            <th style="width: 100px">NIK</th>
            <th style="width: 100px">NAMA KEPALA KELUARGA</th>
            <th style="width: 100px">JENIS KELAMIN</th>
            <th style="width: 100px">PEKERJAAN</th>
            <th style="width: 100px">TANGGAL BANTUAN</th>
            <th style="width: 100px">JUMLAH DANA</th>
            <th style="width: 100px">KETERANGAN</th>
            <th style="width: 50px"></th>
        </tr>
        <tbody>
            @if ($viewtunai->count() > 0)
            @foreach ($viewtunai as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nik_kk }}</td>
                <td>{{ $data->nama_kk }}</td>
                <td>{{ $data->jeniskelamin_kk }}</td>
                <td>{{ $data->pekerjaan_kk }}</td>
                <td>{{ $data->tgl_bantuan }}</td>
                <td>{{ $data->jumlah_dana }}</td>
                <td>{{ $data->keterangan }}</td>

            </tr>
            @endforeach
            @else
            <tr>
                <td class="text-center" colspan="10">DATA NOT FOUND</td>
            </tr>
            @endif
        </tbody>
    </table>

</body>

</html>
