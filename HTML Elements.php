<?php include 'connection.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>HTML Elements</title>
    <link rel="stylesheet" type="text/css" href="CSS_w3schools.css" />
</head>

<body>
    <div id="all">
        <div id="header">
            <div id="logo">
                <a href="#" style="margin-top: 8px;">
                    <img src="Untitled.png" />
                </a>
            </div>
            <div id="sologan">
                THE WORLD'S LARGEST WEB DEVELOPER SITE
            </div>
        </div>
        <div id="navigation">
            <div id="nav1">
                <a href="#"><img src="Untitled1.png" style="margin-bottom: -7px; margin-top: -2px;" /></a>
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
                <?php include 'Show_Data.php'; ?>
            </ul>
        </div>
        <div id="content">
            <div id="part1">
                <h1 style="font-size: 35px;">HTML Elements</h1>
                <div class="pre_next">
                    <a class="pre" href="#" style="visibility: visible;">«W3Schools Home</a>
                    <a class="next" href="#" style="visibility: visible;">Next Chapter »</a>
                </div>
            </div>
            <hr />
            <div id="part2">
                <br /><br />
                HTML <b>documents</b> are made up by HTML <b>elements.</b>
                <br /><br />
            </div>
            <hr />
            <div id="part3">
                <h1>HTML Elements</h1>
                HTML elements are written with a <b>start</b> tag, with an <b>end</b> tag, with the <b>content</b> in between:
                <br /><br />
                <div class="htmlHigh" style="font-size:20px;padding:10px;margin-bottom:10px;">
                    <span class="highLT" style="
                        color: blue;
                        font-size: 20px;
                        font-family: Verdana,sans-serif;
                        line-height: 1.5;
                        ">&lt;</span><span class="highELE" style="
                        color: brown;
                        font-size: 20px;
                        font-family: Verdana,sans-serif;
                            line-height: 1.5;
                        ">tagname</span><span class="highGT" style="
                            color: blue;    font-size: 20px;    font-family: Verdana,sans-serif;    line-height: 1.5;
                        ">&gt;</span>content<span class="highLT" style="
                            color: blue;    font-size: 20px;    font-family: Verdana,sans-serif;    line-height: 1.5;
                        ">&lt;</span><span class="highELE" style="
                            color: brown;    font-size: 20px;    font-family: Verdana,sans-serif;    line-height: 1.5;
                        ">/tagname</span><span class="highGT" style="
                            color: blue;    font-size: 20px;    font-family: Verdana,sans-serif;    line-height: 1.5;
                        ">&gt;
                    </span>
                </div>
                <br /><br />
                The HTML <b>element</b> is everything from the start tag to the end tag:
                <br /><br />
                <div class="htmlHigh" style="font-size:20px;padding:10px;margin-bottom:10px;">
                    <span class="highLT" style="
                        color: blue;
                        box-sizing: border-box;
                        font-size: 20px;
                        font-family: Verdana,sans-serif;
                        line-height: 1.5;
                        ">&lt;</span><span class="highELE" style="
                        color: brown;
                        box-sizing: border-box;
                        font-size: 20px;
                        font-family: Verdana,sans-serif;
                        line-height: 1.5;
                        ">p</span><span class="highGT" style="
                            color: blue;    box-sizing: border-box;    font-size: 20px;    font-family: Verdana,sans-serif;    line-height: 1.5;  }
                        ">&gt;</span>My first HTML paragraph.<span class="highLT" style="
                            color: blue;    box-sizing: border-box;    font-size: 20px;    font-family: Verdana,sans-serif;    line-height: 1.5;  }
                        ">&lt;</span><span class="highELE" style="
                            color: brown;    box-sizing: border-box;    font-size: 20px;    font-family: Verdana,sans-serif;    line-height: 1.5;
                        ">/p</span><span class="highGT" style="
                            color: blue;    box-sizing: border-box;    font-size: 20px;    font-family: Verdana,sans-serif;    line-height: 1.5;  }
                        ">&gt;
                    </span>
                </div>
                <br /><br />
                <table class="w3-table-all notranslate">
                    <tbody>
                        <tr>
                            <th style="width:33%">Start tag</th>
                            <th style="width:33%">Element content</th>
                            <th>End tag</th>
                        </tr>
                        <tr style="background-color:rgb(241, 241, 241);">
                            <td>&lt;h1&gt;</td>
                            <td>My First Heading</td>
                            <td>&lt;/h1&gt;</td>
                        </tr>
                        <tr>
                            <td>&lt;p&gt;</td>
                            <td>My first paragraph.</td>
                            <td>&lt;/p&gt;</td>
                        </tr>
                        <tr style="background-color:rgb(241, 241, 241);">
                            <td>&lt;br&gt;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
                <br /><br />
                <div class="note">
                    <img src="http://www.w3schools.com/images/lamp.jpg" alt="Note" style="height:32px;width:32px" />
                    <p>Some HTML elements do not have an end tag.</p>
                </div>
                <a href="#">Start learning HTML now!</a>
            </div>
            <hr />
            <div id="part4">
                <h1>Nested HTML Elements</h1>
                HTML elements can be nested (elements can contain elements).
                <br /><br />
                All HTML documents consist of nested HTML elements.
                <br /><br />
                This example contains 4 HTML elements:
                <br /><br />
                <div id="example">
                    <div id="contentex"></div>
                </div>
            </div>
            <hr />
            <div id="part5">
                <h1>HTML Example Explained</h1>
                The < html > element defines the whole document.
                <br /><br />
                It has a start tag < html > and an end tag < /html >.
                <br /><br />
                The element content is another HTML element (the < body > element).
                <br /><br />
                <div id="example">
                    <div id="contentex"></div>
                </div>
                <br /><br />
                The <b>< body ></b> element defines the <b>document body.</b>
                <br /><br />
                It has a <b>start</b> tag < body > and an <b>end</b> tag < /body >.
                <br /><br />
                The element <b>content</b> is two other HTML elements (< h1 > and < p >).
                <br /><br />
                <div id="example">
                    <div id="contentex"></div>
                </div>
                <br /><br />
                The <b>< h1 ></b> element defines a <b>heading.</b>
                <br /><br />
                It has a <b>start</b> tag < h1 > and an <b>end</b> tag < /h1 >.
                <br /><br />
                The element <b>content</b> is: My First Heading.
                <br /><br />
                <div id="example">
                    <div id="contentex"></div>
                </div>
                <br /><br />
                The <b>< p ></b> element defines a <b>paragraph.</b>
                <br /><br />
                It has a <b>start</b> tag < p > and an <b>end</b> tag < /p >.
                <br /><br />
                The element <b>content</b> is: My first paragraph.
                <br /><br />
                <div id="example" style="height: 93px;">
                    <div id="contentex" style="height: 40px;"></div>
                </div>
            </div>
            <hr />
            <div id="part6">
                <h1>Don't Forget the End Tag</h1>
                Some HTML elements will display correctly, even if you forget the end tag:
                <br /><br />
                <div id="example">
                    <div id="contentex"></div>
                </div>
                <br /><br />
                The example above works in all browsers, because the closing tag is considered optional.
                <br /><br />
                Never rely on this. It might produce unexpected results and/or errors if you forget the end tag.
                <br /><br />
            </div>
            <hr />
            <div id="part7">
                <h1>Empty HTML Elements</h1>
                <br /><br />
                HTML elements with no content are called empty elements.
                <br /><br />
                < br > is an empty element without a closing tag (the < br > tag defines a line break).
                <br /><br />
                Empty elements can be "closed" in the opening tag like this: < br />.
                <br /><br />
                HTML5 does not require empty elements to be closed. But if you want stricter validation, or you need to make your document readable by XML parsers, you should close all HTML elements.
                <br /><br />
            </div>
            <div id="part8">
                <h1>HTML Tip: Use Lowercase Tags</h1>
                HTML tags are not case sensitive: < P > means the same as < p > .
                <br /><br />
                The HTML5 standard does not require lowercase tags, but W3C <b>recommends</b> lowercase in HTML4, and <b>demands</b> lowercase for stricter document types like XHTML.
                <br /><br />
                <div class="note">
                    <img src="http://www.w3schools.com/images/lamp.jpg" alt="Note" style="height:32px;width:32px">
                    <p>At W3Schools we always use lowercase tags.</p>
                </div>
                <br /><br />
                <br /><br />
                <div class="pre_next">
                    <a class="pre" href="#" style="visibility: visible;">«Previous</a>
                    <a class="next" href="#" style="visibility: visible;">Next Chapter »</a>
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