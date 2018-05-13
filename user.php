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
            <td><?php echo($row['tgl_lahir']); ?></td>
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


<section class="content">
      <div class="row">
        <div class="col-xs-12">

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="dataTables_length" id="example1_length">
                      <label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>

                      </select> entries</label></div></div>

                      <div class="col-sm-6">
                        <div id="example1_filter" class="dataTables_filter">
                          <label>
                            Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div>

                            <div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                  
                <tr role="row">

                  <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 182px;" aria-sort="descending">No</th>

                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Foto</th>


                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Name</th>

                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Tempat lahir</th>

                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 156px;">Tanggal lahir</th>

                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Alamat
                  </th>

                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Aksi
                  </th>

                </tr>
                </thead>
                <tbody>
                <?php
                lihatData();

                ?>
                
<!--                 <tr role="row" class="odd">
                  <td class="sorting_1">Webkit</td>
                  <td>Safari 1.2</td>
                  <td>OSX.3</td>
                  <td>125.5</td>
                  <td>A</td>
                
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Webkit</td>
                  <td>Safari 1.3</td>
                  <td>OSX.3</td>
                  <td>312.8</td>
                  <td>A</td>

                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Webkit</td>
                  <td>Safari 2.0</td>
                  <td>OSX.4+</td>
                  <td>419.3</td>
                  <td>A</td>
                
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Webkit</td>
                  <td>Safari 3.0</td>
                  <td>OSX.4+</td>
                  <td>522.1</td>
                  <td>A</td>
                </tr>

                <tr role="row" class="odd">
                  <td class="sorting_1">Webkit</td>
                  <td>OmniWeb 5.5</td>
                  <td>OSX.4+</td>
                  <td>420</td>
                  <td>A</td>
                </tr>

                <tr role="row" class="even">
                  <td class="sorting_1">Webkit</td>
                  <td>iPod Touch / iPhone</td>
                  <td>iPod</td>
                  <td>420.1</td>
                  <td>A</td>
                </tr>

                <tr role="row" class="odd">
                  <td class="sorting_1">Webkit</td>
                  <td>S60</td>
                  <td>S60</td>
                  <td>413</td>
                  <td>A</td>
                </tr>

                <tr role="row" class="even">
                  <td class="sorting_1">Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Trident</td>
                  <td>Internet
                    Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td>5.5</td>
                  <td>A</td>
                </tr> -->

              </tbody>
              </table>

            </div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
        </div>
      </div>
    </section>

         