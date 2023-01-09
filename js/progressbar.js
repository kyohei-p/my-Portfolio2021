

//テキストのカウントアップ+バーの設定
var bar = new ProgressBar.Line(splash_text, {//id名指定
    easing: 'easeInOut',//アニメーション効果linear,easeIn,easeOut,easeInOutが指定可能
    duration: 1000,//時間指定
    strokeWidth: 0.3,//進捗ゲージの太さ
    color: '#00bfff',//進捗ゲージのカラー
    trailWidth: 0.2,//ゲージベースの線の太さ
    trailColor: '#bbb',//ゲージベース 線のカラー
    text: {//テキストの形状
        style: {//天地中央配置
            position: 'absolute',
            left: '50%',
            top: '50%',
            padding: '0',
            margin: '-30px 0 0 0',//バーより上に配置
            transform:'translate(-50%,-50%)',
            'font-size':'1rem',
            color:'#00bfff',
        },
        autoStyleContainer: false//自動付与スタイルを切る
    },
    step:function(state, bar){
        bar.setText(Math.round(bar.value()*100) + ' %');//テキストの数値
    }
});

//アニメーションスタート
bar.animate(1.0, function(){//バーの描画割合指定(例)1.0なら100%まで
    $("#splash").delay(500).fadeOut(800);//アニメーションが終わったらフェードアウト
});