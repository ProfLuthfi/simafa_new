@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Table Fasilitas') }}</div>

                <div class="card-body">
                    <a href="{{ route('fasilitas.create') }}" class="btn btn-sm btn-secondary">
                        Create Fasilitas
                    </a>
                    <table class="table" id="fasilitas">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Fasilitas</th>
                                <th scope="col">alamat</th>
                                <th scope="col">kondisi</th>
                                <th scope="col">kapasitas</th>
                                <th scope="col">pj Fasilitas</th>
                                <th scope="col">No Telepon</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($fasilitas as $fasilita)
                            <tr>
                                <th scope="row">{{ $fasilita->id }}</th>
                                <td>{{ $fasilita->nama_fasilitas }}</td>
                                <td>{{ $fasilita->alamat }}</td>
                                <td>{{ $fasilita->kondisi }}</td>
                                <td>{{ $fasilita->kapasitas }}</td>
                                <td>{{ $fasilita->pj_fasilitas }}</td>
                                <td>{{ $fasilita->no_telepon }}</td>
                                <td>
                                    <a href="{{ route('fasilitas.edit', $fasilita->id) }}" class="btn btn-sm btn-warning">
                                        Edit
                                    </a>
                                    <form action="{{ route('fasilitas.destroy',$fasilita->id) }}" method="POST"
                                    style="display: inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus ruangan {{ $fasilitas->nama_fasilitas }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    new DataTable('#rooms');
</script>
@endsection
