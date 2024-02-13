// NAVBAR
var lastScrollTop; // This Varibale will store the top position

nav = document.getElementById("navbar"); // Get The NavBar

window.addEventListener("scroll", function () {
    //on every scroll this funtion will be called

    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    //This line will get the location on scroll

    if (scrollTop > lastScrollTop) {
        //if it will be greater than the previous
        navbar.style.top = "-100px";
        //set the value to the negetive of height of navbar
    } else {
        navbar.style.top = "0";
    }

    lastScrollTop = scrollTop; //New Position Stored
});

// owl dashboard - carousel//
$(document).ready(function () {
    $("#owl-car-dashboard").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        animateOut: "fadeOut",
        smartSpeed: 500,

        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
        },
    });
});

// GALERI
(function () {
    function init(item) {
        var items = item.querySelectorAll("li"),
            current = 0,
            autoUpdate = true,
            timeTrans = 4000;

        //create nav
        var nav = document.createElement("nav");
        nav.className = "nav_arrows";

        //create button prev
        var prevbtn = document.createElement("button");
        prevbtn.className = "prev";
        prevbtn.setAttribute("aria-label", "Prev");

        //create button next
        var nextbtn = document.createElement("button");
        nextbtn.className = "next";
        nextbtn.setAttribute("aria-label", "Next");

        //create counter
        var counter = document.createElement("div");
        counter.className = "counter";
        counter.innerHTML = "<span>1</span><span>" + items.length + "</span>";

        if (items.length > 1) {
            nav.appendChild(prevbtn);
            nav.appendChild(counter);
            nav.appendChild(nextbtn);
            item.appendChild(nav);
        }

        items[current].className = "current";
        if (items.length > 1) items[items.length - 1].className = "prev_slide";

        var navigate = function (dir) {
            items[current].className = "";

            if (dir === "right") {
                current = current < items.length - 1 ? current + 1 : 0;
            } else {
                current = current > 0 ? current - 1 : items.length - 1;
            }

            var nextCurrent = current < items.length - 1 ? current + 1 : 0,
                prevCurrent = current > 0 ? current - 1 : items.length - 1;

            items[current].className = "current";
            items[prevCurrent].className = "prev_slide";
            items[nextCurrent].className = "";

            //update counter
            counter.firstChild.textContent = current + 1;
        };

        item.addEventListener("mouseenter", function () {
            autoUpdate = false;
        });

        item.addEventListener("mouseleave", function () {
            autoUpdate = true;
        });

        setInterval(function () {
            if (autoUpdate) navigate("right");
        }, timeTrans);

        prevbtn.addEventListener("click", function () {
            navigate("left");
        });

        nextbtn.addEventListener("click", function () {
            navigate("right");
        });

        //keyboard navigation
        document.addEventListener("keydown", function (ev) {
            var keyCode = ev.keyCode || ev.which;
            switch (keyCode) {
                case 37:
                    navigate("left");
                    break;
                case 39:
                    navigate("right");
                    break;
            }
        });

        // swipe navigation
        // from http://stackoverflow.com/a/23230280
        item.addEventListener("touchstart", handleTouchStart, false);
        item.addEventListener("touchmove", handleTouchMove, false);
        var xDown = null;
        var yDown = null;
        function handleTouchStart(evt) {
            xDown = evt.touches[0].clientX;
            yDown = evt.touches[0].clientY;
        }
        function handleTouchMove(evt) {
            if (!xDown || !yDown) {
                return;
            }

            var xUp = evt.touches[0].clientX;
            var yUp = evt.touches[0].clientY;

            var xDiff = xDown - xUp;
            var yDiff = yDown - yUp;

            if (Math.abs(xDiff) > Math.abs(yDiff)) {
                /*most significant*/
                if (xDiff > 0) {
                    /* left swipe */
                    navigate("right");
                } else {
                    navigate("left");
                }
            }
            /* reset values */
            xDown = null;
            yDown = null;
        }
    }
    [].slice
        .call(document.querySelectorAll(".cd-slider"))
        .forEach(function (item) {
            init(item);
        });
})();

// owl-car profil dashboard //
$(document).ready(function () {
    $("#owl-profil-dash").owlCarousel({
        loop: true,
        // margin: 20,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        smartSpeed: 500,
        animateOut: "fadeOut",
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
        },
    });
});

// owl link terkait produk hukum pages produk hukum //
$(document).ready(function () {
    $("#owl-link-terkait").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        smartSpeed: 500,

        responsive: {
            425: {
                items: 3,
            },
            768: {
                items: 3,
            },
            1024: {
                items: 6,
            },
        },
    });
});

//  PAGE GALERI  //
(function () {
    function init(item) {
        var items = item.querySelectorAll("li"),
            current = 0,
            autoUpdate = true,
            timeTrans = 4000;

        //create nav
        var nav = document.createElement("nav");
        nav.className = "nav_arrows";

        //create button prev
        var prevbtn = document.createElement("button");
        prevbtn.className = "prev";
        prevbtn.setAttribute("aria-label", "Prev");

        //create button next
        var nextbtn = document.createElement("button");
        nextbtn.className = "next";
        nextbtn.setAttribute("aria-label", "Next");

        //create counter
        var counter = document.createElement("div");
        counter.className = "counter";
        counter.innerHTML = "<span>1</span><span>" + items.length + "</span>";

        if (items.length > 1) {
            nav.appendChild(prevbtn);
            nav.appendChild(counter);
            nav.appendChild(nextbtn);
            item.appendChild(nav);
        }

        items[current].className = "current";
        if (items.length > 1) items[items.length - 1].className = "prev_slide";

        var navigate = function (dir) {
            items[current].className = "";

            if (dir === "right") {
                current = current < items.length - 1 ? current + 1 : 0;
            } else {
                current = current > 0 ? current - 1 : items.length - 1;
            }

            var nextCurrent = current < items.length - 1 ? current + 1 : 0,
                prevCurrent = current > 0 ? current - 1 : items.length - 1;

            items[current].className = "current";
            items[prevCurrent].className = "prev_slide";
            items[nextCurrent].className = "";

            //update counter
            counter.firstChild.textContent = current + 1;
        };

        item.addEventListener("mouseenter", function () {
            autoUpdate = false;
        });

        item.addEventListener("mouseleave", function () {
            autoUpdate = true;
        });

        setInterval(function () {
            if (autoUpdate) navigate("right");
        }, timeTrans);

        prevbtn.addEventListener("click", function () {
            navigate("left");
        });

        nextbtn.addEventListener("click", function () {
            navigate("right");
        });

        //keyboard navigation
        document.addEventListener("keydown", function (ev) {
            var keyCode = ev.keyCode || ev.which;
            switch (keyCode) {
                case 37:
                    navigate("left");
                    break;
                case 39:
                    navigate("right");
                    break;
            }
        });

        // swipe navigation
        // from http://stackoverflow.com/a/23230280
        item.addEventListener("touchstart", handleTouchStart, false);
        item.addEventListener("touchmove", handleTouchMove, false);
        var xDown = null;
        var yDown = null;
        function handleTouchStart(evt) {
            xDown = evt.touches[0].clientX;
            yDown = evt.touches[0].clientY;
        }
        function handleTouchMove(evt) {
            if (!xDown || !yDown) {
                return;
            }

            var xUp = evt.touches[0].clientX;
            var yUp = evt.touches[0].clientY;

            var xDiff = xDown - xUp;
            var yDiff = yDown - yUp;

            if (Math.abs(xDiff) > Math.abs(yDiff)) {
                /*most significant*/
                if (xDiff > 0) {
                    /* left swipe */
                    navigate("right");
                } else {
                    navigate("left");
                }
            }
            /* reset values */
            xDown = null;
            yDown = null;
        }
    }
    [].slice
        .call(document.querySelectorAll(".cd-slider"))
        .forEach(function (item) {
            init(item);
        });
})();

// owl jenis produk hukum pages produk hukum //
$(document).ready(function () {
    $("#owl-jenis-produk").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        smartSpeed: 500,
        responsive: {
            0: {
                items: 3,
            },
            600: {
                items: 5,
            },
        },
    });
});

// PAGE PRODUK HUKUM
// $(document).ready(function () {
// $("#tableProduk").DataTable({
//     filter: false,
//     bLengthChange: false,
// });
// });

// PAGE PERPUSTAKAAN
$(document).ready(function () {
    $("#tablePerpustakaan").DataTable({
        filter: false,
        bLengthChange: false,
    });
});

// grafik survey pengguna //
// new Chart(document.getElementById("pie-chart"), {
//     type: "pie",
//     data: {
//         labels: ["Sangat Puas", "Puas", "Tidak Puas"],
//         datasets: [
//             {
//                 backgroundColor: ["#EAD196", "#BF3131", "#7D0A0A"],
//                 data: [418, 263, 50],
//             },
//         ],
//     },
//     options: {
//         responsive: true,
//         maintainAspectRatio: true,
//     },
// });

// grafik jumlah kategori produk hukum //
// new Chart(document.getElementById("chartKategori"), {
//     type: "bar",
//     data: {
//         labels: [
//             "Perda",
//             "Perbub",
//             ["Keputusan", "Bupati"],
//             ["Surat", "Edaran"],
//             ["Instruksi", "Bupati"],
//             ["Nota", "Kesepahaman"],
//             ["Peraturan dan", "Keputusan DPRD"],
//             ["Peraturan ", "Perundang-undangan"],
//         ],
//         datasets: [
//             {
//                 backgroundColor: [
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                 ],
//                 data: [418, 263, 50, 120, 53, 70, 257, 392],
//             },
//         ],
//     },
//     options: {
//         responsive: true,
//         indexAxis: "y",
//         maintainAspectRatio: false,
//     },
// });

// grafik jumlah produk hukum pertahun //
// new Chart(document.getElementById("chartPertahun"), {
//     type: "bar",
//     data: {
//         labels: [
//             "2009",
//             "2010",
//             "2011",
//             "2012",
//             "2012",
//             "2013",
//             "2014",
//             "2015",
//             "2016",
//             "2017",
//             "2018",
//             "2019",
//             "2020",
//             "2021",
//             "2022",
//             "2023",
//             "2024",
//         ],
//         datasets: [
//             {
//                 backgroundColor: [
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                     "#e48f45",
//                 ],
//                 data: [
//                     418, 263, 50, 120, 53, 70, 257, 392, 200, 199, 50, 40, 10,
//                     32, 55, 99, 12,
//                 ],
//             },
//         ],
//     },
//     options: {
//         responsive: true,
//         indexAxis: "y",
//         maintainAspectRatio: false,
//     },
// });
