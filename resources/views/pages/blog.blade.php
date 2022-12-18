@extends('layout/main')
@section('container')
<div class="container">
    <div class="row g-0">
     <div class="col-sm-12 col-md-7 col-lg-7 col-xl-7">
         @foreach ($blogs as $blog)
         <h3>Judul Blog</h3>
         {!! $blog['content'] !!}
         @endforeach
     </div>
 
 
    <div class="col-sm-12  col-md-5  col-lg-5 col-xl-5 gx-xl-5">

        <form class="form-inline my-2 my-lg-0 d-flex">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button style="margin-left: 10px" class="btn btn-outline-success my-2 my-sm-0 " type="submit">Search</button>
          </form>

        <div class="card mt-3" style="width: 100%;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
          </div>
    </div>
 
    </div>
    
 </div>
@endsection