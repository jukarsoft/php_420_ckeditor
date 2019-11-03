<form class="noticiasck" method="post" action="#">
			<textarea id="noticiasck" name="noticiasck">
				<?php
					readfile('420_noticias.html');
				?>
			</textarea>
			<script type="text/javascript">
				CKEDITOR.replace('noticiasck');
			</script>
			<input type="submit" name="modificanoticias" value="Modificar" >
			<form method="post"  > 
				<input type="submit" name="logoff" value="logoff">
			</form>
		</form>