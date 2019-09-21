<div style="width:500px; height:300px; border-color:#000000; border-width:2px; border-style:solid;position: relative; background-color:#D4FBFF;">
        	<p id="card_name" style="
            margin:5px; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
             font-weight:bold;
             font-size:40px;
             color:#000000;"><?php echo(strtoupper($_POST['lastname'])." ".$_POST['firstname']); ?></p>
             
             <p id="card_job" style="
            margin:5px; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
             font-weight:bold;
             font-size:20px;
             color:#000000;"><?php echo($_POST['job']);?></p>
             
             <p id="card_skills" style="
            margin:5px; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
             font-size:20px;
             color:#000000;
             position: absolute; bottom: 0; left: 0;
             border: none;
             "><?php echo($_POST['skills']);?></p>
        </div>