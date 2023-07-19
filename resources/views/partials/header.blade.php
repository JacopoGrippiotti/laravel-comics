    <header>
      <div class="container">
        <div class="logo-img" >
            <img src="{{ Vite::asset($logoImage) }}" alt="">
        </div>
        <ul class="nav-bar">
            @foreach ( $navItems as $navItem )  
              <li >
                  <a href="#">
                    {{$navItem-> item}}
                  </a>
              </li>
             @endforeach
        </ul>
      </div>
    </header>