<section id="about" style="direction: rtl; text-align:right">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>عن الشركة</h2>
        <p>{{ $settings['about_description'] ?? '' }}</p>
      </div>
      <div class="col-lg-3">
        <h3>تطبيقات الجوال</h3>
        <p>{!! $settings['about_where'] ?? '' !!}</p>
      </div>
      <div class="col-lg-3">
        <h3>مواقع الكترونية</h3>
        <p>{!! $settings['about_when'] ?? '' !!}</p>
      </div>
    </div>
  </div>
</section>
