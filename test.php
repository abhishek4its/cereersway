<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Online Exams</title>
  <link rel="shortcut icon" href="img/logo.jpg" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

</head>
<body>
<table name="quiz" id="quiz_form" width=225 class="table table-bordered">
<form method=post action="answerkeysubmit20qns.php" name="quiz" id="quiz_form" class="confirm">

<tr><td style="width:80px;";>
<b>Name: </b></td>
<td> <input type=text name=UserName class="form-control" style="background:#d1dffa; width:150px;";>   </td></tr>
<tr><td>
<b>Email-Id: </b></td>
<td><input type=text name=EmailId class="form-control" style="background:#d1dffa; width:150px;";>    </td></tr>
<tr><td>
<b>Branch: </b></td>
<td><input type=text name=Branch class="form-control"  style="background:#d1dffa; width:150px;";>  </td></tr>
<tr><td>
<b> Id: </b></td>
<td><input type=text name=TpcId class="form-control" style="background:#d1dffa; width:150px;";>    </td></tr>
</table>
<table class="table table-bordered" cellspacing=0 name="quiz" id="quiz_form" width=225>

<tr><td>Question</td>   <td>A </td>     <td>B</td>      <td>C</td>  <td>D</td> </tr>
<tr><td> 1.</td>    <td><input type= radio name=qn1 value="A" onClick="return false" onMouseDown="rC(this)"> </td>    
                    <td><input type= radio name=qn1 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn1 value="C" onClick="return false" onMouseDown="rC(this)"> </td>    
                    <td><input type= radio name=qn1 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
<tr><td> 2.</td>    <td><input type= radio name=qn2 value="A" onClick="return false" onMouseDown="rC(this)"> </td>    
                    <td><input type= radio name=qn2 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn2 value="C" onClick="return false" onMouseDown="rC(this)"> </td>    
                    <td><input type= radio name=qn2 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
<tr><td> 3.</td>    <td><input type= radio name=qn3 value="A" onClick="return false" onMouseDown="rC(this)"> </td>    
                    <td><input type= radio name=qn3 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn3 value="C" onClick="return false" onMouseDown="rC(this)"> </td>    
                    <td><input type= radio name=qn3 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
<tr><td> 4.</td>    <td><input type= radio name=qn4 value="A" onClick="return false" onMouseDown="rC(this)"> </td>   
                    <td><input type= radio name=qn4 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn4 value="C" onClick="return false" onMouseDown="rC(this)"> </td>    
                    <td><input type= radio name=qn4 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
<tr><td> 5.</td>    <td><input type= radio name=qn5 value="A" onClick="return false" onMouseDown="rC(this)"> </td>    
                    <td><input type= radio name=qn5 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn5 value="C" onClick="return false" onMouseDown="rC(this)"> </td>    
                    <td><input type= radio name=qn5 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
<tr><td> 6.</td>    <td><input type= radio name=qn6 value="A" onClick="return false" onMouseDown="rC(this)"> </td>    
                    <td><input type= radio name=qn6 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn6 value="C" onClick="return false" onMouseDown="rC(this)"> </td>    
                    <td><input type= radio name=qn6 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
<tr><td> 7.</td>    <td><input type= radio name=qn7 value="A" onClick="return false" onMouseDown="rC(this)"> </td>    
                    <td><input type= radio name=qn7 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn7 value="C" onClick="return false" onMouseDown="rC(this)"> </td>    
                    <td><input type= radio name=qn7 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
<tr><td> 8.</td>    <td><input type= radio name=qn8 value="A" onClick="return false" onMouseDown="rC(this)"> </td>    
                    <td><input type= radio name=qn8 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn8 value="C" onClick="return false" onMouseDown="rC(this)"> </td>    
                    <td><input type= radio name=qn8 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
<tr><td> 9.</td>    <td><input type= radio name=qn9 value="A" onClick="return false" onMouseDown="rC(this)"> </td>    
                    <td><input type= radio name=qn9 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn9 value="C" onClick="return false" onMouseDown="rC(this)"> </td>    
                    <td><input type= radio name=qn9 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
<tr><td> 10.</td>   <td><input type= radio name=qn10 value="A" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn10 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn10 value="C" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn10 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
<tr><td> 11.</td>   <td><input type= radio name=qn11 value="A" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn11 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn11 value="C" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn11 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
<tr><td> 12.</td>   <td><input type= radio name=qn12 value="A" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn12 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn12 value="C" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn12 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
<tr><td> 13.</td>   <td><input type= radio name=qn13 value="A" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn13 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn13 value="C" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn13 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
<tr><td> 14.</td>   <td><input type= radio name=qn14 value="A" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn14 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn14 value="C" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn14 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
<tr><td> 15.</td>   <td><input type= radio name=qn15 value="A" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn15 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn15 value="C" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn15 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
<tr><td> 16.</td>   <td><input type= radio name=qn16 value="A" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn16 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn16 value="C" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn16 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
<tr><td> 17.</td>   <td><input type= radio name=qn17 value="A" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn17 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn17 value="C" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn17 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
<tr><td> 18.</td>   <td><input type= radio name=qn18 value="A" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn18 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn18 value="C" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn18 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
<tr><td> 19.</td>   <td><input type= radio name=qn19 value="A" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn19 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn19 value="C" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn19 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
<tr><td> 20.</td>   <td><input type= radio name=qn20 value="A" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn20 value="B" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn20 value="C" onClick="return false" onMouseDown="rC(this)"> </td> 
                    <td><input type= radio name=qn20 value="D" onClick="return false" onMouseDown="rC(this)"> </td> </tr>
                    

<tr><td colspan=5>

<div class="modal" style="position:static; height: ;";>
            <center><font color="red"><h2>Alert!!</h2></font>
            <b><p>Please check your details <br> & confirm if all is correct</p></b>
            
            
            <button type="button" class="btn btn-success action confirm" >Confirm</button>
            <button type="button" class="btn btn-danger action cancel">Cancel</button>
            </center>
        </div>
        <script>
        $(function(){
            // capture the form that triggered the action
            var $form;
            // can the form submit
            var $cansend = false;

            // show the modal on form submit
            $('form.confirm').submit(function(){
                $form = $(this);
                if ($cansend == true)
                {
                    $cansend = false;
                    return true;
                }
                $('.modal').show();
                return false;
            });

            // which button got clicked in the modal
            $('div.modal button.action').click(function(){
                if ($(this).hasClass('confirm'))
                {
                    $cansend = true;
                    $('div.modal').hide();
                    $form.submit();
                }
                else
                {
                    $cansend = false;
                    $('div.modal').hide();
                }
            });
        });
        </script>
</td></tr>
<tr>    <td colspan=5> <center> <button class="btn btn-info">Submit Your Test</button>
</center> </td> </tr>               
</table>
</form>
 