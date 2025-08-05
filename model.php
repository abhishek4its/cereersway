<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<script type="text/javascript">
rC = function(radioEl) {
    if(radioEl.checked == true) {
        radioEl.checked = false;
        return false;
    }
    else {
        radioEl.checked = true;
        return true;
    }
}
</script>
<script type="text/javascript">

var popup;

function openPopup()

{

popup = window.open("URL_here","Tab_NAME_HERE", "height=800,width=800")

}

function closePopup()

{

popup.close();

}

</script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js">
  </script>
</head>
<body>
<div id="my_pdf_viewer">
        <div id="canvas_container">
            <canvas id="pdf_renderer" style="position: relative; width: 100%; height: 100%;"></canvas>
        </div>
    </div>
 
    <script>
        var myState = {
            pdf: null,
            currentPage: 1,
            zoom: 1
        }
      
        pdfjsLib.getDocument('Papers/TestQn20/TestQn20.pdf').then((pdf) => {
      
            myState.pdf = pdf;
            render();
 
        });
 
        function render() {
            myState.pdf.getPage(myState.currentPage).then((page) => {
          
                var canvas = document.getElementById("pdf_renderer");
                var ctx = canvas.getContext('2d');
      
                var viewport = page.getViewport(myState.zoom);
 
                canvas.width = viewport.width;
                canvas.height = viewport.height;
          
                page.render({
                    canvasContext: ctx,
                    viewport: viewport
                });
            });
        }
    </script>
<button class="open-button" onclick="openForm()">
<div style="font-weight: bold" id="quiz-time-left"></div>
<script type="text/javascript">
var max_time = <?php
                    include("database.php");
                    $qry ="select * from edu_tests_extra where noqn='20'"; 
                    $res=mysqli_query($con, $qry);
                    while($data=mysqli_fetch_array($res))
                    {
                    extract($data);
                    echo $num_timer;
                    }
                     ?>;
var c_seconds  = 0;
var total_seconds =60*max_time;
max_time = parseInt(total_seconds/60);
c_seconds = parseInt(total_seconds%60);
document.getElementById("quiz-time-left").innerHTML='<center>Time Left: ' + max_time + ' : ' + c_seconds + '</center> ';
function init(){
document.getElementById("quiz-time-left").innerHTML='<center>Time Left: ' + max_time + ' : ' + c_seconds + '</center> ';
setTimeout("CheckTime()",999);
}
function CheckTime(){
document.getElementById("quiz-time-left").innerHTML='<center>Time Left: ' + max_time + ' : ' + c_seconds + '</center> ' ;
if(total_seconds <=0){
setTimeout('document.quiz.submit()',1);
   
    } else
    {
total_seconds = total_seconds -1;
max_time = parseInt(total_seconds/60);
c_seconds = parseInt(total_seconds%60);
setTimeout("CheckTime()",999);
}

}
init();
</script>
</div>
Open Answer Key</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">

 <!--   <input type="text" placeholder="Enter Name" name="email" required>
    <input type="password" placeholder="Enter Email Id" name="psw" required>
    <input type="text" placeholder="Enter Branch" name="email" required>
    <input type="text" placeholder="Enter password" name="email" required>-->
  
  <iframe src="test.php" height="450"></iframe>

  <!--  <button type="submit" class="btn">Login</button>-->
    <button type="button" class="btn cancel" onclick="closeForm()">Minimize</button>
  </form>

</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>

