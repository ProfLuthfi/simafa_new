@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Table Rooms') }}</div>

                <div class="card-body">
                    <a href="{{ route('rooms.create') }}" class="btn btn-sm btn-secondary">
                        Create Room
                    </a>
                    <table class="table" id="rooms">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Ruangan</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Kapasitas</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rooms as $room)
                            <tr>
                                <th scope="row">{{ $room->id }}</th>
                                <td>{{ $room->nama_ruangan }}</td>
                                <td>{{ $room->keterangan }}</td>
                                <td>{{ $room->kapasitas }}</td>
                                <td>
                                    <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-sm btn-warning">
                                        Edit
                                    </a>
                                    <form action="{{ route('rooms.destroy',$room->id) }}" method="POST"
                                    style="display: inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus ruangan {{ $room->nama_ruangan }}?');">
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
