function loadContent(page, updateHistory = true) {
  $.ajax({
    url: "/content.php?page=" + page,
    method: "GET",
    success: function (response) {
      $("#content").html(response);
      //   setActiveLink(page);
      if (updateHistory) {
        history.pushState(
          {
            page: page,
          },
          "",
          "/" + page
        );
      }
    },
  });
}

// function setActiveLink(page) {
//   $("#sidebar-menu a").each(function () {
//     console.log($(this).attr("href").substring(1));
//     if ($(this).attr("href").substring(1) === page) {
//       $(this).addClass("active");
//     } else {
//       $(this).removeClass("active");
//     }
//   });
// }

function setActiveLink(page) {
  //   $("#sidebar-menu a").each(function () {
  //     if ($(this).attr("href").substring(1) === page) {
  //       if (!$(this).parent().hasClass("submenu")) {
  //         $(this).addClass("active");
  //       } else {
  //         $(this).parent().addClass("active");
  //       }
  //     } else {
  //       if (!$(this).parent().hasClass("submenu")) {
  //         $(this).removeClass("active");
  //       } else {
  //         $(this).parent().removeClass("active");
  //       }
  //     }
  //   });
}

$(window).on("popstate", function (event) {
  if (event.originalEvent.state && event.originalEvent.state.page) {
    loadContent(event.originalEvent.state.page, false);
  }
});

$(document).ready(function () {
  $("#sidebar-menu a").click(function (event) {
    event.preventDefault();
    //const pagedata = $(this).attr("href").substring(1);
    var page = $(this).attr("data-page") ?? null;
    if (page !== "" && page !== null) {
      loadContent(page);
    }
  });

  // Load the initial content
  const initialPage = window.location.pathname.substring(1) || "admin-dashboard";
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
  loadContent(initialPage, false);
  //   setActiveLink(initialPage);
});
