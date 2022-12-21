@extends('layout/main')
@section('container')
<div class="container" >
    <div class="row g-0">
     <div id="scroll-mod" class="col-sm-12 col-md-7 col-lg-7 col-xl-7 p-3 con-home">
    
        @foreach ($blogs_js as $blog)
        <div class="card mb-3" data-aos="fade-down" >
          <div class="row">
            <figure class="mod-figure">
              <img style="border-radius: 20px;" class="card-img-tops col-4 w-100 p-3" src="{{ asset('cover_images') }}/{{ $blog->cover }}" alt="Card image cap">
            </figure>
          <div class="card-body col-sm-12 col-lg-8">
           <div class="content-mod">
            <a href="blog-detail/{{ $blog->id }}" class="text-decoration-none text-black"> <h5 class="card-title">{{ $blog->title }}</h5></a>
            <div class="card-text">
              {!!  substr(strip_tags($blog->content), 0, 70) !!} ....
            </div>
           
            <div class="card-text ml-5">
              <span class="text-muted" style="font-size: 15px">{{ $blog->views }}</span>
              <i class='fas fa-eye text-muted' style="font-size: 13px"></i>
              <small class="text-muted p-2">{{$blog->created_at->diffForHumans()}}</small>
            </div>
           </div>
          </div>
          </div>
        </div>
         @endforeach
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
              </li>

              @endforeach

            </ul>
          </div>
    </div>
 
    </div>
    
 </div>
@endsection