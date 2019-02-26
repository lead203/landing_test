<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Test</title>
</head>
<body>
	<div id="wrapper">
		<header>
			<div>
				<form method="POST">
		            <table>
		                <tr>
		                	<td>Название:</td>
		                    <td><input type="text" name="name" placeholder="Название"></td>
		                </tr>
		                <tr>
		                	<td>Цена:</td>
		                    <td><input type="text" name="price" placeholder="Цена"></td>
		                </tr>
		                <tr>
		                    <td><input type="submit" value="Добавить"></td>
		                </tr>
		            </table>
        		</form>
        		<form method="POST">
        			<table>
        				<tr>
        					<td>Фильтр:</td>
        					<td><input type="text" name="value_filter" placeholder="Значение"></td>
		                    <td><input type="submit" name="filter" value="Отфильтровать"></td>
        				</tr>
        			</table>
        		</form>
			</div>
		</header>
		<main>
			<div>
				<?php echo $content ?>
			</div>
		</main>
	</div>
</body>
</html>