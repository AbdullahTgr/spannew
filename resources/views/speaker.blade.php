@extends('layouts.main')

@section('content')
<main id="main" class="main-page">
  <section id="speakers-details" class="wow fadeIn">
    <div class="container">
      <div class="section-header">
        <h2>نبذة عن المشروع</h2>
        <p>...</p>
      </div>

      <div class="row">

     
      
        <div class="col-md-6">
          <img src="{{ $speaker->photos[0]->getUrl() }}" alt="{{ $speaker->name }}" class="img-fluid">
        </div>
        <div class="col-md-6">
          @foreach ($speaker->photos as $photo)
            <img src="{{ $photo->getUrl() }}"  class="img-fluid col-xs-4" style="
                max-width: 100%;
    height: auto;
    border: 3px solid #b7b7b7;
    margin-bottom: 7px;
    border-radius: 10px;
            
            " >
          @endforeach
        </div>

        <div class="col-md-6">
          <div class="details">
            <h2>{{ $speaker->name }}</h2>
            <div class="social">
              <a href="{{ $speaker->facebook }}"><i class="fa fa-link"></i></a>
            </div>
            <p>{{ $speaker->full_description }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection