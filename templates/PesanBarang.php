<div class="contact1">
	<div class="container-contact1">
		<div class="contact1-pic js-tilt" data-tilt>
			<img src="assets/images/profil.jpeg" alt="IMG">
		</div>
		<form class="contact1-form validate-form" method="POST">
			<input type="hidden" name="token" value="<?=$csrfToken?>"/>
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
					if(isset($barang)) {
						switch ($barang) {
							case 'Hajar jahanam super gold':
							echo '<option selected>Hajar jahanam super gold</option>';
							break;
							case 'Lintah papua':
							echo '<option selected>Lintah papua</option>';
							break;
							case 'Lintah kalimantan':
							echo '<option selected>Lintah kalimantan</option>';
							break;
							default:
							echo '<option value="" hidden>Pilih barang</option>';
							echo '<option value="Hajar jahanam super gold">Hajar jahanam super gold</option>';
							echo '<option value="Lintah papua">Lintah papua</option>';
							echo '<option value="Lintah kalimantan">Lintah kalimantan</option>';
							break;
						}
					}
					else {
							echo '<option value="" hidden>Pilih barang</option>';
							echo '<option value="Hajar jahanam super gold">Hajar jahanam super gold</option>';
							echo '<option value="Lintah papua">Lintah papua</option>';
							echo '<option value="Lintah kalimantan">Lintah kalimantan</option>';
						}
					?>
				</select>
				<span class="shadow-input1"></span>
			</div>
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