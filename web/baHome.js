$(document).ready(main);

function main() {
  $(".myNav").hide();
  $(".imageHolder").hide();
  $(".introSec").hide();

  $(".myNav").slideDown(500);
  $(".imageHolder").fadeIn(4000);
  $(".introSec").fadeIn(4000);
}
