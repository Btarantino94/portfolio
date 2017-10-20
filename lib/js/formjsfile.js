// EMAIL FORM SET UP
$(document).ready(function() {
 $("#contact-form").on("submit", function(e) {
  e.preventDefault();
  //versions older than 1.6
  $("#form-button").attr("value", "Sending...");
  //versions newer than 1.6
  $("#form-button").prop("value", "Sending...");
  //get the name field value
  var name = $("#form-name").val();
  //get the name field value
  var email = $("#form-email").val();
  //get the text
  var text = $("#form-text").val();
  //pretend I don't need validation
  $.ajax({
   url: "https://formspree.io/youremail@emailclient.com",
   method: "POST",
   data: {
    name: name,
    email: email,
    text: text,
    _subject: "New message",
   },
   dataType: "json",
   success: function() {
    $("#contact").hide();
    $(".display-none").show();
   }
  });
 });
 $("#contact-form").on("submit", function(e) {
  var name = $("#form-name").val();
  if (!name) {
   $(".sender").text("");
  } else {
   $(".sender").text(" " + name);
  }
 });
});

function closeContact() {
 $(".display-none").hide();
 $("#contact-form").get(0).reset();
 //versions older than 1.6
 $("#form-button").attr("value", "Send");
 //versions newer than 1.6
 $("#form-button").prop("value", "Send");
 $("#contact").show();

 alert("Thanks!")
}