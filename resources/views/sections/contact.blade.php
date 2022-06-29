<section id="contact" class="section-bg wow fadeInUp"  >

  <div class="container">

    <div class="section-header">
      <h2>تواصل معنا</h2>
      <p>يسعدنا اتصالكم - سنقوم بالرد عليكم فورا </p>
    </div>

    <div class="row contact-info" >

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>العنوان</h3>
          <address>{{ $settings['contact_address'] }}</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>رقم التيليفون</h3>
          <p><a href="tel:{{ str_replace(' ', '', $settings['contact_phone'] ?? '') }}">{{ $settings['contact_phone'] ?? '' }}</a></p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>الايميل</h3>
          <p><a href="mailto:{{ $settings['contact_email'] ?? '' }}">{{ $settings['contact_email'] ?? '' }}</a></p>
        </div>
      </div>

    </div>

    <div class="form"  style="direction: rtl; text-align:right">
      <div id="sendmessage">شكرا لك : تم إرسال الرسالة بنجاح</div>
      <div id="errormessage"></div>
      <form action="" method="post" role="form" class="contactForm">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="اسمك" data-rule="minlen:4" data-msg="اكتب علي الاقل 4 احرف" />
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-6">
            <input type="email" class="form-control" name="email" id="email" placeholder="ايميلك" data-rule="email" data-msg="ادخل ايميل صحيح" />
            <div class="validation"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="الموضوع" data-rule="minlen:4" data-msg="اكتب 8 احرف" />
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="اكتب لنا شيئا من فضلك" placeholder="الرسالة"></textarea>
          <div class="validation"></div>
        </div>
        <div class="text-center"><button type="submit">ارسل الرسالة</button></div>
      </form>
    </div>

  </div>
</section><!-- #contact -->
