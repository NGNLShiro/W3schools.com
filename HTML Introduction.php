<?php include 'connection.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>HTML Introduction</title>
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
                <a href="#"><img src="Untitled1.png" style="margin-bottom: -7px; margin-top: -2px;"/></a>
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
                <h1>HTML Introduction</h1>
                <div class="pre_next">
                    <a class="pre" href="#" style="visibility: visible;">«Previous</a>
                    <a class="next" href="#" style="visibility: visible;">Next Chapter »</a>
                </div>
            </div>
            <hr />
            <div id="part2">
                <h1>What is HTML?</h1>
                HTML is a <b>markup</b> language for <b>describing</b> web documents (web pages).
                <ul>
                    <li>HTML stands for <b>H</b>yper <b>T</b>ext <b>M</b>arkup <b>L</b>anguage</li>
                    <li>A markup language is a set of <b>markup tags</b></li>
                    <li>HTML documents are described by <b>HTML tags</b></li>
                    <li>Each HTML tag <b>describes</b> different document content</li>
                </ul>
                <br /><br />
            </div>
            <hr />
            <div id="part3">
                <h1>HTML Example</h1>
                <div id="example">
                    <div id="contentex"></div>
                </div>
            </div>
            <hr />
            <div id="part4">
                <h1>Example Explained</h1>
                <br /><br />
                <ul>
                    <li>The <b>DOCTYPE</b> declaration defines the document type to be HTML</li>
                    <li>The text between<b>< html ></b> and <b>< /html ></b> describes an HTML document</li>
                    <li>The text between <b>< head ></b> and <b>< /head ></b> provides information about the document</li>
                    <li>The text between <b>< title ></b> and <b>< /title ></b> provides a title for the document</li>
                    <li>The text between <b>< body ></b> and <b>< /body ></b> describes the visible page content</li>
                    <li>The text between <b>< h1 ></b> and <b>< /h1 ></b> describes a heading</li>
                    <li>The text between <b>< p ></b> and <b>< /p ></b> describes a paragraph</li>
                </ul>
                <br /><br />
                Using this description, a web browser can display a document with a heading and a paragraph.
                <br /><br />
            </div>
            <hr />
            <div id="part5">
                <h1>HTML Tags</h1>
                HTML tags are <b>keywords</b> (tag names) surrounded by angle <b>brackets:</b>
                <br /><br />
                <ul>
                    <li>HTML tags normally come <b>in pairs</b> like < p > and < /p ></li>
                    <li>The first tag in a pair is the <b>start tag</b>, the second tag is the <b>end tag</b></li>
                    <li>The end tag is written like the start tag, but with a <b>slash</b> before the tag name</li>
                </ul>
                <div class="note">
                    <img src="http://www.w3schools.com/images/lamp.jpg" alt="Note" style="height:32px;width:32px" />
                    <p>The start tag is often called the <b>opening tag.</b> The end tag is often called the <b>closing tag.</b></p>
                </div>
            </div>
            <hr />
            <div id="part6">
                <h1>Web Browsers</h1>
                The purpose of a web browser (Chrome, IE, Firefox, Safari) is to read HTML documents and display them.
                <br /><br />
                The browser does not display the HTML tags, but uses them to determine how to display the document:
                <br /><br />
                <img alt="View in Browser" style="height:auto;width:635px" src="http://www.w3schools.com/html/img_chrome.png" />
            </div>
            <hr style="margin-bottom: 20px;margin-top: 20px;" />
            <div id="part7">
                <div style="width:99%;border:1px solid grey;padding:3px;margin:0;background-color:#ddd">
                    &lt;html&gt;
                    <div style="width:90%;border:1px solid grey;padding:3px;margin:20px">
                        &lt;head&gt;
                        <div style="width:90%;border:1px solid grey;padding:5px;margin:20px">
                            &lt;title&gt;Page title&lt;/title&gt;
                        </div>
                        &lt;/head&gt;
                    </div>
                    <div style="width:90%;border:1px solid grey;padding:3px;margin:20px;background-color:#fff">
                        &lt;body&gt;
                        <div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;h1&gt;This is a heading&lt;/h1&gt;</div>
                        <div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;p&gt;This is a paragraph.&lt;/p&gt;</div>
                        <div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;p&gt;This is another paragraph.&lt;/p&gt;</div>
                        &lt;/body&gt;
                    </div>
                    &lt;/html&gt;
                </div>
                <div class="note">
                    <img src="http://www.w3schools.com/images/lamp.jpg" alt="Note" style="height:32px;width:32px" />
                    <p>Only the < body > area (the white area) is displayed by the browser.</p>
                </div>
            </div>
            <hr />
            <div id="part8">
                <h1>The <!DOCTYPE> Declaration</h1>
                The <!DOCTYPE> declaration helps the browser to display a web page correctly.
                <br /><br />
                There are different document types on the web.
                <br /><br />
                To display a document correctly, the browser must know both type and version.
                <br /><br />
                The doctype declaration is not case sensitive. All cases are acceptable:
                <br /><br />
                <div id="example">
                    <div id="contentex"></div>
                </div>
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