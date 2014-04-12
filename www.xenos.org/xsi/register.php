<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- #BeginTemplate "/Templates/xsi.dwt" --><!-- DW6 -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- #BeginEditable "doctitle" -->
<title>Registration for the Xenos Summer Institute</title>
<!-- #EndEditable -->

<!-- Head -->
<!-- Milonic DHTML Menu -->
<script type="text/javascript" src="/global/milonic/milonic_menu_code.js"></script>
<script type="text/javascript">
// Disable dhtml menus for Linux browsers due to flash conflict
var EnableMenus = (navigator.platform.indexOf("Linux") > -1) ? false : true;
//alert("EnableMenus: " + EnableMenus + "\n");
</script>
<script type="text/javascript" src="/global/milonic/sub_menu_data.js"></script> 
<link type="text/css" rel="stylesheet" href="/global/milonic/style.css" media="screen" />
<!-- /Milonic DHTML Menu -->

<!-- Google Analytics -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1769219-1']);
 // _gaq.push(['_setDomainName', '.xenos.org']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- /Google Analytics -->


<link rel="stylesheet" href="/global/zen1/print.css" type="text/css" media="print" />
<link rel="stylesheet" href="/global/zen1/system/defaults.css" type="text/css" media="all" />
<!-- <link rel="stylesheet" href="/modules/system/system.css" type="text/css" media="all" /> -->
<link rel="stylesheet" href="/global/zen1/xenos/html-elements.css" type="text/css" media="all" />
<link rel="stylesheet" href="/global/zen1/xenos/layout.css" type="text/css" media="all" />
<link rel="stylesheet" href="/global/zen1/xenos/xenos.css" type="text/css" media="all" />
<!--[if IE]>
  <link rel="stylesheet" href="/global/zen1/ie.css" type="text/css">
<![endif]-->
<!-- /Head -->

<link href="style.css" rel="stylesheet" type="text/css" />
<!-- #BeginEditable "head" -->
<script type="text/javascript" language="JavaScript">
function setConfLengthDefault(id) {
  var elem = document.getElementById(id);
  if (elem.value == "") {
    elem.value = "Full";
  }
}

function validateForm() {
  var itemNumList = new Array();
  itemNumList["Full"] = new Array();
  itemNumList["Limited"] = new Array();

  itemNumList["Full"]["Standard"]     = "_1276";
  itemNumList["Limited"]["Standard"]  = "_1277";
  itemNumList["Full"]["Student"]      = "_1278";
  itemNumList["Limited"]["Student"]   = "_1279";

  // Reset submission fields from potentially stale values (e.g. "Back" button)
  for (var i in itemNumList) {
    for (var j in itemNumList[i]) {
      document.getElementById("names" + itemNumList[i][j]).value = "";
      document.getElementById("quantity" + itemNumList[i][j]).value = "";

      document.getElementById("names" + itemNumList[i][j]).disabled = true;
      document.getElementById("quantity" + itemNumList[i][j]).disabled = true;
    }
  }

  var buffer = new Array();
  buffer["names"] = new Array();
  buffer["quantity"] = new Array();

  var numRegistrations = 0;

  // Loop thru fields and add data to buffers
  for (var i=1; document.getElementById("FirstName_"+i) != null; i++) {
    var firstName = document.getElementById("FirstName_"+i).value;
    var lastName = document.getElementById("LastName_"+i).value;
    var email = document.getElementById("Email_"+i).value;
    var confLength = document.getElementById("ConfLength_"+i).value;
    var standardStudent = document.getElementById("Student_"+i).checked ? "Student" : "Standard";

    // Process lines containing any data
    if (firstName.length || lastName.length || email.length) {

      // Check for required fields
      if (firstName == "" || lastName == "" || email == "") {
        alert("Please ensure that a first name, last name, and e-mail address is provided for each person.");
        return false;
      }
      if (confLength == "") {
        alert("Please ensure a Conference Length is selected for each person.");
        return false;
      }

      // Determine itemNum corresponding to conference length and student status
      var itemNum = itemNumList[confLength][standardStudent];

      // Initialize buffers used for the first time
      if (buffer["names"][itemNum] == null) {
        buffer["names"][itemNum] = "";
        buffer["quantity"][itemNum] = 0;
      }

      // Save values in buffers differentiated by itemNum
      buffer["names"][itemNum] += firstName + " " + lastName + " (" + email + ")\n";
      buffer["quantity"][itemNum]++;

      // Maintain registration count
      numRegistrations++;
    }
  }

  if (numRegistrations == 0) {
    alert("Please enter registration information before\n"
      + "clicking 'Add Registrations and Check Out'.");
    return false;
  }

  
  // Populate and activate fields for submission (disabled fields are not submitted)
  for (var itemNum in buffer["names"]) {
    document.getElementById("names" + itemNum).value = buffer["names"][itemNum];
    document.getElementById("quantity" + itemNum).value = buffer["quantity"][itemNum];

    document.getElementById("itemnum" + itemNum).disabled = false;
    document.getElementById("names" + itemNum).disabled = false;
    document.getElementById("quantity" + itemNum).disabled = false;
  }

  return true;
}
</script>

<!-- #EndEditable -->
<style type="text/css">
<!--
.style1 {
	font-weight: bold;
	color: #ccc;
	margin-bottom: 0px;
	margin-top:0px;
}
-->
</style>
<!--sharethis code -->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher:"bfaef196-d057-4a8c-911b-995ba7aca79a", onhover:false});</script>
</head>
<body class="sidebar-right">
<div id="page">
  <div id="page-inner">
    
    <!-- Header -->
    <div id="header"><div id="header-inner">
	    <a name="top" id="top"></a>
      

      <div id="logo-title">
                <!-- Google Search -->
        <div style="float:right;background-color:#000000;color:#FFFFFF;font-size:75%;width:250px;">
          <form action="http://www.xenos.org/search/" method="get" name="search" id="xcf-search">
            <input value="Enter search terms..." name="q" size="20" onfocus="this.value='';" title="Enter search terms here" type="text" />
            <input class="button" value="Search" type="submit" />
            <br clear="right" />
            <div style="text-align:center">
              <img style="vertical-align:-40%;" src="//www.google.com/images/poweredby_transparent/poweredby_000000.gif" alt="Google">
              Custom Search
            </div>
          </form>
        </div>
        <!-- /Google Search -->

        <a href="/index.htm"><img src="/global/images/transparent.gif" alt="logo" width="230" height="90" border="0" /></a>
      </div> <!-- /#logo-title -->
 
      <!-- Menu for non-JavaScript browsers/crawlers -->
      <div id="xcf-nav">
        <script type="text/javascript" src="/global/milonic/main_menu_data.js"></script>
        <noscript>
          <ul id="xcf-nav-noscript">
            <!-- <li><a href="/index.htm" title="Xenos home page">Xenos Home</a></li> -->
            <li><a href="/aboutxenos/index.htm" title="About Xenos">About Xenos</a></li>
            <li><a href="/homegroups/index.htm" title="About Xenos Home Groups">Home Groups</a></li>
            <li><a href="/teachings/index.htm" title="Multimedia Bible Teachings">Bible Teachings</a></li>
            <li><a href="/classes/index.htm" title="About Adult Classes">Classes</a></li>
            <li><a href="/essays/index.htm" title="Xenos Books and Essays">Books & Essays</a></li>
            <li><a href="/ministries/index.htm" title="About Xenos Ministries">Ministries</a></li>
            <li><a href="/xsi/index.htm" title="About the Xenos Summer Institute">Summer Institute</a></li>
            <li><a href="/store/index.htm" title="About the Xenos Online Store">Catalog</a></li>
            <li><a href="/aboutxenos/donate.htm" title="Ways to Provide Financial Support to Xenos">Donate</a></li>
          </ul>
        </noscript>
      </div> <!-- /#xcf-nav -->
    </div></div> <!-- /#header-inner, /#header -->
    <!-- /Header -->

    <div id="main">
      <div id="main-inner" class="clear-block">
        <div id="sidebar-right">
         <div style="margin-left:0px"></div>
          <div id="sidebar-right-inner">
           
           
            <ul>
            
            <br />
            <a href="landingpage/signup.php"><img src="graphics/bue-button-shad.png" alt="Xenos Summer Institute" width="182" height="46" /></a>


              <li><a href="index.htm">General Information </a></li>
              <li><a href="register.php">Register Online</a></li>
              <li><a href="speakers.htm">Plenary Speakers</a></li>
             <li><a href="schedule.htm">Conference Schedule</a></li>
             <!-- <li><a href="../xsi/breakouts.htm">Breakout Sessions Info</a></li>
              <li><a href="../xsi/sessions.htm">Breakout Schedule</a></li>-->
             <li><a href="lodging.htm">Lodging and Directions</a></li>
             <!-- <li><a href="../xsi/lodging.htm#free_lodging">Free Lodging option</a></li>
              <li><a href="http://store.xenos.org/xsi.html">Order CDs</a></li>-->
              
              <li><a href="../classes/masters/classes.htm" target="_blank">Seminary Credit</a></li>
              <!--<li><a href="../teachings/index/?source=XSI">Past MP3 Archive</a></li>
              <li><a href="../xsi/volunteer.htm">Volunteer</a></li>--> 
              <li><a href="mailto:xsi@xenos.org?cc=webmaster@xenos.org&amp;subject=Xenos Summer Institute">Email Us</a></li>
              <!--<li style="font-size: 105%; font-weight:light; letter-spacing:1px;"><a>1-800-698-7884</a></li>-->
              
            </ul>
            <p><a style="font-size: 135%; color: #164470; text-decoration:none;"> Call 1-800-698-7884</a></p>
          <!-- <form action="/global/fm_simple.php" method="post">
              <input type="hidden" name="subject" value="Request for information on the upcoming Xenos Summer Institute" />
              <input type="hidden" name="recipients" value="xsi-#-xenos.org" />
							<input type="hidden" name="derive_fields" value="date=%date%,time=%time%" />
              <input type="hidden" name="required" value="email:Your email address" />
              <input type="hidden" name="mail_options" value="AlwaysList=true,PlainTemplate=xsi_email.txt" />
              <input type="hidden" name="good_url" value="/xsi/request_info_ok.htm" />
              <input type="hidden" name="bad_url" value="/xsi/request_info_error.php" />
              <input type="hidden" name="csvfile" value="xsi_info_request.csv" />
              <input type="hidden" name="csvcolumns" value="date,time,email" />
              <input type="hidden" name="logfile" value="xsi_info_request.log" />
              <table cellpadding="3">
                <tr>
                  <td><p class="style1">Request e-brochure</p></td>
                </tr>
                <tr>
                  <td><input name="email" type="text" value="Enter email address" size="20" onfocus="this.value=''"/>
                  </td>
                </tr>
                <tr>
                  <td><input type="submit" value="Send Request" name="submit" /></td>
                </tr>
              </table>
            </form>-->
             <div style="margin: 5px 0px 10px 4px">
              <p><a href="http://www.facebook.com/pages/Columbus-OH/The-Xenos-Summer-Institute/72621894885?ref=ts" target="_blank"><img src="graphics/facebook.png" alt="facebook" width="24" height="24" /></a>
              <a href="http://twitter.com/XenosInstitute" target="_blank"><img src="graphics/twitter.png" alt="twitter" width="24" height="24" style="margin-left:5px;" /></a></p>
            </div>
          </div>
        </div> <!-- /#sidebar-right-inner, /#sidebar-right -->
        <div id="content">
          <div id="content-inner">
            <div id="content-header"><img src="graphics/xsi14banner6-ns.png" alt="Xenos Summer Institute" width="600" height="150" /></div> 
            <!-- /#content-header -->
            <div id="content-area"><!-- #BeginEditable "Content" --><div id="text">

        <div align="center">
        <h1>Xenos Summer Institute General Registration</h1>
       
       
         <h3 style="font-size:120%;"> Xenos members <a href="register.php?homegroup">register here</a></h3>
       <!-- (Groups of 5 or more.)-->
        
        <br >
        

        <div style="border:1px solid #999999; padding:0; margin:auto; width:50%;">
        <h2>Tuition Rates </h2>
        <table width="100%">
          <tr>
            <th scope="col">&nbsp;</th>
            <th scope="col">Full Conference</th>
            <th scope="col">One Day</th>
          </tr>
          <tr>
            <th scope="row">Adult</th>
            <td align="center">$60.00</td>
            <td align="center">$30.00</td>
          </tr>
          <tr>
            <th scope="row">Full-time Student</th>
            <td align="center">$20.00</td>
            <td align="center">$10.00</td>
          </tr>
          <tr>
            <th colspan="3" style="color:red">After June 27, 2014</th>
          </tr>
          <tr>
            <th scope="row">Adult</th>
            <td align="center">$70.00</td>
            <td align="center">$35.00</td>
          </tr>
          <tr>
            <th scope="row">Full-time Student</th>
            <td align="center">$20.00</td>
            <td align="center">$10.00</td>
          </tr>
        </table>
        </div>
        </div>

        <p>&nbsp;</p>
         
        <p>Enter the names, email addresses and registration options for up to 4 people,<br />
        then press the <em>&quot;Add Registrations and Check Out&quot;</em> button when you are finished.</p>
        <p>You'll be taken to the Xenos online catalog to check out and pay for your registration(s). You can also register by phone at <strong>800-698-7884</strong>.</p>
        <form action="http://store.xenos.org/cgi-sys/cgiwrap/xenosc/sc/order.cgi" method="post" onsubmit="return validateForm()">
        <input type="hidden" name="storeid" value="*1667e471703290c817dbb44f9c" />
        <input type="hidden" name="dbname" value="products" />
        <input type="hidden" name="function" value="add" />
        <table>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>E-mail</th>
            <th>Conference Length</th>
            <th>Full-time Student?</th>
          </tr>
				                                  <tr>
            <td><input id="FirstName_1" type="text" size="15" onblur="setConfLengthDefault('ConfLength_1')" /></td>
            <td><input id="LastName_1" type="text" size="15" /></td>
            <td><input id="Email_1" type="text" size="15" /></td>
            <td><select id="ConfLength_1">
                  <option value="">--- Select ---</option>
                  <option value="Full">Full Conference</option>
                  <option value="Limited">One day</option>
                </select>
            </td>
            <td align="center"><input id="Student_1"type="checkbox" /></td>
          </tr>
                  <tr>
            <td><input id="FirstName_2" type="text" size="15" onblur="setConfLengthDefault('ConfLength_2')" /></td>
            <td><input id="LastName_2" type="text" size="15" /></td>
            <td><input id="Email_2" type="text" size="15" /></td>
            <td><select id="ConfLength_2">
                  <option value="">--- Select ---</option>
                  <option value="Full">Full Conference</option>
                  <option value="Limited">One day</option>
                </select>
            </td>
            <td align="center"><input id="Student_2"type="checkbox" /></td>
          </tr>
                  <tr>
            <td><input id="FirstName_3" type="text" size="15" onblur="setConfLengthDefault('ConfLength_3')" /></td>
            <td><input id="LastName_3" type="text" size="15" /></td>
            <td><input id="Email_3" type="text" size="15" /></td>
            <td><select id="ConfLength_3">
                  <option value="">--- Select ---</option>
                  <option value="Full">Full Conference</option>
                  <option value="Limited">One day</option>
                </select>
            </td>
            <td align="center"><input id="Student_3"type="checkbox" /></td>
          </tr>
                  <tr>
            <td><input id="FirstName_4" type="text" size="15" onblur="setConfLengthDefault('ConfLength_4')" /></td>
            <td><input id="LastName_4" type="text" size="15" /></td>
            <td><input id="Email_4" type="text" size="15" /></td>
            <td><select id="ConfLength_4">
                  <option value="">--- Select ---</option>
                  <option value="Full">Full Conference</option>
                  <option value="Limited">One day</option>
                </select>
            </td>
            <td align="center"><input id="Student_4"type="checkbox" /></td>
          </tr>
                </table>
        <h3 style="font-size:130%"> Groups of 5 or more <a href="register.php?group">register here</a> for a discount.</h3>
         <br >
        <div align="center">Please let us know if you have special needs like wheelchair seating or sign language interpretation. Just include them in the comments section at checkout - thanks!
          <p>
            <input name="" type="submit" value="Add Registrations and Check Out" />
            </p>
        </div>
        
        <input type="hidden" id="itemnum_1276" name="itemnum" value="1276" disabled="disabled"/>
    <input type="hidden" id="quantity_1276" name="1276:qnty" type="text" size="2" disabled="disabled"/><br />
    <input type="hidden" id="names_1276" name="1276:freeopt" disabled="disabled"/>
        <input type="hidden" id="itemnum_1277" name="itemnum" value="1277" disabled="disabled"/>
    <input type="hidden" id="quantity_1277" name="1277:qnty" type="text" size="2" disabled="disabled"/><br />
    <input type="hidden" id="names_1277" name="1277:freeopt" disabled="disabled"/>
        <input type="hidden" id="itemnum_1278" name="itemnum" value="1278" disabled="disabled"/>
    <input type="hidden" id="quantity_1278" name="1278:qnty" type="text" size="2" disabled="disabled"/><br />
    <input type="hidden" id="names_1278" name="1278:freeopt" disabled="disabled"/>
        <input type="hidden" id="itemnum_1279" name="itemnum" value="1279" disabled="disabled"/>
    <input type="hidden" id="quantity_1279" name="1279:qnty" type="text" size="2" disabled="disabled"/><br />
    <input type="hidden" id="names_1279" name="1279:freeopt" disabled="disabled"/>
        </form>
      </div>
      <!-- #EndEditable -->
            <div class="social-media-links">
<span class="st_facebook_hcount" displaytext="Facebook"></span>
<span class="st_twitter_hcount" displaytext="Tweet"></span>
<span class="st_googleplus_hcount" displaytext="+1"></span>
<span class="st_email_hcount" displaytext="Email"></span>
</div>
              <p>&nbsp;</p>
            </div> 
            <!-- /#content-area -->
          </div>
        </div> <!-- /#content-inner, /#content -->
      </div>
    </div> <!-- /#main-inner, /#main -->
    
<!-- Footer -->
<div id="footer"><div id="footer-inner">
  <div id="footer-message">
    <span id="address">1340 Community Park Dr., Columbus OH 43229 &nbsp;(614) 823-6500</span><br />
    <span id="feedback">Send questions or feedback to <a href="mailto:webmaster@xenos.org">webmaster@xenos.org</a></span><br />
    <span id="copyright">&copy;2014 Xenos Christian Fellowship <span id="usage">(See our <a href="/copyright" target="_blank">usage guidelines</a> or <a href="/privacy" target="_blank">privacy policy</a>.)</span></span>
  </div> <!-- /#footer-message -->

  <!-- REMOVE: #include virtual="/global/google-analytics.inc" -->
</div></div> <!-- /#footer-inner, /#footer -->
<!-- /Footer -->

  </div>
</div> <!-- /#page-inner, /#page -->
</body>
<!-- #EndTemplate --></html>
