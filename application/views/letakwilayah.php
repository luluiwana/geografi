

<!DOCTYPE html>
<html lang="en">
     <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css">
	    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
   <style>
      .h3 {
      font-weight: bold;
      }
      .tab-content {
      padding-left: 30px;
      padding-right: 30px;
      }
      p {
      text-indent: 30px;
      text-align:justify;
      }
      .nav-tabs > li.active > a,
      .nav-tabs > li.active > a:hover,
      .nav-tabs > li.active > a:focus {
      color: #000;
      background-color: #ffffff;
      border: 1px solid #dddddd;
      border-bottom-color: transparent;
      cursor: default;
      font-weight: bold;
      }
	   #image-map {
      width: 70%%;
      height: 500px;
      border: 1px solid #ccc;
      margin-bottom: 10px;
    }
   </style>

   <body>
      <!-- container section start -->
      <section id="container">
         <!--main content start-->
         <section id="main-content">
            <section class="wrapper">
               <div class="tab-content">
                  <div id="home" class="tab-pane fade in active ">
                     <h3>LETAK ASTRONOMIS INDONESIA</h3>
                     <div class="deskripsi" panel>
                        <span class="label label-primary" style="18px">6&#176; LU - 11&#176; LS dan 95&#176; BT - 141&#176; BT</span>
                        <br>
                        <br>
                        <div class="col-md-9" id="image-map"> 
						
                           <br>
						       <script>
    // Using leaflet.js to pan and zoom a big image.
    // See also: http://kempe.net/blog/2014/06/14/leaflet-pan-zoom-image.html

    // create the slippy map
    var map = L.map('image-map', {
      minZoom: 1,
      maxZoom: 6,
      center: [0, 0],
      zoom: 3.5,
      crs: L.CRS.Simple
    });

    // dimensions of the image
    var w = 2000,
        h = 1135,
        url = "<?php echo base_url('img/zona-waktu.png') ?>";

    // calculate the edges of the image, in coordinate space
    var southWest = map.unproject([0, h], map.getMaxZoom()-1);
    var northEast = map.unproject([w, 0], map.getMaxZoom()-1);
    var bounds = new L.LatLngBounds(southWest, northEast);
	var marker = L.marker([-20, 20]).addTo(map);
	var markerwita = L.marker([-20, 35]).addTo(map);
	var markerwit = L.marker([-20, 50]).addTo(map);
	marker.bindPopup("<b>WIB</b><br> Meliputi keseluruhan Pulau Jawa, Sumatera, Provinsi Kalimantan Barat dan Provinsi Kalimantan Tengah").openPopup();
	markerwita.bindPopup("<b>WITA</b><br> Meliputi Provinsi Kalimantan Timur, Kalimantan Barat, Provinsi Bali, NTB, NTT, dan seluruh Provinsi di Sulawesi").openPopup();
	markerwit.bindPopup("<b>WIT</b><br> Meliputi seluruh provinsi di Papua, Maluku, dan Maluku Utara").openPopup();

    // add the image overlay, 
    // so that it covers the entire map
    L.imageOverlay(url, bounds).addTo(map);

    // tell leaflet that the map is exactly as big as the image
    map.setMaxBounds(bounds);
    </script>
                        </div>
                        <br>
                        <div class="col-md-3" id="">
                           <table class="table">
                              <tr align="left" valign="top">
                                 <td><img src="<?php echo base_url('img/sun.png')?>" alt="" border="0" width="30" height="" /></td>
                                 <td>Menyebabkan Indonesia beriklim tropis antara 23,5&#176; LU dan 23,5&#176; LS. Intensitas penyinaran matahari tinggi.</td>
                              </tr>
                              <tr align="left" valign="top">
                                 <td><img src="<?php echo base_url('img/cloud.png')?>" alt="" border="0" width="30" height="" /></td>
                                 <td>Curah hujan yang tinggi (700 mm -7000 mm) pertahun.</td>
                              </tr>
                              <tr align="left" valign="top">
                                 <td><img src="<?php echo base_url('img/mountain.png')?>" alt="" border="0" width="30" height="" /></td>
                                 <td>Mempengaruhi proses erosi, sedimentasi, pelapukan batuan dan pembentukan tanah lebih intensif</td>
                              </tr>
                              <tr align="left" valign="top">
                                 <td><img src="<?php echo base_url('img/tree.png')?>" alt="" border="0" width="30" height="" /></td>
                                 <td>Keanekaragaman flora dan fauna.</td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div id="menu1" class="tab-pane fade">
                     <h3>LETAK GEOGRAFIS INDONESIA </h3>
                     <br>
                     <div class="col-md-9" id=""> <img src="<?php echo base_url('img/letak-geografis.jpg')?>" class="img-responsive img-thumbnail" style="width:100%">
                        <br>
                     </div>
                     <div class="col-md-3" id="">
                        <ul class="list-group">
                           <li class="list-group-item">Berada di Kawasan Asia Tenggara </li>
                           <li class="list-group-item">Letak Geografis, berada di antara Benua Asia dan Benua Australia serta di antara Samudera Hindia dan Samudera Pasifik</li>
                           <li class="list-group-item">Indonesia memiliki 17 ribu pulau dan Panjang pesisir 108.000 km</li>
                        </ul>
                     </div>
                  </div>
                  <div id="menu2" class="tab-pane fade">
                     <h3>LETAK GEOLOGIS INDONESIA </h3>
                     <div class="col-md-9" id=""> <img src="<?php echo base_url('img/letak-geologis.jpg')?>" class="img-responsive img-thumbnail" style="width:100%">
                        <br>
                     </div>
                     <div class="col-md-3" id="">
                        <p>Indonesia merupakan tempat pertemuan tiga lempeng tektonik yaitu lempeng Lempeng Eurasia, Indo-Australia, dan Pasifik.  Menyebabkan Indonesia dilalui oleh dua jalur pegunungan muda dunia.
                        <ol>
                           <li>Pegunungan Mediterania di barat </li>
                           <li>Pegunungan Sirkum Pasifik di timur. </li>
                        </ol>
                        </p>
                        <table class="table">
                           <tr align="left" valign="top">
                              <td><img src="<?php echo base_url('img/geologis-map.png')?>" style="width:40px;"></td>
                              <td>Terdiri atas dua buah daratan luas yaitu Dangkalan Sunda dan Dangkalan Sahul</td>
                           </tr>
                           <tr align="left" valign="top">
                              <td><img src="<?php echo base_url('img/geologis-mountain.png')?>" style="width:40px;"></td>
                              <td>Indonesia berbentuk kepulauan mempunyai beberapa jalur pegunungan berisikan vulkan aktif 70 buah, istirahat 115 buah dan tidak aktif 400 buah.</td>
                           </tr>
                        </table>
                     </div>
                  </div>
                  <div id="menu3" class="tab-pane fade">
                     <h3>LETAK SOSIAL- EKONOMI INDONESIA</h3>
                     <div class="row" id="">
                        <div class="col-md-6" id="">
                           <table class="table">
                              <tr align="left" valign="top">
                                 <td>Indonesia berada di persimpangan yang menghubungkan antara daratan Asia dan Australia yang memungkinkan dilalui arus dan transaksi perdagangan dunia.</td>
                              </tr>
                              <tr align="left" valign="top">
                                 <td>Aktivitas tersebut terbukti pada sejarah perdagangan Indonesia saat masih dijajah pada 15 abad lalu. </td>
                              </tr>
                           </table>
                        </div>
                        <div class="col-md-6" id="">
                           <img src="<?php echo base_url('img/sosialekonomi1.jpg')?>" class="img-responsive img-thumbnail">
                        </div>
                     </div>
                     <div class="row" id="">
                        <div class="col-md-6" id="">
                           <img src="<?php echo base_url('img/sosialekonomi2.jpg')?>" class="img-responsive img-thumbnail">
                        </div>
                        <div class="col-md-6" id="">
                           <table class="table">
                              <tr align="left" valign="top">
                                 <td><img src="<?php echo base_url('img/sosial-icon1.png')?>" style="width:40px;"></td>
                                 <td>Kesuburan tanah dan keadaan iklim, menyebabkan semakin meningkatnya beragam tanaman perkebunan yang dibutuhkan pasar dunia.</td>
                              </tr>
                              <tr align="left" valign="top">
                                 <td><img src="<?php echo base_url('img/sosial-icon2.png')?>" style="width:40px;"></td>
                                 <td>Proses evolusi geologis menyebabkan beraneka macam barang tambang yang sangat dibutuhkan dapat ditemukan di Indonesia seperti bijih besi, emas, timah, batu bara, minyak dan sebagainya.</td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div id="menu4" class="tab-pane fade">
                     <h3>LETAK BUDAYA INDONESIA</h3>
                     <div class="row" id="">
                        <div class="col-md-6" id="">
                           <p>Sekitar 800.000 tahun lalu telah terjadi perpindahan penduduk dari Asia yakni pembentuk penduduk Indonesia dan ke Kepulauan di Samudera Pasifik. </p>
                           <p>Kemudian terjadi perpindahan penduduk lagi dari Dongson di Tonkin ke Indonesia pada 500 tahun sebelum masehi.</p>
                           <table class="table table-responsive">
                              <tr align="left" valign="top">
                                 <td><img src="<?php echo base_url('img/budaya-icon1.png')?>" style="width:40px;"></td>
                                 <td>Abad 2 telah telah terjadi pertemuan kebudayaan Indonesia dengan kebudayaan India sehingga menimbulkan kebudayaan Indonesia- Hindu.</td>
                              </tr>
                              <tr align="left" valign="top">
                                 <td><img src="<?php echo base_url('img/budaya-icon2.png')?>" style="width:40px;"></td>
                                 <td>Abad 12 terjadi pertemuan antara kebudayaan Indonesia- Hindu dengan kebudayaan Islam sehingga menimbulkan kebudayaan Indonesia- Islam.</td>
                              </tr>
                              <tr align="left" valign="top">
                                 <td><img src="<?php echo base_url('img/budaya-icon3.png')?>" style="width:40px;"></td>
                                 <td>Abad 16 masuk pula kebudayaan Eropa mulai dikenalnya agama nasrani serta beberapa bahasa Eropa. </td>
                              </tr>
                           </table>
                           <p>Letak Indonesia yang berada di persimpangan lalu lintas dunia, dapat mempengaruhi masuknya berbagai kebudayaan luar.</p>
                           <p>Bercampurnya berbagai kebudayaan yang memasuki Indonesia, maka tidak heran apabila ditemukan berbagai macam kebudayaan, suku dan ras.</p>
                        </div>
                        <div class="col-md-6" id="">
                           <img src="<?php echo base_url('img/letak-budaya.jpg')?>" class="img-responsive img-thumbnail" style="height:80%">
                        </div>
                     </div>
                  </div>
               </div>
               <br/>
               <div class="row" id="" >
                  <ul class="nav nav-tabs nav-justified"  style="position:floated; bottom:0;" >
                     <li style="background-color:white" class="active"><a data-toggle="tab" href="#home"><img class="img-responsive" src="<?php echo base_url('img/circle-yellow.png')?>" alt="" border="0"  width="20" height="" style="margin: 0 auto;" /><br>Letak Astronomis</a></li>
                     <li style="background-color:white"><a data-toggle="tab" href="#menu1"><img class="img-responsive" src="<?php echo base_url('img/circle-green.png')?>" alt="" border="0"  width="20" height="" style="margin: 0 auto;" /><br>Letak Geografis</a></li>
                     <li style="background-color:white"><a data-toggle="tab" href="#menu2"><img class="img-responsive" src="<?php echo base_url('img/circle-red.png')?>" alt="" border="0"  width="20" height="" style="margin: 0 auto;" /><br>Letak Geologis</a></li>
                     <li style="background-color:white"><a data-toggle="tab" href="#menu3"><img class="img-responsive" src="<?php echo base_url('img/circle-blue.png')?>" alt="" border="0"  width="20" height="" style="margin: 0 auto;" /><br>Letak Sosial-Ekonomi</a></li>
                     <li style="background-color:white"><a data-toggle="tab" href="#menu4"><img class="img-responsive" src="<?php echo base_url('img/circle-grey.png')?>" alt="" border="0"  width="20" height="" style="margin: 0 auto;" /><br>Letak Budaya</a></li>
                  </ul>
               </div>
            </section>
            <div class="text-right">
            </div>
         </section>
         <!--main content end-->
      </section>
      <!-- container section start -->
   </body>
</html>

