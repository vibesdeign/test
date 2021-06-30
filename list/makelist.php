<?php
session_start();
set_time_limit(0);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無題ドキュメント</title>
<link rel="stylesheet" type="text/css" href="../css/list.css">
</head>

<body>
<?php


$order_array = array();
$order_array_num = array();


$post = $_POST['directory'];

include('../classes/create_directory.php');
include('../classes/array_class.php');
require_once('../classes/makelist.php');
require_once('../classes/spl_type.php');



$dir    = '/volume1/Public/[##order-yotsuba]/'.$post.'/';
$files1 = scandir($dir);


$file_num = 0;
$flip_num = 0;
$hard_num = 0;
$battery_num = 0;
$gls_num = 0;
$grp_num = 0;

for($i=0;$i<count($files1);$i++){

	print '<br>';
	print 'ファイル:'.$files1[$i];
	print '<br>';

	//$files1[$i] = splCaseOut($files1[$i]);
	if (substr($files1[$i],-3,3) == '.ai') {
		# code...

		$error = false;
		$path = $dir;

		if(strpos($files1[$i],'stdfip') !== false){
			$file_num++;

			// $path .= $post.'-flip/';
			// creare_directory($path);

		  	//print $files1[$i].'は手帳';

			$path .= discri_type($files1[$i]);
			creare_directory($path);

			$path .= discri_color($files1[$i]);
			creare_directory($path);

			//0502追加
			$order_array[$i] = $path;

			$path .= discri_num($files1[$i]);
			creare_directory($path);

			//0502追加
			$order_array_num[$i] = discri_num2($files1[$i]);

			$flip_num += discri_num2($files1[$i]);
			//print '<br>';

		}else if(strpos($files1[$i],'fldsgp')){
			$file_num++;

			// $path .= $post.'/';
			// creare_directory($path);

			//print $files1[$i].'熱転写光沢';

			$path .= discri_num($files1[$i]);
			creare_directory($path);

			//0502追加
			$order_array_num[$i] = discri_num2($files1[$i]);

			$gls_num += discri_num2($files1[$i]);
			//print '<br>';

		}else if(strpos($files1[$i],'gls')){
			$file_num++;

			// $path .= $post.'/';
			// creare_directory($path);

			//print $files1[$i].'熱転写光沢';

			$path .= $post.'ls/';
			creare_directory($path);

			$path .= discri_type($files1[$i]);
			creare_directory($path);

			//0502追加
			$order_array[$i] = $path;

			$path .= discri_num($files1[$i]);
			creare_directory($path);

			//0502追加
			$order_array_num[$i] = discri_num2($files1[$i]);

			$gls_num += discri_num2($files1[$i]);
			//print '<br>';

		}else if(strpos($files1[$i],'grp')){
			$file_num++;

			$path .= $post.'rp/';
			creare_directory($path);

			$path .= discri_type($files1[$i]);
			creare_directory($path);

			$order_array[$i] = $path;

			$path .= discri_num($files1[$i]);
			creare_directory($path);

			//0502追加
			$order_array_num[$i] = discri_num2($files1[$i]);

			$grp_num += discri_num2($files1[$i]);
			//print '<br>';

		}else if(strpos($files1[$i],'fip') || strpos($files1[$i],'sppfand') || strpos($files1[$i],'brnand') || strpos($files1[$i],'brnnip') || strpos($files1[$i],'sppnip')){
			$file_num++;

			$path .= $post.'-flip/';
			creare_directory($path);

			//print $files1[$i].'は手帳';

			$path .= discri_type($files1[$i]);
			creare_directory($path);

			// $path .= discri_color($files1[$i]);
			// creare_directory($path);

			//0502追加
			$order_array[$i] = $path;

			$path .= discri_num($files1[$i]);
			creare_directory($path);

			//0502追加
			$order_array_num[$i] = discri_num2($files1[$i]);

			$flip_num += discri_num2($files1[$i]);
			// print '<br>';
			// print discri_num2($files1[$i]);
			// print '<br>';

		}else if(strpos($files1[$i],'hip')){
			$file_num++;

			$path .= $post.'-hard/';
			creare_directory($path);

			print $files1[$i].'はハード';

			$path .= discri_type($files1[$i]);
			creare_directory($path);


			$path .= discri_color($files1[$i]);
			creare_directory($path);

			//0502追加
			$order_array[$i] = $path;

			$path .= discri_num($files1[$i]);
			creare_directory($path);

			//0502追加
			$order_array_num[$i] = discri_num2($files1[$i]);

			$hard_num += discri_num2($files1[$i]);
			//print '<br>';aqz03g

		}else if(
			strpos($files1[$i],'brahip') || strpos($files1[$i],'xpxzs') || strpos($files1[$i],'xpxc') || strpos($files1[$i],'xpz3s') || strpos($files1[$i],'xpz3c') || strpos($files1[$i],'xpz4s') || strpos($files1[$i],'xpa4') || strpos($files1[$i],'xpxp') || strpos($files1[$i],'xpz5s') || strpos($files1[$i],'xpz5c') || strpos($files1[$i],'xpz5p') || strpos($files1[$i],'gas6e') || strpos($files1[$i],'aqv38') || strpos($files1[$i],'gas7e') || strpos($files1[$i],'gas8s') || strpos($files1[$i],'gas8p') || strpos($files1[$i],'gas9s') || strpos($files1[$i],'gas9p') || strpos($files1[$i],'aqr03j') || strpos($files1[$i],'aqz04h') || strpos($files1[$i],'aqv32') || strpos($files1[$i],'xpxz1s') || strpos($files1[$i],'xpxz1c') || strpos($files1[$i],'aqc403') || strpos($files1[$i],'xpxzp') || strpos($files1[$i],'spphip') || strpos($files1[$i],'aqsh01k') || strpos($files1[$i],'aqrv41') || strpos($files1[$i],'aqr03k') || strpos($files1[$i],'aql24') || strpos($files1[$i],'gas04j') || strpos($files1[$i],'gasno01k') || strpos($files1[$i],'mon01k') || strpos($files1[$i],'arsf04k') || strpos($files1[$i],'mon01j') || strpos($files1[$i],'htv33') || strpos($files1[$i],'brntip7') || strpos($files1[$i],'aqe02j') || strpos($files1[$i],'kyv38') || strpos($files1[$i],'zc520kl') || strpos($files1[$i],'xpzu') || strpos($files1[$i],'aqx304') || strpos($files1[$i],'rrsf04j') || strpos($files1[$i],'sip') || strpos($files1[$i],'anone507') || strpos($files1[$i],'arsf01k') || strpos($files1[$i],'tip') || strpos($files1[$i],'arx02g') || strpos($files1[$i],'huap9l') || strpos($files1[$i],'aqxy404') || strpos($files1[$i],'kyv36') || strpos($files1[$i],'huap10') || strpos($files1[$i],'isaiv30p') || strpos($files1[$i],'zb570tl') || strpos($files1[$i],'huap20p') || strpos($files1[$i],'aqc305') || strpos($files1[$i],'xpz1f') || strpos($files1[$i],'xpz1s') || strpos($files1[$i],'xpxz2s') || strpos($files1[$i],'xpxz2c') || strpos($files1[$i],'arx04g') || strpos($files1[$i],'gasa8') || strpos($files1[$i],'zb551kl') || strpos($files1[$i],'huah06p') || strpos($files1[$i],'anonex3') || strpos($files1[$i],'isaiv32') || strpos($files1[$i],'sim704sh') || strpos($files1[$i],'huap20l') || strpos($files1[$i],'aqz01g') || strpos($files1[$i],'brnhip5t') || strpos($files1[$i],'aqv31') || strpos($files1[$i],'htl23') || strpos($files1[$i],'ze500kl') || strpos($files1[$i],'sim401sh') || strpos($files1[$i],'ftj152c') || strpos($files1[$i],'xpxz2p') || strpos($files1[$i],'digt302') || strpos($files1[$i],'huanl2') || strpos($files1[$i],'aqv33') || strpos($files1[$i],'aqz01h') || strpos($files1[$i],'arx02h') || strpos($files1[$i],'huap20s') || strpos($files1[$i],'aql25') || strpos($files1[$i],'arx01j') || strpos($files1[$i],'nxs5s') || strpos($files1[$i],'gasan01h') || strpos($files1[$i],'xpa1s') || strpos($files1[$i],'xpa2s') || strpos($files1[$i],'quav33') || strpos($files1[$i],'gasne01') || strpos($files1[$i],'ze551ml') || strpos($files1[$i],'anones3') || strpos($files1[$i],'anones4') || strpos($files1[$i],'ars03h') || strpos($files1[$i],'arf05j') || strpos($files1[$i],'xpxz3s') || strpos($files1[$i],'gglpx3s') || strpos($files1[$i],'dige503') || strpos($files1[$i],'kyv34') || strpos($files1[$i],'aqv35') || strpos($files1[$i],'aqc02h') || strpos($files1[$i],'aqe04g') || strpos($files1[$i],'isaiv31') || strpos($files1[$i],'htv32') || strpos($files1[$i],'aqc402') || strpos($files1[$i],'quav37') || strpos($files1[$i],'nxs5x') || strpos($files1[$i],'kyv31') || strpos($files1[$i],'xpz2s') || strpos($files1[$i],'aqz01f') || strpos($files1[$i],'aqsh01l') || strpos($files1[$i],'gglpx3l') || strpos($files1[$i],'aql22') || strpos($files1[$i],'temg1') || strpos($files1[$i],'gasj02f') || strpos($files1[$i],'arf01h') || strpos($files1[$i],'xpzl2') || strpos($files1[$i],'digj704') || strpos($files1[$i],'gas3s') || strpos($files1[$i],'aqsh38') || strpos($files1[$i],'aqz03g') || strpos($files1[$i],'digc404') || strpos($files1[$i],'nxs6p') || strpos($files1[$i],'aql23') || strpos($files1[$i],'gas6s') || strpos($files1[$i],'lgs03k') || strpos($files1[$i],'huap9') || strpos($files1[$i],'anones5') || strpos($files1[$i],'huanl3') || strpos($files1[$i],'aqshm07') || strpos($files1[$i],'gasno01l') || strpos($files1[$i],'gas02l') || strpos($files1[$i],'aqr2c') || strpos($files1[$i],'aqzero') || strpos($files1[$i],'aqr04l')  || strpos($files1[$i],'gasa30s') || strpos($files1[$i],'xp1s') || strpos($files1[$i],'huam10p') || strpos($files1[$i],'huam20p') || strpos($files1[$i],'huan3') || strpos($files1[$i],'gas10p') || strpos($files1[$i],'gas10s') || strpos($files1[$i],'xpace') || strpos($files1[$i],'arsf02l') || strpos($files1[$i],'gglpx3as') || strpos($files1[$i],'gglpx3al') || strpos($files1[$i],'aqxm503') || strpos($files1[$i],'huap30p') || strpos($files1[$i],'huap30l') || strpos($files1[$i],'anonex5') || strpos($files1[$i],'aqsbsc') || strpos($files1[$i],'rrsf03k') || strpos($files1[$i],'kyv45') || strpos($files1[$i],'lgs01l') || strpos($files1[$i],'aqz04f') || strpos($files1[$i],'arf05j') || strpos($files1[$i],'rrsf01l') || strpos($files1[$i],'anonex4') || strpos($files1[$i],'lgv36') || strpos($files1[$i],'huap30p') || strpos($files1[$i],'xp5s') || strpos($files1[$i],'gasa20s') || strpos($files1[$i],'anone') || strpos($files1[$i],'aqsen3p') || strpos($files1[$i],'gasno01m') || strpos($files1[$i],'aqsh02m') || strpos($files1[$i],'gglpx4l') || strpos($files1[$i],'ks705kc') || strpos($files1[$i],'anones7') || strpos($files1[$i],'xp8s') || strpos($files1[$i],'gglpx4s') || strpos($files1[$i],'aqxm303') || strpos($files1[$i],'arrowsu') || strpos($files1[$i],'gasa7s') || strpos($files1[$i],'aqs3bsc') || strpos($files1[$i],'aqzero2') || strpos($files1[$i],'huan1') || strpos($files1[$i],'za500kl') || strpos($files1[$i],'dmf03f') || strpos($files1[$i],'nxs6s') || strpos($files1[$i],'xp1mk2') || strpos($files1[$i],'xp10mk2') || strpos($files1[$i],'xp1mk3') || strpos($files1[$i],'xp10mk3')|| strpos($files1[$i],'kyv47')|| strpos($files1[$i],'gasa41s') || strpos($files1[$i],'gas205gp') || strpos($files1[$i],'gas205gs') || strpos($files1[$i],'aqr51a') || strpos($files1[$i],'arf51a') || strpos($files1[$i],'arsm05') || strpos($files1[$i],'arsrx') || strpos($files1[$i],'anones6') || strpos($files1[$i],'kyv43') || strpos($files1[$i],'huan5t') || strpos($files1[$i],'ztelbrs10') || strpos($files1[$i],'oppa5') || strpos($files1[$i],'ftj152b') || strpos($files1[$i],'opprenoa') || strpos($files1[$i],'gasa41s') || strpos($files1[$i],'arsf41a') || strpos($files1[$i],'oppreno35g') || strpos($files1[$i],'htcu11l') || strpos($files1[$i],'xp5mk2') || strpos($files1[$i],'kyv43') || strpos($files1[$i],'oppreno3a') || strpos($files1[$i],'lgs41a') || strpos($files1[$i],'gglpx4as') || strpos($files1[$i],'gglpx5s') || strpos($files1[$i],'aqsen4s') || strpos($files1[$i],'aqsen4l') || strpos($files1[$i],'aqsen5g') || strpos($files1[$i],'gasa51s') || strpos($files1[$i],'ztg01') || strpos($files1[$i],'ksa001kc') || strpos($files1[$i],'gglpx4a5g') || strpos($files1[$i],'gasa51g') || strpos($files1[$i],'gasa21s') || strpos($files1[$i],'rrsf42a') || strpos($files1[$i],'sima') || strpos($files1[$i],'arx52a') || strpos($files1[$i],'rmini2020') || strpos($files1[$i],'gasno20ug') || strpos($files1[$i],'oppa73') || strpos($files1[$i],'rhand21') || strpos($files1[$i],'arf52a') || strpos($files1[$i],'aqs4bsc') || strpos($files1[$i],'aqse') || strpos($files1[$i],'arf52a') || strpos($files1[$i],'anones8') || strpos($files1[$i],'aqsen4p')){
			$file_num++;

			$path .= $post.'-hard/';
			creare_directory($path);

			//print $files1[$i].'はハード';

			$path .= discri_type($files1[$i]);
			creare_directory($path);

			$path .= discri_color($files1[$i]);
			creare_directory($path);

			//0502追加
			$order_array[$i] = $path;

			$path .= discri_num($files1[$i]);
			creare_directory($path);

			//0502追加
			$order_array_num[$i] = discri_num2($files1[$i]);

			$hard_num += discri_num2($files1[$i]);
			//print '<br>';



		}else if(strpos($files1[$i],'brncip')){
			$file_num++;

			$path .= $post.'-熱転写光沢/';
			creare_directory($path);

			//print $files1[$i].'熱転写光沢';

			$path .= discri_type($files1[$i]);
			creare_directory($path);

			// $path .= discri_color($files1[$i]);
			// creare_directory($path);

			//0502追加
			$order_array[$i] = $path;

			$path .= discri_num($files1[$i]);
			creare_directory($path);

			//0502追加
			$order_array_num[$i] = discri_num2($files1[$i]);

			$hard_num += discri_num2($files1[$i]);
			//print '<br>';

		}else if(strpos($files1[$i],'mb04k')){
			$file_num++;

			$path .= $post.'-モバイルバッテリー/white/';
			creare_directory($path);

			//print $files1[$i].'熱転写光沢';

			$path .= discri_type($files1[$i]);
			creare_directory($path);

			// $path .= discri_color($files1[$i]);
			// creare_directory($path);

			//0502追加
			$order_array[$i] = $path;

			$path .= discri_num($files1[$i]);
			creare_directory($path);

			//0502追加
			$order_array_num[$i] = discri_num2($files1[$i]);

			$battery_num += discri_num2($files1[$i]);
			//print '<br>';

		}else{
			print 'error<br>';
			$error = true;
		}

		if($error){
			print '<br>エラーがありましたので、確認してください。';
		}else{
			$path .= $files1[$i];
			rename($dir.$files1[$i],$path);
			print '<br>';
			print ($files1[$i]);
			print '<br>';
		}
	}
}

print '総ファイル数：'.$file_num;

print '手帳ケース数：'.$flip_num;
print 'ハードケース数：'.$hard_num;
print '<br>';
print '<br>';


$mailto = 'info@yotsuba-insatsu.com';
$cc = 'w.yoneda@mawcoltd.jp';
$subject = date('md').'オーダー';
$body = 'ヨツバ印刷 ご担当者様%0D%0A
%0D%0A
お世話になっております。%0D%0A
製作依頼をお送りいたします。ご確認のほど宜しくお願いいたします。%0D%0A
%0D%0A
●制作依頼%0D%0A
・手帳ケース：'.$flip_num.'%0D%0A
　%0D%0A
・ハードケース：'.$hard_num.'%0D%0A
　%0D%0A
・Android手帳：'.(array_sum($_SESSION['num_array_stdfip']) - $_SESSION['straphole_num']).'%0D%0A
　%0D%0A
・強化ガラスケース：'.$gls_num.'%0D%0A
　%0D%0A
・グリップケース：'.$grp_num.'%0D%0A
　%0D%0A
・グリッター：'.array_sum($_SESSION['num_array_glitter']).'%0D%0A
　%0D%0A
・二つ折りパスケース：'.array_sum($_SESSION['num_array_fldsgp']).'%0D%0A
　%0D%0A
%0D%0A
データ不備、不明点など、ありましたらすぐに対応いたしますのでご連絡下さい。%0D%0A
以上よろしくお願いいたします。%0D%0A
';

print '
<div class="makemail">
<a href="mailto:'.$mailto.'?cc='.$cc.'&subject='.$subject.'&body='.$body.'" target="_blank">メール作成</a>
</div>
<hr>
info@yotsuba-insatsu.com,w.yoneda@mawcoltd.jp
<br><br>
オーダー
<br><br>
お世話になっております。<br>
製作依頼をお送りいたします。ご確認のほど宜しくお願いいたします。<br><br>

●制作依頼<br>
・手帳ケース：'.$flip_num.'<br>
　<br>
・ハードケース：'.$hard_num.'<br>
　<br>
・Android手帳：'.(array_sum($_SESSION['num_array_stdfip']) - $_SESSION['straphole_num']).'<br>
　<br>
・強化ガラスケース：'.$gls_num.'<br>
　<br>
・グリップケース：'.$grp_num.'<br>
　<br>
・グリッター：'.array_sum($_SESSION['num_array_glitter']).'<br>
　<br>
・二つ折りパスケース：'.array_sum($_SESSION['num_array_fldsgp']).'<br>
　<br>
<br>
データ不備、不明点など、ありましたらすぐに対応いたしますのでご連絡下さい。<br>
以上よろしくお願いいたします。<br>
';

// $order_array = array_merge($order_array);
// $order_array_num = array_merge($order_array_num);

// $order_num = over_rap_quantity($order_array,$order_array_num);
// for($i=0;$i < count($order_num[0]);$i++){
// 	 // print $order_num[0][$i].'---'.$order_num[1][$i];
// 	 // print '<br>';
// }

?>
</body>
</html>