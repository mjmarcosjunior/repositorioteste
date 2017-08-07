var utils = {};

utils.debounce = function(func, wait, immediate){
    var timeout;
    return function(){
        var context = this, args = arguments;
        var later = function(){
            timeout = null;
            if(!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if(callNow) func.apply(context, args);
    };
};

utils.animeScroll = function (target, animationClass){
    var offset = $(window).height() * 9/10;
    var documentTop = $(document).scrollTop();

    $(target).each(function(){
        var itemTop = $(this).offset().top;
        if(documentTop > itemTop - offset){
           $(this).addClass(animationClass);
        };
    });
};

