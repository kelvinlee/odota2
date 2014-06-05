<?php
	include('db.php');
  include('function.php');
  include('mysql.class.php'); 

  function echoRet( $ret ){ die( json_encode($ret) ); }


	$data = $_POST['data'];
	$data = base64_decode($data);
	$name = time()."_".rand(100,999);

	file_put_contents("./upload/".$name.".png",$data);


	$db = new db(); 
  $db->connect($db_config); 

  $info['text'] = gl($_POST['text']);
	$info['url'] = "upload/".$name.".png";
  $info['date'] = date("Y-m-d H:i:s");
  $s = $db->row_insert('share-mengchong',$info);

	$ret['msg'] = '成功.';
  $ret['state'] = 'success';
  $ret['id'] = $db->insert_id();
  echoRet( $ret );
?>