@extends('layout/main')

@section('title', 'Form Ubah Data Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
              <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>

                <form method="post" action="/students/{{ $student->id }}">
                @method('patch')
                <!-- @csrf ===> utk mencegah bila ada website lain mengisi data -->
                @csrf
                    <div class="form-group mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ $student->nama }}" placeholder="Masukkan Nama" name="nama">
                        @error('nama')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="nrp">NRP</label>
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" value="{{ $student->nrp }}" placeholder="Masukkan NRP" name="nrp">
                        @error('nrp')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $student->email }}" placeholder="Masukkan Email" name="email">
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" value="{{ $student->jurusan }}" placeholder="Masukkan Jurusan" name="jurusan">
                        @error('jurusan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <button type="submit" class="btn btn-success">Ubah Data</button>
                </form>
                
            </div>
        </div>
    </div>
@endsection
   