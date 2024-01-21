<!-- Menghubungkan dengan view template master -->
@extends('template.master')

<!-- isi bagian judul halaman -->
@section('judul_halaman', 'HALAMAN UTAMA DATA PENDUDUK')

<!-- isi bagian konten -->
@section('konten')
<a href="{{ route('penduduk.create') }}" type="button" class="btn btn-success" id="btnModalFardhu">Tambah data</a>
<a href="{{ route('cetak_penduduk') }}" target="_blank" type="button" class="btn btn-info">Cetak Laporan</a>
<hr>


@if (Session::has('pesan'))
<div class="alert alert-success" role="alert">
    {{Session::get('pesan')}}
</div>
@endif

<div class="table-responsive margin">
    <table id="table-penduduk" class="table table-bordered">
        <thead class="table-success">
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
        </thead>
        <tbody>
            @if ($penduduks->count() > 0)
            @foreach ($penduduks as $p)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$p->nik_kk}}</td>
                <td>{{$p->nama_kk}}</td>
                <td>{{$p->jeniskelamin_kk}}</td>
                <td>{{$p->tgllahir_kk}}</td>
                <td>{{$p->pendidikan_kk}}</td>
                <td>{{$p->pekerjaan_kk}}</td>
                <td>{{$p->penghasilan_kk}}</td>
                <td>{{$p->alamat_kk}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="basic example">
                        <a href="{{route('penduduk.show',$p->nik_kk)}}" class="btn btn-small btn-secondary">Detail</a>
                        <a href="{{route('penduduk.edit',$p->nik_kk)}}" class="btn btn-small btn-warning">Edit</a>
                        <form action="{{ route('penduduk.destroy', $p->nik_kk) }}" method="POST" onsubmit="return confirm('Apakah yakin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-small btn-danger">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td class="text-center" colspan="10">DATA NOT FOUND</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>


@endsection
