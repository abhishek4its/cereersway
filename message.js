$(document).ready(function(){
$("#submitmessage").click(function(){
var yourname = $("#yourname").val();
var youremail = $("#youremail").val();
var yoursubject = $("#yoursubject").val();
var yourmessage = $("#yourmessage").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'yourname1='+ yourname + '&youremail1='+ youremail + '&yoursubject1='+ yoursubject + '&yourmessage1='+ yourmessage;
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "insertmessage.php",
data: dataString,
cache: false,
success: function(data) {
				$("#messagemessage").html(data);
			  }
});
return false;
});
});