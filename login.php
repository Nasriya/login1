<?php
session_start();

if ($_POST[op] != "ds") {
	$display_block = "
		<center><form method=POST action=\"$_SERVER[PHP_SELF]\">
		<table>
			<tr>
				<td>Username :</td>
				<td><input name=\"username\" type=\"text\" size=\"20\"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input name=\"password\" type=\"password\" size=\"20\"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type=\"hidden\" name=\"op\" value=\"ds\">
					<input type=submit name=\"submit\" value=\"�������к�\">
                                                                                                           <input type=\"reset\" value=\"ź������\" name=\"reset\">
				</td>
			</tr>
		</table>
	    </form></center>";

} else {
		include 'config.php';
		if ($_POST['username'] == "$adminuser" AND $_POST['password'] == "$adminpass") {
			$_SESSION[login] = "true";
			$_SESSION[username] = "$adminuser";
			header("Location: $redirectpage");
        		exit;
		} else {
		        $display_block = "<center><font face=\"MS Sans Serif\" size=\"2\">�س��͡ Username ���� Password �Դ��Ҵ��Ѻ �ô ��Ѻ仡�͡�����ա���駤�Ѻ <a href=\"$_SERVER[PHP_SELF]\">��Ѻ仡�͡���� ���꡷����</a></font></center>";
		}
}

?>

<!-- ������� Code HTML �������ٻẺ˹�ҵҢͧ˹�ҹ�� -->
<html>
<head>
<title>�ô LOGIN �����������к���͹</title>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620">
<style>
body, td
{
	font-family: Ms San Serif;
	font-size: 10pt;
}
</style>
</head>

<body bgcolor="#FFFFCC">
<br><br>
<center><font face="MS Sans Serif" size="6" color="#FF0000">�ô LOGIN �����������к���͹</font></center>
<br><br>

<!-- �ҡ��ͧ�������ʴ� FORM ��� LOGIN ����˹��� CODE ��÷Ѵ��ҹ��ҧ�������蹤�Ѻ -->
<?php echo "$display_block"; ?>

</body>
</html>
<!-- ����ش Code HTML �������ٻẺ˹�ҵҢͧ˹�ҹ�� -->