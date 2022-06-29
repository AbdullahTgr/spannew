<section id="speakers" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>مشاريعنا</h2>
      <p>هنا ابرز ما قدمناة لعملائنا</p>
    </div>

    <div class="row">
{{-- 
      <div class="owl-carousel gallery-carousel">
        <img src="{{ $speaker->photos[0]->getUrl() }}" alt="{{ $speaker->name }}" class="img-fluid">

       
          @foreach($speaker->photos as $photo)
        @endforeach
        </div> --}}


      @foreach($speakers as $speaker)
        <div class="col-lg-4 col-md-6">
          <div class="speaker">
            <img src="{{ $speaker->photos[1]->getUrl() }}" alt="{{ $speaker->name }}" class="img-fluid frf">
            <div class="details">
              <h3><a href="{{ route('speaker', $speaker->id) }}">{{ $speaker->name }}</a></h3>
              <p>{{ $speaker->description }}</p>
              <div class="social">
                @if($speaker->facebook)
                  <a target="_blank" href="{{ $speaker->facebook }}"><i class="fa fa-link"></i></a>
                @endif
                {{-- @if($speaker->facebook)
                  <a href="{{ $speaker->facebook }}"><i class="fa fa-facebook"></i></a>
                @endif
                @if($speaker->linkedin)
                  <a href="{{ $speaker->linkedin }}"><i class="fa fa-linkedin"></i></a>
                @endif --}}
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

</section>
