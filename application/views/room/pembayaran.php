<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn  btn-sm btn-primary mt-3">
				<?php 
				$grand_total =0;
				if($kerajang  =$this->cart->contents())
				{ foreach ($kerajang as $item) 
					{
				
					$grand_total = $grand_total + $item['subtotal'];
				
				}

				echo "<h4> Total Pembayaran Anda : Rp. " .number_format($grand_total,0,',','.');
			 ?>
			</div><br><br>
			<h1>Input Data Pembayaran</h1>

			<form method="post" action="<?php base_url();?> proses_pesanan">

				<div class="form-group">
					<label> Nama</label>
					<input type="text" name="name" placeholder="Nama Lengkap" class="form-control">
				</div>

				<div class="form-group">
					<label> NO Telp</label>
					<input type="text" name="telp" placeholder="No Telp" class="form-control">
				</div>
				<div class="form-group">
					<label> Bank Transper</label>
					<select class="form-control" name="bank">
						<option>BCA XXXXX</option>
						<option>BNI XXXXX</option>
						<option>BRI XXXXX</option>
					</select>
					
				</div>
				<div class="form-group">
				
				<button type="submit" class="btn btn-sm btn-primary">PESAN</button>
								
			</form>

			<?php } else {
				echo"<h4>Keranjang Anda Masih Kosong</h4>";
			}
			?>
		</div>
		<div class="col-md-2"></div>	
	</div>
</div>