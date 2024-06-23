<?php 

 require_once 'layouts/config.php';

if($_POST && $_POST['method'] == "stoklar"){
   
        $id = $_POST['id'];
        try {
            $sql = $con->prepare("DELETE FROM stoklar WHERE id = ?");
            $sql->execute([$id]);
            echo "Silme işlemi başarılı";
        } catch (PDOException $ex) {
            echo "Silme işlemi başarısız" . $ex->getMessage();
        }
       
    
}




if($_POST && $_POST['method'] == "company"){
  
        $id = $_POST['id'];
        try {
            $sql = $con->prepare("DELETE FROM stoklar WHERE id = ?");
            $sql->execute([$id]);
            echo "Silme işlemi başarılı";
        } catch (PDOException $ex) {
            echo "Silme işlemi başarısız" . $ex->getMessage();
        }
       
    
}