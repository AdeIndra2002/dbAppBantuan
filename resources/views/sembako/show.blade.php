<!-- Menghubungkan dengan view template master -->
@extends('template.master')

<!-- isi bagian judul halaman -->
@section('judul_halaman', 'TAMBAH DATA BANTUAN SEMBAKO')


<!-- isi bagian konten -->
@section('konten')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-success">
                <h3 class="card-title"> </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('sembako.store') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label class="form-label col-sm-2">NIK Penerima</label>
                        <div class="col-sm-4">
                            <input type="text" name="nik" placeholder="NIK Penerima" class="form-control"
                                value="{{ $data->nik_kk }}" readonly>
                        </div>
                        <label class="form-label col-sm-2">Jenis Bantuan</label>
                        <div class="col-sm-4">
                            <input type="text" name="jenis" placeholder="Jenis Bantuan" class="form-control"
                                value="{{ $data->jenis_bantuan }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="form-label col-sm-2">Tanggal Terima</label>
                        <div class="col-sm-4">
                            <input type="date" name="tanggal" placeholder="Tanggal Terima Bantuan" class="form-control"
                                value="{{ $data->tgl_bantuan }}" readonly>
                        </div>
                        <label class="form-label col-sm-2">Keterangan</label>
                        <div class="col-sm-4">
                            <input type="text" name="keterangan" placeholder="Keterangan" class="form-control"
                                value="{{ $data->keterangan }}" readonly>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-info" id="simpan">SIMPAN</button>
                        <a href="{{ route('sembako.index') }}" class="btn btn-danger">BATAL</a>
                    </div>
                </form>
            </div>
        </div><!-- akhir card -->
    </div> <!-- akhir col-12 -->
</div><!-- akhir row -->
@endsection