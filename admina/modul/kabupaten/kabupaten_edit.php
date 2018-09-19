                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Kabupaten
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>kabupaten">Kabupaten</a></li>
                        <li class="active">Edit Kabupaten</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Kabupaten</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/kabupaten/kabupaten_action.php?act=up">
                      <div class="form-group">
                        <label for="id_provinsi" class="control-label col-lg-2">id_provinsi</label>
                        <div class="col-lg-10">
                          <input type="text" name="id_provinsi" value="<?=$data_edit->id_provinsi;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="id_kabupaten" class="control-label col-lg-2">id_kabupaten</label>
                        <div class="col-lg-10">
                          <input type="text" name="id_kabupaten" value="<?=$data_edit->id_kabupaten;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="nama_kabupaten" class="control-label col-lg-2">nama_kabupaten</label>
                        <div class="col-lg-10">
                          <input type="text" name="nama_kabupaten" value="<?=$data_edit->nama_kabupaten;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="create_date" class="control-label col-lg-2">create_date</label>
                        <div class="col-lg-10">
                          <input type="text" id="tgl1" data-rule-date="true" name="create_date" value="<?=$data_edit->create_date;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->

                      <input type="hidden" name="id" value="<?=$data_edit->id;?>">
                      <div class="form-group">
                        <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                        <div class="col-lg-10">
                          <input type="submit" class="btn btn-primary btn-flat" value="submit">
                        </div>
                      </div><!-- /.form-group -->
                    </form>
                    <a href="<?=base_index();?>kabupaten" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 