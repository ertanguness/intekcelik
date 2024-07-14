$("#saveSuppliers").click(function () {
  $("#suppliersForm").validate({

    debug: true,
    errorElement: "em",
    errorContainer: $(".select2-container"),
    errorPlacement: function(error, element) {
      error.appendTo(element.next(".select2-container"));
    },
 
    rules: {
      firma_adi: { required: true, minlength: 2 },
      telefon: { required: true, minlength: 10, digits: true },
    },
    messages: {
      firma_adi: {
        required: "Lütfen Firma Adı giriniz",
        minlength: "Firma Adı minimum 2 karakter olmalıdır",
      },
      telefon: {
        required: "Lütfen Telefon Numarası giriniz",
        minlength: "Telefon Numarası minimum 10 karakter olmalıdır",
        digits: "Lütfen sadece rakam giriniz",
      },
    },
    submitHandler: function (form) {
      saveSuppliers();
    },
  });
});

function saveSuppliers() {
  var myform = document.getElementById("suppliersForm");
  var formData = new FormData(myform);
  formData.append("action", "suppliers");

  $.ajax({
    url: "ajax.php",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function (data) {
      var data = JSON.parse(data);
      swalReturnMessage(data).then((result) => {
        if (result.value) {
          window.location.reload();
        }
      });
    },
  });
}

$(".edit-supplier").click(function () {
  var row = $(this).closest("tr");
  var supplier_id = $(this).data("id");
  $(".modal-title").text("Firma Düzenle");
  $("#supplier_id").val(supplier_id);
  $("#firma_adi").val(row.find("td:eq(1)").text());
  $("#firma_yetkilisi").val(row.find("td:eq(2)").text());
  $("#firma_adresi").val(row.find("td:eq(3)").text());
  $("#telefon").val(row.find("td:eq(4)").text());
  $("#email_adresi").val(row.find("td:eq(5)").text());

  var status = row.find("td:eq(6)").text().trim();
  if (status == "Aktif") {
    status = 1;
  } else {
    status = 0;
  }
  $("#status").val(status);
  $(".select").select2();
});

function customReset() {
  // Formdaki tüm input alanlarını seç
  var inputs = document.querySelectorAll("form input, form textarea");

  // Her bir input alanını döngüye al
  inputs.forEach(function (input) {
    // supplier_id inputunu atla
    if (input.id !== "supplier_id") {
      input.value = ""; // Diğer tüm inputları sıfırla
    }
  });
}
