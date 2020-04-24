humhub.module('scrollUpButton', function (module, require, $) {

    module.template = {
        scrollUpButton: '<a id="scrollUpButton"></a>'
    };

    var init = function () {
        var visible = false;

        var $sidebar = $('.layout-sidebar-container');
        if (!$('#wallStream').length || !$sidebar.length) {
            return;
        }

        var $btn = initButton($sidebar);
        var $window = $(window);
        $window.scroll(function () {
            var show = $window.scrollTop() > module.config.scrollTop;
            if (!visible && show) {
                $btn.addClass('show');
                visible = true;
            } else if(visible && !show) {
                $btn.removeClass('show');
                visible = false;
            }
        });
    };

    var initButton = function ($container) {
        var $btn = $(module.template.scrollUpButton)
            .css(module.config.buttonStyle)
            .on('click', function (e) {
                e.preventDefault();
                $('html, body').animate({scrollTop: 0});
            });

        $container.append($btn);

        if(!module.config.isCustomPosition) {
            var left = $container.offset().left + ($container.width() / 2) - ($btn.width() / 2);
            $btn.css({left: left + 'px'});
        }

        return $btn;
    };

    var unload = function () {
        $('#scrollUpButton').remove();
    };

    module.export({
        initOnPjaxLoad: true,
        init: init,
        unload: unload
    });
});