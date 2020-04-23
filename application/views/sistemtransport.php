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

                <div class="col-md-12" id="">
                   <div style="text-align:center" id=""> <h3>BERLAYAR DI LAUT ALKI</h3></div>
                 <br>

                   <div class="col-md-6" > 
                        <section class="panel">
                        <header class="panel-heading">
                            <i class="fa fa-info"></i>Informasi
                        </header>
                        <div class="panel-body">
                           <table class="table table-responsive">
						   <tr>
						   <td>  <i class="fa fa-globe"> <td>
						   <td>Posisi laut Indonesia yang strategis memiliki potensi besar sebagai poros maritim dunia. Letaknya yang strategis dalam rute perdagangan Dunia, 90% perdagangan internasional melalui jalur laut dan 40%-nya melewati laut Indonesia.<td>
						   </tr>
						   <tr>
						   <td>  <i class="fa fa-globe"> <td>
						   <td>Luas lautan 2/3 wilayah Indonesia dan garis pantai terpanjang ke 4 di dunia serta 17.480 pulau memiliki 3 ALKI (Alur Laut Kepulauan Indonesia), jasa transportasi laut menjadi sebuah potensi ekonomi besar. <td>
						   </tr>
						   <tr>
						   <td>  <i class="fa fa-globe"> <td>
						   <td>ALKI (alur laut kepulauan Indonesia) yang merupakan rute pelayaran &amp; penerbangan bagi kapal-kapal &amp; pesawat terbang asing di wilayah perairan Indonesia. <td>
						   </tr>
						   <tr>
						   <td>  <i class="fa fa-globe"> <td>
						   <td>Indonesia memiliki 4 jalur dari 7 jalur pelayaran internasional dan tepat berada di jalur ALKI yakni Selat Malaka, Selat Sunda, Selat Makassar-Lombok, dan Selat Ombai-Wetar. 3 jalur pelayaran internasional lainnya berada di Terusan Suez di Mesir, Terusan Panama di benua Amerika, dan Selat Gibraltar di antara Spanyol dan Maroko. <td>
						   </tr>
						   
                           </table>
                        </div>
                    </section>
                     </div>
					 
                    
                        <div id='baru' class="col-md-6 text-center" style="height:500px">
                            <!-- <img src="<?php echo base_url('img/transport.png') ?>" class="img-responsive img-thumbnail" /> -->
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
        url = "<?php echo base_url('img/transport.png') ?>";
    // calculate the edges of the image, in coordinate space
    var southWest = map.unproject([0, h], map.getMaxZoom() - 1);
    var northEast = map.unproject([w, 0], map.getMaxZoom() - 1);
    var bounds = new L.LatLngBounds(southWest, northEast);
    var satu = L.marker([-8.2, 5.3]).addTo(map);
    var dua = L.marker([-9.2, 11.4]).addTo(map);
    var tiga = L.marker([-9.8, 13.4]).addTo(map);
    var tigac = L.marker([-9, 20]).addTo(map);
    var tigab = L.marker([-9.3, 18]).addTo(map);
    
    satu.bindPopup("<b>ALKI 1</b><br>Selat Sunda, Selat Karimata, Laut Natuna, Laut Cina Selatan").openPopup();
    dua.bindPopup("<b>ALKI 2</b><br>Selat Lombok, Selat Makassar, Laut Sulawesi").openPopup();
    tiga.bindPopup("<b>ALKI 3-A</b><br>Laut Sawu, Selat Ombai, Laut Banda [Barat Pulau Buru]-Laut Seram [Timur Pulau Mongole] - Laut Maluku, Samudera Pasifik").openPopup();
    tigab.bindPopup("<b>ALKI 3-B</b><br>Laut Timor, Selat Leti, Laut Banda, [Barat Pulau Buru] terus ke ALKI 3-A").openPopup();
    tigac.bindPopup("<b>ALKI 3-C</b><br>Laut Arafuru, Laut Banda terus ke utara ke utara ke ALKI III-A ").openPopup();
    

    // add the image overlay, 
    // so that it covers the entire map
    L.imageOverlay(url, bounds).addTo(map);

    // tell leaflet that the map is exactly as big as the image
    map.setMaxBounds(bounds);
</script>