<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/pswd.css" />
	
	<!-- Here is where your page title must go -->
	<title>FaceMash Powered by sahil and shivam</title>
	
	<link rel="shortcut icon" HREF="images/favicon.ico" />
	
	<!-- Metadescription and MetaKeyWords are used for SEO -->
	<meta content="Metadescription" name="Insert the description of this page here" />
    <meta content="MetaKeyWords" name="Insert the keywords that descrive this page here" />
	
	<!-- JQUERY -->
	<script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>
	<!-- -END- JQUERY -->
	
	<!-- Superfish Menu -->
	<script type="text/javascript" SRC="js/superfish/hoverIntent.js"></script>
	<script type="text/javascript" SRC="js/superfish/superfish.js"></script>
	<script type="text/javascript" SRC="js/superfish/supersubs.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){ 
		
			$("ul.sf-menu").supersubs({ 
				minWidth:    12,   // minimum width of sub-menus in em units 
				maxWidth:    27,   // maximum width of sub-menus in em units 
				extraWidth:  1     // extra width can ensure lines don't sometimes turn over 
								   // due to slight rounding differences and font-family 
			}).superfish();  // call supersubs first, then superfish, so that subs are 
							 // not display:none when measuring. Call before initialising 
							 // containing tabs for same reason. 
		}); 
	</script>
	<!-- -END- Superfish Menu -->
	
	<!-- IE6 PNG Transparency Fix -->
	<script type="text/javascript" SRC="js/jquery.pngFix.pack.js"></script>
	<script type="text/javascript"> 
		$(document).ready(function(){ 
			$(document).pngFix(); 
		}); 
		
function passwordStrength(password)

{

        var desc = new Array();

        desc[0] = "Very Weak";
        desc[1] = "Weak";
        desc[2] = "Better";
        desc[3] = "Medium";
        desc[4] = "Strong";
        desc[5] = "Strongest";

        var score   = 0;

        //if password bigger than 6 give 1 point

        if (password.length > 6) score++;

        //if password has both lower and uppercase characters give 1 point      

        if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;

        //if password has at least one number give 1 point

        if (password.match(/\d+/)) score++;

        //if password has at least one special caracther give 1 point

        if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;

        //if password bigger than 12 give another 1 point

        if (password.length > 12) score++;

         document.getElementById("passwordDescription").innerHTML = desc[score];

         document.getElementById("passwordStrength").className = "strength" + score;

}
	</script>
	<!-- -END- IE6 PNG Transparency Fix -->
	
	<!-- CUFON Font Replacement -->
	<script SRC="js/cufon-yui.js" type="text/javascript"></script>
	<script SRC="js/Liberation_Sans_font.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('h1,h2,h3,h4,h5,h6');
		Cufon.replace('.logo', { color: '-linear-gradient(0.5=#FFF, 0.7=#DDD)' }); 
	</script>
	<!-- -END- CUFON Font Replacement -->
	<SCRIPT type="text/javascript">

pic1 = new Image(16, 16); 
pic1.src = "loader.gif";

$(document).ready(function(){

$("#username").change(function() { 

var usr = $("#username").val();

if(usr.length >= 4)
{
$("#status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');

    $.ajax({  
    type: "POST",  
    url: "check.php",  
    data: "username="+ usr,  
    success: function(msg){  
   
   $("#status").ajaxComplete(function(event, request, settings){ 

	if(msg == 'OK')
	{ 
        $("#username").removeClass('object_error'); // if necessary
		$("#username").addClass("object_ok");
		$(this).html('&nbsp;<img src="tick.gif" align="absmiddle">');
	}  
	else  
	{  
		$("#username").removeClass('object_ok'); // if necessary
		$("#username").addClass("object_error");
		$(this).html(msg);
	}  
   
   });

 } 
   
  }); 

}
else
	{
	$("#status").html('<font color="red">The username should have at least <strong>4</strong> characters.</font>');
	$("#username").removeClass('object_ok'); // if necessary
	$("#username").addClass("object_error");
	}

});

});

//-->
</SCRIPT>

</head>
<body>
<div id="header">
  <div class="container_12">
    <div class="grid_3">
      <h1 class="logo"> <a href="index.php">FaceMash</a> </h1>
    </div>
    <!-- end grid -->
    <div class="grid_9">
      <ul class="sf-menu">
        <li> <a href="index.php">Home</a> </li>
        <li> <a href="login.php">Login</a> </li>
        <li> <a href="register.php">Register</a>
        </li>
        <li><a href="contact.php">Contact</a></li>
        <li></li>
      </ul>
      <!-- end sf-menu -->
    </div>
    <!-- end grid -->
  </div>
  <!-- end container -->
  <div class="clear"></div>
</div>
<!-- end header -->
	
	<div id="breadcrumb">
		<div class="container_12 clearfix">
			<div class="grid_9">
				<p><a HREF="index.php">Home</a> » FaceMash - Powered by Issac Meximas </p>
				<p><?php include('session/DBConnection.php');
				/*
				$db = mysql_connect("localhost", "root", "root123") or die("Could not connect.");
				if(!$db) 
					die("no db");
				if(!mysql_select_db("a7419635_devsys2",$db))
					die("No database selected.");*/
				
										
					if (isset($_POST['register'])) { 
					if (!$_POST['id_no']|
					!$_POST['username']|
					!$_POST['password']|
					!$_POST['firstname']|
					!$_POST['lastname']|
					!$_POST['email']|
					!$_POST['address']|
					!$_POST['birthday_month']|
					!$_POST['birthday_day']|
					!$_POST['birthday_year']|
					!$_POST['gender']|
					!$_POST['course']|
					!$_POST['yr_sec']|
					!$_POST['checkbox'])
					error_reporting(E_ALL ^ E_NOTICE);{

		
		}
		/* if (!get_magic_quotes_gpc()) {
						 $_POST['username'] = addslashes($_POST['username']);
							}
						 $usercheck = $_POST['username'];
						 $check = mysql_query("SELECT * FROM members WHERE username = '$usercheck'")
						or die(mysql_error());
						 $check2 = mysql_num_rows($check);
						 if ($check2 != 0) {
						 die('Sorry, the username '.$_POST['username'].' is already in use!' . " " . 'or' .  " " .'INVALID 					username!<br />'. " " . " " .'Please try another username..' );
						}*/
		if (!get_magic_quotes_gpc()) {
						 $_POST['id_no'] = addslashes($_POST['id_no']);
							}
						 $idcheck = $_POST['id_no'];
						 $check3 = mysql_query("SELECT * FROM members WHERE id_no = '$idcheck'")
						or die(mysql_error());
						 $check4 = mysql_num_rows($check3);
						 if ($check4 != 0) {
						 die('Sorry, the ID No.  '.$_POST['id_no'].' is already in use!' . " " . 'or' .  " " .'INVALID 					ID No.!<br />'. " " . " " .'Please try again..' );
						}
	$_POST['id_no'] = ($_POST['id_no']);
 	$_POST['password'] = ($_POST['password']);
	$_POST['gender'] = ($_POST['gender']);
	$_POST['birthdate'] = ($_POST['birthday_month'] . "/" . $_POST['birthday_day']. "/" . $_POST['birthday_year'] );
	$_POST['birthday_month'] = ($_POST['birthday_month']);
	$_POST['birthday_day'] = ($_POST['birthday_day']);
	$_POST['birthday_year'] = ($_POST['birthday_year']);
	$type = "Member";
	
 	if (!get_magic_quotes_gpc()) {
 		$_POST['password'] = addslashes($_POST['password']);
 		$_POST['username'] = addslashes($_POST['username']);
 			}	
	
	/*
	$db = mysql_connect("localhost", "root", "root123") or die("Could not connect.");
				if(!$db) 
					die("no db");
				if(!mysql_select_db("a7419635_devsys2",$db))
					die("No database selected."); */
				
	
	$insert = "INSERT INTO members SET id_no='$_POST[id_no]', username='$_POST[username]', password='$_POST[password]', firstname='$_POST[firstname]', lastname='$_POST[lastname]', email='$_POST[email]', address='$_POST[address]', birthdate='$_POST[birthdate]', b_month='$_POST[birthday_month]', b_day='$_POST[birthday_day]', b_year='$_POST[birthday_year]', gender='$_POST[gender]', course='$_POST[course]', image='$_POST[image]', yr_sec='$_POST[yr_sec]', type='$type', confirmation='1'";
	
 	$add_member = mysql_query($insert);
	
header("location: note.php");
exit();
}
 ?> </p>
			</div><!-- end grid -->
			
			<!-- end grid -->
		</div><!-- end container -->
	</div>
	
	<div id="content">
		<div class="container_12 clearfix">
		<div class="right" align="right"style="margin-left: 0px; padding-left: 20px;">

		</div>
			<div class="grid_12" style="width: 350px;">
				<fieldset>
					<legend>Register</legend>

					<form id="form1" method="post" action="register.php" >
					 <input name="image" type="hidden" value="uploads/propic.jpg" />
						<h3>&nbsp;</h3>
						<p>
							<label>Captcha Test (Input Any Numbers):							<input type="text" style="width: 250px; font-weight: bold; color: #222;
text-transform: none;" name="id_no"/></label>
					  </p>
						<p>
							<label>Username:
							<input id="username" style="width: 250px; font-weight: bold; color: #222;
text-transform: none;" type="text" name="username" /><br /><span id="status"></span></label>
						</p>
						<p>
							<label>Password:
							<input style="width: 250px; font-weight: bold; color: #222;
text-transform: none;" name="password" type="password" onkeyup="passwordStrength(this.value)" /></label> 
                        <br />
                        <span id="passwordDescription"></span>
                        <span id="passwordStrength" class="strength0"></span>

						</p><br />
						<p>
							<label>Firstname:
							<input style="width: 250px; font-weight: bold; color: #222;
text-transform: capitalize;" type="text" name="firstname" /></label>
						</p>
						<p>
							<label>Lastname:
							<input style="width: 250px; font-weight: bold; color: #222;
text-transform: capitalize;"" type="text" name="lastname" /></label>
						</p>
						<p>
							<label>Email:<br />
							<input type="text" style="width: 250px; font-weight: bold; color: #222;
text-transform: none;" name="email" /></label>
						</p>
						<p>
							<label>Address:
							<input style="width: 250px; font-weight: bold; color: #222;
text-transform: capitalize;" type="text" name="address" /></label>
						</p>
						<p>
							<label>Birthdate:<br />
							  <input name="birthdate" type="hidden" size="25" />
						 <div id="bmonth"><select class="" style="width: 100px;
font-weight: normal;
color: #222;" name="birthday_month" ></div>
                         <span id="valmonth" style="display:none;">
                        <option value="-1">Month</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                      </select></span>
                      <span id="bday">
                         <select name="birthday_day" style="width: 100px;
font-weight: normal;
color: #222;" autocomplete="on"></span> <span id="valday" style="display:none;">
                           <option value="-1">Day</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                           <option value="8">8</option>
                           <option value="9">9</option>
                           <option value="10">10</option>
                           <option value="11">11</option>
                           <option value="12">12</option>
                           <option value="13">13</option>
                           <option value="14">14</option>
                           <option value="15">15</option>
                           <option value="16">16</option>
                           <option value="17">17</option>
                           <option value="18">18</option>
                           <option value="19">19</option>
                           <option value="20">20</option>
                           <option value="21">21</option>
                           <option value="22">22</option>
                           <option value="23">23</option>
                           <option value="24">24</option>
                           <option value="25">25</option>
                           <option value="26">26</option>
                           <option value="27">27</option>
                           <option value="28">28</option>
                           <option value="29">29</option>
                           <option value="30">30</option>
                           <option value="31">31</option>
                         </select></span>
                        <span id="byear"> <select name="birthday_year" style="width: 100px;
font-weight: normal;
color: #222;" autocomplete="on"></span><span id="valyear" style="display:none" >
                           <option value="-1">Year</option>
                           <option value="2011">2011</option>
                           <option value="2010">2010</option>
                           <option value="2009">2009</option>
                           <option value="2008">2008</option>
                           <option value="2007">2007</option>
                           <option value="2006">2006</option>
                           <option value="2005">2005</option>
                           <option value="2004">2004</option>
                           <option value="2003">2003</option>
                           <option value="2002">2002</option>
                           <option value="2001">2001</option>
                           <option value="2000">2000</option>
                           <option value="1999">1999</option>
                           <option value="1998">1998</option>
                           <option value="1997">1997</option>
                           <option value="1996">1996</option>
                           <option value="1995">1995</option>
                           <option value="1994">1994</option>
                           <option value="1993">1993</option>
                           <option value="1992">1992</option>
                           <option value="1991">1991</option>
                           <option value="1990">1990</option>
                           <option value="1989">1989</option>
                           <option value="1988">1988</option>
                           <option value="1987">1987</option>
                           <option value="1986">1986</option>
                           <option value="1985">1985</option>
                           <option value="1984">1984</option>
                           <option value="1983">1983</option>
                           <option value="1982">1982</option>
                           <option value="1981">1981</option>
                           <option value="1980">1980</option>
                           <option value="1979">1979</option>
                           <option value="1978">1978</option>
                           <option value="1977">1977</option>
                           <option value="1976">1976</option>
                           <option value="1975">1975</option>
                           <option value="1974">1974</option>
                           <option value="1973">1973</option>
                           <option value="1972">1972</option>
                           <option value="1971">1971</option>
                           <option value="1970">1970</option>
                         </select></span>
						</p>
						<p>
							<label>Gender:
							<select name="gender" style="width: 300px; font-weight: bold; color: #222;
text-transform: none;">
                             <option value="-1" selected="selected">Select Gender:</option>
                             <option>Male</option>
                             <option>Female</option>
                           </select></label>
						</p><p>
							<label>Country:<br />
							<select name="course" style="width: 300px; font-weight: bold; color: #222;
text-transform: none;">
                           <option value="-1" selected="selected">Select Country:</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option>Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bonaire">Bonaire</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Canary Islands">Canary Islands</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Channel Islands">Channel Islands</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos Island">Cocos Island</option>
                <option value="Columbia">Columbia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curacao">Curacao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands">Falkland Islands</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Ter">French Southern Ter</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Great Britain">Great Britain</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea North">Korea North</option>
                <option value="Korea South">Korea South</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Laos">Laos</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Malawi">Malawi</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Midway Islands">Midway Islands</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Nambia">Nambia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherland Antilles">Netherland Antilles</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Nevis">Nevis</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau Island">Palau Island</option>
                <option value="Palestine">Palestine</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn Island">Pitcairn Island</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="St Barthelemy">St Barthelemy</option>
                <option value="St Eustatius">St Eustatius</option>
                <option value="St Helena">St Helena</option>
                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                <option value="St Lucia">St Lucia</option>
                <option value="St Maarten">St Maarten</option>
                <option value="St Pierre and Miquelon">St Pierre and Miquelon</option>
                <option value="St Vincent and Grenadines">St Vincent and Grenadines</option>
                <option value="Saipan">Saipan</option>
                <option value="Samoa">Samoa</option>
                <option value="Samoa American">Samoa American</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Tahiti">Tahiti</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Is">Turks and Caicos Is</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States of America">United States of America</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City State">Vatican City State</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Virgin Islands (Brit)">Virgin Islands Brit</option>
                <option value="Virgin Islands (USA)">Virgin Islands USA</option>
                <option value="Wake Island">Wake Island</option>
                <option value="Wallis and Futana Is">Wallis and Futana Is</option>
                <option value="Yemen">Yemen</option>
                <option value="Zaire">Zaire</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
                         </select></label>
						</p>
                        <p>
							<label>What's on your mind right now??
							<input style="width: 300px; font-weight: bold; color: #222;
text-transform: uppercase;"" type="text" name="yr_sec" /></label>
						</p>
							<br />							
						<p><input type="checkbox" name="checkbox" id="check" />
                                 <a href="termsofuse.php">Terms of Use</a><br /><br />
							<input class="button" value="Sign Up!" type="submit" name="register" />
							<input class="button" value="Clear" type="reset" name="reset" />
						</p>

					</form>

				</fieldset>

				
		  </div>
			<!-- end grid -->
			
		</div><!-- end container -->
	</div><!-- end content -->
	<!-- end footer -->
	<div id="sub_footer">
      <div class="container_12 clearfix">
        <div class="grid_12"> <a class="logo left" href="#"></a>
          <p><small>Copyright &copy;&nbsp;FaceMash - Powered by Sahil and Shivam All rights reserved. | <a href="copyright.php">Copyright</a> | <a href="terms.php">Terms and Conditions</a> | <a href="privacy.php">Privacy Policy</a> | <a class="current" href="about.php">About Us</a></small></p>
        </div>
        <!-- end grid -->
      </div>
	  <!-- end container -->
    </div>
	<!-- end subfooter -->
	
	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
	
	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
</html>
<?php ob_flush(); ?>