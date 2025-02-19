@extends('layouts.app')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('content')
    <style>
        .clock-container {
            font-size: 1.2rem;
            font-weight: 500;
            padding: 10px;
            border-radius: 8px;
            background: rgba(0, 0, 0, 0.05);
            display: inline-block;
            margin-left: 10px;
        }
        
        #live-clock {
            font-family: 'Courier New', monospace;
            font-weight: bold;
        }
    </style>

    <h3 class="mt-4">
        To-Do List Hari ini: 
        <strong>{{ $hariIni }}</strong>
        <span class="clock-container">
            <span id="live-clock"></span> WIB
        </span>
    </h3>

    <form action="{{ route('todolist.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="text" name="nama_tugas" class="form-control" placeholder="Tambahkan tugas baru" required>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Tambah</button>
        <a href="{{ route('todolist.history') }}" class="btn btn-info mb-3">Lihat Riwayat To-Do List</a>
    </form>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tugas</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todolists as $index => $todolist)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $todolist->nama_tugas }}</td>
                    <td>
                        <form action="{{ route('todolist.update', $todolist->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <select name="status_tugas" class="form-select" onchange="this.form.submit()">
                                <option value="pending" {{ $todolist->status_tugas == 'pending' ? 'selected' : '' }}>Pending
                                </option>
                                <option value="completed" {{ $todolist->status_tugas == 'completed' ? 'selected' : '' }}>
                                    Completed
                                </option>
                            </select>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('todolist.edit', $todolist->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('todolist.destroy', $todolist->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger mt-3">Logout</button>
    </form>

    <script>
        function updateClock() {
            const now = new Date();
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();

            // Add leading zeros
            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;

            // Update the clock display
            document.getElementById('live-clock').textContent = `${hours}:${minutes}:${seconds}`;
        }

        // Update clock immediately and then every second
        updateClock();
        setInterval(updateClock, 1000);
    </script>
@endsection