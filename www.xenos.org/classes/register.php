<html>
<head>
<title>Xenos Class Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="../css/xenosbody.css" type="text/css">
<link rel="stylesheet" href="../nav/main.css" type="text/css">
<link rel="stylesheet" href="../nav/classes.css" type="text/css">
<link rel="stylesheet" href="../nav/classes6.css" type="text/css">
<style type="text/css">
<!--
.SeasonalColor {  color: #996633}
.DateText {
	font-size: 10px;
	font-style: italic;
	color: #000000;
	font-family: "Arial Narrow", Helvetica, sans-serif;
}
.style21 {
	font-size: 12px;
	color: #000;
}
.style23 {
	font-size: 12px;
	font-weight: bold;
	color: #CC6600;
	text-align: center;
}
.style27 {
	color: #3333CC;
	font-size: 14px;
	font-weight: bold;
	text-align: left;
}
.style2 {
	color: #000000;
	text-align: left;
}
.style48 {color: #333333; font-size: 14px; font-weight: bold; }
a:link {
	color: #0099FF;
}
.style56 {font-family: Arial, Helvetica, sans-serif; color: #6666FF; }
.style63 {
	color: #669933;
	font-size: 12px;
}
.style67 {
  color: #3333CC;
  font-size: 16px;
  font-weight: bold;
  text-align: left;
  font-style: italic;
}
.style68 {font-size: 16px}
.style69 {
  color: #3333CC;
  font-size: 18px;
  font-weight: bold;
  text-align: left;
}
.style75 {font-size: 18px}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function YY_checkform() { //v4.69
//copyright (c)1998,2002 Yaromat.com
  var a=YY_checkform.arguments,oo=true,v='',s='',err=false,r,o,at,o1,t,i,j,ma,rx,cd,cm,cy,dte,at;
  for (i=1; i<a.length;i=i+4){
    if (a[i+1].charAt(0)=='#'){r=true; a[i+1]=a[i+1].substring(1);}else{r=false}
    o=MM_findObj(a[i].replace(/\[\d+\]/ig,""));
    o1=MM_findObj(a[i+1].replace(/\[\d+\]/ig,""));
    v=o.value;t=a[i+2];
    if (o.type=='text'||o.type=='password'||o.type=='hidden'){
      if (r&&v.length==0){err=true}
      if (v.length>0)
      if (t==1){ //fromto
        ma=a[i+1].split('_');if(isNaN(v)||v<ma[0]/1||v > ma[1]/1){err=true}
      } else if (t==2){
        rx=new RegExp("^[\\w\.=-]+@[\\w\\.-]+\\.[a-z]{2,4}$");if(!rx.test(v))err=true;
      } else if (t==3){ // date
        ma=a[i+1].split("#");at=v.match(ma[0]);
        if(at){
          cd=(at[ma[1]])?at[ma[1]]:1;cm=at[ma[2]]-1;cy=at[ma[3]];
          dte=new Date(cy,cm,cd);
          if(dte.getFullYear()!=cy||dte.getDate()!=cd||dte.getMonth()!=cm){err=true};
        }else{err=true}
      } else if (t==4){ // time
        ma=a[i+1].split("#");at=v.match(ma[0]);if(!at){err=true}
      } else if (t==5){ // check this 2
            if(o1.length)o1=o1[a[i+1].replace(/(.*\[)|(\].*)/ig,"")];
            if(!o1.checked){err=true}
      } else if (t==6){ // the same
            if(v!=MM_findObj(a[i+1]).value){err=true}
      }
    } else
    if (!o.type&&o.length>0&&o[0].type=='radio'){
          at = a[i].match(/(.*)\[(\d+)\].*/i);
          o2=(o.length>1)?o[at[2]]:o;
      if (t==1&&o2&&o2.checked&&o1&&o1.value.length/1==0){err=true}
      if (t==2){
        oo=false;
        for(j=0;j<o.length;j++){oo=oo||o[j].checked}
        if(!oo){s+='* '+a[i+3]+'\n'}
      }
    } else if (o.type=='checkbox'){
      if((t==1&&o.checked==false)||(t==2&&o.checked&&o1&&o1.value.length/1==0)){err=true}
    } else if (o.type=='select-one'||o.type=='select-multiple'){
      if(t==1&&o.selectedIndex/1==0){err=true}
    }else if (o.type=='textarea'){
      if(v.length<a[i+1]){err=true}
    }
    if (err){s+='* '+a[i+3]+'\n'; err=false}
  }
  if (s!=''){alert('The required information is incomplete or contains errors:\t\t\t\t\t\n\n'+s)}
  document.MM_returnValue = (s=='');
}

function tmt_regExpValidator(f,re,eMsg,ru,r){
	var myErr="";var fv=MM_findObj(f).value;var rex=new RegExp(unescape(re));
	var t=eval(ru+rex.test(fv));if(r){if(fv.length<=0||!t){alert(unescape(eMsg));myErr+="eMsg";}}
	else if(fv.length>0&&!t){alert(unescape(eMsg));myErr+="eMsg";}document.MM_returnValue=(myErr=="");
}

var RecaptchaOptions = {
 	theme : 'white'
};
//-->
</script>
</head>
<body vlink="#0000CC" class="BgColorMatchNav">

<!-- Navigation -->
<a name="top"></a>
<table class="navigation" border="0" cellspacing="0" cellpadding="0" width="100%">
<tr><td>

<!-- Transparent link over logo -->
<a target="_top" href="/index.htm"><img id="navlogolink" src="/nav/x.gif" height="30" width="260" border="0"></a>

<!-- Search form -->
<form id="xcf-search" target="_top" name="search" method="get" action="/search/">
  <div id="xcf-search-input">
    <input type="text" name="q" value="Search" onFocus="this.value='';" />
    <button type="submit" title="Search the Xenos site"><img src="/global/graphics/search.png" alt="Search" /></button>
	</div>
  &nbsp;&nbsp;&nbsp;&nbsp;<a target="_top" href="/news/">What's&nbsp;New?</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a target="_top" href="http://store.xenos.org/">Online&nbsp;Store</a>
</form>
<!-- /Search form -->

<!-- Main tabs -->
<table id="tabsMain" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td></td>
	<!-- Set colspan to number of tabs x 4 + number of icons - 1 -->
	<td class="tabBorder" height="1" colspan="25"><img src="/nav/x.gif" width="1" height="1"></td>
</tr>
<tr align="center">
	<td class="tabBorder" width="1"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabMainCorner1" valign="top"><img src="/nav/corner_left.gif" width="3" height="3"></td>
	<td class="tabMain1"><a target="_top" href="/aboutxenos/index.htm">About&nbsp;Xenos</a></td>
	<td class="tabMainCorner1" valign="top"><img src="/nav/corner_right.gif" width="3" height="3"></td>
	<td class="tabBorder" width="2"><img src="/nav/x.gif" width="2" height="1"></td>
	<td class="tabMainCorner2" valign="top"><img src="/nav/corner_left.gif" width="3" height="3"></td>
	<td class="tabMain2"><a target="_top" href="/homegroups/index.htm">Home&nbsp;Groups</a></td>
	<td class="tabMainCorner2" valign="top"><img src="/nav/corner_right.gif" width="3" height="3"></td>
	<td class="tabBorder" width="2"><img src="/nav/x.gif" width="2" height="1"></td>
	<td class="tabMainCorner3" valign="top"><img src="/nav/corner_left.gif" width="3" height="3"></td>
	<td class="tabMain3"><a target="_top" href="/teachings/index.htm">Bible&nbsp;Teachings</a></td>
	<td class="tabMainIcon3" valign="middle"><a target="_top" href="/teachings/index.htm"><img src="/nav/realmedia.gif" width="16" height="13" border="0"></a></td>
	<td class="tabMainCorner3" valign="top"><img src="/nav/corner_right.gif" width="3" height="3"></td>
	<td class="tabBorder" width="2"><img src="/nav/x.gif" width="2" height="1"></td>
	<td class="tabMainCorner4" valign="top"><img src="/nav/corner_left.gif" width="3" height="3"></td>
	<td class="tabMain4"><a target="_top" href="/classes/index.htm">Adult&nbsp;Classes</a></td>
	<td class="tabMainIcon4" valign="middle"><a target="_top" href="/classes/index.htm"><img src="/nav/realmedia.gif" width="16" height="13" border="0"></a></td>
	<td class="tabMainCorner4" valign="top"><img src="/nav/corner_right.gif" width="3" height="3"></td>
	<td class="tabBorder" width="2"><img src="/nav/x.gif" width="2" height="1"></td>
	<td class="tabMainCorner5" valign="top"><img src="/nav/corner_left.gif" width="3" height="3"></td>
	<td class="tabMain5"><a target="_top" href="/essays/index.htm">Books&nbsp;&amp;&nbsp;Essays</a></td>
	<td class="tabMainCorner5" valign="top"><img src="/nav/corner_right.gif" width="3" height="3"></td>
	<td class="tabBorder" width="2"><img src="/nav/x.gif" width="2" height="1"></td>
	<td class="tabMainCorner6" valign="top"><img src="/nav/corner_left.gif" width="3" height="3"></td>
	<td class="tabMain6"><a target="_top" href="/ministries/index.htm">Ministries</a></td>
	<td class="tabMainCorner6" valign="top"><img src="/nav/corner_right.gif" width="3" height="3"></td>
<!--
	<td class="tabBorder" width="2"><img src="/nav/x.gif" width="2" height="1"></td>
	<td class="tabMainCorner7" valign="top"><img src="/nav/corner_left.gif" width="3" height="3"></td>
	<td class="tabMain7"><a target="_top" href="/store/index.htm">Store</a></td>
	<td class="tabMainCorner7" valign="top"><img src="/nav/corner_right.gif" width="3" height="3"></td>
-->
	<td class="tabBorder" width="2"><img src="/nav/x.gif" width="2" height="1"></td>
	<td class="tabMainCorner8" valign="top"><img src="/nav/corner_left.gif" width="3" height="3"></td>
	<td class="tabMain8"><a target="_top" href="https://www.xenos.org/aboutxenos/donate.htm">Donate</a></td>
	<td class="tabMainCorner8" valign="top"><img src="/nav/corner_right.gif" width="3" height="3"></td>
	<td class="tabBorder" width="1"><img src="/nav/x.gif" width="1" height="1"></td>
	<td width="3"><img src="/nav/x.gif" width="3" height="1"></td>
</tr>
<tr height="1">
	<!-- Match td elements to number of tabs -->
	<!-- Set colspan to 4 if tab has an icon -->
	<td class="tabBorder"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabMainBorder1" colspan="3"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabBorder"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabMainBorder2" colspan="3"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabBorder"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabMainBorder3" colspan="4"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabBorder"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabMainBorder4" colspan="4"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabBorder"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabMainBorder5" colspan="3"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabBorder"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabMainBorder6" colspan="3"><img src="/nav/x.gif" width="1" height="1"></td>
<!--
	<td class="tabBorder"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabMainBorder7" colspan="3"><img src="/nav/x.gif" width="1" height="1"></td>
-->
	<td class="tabBorder"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabMainBorder8" colspan="3"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabBorder"><img src="/nav/x.gif" width="1" height="1"></td>
</tr>
</table>
<!-- /Main tabs -->

<!-- Sub tabs -->
<table id="tabsSub" border="0" cellpadding="0" cellspacing="0">
<tr align="center">
	<td class="tabBorder" width="1"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabSubCorner1" valign="top"><img src="/nav/corner_left.gif" width="3" height="3"></td>
	<td class="tabSub1"><a target="_top" href="/classes/core.htm">Core&nbsp;Classes</a></td>
	<td class="tabSubCorner1" valign="top"><img src="/nav/corner_right.gif" width="3" height="3"></td>
	<td class="tabBorder" width="2"><img src="/nav/x.gif" width="2" height="1"></td>
	<td class="tabSubCorner2" valign="top"><img src="/nav/corner_left.gif" width="3" height="3"></td>
	<td class="tabSub2"><a target="_top" href="/classes/leaders.htm">Classes&nbsp;for&nbsp;Leaders</a></td>
	<td class="tabSubCorner2" valign="top"><img src="/nav/corner_right.gif" width="3" height="3"></td>
	<td class="tabBorder" width="2"><img src="/nav/x.gif" width="2" height="1"></td>
	<td class="tabSubCorner3" valign="top"><img src="/nav/corner_left.gif" width="3" height="3"></td>
	<td class="tabSub3"><a target="_top" href="/classes/electives.htm">Electives</a></td>
	<td class="tabSubCorner3" valign="top"><img src="/nav/corner_right.gif" width="3" height="3"></td>
	<td class="tabBorder" width="2"><img src="/nav/x.gif" width="2" height="1"></td>
	<td class="tabSubCorner4" valign="top"><img src="/nav/corner_left.gif" width="3" height="3"></td>
	<td class="tabSub4"><a target="_top" href="/classes/social.htm">Social&nbsp;Issues</a></td>
	<td class="tabSubCorner4" valign="top"><img src="/nav/corner_right.gif" width="3" height="3"></td>
	<td class="tabBorder" width="2"><img src="/nav/x.gif" width="2" height="1"></td>
	<td class="tabSubCorner5" valign="top"><img src="/nav/corner_left.gif" width="3" height="3"></td>
	<td class="tabSub5"><a target="_top" href="/classes/masters/index.htm">MA&nbsp;Program</a></td>
	<td class="tabSubCorner5" valign="top"><img src="/nav/corner_right.gif" width="3" height="3"></td>
	<td class="tabBorder" width="2"><img src="/nav/x.gif" width="2" height="1"></td>
	<td class="tabSubCorner6" valign="top"><img src="/nav/corner_left.gif" width="3" height="3"></td>
	<td class="tabSub6"><a target="_top" href="/classes/register.php">Class&nbsp;Registration</a></td>
	<td class="tabSubCorner6" valign="top"><img src="/nav/corner_right.gif" width="3" height="3"></td>
	<td class="tabBorder" width="1"><img src="/nav/x.gif" width="1" height="1"></td>
	<td width="3"><img src="/nav/x.gif" width="3" height="1"></td>
</tr>
<tr height="1">
	<!-- Match td elements to number of tabs -->
	<!-- Set colspan to 4 if tab has an icon -->
	<td class="tabBorder"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabSubBorder1" colspan="3"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabBorder"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabSubBorder2" colspan="3"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabBorder"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabSubBorder3" colspan="3"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabBorder"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabSubBorder4" colspan="3"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabBorder"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabSubBorder5" colspan="3"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabBorder"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabSubBorder6" colspan="3"><img src="/nav/x.gif" width="1" height="1"></td>
	<td class="tabBorder"><img src="/nav/x.gif" width="1" height="1"></td>
</tr>
</table>
<!-- /Sub tabs -->

</td></tr>
</table>
<!-- /Navigation -->



<table class="BorderPage" cellpadding="10" bgcolor="#FFFFFF">
  <tr valign="top">
    <td width="744" align="left">
      <h1 align="center" class="style56"><font size="6">Xenos
        Class Registration</font><font size="6" face="Arial Narrow"><br>
      </font></h1>
      <h1 align="center" class="style69"> Spring 2nd Session Classes 2014</h1>
      <p align="center" class="style2"><span class="style27">View the current class flier:</span><span class="style21"><span class="style23"> <font size="2"><font size="2"><a href="documents/ClassFlier2014SPR2nd.pdf"><img src="graphics/pdf.gif" alt="PDF Document" width="25" height="16" border="0"></a> <a href="documents/ClassFlier2014SPR2nd.doc"><img src="graphics/msword.gif" alt="Word Document" width="16" height="16" border="0"></a></font></font></span></span> </p>
      <form action="../global/fm.php" method="post" name="form">
        <input type="hidden" name="subject" value="Xenos Class Registration">
        <input type="hidden" name="recipients" value="registrar-#-xenos.org">
        <input type="hidden" name="cc" value="webmaster-#-xenos.org">
        <input type="hidden" name="required" value="Class,realname:Your name,Address,City,State,Zip:Zip code,Phone,Email">
        <input type="hidden" name="derive_fields" value="realname=Firstname+Middle+Lastname,Address2=City+State+Zip,email=Email,FullTimeStudent=%if(FullTimeStudent;%'Yes'%;%'No'%)%,TA=%if(TA;%'Yes'%;%'No'%)%,imgverify=recaptcha_response_field,arverify=recaptcha_response_field">
        <input type="hidden" name="mail_options" value="PlainTemplate=class_registration_registrar.txt,TemplateMissing=">
        <input type="hidden" name="autorespond" value="Subject=Xenos Class Registration,FromAddr=registrar-#-xenos.org,PlainTemplate=class_registration_student.txt,TemplateMissing=">
        <input type="hidden" name="good_url" value="/classes/register_ok.htm">
        <input type="hidden" name="bad_url" value="/global/fmbadhandler.php">
        <input type="hidden" name="bad_template" value="error.htm">
        <input type="hidden" name="this_form" value="http://www.xenos.org/classes/register.php">
        <table border="1" cellpadding="5" align="center">
          <tr>
            <td>
              <p align="left" style="margin-bottom: 0"><span class="style48">Class Registration Form</span><font size="2"><font size="2"><br>
              </font></font></p>
              <p align="left"><font size="2"><strong> </strong>
                </font><font face="Arial Narrow" size="2"><b>
                <select name="Class" size="1">
                  <option value="">- - - Select Class - - -</option>
                  <optgroup label="Core Classes">
                    <option value="Introduction to the bible; meets weekly WED 5/14 - 6/11, from 7 - 9pm">Introduction to the bible; meets weekly WED 5/14 - 6/11, from 7 - 9pm</option>
                  </optgroup>
                  <optgroup label="Electives">
                    <option value="Body Image for Women; CLASS IS FULL- CHOOSE THIS ITEM TO BE ADDED TO A WAITING LIST">Body Image for Women; CLASS IS FULL- CHOOSE THIS ITEM TO BE ADDED TO A WAITING LIST</option>
                    <option value="Marriage Readiness; meets weekly WED 5/14 - 6/11, from 7 - 10pm">Marriage Readiness; meets weekly WED 5/14 - 6/11, from 7 - 10pm</option>
                    <option value="James; meets weekly WED 5/21 - 6/11, from 7 - 9pm">James; meets weekly WED 5/21 - 6/11, from 7 - 9pm</option>
                    <option value="Marriage for Singles; meets weekly SAT 5/31 - 6/14, from 10am - 12pm">Marriage for Singles; meets weekly SAT 5/31 - 6/14, from 10am - 12pm</option>
                  </optgroup>
                </select>
                <br>
              <span class="style21">Please read the <a href="#ClassDescriptions">class description</a> to ensure you meet any prerequisites for the class you have chosen.</span>                </b></font></p>
              <table border="0">
                <tr>
                  <td align="right"><font face="Arial Narrow" size="2"><b>First&nbsp;name:
                  </b></font></td>
                  <td align="left"><font face="Arial Narrow" size="2"><b>
                    <input name="Firstname" type="text" size="20">
                  </b></font></td>
                  <td align="right"><font face="Arial Narrow" size="2"><b> </b></font><font face="Arial Narrow" size="2"><b>Middle&nbsp;initial:&nbsp;</b></font></td>
                  <td align="left"><font face="Arial Narrow" size="2"><b>
                    <input type="text" size="3" name="Middle">
                  </b></font></td>
                  <td align="right"><font face="Arial Narrow" size="2"><b>Last&nbsp;name:
                  </b></font></td>
                  <td align="left"><font face="Arial Narrow" size="2"><b>
                    <input name="Lastname" type="text" size="20">
                  </b></font></td>
                </tr>
                <tr>
                  <td align="right"><font face="Arial Narrow" size="2"><b>Street&nbsp;Address:
                  </b></font></td>
                  <td align="left" colspan="4"><font face="Arial Narrow" size="2"><b>
                    <input type="text" size="50" name="Address">
                  </b></font></td>
                  <td align="left"><font face="Arial Narrow" size="2"><b>(include maiden name if recently married)</b></font></td>
                </tr>
                <tr>
                  <td align="right"><font face="Arial Narrow" size="2"><b>City:
                  </b></font></td>
                  <td align="left"><font face="Arial Narrow" size="2"><b>
                    <input type="text" size="20" name="City">
                  </b></font></td>
                  <td align="right"><font face="Arial Narrow" size="2"><b>State:&nbsp;
                  </b></font></td>
                  <td align="left"><font face="Arial Narrow" size="2"><b>
                    <input name="State" type="text" onBlur="tmt_regExpValidator('$State$','^[Oo][Hi]([Ii][Oo])?$','Please note that our classes are offered only in Columbus OH.','','1');return document.MM_returnValue" value="OH" size="3">
                  </b></font></td>
                  <td align="right"><font face="Arial Narrow" size="2"><b> Zip:
                  </b></font></td>
                  <td align="left"><font face="Arial Narrow" size="2"><b>
                    <input name="Zip" type="text" onBlur="tmt_regExpValidator('$Zip$','(^$)|(^43)','Please note that our classes are offered only in Columbus OH.','','');return document.MM_returnValue" size="8">
                  </b></font></td>
                </tr>
                <tr>
                  <td align="right"><font face="Arial Narrow" size="2"><b>Phone:
                  </b></font></td>
                  <td align="left"><font face="Arial Narrow" size="2"><b>
                    <input name="Phone" type="text" size="20">
                  </b></font></td>
                  <td align="right"><font face="Arial Narrow" size="2"><b>Email&nbsp;Address:</b>&nbsp;</font></td>
                  <td align="left" colspan="2"><font face="Arial Narrow" size="2"><b>
                    <input name="Email" type="text" size="28">
                  </b></font></td>
                  <td align="left"><font face="Arial Narrow" size="2">&nbsp;</font>                    </td>
                </tr>
                <tr>
                  <td align="right"><font face="Arial Narrow" size="2"><b>Home Group:</b></font></td>
                  <td colspan="5" align="left" valign="top"><font face="Arial Narrow" size="2"><b>
                    <input name="HomeGroup" type="text" id="HomeGroup" value="" size="30">
                  </b></font></td>
                </tr>
                <tr>
                  <td align="right"><font face="Arial Narrow" size="2"><b>Comments:</b></font></td>
                  <td colspan="5" align="left" valign="top"><p><font face="Arial Narrow" size="2"><b>
                    <textarea cols="50" name="Comments"></textarea>
                  </b></font></p>
                  <p><font face="Arial Narrow" size="2"><b>For classes with childcare please indicate ages of children that will need childcare</b></font></p></td>
                </tr>
                <tr>
                  <td align="right"><font face="Arial Narrow" size="2"><strong> Important:</strong></font></td>
                  <td colspan="5" align="left"><input name="FullTimeStudent" type="checkbox" id="FullTimeStudent" value="FullTimeStudent">
<span class="style21">I am a full time student.</span><br>
<input name="TA" type="checkbox" id="TA" value="TA">
<span class="style21">I would like to be the class <a href="#TA">TA</a>. (We will email you if you are selected.)</span></td>
                </tr>
              </table>
<!--
              <div style="width:65%">
                <img align="right" src="../global/verifyimg.php" alt="Image verification" name="vimg">
                <p class="style21">Please enter the characters from the image on the right:
                <input type="text" size="12" name="imgverify">
                </p>
              </div>
-->
			  <br>
			  <script type="text/javascript" src="http://www.google.com/recaptcha/api/challenge?k=6LdGrcASAAAAACCCDyuqqptCznCF29c0OmgeGNwh"></script>

	<noscript>
  		<iframe src="http://www.google.com/recaptcha/api/noscript?k=6LdGrcASAAAAACCCDyuqqptCznCF29c0OmgeGNwh" height="300" width="500" frameborder="0"></iframe><br/>
  		<textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
  		<input type="hidden" name="recaptcha_response_field" value="manual_challenge"/>
	</noscript>              <div align="left">
                <p><font face="Arial Narrow">                  <input name="B1"
      type="submit" onClick="YY_checkform('form1','$Class$','#q','1','No class is selected','$Firstname$','#q','0','First name is required','$Lastname$','#q','0','Last name is required','$Address$','#q','0','Street Address is required','$City$','#q','0','City is required','$State$','#q','0','State is required','$Zip$','#q','0','Zip code is required','$Email$','S','2','Email address is invalid');return document.MM_returnValue" value="Submit">
                  &nbsp;
                  <input type="reset" name="B2"
      value="Clear">
                </font></p>
                <p><span class="style23"><span class="style21">You will receive an email with all the class details a few days before class starts.</span><br>
                NOTE: </span><span class="style21">Some classes may already be full. Other classes may have prerequisites (read the <a href="#ClassDescriptions">class descriptions</a> below for more information). If you cannot be enrolled, you will be notified by the registrar within a week.  </span></p>
              </div>
              <p class="style21"><strong>Where will my class meet?</strong> Xenos classes meet at our main campus (1390 Community Park Drive) and at our office (1340 Community Park Drive). If noted, some classes will meet at the 4th Street Pavilion (1934 N. Fourth Street). (All in Columbus, Ohio.) <a href="#Map">Map</a> </p>
            <p class="style21"><strong>How do I pay?</strong> Students pay tuition on the first night of class - please bring exact change: cash or check.</p></td>
          </tr>
        </table>
      </form>
      <p><span class="style27"><a name="ClassDescriptions"></a></span><strong><span class="style63">Xenos Class Descriptions</span></strong></p>
<!--
<p><strong>A Really Great Commission: Crossing the Class and Racial Barrier in Our Outreach and Discipleship </strong>(1 session)<strong></strong><br>
  The great commission has given the church a great purpose statement. Unfortunately, top evangelical thinkers today have often fallen short when interpreting and applying this important text. Properly understood and applied, this passage will lead us to cross the class and racial barriers and transform the church in our discipleship. </p>
      <ul>
        <li>Instructor: Jim Swearingen </li>
        <li>$10 for adults or $5 for students </li>
      </ul>
      <p><strong>Adopting Children: Sharing God's Love </strong>(1 session)<strong></strong><br>
        This  workshop for persons interested in adoption examines the adoption process as well as what God says about adoption. Parents who have adopted both domestically and internationally will discuss their experiences and answer questions. A ministry of Xenos Christian Fellowship, this workshop is open to persons in the fellowship and the public.</p>
      <ul>
        <li>Instructor: Retta Hurlbert, with Everett &amp; Kirsten Bradley </li>
        <li>$30 / couple</li>
      </ul>
      <p><strong>Amos</strong>(5 sessions)<strong></strong> <br>
When Martin Luther King gave his &ldquo;I Have a Dream&rdquo; speech on the steps of the Lincoln Memorial, he quoted the prophet Amos. Why? Because Amos knew how to speak truth to Power. This five week study will explore the straight-forward message of a very unlikely messenger. Amos addresses idolatry, oppression of the poor, and what it means to truly honor God in nine short chapters packed with content. We&rsquo;ll let the text speak for itself and go through the book verse-by-verse. There will be no quizzes or tests. Weekly homework will focus on reading through Amos. This will be a great study to do with your cell group or worker team. </p>
      <ul>
        <li>Instructor: Mike Sullivan </li>
        <li>$38 for adults or $12 for students</li>
      </ul>
      <p><strong>Applied Biblical Counseling </strong>(6 sessions)<span class="style23"> register now!</span><br>
      We all desire to have stable emotions and the maturity to  love others well.&nbsp; This six-week course is designed to learn how our love  defects and immaturities block biblical loving. We will study the aspects of love,  and how our beliefs about love were developed.&nbsp;  Because of the interactive dynamic of the class, registration is limited  to leaders and workers recommended by leaders.<br>
      View the flier: <span class="style21"><a href="halfPageFlierAppliedBiblicalCounseling.pdf"><img src="graphics/pdf.gif" alt="PDF Document" width="25" height="16" border="0"></a></span>      </p>
<ul>

        <li>Instructor: Katey Downs &amp; Bryan Brookes</li>
        <li>Wednesdays, September 22 - October 27</li>
        <li>$45 for adults or $15 for students (register before 9/21)</li>
      </ul>
      // -->
<!--
            <p><strong>Christian Apologetics </strong>(6 sessions)<span class="style23"> register now!</span><br>
        Is  Faith a leap in the dark? &ndash;or Is there evidence for the Christian Faith? Can I  be a <em>Thinking Christian</em>? &ndash;or Is this  an <em>Oxymoron</em>? If you have ever  wondered about these issues, come join us. This class will cover all of the  classic evidence for the Christian Faith. Both Christians and Skeptics are  welcome to attend.<br>
      View the flier: <span class="style21"><a href="halfPageFlierApologetics.pdf"><img src="graphics/pdf.gif" alt="PDF Document" width="25" height="16" border="0"></a></span>      </p>
      <ul>
        <li>Instructor: James Rochford</li>
        <li>Every other Saturday morning, September 25 - December 4</li>
        <li>$45 for adults or $15 for  students (register before 9/24)</li>
      </ul>
      <p><strong>Christian Growth </strong>(9 sessions) <span class="style23">register now!</span><br>
        God  wants to transform your character and help you learn to love others as he has  loved you. This course will show you how God is at work in your life to guide  and empower you through the growth process. Learn to see yourself and others  through God&rsquo;s eyes and explore how deep-seated change occurs. </p>
      <ul>
        <li>Instructors: Gary DeLashmutt or Patrice McCormac </li>
        <li>Students  should be attending a Xenos Home Group</li>
        <li>Wednesday nights: September 22 - November 17 (with Gary)</li>
        <li>Saturday mornings: September 25 - November 20 (with Patrice)</li>
        <li>$67/adult or $22/student (register before 9/21 for Wed. or before 9/24 for Sat.)</li>
      </ul>
      <p><strong>Christian Leadership 1: </strong><strong>Ecclesiology 1  </strong>(6  sessions)<br>
The is the first of two courses on Ecclesiology - or what the Bible teaches about the church. Topics include the origin and mission of the church, how to create and implement structures that advance the church's mission, and areas of ministry every church should be engaged in - worship, evangelism, follow-up, and discipleship. <br>
      </p>
      <ul>
        <li>Instructor:<strong> </strong>John  Cleary<strong> </strong></li>
        <li>Every-other Wednesday night: March 31 - June 9</li>
        <li>$45  for adults or $15 for students. (register by 3/29)</li>
        <li><strong>Prerequisites:</strong> Christian Ministry 1-3. You also should be currently leading or soon to lead a  home group.</li>
      </ul>
      <p><strong>Christian Leadership 1: </strong><strong>Ecclesiology 2 </strong>(5  sessions) <span class="style23">register now!</span><br>
This second course on the church addresses several questions: What kind of people should lead the church? How much authority should they have? How should they respond to sin? Who should give money to the church and how should these funds be handled? What can we do to ensure that our ministry is built on a solid, lasting foundation? <br>
      </p>
      <ul>
        <li>Instructor:<strong> </strong>John  Cleary<strong> </strong></li>
        <li>Wednesday nights, September 22 - October 27 (skipping October 6)</li>
        <li>$38  for adults or $12 for students (register before 9/21)</li>
        <li><strong>Prerequisites:</strong> Christian Ministry 1-3. You also should be currently leading or soon to lead a  home group.      </li>
      </ul>
      <p>Christian Leadership 2 has been replaced by Effective Counseling</p>
      // --><br>
<p class="style27"><em><strong><span class="style68">Xenos Core Classes:</span></strong></em></p>
<p><strong>INTRODUCTION TO THE BIBLE<br>
  </strong><em>a 5-week class</em> with Doug Patch <br>
  Whether you&rsquo;re discovering the Bible for the first time, or eager to  rekindle your passion for Scripture, this course will help you understand,  enjoy and obey God&rsquo;s Word in ways that draw you near to Christ and transform  your life. </p>
<blockquote>
  <p><strong>Wednesdays, </strong><strong>7 &ndash; 9 p.m.&nbsp;&nbsp;&nbsp; <br>
    </strong><strong>May  14 &ndash; June 11<br>
      </strong>$38/adult or $12/student  <br>
    (Register before 5/13)  </p>
  <p>&nbsp;</p>
</blockquote>
<p class="style67">Xenos Elective Classes:</p>
<p><strong>BODY IMAGE FOR WOMEN</strong> <span class="style2"><span class="style21"><span class="style23"><font size="2"><font size="2"><a href="documents/halfPageFlierBodyImage.pdf"><img src="graphics/pdf.gif" alt="PDF Document" width="25" height="16" border="0"></a></font></font></span></span></span></p>
<p><em><strong>This class will meet @ the 4th St Pavilion: 1934 N 4th St<br>
  </strong></em><br>
  Class is now full and closed for registrations. If you'd like to be on a waiting list in case seats open up, email PhillipsK@xenos.org </p>
<blockquote>
  <p>&nbsp;</p>
  </blockquote>
<p><strong>MARRIAGE  READINESS <span class="style2"><span class="style21"><span class="style23"><font size="2"><font size="2"><a href="documents/halfPageFlierMarriageReadiness.pdf"><img src="graphics/pdf.gif" alt="PDF Document" width="25" height="16" border="0"></a></font></font></span></span></span><br>
</strong><em>a 5-week class with Bev  DeLashmutt<br>
</em>This class will discuss God's purpose for  marriage. We will lay the foundational essentials for a successful marriage and  identify the factors that hinder it. Great for engaged and newly married  couples. </p>
<p><strong>Wednesdays, 7 &ndash;  10 p.m.<br>
</strong><strong>May 14 &ndash; June 11<br>
</strong>$38/adult  | $70/adult couple <em>or</em> $12/student |  $20/student couple<br>
(register before  5/13) </p>
<blockquote>
  <p><br>
  </p>
</blockquote>
<p><strong>JAMES <span class="style2"><span class="style21"><span class="style23"><font size="2"><font size="2"><a href="documents/halfPageFlierJames.pdf"><img src="graphics/pdf.gif" alt="PDF Document" width="25" height="16" border="0"></a></font></font></span></span></span><br>
  </strong><em>a 4-week class with Patrik Matthews<br>
</em>James is an underexplored book full of deep yet practical instruction.  Themes include dealing with negative circumstances in a Godly way, authentic  vs. counterfeit spirituality, and repentance. This class has two goals: to  scrutinize the book of James in detail in order to uncover its compelling  message, and secondly to help equip people to effectively unpack a book like  James in their personal study or in discipleship. </p>
<blockquote>
  <p><strong>Wednesdays, 7 &ndash; 9 p.m.&nbsp; <br>
    </strong><strong>May 21 &ndash; June 11<br>
      </strong>$30/adult or $10/student  <br>
    (register before 5/20)</p>
  <p>&nbsp;</p>
  </blockquote>
<p><strong>MARRIAGE FOR SINGLES</strong><strong>  <span class="style2"><span class="style21"><span class="style23"><font size="2"><font size="2"><a href="documents/halfPageFlierMarriageForSingles.pdf"><img src="graphics/pdf.gif" alt="PDF Document" width="25" height="16" border="0"></a></font></font></span></span></span><br>
</strong><em>a 3-week class with Nick Hetrick  &amp; Bryan Jones<br>
</em>Do you want to get married some day, but not any day  very soon? What should you do now to make sure you have a great marriage  whenever the time comes? This three-week class is for people who are single or  dating but not yet considering marriage. Sign up if you want to develop an  exciting and realistic view of marriage, prepare yourself for a great marriage  while you're single, and have positive experiences in dating. </p>
<blockquote>
  <p><strong>Class  will be held at the 4<sup>th</sup> St. Pavilion: 1934 N 4<sup>th</sup> St. &nbsp;<br>
    </strong><strong>(in  the college auditorium)<br>
      <br>
      </strong><strong>Saturdays,  10 a.m. &ndash; 12 p.m.&nbsp; </strong>
    <br>
    <strong>May  31 &ndash; June 14<br>
$    </strong>22/adult or $7/student  <br>
(register before 5/29) </p>
</blockquote>
<p>&nbsp;</p>
<p><strong><a name="TA"></a>Teachers' Assistants:</strong></p>
      <p class="HideFromPrint">Each class needs one or more TAs to assist with the class. TA tasks include attending every class, arriving 30 minutes early, taking attendance, collecting class tuition and collecting homework. In return, class tuition is waived for anyone serving as the TA. If you are interested in serving as the TA for your class, check the box in the registration form when you sign up. If the TA position for your class is still open, the class registrar will contact you to provide further details and to confirm if you will be the TA. </p>
      <hr>
      <h2><font face="Arial Narrow" size="3"><b><a name="Map">Map to Xenos Christian
              Fellowship</a><br>
        </b></font><img src="../graphics/mainmap.gif" width="432" height="263"><br>
      </h2>

<!-- Footer -->
<br clear="all" />
<div style="float: left; margin-bottom: 1em;">
<!-- Social Media Links -->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher:"bfaef196-d057-4a8c-911b-995ba7aca79a", onhover:false});</script>
<div class="social-media-links">
  <span class="st_facebook_hcount" displayText="Facebook"></span>
  <span class="st_twitter_hcount" displayText="Tweet"></span>
  <span class="st_googleplus_hcount" displayText="+1"></span>
  <span class="st_email_hcount" displayText="Email"></span>
</div>
<!-- /Social Media Links -->

</div>
<br clear="all" />
<div id="footer" class="footer" align="center">
  <p>1340 Community Park Dr., Columbus OH 43229 &nbsp;(614)&nbsp;823-6500<br />
	Send questions or feedback to <a href="mailto:webmaster@xenos.org">webmaster@xenos.org</a></p>
  <p><font size="2">&copy;2012 Xenos Christian Fellowship </font>
    <em><font size="1">(See our <a href="/copyright.htm" target="_top">usage guidelines</a>.)</font></em></p>
</div>

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

<!-- /Footer -->

	</td>
  </tr>
  <tr valign="top">
    <td align="left">&nbsp;</td>
  </tr>
</table>
</body>
</html>
