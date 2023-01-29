@extends('layout/main')
@section('container')
@if ($blogs_detail)
<div class="container">
  <div class="row g-0">
   <div id="scroll-mod" class="col-sm-12 col-md-7 col-lg-7 col-xl-7 p-3">
      <div class="cards mb-3" data-aos="fade-down">
        <div class="row">
          <figure style="width: 100%">
            <img style="border-radius: 20px;" class="card-img-tops col-4 w-100 p-3" src="{{ asset('cover_images') }}/{{ $blogs_detail->cover }}" alt="Card image cap">
          </figure>
        <div class="card-body col-8 ">
          <div class="container">
           <h5 class="card-title">{{ $blogs_detail->title }}</h5>
          <p class="card-text">{!! $blogs_detail->content !!}</p>
          <p class="card-text"><small class="text-muted">{{$blogs_detail->created_at->diffForHumans()}}</small></p>
          </div>
        </div>
        </div>
      </div>
   </div>

  <div class="col-sm-12  col-md-5  col-lg-5 col-xl-5 gx-xl-5">
      <form class="form-inline my-2 my-lg-0 d-flex">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button style="margin-left: 10px" class="btn btn-outline-success my-2 my-sm-0 " type="submit">Search</button>
        </form>

      <div class="card mt-3" style="width: 100%;">
      <div class="p-2">
        <p><b>POPULER</b></p>
      </div>
          <ul class="list-group list-group-flush">
            @foreach($populers as $populer)

            <li class="list-group-item">
              <div class="card mb-3" data-aos="fade-down">
                <div class="row">
                  <figure style="width: 33%">
                    <img style="border-radius: 20px;" class="card-img-tops col-4 w-100 p-3" src="{{ asset('cover_images') }}/{{ $populer->cover }}" alt="Card image cap">
                  </figure>
                <div class="card-body col-8">
                  <h5 class="card-title">{{ $populer->title }}</h5>
                  {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                  <div class="card-text">
                    <span class="text-muted" style="font-size: 15px">{{ $populer->views }}</span>
                    <i class='fas fa-eye text-muted' style="font-size: 13px"></i>
                    <small class="text-muted">{{$populer->created_at->diffForHumans()}}</small>
                  </div>
                </div>
                </div>
              </div>
            </li>

            @endforeach
          </ul>
        </div>
  </div>
  </div>
</div> 

@else
    @include('partials/notfound')
@endif
@endsection