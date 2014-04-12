<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base target="_top" />
<title>Xenos Summer Institute - More Info</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="/global/fm_simple.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" language="javascript" type="text/javascript"></script>
<script src="/global/jquery/jquery.placeholder.js"></script>
<script type="text/javascript">
$(function() {
  $('input, textarea').placeholder();
});
</script>

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

</head>
<body bgcolor="#000">
<div style="width:820px; background-color:#FFF; background-image: url(graphics/header-full800.png);
	background-repeat: no-repeat; margin-left:150px; padding-top:1px;">
  <div style="width:800px; margin-left:10px; margin-top:60px; background-image: url(graphics/collegekids.jpg);
	background-repeat: no-repeat; min-height:750px">
    <div style="float:right; width:300px; margin-top:0px; margin-right:40px; margin-bottom:20px;">
      <h1 align="center" style="font-size:180%;">Over <span style="color:#EE5023;">24,000<br />
        </span>people have been<br />
        to the Xenos<br />
        Summer Institute.</h1>
      <h1 style="font-weight:normal; font-style: italic; text-align: center;font-size: 170%;">Find out why!</h1>
    </div>
    <div id="signupform">
      <form action="/global/fm_simple.php" method="post">
        <h2><span style="color: #FC3;">Send me updates!</span></h2>
        <label><strong>Name</strong>*<br />
          <input name="name" type="text" size="35" />
        </label>
        <br />
        <label><strong>Email</strong>* <span class="small">(monthly updates)</span><br />
          <input name="email" type="text" size="35" />
        </label>
        <br />
        <div class="small">*Required</div>
        <br />
        <label><strong>Your church</strong><br />
          <input name="church" type="text" size="35" />
        </label>
        <br />
        <br />
        <label><strong>Address</strong> <span class="small">(required if requesting a brochure)</span><br />
          <input name="address" type="text" placeholder="Street Address" size="35" />
          <input name="city" type="text" placeholder="City" size="20" />
          <input name="state" type="text" placeholder="State" size="8" />
          <input name="zip" type="text" placeholder="Zip" size="10" />
        </label>
        <br />
        <!-- <input type="checkbox" name="sendme[]" value="Brochure requested" /> -->
        <input type="checkbox" name="brochure" />
        Mail me a brochure also
        <br />
        <br />
        <label class="email_check">Leave this field untouched<br /><input name="email_check" type="text" value="OICU812" size="10" /><br /></label>
        <label class="url_check">Leave this field blank<br /><input name="url_check" type="text" value="" size="10" /><br /></label>
        <input type="image" src="graphics/blue-button-sendstuff.png" name="submit" />
        <br />
        <input type="hidden" name="subject" value="Summer Institute Info Request" />
        <input type="hidden" name="recipients" value="xsi-#-xenos.org" />
        <input type="hidden" name="derive_fields" value="realname=name,brochureYesNo=%if(brochure;%'Yes'%;%'No'%)%" />
<!--
        <input type="hidden" name="required" value="name:Your name,email:Your email address" />
-->
        <input type="hidden" name="conditions1" value=":@@TEST@name@Your name is required@" />
        <input type="hidden" name="conditions2" value=":@@TEST@email@Your email is required@" />
        <input type="hidden" name="conditions3" value=":@@IF@brochure@address@@Your complete address is required if requesting a brochure.@" />
        <input type="hidden" name="conditions4" value=":@@IF@brochure@city@@Your complete address is required if requesting a brochure.@" />
        <input type="hidden" name="conditions5" value=":@@IF@brochure@state@@Your complete address is required if requesting a brochure.@" />
        <input type="hidden" name="conditions6" value=":@@IF@brochure@zip@@Your complete address is required if requesting a brochure.@" />
        <input type="hidden" name="mail_options" value="AlwaysList=true,PlainTemplate=xsi_info.txt" />
        <input type="hidden" name="autorespond" value="PlainFile=xsi_info_reply.txt,FromAddr=xsi-#-xenos.org,Subject=Request for Xenos Summer Institute information" /> 
        <input type="hidden" name="good_url" value="/xsi/landingpage/signup_thanks.php" />
        <input type="hidden" name="bad_url" value="/xsi/landingpage/signup_error.php" />
        <input type="hidden" name="csvfile" value="xsi_info.csv" />
        <input type="hidden" name="csvcolumns" value="%date%,%time%,name,email,address,city,state,zip,brochureYesNo,source" />
        <input type="hidden" name="logfile" value="xsi_info.log" />
        <input type="hidden" name="source" value="" />
        <input type="hidden" name="id" value="" />
      </form>
    </div>
    <p>&nbsp;</p>
  </div>
  <div align="center">
  
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

  <p>&nbsp;</p>
  </div>
</div>
</body>
</html>
