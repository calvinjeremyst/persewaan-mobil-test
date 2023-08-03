@extends('layout.sidebar')

@section('title', 'Detail User')

@section('content')
    <h3>Detail User</h3>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="card-body">
                            <form action="/saveuser" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email"
                                      class="form-control" name="email" value="{{ Auth::user()->email ?? '' }}" readonly>
                                </div>
                                <div class="form-group">
                                  <label for="">Nama</label>
                                  <input type="text"
                                    class="form-control" name="nama" value="{{ Auth::user()->nama ?? '' }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text"
                                      class="form-control" name="alamat" value="{{ Auth::user()->alamat ?? '' }}" readonly>
                                  </div>
                                  <div class="form-group">
                                    <label for="">Nomor Telepon</label>
                                    <input type="text"
                                      class="form-control" name="telepon" value="{{ Auth::user()->nomor_telepon ?? '' }}" readonly>
                                  </div>
                                  <div class="form-group">
                                    <label for="">Nomor SIM</label>
                                    <input type="text"
                                      class="form-control" name="sim" value="{{ Auth::user()->nomor_sim ?? '' }}" readonly>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection