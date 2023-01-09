function slideAnime(){
    //左に動くアニメーション
    $('.leftAnime').each(function(){
        var elempos = $(this).offset().top;//繰り返し処理で、要素のtop高さを取得、変数に代入。
        var scroll = $(window).scrollTop();//ブラウザのスクロール位置を取得し、変数に代入
        var windowHeight = $(window).height();//windowの高さを取得し、変数に代入

        if (scroll >= elempos - windowHeight){
                    //左から右へ表示するクラスを付与
        //テキスト要素を挟む親要素（左側）とテキスト要素を元位置でアニメーションをおこなう
        $(this).addClass("slideAnimeRightLeft"); //要素を左枠外にへ移動しCSSアニメーションで左から元の位置に移動

        $(this).children(".leftAnimeInner").addClass("slideAnimeLeftRight");  //子要素は親要素のアニメーションに影響されないように逆の指定をし元の位置をキープするアニメーションをおこなう

        }else{
            //左から右へ表示するクラスを除去
            $(this).removeClass("slideAnimeLeftRight");
            $(this).children("leftAnimeInner").removeClass(slideAnimeRightLeft);
        }
    });
}

//画面が読み込まれたら動かしたい場合の記述
$(window).on('load', function(){
    slideAnime();/* アニメーション用の関数を呼ぶ*/
  });