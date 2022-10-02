@extends('layouts.layout')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
<<<<<<< HEAD
            <h4 class="card-title">Data Catatan Perjalanan</h4>
=======
            <h4 class="card-title">TAMBAH PERJALANAN</h4>
>>>>>>> 890afa2d5fc7a9c01ab0913443840f51015f713a
            <form method="POST" action="{{route('catper.post')}}">
                @csrf

                <div class="form-group">
                  <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                </div>

                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control"  name="tanggal">
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                        <label>lokasi</label>
                        <input style="color: white;" type="text" type="email" class="form-control" name="lokasi">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                        <label>Waktu</label>
                        <input style="color: white;" type="time" class="form-control" name="waktu">
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                        <label>Suhu</label>
                        <input style="color: white;" type="text" class="form-control" name="suhu_tubuh">
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="{{route('catper')}}" class="btn btn-dark">Cancel</a>

            </form>
        </div>
    </div>
</div>
@endsection
