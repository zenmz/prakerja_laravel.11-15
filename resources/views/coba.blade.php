@extends('template')
@section('main')
    <h1>Ini tampilan website saya</h1>

    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2)
            {{-- <h1>Ini menggunakan blade</h1> --}}
            <img src="{{ asset('img/photo-167.jpeg') }}" alt="" width="250px">
        @endif
    @endfor
@endsection
