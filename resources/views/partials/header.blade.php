<header id="header"@if(Route::current()->getName() != 'home') class="header-fixed"@endif>
  <div class="container">

    <div id="logo" class="pull-left">
      <h1>
        <a href="{{ route('home') }}#intro">
          <div class="col-lg-3 col-md-6 footer-info">
            <img src="{{url('img/logo.png')}}" alt="TheEvenet">
            
          </div>
          
        </a>
      </h1>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#intro">الرئيسية</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#about">عنا</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#speakers">مشاريعنا</a></li>
        {{-- <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#schedule">Schedule</a></li> --}}
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#venue">مقر الشركة</a></li>
        {{-- <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#hotels">Hotels</a></li> --}}
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#gallery">صور</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#supporters">عملاؤنا</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#contact">تواصل</a></li>
        
        <li class="buy-tickets"><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#buy-tickets">خدماتنا</a></li>
      </ul>
    </nav>
  </div>
</header>
