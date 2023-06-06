$(function(){
    var menu = $('#gnb > li');
    var wrap = $('#gnbWrap');
    var menuHeight = wrap.outerHeight(true);
    var subMenu = menu.find('.sGnbArea ul li');
    var pageUrl = location.href;
    var activeMenu;

    //마우스를 올리면
    menu.mouseover(function(){
        menu.removeClass('on');
        $(this).addClass('on');
        var totalHeight = menuHeight + $(this).find('.sGnbArea').height();
        wrap.stop().animate({height:totalHeight});
    })
    .mouseout(function(){
        menu.removeClass('on');
        wrap.stop().animate({height:totalHeight});
        onActive();
    });

    subMenu.mouseover(function(){
        subMenu.removeClass('on');
        $(this).addClass('on');
    })
    .mouseout(function(){
        subMenu.removeClass('on')
        onActive();
    })

    subMenu.each(function(){
        var cm = $(this);
        var subUrl = cm.find('a').attr('href');
        var active = pageUrl.indexOf(subUrl);
        var blankLink = pageUrl.indexOf('#');

        if(active > -1 ) activeMenu = cm;
        
    })

    onActive();
    function onActive(){
        if(activeMenu) activeMenu.trigger('mouseover')
    }

});