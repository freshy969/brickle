<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta name="theme-color" content="#7776a2">
<link href="/img/favi.png" rel="shortcut icon" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link href='https://fonts.googleapis.com/css?family=Cuprum:400, 400italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="stylex.css">
<meta name="description" content="Brickle - ��� ���������� ����, � ������� ������������ �������� �� ���� �������, ���������� � ���, � �������� �� ��� ���������. ����� ����� ��������� ����������� � �������������, ��������� ������������ � ���������, � ������ ������. ����������� �� ����� �������� ����� ���������� � ��� ����������� ���� - ���������. ����: �������, �����, brickle, ������� 2015, ������� 2016, ����, ������� ����, �����������, �����, ���������� ����, ���� �������, ���� ������, ���������, ��� �����������, ���, brickle rate, photorate, battle rating, rate battle, rating battle, rating war">
<title>Brickle - ���� � ����.</title>
</head>
<body>
<div class="hh" style="margin-top:17px;">
<div class="head">
<div class="logo"><a href="/" style="color: white; text-decoration:none;">Brickle</a></div>
<div class="nav">
<input type="text" class="search" placeholder=" �����..">
</div>
</div></div>

<div class="bb">
<div class="body" style="margin-top:-20px;">



<?
if (isset ($_POST['messageFF'])) {
$email = "fages@ukr.net";
$theme = "����� � ����� ���������. Brickle SUPPORT.";
$theme = "=?windows-1251?b?". base64_encode($theme) ."?=";
$message = "���: ".$_POST['nameFF']."\n����: ".$_POST['themeFF']."\nEmail: ".$_POST['contactFF']."\n���������: ".$_POST['messageFF'];
$headers = 'Content-type: text/plain; charset="windows-1251"';
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
  mail ($email,$theme,$message, $headers);
echo('<br><font style="float: left;color: #7776a2; background: #efefef; padding: 5px; width: 285px; margin-left: 10px;">���� ��������� ����������!</font>');
}
?>

<div class="phpsupport">
<form method="POST" id="feedback-form">
��� � ��� ����������:<br>
<input type="text" name="nameFF" required placeholder="������� ��� ��������" x-autocompletetype="name"><br>
Email ��� �����:<br>
<input type="email" name="contactFF" required placeholder="����� ����������� �����" x-autocompletetype="email"><br>
����:<br>
<input type="text" name="themeFF" required placeholder="����������� ��������" x-autocompletetype="name"><br>
���� ���������:<br>
<textarea name="messageFF" required rows="5"></textarea><br>
<input type="submit" value="���������">
</form>
</div>

<div class="faqx" style="    width: 550px;
    margin-left: 330px;">

<script type="text/javascript" src="//vk.com/js/api/openapi.js?127"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {redesign: 1, mode: 3, width: "550", height: "400", color1: '7776a2', color2: 'FFFFFF', color3: 'FFFFFF'}, 114433626);
</script>

<div class="sblock" style="margin-top:10px; width: 530px; border-radius: 3px; height: 166px;"><br>
<a href="#about" class="dlink">� ���</a> 
<a href="http://brickle.pp.ua/support.php" class="dlink">�������� �����</a> 
<a href="#command" class="dlink">���� �������</a> 
<a href="#about_callibration" class="dlink">� ����������</a> 
<br><br>2016 (c) Brickle.pp.ua<br>



</div>

</div></div>

<div class="dd">
<div class="down">

</div></div>

</body>

</html>