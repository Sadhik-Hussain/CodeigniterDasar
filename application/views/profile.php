  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/dist/img/user.png');?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $pro->nama;?></h3>

              <p class="text-muted text-center">Total Credits <?php echo $pro->credits;?></p>

                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right"><?php echo $pro->email;?></a>
                </li>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings" data-toggle="tab">Update</a></li>
			  <?php
			  $user_id = $this->session->userdata('level');
				if ($user_id == "Member"){
				?>
			  <li><a href="#credit" data-toggle="tab">Buy Credit</a></li>
				<?php } ?>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="settings">
                <form class="form-horizontal" action="" method="post">
                  <!-- select -->
                    
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $pro->nama;?>" name="nama" class="form-control" placeholder="Name">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" value="<?php echo $pro->email;?>" name="email" placeholder="Email">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputpassword" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                  </div>
          
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
			  <div class="tab-pane" id="credit">
                <form class="form-horizontal" action="<?php echo base_url('invoice');?>" method="post">
                  <!-- select -->
                    <div class="form-group">
					<label for="select" class="col-sm-2 control-label">Select</label>
						<div class="col-sm-10">
						<select name="paket" class="form-control">
							<?php foreach ($cr as $row):?>
							<option value="<?php echo $row->id;?>"><?php echo $row->nama_paket;?></option>
							<?php endforeach;?>
						</select>
						</div>
					</div>
          
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->