<!-- Content Header (Page header) -->
<?php
  include_once 'config.php';
?>

<section class="content-header">
  <h1>
    User Management
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Users</a></li>
    <li class="active">Add New Users</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <form role="form" action="" method="POST" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
            </div>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Place of Birth</label>
              <input type="text" class="form-control" id="tmp_lhr" name="tmp_lhr" placeholder="Enter Place of Birth">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Date of Birth</label>
              <input type="date" class="form-control" id="tgl_lhr" name="tgl_lhr" placeholder="Enter Date of Birth">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Address</label>
              <textarea name="address" id="address" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Upload Photo</label>
              <input type="file" id="foto" name="foto">
            </div>


          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" id="SIMPAN" name="SIMPAN" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div>
    <!--/.col (left) -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

<?php
  include 'config.php';
  if(isset($_POST['SIMPAN'])){
      $username = $conn-> real_escape_string($_POST['username']);
      $password = $_POST['password'];
      $name = $_POST['name'];
      $nPass = md5($password);
      $email = $_POST['email'];
      $tempat_lahir = $_POST['tmp_lhr'];
      $tgl_lahir = $_POST['tgl_lhr'];
      $date = strtotime($tgl_lahir);
      $date = date('Y-m-d', $date);
      $address = $_POST['address'];

      $foto = $_FILES['foto']['name'];
      $path = "images/".$foto;

      $tmp = $_FILES['foto']['tmp_name'];

     // $fotobaru = date('dmYHis').$foto;


      $tgl_input = date_default_timezone_get();
      $tgl_update = date_default_timezone_get();
      $user_input = 1;
      $user_update = 1;

      $statement = "INSERT INTO user_tbl (username,password, name,email,tmp_lahir,tgl_lahir,alamat,photo,tgl_input,tgl_update,user_input,user_update)
      VALUES ('$username','$nPass','$name','$email','$tempat_lahir','$date','$address','$path',now(), now(),$user_input,$user_update)";
      mysqli_query($conn, $statement);
      move_uploaded_file($tmp,$path);


      mysqli_close($conn);
  }

?>
