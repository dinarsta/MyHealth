@extends('layouts.layout')
@section('content')
<h1>Dashboard </h1>
<div class="row">
  <div class="col-xl-6 col-sm-6">
  
    <div class="grid-margin stretch-card">
      <div class="card">
        <a href="{{route('catper')}}" style="text-decoration: none; color: #fff;">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h4>History Perjalanan</h4>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-info">
                    <span class="mdi mdi-airplane"></span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="grid-margin stretch-card">
      <div class="card">
        <a href="{{route('catper.new')}}" style="text-decoration: none; color: #fff;">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h4>Mulai Perjalanan</h4>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-warning">
                    <span class="mdi mdi-grease-pencil"></span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="grid-margin stretch-card">
      <div class="card">
        <a href="{{route('tableuser')}}" style="text-decoration: none; color: #fff;">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h4>Data User</h4>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success">
                    <span class="mdi mdi-account"></span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

  </div>


  <div class="col-xl-6 col-sm-6">
    <div class="grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Info Covid 19</h4>
        <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
          <div class="item">
            <img src="{{asset('attribute/covid1 (1).jpg')}}" alt="" style="height: 50vh; margin-buttom:16rem; ">
            <h3 class="mt-3">Vaksin Covid 19</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam ad similique ducimus soluta repudiandae alias natus ea nemo molestias libero ipsa expedita, dolor est voluptas enim. Illo ipsum fugiat a.</p>
             <a href="#" class="btn btn-primary"> Info selengkapnya</a>
          </div>
          <div class="item">
            <img src="{{asset('attribute/covid1 (2).jpg')}}" alt="" style="height: 50vh;">
            <h3 class="mt-3">Pentingnya Handsanitizer</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam necessitatibus eaque quasi dolore nulla minus voluptatem non molestiae totam? Iure inventore rem sequi vitae porro accusamus animi voluptatem, ipsa explicabo?</p>
             <a href="#" class="btn btn-primary"> Info selengkapnya</a>
          </div>
          <div class="item">
            <img src="{{asset('attribute/covid1 (3).jpg')}}" alt="" style="height: 50vh;">
            <h3 class="mt-3">Membantu Pelacakan untuk Menghentikan Penyebaran COVID-19</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia ipsa nam, autem in voluptatibus id accusantium commodi quos accusamus deleniti inventore atque doloribus maiores impedit blanditiis? Ut quidem sint itaque!</p>
           <a href="#" class="btn btn-primary"> Info selengkapnya</a>
          </div>
          <div class="item">
            <img src="{{asset('attribute/antigen.jpg')}}" alt="" style="height: 50vh;">
            <h3 class="mt-3">Pemeriksaan Kesehatan</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, doloribus earum aut excepturi saepe odit inventore accusantium, totam sed mollitia blanditiis? Modi ratione dolores est, expedita quo corrupti cupiditate cum?</p>
          <a href="#" class="btn btn-primary"> Info selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  </div>

  {{-- API DATA COVID (|TIDAK JADI|) --}}
  {{-- <div class="container">
    <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Positif</th>
                <th scope="col">Sembuh</th>
                <th scope="col">Meninggal</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($jumlah as $datas)   
              <tr>
                <th scope="row">1</th>
                <td>{{ $datas['attributes']['Provinsi'] }}</td>
                <td>{{ $datas['attributes']['Kasus_Posi'] }}</td>
                <td>{{ $datas['attributes']['Kasus_Semb'] }}</td>
                <td>{{ $datas['attributes']['Kasus_Meni'] }}</td>
              </tr>
            @endforeach 
            </tbody>
          </table>
</div> --}}
<style>
  .btn{
background-color: transparent;
border: 2px solid white;
}

</style>
  
@endsection


