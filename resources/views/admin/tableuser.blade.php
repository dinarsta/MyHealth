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
                <th>Email</th>
                <th>NIK</th>
                <th>Nomor Telpon</th>
                <th>Foto</th>
              </tr>
            </thead>
            <tbody>
              @foreach($dataUser as $row) 
              <tr>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->NIK}}</td>
                <td>{{$row->no_telpon}}</td>
                <td>
                    <a href="{{asset ('foto/'.$row->foto)}}" target="blank" rel=" noopener noreferer">Lihat Gambar</a>
                </td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection