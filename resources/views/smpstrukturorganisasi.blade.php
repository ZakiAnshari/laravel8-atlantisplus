@extends('layout.home')
@section('content')
<style>
  .halaman nav{
    display: inline-block;
    
  }

  .halaman nav ul{
    padding: 0px;
    margin: 0px; 
    list-style: none;
  }
  .halaman nav ul li{
    float: left;
    margin-left: 10px;
  }

  .halaman nav a{
    background-color: #f8f9fa;
    color: black;
    display: block;
    padding: 0 10px;
    line-height: 60px;
    font-size: 20px ;
    text-decoration: none;      
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    letter-spacing: 0.01em;
    color: #8F8F8F;
  }

  nav ul ul {
    display: none;
    position: absolute;
    top: 65px;
  }

  nav ul li:hover > ul {
    display: block;
  }

  .halaman nav ul ul li {
    text-align: center;
    width: 149px;
    float: none;
    display: list-item;
    position: relative;
    
  }

  .halaman nav ul ul ul li {
    position: relative;
    top: -65px;
    left: 139px;
    width: 213px;
    border: 0.5px solid #969696;
    font-size: 200px;
  }

 

</style>
<br><br><br><br>

<section>
  <div class="shotone">
    <div class="row"  >
      <div class="col-md-4 ">
        <img  class="kalic" src="{{ asset('Atlantis-Plus/assets/images/12.png') }}
        " alt="">
      </div>
      <div class="col-md-8 shot" style="background-image: url('{{ asset('Atlantis-Plus/assets/images/8.png') }}');">
        <div class="row space" >
          <div class="col-md-3" ></div>
          <h1 class=" text-center dol ">STRUKTUR ORGANISASI</h1>
          <div class="col-md-9 my-auto " >
            <img  src="{{ asset('Atlantis-Plus/assets/images/9.png') }}" class="position-absolute top-0 end-0 tamb" style="margin-top: 83px;" >
          </div>
        </div>
        <div class="row space" >
          <div class="col-md-3" >
            <img class="bagix" src="{{ asset('Atlantis-Plus/assets/images/11.png') }}"  alt="">
          </div>
          <div class="col-md-9 text-end" >
            <img src="{{ asset('Atlantis-Plus/assets/images/10.png') }}" alt="">
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
<br><br><br>

<section>
  <div class="container ">
    <div class="row" >
      <div class="col-md-12 text-center bopi"  >
        <img src="{{ asset('Atlantis-Plus/assets/images/13.png') }}"  class="img-thumbnail " alt="">
        <div class="text-center "  >
          <img src="{{ asset('Atlantis-Plus/assets/images/16.png') }}"  class=" " style="margin-top: -406px;
          margin-left: -7px;" alt="">
          <img src="{{ asset('Atlantis-Plus/assets/images/17.png') }}"  class=" " style="margin-top: -63px;
          margin-left: -88px;"  alt="">
          <div >
            <h3 class="tulisan" >ZAKI ANSHARI S.KOM</h3>
            <img  src="{{ asset('Atlantis-Plus/assets/images/18.png') }}"  alt=""/>
          </div>
            <h4 class="head mx-auto">Kepala Sekolah</h4>
        </div>
      </div>
    </div>
    <br><br><br><br>
    <div class="row" >
      <div class="col-lg-4 col-md-6 text-center bopi"  >
        <img src="{{ asset('Atlantis-Plus/assets/images/13.png') }}"  class="img-thumbnail " alt="">
        <div class="text-center "  >
          <img src="{{ asset('Atlantis-Plus/assets/images/16.png') }}"  class=" " style="margin-top: -406px;
          margin-left: -7px;" alt="">
          <img src="{{ asset('Atlantis-Plus/assets/images/17.png') }}"  class=" " style="margin-top: -63px;
          margin-left: -88px;"  alt="">
          <div >
            <h3 class="tulisan" >ZAKI ANSHARI S.KOM</h3>
            <img  src="{{ asset('Atlantis-Plus/assets/images/18.png') }}"  alt=""/>
          </div>
            <h4 class="head mx-auto">Kepala Sekolah</h4>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 text-center bopi"  >
        <img src="{{ asset('Atlantis-Plus/assets/images/13.png') }}"  class="img-thumbnail " alt="">
        <div class="text-center "  >
          <img src="{{ asset('Atlantis-Plus/assets/images/16.png') }}"  class=" " style="margin-top: -406px;
          margin-left: -7px;" alt="">
          <img src="{{ asset('Atlantis-Plus/assets/images/17.png') }}"  class=" " style="margin-top: -63px;
          margin-left: -88px;"  alt="">
          <div >
            <h3 class="tulisan" >ZAKI ANSHARI S.KOM</h3>
            <img  src="{{ asset('Atlantis-Plus/assets/images/18.png') }}"  alt=""/>
          </div>
            <h4 class="head mx-auto">Kepala Sekolah</h4>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 text-center bopi"  >
        <img src="{{ asset('Atlantis-Plus/assets/images/13.png') }}"  class="img-thumbnail " alt="">
        <div class="text-center "  >
          <img src="{{ asset('Atlantis-Plus/assets/images/16.png') }}"  class=" " style="margin-top: -406px;
          margin-left: -7px;" alt="">
          <img src="{{ asset('Atlantis-Plus/assets/images/17.png') }}"  class=" " style="margin-top: -63px;
          margin-left: -88px;"  alt="">
          <div >
            <h3 class="tulisan" >ZAKI ANSHARI S.KOM</h3>
            <img  src="{{ asset('Atlantis-Plus/assets/images/18.png') }}"  alt=""/>
          </div>
            <h4 class="head mx-auto">Kepala Sekolah</h4>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 text-center bopi"  >
        <img src="{{ asset('Atlantis-Plus/assets/images/13.png') }}"  class="img-thumbnail " alt="">
        <div class="text-center "  >
          <img src="{{ asset('Atlantis-Plus/assets/images/16.png') }}"  class=" " style="margin-top: -406px;
          margin-left: -7px;" alt="">
          <img src="{{ asset('Atlantis-Plus/assets/images/17.png') }}"  class=" " style="margin-top: -63px;
          margin-left: -88px;"  alt="">
          <div >
            <h3 class="tulisan" >ZAKI ANSHARI S.KOM</h3>
            <img  src="{{ asset('Atlantis-Plus/assets/images/18.png') }}"  alt=""/>
          </div>
            <h4 class="head mx-auto">Kepala Sekolah</h4>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 text-center bopi"  >
        <img src="{{ asset('Atlantis-Plus/assets/images/13.png') }}"  class="img-thumbnail " alt="">
        <div class="text-center "  >
          <img src="{{ asset('Atlantis-Plus/assets/images/16.png') }}"  class=" " style="margin-top: -406px;
          margin-left: -7px;" alt="">
          <img src="{{ asset('Atlantis-Plus/assets/images/17.png') }}"  class=" " style="margin-top: -63px;
          margin-left: -88px;"  alt="">
          <div >
            <h3 class="tulisan" >ZAKI ANSHARI S.KOM</h3>
            <img  src="{{ asset('Atlantis-Plus/assets/images/18.png') }}"  alt=""/>
          </div>
            <h4 class="head mx-auto">Kepala Sekolah</h4>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 text-center bopi"  >
        <img src="{{ asset('Atlantis-Plus/assets/images/13.png') }}"  class="img-thumbnail " alt="">
        <div class="text-center "  >
          <img src="{{ asset('Atlantis-Plus/assets/images/16.png') }}"  class=" " style="margin-top: -406px;
          margin-left: -7px;" alt="">
          <img src="{{ asset('Atlantis-Plus/assets/images/17.png') }}"  class=" " style="margin-top: -63px;
          margin-left: -88px;"  alt="">
          <div >
            <h3 class="tulisan" >ZAKI ANSHARI S.KOM</h3>
            <img  src="{{ asset('Atlantis-Plus/assets/images/18.png') }}"  alt=""/>
          </div>
            <h4 class="head mx-auto">Kepala Sekolah</h4>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 text-center bopi"  >
        <img src="{{ asset('Atlantis-Plus/assets/images/13.png') }}"  class="img-thumbnail " alt="">
        <div class="text-center "  >
          <img src="{{ asset('Atlantis-Plus/assets/images/16.png') }}"  class=" " style="margin-top: -406px;
          margin-left: -7px;" alt="">
          <img src="{{ asset('Atlantis-Plus/assets/images/17.png') }}"  class=" " style="margin-top: -63px;
          margin-left: -88px;"  alt="">
          <div >
            <h3 class="tulisan" >ZAKI ANSHARI S.KOM</h3>
            <img  src="{{ asset('Atlantis-Plus/assets/images/18.png') }}"  alt=""/>
          </div>
            <h4 class="head mx-auto">Kepala Sekolah</h4>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 text-center bopi"  >
        <img src="{{ asset('Atlantis-Plus/assets/images/13.png') }}"  class="img-thumbnail " alt="">
        <div class="text-center "  >
          <img src="{{ asset('Atlantis-Plus/assets/images/16.png') }}"  class=" " style="margin-top: -406px;
          margin-left: -7px;" alt="">
          <img src="{{ asset('Atlantis-Plus/assets/images/17.png') }}"  class=" " style="margin-top: -63px;
          margin-left: -88px;"  alt="">
          <div >
            <h3 class="tulisan" >ZAKI ANSHARI S.KOM</h3>
            <img  src="{{ asset('Atlantis-Plus/assets/images/18.png') }}"  alt=""/>
          </div>
            <h4 class="head mx-auto">Kepala Sekolah</h4>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 text-center bopi"  >
        <img src="{{ asset('Atlantis-Plus/assets/images/13.png') }}"  class="img-thumbnail " alt="">
        <div class="text-center "  >
          <img src="{{ asset('Atlantis-Plus/assets/images/16.png') }}"  class=" " style="margin-top: -406px;
          margin-left: -7px;" alt="">
          <img src="{{ asset('Atlantis-Plus/assets/images/17.png') }}"  class=" " style="margin-top: -63px;
          margin-left: -88px;"  alt="">
          <div >
            <h3 class="tulisan" >ZAKI ANSHARI S.KOM</h3>
            <img  src="{{ asset('Atlantis-Plus/assets/images/18.png') }}"  alt=""/>
          </div>
            <h4 class="head mx-auto">Kepala Sekolah</h4>
        </div>
      </div>
      
    </div>
  </div>
</section>

@endsection