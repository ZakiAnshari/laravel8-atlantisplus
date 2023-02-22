<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('Atlantis-Plus/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Atlantis-Plus//assets/css/responsif.css') }}">
    
    <title>Atlantisplus.sch.id - Creative and Entrepreneur School</title>
    <!-- font goggle -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- logo title bar -->
    <link rel="icon" href="{{ asset('Atlantis-Plus/assets/images/SMK_AES.png') }}" type="image/x-icon">
    <!-- icon bostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  </head>

  <style>
   
    .oren{
      width: 57%;
      margin-top: -90px;
    }

    #outer-grid {
      display: grid;

      grid-template-columns: 1fr 1fr;
      grid-gap: 10px;
    }
  
    #inner-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-gap: 50px;
    }
    #inner-gridtwo {
      display: grid;
      grid-template-columns: 1fr ;
      
    }
    #inner-grid > div {
      
      padding: 10px;
    }

    
  </style>


  
  <body >
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
          <div class="container">
            <a href="/" class="logo">
              <img src="{{ asset('Atlantis-Plus/assets/images/atlantis.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <div class="halaman mx-auto">
                <nav >
                  <ul  >
                    <li ><a href="/"> Home</a></li>
                    <li><a href="#">  Sekolah <i class="bi bi-arrow-down-short m-1"></i></a >
                      <ul>
                        <li><a href="#" style="border-top: 3px solid #002198;">SMP</a>
                          
                          <ul>
                            <li><a href="/smpkurikulum" style="border-top: 3px solid #002198;" >Kurikulum</a></li>
                            <li><a href="/smpkeunggulan">Keunggulan</a></li>
                            <li><a href="/smpprestasi">Prestasi</a></li>
                            <li><a href="/smpstrukturorganisasi">Struktur Organisasi</a></li>
                            <li><a href="/agenda">Agenda</a></li>
                            <li><a href="#">Ekstrakurikuler</a></li>
                            <li><a href="#">Fasilitas</a></li>
                          </ul>
  
                        </li>
                        <li><a href="#">SMK</a>
                        
                          <ul>
                            <li><a href="#" style="border-top: 3px solid #002198;" >Kurikulum</a></li>
                            <li><a href="#">Keunggulan</a></li>
                            <li><a href="#">Prestasi</a></li>
                            <li><a href="#">Jurusan</a></li>
                            <li><a href="#">Agenda</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="bottom2">
                <a href="/pendaftaran"><button class="button-primary mx-2">Daftar</button></a>
                <a href="/login"><button class="button-secondary mx-2" >Login</button></a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

{{-- content --}}
@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>