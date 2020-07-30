<?php 
define('BASEPATH', dirname(__FILE__));
include 'config/function.php';
include 'layout/header.php';
$url_indo = covid19("https://api.kawalcorona.com/indonesia/");
$url_prov = covid19("https://api.kawalcorona.com/indonesia/provinsi/");
$url_bntnnews = covid19("https://www.bantennews.co.id/category/kesehatan/");
$data_indo =json_decode($url_indo, TRUE);
$data_prov = json_decode($url_prov, TRUE);
foreach ($data_indo as $dataid) {
}
 ?>
 <div class="main-content">
    <!-- Header -->
    <div class="header py-7 py-lg-8 pt-lg-4 bg-primary">
      <div class="container">
        <div class="header-body text-center mb-4">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8 px-5 mt--6">
              <h1 class="text-white">KazePay - Coronavirus Indonesia</h1>
              <p class="text-lead text-white">Coronavirus Indonesia Live Data.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-4 mb-3">
          <div class="card border-0 mb-0 bg-danger">
            <div class="card-body px-lg-5">
                <div class="d-flex">
                    <div class="text-white">
                        <p class="text-white mb-0">Total Positif</p>
                        <h1 class="text-white"><?=$dataid['positif'];?></h1>
                        <p class="text-white mb-0"><span class="badge badge-danger">Orang</span></p>
                    </div>
                    <div class="ml-auto">
                        <img src="<?=$baseurl;?>assets/img/emoticon/Positif.png" alt="" width="50" height="50" class="mt-4">
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-3">
          <div class="card border-0 mb-0 bg-success">
            <div class="card-body border-0 px-lg-5">
                <div class="d-flex">
                    <div class="text-white">
                        <p class="text-white mb-0">Total Sembuh</p>
                        <h1 class="text-white"><?=$dataid['sembuh'];?></h1>
                        <p class="text-white mb-0"><span class="badge badge-success">Orang</span></p>
                    </div>
                    <div class="ml-auto">
                        <img src="<?=$baseurl;?>assets/img/emoticon/sembuh.png" alt="" width="55" height="50" class="mt-4">
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-3">
          <div class="card border-0 mb-0 bg-warning">
            <div class="card-body border-0">
                <div class="d-flex">
                    <div class="text-white">
                        <p class="text-white mb-0">Total Meninggal</p>
                        <h1 class="text-white"><?=$dataid['meninggal'];?></h1>
                        <p class="text-white mb-0"><span class="badge badge-warning">Orang</span></p>
                    </div>
                    <div class="ml-auto">
                        <img src="<?=$baseurl;?>assets/img/emoticon/Meninggal.png" alt="" width="50" height="50" class="mt-4">
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-3">
          <div class="card border-0 mb-0 bg-primary">
            <div class="card-body border-0">
                <div class="d-flex">
                    <div class="text-white">
                        <p class="text-white mb-0">Kasus Coronavirus</p>
                        <h1 class="text-white">Indonesia</h1>
                        <p class="text-white mb-0">Live Data</p>
                    </div>
                    <div class="ml-auto">
                        
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-lg-12 col-md-12 mt-4">
            <div class="card border-0">
                <div class="card-body border-0">
                    <div class="text-center">
                        <h1>Data Kasus Coronavirus</h1>
                        <p>Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</p>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>PROVINSI</th>
                                    <th>POSITIF</th>
                                    <th>SEMBUH</th>
                                    <th>MENINGGAL</th>
                                </tr>
                            </thead>
                            <!-- Start -->
                            <tbody>
                                <?php 
                                $no=1;
                                foreach ($data_prov as $data_prov) {
                                    if ($data_prov['attributes']['Provinsi'] == "Banten") {
                                        $type = "success";
                                    }else{
                                        $type = "";
                                    }
                                 ?>
                                <tr class="table-<?=$type;?>">
                                    <td><?=$no++;?></td>
                                    <td><?=$data_prov['attributes']['Provinsi'];?></td>
                                    <td><?=$data_prov['attributes']['Kasus_Posi'];?></td>
                                    <td><?=$data_prov['attributes']['Kasus_Semb'];?></td>
                                    <td><?=$data_prov['attributes']['Kasus_Meni'];?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                            <!-- End -->
                        </table>
                    </div>
                </div>
            </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12 col-md-12 mt-4">
            <div class="card border-0">
                <div class="card-body border-0 pr-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                        <h1>Jaga Kondisi Tubuh Tetap Prima</h1>
                    <p>Tetap jaga kesehatan walaupun sedang berada dirumah. Dan juga tetap jaga kebersihan diri, keluarga dan lingkungan agar terhindar dari Virus.</p>  
                    <div class="text-center">
                    <h3>Hotline Kemenkes</h3>
                    <img src="<?=$baseurl;?>assets/img/kemenkes.png" alt="" width="100">
                    <p><a href="tel:0215210411">021-5210-411</a>
                   Atau <a href="tel:081212123119">081212123119</a></p>
                </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                        <img src="<?=$baseurl;?>assets/img/doc-healt.svg" alt="" width="270">  
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-6 col-md-6 mt-4">
              <div class="card border-0" style="height: 12rem">
                  <div class="card-body border-0 pt-5">
                      <?php 
                      $pecah = explode('<div class="td-block-row">', $url_bntnnews);
                        $pecahlagi = explode('</div>', $pecah[1]);
                        echo $pecahlagi[2];
                       ?>
                   </div>
               </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 col-md-6 mt-4">
              <div class="card border-0" style="height: 12rem">
                  <div class="card-body border-0 pt-5">
                      <?php 
                      $pecah = explode('<div class="td-block-row">', $url_bntnnews);
                        $pecahlagi = explode('</div>', $pecah[2]);
                        echo $pecahlagi[2];
                       ?>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
 <?php include 'layout/footer.php'; ?>
 <!-- By https://github.com/devaxxml/ -->