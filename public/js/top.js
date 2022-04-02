//SVGアニメーションの描画
const stroke = new Vivus('mask', {
    start:'manual',
    type: 'scenario-sync',
    duration: 80,
    forceRender: false,
    animTimingFunction:Vivus.EASE,
}
);

$(window).on('load',function(){
    $("#splash").delay(2000).fadeOut('slow');
    $('#splash_logo').fadeIn(0),
    $("#splash_logo").delay(2000).fadeOut('slow');
        stroke.play();
});
