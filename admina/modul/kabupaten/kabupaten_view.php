
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manage Kabupaten
                    </h1>
                       <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>kabupaten">Kabupaten</a></li>
                        <li class="active">Kabupaten List</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                  <h3 class="box-title">List Kabupaten</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="dtb_manual" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>
                           <th style="width:25px" align="center">No</th>
													<th>ID Kabupaten</th>
													<th>Regional</th>
													<th>Provinsi</th>
                          <th>Kabupaten</th>
                          <th>create_date</th>													
                          <th>Action</th>
                         
                        </tr>
                                      </thead>
                                        <tbody>
                                         <?php 
      $dtb=$db->fetch_custom("select sys_kabupaten.id_provinsi,sys_kabupaten.id_kabupaten,sys_kabupaten.nama_kabupaten,sys_kabupaten.create_date,sys_provinsi.id_provinsi,sys_provinsi.regional,sys_provinsi.nama_provinsi,sys_kabupaten.id from sys_kabupaten  left join sys_provinsi on sys_kabupaten.id_provinsi=sys_provinsi.id_provinsi");
      $i=1;
      foreach ($dtb as $isi) {
        ?><tr id="line_<?=$isi->id;?>">
        <td align="center"><?=$i;?></td><td><?=$isi->id_kabupaten;?></td>
<td><?=$isi->regional;?></td>
<td><?=$isi->nama_provinsi;?></td>
<td><?=$isi->nama_kabupaten;?></td>
<td><?=$isi->create_date;?></td>

        <td>
        <a href="<?=base_index();?>kabupaten/detail/<?=$isi->id;?>" class="btn btn-success btn-flat"><i class="fa fa-eye"></i></a> 
        <?=($role_act["up_act"]=="Y")?'<a href="'.base_index().'kabupaten/edit/'.$isi->id.'" class="btn btn-primary btn-flat"><i class="fa fa-pencil"></i></a>':"";?>  
        <?=($role_act["del_act"]=="Y")?'<button class="btn btn-danger hapus btn-flat" data-uri="'.base_admin().'modul/kabupaten/kabupaten_action.php" data-id="'.$isi->id.'"><i class="fa fa-trash-o"></i></button>':"";?>
        </td>
        </tr>
        <?php
        $i++;
      }
      ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
        <?php
       foreach ($db->fetch_all("sys_menu") as $isi) {
                      if ($path_url==$isi->url) {
                          if ($role_act["insert_act"]=="Y") {
                    ?>
          <a href="<?=base_index();?>kabupaten/tambah" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah</a>
                          <?php
                          } 
                       } 
}
?>  
                </section><!-- /.content -->
        
