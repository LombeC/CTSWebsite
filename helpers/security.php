<?php 
    function sanitizeString ($string){
        $string = trim($string);
        $string = stripslashes($string);
        $string = htmlspecialchars($string);
        return htmlentities($string, ENT_QUOTES, 'UTF-8', false);
    }
?>