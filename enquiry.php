<!DOCTYPE html>
<html lang="en">
<head>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/enquirystyle.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script>
    setTimeout(function() {
    $('#myModalpopup').modal();
}, 5000);
  </script>
  <style>
  .modal-header, h5, .close {
    background-color: #e6437a;
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #e6437a;
  }
  </style>
</head>
<body>

<div class="container">

  <!-- Trigger the modal with a button 
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->

  <!-- Modal -->
  <div class="modal fade" id="myModalpopup" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
       <h3>Register here to stay conected with us</h3>
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
   <center>     <h1 class="logo me-auto"><img src="assets/img/topleftlogo.jpg" width="60%"></h1></center>
              <div class="modal-body" style="left:70px; top:-25px;">
          
            
      <div class="container" style="position: relative; right: 100px; width:;">
          
          <div class="col-lg-4 offset-lg-1">
            <script src="script.js"></script>
            <div class="register_form">
                    <input id="name" placeholder="Your Name" required="" type="text"/>
                    <input id="phnumber"  placeholder="Your Phone Number" required="" type="tel"/>
                    <input id="email"  placeholder="Your Email Address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" 
                    required="" type="email"/>
                    <select id="course" class="form-select">
                      <option value="AdmissionCounsellingandAssistance">Admission Counselling and Assistance</option>
                      <option value="PersonalityDevelopmentProgram">Personality Development Program</option>
                      <option value="AdvanceCommunication">Advance Communication</option>
                      <option value="LifeMentoring">Life Mentoring</option>
                      <option value="PersonalandStudentCounselling">Personal and Student Counselling</option>
                    </select>
                    <button class="primary-btn" id="submit" style="background: #e7e7e7;">Submit</button>
                    <div id="useraccount"></div>
                </div>
            </div>
      </div>
    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
