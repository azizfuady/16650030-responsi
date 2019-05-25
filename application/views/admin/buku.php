<h2><?php echo $judul; ?></h2>
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
       <?php if($this->session->flashdata('pesanhapus')): ?>
         <div class="row mt-3">
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <?php echo $this->session->flashdata('pesanhapus'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div> 
       <?php endif; ?>
  <table class="table" id="data">
              <thead class="thead-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Judul Buku</th>
                  <th scope="col">Pengarang</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Denda</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                <?php foreach($buku as $bk): ?>
                <tr>
                  <th scope="row"><?php echo $i; ?></th>
                  <td>Buku <?php echo $bk['judul']; ?></td>
                  <td><?php echo $bk['pengarang']; ?></td>
                  <td>
                    <img src="<?php echo base_url(); ?>assets/img/<?php echo $bk['gambar']; ?>" width="50">
                  </td>
                  <td>Rp. <?php echo $bk['price']; ?></td>
                  <td>
                    <?php
                    if($bk['status'] == 'Dipinjam'){ ?>
                    <span class="badge badge-warning"><?php echo $bk['status']; ?></span>
                    <?php } ?>
                    <?php
                    if($bk['status'] == 'Tersedia'){ ?>
                    <span class="badge badge-primary"><?php echo $bk['status']; ?></span>
                    <?php } ?>
                  </td>
                  <td>
                    <a href="<?php echo base_url(); ?>admin/edit_buku/<?php echo $bk['id']; ?>" class="btn btn-primary"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                    <a href="<?php echo base_url(); ?>admin/hapus_buku/<?php echo $bk['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Data Buku <?php echo $bk['judul']; ?> akan di Hapus?');"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
                  </td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
              </tbody>
              <tfoot class="thead-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Judul Buku</th>
                  <th scope="col">Pengarang</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Denda</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </tfoot>
            </table>
</div>
        </div>
    </div>