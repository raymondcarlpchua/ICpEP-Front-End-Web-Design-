<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="css/style3.css"> </head>
<body>
<div class="header">
 <img src="icpep.png"> 
</div>

<div class="topnav">
  <a href="home2.php"> Home - About Us </a>
  <a href="nbog.php" >  Regional Chapters and Directors</a>
  <a href="htj.php"> How to Join ?</a>
  <a href="reg.php" class = "active"> Join Us Now !</a>
  <a href="login.php" style="float:right">Login </a>
</div>

<form action="/action_page.php" style="border:1px solid #ccc">`
  <div class="container">

    
    <img src="icpeplog.png" width="180" align="left"  >
    <center>
    <h1>Institute of Computer Engineering of the Philippines</h1> <p><b><i> The official organization of Computer Engineers in the Philippines</i></b></i></p></center>
    <br>
    <hr>
   <h2><center>Membership Form - Online Registration </center></h2>
   <p><center> *Please fill in this form to create an account.</p></center>

    <hr>
    
    <center>
     <img src="personal.png" width="100">
    <h2>Personal Information</h2> </center>
    <label><b>First Name :</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required> <br>

    <label><b>Middle Name :</b></label>
    <input type="text" placeholder="Enter Middle Name" name="mname" required> <br>

    <label><b>Last Name :</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required> <br>
    
    <label><b> Present Address :</b></label> 
    <input type="text" placeholder="Enter Permanent Address" name="address" required> <br>
    
    <label><b>Contact Number :</b></label> 
    <input type="text" placeholder="Enter Contact Number" name="contact" required> <br>
     
    <label><b>E-mail Address :</b></label> 
    <input type="text" placeholder="Enter Email Address" name="email" required>
    <br>
    
    <Label><b>Gender : </b></Label> &nbsp
    <input type="radio" name="gender" value="female">Male &nbsp &nbsp

    <input type="radio" name="gender" value="male">Female
    <br><br>
    
    <Label><b> Date of Birth : </b></Label> &nbsp
    <input type="date" name="bday"><br><br>
    
    <Label><b> Civil Status :</b></Label> &nbsp
    <input list="cstatus" name="cstatus">
    <datalist id="cstatus">
    <option value="------">
    <option value="Single">
    <option value="Married">
    <option value="Widowed">
    <option value="Divorced">
    </datalist><br><br>
    
    <hr><center>
     <img src="work.png" width="100">   
    <h2>Work Related / Experiences</h2></center>
    <label><b> Current Company / Business Name :</b></label> 
    <input type="text" placeholder=" Enter Current Company / Business Name" name="companyname"         required><br>
    
    <label><b>Current Company / Business Address :</b></label> 
    <input type="text" placeholder="Enter Current Company / Business Address<" name="companyadd"         required><br>
    
    
    <label><b>Position :</b></label> 
    <input type="text" placeholder="Enter Position" name="position"         required><br>
    

     <label><b>Specialization:</b></label> 
    <input type="text" placeholder="Enter Specialization" name="special"         required><br>
    <br>
     <h2>Previous Work Experience </h2> 
    
    <label><b>Company:</b></label> 
    <input type="text" placeholder="Enter Previous Company" name="company"  required> <br>
     <label><b> Position:</b></label> 
    <input type="text" placeholder="Enter Previous Position" name="prepos"         required><br>
    
    <label><b>Inclusive Year:</b></label> 
    <input type="text" placeholder="Enter Inclusive Year" name="inyear"         required><br>
    <br>

    
    <hr><center>
    <img src="educ.png" width="100">
    <h2>Educational Attainment</h2></center>
    <h2> Teritiary </h2>
     <label><b>School:</b></label> 
    <input type="text" placeholder=" Enter School" name="school"         required><br>
    
    <label><b>Degree:</b></label> 
    <input type="text" placeholder="Enter Degree" name="degree"         required><br>
    
    
    <label><b>Inclusive Year :</b></label> 
    <input type="text" placeholder="Enter Inclusive Year" name="inyear1"         required><br>
    <br>
     <h2> Gaduate Studies - Master's  </h2>
     <label><b>School :</b></label> 
    <input type="text" placeholder=" Enter School" name="school1"         ><br>
    
    <label><b>Degree :</b></label> 
    <input type="text" placeholder="Enter Degree" name="degree1"         ><br>
    
    <label><b>Inclusive Year :</b></label> 
    <input type="text" placeholder="Enter Inclusive Year" name="inyear2"         ><br>
    <br>
    <h2> Gaduate Studies - Doctoral  </h2>
     <label><b>School :</b></label> 
    <input type="text" placeholder=" Enter School" name="school2"         ><br>
    
    <label><b>Degree :</b></label> 
    <input type="text" placeholder="Enter Degree" name="degree2"         ><br>
    
    
    <label><b>Inclusive Year :</b></label> 
    <input type="text" placeholder="Enter Inclusive Year" name="inyear3"         ><br>
    <br>
    
    <hr><center>
     <img src="member.png" width="100">   
    <h2>Membership Information </h2> <br> </center>
    
     
    <Label><b> Regional Chapter:</b></Label> &nbsp
    <input list="rchap" name="rchap">
    <datalist id="rchap">
    <option value="------">
    <option value="Region 1">
    <option value="Region 3">
    <option value="Region 4A">
    <option value="Region 4B">
    <option value="Region 5">
    <option value="Region 6">
    <option value="Region 7">
    <option value="Region 9">
    <option value="Region 10">
    <option value="Region 11">
    <option value="CAR ">
    <option value="CARAGA">
    <option value="NIR (NCR)">
    <option value="Singapore">
    </datalist><br><br>

 <Label><b> Type of Application :</b></Label> &nbsp
    <input type="radio" name="m1" value="New">New Member &nbsp &nbsp

    <input type="radio" name="m2" value="Renewal"> Renewal
    <br><br>

 <Label><b> Membership Classification :</b></Label> &nbsp
    <input type="radio" name="mc1" value="Associate (Non-CpE)">Associate (Non-CpE) &nbsp &nbsp

    <input type="radio" name="mc2" value="Regular (CpE Graduate)"> Regular (CpE Graduate)
    <br><br>

    <hr><center>
    <img src="account.png" width="100">
    <h2>Membership Account Sign Up </h2></center>
    
     <label><b>Enter Username:</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Enter Password:</b></label>
    <input type="text" placeholder="Enter Middle Name" name="mname" required>

    <label><b>Re-Enter Password:</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required>
    <br>
    
    
    
    
   <br> 
    <label>
      <input type="checkbox" checked="checked" style="margin-bottom:15px"> I certify that the facts contained in this form are true and correct. Any false information will disqualify my application
    </label>
    
    <p>By creating this account you agree to our <a href="#" style="color:dodgerblue"> Qualification and Procedure</a> of this organization.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>
