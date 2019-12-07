$(function() {


    var $allMsg = $('.split');
    var $lineList = $allMsg.html().split('<br>');
    var $wordList = $lineList[0].split('');
    
    for (var i = 1, len = $lineList.length; i < len; i++) {
        $wordList.push('<br>');
        Array.prototype.push.apply($wordList, $lineList[i].split(''));
    }

    $('.split').html("");

    $.each($wordList, function(idx, elem) {
        var newEL = $("<span/>").html(elem).css({ opacity: 0 });
        newEL.appendTo($allMsg);
        newEL.delay(idx * 100);
        newEL.animate({ opacity: 1 }, 1800);
    });




});
    

