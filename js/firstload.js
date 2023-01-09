//初回アクセス判定
var webStorage = function(){
    if (sessionStorage.getItem('access')) {
       console.log('2回目以降のアクセスです');
    }else{
        console.log('初回アクセスです');
        sessionStorage.setItem('access',0);
    }
}

webStorage();

//初回アクセスのみローディング
var webStorage = function(){
    var $splash = $('#splash');

    if(sessionStorage.getItem('access')){
      $splash.removeClass('is-active');
    } else {
      $splash.addClass('is-active');
      sessionStorage.setItem('access', 0);
    }
  }

  webStorage();