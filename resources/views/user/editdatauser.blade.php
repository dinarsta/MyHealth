@extends('layouts.layout')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit profile</h4>
            <form method="POST" action="{{route('user.update', Auth::user()->id)}}" enctype="multipart/form-data">
              @csrf
              @method('put')
                <div class="row">
                    <div class="col-4">

                      <div class="form-group">
                            <img src="foto/{{Auth::user()->foto}}" alt="FOTO BELUM TERSEDIA" style="height: 7rem; border-radius: 100%" class="mb-1 mx-auto d-block">
                            <label></label>
                            <input type="file" name="foto" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Nama</label>
                            <input value="{{Auth::user()->name}}" type="text" class="form-control" placeholder="Nama lengkap sesuai KTP">
                        </div>

                    </div>

                    <div class="col-8">
                      <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                              <label for="exampleInputEmail3">Email address</label>
                              <input value="{{Auth::user()->email}}" type="email" class="form-control">
                          </div>
                        </div>

                      </div>

                      <div class="row">
                        <div class="form-group">
                            <label for="exampleInputName1">No telepon</label>
                            <input value="{{Auth::user()->no_telpon}}" type="text" class="form-control" placeholder="Nomor telepon">
                        </div>
                      </div>

                      <div class="row">                      
                        <div class="form-group">
                            <label for="exampleInputCity1">NIK</label>
                            <input value="{{Auth::user()->NIK}}" type="text" class="form-control" placeholder="NIK sesuai KTP">
                        </div>
                      </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="{{route('user')}}" class="btn btn-dark">Cancel</a>

            </form>
        </div>
    </div>
</div>
@endsection
