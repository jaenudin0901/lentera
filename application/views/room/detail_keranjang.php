<div class="container-fluid">
		<?php 	
	$no=1;
	if ($cart =$this->cart->contents()){
		foreach ($cart as $items): ?>
	<h4 style="margin-top: 20px;">Keranjang Belanja</h4>

	<table class="table table-bordered table-striped tabel-hover">
		<tr>
			<th>No</th>
			<th>	Nama Kamar</th>
			<th>	Jumlah</th>
			<th>	Harga</th>
			<th>	Sub Total</th>
		</tr>


		<tr>
			<td>	<?php 	echo $no++; ?></td>
			<td>	<?php 	echo $items['name']; ?></td>
			<td>	<?php 	echo $items['qty']; ?></td>
			<td align="right">Rp.	<?php 	echo number_format($items['price'],0,',','.') ; ?></td>
			<td align="right">Rp.	<?php 	echo number_format($items['subtotal'],0,',','.') ; ?></td>
			</tr>
	<?php 	endforeach; ?>
		<tr>
			<td colspan="4" align="right">Grand Total</td>
			<td align="right">Rp. <?php	echo number_format($this->cart->total() ,0,',','.') ; ?>  </td>
		</tr>
	</table>
	<div align="right">
		<a href="<?= base_url('room/hapus_keranjang');?>"?><div class="btn btn-danger">Hapus Keranjang</div></a>
		<a href="<?= base_url('home/index');?>"?><div class="btn btn-primary">Lanjutkan Belanja</div></a>
		<a href="<?= base_url('room/Pembayaran');?>"?><div class="btn btn-success">Pembayaran</div></a>
	</div>
	<?php  } else 
	{
		echo"<h4 align='center'>Keranjang Anda Masih Kosong</h4>";
		echo"<h4 align='center'>Silahkan Pilih Kamar!</h4>";	
		
	} ?> 
</div>