


let players = {};

    function onYouTubeIframeAPIReady() {
        document.querySelectorAll('.youtube-player').forEach((iframe, index) => {
            players['player' + (index + 1)] = new YT.Player(iframe.id);
        });
    }

    function playVideo(index) {
        Object.keys(players).forEach((key, i) => {
            if (i === index) {
                players[key].playVideo();
            } else {
                players[key].pauseVideo();
            }
        });
    }


document.addEventListener("DOMContentLoaded", function () {

     let widgetLoaded = false;

    const modal = document.getElementById('tradingModal');
    modal.addEventListener('shown.bs.modal', function () {
        if (widgetLoaded) return;
        widgetLoaded = true;

        const container = document.getElementById('trading-widget-container');
        container.innerHTML = `
            <div class="tradingview-widget-container w-100" style="min-height:400px;">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright">
                    <a href="./indicadores/" rel="noopener nofollow" target="_blank">
                        <span>Más indicadores</span>
                    </a>                    
                </div>
            </div>
        `;

        // Crear el script dinámicamente
        const script = document.createElement('script');
        script.type = 'text/javascript';
        script.async = true;
        script.src = 'https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js';

        script.innerHTML = JSON.stringify({
            "colorTheme": "dark",
            "dateRange": "12M",
            "locale": "es",
            "largeChartUrl": "",
            "isTransparent": false,
            "showFloatingTooltip": false,
            "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
            "plotLineColorFalling": "rgba(41, 98, 255, 1)",
            "gridLineColor": "rgba(240, 243, 250, 0)",
            "scaleFontColor": "#DBDBDB",
            "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
            "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
            "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
            "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
            "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
            "tabs": [
                {
                      "title": "Forex",
      "symbols": [
        {
          "s": "FX_IDC:USDCLP",
          "d": "USD a CLP",
          "base-currency-logoid": "country/US",
          "currency-logoid": "country/CL"
        },
        {
          "s": "FX_IDC:CLPUSD",
          "d": "CLP a USD",
          "base-currency-logoid": "country/CL",
          "currency-logoid": "country/US"
        },
          {
          "s": "FX_IDC:CLFCLP",
          "d": "",
          "base-currency-logoid": "country/CL",
          "currency-logoid": "country/CL"
        },
        {
          "s": "FX:EURUSD",
          "d": "EURO a USD",
          "base-currency-logoid": "country/EU",
          "currency-logoid": "country/US"
        },
        {
          "s": "BITSTAMP:BTCUSD",
          "d": "BITCOIN a USD",
          "base-currency-logoid": "crypto/XTVCBTC",
          "currency-logoid": "country/US"
        }
      ],
      "originalTitle": "Forex"
                }
            ],
            "support_host": "https://www.tradingview.com",
            "backgroundColor": "#131722",
            "width": "100%",
            "height": "400",
            "showSymbolLogo": true,
            "showChart": true
        });

        container.querySelector('.tradingview-widget-container').appendChild(script);
    });



        /* let widgetLoaded = false;

        const modal = document.getElementById('tradingModal');

        modal.addEventListener('shown.bs.modal', function () {
            if (widgetLoaded) return;

            const container = document.getElementById('trading-widget-container');
            container.innerHTML = `<div class="text-center text-muted">Cargando indicadores...</div>`;

            fetch('https://mindicador.cl/api')
                .then(response => response.json())
                .then(data => {


                    console.log(data);
                    

                    const date = new Date(data.fecha);
                    const formattedDate = date.toLocaleDateString('es-CL', {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    });

                    const indicators = [
                        { key: 'uf', color: 'text-warning' },
                        { key: 'dolar', color: 'text-info' },
                        { key: 'dolar_intercambio', color: 'text-success' }
                    ];

                    let content = `<div class="text-center mb-4">
                        <small class="text-light">${formattedDate}</small>
                    </div><div class="row">`;

                    indicators.forEach(ind => {
                        const indicador = data[ind.key];
                        if (indicador) {
                            const valor = indicador.valor.toLocaleString('es-CL', {
                                style: 'currency',
                                currency: 'CLP',
                                minimumFractionDigits: 2
                            });

                            content += `
                                <div class="col-md-4 text-center mb-1">
                                    <h6 class="text-uppercase text-white">${indicador.nombre}</h6>
                                    <p class="fs-4 fw-bold ${ind.color}">${valor}</p>
                                </div>`;
                        }
                    });

                    content += `<div class="text-center mb-4">
                        <small class="text-light">Fuente: mindicador.cl</small>
                    </div></div>`;
                    container.innerHTML = content;
                })
                .catch(error => {
                    console.error('Error al obtener datos de la API de mindicador.cl:', error);
                    container.innerHTML = `<div class="text-danger text-center">No se pudo cargar la información. Intente más tarde.</div>`;
                });

            widgetLoaded = true;
        }); */
});



(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
    
    
    // Back to top and Whatsapp float button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
             $('.whatsapp-float').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
            $('.whatsapp-float').fadeOut('slow');
        }
    });

    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });

    $('.whatsapp-float').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        loop: true,
        nav: false,
        dots: true,
        items: 1,
        dotsData: true,
    });


    $(document).ready(function () {
        let carousel = $(".header-carousel");
        carousel.owlCarousel({
            items: 1,
            loop: true,
            nav: false,
            dots: true,
            autoplay: false,
            smartSpeed: 1000,
            onInitialized: function () {
                playVideo(0); // Reproduce el primer video al iniciar
            },
            onTranslated: function (event) {
                let index = event.item.index - event.relatedTarget._clones.length / 2;
                let count = event.item.count;
                if (index < 0) index = count - 1;
                if (index >= count) index = 0;
                playVideo(index);
            }
        });


        


    });


    


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            }
        }
    });


    // Portfolio isotope and filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });
    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('active');
        $(this).addClass('active');

        portfolioIsotope.isotope({filter: $(this).data('filter')});
    });

      var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    });

    let hasScrolledOnce = false;

    let alreadyShown = false;

$(window).on('scroll', function () {
    const scrollTop = $(this).scrollTop();

    if (scrollTop > 300 && !alreadyShown) {
        // Mostrar solo la primera vez
        $('.back-to-top').css('display', 'flex').hide().fadeIn('slow');
        $('.whatsapp-float').css('display', 'flex').hide().fadeIn('slow');
        alreadyShown = true; // Ya se mostraron
    } else if (alreadyShown) {
        // Comportamiento normal después de la primera vez
        if (scrollTop > 300) {
            $('.back-to-top').fadeIn('slow');
            $('.whatsapp-float').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
            $('.whatsapp-float').fadeOut('slow');
        }
    }
});


    
})(jQuery);

jQuery(document).ready(function($){

     // Desactiva dropdown automático de Bootstrap en móviles
  $('.navbar .dropdown-toggle').off('click.bs.dropdown');

  // En móviles, hacer que el click en dropdown-toggle abra/cierre el submenu sin navegar
  $('.navbar-collapse .dropdown-toggle').on('click', function(e) {
    if ($(window).width() < 992) { // breakpoint lg en Bootstrap
      e.preventDefault(); // prevenir navegación
      var $parent = $(this).parent();
      if ($parent.hasClass('show')) {
        $parent.removeClass('show');
        $parent.find('.dropdown-menu').first().slideUp();
      } else {
        // Cierra otros dropdowns abiertos
        $parent.siblings('.show').removeClass('show').find('.dropdown-menu').slideUp();
        $parent.addClass('show');
        $parent.find('.dropdown-menu').first().slideDown();
      }
    }
  });
  
  // Opcional: cerrar dropdown si clic fuera
  $(document).on('click touchstart', function(e) {
    if (!$(e.target).closest('.navbar-collapse').length) {
      $('.navbar-collapse .dropdown.show .dropdown-menu').slideUp();
      $('.navbar-collapse .dropdown.show').removeClass('show');
    }
  });
  
});






