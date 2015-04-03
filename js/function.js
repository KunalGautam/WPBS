$('.navbar-nav>li.dropdown>a').click(function() {
    if( $(this).parent().hasClass("open") ) {
        $(this).parent().removeClass('open');
        return false;
    }
    else {
        $(this).parent().addClass('open');
        return false;
    }
});

$('.dropdown-submenu>a').click(function() {
    if( $(this).parent().hasClass("open") ) {
        $(this).parent().removeClass('open');
        return false;
    }
    else {
        $(this).parent().addClass('open');
        return false;
    }
});
