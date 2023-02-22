@extends('layout.home')
@section('content')
  <style>
    #outer-grid {
    display: grid;
    grid-template-rows: 1fr ;
    grid-template-columns: 1fr ;
    grid-gap: 10px;
    }
    #outer-grid > div {
      background: #4a3c76;
      color: white;
      font-size: 4vw;
      padding: 0px;
    }
 
    #outer-grid2 > div {
      color: white;
      font-size: 4vw;
      padding: 0px;
    }
    #inner-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-gap: 5px;
    }
    #inner-grid2 {
      display: grid;
      grid-template-columns: 1fr ;
      grid-gap: 63px;
    }
    #inner-grid2 > div {
      
        padding: 34px;
    }
    #inner-grid > div {
      background: #54477c;
      padding: 10px;
    }
  </style>
  <br><br><br><br>
  
    <section style="margin-top: -12px;">
      <div id="outer-grid">
        <div id="inner-grid">
          <div class="enterp my-auto">ENTERPRENEUR</div>
          <div>
            <p class="mat my-auto">Materi yang kami berikan bukanlah hal teknis, tetapi KOMITMEN, INTEGRITAS, BERPIKIR TERBUKA, VISI, arti KERJA KERAS, DAYA TAHAN serta KREATIFITAS.</p>
          </div>
        </div>
      </div>
      <div class="row" style="background-color:#cac6d7 ;">
        <div class="uy" style="padding-right: calc(var(--bs-gutter-x) * .0);
        padding-left: calc(var(--bs-gutter-x) * .0);" >
          <img src="{{ asset('Atlantis-Plus/assets/images/40.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-6 re" style="padding-left: calc(var(--bs-gutter-x) * .0);">
          <img src="{{ asset('Atlantis-Plus/assets/images/37.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-6  py-5">
          <div id="outer-grid2">
            <div id="inner-grid2">
              <div>
                <div class="row py-3">
                  <div class="col-2">
                    <img src="{{ asset('Atlantis-Plus/assets/images/38.png') }}" style="background: linear-gradient(153.43deg, rgba(42, 26, 94, 0.5) 16.67%, rgba(23, 42, 109, 0.145833) 92.62%, rgba(23, 42, 109, 0) 100%); border-radius:10px;" width="110%"  alt="">
                  </div>
                  <div class="col-10">
                    <h6 class="aa">ACTION</h6>
                    <p class="vv">Menerapkan, mengaplikasikan dan mengimplemnetasikan praktek usaha.
                      Aktualisasinya membuat proposal bisnis – mempresentasikan diri.</p>
                  </div>
                </div>
                <div class="row py-3">
                  <div class="col-2">
                    <img src="{{ asset('Atlantis-Plus/assets/images/38.png') }}" style="background: linear-gradient(153.43deg, rgba(42, 26, 94, 0.5) 16.67%, rgba(23, 42, 109, 0.145833) 92.62%, rgba(23, 42, 109, 0) 100%); border-radius:10px;" width="110%"  alt="">
                  </div>
                  <div class="col-10">
                    <h6 class="aa">VISIONER</h6>
                    <p class="vv">Menerapkan, mengaplikasikan dan mengimplemnetasikan praktek usaha.
                      Aktualisasinya membuat proposal bisnis – mempresentasikan diri.</p>
                  </div>
                </div>
                <div class="row py-3">
                  <div class="col-2">
                    <img src="{{ asset('Atlantis-Plus/assets/images/38.png') }}" style="background: linear-gradient(153.43deg, rgba(42, 26, 94, 0.5) 16.67%, rgba(23, 42, 109, 0.145833) 92.62%, rgba(23, 42, 109, 0) 100%); border-radius:10px;" width="110%"  alt="">
                  </div>
                  <div class="col-10">
                    <h6 class="aa">KOMITMEN</h6>
                    <p class="vv">Menerapkan, mengaplikasikan dan mengimplemnetasikan praktek usaha.
                      Aktualisasinya membuat proposal bisnis – mempresentasikan diri.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section style="margin-top: -12px;">
      <div id="outer-grid">
        <div id="inner-grid">
          <div class="enterp my-auto">ENGLISH DAY</div>
          <div>
            <p class="mat my-auto">Materi yang kami berikan bukanlah hal teknis, tetapi KOMITMEN, INTEGRITAS, BERPIKIR TERBUKA, VISI, arti KERJA KERAS, DAYA TAHAN serta KREATIFITAS.</p>
          </div>
        </div>
      </div>
      <div class="row" style="background-color:#cac6d7 ;">
        <div class="uy" style="padding-right: calc(var(--bs-gutter-x) * .0);
        padding-left: calc(var(--bs-gutter-x) * .0);" >
          <img src="{{ asset('Atlantis-Plus/assets/images/40.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-6 re" style="padding-left: calc(var(--bs-gutter-x) * .0);">
          <img src="{{ asset('Atlantis-Plus/assets/images/37.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-6  py-5">
          <div id="outer-grid2">
            <div id="inner-grid2">
              <div>
                <div class="row py-3">
                  <div class="col-2">
                    <img src="{{ asset('Atlantis-Plus/assets/images/38.png') }}" style="background: linear-gradient(153.43deg, rgba(42, 26, 94, 0.5) 16.67%, rgba(23, 42, 109, 0.145833) 92.62%, rgba(23, 42, 109, 0) 100%); border-radius:10px;" width="110%"  alt="">
                  </div>
                  <div class="col-10">
                    <h6 class="aa">ACTION</h6>
                    <p class="vv">Menerapkan, mengaplikasikan dan mengimplemnetasikan praktek usaha.
                      Aktualisasinya membuat proposal bisnis – mempresentasikan diri.</p>
                  </div>
                </div>
                <div class="row py-3">
                  <div class="col-2">
                    <img src="{{ asset('Atlantis-Plus/assets/images/38.png') }}" style="background: linear-gradient(153.43deg, rgba(42, 26, 94, 0.5) 16.67%, rgba(23, 42, 109, 0.145833) 92.62%, rgba(23, 42, 109, 0) 100%); border-radius:10px;" width="110%"  alt="">
                  </div>
                  <div class="col-10">
                    <h6 class="aa">VISIONER</h6>
                    <p class="vv">Menerapkan, mengaplikasikan dan mengimplemnetasikan praktek usaha.
                      Aktualisasinya membuat proposal bisnis – mempresentasikan diri.</p>
                  </div>
                </div>
                <div class="row py-3">
                  <div class="col-2">
                    <img src="{{ asset('Atlantis-Plus/assets/images/38.png') }}" style="background: linear-gradient(153.43deg, rgba(42, 26, 94, 0.5) 16.67%, rgba(23, 42, 109, 0.145833) 92.62%, rgba(23, 42, 109, 0) 100%); border-radius:10px;" width="110%"  alt="">
                  </div>
                  <div class="col-10">
                    <h6 class="aa">KOMITMEN</h6>
                    <p class="vv">Menerapkan, mengaplikasikan dan mengimplemnetasikan praktek usaha.
                      Aktualisasinya membuat proposal bisnis – mempresentasikan diri.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section style="margin-top: -12px;">
      <div id="outer-grid">
        <div id="inner-grid">
          <div class="enterp my-auto">CHARACTER</div>
          <div>
            <p class="mat my-auto">CARA BERPIKIR dan BERPERILAKU yang menjadi ciri khas tiap individu untuk hidup dan bekerjasama.
            </p>
          </div>
        </div>
      </div>
      <div class="row" style="background-color:#cac6d7 ;">
        <div class="uy" style="padding-right: calc(var(--bs-gutter-x) * .0);
        padding-left: calc(var(--bs-gutter-x) * .0);" >
          <img src="{{ asset('Atlantis-Plus/assets/images/40.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-6 re" style="padding-left: calc(var(--bs-gutter-x) * .0);">
          <img src="{{ asset('Atlantis-Plus/assets/images/37.png') }}" width="100%" alt="">
        </div>
        <div class="col-md-6  py-5">
          <div id="outer-grid2">
            <div id="inner-grid2">
              <div>
                <div class="row py-3">
                  <div class="col-2">
                    <img src="{{ asset('Atlantis-Plus/assets/images/38.png') }}" style="background: linear-gradient(153.43deg, rgba(42, 26, 94, 0.5) 16.67%, rgba(23, 42, 109, 0.145833) 92.62%, rgba(23, 42, 109, 0) 100%); border-radius:10px;" width="110%"  alt="">
                  </div>
                  <div class="col-10">
                    <h6 class="aa">ACTION</h6>
                    <p class="vv">Menerapkan, mengaplikasikan dan mengimplemnetasikan praktek usaha.
                      Aktualisasinya membuat proposal bisnis – mempresentasikan diri.</p>
                  </div>
                </div>
                <div class="row py-3">
                  <div class="col-2">
                    <img src="{{ asset('Atlantis-Plus/assets/images/38.png') }}" style="background: linear-gradient(153.43deg, rgba(42, 26, 94, 0.5) 16.67%, rgba(23, 42, 109, 0.145833) 92.62%, rgba(23, 42, 109, 0) 100%); border-radius:10px;" width="110%"  alt="">
                  </div>
                  <div class="col-10">
                    <h6 class="aa">VISIONER</h6>
                    <p class="vv">Menerapkan, mengaplikasikan dan mengimplemnetasikan praktek usaha.
                      Aktualisasinya membuat proposal bisnis – mempresentasikan diri.</p>
                  </div>
                </div>
                <div class="row py-3">
                  <div class="col-2">
                    <img src="{{ asset('Atlantis-Plus/assets/images/38.png') }}" style="background: linear-gradient(153.43deg, rgba(42, 26, 94, 0.5) 16.67%, rgba(23, 42, 109, 0.145833) 92.62%, rgba(23, 42, 109, 0) 100%); border-radius:10px;" width="110%"  alt="">
                  </div>
                  <div class="col-10">
                    <h6 class="aa">KOMITMEN</h6>
                    <p class="vv">Menerapkan, mengaplikasikan dan mengimplemnetasikan praktek usaha.
                      Aktualisasinya membuat proposal bisnis – mempresentasikan diri.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection