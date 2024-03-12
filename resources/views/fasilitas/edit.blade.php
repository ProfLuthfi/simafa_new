@extends('layout')

@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Edit Fasilitas</div>
                    <div class="card-body">

                        <form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group row mt-3">
                                <label for="nama_fasilitas" class="col-md-4 col-form-label text-right">Nama Fasilitas</label>
                                <div class="col-md-6">
                                    <input type="text" id="nama_fasilitas" class="form-control" name="nama_fasilitas" required autofocus>
                                    @error('nama_fasilitas')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="kelas" class="col-md-4 col-form-label text-right">Kelas</label>
                                <div class="col-md-6">
                                    <input type="text" id="kelas" class="form-control" name="kelas" required>
                                    @error('kelas')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="alamat" class="col-md-4 col-form-label text-right">alamat</label>
                                <div class="col-md-6">
                                    <textarea type="number" id="alamat" class="form-control" name="alamat" required></textarea>
                                    @error('alamat')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="no_telepon" class="col-md-4 col-form-label text-right">No telepon</label>
                                <div class="col-md-6">
                                    <input type="text" id="no_telepon" class="form-control" name="no_telepon" required>
                                    @error('no_telepon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4 mt-3 p-2 d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Simpan Perubahan
                                </button>
                                <a href="{{ route('fasilitas.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
