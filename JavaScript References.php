﻿<?php include 'connection.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>JavaScript References</title>
    <link rel="stylesheet" type="text/css" href="CSS_w3schools.css" />
</head>

<body>
    <div id="all">
        <div id="header">
            <div id="logo">
                <a href="http://w3schools.esy.es" style="margin-top: 8px;">
                    <img src="Untitled.png" />
                </a>
            </div>
            <div id="sologan">
                THE WORLD'S LARGEST WEB DEVELOPER SITE
            </div>
        </div>
        <div id="navigation">
            <div id="nav1">
                <a href="http://w3schools.esy.es"><img src="Untitled1.png" style="margin-bottom: -7px; margin-top: -2px;"/></a>
                <?php 
					include 'Show_Data_Nav.php';
				?>
            </div>
            <div id="nav2">
                <div id="tutorias">
                        <label style="cursor:pointer;" for="click1" onclick="checked1()">Tutorials</label>
                        <input id="click1" type="checkbox" style="display:none;" />
                    <div id="content_of_tutorials">
                        <p class="close" onclick="closeit()">X</p>
                        <div class="choices">
                            <ul>
                                <li><span>HTML/CSS</span></li>
                                <li><a href="#">Learn HTML</a></li>
                                <li><a href="#">Learn CSS</a></li>
                                <li><a href="#">Learn W3.CSS</a></li>
                                <li><a href="#">Learn Colors</a></li>
                                <li><a href="#">Learn Bootstrap</a></li>
                            </ul>
                        </div>
                        <div class="choices">
                            <ul>
                                <li><span>JAVASCRIPT</span></li>
                                <li><a href="#">Learn JavaScript</a></li>
                                <li><a href="#">Learn jQuery</a></li>
                                <li><a href="#">Learn jQuery Mobile</a></li>
                                <li><a href="#">Learn APP ML</a></li>
                                <li><a href="#">Learn Angular JS</a></li>
                                <li><a href="#">Learn AJAX</a></li>
                                <li><a href="#">Learn JSON</a></li>
                            </ul>
                        </div>
                        <div class="choices">
                            <ul>
                                <li><span>HTML GRAPHICS</span></li>
                                <li><a href="#">Learn CANVAS</a></li>
                                <li><a href="#">Learn SVG</a></li>
                                <li><a href="#">Learn Icons</a></li>
                                <li><a href="#">Learn Google Maps</a></li>
                                <li><a href="#">Learn HTML Game</a></li>
                            </ul>
                        </div>
                        <div class="choices">
                            <ul>
                                <li><span>SEVER SIDE</span></li>
                                <li><a href="#">PHP</a></li>
                                <li><a href="#">SQL</a></li>
                                <li><a href="#">ASP</a></li>
                                <li><a href="#">ASP.NET</a></li>
                            </ul>
                        </div>
                        <div class="choices">
                            <ul>
                                <li><span>WEB BUILDING</span></li>
                                <li><a href="#">Web Building</a></li>
                                <li><a href="#">WEB Statitics</a></li>
                                <li><a href="#">WEB Certificates</a></li>
                            </ul>
                        </div>
                        <div class="choices">
                            <ul>
                                <li><span>XML TUTORIALS</span></li>
                                <li><a href="#">LEARN XML</a></li>
                                <li><a href="#">LEARN XSLT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="references">
                    <label style="cursor:pointer;" for="click2" onclick="checked2()">References</label>
                    <input id="click2" type="checkbox" style="display:none" />
                    <div id="content_of_references">
                        <p class="close" onclick="closeit()">X</p>
                        <div class="choices">
                            <ul>
                                <li><span>HTML</span></li>
                                <li><a href="#">HTML Tag Reference</a></li>
                                <li><a href="#">HTML Event Reference</a></li>
                                <li><a href="#">HTML Color Reference</a></li>
                            </ul>
                        </div>
                        <div class="choices">
                            <ul>
                                <li><span>CSS</span></li>
                                <li><a href="#">CSS Reference</a></li>
                                <li><a href="#">CSS Selector Reference</a></li>
                                <li><a href="#">W3.CSS Reference</a></li>
                                <li><a href="#">Bootstrap Reference</a></li>
                            </ul>
                        </div>
                        <div class="choices">
                            <ul>
                                <li><span>JavaScript</span></li>
                                <li><a href="#">JavaScript Reference</a></li>
                                <li><a href="#">HTML DOM Reference</a></li>
                                <li><a href="#">jQuery Reference</a></li>
                                <li><a href="#">jQuery MOBILE Reference</a></li>
                                <li><a href="#">Angular JS Reference</a></li>
                                <li><a href="#">Google Maps Reference</a></li>
                            </ul>
                        </div>
                        <div class="choices">
                            <ul>
                                <li><span>Sever Side</span></li>
                                <li><a href="#">PHP Reference</a></li>
                                <li><a href="#">SQL Reference</a></li>
                                <li><a href="#">ASP Reference</a></li>
                                <li><a href="#">RAZOR Reference</a></li>
                                <li><a href="#">ASP.NET Reference</a></li>
                            </ul>
                        </div>
                        <div class="choices">
                            <ul>
                                <li><span>XML</span></li>
                                <li><a href="#">XML Reference</a></li>
                                <li><a href="#">XSLT Reference</a></li>
                                <li><a href="#">XML Schema Reference</a></li>
                                <li><a href="#">SVG Reference</a></li>
                            </ul>
                        </div>
                        <div class="choices">
                            <ul>
                                <li><span>Charset</span></li>
                                <li><a href="#">HTML Character SET</a></li>
                                <li><a href="#">HTML ASCII</a></li>
                                <li><a href="#">HTML ANSI</a></li>
                                <li><a href="#">HTML WINDOW-1252</a></li>
                                <li><a href="#">HTML ISO-8859-1</a></li>
                                <li><a href="#">HTML SYMBOLS</a></li>
                                <li><a href="#">HTML UTF-8</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="trans-search">
                    <label id="nav2-translate" style="cursor:pointer;" for="click3" onclick="checked3()">
                        <img src="Untitled2.png" style="margin-bottom: -7px; margin-top: -2px;" />
                    </label>
                    <input type="checkbox" id="click3" style="display:none;" />
                    <div id="translate">
                        <p class="close" onclick="closeit()">X</p>
                        <p style="margin-top:50px; font-size: 17px; font-family: Segoe UI,Arial,sans-serif;">Translate w3schools.com :</p>
                        <form action="#">
                            <select name="translate" style="margin-top:-12px; width:10%; height:23px;">
                                <option value="English">English</option>
                                <option value="Japanses">Japanese</option>
                                <option value="Vietnamese">Vietnamese</option>
                            </select>
                        </form>
                    </div>
                    <label id="nav2-search" style="cursor:pointer;" for="click4" onclick="checked4()">
                        <img src="Untitled3.png" style="margin-bottom: -7px; margin-top: -2px; margin-right: 10px;" />
                    </label>
                    <input type="checkbox" id="click4" style="display:none;"/>
                    <div id="search">
                        <p class="close" onclick="closeit()">X</p>
                        <p style="margin-left:-240px; margin-top:50px; margin-bottom:0px; font-size: 17px; font-family: Segoe UI,Arial,sans-serif;">Search w3schools.com :</p>
                        <form action="#" method="post">
                            <input name="search" type="text" placeholder="Google'' Custom Search" style="width:330px; height:20px; margin-top:5px;" />
                            <input name="submit2" type="submit" value="" style="width:78px;; height:28px; border:none; border-radius:3px; background-image:url(Untitled4.png); cursor: pointer; padding-bottom: 10px; margin-left: 10px; " />
                        </form>
                    </div>
                </div>
           	</div>
        </div>
        <div id="menu">
            <ul>
                <?php 
					$x=3;
					include 'Show_Data.php'; 
				?>
            </ul>
        </div>
        <div id="content">
            <div id="part1">
                <h1 style="font-size: 35px;">PHP Intruction</h1>
                <div class="pre_next">
                    <?php 
						$i=12;
						include 'Previous.php';
						include 'Next.php'; 
					?>
                </div>
            </div>
            <div id="part2">
                <img src="http://www.w3schools.com/html/pic_html5.gif" alt="HTML" style="height:128px;width:128px;padding-right: 40px;float: left;" />
                <div id="cont2">
                    With HTML you can create your own Web site.
                    <br /><br />
                    This tutorial teaches you everything about HTML.
                    <br /><br />
                    HTML is easy to learn - You will enjoy it.
                    <br /><br />
                </div>
            </div>
            <hr />
            <div id="part3">
                <h1>Examples in Every Chapter</h1>
                This HTML tutorial contains hundreds of HTML examples.
                <br /><br />
                With our online HTML editor, you can edit the HTML, and click on a button to view the result.
                <br /><br />
                <div id="example">
                    <div id="contentex"></div>
                </div>
                <div class="note">
                    <img src="http://www.w3schools.com/images/lamp.jpg" alt="Note" style="height:32px;width:32px" />
                    <p>Click on the "Try it Yourself" button to see how it works</p>
                </div>
                <a href="#">Start learning HTML now!</a>
            </div>
            <hr />
            <div id="part4">
                <h1>HTML Examples</h1>
                At the end of the HTML tutorial, you can find more than 200 examples.
                <br /><br />
                With our online editor, you can edit and test each example yourself.
                <br /><br />
                <a href="#">Go to HTML Examples!</a>
                <br /><br />
            </div>
            <hr />
            <div id="part5">
                <h1>HTML Quiz Test</h1>
                Test your HTML skills at W3Schools!
                <br /><br />
                <a href="#">Start HTML Quiz!</a>
                <br /><br />
            </div>
            <hr />
            <div id="part6">
                <h1>HTML References</h1>
                At W3Schools you will find complete references about tags, attributes, events, color names, entities, character-sets, URL encoding, language codes, HTTP messages, and more.
                <br /><br />
                <a href="#">HTML Tag Reference</a>
                <br /><br />
            </div>
            <hr />
            <div id="part7">
                <h1>HTML Exam - Get Your Diploma!</h1>
                <br /><br />
                <a href="#"><img src="http://www.w3schools.com/images/w3cert.gif" style="width:30%;padding-right: 40px;float: left;" alt="W3Schools Certification" /></a>
                <div id="cont7a" style="margin-left: 310px;">
                    <h1>W3Schools' Online Certification</h1>
                    The perfect solution for professionals who need to balance work, family, and career building.
                    <br /><br />
                    More than 10 000 certificates already issued!
                    <br /><br />
                </div>
                <div id="cont7b">
                    The <a href="#">HTML Certificate</a> documents your knowledge of HTML.
                    <br /><br />
                    The <a href="#">HTML5 Certificate</a> documents your knowledge of advanced HTML5.
                    <br /><br />
                    The <a href="#">CSS Certificate</a> documents your knowledge of advanced CSS.
                    <br /><br />
                    The <a href="#">JavaScript Certificate</a> documents your knowledge of JavaScript and HTML DOM.
                    <br /><br />
                    The <a href="#">jQuery Certificate</a> documents your knowledge of jQuery.
                    <br /><br />
                    The <a href="#">PHP Certificate</a> documents your knowledge of PHP and SQL (MySQL).
                    <br /><br />
                    The <a href="#">XML Certificate</a> documents your knowledge of XML, XML DOM and XSLT.
                    <br /><br />
                </div>
                <div class="pre_next">
                    <?php 
						$i=12;
						include 'Previous.php';
						include 'Next.php'; 
					?>
                </div>
            </div>
            <hr />
        </div>
        <div id="footer">

        </div>
    </div>
</body>
</html>


<script type="text/javascript">

    var erty = 111111;
    (function () {
        var qwerty = 123;
        console.log(erty);
    })();
    
    window.onscroll = function () {
        if (window.scrollY >= 80)
        {
            var nav = document.getElementById("navigation");
            nav.classList.add("active");
            document.getElementById("menu").style.top = "45px";
        }
        else
        {
            var nav = document.getElementById("navigation");
            nav.classList.remove("active");

            /*
                var orgTop = #menu => CSS => Top;
                window.scrollY is 10;
                #menu cách so với #nav là 10
                #menu => CSS => top  = orgTop + windo.scrollY;
            */
            var originTop = 125;
            var menu = document.getElementById("menu").style.top = originTop - window.scrollY + "px";
        }
    }
    
	function checked1 (){
		document.getElementById("click2").checked = false;
		document.getElementById("click3").checked = false;
		document.getElementById("click4").checked = false;
	}
	
	function checked2 (){
		document.getElementById("click1").checked = false;
		document.getElementById("click3").checked = false;
		document.getElementById("click4").checked = false;
	}
	
	function checked3 (){
		document.getElementById("click1").checked = false;
		document.getElementById("click2").checked = false;
		document.getElementById("click4").checked = false;
	}
	
	function checked4 (){
		document.getElementById("click1").checked = false;
		document.getElementById("click2").checked = false;
		document.getElementById("click3").checked = false;
	}
	function closeit (){
		document.getElementById("click1").checked = false;
		document.getElementById("click2").checked = false;
		document.getElementById("click3").checked = false;
		document.getElementById("click4").checked = false;
	}
    
</script>