<?php 
$c=1;
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/student_data/style/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
	  background-color: #007bff;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
* {
  box-sizing: border-box;
}

.bg-text {
  background-color: #fff;
  color: #000;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
</style>


	<script>
		function dis(no)
		{
			document.getElementById("demo").innerHTML = "Enter Subjects";
			for(var i=1 ;i<=no ; i++)
			{		
					var n=document.createElement("input");
					n.setAttribute("type","text");
					n.setAttribute("placeholder","Subject "+i+" Name");
					n.setAttribute("name","subject"+i);
					n.setAttribute("class","form-control mt-3");
					document.getElementById("text_field").appendChild(n);			
			}
			var btn=document.createElement("input");
			btn.setAttribute("type","submit");
			btn.setAttribute("class","btn btn-primary mt-3");
			document.getElementById("text_field").appendChild(btn);			
		}
	</script>
</head>
	<body>
<div class="container">
    
		<form class="bg-text" name="myform" id="text_field" method="post" action="system_sem_databases_create.php">
			<h1> testing app </h1>
			<h2> Enter Semester Data </h2>
			
			Year <input class="form-control" type="number" name="year" required placeholder="20--"/><br>
			Semister Name <input class="form-control" type="text" name="sem" required placeholder="SEM"/><br>
			Number of Subject <input class="form-control" type="number" required name="subject_no" placeholder="5"/><br>
			
			<input class="btn btn-primary" type="button" value="NEXT" name="sub" onclick="dis(subject_no.value)"/>
			<h4 id="demo"></h4>
			<!--<div id="text_field"></div>
			 <input type="hidden" value="<?php print($_GET['subject_no']); ?>" name="count" /> -->
			<!--<input class="btn btn-primary" type="submit" name="submit"/>-->
		</form>
		</div>
	</body>
</html>
