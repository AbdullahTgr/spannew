<section id="venue" class="wow fadeInUp" style="direction: rtl; text-align:right">
    <div class="container-fluid">
      <div class="section-header">
        <h2>مقر الشركة</h2>
        
      </div>
    </div>
  @foreach($venues as $venue)
    <div class="row no-gutters">
      <div class="col-lg-6 venue-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1222.8653269627087!2d30.919526377008562!3d29.899281807173054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458556b731f3cfb%3A0x748d0967771ae0ef!2sSpan%20Software%20Development%20Office!5e0!3m2!1sar!2seg!4v1656495013957!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" style="border:0" allowfullscreen></iframe>
   </div>

      <div class="col-lg-6 venue-info">
        <div class="row justify-content-center">
          <div class="col-11 col-lg-8">
            <h3>{{ $venue->name }}</h3>
            <p>{{ $venue->description }}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid venue-gallery-container">
      <div class="row no-gutters">
        @if($venue->photos)
          @foreach($venue->photos as $photo)
            <div class="col-lg-3 col-md-4">
              <div class="venue-gallery">
                <a href="{{ $photo->getUrl() }}" class="venobox" data-gall="venue-gallery">
                  <img src="{{ $photo->getUrl() }}" alt="" class="img-fluid">
                </a>
              </div>
            </div>
          @endforeach
        @endif
      </div>
    </div>
  @endforeach
</section>
