<script type="text/javascript"></script>
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
          <h3 class="box-title">List </h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive"> 


        	<table>
			<tr>
			<td>Pilih Provinsi</td>
			<td>:</td>
			<td>
				<!-- <script type="text/javascript" src="js/ajax_kota.js"></script> -->
				<select name="prop" id="prop" onchange="ajaxkota(this.value)">
					<option value="">Pilih Provinsi</option>
					<?php 
					$queryProvinsi=$db->raw_fetch_all("SELECT * FROM inf_lokasi where lokasi_kabupatenkota=0 and lokasi_kecamatan=0 and lokasi_kelurahan=0 order by lokasi_nama");

					// print_r($queryProvinsi); die();
					foreach ($queryProvinsi as $dataProvinsi) {
						echo '<option value="'.$dataProvinsi->lokasi_propinsi.'">'.$dataProvinsi->lokasi_nama.'</option>';
					}
					?>
				<select>
			</td>
		</tr>
		<tr>
			<td>Pilih Kota/Kab</td>
			<td>:</td>
			<td>
				<select name="kota" id="kota" onchange="ajaxkec(this.value)">
					<option value="">Pilih Kota</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pilih Kec</td>
			<td>:</td>
			<td>
				<select name="kec" id="kec" onchange="ajaxkel(this.value)">
					<option value="">Pilih Kecamatan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pilih Kelurahan/Desa</td>
			<td>:</td>
			<td>
				<select name="kel" id="kel">
					<option value="">Pilih Kelurahan/Desa</option>
				</select>
			</td>
		</tr>
</table>


      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div> 
</section><!-- /.content -->

<script type="text/javascript">
	var ajaxku;
function ajaxkota(id){
    ajaxku = buatajax();
    var url="../modul/wilayah/select_kota.php";
    url=url+"?q="+id;
    url=url+"&sid="+Math.random();
    ajaxku.onreadystatechange=stateChanged;
    ajaxku.open("GET",url,true);
    ajaxku.send(null);
}

function ajaxkec(id){
    ajaxku = buatajax();
    var url="../modul/wilayah/select_kota.php";
    url=url+"?kec="+id;
    url=url+"&sid="+Math.random();
    ajaxku.onreadystatechange=stateChangedKec;
    ajaxku.open("GET",url,true);
    ajaxku.send(null);
}

function ajaxkel(id){
    ajaxku = buatajax();
    var url="../modul/wilayah/select_kota.php";
    url=url+"?kel="+id;
    url=url+"&sid="+Math.random();
    ajaxku.onreadystatechange=stateChangedKel;
    ajaxku.open("GET",url,true);
    ajaxku.send(null);
}

function buatajax(){
    if (window.XMLHttpRequest){
    return new XMLHttpRequest();
    }
    if (window.ActiveXObject){
    return new ActiveXObject("Microsoft.XMLHTTP");
    }
    return null;
}
function stateChanged(){
    var data;
    if (ajaxku.readyState==4){
    data=ajaxku.responseText;
    if(data.length>=0){
    document.getElementById("kota").innerHTML = data
    }else{
    document.getElementById("kota").value = "<option selected>Pilih Kota/Kab</option>";
    }
    }
}

function stateChangedKec(){
    var data;
    if (ajaxku.readyState==4){
    data=ajaxku.responseText;
    if(data.length>=0){
    document.getElementById("kec").innerHTML = data
    }else{
    document.getElementById("kec").value = "<option selected>Pilih Kecamatan</option>";
    }
    }
}

function stateChangedKel(){
    var data;
    if (ajaxku.readyState==4){
    data=ajaxku.responseText;
    if(data.length>=0){
    document.getElementById("kel").innerHTML = data
    }else{
    document.getElementById("kel").value = "<option selected>Pilih Kelurahan/Desa</option>";
    }
    }
}

</script>

