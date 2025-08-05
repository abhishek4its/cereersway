$(document).ready(function(){
$("#submit").click(function(){
var name = $("#name").val();
var phnumber = $("#phnumber").val();
var email = $("#email").val();
var course = $("#course").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1='+ name + '&phnumber1='+ phnumber + '&email1='+ email + '&course1='+ course;
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "insertregistration.php",
data: dataString,
cache: false,
success: function(data) {
				$("#useraccount").html(data);
			  }
});
return false;
});
});