<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=no">
<?php include 'pay.php';?>    

	<title>每日白嫖系统</title>
	<style>
		body {
			font-size: 14px;
		}

		h2 {
			margin-top: 100px;
			margin-bottom: -50px;
			text-align: center;
			color: #2E4045;
			text-shadow: 0 0 5px #ccc;
		}

		.login-page {
			width: 360px;
			padding-top: 8%;
			margin: auto;
		}

		.form {
			position: relative;
			z-index: 1;
			background: #FFFFFF;
			max-width: 360px;
			margin: 0 auto 100px;
			padding: 45px;
			text-align: center;
			box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}

		.form input {
			background: #f2f2f2;
			width: 100%;
			border: 0;
			margin: 0 0 15px;
			padding: 15px;
			box-sizing: border-box;
			border-radius: 15px;
		}

		.form select {
			background: #f2f2f2;
			width: 100%;
			border: 0;
			margin: 0 0 15px;
			padding: 15px;
			box-sizing: border-box;
			border-radius: 15px;
		}

		.form button {
			background: #2E4045;
			width: 100%;
			border: 0;
			padding: 15px;
			color: #FFFFFF;
			border-radius: 15px;
		}

		p {
			color: red;
			text-align: center;
			margin-top: -50px;
		}
	</style>

</head>

<br><br><br><br><br>
<div class="login-page">
	<div class="form">
		<form name="form1" method="post" action="fuli_api.php">

			<select id="qu" name='qu'>
				<?php
				foreach ($quarr as $key => $value) {
					if ($value['hidde'] != true) {
						echo '<option value="' . $key . '">' . $value['name'] . '</option>';
					}
				}

				?>
			</select>
			<input type="text" placeholder="请输入游戏账号" id="user" name='user' maxlength="30" required />
			
			<input type="text" placeholder="请输入密码"  id="pwd" name='pwd' maxlength="30" required />
			

<br><br>


		
		<button type="submit" name="submit"  value="all">新手福利（限领一次）</button><br>
<br>
		
<button type="submit" name="submit"  value="getrand">快乐币抽奖2000一次</button><br><br>

		</form>
	</div>
</div>
</body>

</html>