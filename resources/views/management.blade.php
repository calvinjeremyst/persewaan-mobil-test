@extends('layout.sidebar')

@section('title', 'Manajemen Mobil')

@section('content')
  <h3>Daftar Mobil</h3>
  <div class="row">
    <div class="col-lg-12">
      <a class="btn btn-primary" href="/add" role="button"><i class="bi bi-plus-lg"></i></a>
      <form class="form-inline float-right" method="GET" action="/search">
        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
  <table class="table table-hover mt-4">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Merk</th>
        <th scope="col">Model</th>
        <th scope="col">Nomor Plat</th>
        <th scope="col">Tarif Sewa</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($management as $no => $m)
        <tr>
          <th scope="row">{{ $management->firstItem() + $no}}</th>
          <td>{{$m->merk}}</td>
          <td>{{$m->model}}</td>
          <td>{{$m->nomor_plat}}</td>
          <td>{{$m->tarif_sewa}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <span class="float-right">{{ $management->links('pagination::bootstrap-4') }}</span>
@endsection