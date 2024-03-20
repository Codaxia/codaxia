(function () {
  //===== Prealoder

  // window.onload = function () {
  // 	window.setTimeout(fadeout, 0);
  // }

  // function fadeout() {
  // 	document.querySelector('.preloader').style.opacity = '0';
  // 	document.querySelector('.preloader').style.display = 'none';
  // }

  /*=====================================
    Sticky
    ======================================= */
  window.onscroll = function () {
    var header_navbar = document.querySelector(".navbar-area");
    var sticky = header_navbar.offsetTop;

    if (window.pageYOffset > sticky) {
      header_navbar.classList.add("sticky");
    } else {
      header_navbar.classList.remove("sticky");
    }

    // show or hide the back-top-top button
    var backToTo = document.querySelector(".scroll-top");
    if (
      document.body.scrollTop > 50 ||
      document.documentElement.scrollTop > 50
    ) {
      backToTo.style.display = "flex";
    } else {
      backToTo.style.display = "none";
    }
  };

  if (document.getElementById("home")) {
    // for menu scroll
    var pageLink = document.querySelectorAll(".page-scroll");

    pageLink.forEach((elem) => {
      elem.addEventListener("click", (e) => {
        e.preventDefault();
        if (elem.hash) {
        document.querySelector(elem.hash).scrollIntoView({
          behavior: "smooth",
          offsetTop: 1 - 60,
        });
      }
      });
    });

    // section menu active
    function onScroll(event) {
        var sections = document.querySelectorAll(".page-scroll");
        var scrollPos =
          window.pageYOffset ||
          document.documentElement.scrollTop ||
          document.body.scrollTop;

        for (var i = 0; i < sections.length; i++) {
          var currLink = sections[i];
          var val = currLink.getAttribute("href").substring(1);
          var refElement = document.getElementById(val);
          if(!refElement) continue;
          var scrollTopMinus = scrollPos + 73;
          if (
            refElement.offsetTop <= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
          ) {
            document.querySelector(".page-scroll").classList.remove("active");
            currLink.classList.add("active");
          } else {
            currLink.classList.remove("active");
          }
        }
      }
  }
  window.document.addEventListener("scroll", onScroll);

  //===== close navbar-collapse when a  clicked
  let navbarToggler = document.querySelector(".navbar-toggler");
  var navbarCollapse = document.querySelector(".navbar-collapse");

  document.querySelectorAll(".page-scroll").forEach((e) =>
    e.addEventListener("click", () => {
      navbarToggler.classList.remove("active");
      navbarCollapse.classList.remove("show");
    })
  );
  navbarToggler.addEventListener("click", function () {
    navbarToggler.classList.toggle("active");
  });

  // WOW active
  new WOW().init();

  //====== counter up
  var cu = new counterUp({
    start: 0,
    duration: 2000,
    intvalues: true,
    interval: 100,
    append: " ",
  });
  cu.start();
})();

// Filters the portfolio page depending on the button clicked
document.addEventListener('DOMContentLoaded', function() {
  document.body.addEventListener('click', function(e) {
      if (e.target.classList.contains('filter-btn')) {
          const filter = e.target.getAttribute('data-filter');
          document.querySelectorAll('.filter-div').forEach(div => {
              if (div.getAttribute('data-category') === filter || filter === 'all') {
        div.classList.remove('remove')
              } else {
        div.classList.add('remove')
              }
          });
      }
  });
});

// Animation for button
const generateGlowButtons = () => {
  document.querySelectorAll(".glow-button").forEach((button) => {
      let gradientElem = button.querySelector('.gradient');
      
      if(!gradientElem) {
          gradientElem = document.createElement("div");
          gradientElem.classList.add("gradient");

          button.appendChild(gradientElem);
      }

      button.addEventListener("pointermove", (e) => {
          const rect = button.getBoundingClientRect();

          const x = e.clientX - rect.left;
          const y = e.clientY - rect.top;

          gsap.to(button, {
              "--pointer-x": `${x}px`,
              "--pointer-y": `${y}px`,
              duration: 0.6,
          });

          gsap.to(button, {
              "--button-glow": chroma
              .mix(
                  getComputedStyle(button)
                  .getPropertyValue("--button-glow-start")
                  .trim(),
                  getComputedStyle(button).getPropertyValue("--button-glow-end").trim(),
                  x / rect.width
              )
              .hex(),
              duration: 0.2,
          });
      });
  });
}

// Set variables on loaded
document.addEventListener('DOMContentLoaded', generateGlowButtons);

// Set variables on resize
window.addEventListener('resize', generateGlowButtons);