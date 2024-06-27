// /**
//  * Loads content from the server and updates the page history.
//  * @param {string} page - The page to load content for.
//  * @param {boolean} [updateHistory=true] - Indicates whether to update the page history. Default is true.
//  */
// function loadContent(page, updateHistory = true) {
//    console.log("loadContent : " + page);
//   // $("#loader-wrapper").fadeIn();
//   $.ajax({
//     url: "/content.php?page=" + page,
//     method: "POST",
//     success: function (response) {
//       $("#content").html(response);
//       //   setActiveLink(page);
//       if (updateHistory) {
//         history.pushState(
//           {
//             page: page,
//           },
//           "",
//           "/" + page
//         );
//         $("#loader-wrapper").fadeOut(); // Veya .hide() kullanabilirsiniz
//       }
//     },
//   });
// }

/**
 * Sets the active link in the sidebar menu based on the current page.
 * @param {string} page - The current page.
 */
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

// $(document).ready(function () {
//   $(".top-menu").click(function (event) {
//     event.preventDefault();

//     // Remove 'active' class from all items in the sidebar menu
//     $(".sidebar-menu .active").removeClass("active");

//     // Optional: Add 'active' class to the clicked top-menu item
//     $(this).parent().addClass("active");
//   });






$(document).ready(function () {
  $(window).on("load", function () {
    $("#loader-wrapper").fadeOut();
  });
});


  // Load the initial content
  const initialPage = window.location.pathname.substring(1);
  console.log("initialPage : " + initialPage);
  if (initialPage == "index.php") {
    const initialPage = "admin-dashboard";
  }
  history.replaceState(
    {
      page: initialPage,
    },
    "",
    "/" + initialPage
  );
  loadPage(initialPage, false);
  //   setActiveLink(initialPage);


/**
 * Handles the click event on the sidebar menu links.
 * @param {Event} event - The click event.
 */
$("#sidebar-menu a").click(function (event) {
  event.preventDefault();
  var page = $(this).attr("data-page") ?? null;
  if (page !== "" && page !== null) {
    console.log("page : " + page);
    loadPage(page);
    // setActiveLink(page);
  }
  //
  var href = $(this).attr("href") ?? null;
  if (href !== "" && href !== null && href !== "#") {
    window.location.href = href;
  }
});

function loadPage(page, updateHistory = true) {
  var params = "";
  var pagelink;
  // session_check();
  // Sayfanın var olup olmadığını kontrol et
  $.ajax({
    url: "/pages/" + page + ".php",
    type: "HEAD",
    error: function (xhr, status, error) {
      console.error("AJAX Hatası:", status, error);
      // Opsiyonel olarak hatayı işleyin veya daha fazla inceleme için günlüğe kaydedin
    },
    success: function () {
      // Sayfa varsa
      manageUrl(page, updateHistory);
      pagelink = "/pages/" + page + ".php?" + params;
      console.log("pagelink : " + pagelink);
      loadContent(pagelink);
    },
  });
}

function loadContent(pagelink) {
  // Show preloader

  $("#content").fadeOut(50, function () {
    $("#content").empty(); // İçeriği temizle
    $(this).load(pagelink, function () {
      // Yükleme tamamlandığında, içeriği göster
      $(this).fadeIn(50);

      // Hide preloader
      $("#loader-wrapper").fadeOut(300); // Veya .hide() kullanabilirsiniz
    });
  });
}
function manageUrl(page, updateHistory = true) {
  console.log("history page :" + page);
  if (updateHistory) {
    history.pushState(
      {
        page: "pages/" + page + ".php",
      },
      "",
      "/" + page
    );
  }
}

/**
 * Handles the popstate event when the forward or back button is clicked.
 * @param {Event} event - The popstate event.
 */
$(window).on("popstate", function (event) {
  if (event.originalEvent.state && event.originalEvent.state.page) {
    loadPage(event.originalEvent.state.page, false);
  }
});


/**
 * Handles the Route event and updates the content and active link.
 * @param {Event} event - The Route event.
 * @param {boolean} [remove=true] - Indicates whether to remove the active link. Default is true.
 */
function Route(event, remove = true) {
  event.preventDefault();
  var page = $(event.target).attr("data-page") ?? null;
  if (page !== "" && page !== null) {
    loadPage(page);
    RemoveActiveLink(remove);
    setActiveLink(page);
  }
}

/**
 * Removes the active link from the sidebar menu.
 * @param {boolean} [remove=true] - Indicates whether to remove the active link. Default is true.
 */
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