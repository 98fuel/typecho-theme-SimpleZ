$(function(){
      // 代码高亮
  $("pre,code").addClass("prettyprint");
  prettyPrint();
    
  $('.post-content img').addClass('smallimg')
  $('.post-content img').wrap('<div class="imgbox"></div>')
  $('.comment-content img').addClass('smallimg')
  $('.comment-content img').wrap('<div class="imgbox"></div>')
  
    /*
   smallimg   // 小图
   bigimg  //点击放大的图片
   mask   //黑色遮罩
   */
  var obj = new zoom('mask', 'bigimg', 'smallimg');
  obj.init();
  
  
  var s1 = '2020-06-14';
  s1 = new Date(s1.replace(/-/g, "/"));
  s2 = new Date();
  var days = s2.getTime() - s1.getTime();
  var number_of_days = parseInt(days / (1000 * 60 * 60 * 24));
  document.getElementById('days').innerHTML = number_of_days;
  
  $('iframe').wrap('<p class="iframe"></p>')
  
    $('.submit').click(function () {
    setTimeout(function(){
      $('.submit').attr('disabled', 'disabled')
    },500)
    })
    
    $('.comment-by-author .comment-author img').attr('src','https://img.xiabanlo.cn/author.png')
      $('#smiliesbutton a').html('选择表情')
    
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
})