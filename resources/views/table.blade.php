@extends('template')
@section('main')
    <h1>Data Barang</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Barang</th>
            </tr>
        </thead>
        <tbody>           
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('js')
    <script>
        alert('Ini Halaman Table')
    </script>
@endsection
