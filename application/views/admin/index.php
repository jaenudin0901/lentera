<div class="container-fluid">
	<h4 style="margin-top: 20px;">Invoice Pemesanan Room</h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Id Invoce</th>
			<th>Nama Pemesanan</th>
			<th>telp</th>
			<th>Tanggal Pemesanan</th>
			<th>Batas Bayar</th>
			<th>Aksi</th>
		</tr>
			<?php foreach ($invoice as $inv): ?>
		<tr>
			<td><?php echo $inv ->id_invoice; ?></td>
				<td><?php echo $inv ->name; ?></td>
			<td><?php echo $inv ->telp; ?></td>
			<td><?php echo $inv ->tgl_pesan; ?></td>
			<td><?php echo $inv ->batas_bayar; ?></td>
			<td><?php  echo anchor('invoice/detail/'.$inv->id_invoice,'<div class="btn btn-sm btn-primary">Detail</div>'); ?></td>
		</tr>
			<?php endforeach; ?>
		
	</table>
</div>