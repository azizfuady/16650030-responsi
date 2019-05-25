    <div class="col-9 mt-5">
      <div class="row">
        <?php foreach($buku as $bk) { ?>
      <div class="card" style="width: 15rem;">
        <form method="post" action="<?php echo base_url();?>welcome/booking" accept-charset="utf-8">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $bk['gambar']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Buku <?php echo $bk['judul']; ?></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <input type="hidden" name="id" value="<?php echo $bk['id']; ?>" />
          <input type="hidden" name="judul" value="<?php echo $bk['judul']; ?>" />
          <!-- <input type="hidden" name="pengarang" value="<?php //echo $bk['pengarang']; ?>" /> -->
          <input type="hidden" name="qty" value="1" />
          <input type="hidden" name="price" value="<?php echo $bk['price']; ?>" />
          <h3><span class="badge badge-info">Rp. <?php echo $bk['price']; ?></span></h3>
          <button type="submit" class="btn btn-success">Pinjam</button>
        </div>
      </form>
      </div>
    <?php } ?>
    </div>
    </div>
  </div>
</div>