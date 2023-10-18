<?php
   $banco = new mysqli("localhost","root","","bd_games");
   if ($banco -> connect_errno){
     echo "encontrei o erro $banco -> errno --> $banco -> connect_errno";
     
   }
   else{
    echo"deu certo";
   }
?>
