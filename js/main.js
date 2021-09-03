document.addEventListener('DOMContentLoaded', function () {
  var winHeight = window.innerHeight,
  docHeight = document.documentElement.scrollHeight,
  progressBar = document.querySelector('#content_progress');
  progressBar.max = docHeight - winHeight;
  progressBar.value = window.scrollY;

  document.addEventListener('scroll', function () {
      progressBar.max = document.documentElement.scrollHeight - window.innerHeight;
      progressBar.value = window.scrollY;
      var gotopvalue = parseInt((progressBar.value)/(progressBar.max)*100)
      var Gotopvalue = document.getElementById('gotopvalue');
      Gotopvalue.innerText = gotopvalue + '%';
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


$('#theContentIndex').prepend('<h3>目录</h3>')

var myNav = document.getElementById("nav").getElementsByTagName("a");
var myURL = document.location.href;
for(var i=1;i<myNav.length;i++){
var links = myNav[i].getAttribute("href");
var myURL = document.location.href;
if(myURL.indexOf(links) != -1){
  myNav[i].className="active";
  myNav[0].className="";
 }
}

if(window.location.pathname=="/"){
  $('.header .nav li:nth-child(1) a').attr('class','active')
}

$('.post-content a').attr('target','_blank')
$('.post-content #theContentIndex a').attr('target','')
$('.post-content .simple-mulu a').attr('target','')

var i = 1;
$('.menu-icon').click(function(){
  if(i==1){
      $('body').css('overflow','hidden');
      $('.nav').attr('class','nav menu-icon-1');
      $('.menu-icon').addClass('carte')
      i = 2;
  }else {
      $('body').css('overflow','inherit');
      $('.nav').attr('class','nav menu-icon-2');
      $('.menu-icon').removeClass('carte');
      i = 1;
  }
})

$('.cover').click(function() {
  $('.nav').attr('class','nav menu-icon-2');
  $('.cover').css('z-index','-1')
  i = 1;
})


console.log('An interesting soul is very attractive.')
console.log('世界与你我皆美好！')



