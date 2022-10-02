@extends('layouts.layout')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">catatan perjalanan</h4>
        </p>
        <div class="table-responsive">
          <table class="table table-hover-light">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Lokasi</th>
                <th>Waktu</th>
                <th>Suhu Tubuh</th>
              </tr>
            </thead>
            <tbody>
              @foreach($catatanPerjalanans as $row) 
              <tr>
                <td>{{$row->user->name}}</td>
                <td>{{$row->tanggal}}</td>
                <td>{{$row->lokasi}}</td>
                <td>{{$row->waktu}}</td>
                <td>{{$row->suhu_tubuh}} ℃</td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection