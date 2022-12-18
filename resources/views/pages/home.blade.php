@extends('layout/main')
@section('container')
<div class="container">
    <div class="row g-0">
     <div id="scroll-mod" class="col-sm-12 col-md-7 col-lg-7 col-xl-7 p-3">
    
        @foreach ($blogs as $blog)
        <div class="card mb-3" data-aos="fade-down">
          <div class="row">
            <figure style="width: 33%">
              <img style="border-radius: 20px;" class="card-img-tops col-4 w-100 p-3" src="{{ asset('cover_images') }}/{{ $blog->cover }}" alt="Card image cap">
            </figure>
          <div class="card-body col-8">
            <h5 class="card-title">{{ $blog['title'] }}</h5>
            {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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
              <li class="list-group-item">
                <div class="card mb-3" data-aos="fade-down">
                  <div class="row">
                    <figure style="width: 33%">
                      <img style="border-radius: 20px;" class="card-img-tops col-4 w-100 p-3" src="https://www.kopicoding.com/wp-content/uploads/2020/10/kelilinglingkaran-220x162.png" alt="Card image cap">
                    </figure>
                  <div class="card-body col-8">
                    <h5 class="card-title">Card title Card title Card title Card title Card title</h5>
                    {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="card mb-3" data-aos="fade-down">
                  <div class="row">
                    <figure style="width: 33%">
                      <img style="border-radius: 20px;" class="card-img-tops col-4 w-100 p-3" src="https://www.kopicoding.com/wp-content/uploads/2020/10/kelilinglingkaran-220x162.png" alt="Card image cap">
                    </figure>
                  <div class="card-body col-8">
                    <h5 class="card-title">Card title Card title Card title Card title Card title</h5>
                    {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="card mb-3" data-aos="fade-down">
                  <div class="row">
                    <figure style="width: 33%">
                      <img style="border-radius: 20px;" class="card-img-tops col-4 w-100 p-3" src="https://www.kopicoding.com/wp-content/uploads/2020/10/kelilinglingkaran-220x162.png" alt="Card image cap">
                    </figure>
                  <div class="card-body col-8">
                    <h5 class="card-title">Card title Card title Card title Card title Card title</h5>
                    {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
    </div>
 
    </div>
    
 </div>
@endsection