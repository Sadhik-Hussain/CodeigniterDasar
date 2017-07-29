  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice
        <small>#007612</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Invoice</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Web1.
            <small class="pull-right">Date: <?php $datestring = '%d-%m-%Y';
											$now = time();
											$tgl = mdate($datestring, $now);
											echo $tgl;?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          User
          <address>
            <strong><?php echo $user->nama;?></strong><br>
            <?php echo $user->email;?><br>
          </address>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Qty</th>
              <th>Product</th>
			  <th>Jumlah Credit</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td><?php echo $paket->nama_paket;?></td>
			  <td><?php echo $paket->jumlah;?></td>
              <td><?php echo "Rp. " .number_format($paket->harga);?></td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Payment Methods:</p>
          <img src="assets/dist/img/credit/visa.png" alt="Visa">
          <img src="assets/dist/img/credit/mastercard.png" alt="Mastercard">
          <img src="assets/dist/img/credit/american-express.png" alt="American Express">
          <img src="assets/dist/img/credit/paypal2.png" alt="Paypal">

        </div>
        <!-- /.col -->
        <div class="col-xs-6">
         
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th>Total:</th>
                <td><?php echo "Rp. " .number_format($paket->harga);?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->
