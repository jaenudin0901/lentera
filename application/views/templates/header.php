<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ; ?>css/swiper.min.css">

      <!-- my Css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ; ?>css/mystyle.css">

    <title><?php echo $title; ?></title>
  </head>
  <body style="background-color: gray">
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?= base_url() ; ?>">Lentera Residance</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('home') ; ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Rooms
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

              <a class="dropdown-item" href="<?= base_url();?>room/detail/1">Room A</a>
               <a class="dropdown-item" href="<?= base_url();?>room/detail/2">Room B</a>
              
        
        </div>
            
        <li class="nav-item ">
            
            <a class="nav-link" style="margin-top:-8px; margin-right:20px; font-family: sans-serif; color: red;">
            <?php   
            $keranjang ='keranjang belanja : '  .$this->cart->total_items(). ' items';
            ?>
            <?php   echo anchor('room/detail_keranjang', $keranjang ) ; ?></a>

        </li>
          
     
    </ul>
     <hr style=" border:1px solid white;">
  </div>
  <div class="topbar-divider d-none d-sm-block">

    <ul class="na navbar-nav navbar-right">
      
        <?php if($this->session->userdata('username')) { ?>

          <li><div> Selamat Datang <?php echo $this->session->userdata('username') ;?></div></li>

          <li>   <?php echo anchor('auth/logout ','  Logout' );?></li>
          <?php } else { ?>

            <li><?php echo anchor ('auth/login', 'Login');?></li>
          <?php } ?>

      
    </ul>
    
  </div>

</nav>



       <!-- 
           <?php foreach( $rooms as $room) : ?>

              <a class="dropdown-item" href="<?= base_url();?>room/detail/<?= $room['id'] ;?>">
              
              <i></i>
              
              <span><?= $room['name'] ;?></span></a>
              
              </li>
        
          <?php endforeach ; ?> -->
        
