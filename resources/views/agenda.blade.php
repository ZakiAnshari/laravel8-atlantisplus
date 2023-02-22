@extends('layout.home')
@section('content')
<style>
  *{
    box-sizing: border-box;
  }
  .header {
    border: 1px solid red;
    padding: 0;
    
  }

  .menu {
    width: 60%;
    float: left;
    padding: 0;
    border: 1px solid red;
  }

  .main {
    width: 20%;
    float: left;
    padding: 0;
    border: 1px solid red;
  }
</style>
<br><br><br>
<section >
  <div class="position-relative">
  <div class="left">
    <div class="row">
      <div class="col-6 my-auto text-center">
        <h2 class="text-gallery col-lg">GALLERY AGENDA</h2>
      </div>
      <div class="col-6" style="padding-right: calc(var(--bs-gutter-x) * 0);" >
        <img style="float: right; " src="{{ asset('Atlantis-Plus/assets/images/21.png') }}" width="70%" alt="">
      </div>
    </div>
  </div>
  <img class="position-absolute bottom-0 end-0 img-book " src="{{ asset('Atlantis-Plus/assets/images/20.png') }}" width="27%" alt="">
  <img src="{{ asset('Atlantis-Plus/assets/images/22.png') }}" class="position-absolute start-0 top-0" width="11%" style="margin-top: 15px;" alt="">
  <img src="{{ asset('Atlantis-Plus/assets/images/23.png') }}" class="position-absolute top-50 start-0 py-lg-5 my-5" width="10%"   alt="">
  </div>
</section>

<br><br><br>
<section>
  <div class="container">
    <div class="row ">
      <div class="col-lg-4 col-md-6 kf">
        <div class="card" style="width: 20rem;">
          <img src="{{ asset('Atlantis-Plus/assets/images/Kesenian 1.jpg') }}" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 kf">
        <div class="card" style="width: 20rem;">
          <img src="{{ asset('Atlantis-Plus/assets/images/Kesenian 2.jpg') }}" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 kf">
        <div class="card" style="width: 20rem;">
          <img src="{{ asset('Atlantis-Plus/assets/images/Mendongeng 2.jpg') }}" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 kf">
        <div class="card" style="width: 20rem;">
          <img src="{{ asset('Atlantis-Plus/assets/images/Paskibra.jpg') }}" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 kf">
        <div class="card" style="width: 20rem;">
          <img src="{{ asset('Atlantis-Plus/assets/images/Tenis Meja 2.jpg') }}" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 kf">
        <div class="card" style="width: 20rem;">
          <img src="{{ asset('Atlantis-Plus/assets/images/Story Telling 2.jpg') }}" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 kf">
        <div class="card" style="width: 20rem;">
          <img src="{{ asset('Atlantis-Plus/assets/images/Tenis Meja.jpg') }}" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 kf">
        <div class="card" style="width: 20rem;">
          <img src="{{ asset('Atlantis-Plus/assets/images/O2SN.jpg') }}" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 kf">
        <div class="card" style="width: 20rem;">
          <img src="{{ asset('Atlantis-Plus/assets/images/Speech Contets.jpg') }}" class="card-img-top" alt="...">
        </div>
      </div>
      
    </div>
  </div>
</section>



@endsection