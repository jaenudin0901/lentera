
<div class="container-fluid">	
<section>
  <div class="card mb-3" style="padding: 35px;" >
  <div class="row no-gutters">
    <div class="col-md-5">
    	    <?php foreach ($rooms as $m): ?>
       <img src="<?= ('assets/img/'). $m['image']; ?>" class="card-img" style="width: 400px; height: 400px;" alt="...">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h3 class="card-title"><?= $m['name'] ;?></h>
        <p class="card-text">Room A adalah kamar yang pas untuk seorang yang menyukai kesederhanaan, yang nyaman dengan view ke luar.</p>
        <h5>Facilities:</h5>
        <p class="card-text"><?= $m['facilities'] ;?>.</p>
        <p class="card-text">Price Rp.<?= $m['price'] ;?>.</p>

        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

          <?php endforeach; ?> 
            <a href='index.php?add_cart=$pro_id'><button style='float:center; background-color:orange; width:120px; height:30px; border:1px; '> BOOK NOW</button></a>
           
      </div>

    </div>
  </div>
</div>
</section>
</div>