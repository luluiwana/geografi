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
                    <h2>SISTEM TRANSPORTASI LAUT</h2>
                    <hr>

                    <p>
                        Posisi laut Indonesia yang strategis baik di kawasan regional maupun dunia memiliki potensi besar sebagai poros maritim dunia. Letaknya yang strategis dalam rute perdagangan Dunia, 90% perdagangan internasional melalaui jalur laut dan 40%-nya melewati laut Indonesia.
                        Luas lautan 2/3 wilayah Indonesia dan garis pantai terpanjang ke empat di dunia serta 17.480 pulau memiliki 3 ALKI (Alur Laut Kepulauan Indonesia), jasa transportasi laut menjadi sebuah potensi ekonomi besar.
                    </p>

                    <p>
                        ALKI (alur laut kepulauan Indonesia) yang merupakan rute pelayaran & penerbangan bagi kapal-kapal & pesawat terbang asing di wilayah perairan Indonesia. Adanya ALKI, maka kapal/pesawat asing (yang melintasi kepulauan Indonesia) tidak diijinkan untuk menggunakan semua jalur pelayaran selain ALKI.
                    </p>

                    <p>
                        Di Indonesia terdapat 4 jalur dari tujuh jalur pelayaran internasional dan tepat berada di jalur ALKI yakni Selat Malaka, Selat Sunda, Selat Makassar-Lombok, dan Selat Ombai-Wetar.
                        3 jalur pelayaran internasional lainnya berada di Terusan Suez di Mesir, Terusan Panama di benua Amerika, dan Selat Gibraltar di antara Spanyol dan Maroko
                    </p>
                    <div class="row">
                        <div id='baru' class="col-md-7 text-center" style="height:500px">
                            <!-- <img src="<?php echo base_url('img/transport.png') ?>" class="img-responsive img-thumbnail" /> -->
                        </div>
                        <div class="col-md-5">
                            <ul>
                                <li>ALKI 1: Selat Sunda, Selat Karimata, Laut Natuna, Laut Cina Selatan</li>
                                <hr>
                                <li>ALKI 2: Selat Lombok, Selat Makassar, Laut Sulawesi</li>
                                <hr>
                                <li>ALKI 3-A: Laut Sawu, Selat Ombai, Laut Banda [Barat Pulau Buru]-Laut Seram [Timur Pulau Mongole] - Laut Maluku, Samudera Pasifik</li>
                                <hr>
                                <li>ALKI 3-B: Laut Timor, Selat Leti, Laut Banda, [Barat Pulau Buru] terus ke ALKI 3-A</li>
                                <hr>
                                <li>ALKI 3-C: Laut Arafuru, Laut Banda terus ke utara ke utara ke ALKI III-A </li>
                            </ul>
                        </div>
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
        zoom: 3.5,
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
    var marker = L.marker([-22, 13]).addTo(map);
    var markerwit = L.marker([-29, 46]).addTo(map);
    var markerwite = L.marker([-25, 33]).addTo(map);
    var markerwita = L.marker([-23, 5]).addTo(map);
    marker.bindPopup("<b>Laut Dangkalan Sunda</b><br>Meliput Laut Natuna bagian selatan, Selat Malaka bagian selatan, Selat Karimata, Laut Jawa, dan Selat Sunda").openPopup();
    markerwita.bindPopup("<b>Laut- laut di antara Dua Kepulauan Berangkai</b><br> Laut ini berada di antara busur dalam dan busur luar dari sistem Pegunungan Sunda Alpina, biasa disebut interdeep. Laut di antara Pulau Sumatera dan Pulau Nias adalah rangkaian pulau- pulau di sebelah baratnya.").openPopup();
    markerwit.bindPopup("<b>Laut Dangkalan Sahul</b><br>Laut Arafuru dan perluasannya ke arah selatan sampai Teluk Carpentaria di Australia merupakan kelompok perairan Dangkalan Sahul.").openPopup();
    markerwite.bindPopup("<b>Laut Tengah</b><br>Kelompok perairan ini meliputi Selat Makassar, Laut Flores, Laut Banda, Laut Aru, Laut Seram, Laut Maluku, Laut Halmahera dan Laut Sulawesi").openPopup();

    // add the image overlay, 
    // so that it covers the entire map
    L.imageOverlay(url, bounds).addTo(map);

    // tell leaflet that the map is exactly as big as the image
    map.setMaxBounds(bounds);
</script>