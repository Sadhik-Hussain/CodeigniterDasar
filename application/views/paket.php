  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Paket
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Paket</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><button class="btn btn-primary fa fa-plus" onclick="addpaket()"></button></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                
                <tr>
                  <th>No</th>
                  <th>Paket</th>
                  <th>Jumlah Credit</th>
                  <th>Harga</th>
				  <?php
				  $user_id = $this->session->userdata('level');
				  if ($user_id == "Admin"){
		          ?>
                  <th>Aksi</th>
				  <?php } else {
				  } ?>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                  foreach ($cr as $key) :
                ?>
                <tr>
                  <td><?php echo $no ;?></td>
                  <td><?php echo $key->nama_paket;?></td>
                  <td><?php echo $key->jumlah;?></td>
                  <td><?php echo $key->harga;?></td>
				  <?php
				  $user_id = $this->session->userdata('level');
				  if ($user_id == "Admin"){
		          ?>
                  <td><button class="btn btn-warning fa fa-edit" onclick="editpaket(<?php echo $key->id;?>)"></button>
                      <button class="btn btn-danger fa fa-close" onclick="deletepaket(<?php echo $key->id;?>)"> </button>
                  </td>
				  <?php } else {
				  } ?>
                </tr>
                <?php $no++;
                endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Paket</th>
                  <th>Jumlah Credit</th>
                  <th>Harga</th>
				  <?php
				  $user_id = $this->session->userdata('level');
				  if ($user_id == "Admin"){
		          ?>
                  <th>Aksi</th>
				  <?php } else {
				  } ?>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

    <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Phonebook Form</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <div class="form-body">
                <input name="id" placeholder="id" class="form-control" type="hidden">
            <div class="form-group">
              <label class="control-label col-md-3">Nama Paket</label>
              <div class="col-md-9">
                <input name="nama_paket" placeholder="Nama" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Jumlah</label>
              <div class="col-md-9">
                <input name="jumlah" placeholder="Jumlah" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Harga</label>
              <div class="col-md-9">
                <input name="harga" placeholder="Harga" class="form-control" type="text">
              </div>
            </div>

          </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save1()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->
  </div>
  <!-- /.content-wrapper -->