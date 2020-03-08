<!DOCTYPE html>
<html lang="en">
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


				<div class="col-md-12" id="">
					<h2>PERAIRAN LAUT INDONESIA</h2>

					<div id="image-map" class='center'>

					</div>
					<div class="col-md-12" id="">

						<p>Berdasarkan data menurut Kemetrian Kelautan dan Perikanan serta hasil penelitian bahwa secara garis besar 80% wilayah Indonesia adalah lautan. Menurut lokasinya dalam gugusan kepulauan di Indonesia dikelompokkan menjadi 4, antara lain (Banowati, 2012):</p>
						<table class="table table-responsive table-hover">

							<tr>
								<td>a.</td>
								<td>
									<b>Laut- laut Dangkalan Sunda</b><br />
									<p>Ciri- ciri laut di Dangkalan Sunda adalah kedalaman &lt; 200 m, terletak di wilayah Indonesia bagian barat dan terlindung dari badai Pasifik. Pada zaman glasial, Dangkalan Sunda adalah dartan yang menjadi satu dengan daratan Asia. </p>
									<p>Hal ini diperkuat dengan bukti alur- alur laut yang semula diduga merupakan lembah sungai di dasar Dangkalan Sunda. Sungai Musi dan Sungai Batanghari di Sumatera serta Sungai Kapuas di Kalimantan merupakan anak sungai Sunda Utara kini berupa bekas lembah di dasar laut di Selat Karimata. persamaan ikan tawar dalam sungai- sungai yang telah disebutkan. Persamaan flora dan fauna di daerah Sunda dan Benua Asia menunjukkan adanya hubungan daratan sebelumnya.</p>
								</td>
							</tr>
							<tr>
								<td>b.</td>
								<td>
									<b>Laut- laut Dangkalan Sahul</b><br />
									<p>Memiliki kedalaman &lt; 200 m, sebelum zaman glasial daratan ini bersambung dengan daratan di Australia. Terbukti dengan adanya bekas- bekas lembah (alur) di dasar Dangkalan Sahul dan persamaan flora dan fauna Indonesia Timur dengan Benua Australia.</p>
								</td>
							</tr>
							<tr>
								<td>c.</td>
								<td>
									<b>Laut- laut antara Dangkalan Sunda dan Dangkalan Sahul (Laut Tengah)</b>
									<br />
									<p>Laut- laut dalam kawasan peralihan memiliki beberapa karakteristik yaitu kedalamannya > 4000 m, dapat mencapai 6000 m. Banyak cekungan di dasar laut yang disebut palung, troug, dan basin. Laut ini telah terbentuk sebagai laut dalam saat Dangkalan Sunda dan Dangkalan Sahul masih berupa daratan.</p>
								</td>
							</tr>
							<tr>
								<td>d.</td>
								<td><b>Laut- laut di antara Dua Kepulauan Berangkai</b>
									<br />
									<p>Ciri- ciri laut ini ialah lebih dalam dibandingkan dengan laut di Dangkalan Sunda dan Dangkalan Sahul.</p>
								</td>
							</tr>
						</table>

					</div>
				</div>
			</section>
			<div class="text-right">

			</div>
		</section>
		<!--main content end-->
	</section>
	<!-- container section start -->

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
		var w = 2040,
			h = 1397.5,
			url = "<?php echo base_url('img/perairan.png') ?>";
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



</body>

</html>