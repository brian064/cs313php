$(document).ready(main);

function main() {
  $("body").hide();
  $("body").fadeIn(2000);

  //Function for changing first div color
  $(".changeColor").click(function() {
    $("#first").css("background-color", $("#color").val());
  })

  //Function for Clicked! alert
  $("#clickMe").click(function() {
    alert("Clicked!");
  })

  //Function toggles third div visibility
  $("#toggle").click(function() {
    $("#third").fadeToggle(500);
  })
}
