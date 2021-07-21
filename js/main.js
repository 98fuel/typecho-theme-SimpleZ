document.addEventListener('DOMContentLoaded', function () {
      var winHeight = window.innerHeight,
            docHeight = document.documentElement.scrollHeight,
            progressBar = document.querySelector('#content_progress');
      progressBar.max = docHeight - winHeight;
      progressBar.value = window.scrollY;

      document.addEventListener('scroll', function () {
            progressBar.max = document.documentElement.scrollHeight - window.innerHeight;
            progressBar.value = window.scrollY;
      });
});


// 返回顶部按钮
$("#gotop").click(function(){
     $("html,body").animate({
        'scrollTop':'0'
     },300);
})
  
//  iframe
$('iframe').wrap('<p class="iframe"></p>')

 
// 导航栏
function block() {
    $('.menu-icon-1').css('display','none')
    $('.menu-icon-2').css('display','block')
    $('.header .layui-nav').attr('class','layui-nav nav-block')
    $('.nav-cover').css('display','block')
}
function none() {
    $('.menu-icon-1').css('display','block')
    $('.menu-icon-2').css('display','none')
    $('.header .layui-nav').attr('class','layui-nav nav-none')
    $('.nav-cover').css('display','none')
}

$('#theContentIndex').prepend('<h3>目录</h3>')


//获取div下面所有的a标签（返回节点对象）
var myNav = document.getElementById("nav").getElementsByTagName("a");

//获取当前窗口的url
var myURL = document.location.href;

//循环div下面所有的链接，
for(var i=1;i<myNav.length;i++){
   //获取每一个a标签的herf属性
  var links = myNav[i].getAttribute("href");
  var myURL = document.location.href;

  //查看div下的链接是否包含当前窗口，如果存在，则给其添加样式
  if(myURL.indexOf(links) != -1){
    myNav[i].className="active";
    myNav[0].className="";
   }
}

if(window.location.pathname=="/"){$('.header .nav li:nth-child(1) a').attr('class','active')}

window.addEventListener('scroll', function () {
    var scrollTop = document.documentElement.scrollTop;
    if (scrollTop > 66) {
        $('.header').css('background','#29292a')
        $('.nav li a').css('color','#fff')
        $('.header-wrap>div').html($('.post-title'))
        $('.post-title').attr('class','post-title post-title-logo')
    }else{
        $('.header').css('background','#fff')
        $('.nav li a').css('color','#343434')
        $('.post-title-wrap').append($('.post-title'))
        $('.post-title').attr('class','post-title')
    }
})

console.log('An interesting soul is very attractive.')
console.log('世界与你我皆美好！')
