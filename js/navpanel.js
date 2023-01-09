$(".openbtn1").click(function(){//ボタンがクリックされたら
    $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
        $("#header-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
});

$("#header-nav a").click(function(){//ナビゲーションのリンクがクリックされたら
    $(".openbtn1").removeClass('active');//ボタンの activeクラスを除去し
    $("#header-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
});

