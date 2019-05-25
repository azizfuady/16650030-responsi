<div class="col-9 mt-5">
	<div class="container">
		    <?php foreach ($this->cart->contents() as $item): ?>
		<form action="" method="post">
		  <div class="form-group">
		    <label for="judul">Judul Buku</label>
		    <input type="text" class="form-control" name="judul" value="Buku <?php echo $item['name']; ?>">
		  </div>
		  <div class="form-group">
		    <label for="nama">Nama Peminjam</label>
		    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" autofocus="">
		  </div>
		  <div class="form-group">
		    <label for="nohp">No Hp</label>
		    <input type="text" class="form-control" name="no_hp" placeholder="No Hp Aktif">
		  </div>
		  <button type="submit" class="btn btn-primary">Kirim</button>
		</form>
		<?php endforeach ?>
	</div>
</div>