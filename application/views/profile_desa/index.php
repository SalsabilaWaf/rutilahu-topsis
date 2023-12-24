<?php $this->load->view('template/header_user'); ?>
                    
<div class="card bg-gray-100 mb-4">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img height="220" src="<?= base_url('assets/img/profile/1.jpg'); ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
          <img height="220" src="<?= base_url('assets/img/profile/2.png'); ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
          <img height="220" src="<?= base_url('assets/img/profile/3.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
  <div class="card-body text-dark">
    <h5 class="card-title text-info">Desa Klepu</h5>
    <p class="card-text">
   

    <p class="mb-1">Desa Klepu merupakan salah satu desa yang masuk kedalam Kecamatan Pringsurat, Kabupaten Temanggung, Provinsi Jawa Tengah. 
        </p>
        <p>Desa Klepu memiliki luas wilayah 351 Ha, secara geografis Desa Klepu berada pada ketinggian 550 m dpl dan berjarak 8 km dari ibu kota kecamatan Pringsurat; 20 km dari ibu kota kabupaten Temanggung, dengan batas wilayah sebagai berikut:</p>
        <p class="mb-1 mx-3">1. Sebelah utara Desa	: Soborejo Kecamatan Pringsurat dan Kab. Semarang</p>
        <p class="mb-1 mx-3">2. Sebelah timur		    : Desa Pingit Kecamatan Pringsurat dan Kab. Semarang</p>
        <p class="mb-1 mx-3">3. Sebelah selatan	    : Desa Gowak Kecamatan Pringsurat/p>
        <p class=" mx-3">4. Sebelah barat		    : Desa Pagergunung dan Desa Nglorog Kecamatan Pringsurat</p>
                                     
        <p class="mb-1">Pembagian administratif, Desa Klepu memiliki :</p>
            <p class="mb-1 mx-3">1. 8 Dusun : Krajan, Kaligandu, Tambak Boyo, Pringapus, Ngepoh (Balai Desa), Biyeng, Banjaran / Sekicir, Mungkid</p>
            <p class="mb-1 mx-3">2. 8 Rukun Warga (RW)</p>
            <p class="mb-1 mx-3">3.	29 Rukun Tetangga (RT)</p>
            <p></p>
            <p>Tofografi lahan terbagi atas lahan sawah dan bukan sawah. Lahan bukan sawah dipergunakan untuk bangunan/pekarangan, ladang/tegalan/huma, hutan rakyat, perkebunan negara/rakyat dan lainnya. </p>


    <h5 class="card-text text-dark"><small class="text-muted"><?php date_default_timezone_set("Asia/Jakarta"); echo date("d-M-Y H:i:s")?></small></h5>
  </div>
  </div>
<div class="car-body mb-5">
  <div class="embed-responsive embed-responsive-21by9">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.2915559332655!2d107.66402441450505!3d-7.432954575289937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e66215554d76d31%3A0xb50fc5591e068517!2sKANTOR%20DESA%20WANGUNJAYA!5e0!3m2!1sid!2sid!4v1654548040992!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
<?php $this->load->view('template/footer_user'); ?>