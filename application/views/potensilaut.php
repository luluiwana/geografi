<!DOCTYPE html>
<html lang="en">
<head>
   
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
      text-align: justify;
   }

   .nav-tabs>li.active>a,
   .nav-tabs>li.active>a:hover,
   .nav-tabs>li.active>a:focus {
      color: #000;
      background-color: #ffffff;
      border: 1px solid #dddddd;
      border-bottom-color: transparent;
      cursor: default;
      font-weight: bold;
   }
    #image-map {
      width: 100%;
      height: 600px;
      border: 1px solid #ccc;
      margin-bottom: 10px;
    }
</style></head>

<body>
   <!-- container section start -->
   <section id="container">
      <!--main content start-->
      <section id="main-content">
         <section class="wrapper">
            <div class="tab-content">
               <div id="home" class="tab-pane fade in active ">
                  <h3>POTENSI LAUT INDONESIA</h3>
                  <div class="deskripsi" panel>

                     <br>
                     <div class="col-md-12"  id="image-map"> 
                        <br><br/>
                     </div>
                     <br>
                     <div class="col-md-12" id="">
                        <table class="table">
                           <tr align="left" valign="top">

                              <td>Posisi Indonesia yang strategis dan terletak di garis khatulistiwa merupakan pertemuan arus laut yang panas dan dingin menyebabkan Indonesia mempunyai keanekaragaman sumber daya kelautan baik hayati maupun non-hayati.</td>
                           </tr>
                           <tr align="left" valign="top">

                              <td>Terdapat 18 wilayah ekoregion laut di Indonesia, pembagian ini didasarkan oleh kesamaan karakteristik SDA, ekosistem,kondisi geografis, budaya masyarakat setempat, dan kearifan lokal.</td>
                           </tr>

                        </table>
                     </div>
					 

    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <script>
    // Using leaflet.js to pan and zoom a big image.
    // See also: http://kempe.net/blog/2014/06/14/leaflet-pan-zoom-image.html

    // create the slippy map
    var map = L.map('image-map', {
      minZoom: 1,
      maxZoom: 6,
      center: [0, 0],
      zoom: 4,
      crs: L.CRS.Simple
    });

    // dimensions of the image
    var w = 2000,
        h = 1135,
        url = "<?php echo base_url('img/Peta_Ekoregion_INA_Darat_Laut.jpg') ?>";

    // calculate the edges of the image, in coordinate space
    var southWest = map.unproject([0, h], map.getMaxZoom()-1);
    var northEast = map.unproject([w, 0], map.getMaxZoom()-1);
    var bounds = new L.LatLngBounds(southWest, northEast);
	//var marker = L.marker([51.5, -0.09]).addTo(map);
	//marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();

    // add the image overlay, 
    // so that it covers the entire map
    L.imageOverlay(url, bounds).addTo(map);

    // tell leaflet that the map is exactly as big as the image
    map.setMaxBounds(bounds);
    </script>
                  </div>
               </div>
               <div id="menu1" class="tab-pane fade">
                  <h3>POTENSI PERIKANAN</h3>
                  <br>
                  <div class="col-md-12" id=""> <img src="<?php echo base_url('img/perikanan.png') ?>" class="img-responsive img-thumbnail" style="width:100%"><br />
                     <br>
                  </div>
                  <div class="row" id="">
                     <div class="col-md-6" id="">
                        <p>Penyebaran daerah penangkapan ikan di Indonesia mencapai luas sekitar 5,4 juta km2. Data Podes 2018 menunjukkan bahwa 21,82% penduduk yang tinggal di desa tepi laut sumber penghasilan utamanya dari subsektor perikanan. Selain potensi perikanan tangkap, juga memiliki potensi perikanan budidaya laut pada tahun 2015 seluas 12.123.383 hektar (Kelautan dan Perikanan Dalam Angka, 2016). Tercatat hasil perikanan Indonesia menyumbang 7,4% (81,6 juta ton) dari total penangkapan ikan di dunia. Indonesia merupakan negara yang memproduksi perikanan tangkap tertinggi kedua di dunia pada perairan laut (FAO, 2016).
                           Berdasarkan keputusan Menteri Kelautan dan Perikanan RI, No. 47/ KEPMEN/ 2016 bahwa potensi lestari sumber daya ikan Indonesia mencapai 9,9 juta ton yang tersebar di 11 WPP-NRI.
                        </p>
                     </div>
                     <div class="col-md-6" id="">
                        <p>Potensi tersebut terdiri atas ikan pelagis kecil 3,52 juta ton; ikan pelagis besar 2,49 juta ton; ikan demersal 2,32 juta ton; ikan karang 977 ribu ton; udang penaid 327 ribu ton; lobster 8,8 ribu ton; rajungan 47,8 ribu ton; dan cumi-cumi 197 ribu ton. Sedangkan potensi perikanan budidaya laut mempunyaibeberapa jenis komoditas yakni budidaya rumput laut, udang, berbagai jenis ikan kerapu, kakap, bandeng dan sebagainya.</p>
                     </div>
                  </div>
                  <div class="col-md-12" id=""> 
				  <table class="table table-hover table-striped table-bordered">
<tbody>
<tr>
<th   rowspan="2">Jenis Ikan/ Type of fish</th>
<th   colspan="11">Wilayah Pengelolaan Perikanan Negara Republik Indonesia (WPPNRI) / Fish Management Areaof the Republic of Indonesia</th>

</tr>
<tr>
<th  >WPP-NRI 571</th>
<th  >WPP-NRI 572</th>
<th  >WPP-NRI 573</th>
<th  >WPP-NRI 711</th>
<th  >WPP-NRI 712</th>
<th  >WPP-NRI 713</th>
<th  >WPP-NRI 714</th>
<th  >WPP-NRI 715</th>
<th  >WPP-NRI 716</th>
<th  >WPP-NRI 717</th>
<th  >WPP-NRI 718</th>
</tr>
<tr>
<td  >Ikan Pelagis Kecil</td>
<td  >79.0</td>
<td  >413.0</td>
<td  >294.1</td>
<td  >395.5</td>
<td  >303.9</td>
<td  >104.6</td>
<td  >116.5</td>
<td  >378.7</td>
<td  >222,9</td>
<td  >391.1</td>
<td  >823.3</td>
</tr>
<tr>
<td  >Ikan Pelagis Besar</td>
<td  >102.0</td>
<td  >364.8</td>
<td  >505.9</td>
<td  >199.0</td>
<td  >104.0</td>
<td  >419.3</td>
<td  >43.1</td>
<td  >51.4</td>
<td  >154.3</td>
<td  >56.1</td>
<td  >489.8</td>
</tr>
<tr>
<td  >Ikan Demersal</td>
<td  >102.8</td>
<td  >366.1</td>
<td  >103.5</td>
<td  >400.5</td>
<td  >320.4</td>
<td  >77.2</td>
<td  >99.8</td>
<td  >114.0</td>
<td  >34.7</td>
<td  >111.6</td>
<td  >586.3</td>
</tr>
<tr>
<td  >Ikan Karang</td>
<td  >119.8</td>
<td  >48.1</td>
<td  >8.8</td>
<td  >24.3</td>
<td  >59.1</td>
<td  >365.4</td>
<td  >164.2</td>
<td  >70.0</td>
<td  >54.2</td>
<td  >32.4</td>
<td  >30.5</td>
</tr>
<tr>
<td  >Udang Penaeid</td>
<td  >58.9</td>
<td  >8.2</td>
<td  >6.9</td>
<td  >78.0</td>
<td  >58.4</td>
<td  >37.3</td>
<td  >2.2</td>
<td  >6.1</td>
<td  >8.5</td>
<td  >8.7</td>
<td  >53.5</td>
</tr>
<tr>
<td  >Lobster</td>
<td  >0.7</td>
<td  >1.3</td>
<td  >0.8</td>
<td  >1.0</td>
<td  >1.0</td>
<td  >1.0</td>
<td  >0.1</td>
<td  >0.7</td>
<td  >0.7</td>
<td  >1.1</td>
<td  >0.4</td>
</tr>
<tr>
<td  >Kepiting</td>
<td  >11.1</td>
<td  >11.6</td>
<td  >0.5</td>
<td  >0.5</td>
<td  >10.1</td>
<td  >5.0</td>
<td  >1.1</td>
<td  >0.5</td>
<td  >2.0</td>
<td  >0.6</td>
<td  >1.5</td>
</tr>
<tr>
<td  >Rajungan</td>
<td  >3.1</td>
<td  >0.9</td>
<td  >0.7</td>
<td  >9.4</td>
<td  >22.6</td>
<td  >6.7</td>
<td  >2.2</td>
<td  >0.6</td>
<td  >0.4</td>
<td  >0.0</td>
<td  >1.9</td>
</tr>
<tr>
<td  >Cumi-cumi</td>
<td  >7.1</td>
<td  >14.6</td>
<td  >8.2</td>
<td  >35.2</td>
<td  >102.1</td>
<td  >10.0</td>
<td  >1.8</td>
<td  >9.7</td>
<td  >1.1</td>
<td  >2.1</td>
<td  >5.5</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
				  <br />
                     <br>
                  </div>
              </div>
               <div id="menu2" class="tab-pane fade">
                  <h3>POTENSI TUMBUHAN LAUT </h3>
                  <div class="col-md-12" id="">
                     <div class="label label-primary">Rumput Laut</div><br /><br />
                     <p>Selain kelompok hewan, laut Indonesia menghasilkan tumbuhan laut yang memiliki nilai gizi dan ekonomi. Salah satu produk yang diketahui manfaatnya adalah makro-algae atau biasa disebut rumput laut. Rumput laut di Indonesia sangat melimpah yaitu sekitar 8,6% dari total biota laut.Luas wilayah habitat rumput laut di Indonesia merupakan terbesar di dunia mencapai luas 1,2 juta Ha. Berdasarkan ekspedisi Van Bosse di Laut Siboga tahun 1899-1900 bahwa Indonesia memiliki 6,42% atau sekitar 555 jenis dari 8.642 spesies rumput laut di dunia. Rumput laut dari kelas:
                        <ol>
                           <li>Alga merah (Rhodophyceae) terbanyak sekitar 452 jenis</li>
                           <li>Alga hijau (Chlorophyceae) sekitar 196 jenis</li>
                           <li>Alga cokelat (Phaeophyceae) sekitar 134 jenis.</li>
                        </ol>
                     </p>
                     <p>Data FAO (2015) menunjukan bahwa total produksi rumput laut dunia tahun 2013 mencapai 26,98 juta ton basah, Indonesia menyumbang 34,47 persen dari produksi tersebut sekitar 9,30 juta ton basah.</p>
                     <p>Data UN-Comtrade (2015) tercatat bahwa pada tahun 2014 volume ekspor rumput laut kering dunia mencapai 169,64 ribu ton dan Indonesia menyumbang 70,01 persen dari total volume ekspor dunia tersebut. Berdasarkan data hasil ekspor dan impor Badan Karantina Ikan Pengendalian Mutu dan Keamanan Hasil Perikanan (BKIPM-KHP), sebagai berikut:
                        <a href="http://bkipm.kkp.go.id/bkipmnew/?r=stats/#_ops_volume/E,I/Kg/d/1/2020/0/kd_upt">Data</a>

                     </p>
                     <p>Pasar utama komoditas rumput laut kering dunia adalah China (55,42 %), Jepang (14,04 %), Korea (6,11 %), France (4,70 %) dan USA (3,06 %).</p>
                  </div>
                  <div class="col-md-12" id="">
                     <div class="label label-primary">Terumbu Karang</div><br /><br />
                  </div>


                  <div class="col-md-12">
                     <p>
                        Terumbu karang dalam ekosistem laut memiliki peranan diantaranya sebagai tempat tinggal, tempat berlindung, tempat mencari makan, dan berkembangbiak biota laut serta sebagai penahan gelombang dan ombak. Berdasarkan analisis citra satelit Indonesiamemiliki terumbu karang seluas 2,5 juta hektar. Total jenis karang Indonesia mencapai 569 jenis atau 67% dari 845 spesies di dunia.
                     </p>
                     <p>
                        Secara alamiah, sebaran karang tertinggi dijumpai di bagian tengah Indonesia dan timur Indonesia, seperti di perairan sekitar Sulawesi, Maluku, bagian barat Papua dan Nusa Tenggara. Beberapa jenis karang endemis telah ditemukan dan diidentifikasi di beberapa perairan Indonesia yaitu Acropora suharsonoi, Indophyllia macassarensi, Isopora togianensis dan Euphyllia baliensis
                     </p>
                  </div>
                  <div class="col-md-12 mb-5">
                     <img src='<?= base_url("img/terumbu.png"); ?>' class="img-responsive img-thumbnail" style="width:100%;" ;>
                  </div>
                  <div class="col-md-12">
                     <p>
                        Kondisi terumbu karang Indonesia diamati dari citra satelit 2016 yakni 6,39% berstatus sangat baik, 23,40% berstatus baik, 35,06 % cukup baik, 35,15% dalam kondisi jelek. Kondisi semacam ini ditentukan oleh lingkungan wilayah masing-masing. Adanya sedimentasi, pencemaran limbah industri, eksploitasi penambangan karang, dan penangkapan ikan yang tidak ramah lingkungan.
                     </p>
                  </div>


               </div>
               <div id="menu3" class="tab-pane fade">
                  <h3>POTENSI MINERAL DAN PERTAMBANGAN</h3>
                  <div class="col-md-12">
                     <p>
                        Indonesia berdasarkan letak geologis merupakan tempat pertemuan tiga lempeng tektonik menyebabkan timbulnya gunung berapi yang kaya mineral logam seperti emas, besi, perak, timah, timbal, tembaga dan nikel
                     </p>
                  </div>
                  <div class="col-md-12 text-center">
                     <img src='<?= base_url("img/tambang.gif"); ?>' class="img-responsive img-thumbnail" style="width:90%;" ;>
                  </div>
                  <div class="col-md-12">
                     <p>
                        Berdasarkan riset Kementrian Kelautan dan Perikanan, laut Indonesia memiliki 60 cekungan minyak dan gas bumi diperkirakan 70% di laut,dapat menghasilkan 84,48 miliar barrel minyak. Terdapat 40 cekungan di lepas pantai dan 14 cekungan di pesisir. Pada kedalaman laut 500-600 m telah dilakukan pengambilan sampel batuan dasar laut mengandung andesit dan basalt
                        <a href="http://geomagz.geologi.esdm.go.id/menyigi-geologi-mencari-migas-indonesia/">Sumber Rujukan</a>
                     </p>
                     <p>
                        Menurut data Kementrian (ESDM) Energi dan Sumber Daya Mineral, bahwa potensi energi dari arus laut Indonesia adalah terbesar di dunia. Potensi tersebut diantaranya (OTEC) Ocean Thermal Energy Conversion, tersebar di 17 lokasi dari pantai barat Sumatera, selatan Jawa, Sulawesi, Maluku Utara, Bali, Nusa Tenggara diprediksi memiliki sekitar 41 GW.
                     </p>
                     <div class="col-md-12 text-center">
                        <img src='<?= base_url("img/otec.png"); ?>' class="img-responsive img-thumbnail" style="width:70%;" ;>
                     </div>
                     <div class="col-md-12">
                        <p>
                           Ocean Thermal Energy Conversion (OTEC) adalah sistem energi terbarukan yang menggunakan perbedaan temperatur permukaan dan dasar laut. Teknologi ini sangat tepat diterapkan di negara equatoral seperti Indonesia dimana perbedaan temperatur permukaan dan dasar laut mencapai 200C. Diperkirakan OTEC mampu memenuhi 4x kebutuhan listrik manusia saat ini. Karena itu sudah selayaknya OTEC dipertimbangkan sebagai sumber energi masa depan nasional.
                        </p>
                        <p>
                           Pemanfaatan OTEC dapat berdampak positif bagi perekonomian masyarakat di bidang perikanan. Potensi energi panas laut di perairan Indonesia di prediksi menghasilkan daya sebesar 240.000 MW.
                        </p>

                     </div>
                  </div>
				  </div>
                  <div id="menu4" class="tab-pane fade">
                     <h3>POTENSI WISATA BAHARI</h3>
                     <div class="row" id="">
                        <div class="col-md-6" id="">
                           <p>
                              Laut Indonesia yang memiliki keanekaragaman hayati melimpah, sehingga Indonesia mempunyai daya tarik wisata yang tinggi. Laut Indonesia rata- rata dijadikan sebagai destinasi wisata menyelam, menurut Deputi Pemasaran Mancanegara, Indonesia memiliki 700 spot diving dan snorkeling
                           </p>
                           <table class="table table-responsive">
                              <tr align="left" valign="top">
                                 <td><img src="<?php echo base_url('img/budaya-icon3.png') ?>" style="width:40px;"></td>
                                 <td><b>Taman Laut Bunaken Sulawesi Utara</b> &nbsp;&nbsp; Rumah bagi 390 spesies koral dan berbagai jenis ikan, mamalia seperti ikan hiu, ikan pari, kuda laut, kura- kura, ikan duyung, moluska dan lain- lain, memiliki 20 titik penyelaman. </td>
                              </tr>
                              <tr align="left" valign="top">
                                 <td><img src="<?php echo base_url('img/budaya-icon3.png') ?>" style="width:40px;"></td>
                                 <td><b>Taman Laut Banda di Maluku Tengah</b>&nbsp;&nbsp;merupakan salah satu Taman Laut terindah di dunia: Memiliki 310 jenis karang pembentuk terumbu, 871 spesies ikan, serta populasi ikan hiu dan kerapu termasuk jenis ikan dan kerang purba yang disuakakan seperti ikan Napoleon. </td>
                              </tr>
                              <tr align="left" valign="top">
                                 <td><img src="<?php echo base_url('img/budaya-icon3.png') ?>" style="width:40px;"></td>
                                 <td><b>Taman Nasional Wakatobi </b>&nbsp;&nbsp;Rmemiliki Keragaman makhluk hidup di dalamnya mencapai 93 spesies ikan, baik untuk konsumsi maupun hias dan750 spesies koral serta 5 titik diving yakni di Pulau Hoga, Pulau Hondue, Pulau Tomia, Pulau Wangi-wangi dan Binongko. </td>
                              </tr>
                              <tr align="left" valign="top">
                                 <td><img src="<?php echo base_url('img/budaya-icon3.png') ?>" style="width:40px;"></td>
                                 <td><b>88 Titik Penyelaman </b>&nbsp;&nbsp;di Selat Lembeh-Sulawesi Utara serta 3 spot diving di Pulau Weh, Aceh. </td>
                              </tr>
                              <tr align="left" valign="top">
                                 <td><img src="<?php echo base_url('img/budaya-icon3.png') ?>" style="width:40px;"></td>
                                 <td><b>Sejumlah titik </b>&nbsp;&nbsp;di Labuan Bajo, Pulau Komodo, dan Pulau Rinci- NTT, 50 titik menyelam laut Alor, 28 titik di Derawan, serta spot diving di Teluk Cendrawasih dan Raja Ampat </td>
                              </tr>
                           </table>
                        </div>
                        <div class="col-md-6" id="">
                           <img src="<?php echo base_url('img/bahari.jpeg') ?>" class="img-responsive img-thumbnail" style="height:80%">
                        </div>
                     </div>
                  </div>
               
               <div class="row" id="">
                  <ul class="nav nav-tabs nav-justified" style="position:floated; bottom:0;">
                     <li style="background-color:white" class="active"><a data-toggle="tab" href="#home"><img class="img-responsive" src="<?php echo base_url('img/circle-yellow.png') ?>" alt="" border="0" width="20" height="" style="margin: 0 auto;" /><br>Potensi Laut Indonesia</a></li>
                     <li style="background-color:white"><a data-toggle="tab" href="#menu1"><img class="img-responsive" src="<?php echo base_url('img/circle-green.png') ?>" alt="" border="0" width="20" height="" style="margin: 0 auto;" /><br> Potensi Perikanan Indonesia</a></li>
                     <li style="background-color:white"><a data-toggle="tab" href="#menu2"><img class="img-responsive" src="<?php echo base_url('img/circle-red.png') ?>" alt="" border="0" width="20" height="" style="margin: 0 auto;" /><br>Potensi Tumbuhan Laut</a></li>
                     <li style="background-color:white"><a data-toggle="tab" href="#menu3"><img class="img-responsive" src="<?php echo base_url('img/circle-blue.png') ?>" alt="" border="0" width="20" height="" style="margin: 0 auto;" /><br>Potensi Mineral dan Penambangan</a></li>
                     <li style="background-color:white"><a data-toggle="tab" href="#menu4"><img class="img-responsive" src="<?php echo base_url('img/circle-grey.png') ?>" alt="" border="0" width="20" height="" style="margin: 0 auto;" /><br>Potensi Wisata Bahari</a></li>
                  </ul>
               </div>
         </section>
        
      </section>
      <!--main content end-->
   </section>
   <!-- container section start -->
</body>

</html>