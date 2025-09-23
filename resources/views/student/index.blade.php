@extends('layouts.app')

@section('title', 'Data Students')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Data Students</h1>

    <a href="{{ url('students/create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Create Student
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Budi</td>
                <td>123456</td>
                <td>Informatika</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Ani</td>
                <td>654321</td>
                <td>Manajemen</td>
            </tr>
        </tbody>
    </table>
@endsection
