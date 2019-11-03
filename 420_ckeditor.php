<?php  

?>


<html>
<head>
	<title></title>
	<meta charset='UTF-8'>
	<style type="text/css">
		div.wraper {width: 400px; height: 300px; margin: auto;}
		div.noticias {
			width: 400px; height: 300px; border: 3px ridge blue; margin: auto; padding: 10px;
		}
	</style>
</head>
<body>
	<div class='wraper'>
		<div class="noticias">
			<?php
				readfile('420_noticias.html');
			?>
		</div>
	</div>
</body>
</html>