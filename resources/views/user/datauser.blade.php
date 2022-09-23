@extends('layouts.layout')

@section('content')
<section class="vh-20">

    <div class="container py-3 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-10 mb-6 mb-lg-4">
          <div class="card" style="border-radius: .5rem;">
            <div class="row g-0">

              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="{{ Auth::user()->foto }}"alt="INI POTO PROFIL!!!!!" class="img-fluid my-5" style="width: 80px;" />
                <h5>{{ Auth::user()->name }}</h5>
                <i class="fa fa-edit mb-5"></i>
              </div>

              <div class="col-md-8">
                <div class="card-body p-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h5>Email</h5>
                      <p>{{ Auth::user()->email }}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h5>Nomor Telepon</h5>
                      <p>{{ Auth::user()->no_telpon }}</p>
                    </div>
                  </div>
                  <h5>NIK terdaftar</h5>
                  <p>{{ Auth::user()->NIK }}</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

</section>
@endsection