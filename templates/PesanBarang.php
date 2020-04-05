<div class="contact1">
	<div class="container-contact1">
		<div class="contact1-pic js-tilt" data-tilt>
			<img src="assets/images/profil.jpeg" alt="IMG">
		</div>
		<form class="contact1-form validate-form" method="POST">
			<span class="contact1-form-title">
				Silahkan isi folmulir untuk pemesanan via pembayaran COD
			</span>
			<div class="wrap-input1 validate-input" data-validate = "Name is required">
				<input class="input1" type="text" name="nama_lengkap" placeholder="Nama lengkap" required>
				<span class="shadow-input1"></span>
			</div>
			<div class="wrap-input1 validate-input" data-validate = "Bisa whatsapp, Telegram, Line, dan lain lain">
				<input class="input1" type="text" name="nomor_wa" placeholder="Nomor Whatsapp" required>
				<span class="shadow-input1"></span>
			</div>
			<div class="wrap-input1 validate-input" data-validate = "Silahkan isi alamat pemesan">
				<input class="input1" type="text" name="alamat_pemesan" placeholder="Alamat lengkap pemesan" required>
				<span class="shadow-input1"></span>
			</div>
			<div class="wrap-input1 validate-input" data-validate = "Silahkan isi jumlah barang">
				<input class="input1" type="text" name="jumlah_barang" placeholder="Jumlah barang" required>
				<span class="shadow-input1"></span>
			</div>
			<div class="form-group">
				<select class="wrap-input1 custom-select my-1 mr-sm-2" title="Pilih nama barang" name="nama_barang" required>
					<?php
					switch ($barang) {
						case 'hjgold':
							echo '<option selected>Hajar jahanam super gold</option>';
							break;
						case 'lintahPapua':
							echo '<option selected>Lintah papua</option>';
							break;
						case 'lintahKalimantan':
							echo '<option selected>Lintah kalimantan</option>';
							break;
						default:
							echo '<option>Hajar jahanam super gold</option>';
							echo '<option>Lintah papua</option>';
							echo '<option>Lintah kalimantan</option>';
							echo '<option selected hidden disable>Pilih barang</option>';
							break;
					}
					?>
				</select>
				<span class="shadow-input1"></span>
			</div>
			<!--  <div class="wrap-input1 validate-input" data-validate = "Silahkan isi nama barang">
							<input class="input1" type="text" name="nama_barang" placeholder="Nama barang" required>
							<span class="shadow-input1"></span>
			</div>-->
			<div class="container-contact1-form-btn">
				<button class="contact1-form-btn">
				<span>
					Order barang
					<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
				</span>
				</button>
			</div>
		</form>
	</div>
</div>