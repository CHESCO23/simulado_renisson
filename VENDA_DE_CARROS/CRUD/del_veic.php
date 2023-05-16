<?php
    require('../conn.php');

   if( isset($_GET['id'])){
        $id = $_GET['id'];
   }else{
        header("Location: ../cadastrar_prod.php");
   }

   $del_prod = $pdo->prepare('DELETE FROM patio_01 WHERE id=:id');
   $del_prod->execute(array(':id'=>$id));
   header("location:../menu.php");
?>