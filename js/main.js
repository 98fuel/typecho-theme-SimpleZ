$(function () {
  // 返回顶部平滑滚动
  $(".top-btn").click(function () {
    $("html,body").animate({
      scrollTop: '0px'
    }, 500);
  });
  // 当页面开始向下滑动时，返回顶部按钮已动画形式出现
  $(window).on("scroll", function () {
    if ($(window).scrollTop() >= 200) {
      $('.top-btn').addClass('top-btn-show')
    } else {
      $('.top-btn').removeClass('top-btn-show')
    }
  });

  //  iframe
  $('iframe').wrap('<p class="iframe"></p>')


  $('#autoMenu li a').click(function () {
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
    return false;
  });

  var myNav = document.getElementById("nav").getElementsByTagName("a");
  var myURL = document.location.href;
  for (var i = 1; i < myNav.length; i++) {
    var links = myNav[i].getAttribute("href");
    var myURL = document.location.href;
    if (myURL.indexOf(links) != -1) {
      myNav[i].className = "nav-active";
      myNav[0].className = "";
    }
  }

  if (window.location.pathname == "/") {
    $('.header .nav li:nth-child(1) a').attr('class', 'nav-active')
  }

  var i = 1;
  $('.menu-icon').click(function () {
    if (i == 1) {
      $('body').css('overflow', 'hidden');
      $('.nav').attr('class', 'nav menu-icon-1');
      $('.menu-icon').addClass('carte')
      i = 2;
    } else {
      $('body').css('overflow', 'inherit');
      $('.nav').attr('class', 'nav menu-icon-2');
      $('.menu-icon').removeClass('carte');
      i = 1;
    }
  })
  
$('#comments .submit').click(function () {
  setTimeout(function () {
    $('#comments .submit').attr('disabled', 'disabled');
    // setTimeout(function () {
    //   $('#comments .submit').attr('disabled', 'false');
    // }, 3000)
  },1000)
})

$('#comments .comment-meta a').attr('href','javascript:void(0);')
})

$('.tk-meta-input').before($('.el-textarea'))
$('.tk-meta-input').append($('.el-button+.el-button'))
$('.el-textarea').append($('.tk-row-actions-start'))

var s1 = '2020-06-14';
s1 = new Date(s1.replace(/-/g, "/"));
s2 = new Date();
var days = s2.getTime() - s1.getTime();
var number_of_days = parseInt(days / (1000 * 60 * 60 * 24));
document.getElementById('days').innerHTML = number_of_days;


// 我的悄悄话
console.log('Powered by hugo and Author by Nov8nana ⚡ date 2020.06.14 https://github.com/Nov8nana')
console.log('Your smile is like the sweetest bite in watermelon. 🍉 The person I like is called xx. ❤\n')

