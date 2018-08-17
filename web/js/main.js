/**
 * Выделяем активный пункт меню
 */


$(document).ready(function(){
    var link = window.location.pathname;
    $('.ResponsiveMenu1 li a[href="'+link+'"]').addClass('active');
});
