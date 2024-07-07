function addProject() {
  $("#myForm").submit();
}
var validobj = $("#myForm").validate({
  rules: {
    projekodu: { required: true, minlength: 2 },
    projeadi: { required: true, minlength: 2 },
    tekresim_sorumlusu: { required: true },
  },
  messages: {
    projekodu: {
      required: "Lütfen Proje kodu giriniz",
      minlength: "Proje Kodu minimum 2 karakter olmalıdır",
    },
    projeadi: {
      required: "Lütfen Proje Adı giriniz",
      minlength: "Proje Adı minimum 2 karakter olmalıdır",
    },
    tekresim_sorumlusu: {
      required: "Lütfen Teknik Resim Sorumlusu seçiniz",
    },
  },
  errorPlacement: function (error, element) {
    if (element.hasClass("select")) {
      error.appendTo(element.next(".select2-container"));
    } else {
      error.insertAfter(element);
    }
  },

  submitHandler: function (form) {
    saveProject();
  },
});
$(document).on("change", ".select", function () {
  validobj.form();
});

function saveProject() {
  var myform = document.getElementById("myForm");
  var formData = new FormData(myform);
  formData.append("action", "project-new");

  $.ajax({
    url: "ajax.php",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function (data) {
      var data = JSON.parse(data);
      swalReturnMessage(data);
    },
  });
}

$(document).ready(function () {
  $("#myTable").on("change", ".checkbox", function (e) {
    $(this).closest("tr").toggleClass("selected");
    if (!$(this).closest("tr").hasClass("selected")) {
      $(this).prop("checked", false);
    } else {
      $(this).prop("checked", true);
    }
  });
});

add_structure_card;

$("#add_structure_card").click(function () {
  var tableRow =
    "<tr>" +
    "<td> " +
    '<label class="custom_check ml-2">' +
    '<input type="checkbox" class="checkbox">' +
    '<span class="checkmark"></span>' +
    "</label>" +
    "</td>" +
    '<td><input class="form-control" name="yapi_adi" id="yapi_adi"/></td>' +
    '<td><input class="form-control" name="yapi_no" id="yapi_no"/></td>' +
    '<td><input class="form-control" name="bolum_no" id="bolum_no"/></td>' +
    "<td></td>" +
    "<td></td>" +
    '<td class="m-0 p-0">' +
    '<div class="btn-group m-0">' +
    '<a href="javascript:void(0);" class="btn btn-link delete_structure" data-bs-toggle="modal" data-bs-target="#delete_estimate"><i class="fa-regular fa-trash-can m-r-5"></i></a>' +
    '<a href="javascript:void(0);" class="btn btn-link save_structure"><i class="fa-regular fa-save m-r-5"></i></a>' +
    "</div>" +
    "</td>" +
    "</tr>";
  $("#sctTable tbody").append(tableRow);
});

$(document).on("click", ".save_structure", function () {
  var that = this;
  var yapi_adi = $("#yapi_adi").val();
  var yapi_no = $("#yapi_no").val();
  var bolum_no = $("#bolum_no").val();

  $.ajax({
    url: "ajax.php",
    type: "POST",
    data: {
      action: "save-structure",
      yapi_adi: yapi_adi,
      yapi_no: yapi_no,
      bolum_no: bolum_no,
    },
    success: function (data) {
      var tableRow = $(that).closest("tr");
       tableRow
        .find("#yapi_adi")
        .replaceWith('<label class="form-label">' + yapi_adi + '</label>');
      tableRow
        .find("#yapi_no")
        .replaceWith('<label class="form-label">' + yapi_no + '</label>');
      tableRow
        .find("#bolum_no")
        .replaceWith('<label class="form-label">' + bolum_no + '</label>');
      tableRow
        .find(".save_structure")
        .replaceWith(
          '<a href="javascript:void(0);" class="btn btn-link " data-bs-toggle="modal" data-bs-target="#edit-asset"><i class="fa-regular fa-edit m-r-5"></i></a>'
        );
      var data = JSON.parse(data);
      console.log(data.data);
      swalReturnMessage(data);
    },
  });
});

//satır Seçimi yapıldığında seçilen satırları silme
$("#delete_structure").click(function () {
  var data = [];
  var row = [];
  var table = $("#sctTable").DataTable();
  $("#sctTable tbody tr").each(function () {
    var checkbox = $(this).find(".checkbox");
    var isChecked = checkbox.prop("checked");
    if (isChecked) {
      var dataId = checkbox.data("id");
      var rowIndex = $(this).index();
      data.push(dataId);
      row.push(rowIndex);
    }
  });

  if (data.length > 0) {
    deletestructure(data, row);
  } else {
    swal.fire({
      title: "Uyarı",
      text: "Lütfen en az bir satır seçiniz",
      icon: "warning",
    });
  }
});

// $(document).ready(function () {
//   var table = $("#sctTable").DataTable();
//   table.on("click", "tbody tr", (e) => {
//     let classList = e.currentTarget.classList;

//     if (classList.contains("selected")) {
//       classList.remove("selected");
//     } else {
//       table
//         .rows(".selected")
//         .nodes()
//         .each((row) => row.classList.remove("selected"));
//       classList.add("selected");
//     }
//   });

//   $("#delete_structure").click(function () {
//     table.row(".selected").remove().draw(false);
//   });
// });

//Satırdaki sil tuşuna basınca satırı silme
$(".btn_delete_structure").click(function () {
  $(".delete-structure-modal").data("id", $(this).data("id"));
  $(".delete-structure-modal").data("row", $(this).closest("tr").index());
});

//satırdaki silme tuşuna basınca açılan modalda sil tuşuna basınca
$(".delete-structure-modal").click(function () {
  var data = [$(this).data("id")];
  // var data = $(this).data("id");
  var row = [$(this).data("row")];
  deletestructure(data, row);
});

function deletestructure(data, row) {
  var table = $("#sctTable").DataTable();
  $.ajax({
    url: "ajax.php",
    type: "POST",
    data: { action: "delete-structure", dataid: data },
    success: function (data) {
      var data = JSON.parse(data);
      if (data.status == 200) {
        swal.fire({
          title: "Başarılı",
          text: "Seçilen satırlar silindi",
          icon: "success",
        });
        row.sort((a, b) => b - a); // Sort the row indices in descending order
        row.forEach((element) => {
          table.row(`tr:eq(${element})`).remove().draw(false);
        });
      }
    },
  });
}
