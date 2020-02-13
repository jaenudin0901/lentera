
<?php 
$nama=$_POST['name'];
$telp =$_POST ['telp'];
$bank =$_POST['bank'] ;
?>



<div class="container-flid">
	<div class=" alert alert-success">
		<h5 class="text-center align-middle" > Selamat Pesanan Anda telah Berhasil Di Proses</h5>
		
	</div>
	<p>invoice pesanan sudah dikirim. silahkan melakukan pembayaran sebelum tanggal ini <?= $invoice['id_invoice']; ?></p>

	<p>Nama <?php echo $nama ;  ?></p>
	<p>Telp <?php echo $telp ; ?></p>
	<p>Bank Tranfer <?php echo $bank ; ?></p>
	<div>	

	


	</div>