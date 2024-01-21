<!DOCTYPE html>
<html>

<head>
  <title>{{ $judul }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <h1 align="center">{{ $judul }}</h1>
  <p>Tanggal Cetak : {{ $tanggal }}</p>
  <p>
    <hr>
  </p>
  <table class="table table-bordered">

    <tr>
      <th style="width :10px">#</th>
      <th style="width :100px">NIK</th>
      <th style="width :100px">NAMA KEPALA KELUARGA</th>
      <th style="width :100px">JENIS KELAMIN</th>
      <th style="width :100px">TANGGAL LAHIR</th>
      <th style="width :100px">PENDIDIKAN</th>
      <th style="width :100px">PEKERJAAN</th>
      <th style="width :100px">PENGHASILAN / BULAN</th>
      <th style="width :100px">ALAMAT</th>
      <th style="width :50px"></th>
    </tr>

    <tbody>
      @if ($penduduks->count() > 0)
        @foreach ($penduduks as $p)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->nik_kk }}</td>
            <td>{{ $p->nama_kk }}</td>
            <td>{{ $p->jeniskelamin_kk }}</td>
            <td>{{ $p->tgllahir_kk }}</td>
            <td>{{ $p->pendidikan_kk }}</td>
            <td>{{ $p->pekerjaan_kk }}</td>
            <td>{{ $p->penghasilan_kk }}</td>
            <td>{{ $p->alamat_kk }}</td>
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
