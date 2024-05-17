<<<<<<<< HEAD:index.php
<?php
    $conn = new mysqli('localhost','root','','portfolio');
?>
========
>>>>>>>> 68cf503489990da1cc77ec9e9dbe80dff326b1c0:register.php

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<<< HEAD:index.php
    <title>Sley | Portfolio</title>
========
    <title>Emmanuel | portfolio </title>
>>>>>>>> 68cf503489990da1cc77ec9e9dbe80dff326b1c0:register.php
   
 <link rel="stylesheet" href=" style.css">
 <script src="https://kit.fontawesome.com/41935454d5.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="header">
<div class="container">

    
    <nav>
        <img src="images/pic.PNG" class="pic">
        <ul id="sidemenu">
            <li><a href="#hearder">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">portfollio</a></li>
            <li><a href="#contact">Contact</a></li>
            <i class="fas fa-times" onclick="closemenu()"></i>
        </ul>
        <i class="fas fa-bars" onclick="openmenu()"></i>
    </nav>
    <div class="header-text">
        <p>UI/UX Hacker</p>
        <h2>Hi, i'm <span>Emmanuel</span> <br> Sley From Congo</h2>
    </div>
</div>
    </div>
 <!---------About--------> 

    <div id="About">
        <div class="container">
            <div class="row">
                <div class="About-col1">
                    <img src="images/pixel2.jpg" >
                </div>
                <div class="About-col2">

                 <h1 class="sub-title">About Me<span>.</span></h1>
                 <p>My name is Emmanuel Sley from Congo, I'm 21 yrs old and i like reading and spending time on my computer , i'm an IT specialist based on three main subjects which are:   </p>
                 <ul>

                <li>WEB DEVELOPEMENT</li>
                <LI>CYBER SECURITY</LI>
                <LI>And ETHICAL HACKING</LI>
            </ul>
                <p>I'm a bit more different person, i like everything that goes together with technology and computer , my biggest dream is to own one day my own <span>Networking & Cyber security Company</span> and i'm bit sure that's going to be true one day </p>
                <div class="tab-titles">
                    <P class="tab-links active-link" onclick="opentab('skills')">Skills</P>
                    <P class="tab-links"onclick= "opentab('Experiences')">Experiences</P> 
                    <P class="tab-links"onclick= "opentab ('Education')">Education</P>
                </div>
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>UI/UX</span><br>Designing Web/Apps Interfaces</li>
                        <li><span>Network Administrator</span><br>Protecting and insuring People's safety over the internet</li>
                        <li><span>Hacker</span><br>Creating a secure and a protected Network Access </li>
                    </ul>
                   
                </div>
                <div class="tab-contents" id="Experiences">
                    
                    <ul>
                        <li><span>2018-current</span><br> UI/UX Design Training at HORIZON Institute</li>
                        <li><span>2018-2021</span><br>Ethical Hacker at DLC.</li>
                        <li><span>2022 ... </span><br>UI/UX Design Executive at sley Didital Ltd.</li>
                        <li><span>2022-2023</span><br>Network Administrator at ekart ecommerce </li>
                    </ul>
                </div>
                <div class="tab-contents" id="Education">
                    <ul>
                        <li><span>2018</span><br>UI/UX Design Training at HORIZON Institute </li>
                        <li><span>2021</span><br>MBA from the main UPL of Kinshasa.</li>
                        <li><span>2021-2023</span><br>BBA & Lisence from UPL campus </li>
                    </ul>
                </div>
                
                </div>
                
            </div>
        </div>
    </div>
    
    <!------------services-------->
    <div id="services">
        <div class="container">
            <h1 class="sub-title">My services<span>.</span></h1>
            <div class="services-list">
                <div>
                    <i class="fa-brands fa-app-store"></i> 
                  
                    <h2>UI/UX Design</h2>
                    <p>Emmanuel Design is a plat form of web developement and creation,<br> for anything rellating to the above fell free to ask for help or to contact of our group.</p>
                    <a href="#">Lean more</a>
                </div>
                <div>
                    <i class="fa-solid fa-route"></i>
                    <h2>Network Maintenance</h2>
                    <p>Network design, maintenance, and administration are our main goal,<br> for anything rellating to the above fell free to ask for help or to contact of our group.</p>
                    <a href="#">Lean more</a>
                </div>
                <div>
                    <i class="fa-solid fa-skull-crossbones"></i>
                    <h2>Ethical Hacking</h2>
                    <p>Ethical Hacking from the scratch to the very top,<br> for anything rellating to the above fell free to ask for help or to contact of our group.</p>
                    <a href="#">Lean more</a>
                </div>
            </div>

        </div>
    </div>
    <!-------------portfolio--------->
    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">My Work<span>.</span></h1>
            <div class="work-list">
                <div class="work">
                    <img src="images/sley2.jpeg">
                    <div class="layer">
                        <h3>Website Designing</h3>
                        <p>The web connects you with talented people around the world and around the globale, you can find us at  emmanuel@gmail.com</p>
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/sley3.jpeg">
                    <div class="layer">
                        <h3>network Administration</h3>
                        <p>This is a great tool in network management system and it's an essentiale skill in the current world</p>
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/sley4.jpeg">
                    <div class="layer">
                        <h3>Cyber Security</h3>
                        <p>Cyber security is one of the greatest and important skill , knowing it opens doors to real success</p>
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See more</a>
        </div>
    </div>
    <!-----------contact-------->
<div id="contact">
    <div class="container">
        <div class="row">
           <div class="contact-left">
            <h1>Contact Me <span>💬</span></h1>
            <p> <i class="fa-solid fa-paper-plane"></i>emmanuelsley@533gmail.com</p>
            <p> <i class="fa-solid fa-phone"></i>+255685954740</p> 
            <div class="social-icons">
            <a href="https://www.facebook.com/emmanuelkatayi.charlesluanga"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/lwanga790?igsh=YzljYTk1ODg3Z=="><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-tiktok"></i></a>
        </div>
        <a href="images/EMANUEL.pptx" class="btn btn2">Download CV</a>
           </div>
           <div class="contact-right">
            <form action="data.php" method='POST'>
            
<<<<<<<< HEAD:index.php
               <input type= "text" name="name" id="try" placeholder="Write your name " required><br>
               <input type= "email" name="email" id="try" placeholder="type your email " required>
                <textarea name="message" id="message" rows="8" placeholder="Send your message 💬💌"></textarea>
                <button type="submit" value="submit" name="submit" class="btn btn2">Submit</button>
========
               <input type= "text" name="Name" placeholder="Write your name" required  name= "name">
               <input type= "email" name="email" placeholder="type your email"  required name= "email">
            
                <textarea name="Message" rows="6" placeholder="Send your message" name = "message"></textarea>
                <input type="submit" class="btn btn2" name= "submit"></input>
>>>>>>>> 68cf503489990da1cc77ec9e9dbe80dff326b1c0:register.php
            </form>
            <span id="msg"></span>
           </div>
        </div>
    </div>
    <a href="#header" class="top"> &uparrow; </a> 
    <div class="copyright">
        <p> Copyright &copy; All rigt reserved to <span>Emmanuel </span>  ✔✔</p>
    </div>
</div>


    <script>

var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents");

function opentab(tabname) {
    for(tablink of tablinks){
        tablink.classList.remove ("active-link");

    }
    for(tabcontent of tabcontents){
        tabcontent.classList.remove ("active-tab");
    }
    event.currentTarget.classList.add("active-link");
    document.getElementById(tabname).classList.add("active-tab");
}

    </script>
    <script>
        const script URL = 'https://script.google.com/macros/s/AKfycbwa5n0vhjVrNJBdUq5-XGu7zjh1okK2Qe1o89F5_Zwcjnh7J9jDuCQtR2XgOt9396eYbg/exec'
        const form = document.forms['submit-to-google-sheet']
      const msg=document.getElementById(msg)

        form.addEventListener('submit', e => {
          e.preventDefault()
          fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => {
                msg.innerHTML="Message sent Succefully"
                setTimeout(function(){
                   msg.innerHTML="" 
                },5000)
                form.reset()
            })
            .catch(error => console.error('Error!', error.message))
        })
      </script>
      <script>
var sidemenu = document.getElementById("sidemenu");
function openmenu(){
    sidemenu.style.right= "0";  
}
function closemenu(){
    sidemenu.style.right= "-200px";  
}
      </script>
      <!-- <a href="#header" class="top"> <button id= "back-to-top"><i class="fa-solid fa-arrow-up"></i></button></a> -->
    
</body>
</html> 