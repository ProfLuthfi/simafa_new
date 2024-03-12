@extends('layout')

@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-10">
              <div class="card">
                  <div class="card-header">Edit Ruangan</div>
                  <div class="card-body">

                      <form action="{{ route('rooms.update', $room->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                          <div class="form-group row mt-3">
                              <label for="nama_ruangan" class="col-md-4 col-form-label text-right">Nama Ruangan</label>
                              <div class="col-md-6">
                                  <input type="text" id="nama_ruangan" class="form-control" name="nama_ruangan" value="{{ $room->nama_ruangan }}" required autofocus>
                                  @error('nama_ruangan')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row mt-3">
                              <label for="keterangan" class="col-md-4 col-form-label text-right">Keterangan</label>
                              <div class="col-md-6">
                                  <textarea id="keterangan" class="form-control" name="keterangan" required>{{ $room->keterangan }}</textarea>
                                  @error('keterangan')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row mt-3">
                              <label for="kapasitas" class="col-md-4 col-form-label text-right">Kapasitas</label>
                              <div class="col-md-6">
                                  <input type="number" id="kapasitas" class="form-control" name="kapasitas" value="{{ $room->kapasitas }}" required>
                                  @error('kapasitas')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                          </div>

                          <div class="col-md-6 offset-md-4 mt-3 p-2 d-grid">
                              <button type="submit" class="btn btn-primary">
                                  Simpan Perubahan
                              </button>
                              <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Batal</a>
                          </div>
                      </form>

                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection
