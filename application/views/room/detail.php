
<div class="container-fluid">	
<section>
  <div class="card mb-3" style="padding: 35px;" >
  <div class="row no-gutters">
    <div class="col-md-5">

       <img src="<?= base_url('assets/img/'). $rooms['image']; ?>" class="card-img" style="width: 400px; height: 400px;" alt="...">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h3 class="card-title"><?= $rooms['name'] ;?></h3>
          <p class="card-text">Room A adalah kamar yang pas untuk seorang yang menyukai kesederhanaan, yang nyaman dengan view ke luar. ruangan yang lebar membuat kita bisa bergerak bebas</p>
        <p class="card-text">Facilities :<?= $rooms['facilities'] ;?>.</p>
           <h5 class="card-text">Stok: <?= $rooms['stok'] ;?>.</h5>
        <h5 class="card-text">Price  Rp. <?=  number_format($rooms['price'],0,',','.') ;?>.</h5>
      
        <a href="<?= base_url(); ?>room/tambah_keranjang/<?=$rooms['id'];?>" class="btn btn-sm btn-warning">Tambah Ke Keranjang</a>
         <a href="<?= base_url(); ?>" class="btn btn-sm btn-primary">Kembali</a>
   
          
      </div>
    </div>
  </div>
</div>
</section>
</div>