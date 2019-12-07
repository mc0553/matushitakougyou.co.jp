$(function(){
  
    $(window).on('load scroll', function (){

      var box = $('.fadeIn');
      var animated = 'animated';

      //ドキュメントがスクロールされた量を取得する変数を作る
      let scrollTop = $(document).scrollTop();
      //htmlのトップの位置を取得する
      let htmlTop = $('html').offset().top;
      // アイコンのkanをスクロールで出す
      if( scrollTop > htmlTop + 400 ){ kan.fadeIn('slow');}else{ kan.fadeOut('slow');}
      
      box.each(function(){
      
        let boxOffset = $(this).offset().top;
        let scrollPos = $(window).scrollTop();
        let wh = $(window).height();

        //画面内のどの位置で処理を実行するかで「100」の値を変更
        if(scrollPos > boxOffset - wh + 150 ){
          $(this).addClass(animated);
        }else{$(this).removeClass(animated);}

      });
    
    });

    let kan = $('.kan')
    kan.hide();
    kan.click(function(){

      $('html,body').animate({ scrollTop: 0 }, 1000 );

    })



  // ここからハンバーガーメニュー連動の動き

  //初期表示は非表示
  // if ($(window).width() <= 600 ) {
  //   document.getElementById("navi").style.display ="none";
  // }

  $('.hamburger').click(function(){

    $('.icon').toggleClass('rotate');
    $('.icon').toggleClass('hide');
    $('.hamburger').toggleClass('rotate2');
    $('#navi').toggleClass('heightUp');

  	const p1 = document.getElementById("navi");

  	if(p1.style.display=="block"){
  		// noneで非表示
  		p1.style.display ="none";
  	}else{
  		// blockで表示
      p1.style.display ="block";
      
    }
    

  })

  

})