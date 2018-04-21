$(function(){
  //左侧导航栏收缩功能动画效果
  var i = 0;

  $('.asuma-icon-item').click(function(){
    $(this).toggleClass('blue');
    $(this).children('i').toggleClass('icon-arrow-right');
    $(this).children('i').toggleClass('icon-arrow-left');

    var side_len = $('body').find('.layui-side-child').length;
    var side_hidden = $('body').find('.layui-side-child').is(':visible');

    if(i==0){
      $(this).animate({left:'0px'});
      $(".layui-bg-black").animate({width:'toggle'});
      $(".layui-footer").animate({left:'0px'});
      
      $(".icon-arrow-mid").animate({left:'0px'});
      if(side_len > 0 && side_hidden){
        $(".layui-side-child").animate({left:'0px'});
        
        $(".layui-body").animate({left:'160px'});
      }else{
        $(".layui-body").animate({left:'0px'});  
      }
      i++;
    }else{
      $(this).animate({left:'200px'});
      $(".layui-bg-black").animate({width:'toggle'});
      $(".layui-footer").animate({left:'200px'});
      $(".icon-arrow-mid").animate({left:'200px'});
      console.log(side_len);
      console.log(side_hidden);
      if(side_len > 0 && side_hidden){
        $(".layui-side-child").animate({left:'200px'});
        $(".layui-body").animate({left:'360px'});
      }else{
        $(".layui-body").animate({left:'200px'});
      }
      i--;
    }
  });

  var j = 0;
  $('.arrow-btn').click(function(){
    var menu_hidden = $('.layui-bg-black').css('display');
    var main_left = parseInt($('.layui-body').css('left'));
     
     $(".layui-side-child").animate({width:'toggle'});
    
     if(j == 0){
        $('.icon-arrow-mid:eq(0)').animate({width:'toggle'}, 'normal', '', function(){
          $('.icon-arrow-mid:eq(1)').animate({width:'toggle'});
        });
        if(menu_hidden != 'none'){
          $(".layui-side-child").css({left:'200px'});
          $(".layui-body").animate({left:main_left-160+'px'});
        }else{
          $(".layui-side-child").css({left:'0px'});
          $(".layui-body").animate({left:'0px'});
        }
        j++;
     }else{
       $('.icon-arrow-mid').toggle();
        if(menu_hidden != 'none'){
          $(".layui-side-child").css({left:'200px'});
          $(".layui-body").animate({left:main_left+160+'px'});
        }else{
          $(".layui-side-child").css({left:'0px'});
          $(".layui-body").animate({left:'160px'});
        }
        j--;
     }
  })
})