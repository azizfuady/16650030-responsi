<div class="mt-3">
	<?php if($this->session->flashdata('flash')): ?>
         <div class="row mt-3">
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <?php echo $this->session->flashdata('flash'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div> 
       <?php endif; ?>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $buku['id']; ?>">
		  <div class="form-group">
		    <label for="judul">Judul Buku</label>
		    <input type="text" class="form-control" name="judul" value="<?php echo $buku['judul']; ?>">
		    <small class="form-text text-danger"><?php echo form_error('judul'); ?></small>
		  </div>
		  <div class="form-group">
		    <label for="nama">Nama Pengarang</label>
		    <input type="text" class="form-control" name="nama" value="<?php echo $buku['pengarang']; ?>">
		    <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
		  </div>
		  <div class="form-group">
		    <label for="gambar">Gambar</label>
		    <input type="file" class="form-control" name="gambar" value="<?php echo $buku['gambar']; ?>">
		    <input type="hidden" name="gambarLama" value="<?php echo $buku['gambar']; ?>">
		  </div>
		  <div class="form-group">
		    <label for="denda">Denda</label>
		    <input type="text" class="form-control" name="denda" value="<?php echo $buku['price']; ?>">
		    <small class="form-text text-danger"><?php echo form_error('denda'); ?></small>
		  </div>
		  <div class="form-group">
		    <label for="status">Status</label>
		    <select class="form-control" name="status">
		      <option value="Tersedia">Tersedia</option>
		      <option value="Dipinjam">Dipinjam</option>
		    </select>
		  </div>
		  <button type="submit" class="btn btn-primary">Kirim</button>
		  <a href="<?php echo base_url(); ?>admin/buku" class="btn btn-warning">Batal</a>
		</form>
</div>