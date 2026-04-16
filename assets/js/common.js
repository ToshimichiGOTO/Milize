
//ページTOPから一定スクロール時に変更

//サイドアイコンメニュー
$(function () {
  var $header = $("#fixed");
  var scrollSize = 600; //超えると表示
  $(window).on("load scroll", function () {
    var value = $(this).scrollTop();
    if (value > scrollSize) {
      $header.addClass("scroll");
    } else {
      $header.removeClass("scroll");
    }
  });
});

//グロナビ　スクロール時の出現
var startPos = 0, winScrollTop = 0;
$(window).on('scroll', function () {
  winScrollTop = $(this).scrollTop();
  if (winScrollTop >= startPos) {
    $('#header').addClass('hide');
  } else {
    $('#header').removeClass('hide');
  }
  startPos = winScrollTop;
});

//グロナビ　時間経過で出現
var timer = false;
$(window).scroll(function () {
  if (timer !== false) {
    clearTimeout(timer);
  }
  timer = setTimeout(function () {
    setTimeout(function () {
      $("#header").removeClass("hide")
    }, 2300);
  }, 200);
});

//ハンバーガーメニュー制御
$(function () {
  $('#hamburger').on('click', function () {
    $('.line-icon').toggleClass('close');
    $('.smartphone').slideToggle();
  });
});

//出現アニメーション（スクロール
$(function () {
  var scrollAnimationElm = document.querySelectorAll('.load-scroll');
  var scrollAnimationFunc = function () {
    for (var i = 0; i < scrollAnimationElm.length; i++) {
      var triggerMargin = 100; //画面の範囲内に入ってからの余白
      var elm = scrollAnimationElm[i];
      var showPos = 0;
      if (elm.dataset.sa_margin != null) {
        triggerMargin = parseInt(elm.dataset.sa_margin);
      }
      if (elm.dataset.sa_trigger) {
        showPos = document.querySelector(elm.dataset.sa_trigger).getBoundingClientRect().top + triggerMargin;
      } else {
        showPos = elm.getBoundingClientRect().top + triggerMargin;
      }
      if (window.innerHeight > showPos) {
        var delay = (elm.dataset.sa_delay) ? elm.dataset.sa_delay : 0;
        setTimeout(function (index) {
          scrollAnimationElm[index].classList.add('is-show');
        }.bind(null, i), delay);
      }
    }
  }
  window.addEventListener('load', scrollAnimationFunc);
  window.addEventListener('scroll', scrollAnimationFunc);
});

//出現アニメーション（時間経過
//https://itblogger-note.blogspot.com/2021/02/js-element-fade.html

$(function () {
  var scrollAnimationElm = document.querySelectorAll('.load-scroll-late');
  var scrollAnimationFunc = function () {
    for (var i = 0; i < scrollAnimationElm.length; i++) {
      var triggerMargin = 800; //画面の範囲内に入ってからの余白
      var elm = scrollAnimationElm[i];
      var showPos = 0;
      if (elm.dataset.sa_margin != null) {
        triggerMargin = parseInt(elm.dataset.sa_margin);
      }
      if (elm.dataset.sa_trigger) {
        showPos = document.querySelector(elm.dataset.sa_trigger).getBoundingClientRect().top + triggerMargin;
      } else {
        showPos = elm.getBoundingClientRect().top + triggerMargin;
      }
      if (window.innerHeight > showPos) {
        var delay = (elm.dataset.sa_delay) ? elm.dataset.sa_delay : 0;
        setTimeout(function (index) {
          scrollAnimationElm[index].classList.add('is-show');
        }.bind(null, i), delay);
      }
    }
  }
  window.addEventListener('load', scrollAnimationFunc);
  window.addEventListener('scroll', scrollAnimationFunc);
});

//Normal
$(function () {
  function load_effect() {
    var element = document.getElementsByClassName('load-fast');
    if (!element) return; // 要素がない場合は終了

    for (var i = 0; i < element.length; i++) {
      element[i].classList.add('is-show');
    }
  }
  setTimeout(load_effect, 200); // 600ミリ秒経過後に実行
});
//Normal
$(function () {
  function load_effect() {
    var element = document.getElementsByClassName('load-normal');
    if (!element) return; // 要素がない場合は終了

    for (var i = 0; i < element.length; i++) {
      element[i].classList.add('is-show');
    }
  }
  setTimeout(load_effect, 600); // 600ミリ秒経過後に実行
});
//Normal
$(function () {
  function load_effect() {
    var element = document.getElementsByClassName('load-late');
    if (!element) return; // 要素がない場合は終了

    for (var i = 0; i < element.length; i++) {
      element[i].classList.add('is-show');
    }
  }
  setTimeout(load_effect, 1000); // 600ミリ秒経過後に実行
});


