<?php if($this->session->flashdata('pesan')): ?>
         <div class="row mt-3">
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <?php echo $this->session->flashdata('pesan'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div> 
       <?php endif; ?>
<h2>Selamat Datang <?php echo strtoupper($this->session->userdata("username"));?> !</h2>
<div class="mt-3">
  <table class="table" id="data">
              <thead class="thead-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Judul Buku</th>
                  <th scope="col">Nama Peminjam</th>
                  <th scope="col">No Hp</th>
                  <th  scope="col">Tanggal Peminjaman</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                <?php foreach($bookingan as $booking): ?>
                <tr>
                  <th scope="row"><?php echo $i; ?></th>
                  <td><?php echo $booking['judul_buku']; ?></td>
                  <td><?php echo $booking['nama_peminjam']; ?></td>
                  <td><?php echo $booking['no_hp']; ?></td>
                  <td><?php echo $booking['tgl']; ?></td>
                  <td>
                    <button type="button" class="btn btn-warning"><i class="fas fa-exclamation"  data-toggle="tooltip" data-placement="top" title="Pending"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></button>
                  </td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
              </tbody>
              <tfoot class="thead-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Judul Buku</th>
                  <th scope="col">Nama Peminjam</th>
                  <th scope="col">No Hp</th>
                  <th  scope="col">Tanggal Peminjaman</th>
                  <th scope="col">Aksi</th>
                </tr>
              </tfoot>
            </table>
</div>
        </div>
    </div>