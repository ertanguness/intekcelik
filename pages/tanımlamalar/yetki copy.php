<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yetki Tanımlama</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <style>
        .bg-header {
            background-color: #d9d9d9;
            font-weight: bold;
            border: 1px solid #aaa;
        }

        /* Özelleştirilmiş toggle boyutu */
        .toggle-small .toggle-group,
        .toggle-small .toggle-handle {
            height: 20px !important;
        }
    </style>
</head>

<body>

    <div class="page-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Yetki Tanımlama</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin-dashboard.php">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Yetki Grupları</li>
                    </ul>
                </div>
                <div class="col-auto float-end ms-auto">
                    <button type="button" id="save" data-title="Yetki Tanımlama" class="btn btn-info"><i class="fas fa-save mr-2"></i> Kaydet</button>
                    <a href="#" class="btn add-btn" id="liste" data-title="Yetki Grupları"><i class="fa-solid fa-arrow-left"></i> Listeye Dön</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
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
                                $checked = isset($auths[$row["id"]]) && $auths[$row["id"]] == "on" ? "checked" : '';

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
                                    <div class="card-header">
                                        <input type="checkbox" class="check toggle-small" <?php echo $checked; ?> data-id="<?php echo $row["id"] ?>" data-toggle="toggle" data-onstyle="info" data-offstyle="danger">
                                        <span class="ml-2">
                                            <?php echo $row["authTitle"]; ?>
                                        </span>
                                    </div>
                                </div>
                            <?php
                                $group = $row["authGroup"];
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <script>
        $(document).ready(function() {
            var formData = {};
            var roleId = $("#roleId").val();

            $('.check').bootstrapToggle({
                onstyle: "info",
                offstyle: "danger"
            });

            $('#save').on('click', function() {
                formData = {};

                $('input[type="checkbox"]:checked').each(function() {
                    var dataId = $(this).data('id');
                    formData[dataId] = "on";
                });

                $.ajax({
                    url: "ajax.php",
                    type: "POST",
                    data: {
                        "data": JSON.stringify(formData),
                        "action": "auth-define",
                        "roleId": roleId
                    },
                    success: function(data) {
                        var res = JSON.parse(data);
                        swal.fire({
                            title: "Başarılı!",
                            icon: "success",
                            text: res.message
                        });
                    }
                });
            });

            $("#liste").click(function() {
                RoutePagewithParams("roles/main", "");
                $("#page-title").text($(this).data("title"));
            });
        });
    </script>
</body>

</html>
