@extends('template.master')

<!-- isi bagian judul halaman -->
@section('judul_halaman', 'LIHAT DATA PENDUDUK')

<!-- isi bagian konten -->
@section('konten')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-success">
                <h2 align="center" class="card-title"><strong><font color="white">Detail Data</font></strong></h2>
            </div>

            <div class="card-body">

                <div class="form-group row">
                    <label class="form-label col-sm-2">NIK</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <input type="text" name="nik" placeholder="NIK KTP" class="form-control" value="{{ $data->nik_kk}}" readonly>
                        </div>
                    </div>

                    <label class="form-label col-sm-2">NAMA</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <input type="text" name="nama" placeholder="NAMA LENGKAP" class="form-control" value="{{ $data->nama_kk}}" readonly>
                        </div>
                    </div>

                    <label class="form-label col-sm-2">JENIS KELAMIN</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <input type="text" name="jeniskelamin" placeholder="JENIS KELAMIN" class="form-control" value="{{ $data->jeniskelamin_kk}}" readonly>
                        </div>
                    </div>

                    <label class="form-label col-sm-2">TANGGAL LAHIR</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <input type="text" name="tgllahir" placeholder="TANGGAL LAHIR" class="form-control" value="{{ $data->tgllahir_kk }}" readonly>
                        </div>
                    </div>

                    <label class="form-label col-sm-2">PENDIDIKAN</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <input type="text" name="pendidikan" placeholder="SD/SMP/SMA/.." class="form-control" value="{{ $data->pendidikan_kk }}" readonly>
                        </div>
                    </div>

                    <label class="form-label col-sm-2">PEKERJAAN</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <input type="text" name="pekerjaan" placeholder="PEKERJAAN" class="form-control" value="{{ $data->pekerjaan_kk }}" readonly>
                        </div>
                    </div>

                    <label class="form-label col-sm-2">PENGHASILAN</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <input type="text" name="penghasilan" placeholder="PENGHASILAN" class="form-control" value="{{ $data->penghasilan_kk }}" readonly>
                        </div>
                    </div>

                    <label class="form-label col-sm-2">ALAMAT</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <input type="text" name="alamat" placeholder="ALAMAT" class="form-control" value="{{ $data->alamat_kk}}" readonly>
                        </div>
                    </div>

                    <div class="card-footer text-center">
                        <a href="{{ route('penduduk.index') }}" class="btn btn-warning">KEMBALI</a>
                    </div>


                </div>
            </div>



        </div>
    </div>
</div>

@endsection