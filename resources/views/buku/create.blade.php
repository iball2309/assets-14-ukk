@extends('layouts.sidebar')

@section('content')
   <div id="app">

      <div id="main">
         <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
               <i class="bi bi-justify fs-3"></i>
            </a>
         </header>
         <div class="container">
            <div class="page-heading">
               <h3>Form Buku</h3>
            </div>
            <form action="{{ route('buku.store') }}" enctype="multipart/form-data" method="post">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        {{-- Cover --}}
                        <div class="form-group">
                           <label class="font-weight-bold">Cover</label>
                           <div class="mb-4">
                              <input class="form-control @error('cover') is-invalid @enderror" type="file"
                                 id="cover" name="cover">
                           </div>
                           @error('cover')
                              <div class="alert alert-danger mt-2">
                                 {{ $message }}
                              </div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-4">
                        {{-- judul --}}
                        <div class="form-group">
                           <label class="font-weight-bold">Judul</label>
                           <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                              value="{{ old('judul') }}" placeholder="Masukkan Nama Kategori">


                           @error('judul')
                              <div class="alert alert-danger mt-2">
                                 {{ $message }}
                              </div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-4">
                        {{-- penulis --}}
                        <div class="form-group">
                           <label class="font-weight-bold">Penulis</label>
                           <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis"
                              value="{{ old('penulis') }}" placeholder="Masukkan Nama Kategori">


                           @error('penulis')
                              <div class="alert alert-danger mt-2">
                                 {{ $message }}
                              </div>
                           @enderror
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4">
                        {{-- penerbit --}}
                        <div class="form-group">
                           <label class="font-weight-bold">penerbit</label>
                           <input type="text" class="form-control @error('penerbit') is-invalid @enderror"
                              name="penerbit" value="{{ old('penerbit') }}" placeholder="Masukkan Nama Kategori">


                           @error('penerbit')
                              <div class="alert alert-danger mt-2">
                                 {{ $message }}
                              </div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-4">
                        {{-- tahun_terbit --}}
                        <div class="form-group">
                           <label class="font-weight-bold">tahun_terbit</label>
                           <input type="date" class="form-control @error('tahun_terbit') is-invalid @enderror"
                              name="tahun_terbit" value="{{ old('tahun_terbit') }}">


                           @error('tahun_terbit')
                              <div class="alert alert-danger mt-2">
                                 {{ $message }}
                              </div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-4">
                        {{-- tahun_terbit --}}
                        <div class="form-group">
                           <label class="font-weight-bold">Kategori</label>
                           <select class="form-select" name="kategori_id" aria-label="Default select example">
                              <option value="">-- Select One --</option>
                              <option value="1">One</option>
                           </select>


                           @error('kategori_id')
                              <div class="alert alert-danger mt-2">
                                 {{ $message }}
                              </div>
                           @enderror
                        </div>
                     </div>
                  </div>
                  @csrf
                  <div class="row mb-3">
                     <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('/buku') }}" class="btn btn-danger" style="margin-left: 10px">Back</a>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
@endsection
