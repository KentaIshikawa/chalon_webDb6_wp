jQuery('.slider').slick({
    arrows: false,
    autoplay: true,
    centerMode: true,
    centerPadding: '30%',
    autoplaySpeed: 0,
    cssEase: 'linear',
    speed: 10000,
    pauseOnFocus: false,
    pauseOnHover: false,
    responsive: [
        {
            breakpoint: 519,
            settings: {
                centerPadding: '16px',
            }
        }
    ]
});

/*================
下の画像の変更
================*/
/*
スクロールしたら、
(もし)スクロールした量が、クラスbg_placeholderの場所より大きかったらら、
クラスbgに、クラスonを付加する
そうじゃなかったら、
クラスbgから、クラスonを取る

$(window).on('scroll', () => {
    const scroll_height = $(window).scrollTop();
    const bg_pos = $('.bg_placeholder').offset().top;
    const window_height = $(window).height();
    console.log(window_height);
    if (scroll_height > bg_pos - window_height) {
        $('.bg').addClass('on');
    } else {
        $('.bg').removeClass('on');
    }
});*/

/*
id、bg_placeholderが、表示されたら、
id、bgに、クラスonを付加する

observerの使い方

const xxx = new IntersectionObserver(関数,[パラメータ]);
xxx.observe(対象);
*/

const bg_ob_func = (entries) => {
    const bg = document.querySelector('#bg');
    for(entry of entries){
        if (entry.isIntersecting) {
            bg.classList.add('on');
        } else {
            bg.classList.remove('on');
        }
    }
}

const bg_ob_param = {
    rootMargin: '100px'
};

const bg_ob = new IntersectionObserver(bg_ob_func, bg_ob_param);
bg_ob.observe(document.querySelector('#bg_placeholder'));


/*各タイトルをスクロールに合わせて表示*/
const title_ob_func = (entries) => {
    for(entry of entries){
        if (entry.isIntersecting) {
            entry.target.setAttribute('src', entry.target.dataset.src);
        }
    }
}

const title_ob_param = {
    rootMargin: '-100px'
};


const title_ob = new IntersectionObserver(title_ob_func, title_ob_param);


// title_ob.observe(document.querySelector('#sp_title_menu'));
// title_ob.observe(document.querySelector('#sp_title_lesson'));
const titles = document.querySelectorAll('.contents_title');
for (title of titles) {
    title_ob.observe(title);
}