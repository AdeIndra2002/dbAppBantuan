@extends('template.master')

<!-- isi bagian judul halaman -->
@section('judul_halaman', 'EDIT DATA PENDUDUK')

<!-- isi bagian konten -->
@section('konten')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-success">
                <h3 class="card-title"> </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('penduduk.update', $data->nik_kk) }}" method="POST"> 
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label class="form-label col-sm-2">NIK</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" name="nik" placeholder="NIK KTP" class="form-control" value="{{ $data->nik_kk }}" readonly>
                            </div>
                        </div>

                        <label class="form-label col-sm-2">NAMA</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" name="nama" placeholder="NAMA LENGKAP" class="form-control" value="{{ $data->nama_kk }}" required>
                            </div>
                        </div>

                        <label class="form-label col-sm-2">JENIS KELAMIN</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <select name="jeniskelamin" class="form-control">
                                    <option value="{{ $data->jeniskelamin_kk}}">{{ $data->jeniskelamin_kk}}</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                
                            </div>
                        </div>

                        <label class="form-label col-sm-2">TANGGAL LAHIR</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="date" name="tgllahir" placeholder="TANGGAL LAHIR" class="form-control" value="{{ $data->tgllahir_kk }}" required>
                            </div>
                        </div>

                        <label class="form-label col-sm-2">PENDIDIKAN</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" name="pendidikan" placeholder="SD/SMP/SMA/.." class="form-control" value="{{ $data->pendidikan_kk }}" required>
                            </div>
                        </div>

                        <label class="form-label col-sm-2">PEKERJAAN</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" name="pekerjaan" placeholder="PEKERJAAN" class="form-control" value="{{ $data->pekerjaan_kk }}" required>
                            </div>
                        </div>

                        <label class="form-label col-sm-2">PENGHASILAN</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" name="penghasilan" placeholder="PENGHASILAN" class="form-control" value="{{ $data->penghasilan_kk }}" required>
                            </div>
                        </div>

                        <label class="form-label col-sm-2">ALAMAT</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" name="alamat" placeholder="ALAMAT" class="form-control" value="{{ $data->alamat_kk }}" required>
                            </div>
                        </div>

                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-info" id="simpah">UBAH</button>
                            <a href="{{ route('penduduk.index') }}" class="btn btn-danger">BATAL</a>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection