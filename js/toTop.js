$(document).ready(run);

function run() {
  var GOMBSZIN = "#01d936";
  var SCROLL_TIME = 500;

  $("body").append('<div id="toTop"><div></div></div>');
  $("#toTop div").css({
    "border-left": "solid 10px "+GOMBSZIN,
    "border-right": "solid 10px "+GOMBSZIN,
    "border-bottom": "solid 18px white",
    "width": 0
  });
  $("#toTop").css({
    "background-color": GOMBSZIN,
    "padding": "15px",
    "position": "fixed",
    "right": "50px",
    "bottom": "50px",
    "border-radius": "5px",
    "cursor": "pointer",
    "display": "none",
    "z-index": "3"
  });
  
  toTopSetup();
  $(window).scroll(toTopSetup);
  $(window).resize(toTopSetup);
  $("#toTop").click(gotoTop);
  
  function toTopSetup() {
    $(window).scrollTop() > 100 && $(window).innerWidth() > 767 ? $("#toTop").show() : $("#toTop").hide();
  }

  function gotoTop() {
    $("html, body").animate({"scrollTop": 0}, SCROLL_TIME);
  }
}
