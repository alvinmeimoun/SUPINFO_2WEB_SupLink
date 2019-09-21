<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>VCard Editor</title>
<script type="text/javascript" src="vcard_main.js"></script>
<link rel="stylesheet" type="text/css" href="vcard_main.css">
<?php if($_COOKIE['c_logged_username'] == ''){
	header( "Location: ../index.php" );
}?>
</head>

<body>

<div id="wrapper">
<header>
	<p id="title_text">VCard Manager</p>
    
    <div id="header_buttons">
      <p id="text_username" class="header_text" style="margin-right:15px;"><?php echo($_COOKIE['c_logged_username'])?></p>
        <a href="../controller/logout.php"><p class="header_text">Logout</p></a>
    </div>
</header>
    
    <div>
         <p>First name : <input id="i_firstname" type="text" name="firstname" /></p>
         <p>Last name : <input id="i_lastname" type="text" name="lastname" /></p>
         <p>Current job : <input id="i_job" type="text" name="job" /></p>
         <p>Skills : <input id="i_skills" type="text" name="skills" /></p>
         <p><input type="submit" value="Update" onClick="generateCard()"></p>
    </div>

<div id="card_result">
	<div id="div_card_preview">
      <div style="width:500px; height:300px; border-color:#000000; border-width:2px; border-style:solid;position: relative; background-color:#D4FBFF;">
        	<p id="card_name" style="
            margin:5px; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
             font-weight:bold;
             font-size:40px;
             color:#000000;">LASTNAME Firstname</p>
             
             <p id="card_job" style="
            margin:5px; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
             font-weight:bold;
             font-size:20px;
             color:#000000;">Current job</p>
             
             <p id="card_skills" style="
            margin:5px; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
             font-size:20px;
             color:#000000;
             position: absolute; bottom: 0; left: 0;
             border: none;
             ">Skills</p>
        </div>
    </div>
    
<textarea id="text_src">Source code</textarea>
</div>

</body>
</html>