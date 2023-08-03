@extends('layout.sidebar')

@section('title', 'Peminjaman Mobil')

@section('content')
    <h3>Sewa Mobil</h3>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="card-body">
                            <form action="/borrowCar" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Tanggal Mulai</label>
                                    <input type="date"
                                      class="form-control" name="tgl_mulai" autofocus required>
                                  </div>
                                  <div class="form-group">
                                    <label for="">Tanggal Selesai</label>
                                    <input type="date"
                                      class="form-control" name="tgl_selesai" required>
                                  </div>
                                <div class="form-group">
                                  <label for="">List Mobil</label>
                                  <select class="form-control" name="id_mobil">
                                    <option value="">Pilih</option>
                                    @foreach ($management as $m)
                                        <option value="{{ $m->id }}">{{ $m->model }}</option>
                                    @endforeach
                                  </select>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="id_pengguna" value="{{ Auth::user()->id }}" hidden>
                                </div>
                                <div class="form-group">
                                    <input name="" id="" class="btn btn-primary" type="submit" value="Sewa">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection