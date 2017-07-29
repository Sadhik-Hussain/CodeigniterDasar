  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2017.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js');?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/bower_components/jquery-ui/jquery-ui.min.js');?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/bower_components/raphael/raphael.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/morris.js/morris.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js');?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/bower_components/jquery-knob/dist/jquery.knob.min.js');?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/bower_components/moment/min/moment.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/bower_components/fastclick/lib/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/dist/js/pages/dashboard.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js');?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
  });
  
  var save_method; //for save method string
    var table;


    function add_phonebook()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_phonebook(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('phonebook_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id"]').val(data.id);
            $('[name="nama_kontak"]').val(data.nama_kontak);
            $('[name="telp"]').val(data.telp);

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Phonebook'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }

    function save()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo base_url('phonebook_add')?>";
      }
      else
      {
        url = "<?php echo site_url('phonebook_update')?>";
      }
			
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload()// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
				elert(errorThrown);
            }
        });
    }

    function delete_phonebook(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('phonebook_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

      }
    }

</script>
<script>
$(function(){
  $("#cont").autocomplete({
    source: "<?php echo base_url('searchCom')?>", // path to the get method
  });
});
</script>
<script>
  var save_method1; //for save method string
    var table;


    function addpaket()
    {
      save_method1 = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function editpaket(id)
    {
      save_method1 = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('paketedit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id"]').val(data.id);
            $('[name="nama_paket"]').val(data.nama_paket);
            $('[name="jumlah"]').val(data.jumlah);
			$('[name="harga"]').val(data.harga);

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Phonebook'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }

    function save1()
    {
      var url;
      if(save_method1 == 'add')
      {
          url = "<?php echo base_url('paketadd')?>";
      }
      else
      {
        url = "<?php echo site_url('paketupdate')?>";
      }
			
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload()// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
				elert(errorThrown);
            }
        });
    }

    function deletepaket(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('paketdelete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

      }
    }

</script>
<script>
  var save_method2; //for save method string
    var table;


    function adduser()
    {
      save_method2 = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edituser(id)
    {
      save_method2 = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('useredit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="user_id"]').val(data.user_id);
            $('[name="username"]').val(data.username);
            $('[name="nama"]').val(data.nama);
			$('[name="email"]').val(data.email);

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Phonebook'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }

    function save2()
    {
      var url;
      if(save_method2 == 'add')
      {
          url = "<?php echo base_url('useradd')?>";
      }
      else
      {
        url = "<?php echo site_url('userupdate')?>";
      }
			
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload()// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
				elert(errorThrown);
            }
        });
    }

    function deleteuser(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('userdelete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

      }
    }

</script>
</body>
</html>