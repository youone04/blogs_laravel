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
                  <a href="/blog-kategori/javascript" class="text-decoration-none {{ $active === 'javascript'?'text-white':'text-black'}}">
                  <i class='fas fa-language'></i>
                  <strong>JAVASCRIPT</strong>
                  </a>
                </div>

                <div style="height: 70px; border-radius: 10px; cursor:auto" class="col-sm-12 col-lg-2 m-3 text-center {{ $active === 'python'? 'bg-primary text-white' :  'bg-white' }}">
                  <a href="/blog-kategori/python" class="text-decoration-none {{ $active === 'python'?'text-white':'text-black'}}">
                    <i class='fas fa-language'></i>
                    <strong>PYTHON</strong>
                   </a>
                </div>

                <div style="height: 70px; border-radius: 10px; cursor:auto" class="col-sm-12 col-lg-2 m-3 text-center {{ $active === 'php'? 'bg-primary text-white' :  'bg-white' }}">
                  <a href="/blog-kategori/php" class="text-decoration-none {{ $active === 'php'?'text-white':'text-black'}}">
                    <i class='fas fa-language'></i>
                    <strong>PHP</strong>
                  </a>
                </div>

                <div style="height: 70px; border-radius: 10px; cursor:auto" class="col-sm-12 col-lg-2 m-3 text-center {{ $active === 'others'? 'bg-primary text-white' :  'bg-white' }}">
                  <a href="/blog-kategori/others" class="text-decoration-none {{ $active === 'others'?'text-white':'text-black'}}">
                    <i class='fas fa-language'></i>
                    <strong>OHTERS</strong>
                  </a>
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