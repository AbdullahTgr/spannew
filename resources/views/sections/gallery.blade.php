<section id="gallery" class="wow fadeInUp">

  <div class="container">
    <div class="section-header">
      <h2>صور</h2>
      <p>صور من بعض اعمال الشركة</p>
    </div>
  </div>
  @foreach($galleries as $gallery)
    <div class="owl-carousel gallery-carousel">
      @foreach($gallery->photos as $photo)
        <a href="{{ $photo->getUrl() }}" class="venobox" data-gall="gallery-carousel"><img style="
          
          max-width: 100%;
    height: auto;
    border: 3px solid #b7b7b7;
    margin-bottom: 7px;
    border-radius: 10px;
            
          
          
          
          " src="{{ $photo->getUrl() }}" alt="{{ $gallery->name }}" title="{{ $gallery->name }}"></a>
      @endforeach
    </div>
  @endforeach
</section>
