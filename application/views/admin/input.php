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
		  <div class="form-group">
		    <label for="judul">Judul Buku</label>
		    <input type="text" class="form-control" name="judul" placeholder="Judul Buku">
		    <small class="form-text text-danger"><?php echo form_error('judul'); ?></small>
		  </div>
		  <div class="form-group">
		    <label for="nama">Nama Pengarang</label>
		    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap Pengarang">
		    <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
		  </div>
		  <div class="form-group">
		    <label for="gambar">Gambar</label>
		    <input type="file" class="form-control" name="gambar">
		  </div>
		  <div class="form-group">
		    <label for="denda">Denda</label>
		    <input type="text" class="form-control" name="denda" value="1.500">
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
		  <a href="<?php echo base_url(); ?>admin" class="btn btn-warning">Batal</a>
		</form>
</div>