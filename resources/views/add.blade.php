@extends('layout.sidebar')

@section('title', 'Tambah Mobil')

@section('content')
    <h3>Tambah Mobil</h3>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="card-body">
                            <form action="/tambah" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Merk</label>
                                    <input type="text"
                                      class="form-control" name="merk" autofocus required>
                                  </div>
                                  <div class="form-group">
                                    <label for="">Model</label>
                                    <input type="text"
                                      class="form-control" name="model" required>
                                  </div>
                                <div class="form-group">
                                  <label for="">Nomor Plat</label>
                                  <input type="text"
                                    class="form-control" name="nomor_plat" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tarif Sewa</label>
                                    <input type="text"
                                      class="form-control" name="tarif_sewa" required>
                                  </div>
                                <div class="form-group">
                                    <input name="" id="" class="btn btn-primary" type="submit" value="Tambah">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection