    <div class="pos-f-t p-2">
        <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-dark p-4" >
            {{-- <h4 class="text-white">Collapsed content</h4>
            <span class="text-muted">Toggleable via the navbar brand.</span> --}}
            <div class="row container bg-dark">
                <div style="height: 70px; border-radius: 10px; cursor:pointer" class="col-sm-12 col-lg-2 m-3 text-center {{ $active === 'Home'? 'bg-primary text-white' :  'bg-white' }}">
                 <a href="/" class="text-decoration-none {{ $active === 'Home'?'text-white':'text-black'}}">
                  <i class='fas fa-home'></i>
                  <strong>HOME</strong>
                 </a>
                 
                </div>

                <div style="height: 70px; border-radius: 10px; cursor:pointer" class="col-sm-12 col-lg-2 m-3 text-center {{ $active === 'javascript'? 'bg-primary text-white' :  'bg-white' }}">
                  <a href="/blog-js" class="text-decoration-none {{ $active === 'javascript'?'text-white':'text-black'}}">
                  <i class='fas fa-language'></i>
                  <strong>JAVASCRIPT</strong>
                  </a>
                </div>

                <div style="height: 70px; border-radius: 10px; cursor:auto" class="col-sm-12 col-lg-2 bg-white m-3 text-center">
                  <i class='fas fa-language'></i>
                  <strong>PYTHON</strong>
                </div>

                <div style="height: 70px; border-radius: 10px; cursor:auto" class="col-sm-12 col-lg-2 bg-white m-3 text-center">
                  <i class='fas fa-language'></i>
                  <strong>PHP</strong>
                </div>

                <div style="height: 70px; border-radius: 10px; cursor:auto" class="col-sm-12 col-lg-2 bg-white m-3 text-center">
                  <i class='fas fa-spinner'></i>
                  <strong>OTHERS</strong>
                </div>
            </div>
          </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
          <button class="navbar-toggler m-3" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
      </div>
      <hr/>