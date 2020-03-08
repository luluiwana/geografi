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

	#image-map {
		width: 70%;
		height: 500px;
		border: 1px solid #ccc;
		margin-bottom: 10px;
	}
</style>


<body>
  <!-- container section start -->
  <section id="container" >
    <!--main content start-->
    <section id="main-content" >
      <section class="wrapper" >
	
		<h2>BENTUK WILAYAH INDONESIA</h2><br/>

		<div class="col-md-8" >
		
		<div id="image-map">
		 <script>
    // Using leaflet.js to pan and zoom a big image.
    // See also: http://kempe.net/blog/2014/06/14/leaflet-pan-zoom-image.html

    // create the slippy map
    var map = L.map('image-map', {
      minZoom: 1,
      maxZoom: 4,
      center: [0, 0],
      zoom: 7,
      crs: L.CRS.Simple
    });

    // dimensions of the image
    var w = 498,
        h = 288,
        url = "<?php echo base_url('img/bentuk-wilayah.png') ?>";

    // calculate the edges of the image, in coordinate space
    var southWest = map.unproject([0, h], map.getMaxZoom()-1);
    var northEast = map.unproject([w, 0], map.getMaxZoom()-1);
    var bounds = new L.LatLngBounds(southWest, northEast);
	var wil1 = L.marker([-8, 6]).addTo(map);
	var wil2 = L.marker([-12, 9]).addTo(map);
	
	wil1.bindPopup("<b>Wilayah Pembangunan Utama A</b><br> Meliputi keseluruhan Pulau Jawa, Sumatera, Provinsi Kalimantan Barat dan Provinsi Kalimantan Tengah").openPopup();


    // add the image overlay, 
    // so that it covers the entire map
    L.imageOverlay(url, bounds).addTo(map);

    // tell leaflet that the map is exactly as big as the image
    map.setMaxBounds(bounds);
    </script>
	</div>
		<br/><br/>
		<p>Jika dilihat dari morfologi daratan, negara ini berbentuk kepulauan tepencar (fragmented). Apabila semua laut didalamnya dimasukkan sebagai apa yang tercantum dalam wawasan nusantara, maka bentuknya berubah menjadi kompak. Karena sebagian besar wilayah berupa laut untuk mempercepat pemerataan, pembangunan wilayah di Indonesia dibagi menjadi 4.</p>

		</div>
		<div class="col-md-4" id="">
		<table class="table table-responsive table-hover">

	<tr >
		<td>a.</td>
		<td>Wilayah Pembangunan Utama A, Pusat Kota Medan mencakup: Wil. Pembangunan I: Aceh dan Sumatera Utara dan II: Sumatera Barat, Riau, dan Kep. Riau</td>
	</tr>
	<tr >
		<td>b.</td>
		<td>Wilayah Pembangunan Utama B, Pusat Kota Jakarta mencakup: Wil. Pembangunan III: Jambi, Sumatera Selatan, Bengkulu, Bangka Belitung IV: Lampung, Banten, Jakarta, Jawa Barat, Jawa Tengah dan Yogyakarta dan VI: Kalimantan Barat</td>
	</tr>
	<tr >
		<td>c.</td>
		<td>Wilayah Pembangunan Utama C, Pusat Kota Surabaya mencakup: Wil. Pembangunan V: Jawa Timur, Bali dan VII: Kalimantan Tengah, Kalimantan Selatan, Kalimantan Timur, Kalimantan Utara</td>
	</tr><tr >
		<td>d.</td>
		<td>Wilayah Pembangunan Utama D, Pusat Kota Makassar mencakup: Wil. Pembangunan VIII: NTB, NTT, Sulawesi Selatan, Sulawesi Tenggara; IX: Sulawesi Tengah, Sulawsi Barat, Sulawesi Tenggara dan X: Maluku, Maluku Utara, Papua Barat, Papua.</td>
	</tr>
</table>


		</div>
		

      </section>
      <div class="text-right">
        
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

 
    
=======
	<!-- container section start -->
	<section id="container">
		<!--main content start-->
		<section id="main-content">
			<section class="wrapper">

				<h2>BENTUK WILAYAH INDONESIA</h2><br />

				<div class="col-md-8">

					<div id="image-map">
						<script>
							// Using leaflet.js to pan and zoom a big image.
							// See also: http://kempe.net/blog/2014/06/14/leaflet-pan-zoom-image.html

							// create the slippy map
							var map = L.map('image-map', {
								minZoom: 1,
								maxZoom: 4,
								center: [0, 0],
								zoom: 7,
								crs: L.CRS.Simple
							});

							// dimensions of the image
							var w = 498,
								h = 288,
								url = "<?php echo base_url('img/bentuk-wilayah.png') ?>";

							// calculate the edges of the image, in coordinate space
							var southWest = map.unproject([0, h], map.getMaxZoom() - 1);
							var northEast = map.unproject([w, 0], map.getMaxZoom() - 1);
							var bounds = new L.LatLngBounds(southWest, northEast);
							var wil1 = L.marker([-8, 6]).addTo(map);
							var wil2 = L.marker([-12, 9]).addTo(map);

							wil1.bindPopup("<b>WIB</b><br> Meliputi keseluruhan Pulau Jawa, Sumatera, Provinsi Kalimantan Barat dan Provinsi Kalimantan Tengah").openPopup();


							// add the image overlay, 
							// so that it covers the entire map
							L.imageOverlay(url, bounds).addTo(map);

							// tell leaflet that the map is exactly as big as the image
							map.setMaxBounds(bounds);
						</script>
					</div>
					<br /><br />
					<p>Jika dilihat dari morfologi daratan, negara ini berbentuk kepulauan tepencar (fragmented). Apabila semua laut didalamnya dimasukkan sebagai apa yang tercantum dalam wawasan nusantara, maka bentuknya berubah menjadi kompak. Karena sebagian besar wilayah berupa laut untuk mempercepat pemerataan, pembangunan wilayah di Indonesia dibagi menjadi 4.</p>

				</div>
				<div class="col-md-4" id="">
					<table class="table table-responsive table-hover">

						<tr>
							<td>a.</td>
							<td>Wilayah Pembangunan Utama A, Pusat Kota Medan mencakup: Wil. Pembangunan I: Aceh dan Sumatera Utara dan II: Sumatera Barat, Riau, dan Kep. Riau</td>
						</tr>
						<tr>
							<td>b.</td>
							<td>Wilayah Pembangunan Utama B, Pusat Kota Jakarta mencakup: Wil. Pembangunan III: Jambi, Sumatera Selatan, Bengkulu, Bangka Belitung IV: Lampung, Banten, Jakarta, Jawa Barat, Jawa Tengah dan Yogyakarta dan VI: Kalimantan Barat</td>
						</tr>
						<tr>
							<td>c.</td>
							<td>Wilayah Pembangunan Utama C, Pusat Kota Surabaya mencakup: Wil. Pembangunan V: Jawa Timur, Bali dan VII: Kalimantan Tengah, Kalimantan Selatan, Kalimantan Timur, Kalimantan Utara</td>
						</tr>
						<tr>
							<td>d.</td>
							<td>Wilayah Pembangunan Utama D, Pusat Kota Makassar mencakup: Wil. Pembangunan VIII: NTB, NTT, Sulawesi Selatan, Sulawesi Tenggara; IX: Sulawesi Tengah, Sulawsi Barat, Sulawesi Tenggara dan X: Maluku, Maluku Utara, Papua Barat, Papua.</td>
						</tr>
					</table>


				</div>


			</section>
			<div class="text-right">

			</div>
		</section>
		<!--main content end-->
	</section>
	<!-- container section start -->



>>>>>>> be1d04f7696a8c4c7d526174f28059f01916c8fd

</body>

</html>