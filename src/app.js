function loadContent(page, updateHistory = true) {
  console.log("loadContent : " + page);
  $.ajax({
    url: "/content.php?page=" + page,
    method: "GET",
    success: function (response) {
      //   setActiveLink(page);
      $("#content").html(response);
      if (updateHistory) {
        history.pushState(
          {
            page: page,
          },
          "",
          "/" + page
        );
        $("#loader-wrapper").fadeOut(); // Veya .hide() kullanabilirsiniz
      }
    },
  });
}

function setActiveLink(page) {
  $(".sidebar-menu .active").removeClass("active");
  $("#sidebar-menu a").each(function () {
    if ($(this).attr("data-page") == page) {
      $(this).addClass("active");
    } else {
      $(this).removeClass("active");
    }
  });
}

// ileri veya geri butonuna basıldığında çalışacak fonksiyon
$(window).on("popstate", function (event) {
  if (event.originalEvent.state && event.originalEvent.state.page) {
    loadContent(event.originalEvent.state.page, false);
  }
});

$("#sidebar-menu a").click(function (event) {
  event.preventDefault();
  var page = $(this).attr("data-page") ?? null;
  if (page !== "" && page !== null) {
    loadContent(page);
    setActiveLink(page);
  }
});

$(document).ready(function () {
  $(".top-menu").click(function (event) {
    event.preventDefault();

    // Remove 'active' class from all items in the sidebar menu
    $(".sidebar-menu .active").removeClass("active");

    // Optional: Add 'active' class to the clicked top-menu item
    $(this).parent().addClass("active");
  });

  // Load the initial content
  const initialPage =
    window.location.pathname.substring(1) || "admin-dashboard";
    console.log("initialPage : " + initialPage);
  if (initialPage == "index.php") {
    const initialPage = "admin-dashboard";
    history.replaceState(
      {
        page: initialPage,
      },
      "",
      "/" + initialPage
    );
  }
    //loadContent(initialPage, false);
  //   setActiveLink(initialPage);
});

function Route(event, remove = true) {
  event.preventDefault();
  var page = $(event.target).attr("data-page") ?? null;
  if (page !== "" && page !== null) {
    loadContent(page);
    RemoveActiveLink(remove);
    setActiveLink(page);
  }
}

function RemoveActiveLink(remove = true) {
  if (remove == true) {
    $("#sidebar-menu a").each(function () {
      if ($(this).hasClass("subdrop")) {
        $(this).removeClass("subdrop");
        $(this).next("ul").hide(350);
      }
    });
  }
}
