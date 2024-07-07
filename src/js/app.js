async function Route(page, params = "") {
  $("#loader-wrapper").fadeIn(200);
  if (params != "") {
    params ="&" + params;
  }
  try {
    const response = await fetch(page + ".php", { method: "HEAD" });
    if (response.ok) {
      // Sayfa varsa
      window.location.href = "index.php?page=" + page + params
    } else {
      // Sayfa yoksa veya başka bir hata durumu
      throw new Error('Sayfa bulunamadı');
    }
  } catch (error) {
    console.error("AJAX Hatası:", error);
    window.location.href = "error-404.php";
    // Opsiyonel olarak hatayı işleyin veya daha fazla inceleme için günlüğe kaydedin
  }
}

function swalReturnMessage(data) {
  if (data.status == 200) {
    return swal.fire({ // Burada return ekleniyor
      title: "Başarılı!",
      text: data.message,
      icon: "success",
      confirmButtonText: "Ok",
    });
  } else {
    return swal.fire({ // Ve burada da return ekleniyor
      title: "Hata!",
      text: data.message,
      icon: "error",
      confirmButtonText: "Ok",
    });
  }
}