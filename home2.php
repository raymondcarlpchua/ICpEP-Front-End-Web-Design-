<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<style> 
* {
    box-sizing: border-box;
}

body {
    font-family: Arial;
    padding: 20px;
    background: #fffff;
}

/* Header/Blog Title */
.header {
    padding: 10px;
    font-size: 10px;
    text-align: center;
    background: white;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #6495ED;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #ffffff;
    text-align: center;
    padding: 10px 20px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color:black;
    color: white;
   
}

.active {
    background-color:black;
    color: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: left;
    width: 65%;
}

/* Right column */
.rightcolumn {
    float: left;
    width: 35%;
    background-color: #ffffff;
    padding-left: 20px;
}

/* Add a card effect for articles */
.card {
     background-color: white;
     padding: 20px;
     margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background-color: #6495ED;
    color:#ffffff;
    margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media (max-width: 400px) {
    .topnav a {
        float: none;
        width:100%;
    }
}
}

</style>
</head>
<body>

<div class="header">
 <img src="icpep.png">
  <h6> </h6>
</div>

<div class="topnav">
  <a href="home2.php" class="active"> Home - About Us </a>
  <a href="nbog.php"> Regional Chapters and Directors</a>
  <a href="#"> How to Join ?</a>
  <a href="reg.php"> Join Us Now !</a>
  <a href="login.php" style="float:right">Login </a>
</div>

  <div class="w3-content w3-section" style="max-width:700px">

  <img class="mySlides" src="cpe4.jpg" style="width :100% ">
  <img class="mySlides" src="cpe5.jpg" style="width:100%">
  <img class="mySlides" src="cpe6.jpg" style="width:100%">

</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 5 seconds
}
</script>


<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Our History</h2>
   
       <br>
      <center><img src="cpeb.jpg" width="450" > </center> <br>
   
      <p>In 1992, a group of computer engineers formed the Philippine Institute of Computer Engineers, Inc. (PhICEs).  PhICEs managed to gather a number of professional members.  They conducted conventions, seminars and symposia in several regions in Luzon and Visayas.  After being active for several years, PhICEs became inactive. <br><br>

In 2008, computer engineers from different organizations converged to revive the professional organization.  The group, headed by Engr. Erwin G. Mendoza and Engr. Alexander B. Ybasco, continued what the PhICEs started.  After several meetings, the group decided to change its name.  Thus, the Institute of Computer Engineers of the Philippines, Inc. (ICpEP) was born. <br><br>

ICpEP continues to establish a strong partnership with the industry.  Well-known companies such as Intel, Microsoft, HP, Lenovo, Epson, Red Fox, and PC Buyers Guide recognize ICpEP as the sole organization dedicated to computer engineers in the Philippines.  Furthermore, ICpEP has made collaboration with SM Mall of Asia, in the presence of NIDO Fortified Science Discovery Center, to promote research and development in the Philippines through a showcase of notable design projects in field of computer engineering.<br><br>

ICpEP has successfully formed its academic linkage to universities and colleges through the ICpEP Student Edition (ICpEP.SE).  Created in 2008, ICpEP.SE started with 11 schools, namely: Adamson University, Asia Pacific College, Central Colleges of the Philippines, De La Salle University, Far Eastern University-East Asia College, Mapua Institute of Technology, Pamantasan ng Lungsod ng Maynila, Polytechnic University of the Philippines-Manila, STI College-Recto, and Technological Institute of the Philippines-Manila and Technological Institute of the Philippines -Quezon City.  Now, ICpEP.SE is composed of more than sixty-eight (68) schools from all over the Philippines.
<br><br>
ICpEP firmly believes that uniting our professionals will contribute to national development and will improve the lives of the people.  With the support of industry and academe, ICpEP will remain as a recognized professional organization of computer engineers.  ICpEP strives to engage every Filipino computer engineer to become active, involved and significant in achieving one common goal: to become world-class</p>
    </div>
    <div class=" A card">
      <h2>Code of Ethics</h2> <br>
      <center><img src="cpe1.jpg" width="450" > </center> <br>
      <p>

<b><u>Fundamental Principles</u></b><br><br>
The Engineer shall uphold and advance the integrity, honor and dignity of the engineering profession by:<br>
<ol>
<li>using his knowledge and skill for the enhancement of human welfare;</li>
<li>being honest and impartial, and serving with fidelity the public, his employers and his clients;</li>
<li>striving to increase the competence and prestige of the engineering profession</li> 
<li>supporting the professional and technical societies of their disciplines.</li> <br> <br>
 
<b><u>The Fundamental Canons</u></b><br><br>
We, therefore Members of the Institute of Computer Engineers of the Philippines, (ICpEP), in recognition of the never-ending advancement of our technology, in uplifting the quality of life, and in accepting obligation and dedication to our profession, its members and the communities we serve, do hereby pledge and commit ourselves to the highest ethical and professional conduct and agree to:<br><br>

<ol>
<li>accept responsibility in making sound engineering decisions consistent with the safety, health and welfare of the public, and to disclose promptly the factors that might endanger the public or the environment;</li>
<li>avoid real or perceived conflicts of interest whenever possible, and to disclose them to affected parties when they do exist;</li>
<li>be honest, objective, impartial and realistic in stating claims or estimates based on available facts;</li>
<li>prevent graft and corruption in all its forms;</li>
<li>improve the understanding of technology and its advancement, its appropriate application, and potential consequences;</li>
<li>maintain and improve our technical competence and to undertake technological tasks for others only if qualified by education, training or experience, or after full disclosure of pertinent limitations;</li>
<li>seek, accept, and offer honest and constructive criticism of technical work; to acknowledge and correct errors; and to credit properly their contributions;</li>
<li>treat fairly all persons regardless of race, gender, disability, age or national origin;</li>
<li>avoid injury to other’s life property, reputation or livelihood by false or malicious actions; </li>
<li>assist colleagues and co-workers in their professional development and to support them in following this Code of Ethics.</li></ol><br><br>
We, therefore Members of the Institute of Computer Engineers of the Philippines, (ICpEP), in recognition of the never-ending advancement of our technology, in uplifting the quality of life, and in accepting obligation and dedication to our profession, its members and the communities we serve, do hereby pledge and commit ourselves to the highest ethical and professional conduct and agree to:<br><br>
<ol>
<li>hold paramount the safety, health and welfare of the public in the performance of their professional duties;</li>
<li>perform services only in the areas of their competence;</li>
<li>issue public statements only in an objective and truthful manner;</li>
<li>act in professional maters for each employer or client as faithful agents or trustees, and shall avoid conflicts of interest;</li>
<li>build their professional reputation on the merit of their services and shall not compete unfairly with others;</li>
<li>act in such a manner as to uphold and enhance the honor, integrity and dignity of the profession; and</li>
<li>continue their professional development throughout their careers and shall provide opportunities for the professional development of those engineers under their supervision.</li></ol></p>
     
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>What is ICpEP ?</h2>
      <img src="icpeplog.png" width="350">
      <p>ICpEP (Institute of Computer Engineers of the Philippines) is registered under the Securities and Exchange Commission (SEC Reg. No. 201120675) as a non-stock, non-profit professional organization of computer engineers in the Philippines.</p>
    </div>

    <div class="card">
      <h2>Envision and Aim</h2>
      <img src="cpe3.jpg" width="350">
     <p> ICpEP envisions itself as the foundation of world-class Filipino computer engineering professionals and the motivator of interest towards excellence in computer engineering as a field of specialization.<br><br>

ICpEP aims to:<br>
<i><ol>
<li>Build a network of professionals and graduates of computer engineering in the country through member interaction and open communication. This is directed to the industry, academe and government.<br></li>
<li>Support the professional career of members through relevant training and exposure.</li><br>
<li>Expand knowledge and specialization in computer engineering through research and development.</i></li></ol></p>
      
    </div>
    <div class="card">
      <h3>Social Media</h3>
       <a href="https://www.facebook.com/ICpEPOfficial/">
        <img src="facebook.png"  width="100" >
         </a>&nbsp
          <a href="mailto:info@icpep.org.ph">
          <img src="mess.png" width="100" >
          </a> &nbsp





      
    </div>
  </div>
</div>

<div class="footer">
  <h2> (c) 2018 All rights reserved </h2>
</div>

</body>
</html>
