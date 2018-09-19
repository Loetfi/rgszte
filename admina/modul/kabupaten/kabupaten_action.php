<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("id_provinsi"=>$_POST["id_provinsi"],"id_kabupaten"=>$_POST["id_kabupaten"],"nama_kabupaten"=>$_POST["nama_kabupaten"],"create_date"=>$_POST["create_date"],);
  
  
  
   
    $in = $db->insert("sys_kabupaten",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("sys_kabupaten","id",$_GET["id"]);
    break;
  case "up":
   $data = array("id_provinsi"=>$_POST["id_provinsi"],"id_kabupaten"=>$_POST["id_kabupaten"],"nama_kabupaten"=>$_POST["nama_kabupaten"],"create_date"=>$_POST["create_date"],);
   
   
   

    
    $up = $db->update("sys_kabupaten",$data,"id",$_POST["id"]);
    if ($up=true) {
      echo "good";
    } else {
      return false; 
    }
    break;
  default:
    # code...
    break;
}

?>