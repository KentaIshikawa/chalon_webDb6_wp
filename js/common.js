//.hum_menuをクリックしたら、
//headerに.onを付けたり消したりする
$('.hum_menu').on('click', () => {
    $('header').toggleClass('on');
})

$(window).on('resize', () => {
    $('header').removeClass('on');
});