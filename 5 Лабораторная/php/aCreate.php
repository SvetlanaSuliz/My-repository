<?php
// формируем пагинацию
	for ($i = 1; $i <= $str_pag; $i++){
		echo '<a class="btn btn-outline-primary" href="torty.php?page='.$i.'"> '.$i.' </a>';
	}
?>