<?php

function lihatData(){
  require 'config.php';

  $result = mysqli_query($conn, "SELECT count(*) as total FROM user_tbl");
  $result = mysqli_fetch_assoc($result);
  $result = $result['total'];
  $no = 1;
  if($result > 0){
    $newStatement = mysqli_query($conn, "SELECT * FROM user_tbl");
    while ($row = mysqli_fetch_array($newStatement,MYSQLI_ASSOC)) {
      ?>
        <tr>
            <th scope="row"><?php echo $no; ?></th>
            <td><img src="<?php echo $row['photo']?>" width="20%"></td>
            <td><?php echo($row['username']); ?></td>
            <td><?php echo($row['tmp_lahir']); ?></td>
            <td><?php echo($row['tgl_lhr']); ?></td>
            <td><?php echo($row['alamat']);?></td>
            
        <td>
          <p>
              <a class="label label-danger" href="delete_pemilih.php?id=<?php echo $row['id']; ?>" >Hapus </a>
              <a class="label label-warning" href="edit_pemili.php?nik=<?php echo $row['nik']; ?>"><span class="glyphicon glyphicon-pencil"></span>Edit</a>
          </p>
        </td>
        </tr>
        <?php
          $no++;
    }
  }else{
    ?>
    <tr>
      <td>Tidak ada data</td>
    </tr>
    <?php
  }
}
 ?>
