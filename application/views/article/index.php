
<div class="container my-3">
<?php 
     foreach($artikelbaru as $b){
          echo '
          <a href="'. base_url().'article/artikel/'.$b->kode_artikel.'" style="color:white; text-decoration: none;">
          <div class="card bg-dark text-white">
          <img class="card-img" src="'. base_url().'gambar/'.$b->gambar.'" alt="Card-image" style="height:400px">
          <div class="card-img-overlay">
               <div class="container">
                    <div class="card-body">
                    <div id="card-article-text">
                    <p class="card-title" style="font-size:28px">'.$b->judul.'</p>
                    <p class="card-text" style="font-size:15px">Last updated '.date("d-m-Y", $b->tanggal).'</p>
                    </div>
               </div>
               </div>
          </div>
          </a>
          ';
     }
?>
</div>

<section class="container">
	<br><br>
	<div class="card-columns my-3"  style="color:black; text-decoration: none;">

          <?php
                    foreach($data->result() as $a){
                         echo '
                         <a href="'. base_url().'article/artikel/'.$a->kode_artikel.'" style="color:black; text-decoration: none;">
                         <div class="card">
                              <img src="'. base_url().'gambar/'.$a->gambar.'" style="height:150px" class="card-img-top d-block w-100" alt="...">
                                   <div class="card-body">
                                   <h6 class="card-title" style="height:100px">'.$a->judul.'</h6>
                                   <p class="card-text" style="font-size:12px">'.date("d-m-Y", $a->tanggal).'</p>
                                   </div>
                              </a>
                         </div>
                         ';
                    }
               ?>
     </div>
          
</section>

</div>
<section class="container my-5">
	<?php echo $pagination; ?>

</section>