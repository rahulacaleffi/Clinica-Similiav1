<?php
	if(Auth::check()){
        echo "<h1>Você está logado</h1>";
    } else {
    	echo "<h1>Você não está logado</h1>";
    }
?>