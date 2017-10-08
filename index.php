<?php
include("rc4code.php");
header("Content-type: text/html; charset=utf-8"); 
if(isset($_GET['info'])){
// $array = array("status" => "0","message" => "ok","pageend" => ""); 
$array = array("status" => "0","message" => "ok"); 
	$viewkey=array("91PORN","直播盒子","蝌蚪窝","凹凸视频","搜罗VPN","赛风VPN");//$viewkey1[i];
	$code=array("porn91","窗口1","Tadpole_pit","窗口_凹凸","http://zntx.cc/bbs/upload/956/2017/09/23/1169998_1116320soluo_v1.28.apk","http://zntx.cc/bbs/upload/956/2017/09/18/1169998_2252370psiphon3.apk");//$viewkey1[i];
	$image=array("http://pan.cccyun.cc/view.php/bdf5f5f3371ea19c22d48751de4f0d0d.png","http://pan.cccyun.cc/view.php/96595cb7229e6e950b091cb299f7842a.png","http://pan.cccyun.cc/view.php/ae169ef934c0ac9a07abd12586939f2f.png","http://pan.cccyun.cc/view.php/400fdec376766c97d4b4bb774f23eec9.png","http://pan.cccyun.cc/view.php/6b9f7960fd9befc048676a1a55fc1d53.png","http://pan.cccyun.cc/view.php/f7d9201f4e0659b2d93254176cbfc25e.png");
for($i=0;$i<count($viewkey);$i++){
    // $sql_arr = mysql_fetch_assoc($check_query);
    /* $code = $sql_arr['code'];
    // $mp4 = $sql_arr['mp4'];'mp4'=>$mp4,
    $zz = $sql_arr['zuozhe'];
	$image=$sql_arr['imges'];
	$time=$sql_arr['riqi']; */
	$p=array('title'=>$viewkey[$i],'window'=>$code[$i],'imges'=>$image[$i]);
	$array["data"][]=$p;
}
$json=json_encode($array);
$json1=RC4 :: Encrypted('f7d9201f4e0659b2d93254176cbfc25e',$json);//bin2hex(rc4('haiai8532#',$json));
echo $json2="{".str_replace('8','#',$json1)."}";
}


?>
