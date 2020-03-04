<?php

function mycookie($cookie){
    if(isset($_COOKIE[$cookie])){
        return $_COOKIE[$cookie];
    }
}

?>