<?php

require_once "configs/connect.php";

// Yeni proje ekleme
if ($_POST["action"] == "project-new") {

    try {
        $sql = $con->prepare("INSERT INTO projeler (proje_adi, proje_aciklama) VALUES (?, ?)");
        $sql->execute(array("yeni proje", "yeni proje açıklama"));
        $res = [
            "status" => 200,
            "message" => "Proje başarıyla eklendi"
        ];
        echo json_encode($res);
    } catch (PDOException $e) {
        $res = [
            "status" => 400,
            "message" => "Error: " . $e->getMessage()
        ];
        echo json_encode($res);
    }
}

// tedarikci firma ekleme-güncelleme
if ($_POST["action"] == "saveSuppliers") {
    $id = $_POST["firma_id"];
    $firma_adi = $_POST["firma_adi"];
    $firma_yetkilisi = $_POST["firma_yetkilisi"];
    $firma_adresi = $_POST["firma_adresi"];
    $telefon1 = $_POST["telefon1"];
    $telefon2 = $_POST["telefon2"];
    $email_adresi = $_POST["email_adresi"];
    $faks = $_POST["faks"];
    $kategori = $_POST["kategori"];
    $sektor = $_POST["sektor"];
    $para_birimi = $_POST["para_birimi"];
    $durum = $_POST["status"];

    try {
        if ($id != 0) {
            $sql = $con->prepare("UPDATE firmalar SET firma_adi = ?, firma_yetkilisi = ?, firma_adresi = ?, telefon1 = ?, telefon2 = ?, email_adresi = ?, faks = ?, kategori = ?, sektor = ?, para_birimi = ?, durum = ? WHERE id = ?");
            $sql->execute(array($firma_adi, $firma_yetkilisi, $firma_adresi, $telefon1, $telefon2, $email_adresi, $faks, $kategori, $sektor, $para_birimi, $durum, $id));
            $res = [
                "status" => 200,
                "message" => "Tedarikçi Firma başarıyla güncellendi"
            ];
            echo json_encode($res);
            exit;
        } else {
            $sql = $con->prepare("INSERT INTO firmalar (firma_adi, firma_yetkilisi, firma_adresi, telefon1, telefon2, email_adresi, faks, kategori, sektor, para_birimi, durum) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $sql->execute(array($firma_adi, $firma_yetkilisi, $firma_adresi, $telefon1, $telefon2, $email_adresi, $faks, $kategori, $sektor, $para_birimi, 1));
            $res = [
                "status" => 200,
                "message" => "Tedarikçi Firma başarıyla eklendi"
            ];
            echo json_encode($res);
            exit;
        }
    } catch (PDOException $e) {
        $res = [
            "status" => 400,
            "message" => "Hata: " . $e->getMessage()
        ];
        echo json_encode($res);
    }
}




if ($_POST["action"] == "save-structure") {
    

    //$proje_id = $_POST["proje_id"];
    $yapi_adi = $_POST["yapi_adi"];
    $yapi_no = $_POST["yapi_no"];
    $bolum_no = $_POST["bolum_no"];
    $id = 0;
    // $id = $_POST["structure_id"];

    try {
        if ($id != 0) {
            $sql = $con->prepare("UPDATE proje_yapilari SET yapi_adi = ?, yapi_no = ?, bolum_no = ? WHERE id = ?");
            $sql->execute(array($yapi_adi, $yapi_no, $bolum_no, $_POST["structure_id"]));
            $res = [
                "status" => 200,
                "message" => "Yapı Kartı başarıyla güncellendi"
            ];
            echo json_encode($res);
            exit;
        } else {
            $sql = $con->prepare("INSERT INTO proje_yapilari (proje_id, yapi_adi, yapi_no, bolum_no) VALUES (?, ?, ?, ?)");
            $sql->execute(array(2, $yapi_adi, $yapi_no, $bolum_no));
        $lastid = $con->lastInsertId();
            $res = [
                "status" => 200,
                "message" => "Yapı Kartı başarıyla eklendi",
                "data" => $lastid
            ];
            echo json_encode($res);
            exit;
        }
    } catch (PDOException $e) {
        $res = [
            "status" => 400,
            "message" => "Error: " . $e->getMessage()
        ];
        echo json_encode($res);
    }
}




if($_POST["action"] == "delete-structure"){
  
    $ids = $_POST["dataid"];
    $idString = implode(',', array_map('intval', $ids)); // ID'leri güvenli bir şekilde string'e çevir
    try {
        $sql = $con->prepare("DELETE FROM proje_yapilari WHERE id IN ($idString)");
        $sql->execute();
        $res = [
            "status" => 200,
            "message" => "Silme işlemi başarılı"
        ];
        echo json_encode($res);
    } catch (PDOException $e) {
        $res = [
            "status" => 400,
            "message" => "Error: " . $e->getMessage()
        ];
        echo json_encode($res);
    }
}