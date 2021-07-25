<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />



    <title>CRUD</title>
  </head>
  <body>
   <div class="container">
     <div class="row">
       <div class="col-sm-12 text-center">
         <h1>Data Barang</h1>
       </div>
       <div class="col-sm-12 ">
         <a href="#" class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah</a>
         <br>
         <br>
         <table class="table table-bordered">
           <thead>
             <tr>
               <th>No.</th>
               <th>Nama Barang</th>
               <th>Harga</th>
               <th>Stok</th>
               <th>Aksi</th>
             </tr>
           </thead>
           <tbody>
            <?php $no = 1; 
              foreach($barang as $key => $value){ ?>
             <tr>
               <td><?= $no++ ?></td>
               <td><?= $value['nama_barang'] ?></td>
               <td><?= $value['harga_barang'] ?></td>
               <td><?= $value['stok'] ?></td>
               <td><i class="fa fa-pencil-square-o" aria-hidden="true" data-toggle="modal" data-target="#edit<?= $value['id_barang'] ?>"></i> | <i class="fa fa-trash" aria-hidden="true" data-toggle="modal" data-target="#delete<?= $value['id_barang'] ?>"></i>
</td>
             </tr>
            <?php }  ?>
           </tbody>
         </table>
       </div>
     </div>
   </div>
   <!-- tambah modal -->
   <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open('barang/tambah') ?>
  <div class="form-group">
    <label>Nama Barang</label>
    <input type="text" class="form-control" name="nama_barang" placeholder="nama barang" required>
  </div>
   <div class="form-group">
    <label>Harga Barang</label>
    <input type="text" class="form-control" name="harga_barang" placeholder="harga barang" required>
  </div>
   <div class="form-group">
    <label>Stok</label>
    <input type="text" class="form-control" name="stok" placeholder="stok" required>
  </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <?php echo form_close() ?>
    </div>
  </div>
</div>

<!-- edit modal -->
<?php $no = 1; 
              foreach($barang as $key => $value){ ?>
<div class="modal fade" id="edit<?= $value['id_barang'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Barang </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open('barang/edit/'.$value['id_barang']) ?>
  <div class="form-group">
    <label>Nama Barang</label>
    <input type="text" class="form-control" name="nama_barang" value="<?= $value['nama_barang'] ?>" required>
  </div>
   <div class="form-group">
    <label>Harga Barang</label>
    <input type="text" class="form-control" name="harga_barang" value="<?= $value['harga_barang'] ?>" required>
  </div>
   <div class="form-group">
    <label>Stok</label>
    <input type="text" class="form-control" name="stok" value="<?= $value['stok'] ?>" required>
  </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <?php echo form_close() ?>
    </div>
  </div>
</div>
<?php } ?>
<?php $no = 1; 
              foreach($barang as $key => $value){ ?>
<div class="modal fade" id="delete<?= $value['id_barang'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete <?= $value['nama_barang'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        yakin ingin menghapus ?
      </div>
      <div class="modal-footer">
        <a href="<?= base_url('barang/delete/'.$value['id_barang']) ?>" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>
<?php } ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>