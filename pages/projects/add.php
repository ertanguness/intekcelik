<?php
if ($_POST && $_POST['method'] == "add") {

            $price = $_POST['price'];
            $StokAdi = $_POST['StokAdi'];
            $unit = $_POST['unit'];
       
        try {
            if ($price == "" || $StokAdi == "") {
                echo "Lütfen Boş Alan Bırakmayınız";
                return;
            } 
            
            
            $sql = $con->prepare("INSERT INTO stoklar (StokAdi, Fiyati,Birimi) VALUES (?, ?,?)");
            $sql->execute([$StokAdi, $price,$unit]);
            
            echo "Kayıt Başarılı";
        } catch (PDOException $ex) {
            echo "Kayıt Başarısız" . $ex->getMessage();
        }
 
}


?>

<div class="table-responsive">
    <table class="table datatable mb-0">
        <thead>
            <tr>
                <th>id</th>
                <th>Stok Adı</th>
                <th>Fiyatı</th>
                <th>Birimi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            try {
                // Establish a database connection       
                // Retrieve records from the "stoklar" table
                $sql = $con->prepare("SELECT * FROM stoklar");
                $sql->execute();
                    
                while ($row = $sql->fetch(PDO::FETCH_OBJ)) {  ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->StokAdi; ?></td>
                <td><?php echo $row->Fiyati; ?></td>
                <td><?php echo $row->Birimi; ?></td>
                <td><button type="submit" class="btn btn-sm btn-danger">Sil</button></td>
            </tr>


            <?php }
            } catch (PDOException $ex) {
                echo `Hata` .  $ex->getMessage();
            }
            ?>

        </tbody>
    </table>
</div>



<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Two Column Vertical Form</h4>
            </div>
            <div class="card-body">
                <form action="#" method="post">
                    <h4 class="card-title">Personal Information</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Stok Adı</label>
                                <input type="text" class="form-control" name="StokAdi">
                            </div>
                            <div class="input-block mb-3">
                                <label class="col-form-label">Fiyatı</label>
                                <input type="text" class="form-control" name="price">
                            </div>

                            <div class="input-block mb-3">
                                <label class="col-form-label">Birimi</label>
                                <input type="text" class="form-control" name="unit">
                            </div>
                        </div>

                    </div>

                    <input type="hidden" name="method" value="add">

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$(".btn-danger").click(function() {
    var $row = $(this).closest("tr"); // Find the row
    var $text = $row.find("td").eq(0).text(); // Find the text

    $.ajax({
        type: "POST",
        url: "/delete.php",
        data: {
            id: $text,
            "method": "stoklar"
        },
        success: function(data) {
            console.log(data);
            $row.remove();
        }
    });
});
</script>