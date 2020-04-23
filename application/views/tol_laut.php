<!DOCTYPE html>
<html lang="en">
<style>
    .col-md-12,
    .row {
        padding-left: 30px;
        padding-right: 30px;
    }

    p {
        text-indent: 30px;
        text-align: justify
    }

    th,
    td {
        text-align: justify
    }

    .label {
        font-size: 17px;
    }
</style>

<body>
    <!-- container section start -->
    <section id="container">
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">

                    <div class=""style="text-align:center" id=""><h3>KONEKTIVITAS ANTAR PULAU</h3></div>
                    <br>
					<div class="col-md-12" > 
                        <section class="panel">
                        
              <header class="panel-heading tab-bg-primary ">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a data-toggle="tab" href="#home">Pelabuhan Hub</a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#about">Pelabuhan Feeder</a>
                  </li>
                 
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                  <div id="home" class="tab-pane active">
                    <img src="<?php echo base_url("img/icons/sub.gif")?>" class="img img-responsive" />
                  </div>
                  <div id="about" class="tab-pane"><img src="<?php echo base_url("img/icons/feeder.gif")?>" class="img img-responsive" /></div>
                </div>
              </div>
            
                    </section>
                     </div>
					 
					 <div class="col-md-6" > 
                        <section class="panel">
                        <header class="panel-heading">
                            <i class="fa fa-info"></i>Informasi
                        </header>
                        <div class="panel-body">
                            <table class="table table-responsive">
							
							<tr>
							<td><i class="fa fa-globe"></td>
							<td>Tol Laut merupakan salah satu strategi pemerintah untuk mewujudkan Indonesia sebagai Poros Maritim Dunia. Tol laut merupakanpenguatan konektivitas antar pulau maupun antar negara</td>
							</tr>
							<tr>
							<td><i class="fa fa-globe"></td>
							<td>Konsep tol laut adalah membangun transportasi laut dengan kapal atau logistik kelautan yang melayani rute bolak balik dari Aceh sampai Papua. Konektivitas melalui kapal yang berlayar secara terjadwal dari barat sampai timur. </td>
							</tr>
							<tr>
							<td><i class="fa fa-globe"></td>
							<td>Hal ini memudahkan akses niaga dari negara- negara pasifik bagian selatan ke negara asia bagian timur.</td>
							</tr>
							<tr>
							<td><i class="fa fa-globe"></td>
							<td>Sampai tahun 2019 terdapat 18 trayek/ rute tol laut yang telah berkembang dengan 24 pelabuhan yang ditetapkan pemerintah. Terdiri atas:<br>
							<table>
								<tr><td>5 pelabuhan utama (Belawan/ Kuala Tanjung, Tanjung Priok, Tanjung Perak, Makassar, dan Bitung)</tr></td>
								<tr><td>19 pelabuhan feeder</tr></td>
								<tr><td>Lebih dari 100 sub feeder.</tr></td>
							</table>

							</td>
							</tr>
                            
							</table>
                        </div>
                    </section>
                     </div>
					  <div class="col-md-6" > 
                        <section class="panel">
                        <header class="panel-heading">
                            <i class="fa fa-info"></i>Informasi
                        </header>
                        <div class="panel-body">
                           <table class="table table-responsive">
							<tr>
							<td><i class="fa fa-globe"></td>
							<td>Kuala Tanjung sebagai pintu/pelabuhan utama internasional bagian barat diperuntukkan bagi negara Eropa, Timur tengah, Asia dan sebagainya. </td>
							</tr>
							<tr>
							<td><i class="fa fa-globe"></td>
							<td>Bitung sebagai pintu/pelabuhan utama internasional bagian timur diperuntukkan bagi negara China, Korea, Jepang, USA dan sebagainya. </td>
							</tr>
							<tr>
							<td><i class="fa fa-globe"></td>
							<td>Sebagai penyeimbangan arus muatan yang dilakukan dengan penentuan pintu ekspor/impor berdasarkan negara tujuan/ asal.</td>
							</tr><tr>
							<td><i class="fa fa-globe"></td>
							<td>Ukuran kapal dalam jalur Tol Laut berukuran 1700 TEUs dan kapal berukuran 500-3000 DWT dengan kapasitas angkut total sekitar 32.500 penumpang. </td>
							</tr>
							<tr>
							<td><i class="fa fa-globe"></td>
							<td>Dampak Tol laut <br>
							<table >
								<tr><td>Peningkatan realisasi muatan dan penurunan harga di wilayah Indonesia bagian timur. Berdasarkan data Kementrian Perhubungan, realisasi muatan tol laut 2017 sebesar 41,2% atau mencapai 212.865 ton dari target 517.200 ton. </td></tr>
								<tr><td>Realisasi muatan balik sebesar 20.274 ton, dilaporkan bahwa tol laut mampu menekan disparitas harga hingga 10%-15%</td></tr>
								
							</table>
							</td>
							</tr>
                            </table>
                        </div>
                    </section>
                     </div>

                   
                    


            </section>

        </section>
        <!--main content end-->
    </section>
    <!-- container section start -->




</body>

</html>
<script>
    // Using leaflet.js to pan and zoom a big image.
    // See also: http://kempe.net/blog/2014/06/14/leaflet-pan-zoom-image.html

    // create the slippy map
    var map = L.map('baru', {
        minZoom: 1,
        maxZoom: 6,
        center: [0, 0],
        zoom: 5.5,
        crs: L.CRS.Simple
    });

    // dimensions of the image
    var w = 761,
        h = 381,
        url = "<?php echo base_url('img/icons/sub.gif') ?>";
    // calculate the edges of the image, in coordinate space
    var southWest = map.unproject([0, h], map.getMaxZoom() - 1);
    var northEast = map.unproject([w, 0], map.getMaxZoom() - 1);
    var bounds = new L.LatLngBounds(southWest, northEast);
    
    

    // add the image overlay, 
    // so that it covers the entire map
    L.imageOverlay(url, bounds).addTo(map);

    // tell leaflet that the map is exactly as big as the image
    map.setMaxBounds(bounds);
</script>