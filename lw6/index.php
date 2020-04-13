<?php
function render() 
    {
		$content = file_get_contents('_index_lw6.php');
		return $content;
	}	
$tmp = render();
echo $tmp;