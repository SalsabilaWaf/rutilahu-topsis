<?php $this->load->view('template/header_user'); ?>


<div class="card bg-gray-100 mb-4">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img height="220" src="<?= base_url('assets/img/profile/3.jpg'); ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
          <img height="220" src="<?= base_url('assets/img/profile/2.png'); ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
          <img height="220" src="<?= base_url('assets/img/profile/1.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
</div>


<!-- Beranda -->
<div class="card shadow mb-4">
    <a href="#collapseCardExample" class="d-block card-header py-2" data-toggle="collapse"
        role="button" aria-expanded="true" aria-controls="collapseCardExample">
        <h6 class="m-0 font-weight-bold text-info">Notice</h6>
    </a>
    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample">
        <div class="card-body text-dark">
        Selamat Datang di Sistem Pendukung Keputusan Penerima Dana Bantuan Rumah Tidak Layak Huni Desa Klepu
        Decision Support System(DSS) Penerima Dana Bantuan Rutilahu.
            </h4> Sistem Pendukung Keputusan</> atau  Decision Support System(DSS)  
             Penerima Dana Bantuan Rumah tidak Layak Huni
            <p class="mb-0">Desa Klepu Kecamatan Pringsurat
            Kabupaten Temanggung. SPK Rutilahu ini merupakan sistem yang digunakan untuk memperoleh </p>
            solusi dalam menentukan penerima dana bantuan yang cepat dan tepat.
            </p>  
                
        </p> Sistem ini menggunakan metode <i >Technique for Order Preference by Similarity to Ideal Solution</i> (TOPSIS).
            <p>
                
            </p> 
        
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-2">
                <h6 class="m-0 font-weight-bold text-info">
                    <i class="fas fa-fw fa-eye"></i> 
                    <span>Sistem Pendukung Keputusan</span></h6>
            </div>
            <div class="card-body text-dark">
            Sistem Pendukung Keputusan (SPK) 
            merupakan suatu sistem informasi spesifik yang ditujukan untuk membantu manajemen 
            dalam mengambil keputusan yang berkaitan dengan persoalan 
            yang bersifat semi terstruktur. 
            <a class="text-info" href="<?= base_url('Beranda/spk'); ?>" ><i>Selengkapnya..</i></a> 
            </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="card shadow mb-1">
            <div class="card-header py-2">
                <h6 class="m-0 font-weight-bold text-info"><i class="fas fa-fw fa-eye"></i> 
                    <span>Metode TOPSIS</span></h6>
            </div>
            <div class="card-body text-dark">
                Metode TOPSIS (Technique for Order Preference by Similarity to Ideal Solution) adalah metode pengambilan keputusan multikriteria yang didasarkan pada konsep jarak terdekat dari solusi ideal positif dan terjauh dari solusi ideal negatif. Solusi ideal positif adalah solusi yang memiliki nilai tertinggi untuk semua kriteria yang diinginkan. Solusi ideal negatif adalah solusi yang memiliki nilai terendah untuk semua kriteria yang diinginkan. 
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-2">
                <h6 class="m-0 font-weight-bold text-info"><i class="fas fa-fw fa-eye"></i> 
                <span>Hasil Akhir</span></h6>
            </div>
            <div class="card-body text-dark">
                Hasil akhirnya adalah menampilkasn solusi dari hasil evaluasi berupa perangkingan yang diurutkan dari nilai tertinggi ke nilai terendah. 
               
            </div>
        </div>
    </div>
</div>





<?php $this->load->view('template/footer_user'); ?>