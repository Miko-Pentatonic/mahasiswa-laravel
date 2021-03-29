@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
              <h1 class="mt-3">Daftar Mahasiswa</h1>

              <!-- //Membuat tabel   -->
                <table class="table">
                    <!-- //Ini membuat kolom -->
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NRP</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <!-- //Ini untuk mengisi kolom (datanya) -->
                    <tbody>
                    @foreach( $mahasiswa as $mhs)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $mhs->nama }}</td>
                            <td>{{ $mhs->nrp }}</td>
                            <td>{{ $mhs->email }}</td>
                            <td>{{ $mhs->jurusan }}</td>
                            <td> 
                            <!-- //ini untuk membuat tombol -->
                                <button type="button" class="btn btn-success btn-sm">edit</button>
                                <button type="button" class="btn btn-danger btn-sm">delete</button>
                                <!-- <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">delete</a> -->
                            </td>
                        </tr>
                    @endforeach    
                    </tbody>

                </table>

            </div>
        </div>
    </div>
@endsection
   