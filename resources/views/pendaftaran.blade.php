@extends('layout.home')

@section('content')
@include('sweetalert::alert')

<section>
  <div class="container">
    <div class="row">
     
      <form action="add" method="post" id="edit" >

      

        @csrf
        <h4 class="uppercase space30"><b>IDENTITAS SAYA</b></h4>

        <div class="alert">
          <b>TAHAPAN PENDAFTARAN</b><br>
          <br>1. Format isian formulir ini sesuai dengan arahan sistem pendataan di Kemendikbud, Aplikasi Dapodik.
          <br>2. Mengisi kolom formulir dengan LENGKAP, DATA CALON PESERTA DIDIK BARU, ORANGTUA/WALI.
          <br>3. Setelah melakukan pengisian, check kembali data apakah sudah benar, lalu klik DAFTAR.
          <br>4. Setelah sukses malakukan pendaftaran, silakan cek email yang telah didaftarkan untuk melihat no pendaftaran.
        </div>
        <div class="container">
          <div class="mt-5 mb-5">
            <label for="inputAddress" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="inputAddress" placeholder="Nama">
            <span style="color: red">@error('nama'){{ $message }}
            @enderror</span>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="inputState" class="form-label">Jenis Kelamin</label>
                <select name="jeniskelamin" id="inputState" class="form-select">
                  <option selected>Pilih...</option>
                  <option>Laki-Laki</option>
                  <option>Perempuan</option>
                </select>
               
              </div>
    
              <div class="form-group">
                <label for="inputState" class="form-label">Agama</label>
                <select name="agama" id="inputState" class="form-select">
                  <option selected>Pilih Agama</option>
                  <option>Islam</option>
                  <option>Kristen</option>
                  <option>dll</option>
                </select>
              </div>

              <div class="form-group">
                <label for="inputAddress" class="form-label">Nama Sekolah Asal</label>
                <input  name="namasekolahasal" type="text" class="form-control" id="inputAddress" placeholder="Asal Sekolah">
                
              </div>
    
              <div class="form-group">
                <label for="inputAddress" class="form-label">No.Telp/Handphone Siswa</label>
                <input type="number" name="notelponsiswa" class="form-control" id="inputAddress" placeholder="No. Telp/Handphone">
              </div>
            </div>
            
            <div class="col-lg-6">
              <div class="form-group">
                <label for="inputAddress" class="form-label">E-mail siswa/wali</label>
                <input type="text" name="emailsiswa" class="form-control" id="inputAddress" placeholder="Email">
              </div>
        
              <div class="form-group">
                <label for="inputState" class="form-label">Jenjang pendidikan yang dituju</label>
                <select name="jenjangpendidikan" id="inputState" class="form-select">
                  <option selected>Pilih</option>
                  <option>SMP</option>
                  <option>SMK</option>
                </select>
              </div>

              <div class="form-group">
                <label for="inputAddress" class="form-label">Nama Orangtua/Wali (Ayah/Ibu)</label>
                <input  name="namaortu" type="text" class="form-control" id="inputAddress" placeholder="Nama Wali">
              </div>

              <div class="form-group">
                <label for="inputAddress" class="form-label">No. Telp Orangtua/Wali (Ayah/Ibu)</label>
                <input name="notelponortu" type="number" class="form-control" id="inputAddress" placeholder="No. Telp Wali">
              </div>
            </div>
          </div>
        </div>
        <div class="daftar">
          <button type="submit"  class=" button-tree">Daftar</button>
        </div>
      </form>
    </div>
  </div>
</section>

@endsection