@extends('layout.sidebar')

@section('title', 'Daftar Sewa Mobil')

@section('content')
  <h3>Daftar Sewa Mobil</h3>
  <table class="table table-hover mt-4">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">ID Mobil</th>
        <th scope="col">Tanggal Mulai</th>
        <th scope="col">Tanggal Selesai</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($borrow as $no => $m)
        <tr>
          <th scope="row">{{ ++$no }}</th>
          <td>{{$m->id_mobil}}</td>
          <td>{{$m->tanggal_mulai}}</td>
          <td>{{$m->tanggal_selesai}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection