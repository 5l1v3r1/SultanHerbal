<div class="contact1 d-flex h-100">
    <div class="container-contact1">
        <div class="row justify-content-center align-self-center">
            <div class="col-sm-6 col-sm-offset-3">
                <img src="assets/images/gagal.png" class="h-40 w-25">
                <h3>Pesanan Gagal Di Proses</h3>
                <br/>
<<<<<<< HEAD:templates/pesan-gagal.php
                <p style="font-size:20px;color:#5C5C5C;">Kami tidak dapat menerima <?=htmlspecialchars($jumlahBarang)?> unit <?=htmlspecialchars($namaBarang)?> pesanan anda dikarenakan <?=$status?>, silahkan coba lagi. Kembali ke menu?</p>
                <a href="/#" class="btn btn-warning">Kembali</a><br><br>
=======
                <p style="font-size:20px;color:#5C5C5C;">Kami tidak dapat menerima <?=htmlspecialchars($jumlahBarang);?> unit <?=htmlspecialchars($namaBarang);?> pesanan anda dikarenakan <?=$status?>, silahkan coba lagi.</p>
                <a href="<?=$pesanBarang?>?barang=<?=$namaBarang?>" class="btn btn-warning">Kembali</a><br><br>
>>>>>>> 67913dfd658ed0a8b7c33aa32278b0d472129cb0:templates/PesanGagal.php
            </div>
        </div>
    </div>
</div>
<!-- /.container -->
