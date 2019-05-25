<div class="col-9 mt-5">
<div class="card">
  <h5 class="card-header"><i class="fas fa-shopping-cart"></i> Keranjang Booking</h5>
  <div class="card-body">
    <!-- <h5 class="card-title">Special title treatment</h5> -->
    <p class="card-text">
    <!-- 	 <?php
	//if ($cart = $this->cart->contents())
		{
 ?> -->
    	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Masa Pinjam</th>
      <th scope="col">Biaya Denda</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php $i = 1; ?>
  	<?php foreach($buku as $bk): ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td>Buku <?php echo $bk['name']; ?></td>
      <td><?php echo $bk['qty']; ?> Hari</td>
      <td>Rp. <?php echo $bk['price']; ?></td>
      <td>
        <a href="<?php echo base_url()?>welcome/hapus/<?php echo $bk['rowid'];?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
      </td>
    </tr>
    <?php $i++; ?>
<?php endforeach ?>
  </tbody>
</table>
<!-- <?php
		}
	//else
		{
			//echo "<h3>Keranjang Buku masih kosong</h3>";	
		}	
?> -->
    </p>
    <a href="<?php echo base_url()?>welcome/hapus/all" class="btn btn-danger float-right">Kosongkan Keranjang</a>
    <a href="<?php echo base_url(); ?>welcome/isi_data" class="btn btn-success float-right mr-3">Pinjam Sekarang</a>
  </div>
</div>
</div>