$(document).ready(function() {
  $(".toggle-nav").click(function() {
    $(".nav").slideToggle("slow", function() {});
  });

  if (window.innerWidth > 800) {
    var headerHeight = $(".header").height();
    $("section.reservation").css("margin-top", headerHeight + 100);
    $("section.iletisim-page").css("margin-top", headerHeight + 100);
  } else {
    var headerHeight = $(".header").height();
    $("section.reservation").css("margin-top", headerHeight + 50);
    $("section.iletisim-page").css("margin-top", headerHeight + 50);
  }

  (function Onscrollfnction() {
    $.fn.countTo = function(options) {
      options = options || {};

      return $(this).each(function() {
        // geçerli eleman için seçenekler ayarlanıyor
        var settings = $.extend(
          {},
          $.fn.countTo.defaults,
          {
            from: $(this).data("from"), //nu değerler aşağıda tanımlandıs
            to: $(this).data("to"),
            speed: $(this).data("speed"),
            refreshInterval: $(this).data("refresh-interval"),
            decimals: $(this).data("decimals")
          },
          options
        );
      });
    };

    $.fn.countTo.defaults = {
      from: 0, // öğenin başlaması gereken sayı
      speed: 1000, // Hedef numaraları arasında saymak için ne kadar zaman gerekir
      refreshInterval: 100, // öğenin ne sıklıkta güncellenmesi gerektiği
      decimals: 0 // Gösterilecek ondalık basamak sayısı
    };
    //verilen değerlere göre formatlama yapar
    function formatter(value, settings) {
      return value.toFixed(settings.decimals);
    }
  })(jQuery);
});

function dropDownClick() {
  document.getElementById("dropDown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches(".dropbtn")) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};

//SLİDER
const slideshowImages = document.querySelectorAll(".intro-slideshow img");

const nextImageDelay = 5000;
let currentImageCounter = 0; // setting a variable to keep track of the current image (slide)

// slideshowImages[currentImageCounter].style.display = "block";
slideshowImages[currentImageCounter].style.opacity = 1;

setInterval(nextImage, nextImageDelay);

function nextImage() {
  // slideshowImages[currentImageCounter].style.display = "none";
  slideshowImages[currentImageCounter].style.opacity = 0;

  currentImageCounter = (currentImageCounter + 1) % slideshowImages.length;

  // slideshowImages[currentImageCounter].style.display = "block";
  slideshowImages[currentImageCounter].style.opacity = 1;
}
//END SLİDER

//login
/* ------------------------------------ Click on login and Sign Up to  changue and view the effect
---------------------------------------
*/

function cambiar_login() {
  document.querySelector(".cont_forms").className =
    "cont_forms cont_forms_active_login";
  document.querySelector(".cont_form_login").style.display = "block";
  document.querySelector(".cont_form_sign_up").style.opacity = "0";

  setTimeout(function() {
    document.querySelector(".cont_form_login").style.opacity = "1";
  }, 400);

  setTimeout(function() {
    document.querySelector(".cont_form_sign_up").style.display = "none";
  }, 200);
}

function cambiar_sign_up(at) {
  document.querySelector(".cont_forms").className =
    "cont_forms cont_forms_active_sign_up";
  document.querySelector(".cont_form_sign_up").style.display = "block";
  document.querySelector(".cont_form_login").style.opacity = "0";

  setTimeout(function() {
    document.querySelector(".cont_form_sign_up").style.opacity = "1";
  }, 100);

  setTimeout(function() {
    document.querySelector(".cont_form_login").style.display = "none";
  }, 400);
}

function ocultar_login_sign_up() {
  document.querySelector(".cont_forms").className = "cont_forms";
  document.querySelector(".cont_form_sign_up").style.opacity = "0";
  document.querySelector(".cont_form_login").style.opacity = "0";

  setTimeout(function() {
    document.querySelector(".cont_form_sign_up").style.display = "none";
    document.querySelector(".cont_form_login").style.display = "none";
  }, 500);
}

//login
/* ------------------------------------ Click on login and Sign Up to  changue and view the effect
---------------------------------------
*/

function cambiar_login() {
  document.querySelector(".cont_forms").className =
    "cont_forms cont_forms_active_login";
  document.querySelector(".cont_form_login").style.display = "block";
  document.querySelector(".cont_form_sign_up").style.opacity = "0";

  setTimeout(function() {
    document.querySelector(".cont_form_login").style.opacity = "1";
  }, 400);

  setTimeout(function() {
    document.querySelector(".cont_form_sign_up").style.display = "none";
  }, 200);
}

function cambiar_sign_up(at) {
  document.querySelector(".cont_forms").className =
    "cont_forms cont_forms_active_sign_up";
  document.querySelector(".cont_form_sign_up").style.display = "block";
  document.querySelector(".cont_form_login").style.opacity = "0";

  setTimeout(function() {
    document.querySelector(".cont_form_sign_up").style.opacity = "1";
  }, 100);

  setTimeout(function() {
    document.querySelector(".cont_form_login").style.display = "none";
  }, 400);
}

function ocultar_login_sign_up() {
  document.querySelector(".cont_forms").className = "cont_forms";
  document.querySelector(".cont_form_sign_up").style.opacity = "0";
  document.querySelector(".cont_form_login").style.opacity = "0";

  setTimeout(function() {
    document.querySelector(".cont_form_sign_up").style.display = "none";
    document.querySelector(".cont_form_login").style.display = "none";
  }, 500);
}

//end login
