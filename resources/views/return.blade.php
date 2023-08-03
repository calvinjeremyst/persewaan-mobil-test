@extends('layout.sidebar')

@section('title', 'Pengembalian Mobil')

@section('content')
    <h3>Pengembalian Mobil</h3>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="card-body">
                            <form action="/returnCar" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label for="">Nomor Plat Mobil</label>
                                  <input type="text"
                                    class="form-control" name="nomor_plat" required>
                                </div>
                                <div class="form-group">
                                    <input name="" id="" class="btn btn-primary" type="submit" value="Kembalikan">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection