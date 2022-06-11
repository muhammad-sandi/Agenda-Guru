@extends('layout.main')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Edit Data Agenda</h1>
      </div>

<div class="container pt-5">
    <form action="/updateagenda/{{ $agendas->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <label for="inputGuru" class="col-sm-2 col-form-label">Nama Guru</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputGuru" name="nama_guru"
                    value="{{ old('nama_guru', $agendas->nama_guru) }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputMapel" class="col-sm-2 col-form-label">Mata Pelajaran</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputMapel" name="mata_pelajaran"
                    value="{{ old('mata_pelajaran', $agendas->mata_pelajaran) }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputMateri" class="col-sm-2 col-form-label">Materi Pelajaran</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputMateri" name="materi_pelajaran"
                    value="{{ old('materi_pelajaran', $agendas->materi_pelajaran) }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputJam" class="col-sm-2 col-form-label">Jam Pelajaran</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputJam" name="jam_pelajaran"
                    value="{{ old('jam_pelajaran', $agendas->jam_pelajaran) }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputAlpha" class="col-sm-2 col-form-label">Siswa Alpha</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputAlpha" name="siswa_yang_tidak_hadir"
                    value="{{ old('siswa_yang_tidak_hadir', $agendas->siswa_yang_tidak_hadir) }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputKelas" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputKelas" name="kelas"
                    value="{{ old('kelas', $agendas->kelas) }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputLink" class="col-sm-2 col-form-label">Link</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputLink" name="link_pembelajaran"
                    value="{{ old('link_pembelajaran', $agendas->link_pembelajaran) }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputDokumentasi" class="col-sm-2 col-form-label">Dokumentasi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputDokumentasi" name="dokumentasi"
                    value="{{ old('dokumentasi', $agendas->dokumentasi) }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputKeterangan" class="col-sm-2 col-form-label">Ket.</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputKeterangan" name="keterangan"
                    value="{{ old('keterangan', $agendas->keterangan) }}">
            </div>
        </div>

        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
