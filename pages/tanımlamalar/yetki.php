
<?php
/*
$roleId = isset($_GET['id']) ? $_GET['id'] : $_POST['id'];

$sql = $con->prepare("SELECT * FROM userauths WHERE roleID = ?");
$sql->execute(array($roleId));
$result = $sql->fetch(PDO::FETCH_ASSOC);
if ($result) {
    $auths = json_decode($result["auths"], true); // true parametresi ile array olarak döndürür
}
*/
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<style>
    .bg-header {
        background-color: #d9d9d9;
        font-weight: bold;
        border: 1px solid #aaa;
    }
    .page-header .row {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .col-auto.ms-auto.d-flex {
        display: flex;
        align-items: center;
    }

    .col-auto.ms-auto.d-flex .btn {
        margin-right: 10px;
    }

    .col-auto.ms-auto.d-flex .btn:last-child {
        margin-right: 0;
    }
</style>

<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">Yetki Tanımlama</h3>
        </div>
        <div class="col-auto ms-auto d-flex justify-content-end">
            <a href="#" class="btn add-btn me-2" id="liste" data-title="Yetki Grupları"><i class="fa-solid fa-arrow-left"></i> Listeye Dön</a>
            <button type="button" id="save" data-title="Yetki Tanımlama" class="btn btn-info"><i class="fas fa-save mr-2"></i> Kaydet</button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-body">
                <form id="myForm">
                    <input type="hidden" value="<?php echo $roleId; ?>" id="roleId">
                    <?php

                    $sql = $con->prepare("SELECT * FROM authority WHERE isActive = ? ORDER BY authGroup ASC, id ASC");
                    $sql->execute(array(1));

                    $group = 0;
                    $groupCounter = 0; // Grupları saymak için
                    $colors = ['bg-danger', 'bg-warning', 'bg-success', 'bg-info', 'bg-primary', 'bg-secondary', 'bg-dark', 'bg-info']; // Canlı renk dizisi
                    $colorIndex = 0; // Başlangıç renk indeksi

                    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                        $checked = isset($auths[$row["id"]]) == "on" ? "checked" : '';

                        if ($group != $row["authGroup"]) {
                            if ($groupCounter % 3 == 0 && $groupCounter != 0) {
                                echo "</div><div class='w-100 mb-4'></div><div class='row'>"; // Her üç gruptan sonra boşluk bırakıp yeni satıra geç
                            } elseif ($groupCounter % 3 == 0) {
                                echo "<div class='row'>"; // Yeni satır başlangıcı
                            }
                            $groupCounter++;
                            $colorIndex = ($colorIndex + 1) % count($colors); // Renk indeksini değiştir
                        }

                        $cardClass = $row["isModule"] == 1 ? "bg-header" : 'bg-light';

                        if ($group != $row["authGroup"]) {
                            echo $group != 0 ? "</div><div class='col-md-4'>" : "<div class='col-md-4'>"; // Yeni grup için yeni sütun başlat
                        }
                    ?>

                        <div class="card card-outline p-0 collapsed-card shadow-sm <?php echo $cardClass; ?> mb-3">
                            <div>
                                <input type="checkbox" class="check" <?php echo $checked; ?> data-id="<?php echo $row["id"] ?>" data-on="On" data-off="Off" data-toggle="toggle" data-onstyle="info" data-offstyle="danger" >
                                <span class="ml-2">
                                    <?php echo $row["authTitle"]; ?>
                                </span>
                            </div>
                        </div>
                    <?php
                        $group = $row["authGroup"];
                    }
                    echo '</div></div>' ?>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>
   

    $("#liste").click(function() {
        var type = $("#type").val();

        RoutePagewithParams("roles/main", "")
        $("#page-title").text($(this).data("title"));
    });

    $(document).ready(function() {
        var formData = {};
        var roleId = $("#roleId").val();
        $('#save').on('click', function() {
            $('input[type="checkbox"]:checked').each(function() {
                // Checkbox'un data-id değeri
                var dataId = $(this).data('id');
                // Checkbox'un değeri
                var value = $(this).val();
                // formData'ya ekle
                formData[dataId] = value;
            });
            $.ajax({
                url: "ajax.php",
                type: "POST",
                data: {
                    "data": JSON.stringify(formData), // JSON formatında gönder
                    "action": "auth-define",
                    "roleId": $('#roleId').val() // roleId inputundan alınan değeri ekle
                },
                success: function(data) {
                    var res = JSON.parse(data);
                    swal.fire({
                        title: "Başarılı!",
                        icon: "success",
                        text: res.message,
                    });
                }
            });
        });
    });
</script>
