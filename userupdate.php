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

      $statement = "INSERT INTO user_tbl (username,password,email,tmp_lahir,tgl_lhr,alamat,photo,tgl_input,tgl_update,user_input,user_update)
      VALUES ('$username','$nPass','$email','$tempat_lahir','$date','$address','$path',now(), now(),$user_input,$user_update)";
      mysqli_query($conn, $statement);
      move_uploaded_file($tmp,$path);


      mysqli_close($conn);
  }

?>