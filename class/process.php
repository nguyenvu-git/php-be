<?php
    if(isset($_GET["search"])){
        echo "Tu khoa " . htmlspecialchars($_GET["search"]);
    }
?>