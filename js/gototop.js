$(function(){
    $("#page-top").hide();//要素を非表示
    $(window).scroll(function(){
        if($(window).scrollTop() > 300) {//スクロールした位置の取得
            $("#page-top").fadeIn(1000);
        }else{
            $("#page-top").fadeOut();
        }
    });
    $("#page-top").click(function(){
        $("body,html").animate({scrollTop:0}, 500);//0.5秒かけて0の位置へスクロール移動する
    });
});