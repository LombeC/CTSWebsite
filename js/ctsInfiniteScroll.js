$('.videoContainer').infiniteScroll({
          // options
          path:videos{{#}}.php',
          append: '.chaloVideo',
          hideNav: '.pagination',
          checkLastPage: '.pagination__next',
          //loadOnScroll: false,
          button: '.view-more-button',
          status: '.scroller-status',
          scrollThreshold: false,
    });