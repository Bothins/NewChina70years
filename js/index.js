$(function () {

    $(".down_btn").click(function () {
        var h = $(".head_box").height();
        $("body").css("overflow","visible");
        $("html").css("overflow","visible");
        $("#nav_fixed").addClass("nav_box");
        $("#nav_fixed").css("top",h);
        $('#nav_fixed').animate({ top: 0},1000);
        $('body,html').animate({ scrollTop: h-57},1000,function () {
            $(".head_box").css("display","none");
        });
    });

    $(".dropdown").hover(function () {
        $(".dropdown-menu").show(200);
    },function () {
        $(".dropdown-menu").hide(200);
    });

    //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
    $(window).scroll(function(){
        if ($(window).scrollTop()>100){
            $(".fixed_top").show(500);
        }else{
            $(".fixed_top").hide(500);
        }
    });
    //当点击跳转链接后，回到页面顶部位置
    $(".fixed_top").click(function(){
        console.log("af");
        $('body,html').animate({scrollTop:0},500);
        return false;
    });


    /*window.onmousewheel = function(e){
        var flag=1;

        function slideDown() {
            var h = $(".head_box").height();
            e = e || window.event;
            var wheelDelta = e.wheelDelta;
            if (wheelDelta > 0) {
                $("body").css("overflow","visible");
                $("html").css("overflow","visible");
                $("#nav_fixed").addClass("nav_box");
                $("#nav_fixed").css("top",h);
                $('#nav_fixed').animate({ top: 0},1000);
                $('body,html').animate({ scrollTop: h-57},1000,function () {
                    $(".head_box").css("display","none");
                    flag = 0;
                });
                return;
            }

        }
        if(flag==1)
            slideDown();

    }*/

});