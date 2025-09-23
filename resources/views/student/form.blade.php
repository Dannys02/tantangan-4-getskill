@extends('layouts.app')

@section('title', 'Form Student')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Form Student</h1>

    <form action="#" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" placeholder="Masukkan nama">
        </div>
        <div class="form-group">
            <label>NIM</label>
            <input type="text" class="form-control" placeholder="Masukkan NIM">
        </div>
        <div class="form-group">
            <label>Jurusan</label>
            <select class="form-control">
                <option>Informatika</option>
                <option>Sistem Informasi</option>
                <option>Teknik Elektro</option>
                <option>Manajemen</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
