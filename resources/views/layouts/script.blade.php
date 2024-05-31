<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="/assets/js/script.js"></script>

{{-- NAVBAR --}}
<script>
    var lastScrollTop; // This Varibale will store the top position

    nav = document.getElementById("navbar"); // Get The NavBar

    window.addEventListener("scroll", function() {
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
</script>

{{--  owl dashboard - carousel --}}
<script>
    $(document).ready(function() {
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
</script>

{{-- PAGE GALERI --}}
<script>
    (function() {
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

            var navigate = function(dir) {
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

            item.addEventListener("mouseenter", function() {
                autoUpdate = false;
            });

            item.addEventListener("mouseleave", function() {
                autoUpdate = true;
            });

            setInterval(function() {
                if (autoUpdate) navigate("right");
            }, timeTrans);

            prevbtn.addEventListener("click", function() {
                navigate("left");
            });

            nextbtn.addEventListener("click", function() {
                navigate("right");
            });

            //keyboard navigation
            document.addEventListener("keydown", function(ev) {
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
            .forEach(function(item) {
                init(item);
            });
    })();
</script>

{{-- owl-car profil dashboard --}}
<script>
    $(document).ready(function() {
        $("#owl-profil-dash").owlCarousel({
            loop: true,
            margin: 20,
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
                425: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                1024: {
                    items: 2,
                },
            },
        });

    });
</script>

{{-- owl link terkait produk hukum pages produk hukum --}}
<script>
    $(document).ready(function() {
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
</script>

{{-- owl jenis produk hukum pages produk hukum --}}
<script>
    $(document).ready(function() {
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
</script>

{{-- PAGE PRODUK HUKUM --}}
<script>
    // $(document).ready(function() {
    //     $("#tableProduk").DataTable({
    //         ordering: false,
    //     });
    // });
</script>

{{-- PAGE SEMUA BERITA --}}
<script>
    $(document).ready(function() {
        $("#pageBerita").DataTable({
            ordering: false,
            "lengthMenu": [8, 16, 32, 64, 128],
            "pageLength": 8
        });
    });
</script>

{{-- PAGE PERPUSTAKAAN --}}
<script>
    $(document).ready(function() {
        $("#tablePerpustakaan").DataTable({
            filter: false,
            bLengthChange: false,
        });
    });
</script>
