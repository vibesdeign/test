<?php
session_start();
set_time_limit(0);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>入稿データ作成</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.22/css/uikit.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.22/js/uikit-icons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.22/js/uikit.min.js"></script>
<link rel='stylesheet' type='text/css' href='../css/delivery_button.css'>
<style type="text/css">
@import url(http://fonts.googleapis.com/earlyaccess/notosansjapanese.css);
body,li,a {
font-family:'Noto Sans Japanese',YuGothic, "Yu Gothic", 游ゴシック体, 游ゴシック, Helvetica, Verdana, "Hiragino Kaku Gothic Pro", "ヒラギノ角ゴ Pro W3", メイリオ, Meiryo, "ＭＳ Ｐゴシック", sans-serif;
font-size: 14px;}
</style>



</head>
<body>
<div class="uk-container uk-padding">
<?php $value = date("Ymd");?>
<p>リスト化</p>
<form action="makelist.php" method="post">
	<button class="uk-button uk-button-default c-amazon" type="submit" name="directory" value="<?php print $value;?>"><?php print $value;?></button>
    <button class="uk-button uk-button-default c-and" type="submit" name="directory" value="<?php print $value.'-std';?>"><?php print $value.'-std';?></button>
    <button class="uk-button uk-button-default c-gls" type="submit" name="directory" value="<?php print $value.'-g';?>"><?php print $value.'-g';?></button>
    <!-- <button class="uk-button uk-button-default c-grp" type="submit" name="directory" value="<?php //print $value.'-grp';?>"><?php //print $value.'-grp';?></button> -->
    <br>
    <br>
    <button class="uk-button uk-button-default c-v" type="submit" name="directory" value="<?php print $value.'v';?>"><?php print $value.'v';?></button>
    <button class="uk-button uk-button-default c-v" type="submit" name="directory" value="<?php print $value.'v/'.$value.'v-PassCase4pocket';?>">パスケース</button>
    <br>
    <br>
    <button class="uk-button uk-button-default c-sis" type="submit" name="directory" value="<?php print $value.'NoA';?>"><?php print $value.'NoA';?></button>
</form>
<hr>
<p>指定したフォルダをリスト化</p>
<form action="makelist.php" method="post">
	<input class="uk-input uk-form-width-medium" type="text" name="directory" value="<?php print $value;?>"> <input class="uk-button uk-button-default" type="submit" value="決定">
</form>


</div>
</body>
</html>