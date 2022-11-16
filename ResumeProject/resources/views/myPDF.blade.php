<!DOCTYPE html>
<html>
<head>
    <title>AL-Luqman Qashyaff Bin Azmi</title>

    <style>
div.a {
  text-align: center;
}

div.b {
  text-align: left;
}

div.c {
  text-align: right;
} 

div.d {
  text-align: justify;
} 

div.e{
    text-align:top;
}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: gray;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}


.article2 {
  float: right;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}
/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: orange;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>
<form method="POST" action="{{ route('generatePDF') }}">
    <div class="a">
    <img src="https://media-exp1.licdn.com/dms/image/C4D03AQEC-0BMwWR-vw/profile-displayphoto-shrink_800_800/0/1653916143708?e=2147483647&v=beta&t=GaQ8FVQaZix3KD3RhJ6_XUO8qTjaBmdlb-YJD8dx_fc.jpg" alt="" width="200" height="150">
</div>

    
    
    <h2> My Resume</h2>
<header>
  <h2>{{$Name}}</h2>
  <?php echo date('d.m.Y');?>
</header>



  
  <article>
    <h1>Information Technology</h1>
    <p>Upcoming University Tenaga Nasional 
graduate offering a strong foundation 
and bachelor’s in software engineering 
and programming principles across 
multiple platforms. Experienced in 
object-oriented programming, 
developing, testing and debugging 
code, designing interfaces and 
administering systems and networks. 
Quick learn ad master new 
technologies, successful working in 
both team and self-directed settings.</p>
  </article>
</section>
  
 
 
 
 <article>
    <h1>Skills</h1>
    <ul>
  <li>Microsoft Office</li>
    <li>Power point</li>
    <li>Excel</li>
    <li>Visio</li>
   <li>Programming</li>
   <li>HTML</li>
   <li> CSS</li>
   <li>Javascript</li>
   <li>PHP</li>
   <li>WordPress</li>
  
  
  </ul>
  </article>
 
  
 <article2>
    <h1>Working Experience</h1>
    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  </article2>
</section>
    
 <article2>
    <h1>Education</h1>
    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  </article2>
  
      
 <article2>
    <h1>Working experience</h1>
    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  </article2>
  
  
  
  </section>
  



  <p>This is my social media</p> 
  <ul>
  <li>Facebook</li>
   <li>Linked In</li>
    <li>Gmail</li> 
     <li>Social media1</li>
      <li>Social media2</li>
       <li>Social media3</li>
  </ul>
  <p>
</p>
<footer>
<p>This is my social media</p> 
</footer>



</form>
</body>
</html>
