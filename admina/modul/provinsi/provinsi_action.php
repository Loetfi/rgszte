<?php
session_start();
include "../../inc/config.php";
session_check();
switch ($_GET["act"]) {
  case "in":
  
  
  
  $data = array("id_provinsi"=>$_POST["id_provinsi"],"regional"=>$_POST["regional"],"nama_provinsi"=>$_POST["nama_provinsi"],"create_date"=>$_POST["create_date"],);
  
  
  
   
    $in = $db->insert("sys_provinsi",$data);
    
    if ($in=true) {
      echo "good";
    } else {
      return false;
    }
    break;
  case "delete":
    
    
    
    $db->delete("sys_provinsi","id",$_GET["id"]);
    break;
  case "up":
   $data = array("id_provinsi"=>$_POST["id_provinsi"],"regional"=>$_POST["regional"],"nama_provinsi"=>$_POST["nama_provinsi"],"create_date"=>$_POST["create_date"],);
   
   
   

    
    $up = $db->update("sys_provinsi",$data,"id",$_POST["id"]);
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