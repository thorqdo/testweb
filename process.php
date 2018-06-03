<?php

if(isset($_POST['btnlogin'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	$link = mysqli_connect("localhost", "root","", "clache");
	
	
	//query
	$result = mysqli_query($link,"select * from taikhoan INNER JOIN dscl ON taikhoan.tkid = dscl.tkid where username = '$myusername' and password = '$mypassword'");
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		if($row['username'] == $myusername && $row['password'] == $mypassword){
			session_start();
			$_SESSION['username'] = $username;
			$name = $row[hoten];
			$ms = $row[username];
			header('location: welcome.php');
		}else{
			echo "Wrong Username or Password";
			echo "<a href=index.html style='font-size:50px'>Try Again</a>";
	
	} 
}
?>
<!-- 
	
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Clache</title>
	
	<link href="static/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="static/css/background.css" type="text/css" rel="stylesheet">
	<style type="text/css" rel="stylesheet">
	.box-light{
	   background-color: white;
	   width: 100%;
	   max-width: 90%;
	   text-align: center;
	   padding_bottom:1px;
	   padding: 15px;
	}
	table{
	   
        width: 100%;
        background-color: #22262d;
        
        
	}
	</style>
	
	</head>
	<body class="text-center " style="height:2400px; width: 100%; color:white">
	<?php
	//get value from form
	// $myusername = $_POST['username'];
	// $mypassword = $_POST['password'];
	
	// $myusername = stripslashes($myusername);
	// $mypassword = stripslashes($mypassword);
	//$myusername = mysql_real_escape_string($myusername);
	//$mypassword = mysql_real_escape_string($mypassword);
	
	//connect to db and select
	// $link = mysqli_connect("localhost", "root","", "clache");
	
	
	//query
	// $result = mysqli_query($link,"select * from taikhoan INNER JOIN dscl ON taikhoan.tkid = dscl.tkid where username = '$myusername' and password = '$mypassword'");
	// if (mysqli_connect_errno())
	// 	{
	// 		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	// 	}
	// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	// if($row['username'] == $myusername && $row['password'] == $mypassword){
	// 	$ten = $row['hoten'];
	// 	echo $ten;
	// 	$dn = $row['username'];
	// 	if(strpos($dn,'admin') !==false){
	// 		echo "failed";
			
		
	// 	}
	// 	else{
		    
	// 	  echo "ok";
		   
		   
			
	// 	}
	
	
	// }else{
	// 	echo"Failed to login";
	// }
	

	?>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">CLACHE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Add New Class</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="index.html">Log In</a>
          </li>
			<a class="nav-item nav-link" href="#" style="margin: auto">Log Out</a>
        </ul>
        
      </div>
    </nav>
    <main>
    <div class ="bgimg opacity-min display-container" >
    <div class="wrapper" style="margin-top: 5px">
    <div class="container">
    	// <h1 style="color: black"><?php echo $ten ?></h1>
    	// <h2 style="color:black">Your Employee number: <?php echo $row['username']?></h2>
    	
    </div>
	<div class="container box-light">
	<div class="table table-hover">
	<h2 style="color:#22262d;" >Your Classes!</h2>
	<?php 
// 	$sql = mysqli_query($link,"SELECT * FROM a, hocphan WHERE a.mahp = hocphan.mahp and '$row[tkid]' = a.tkid " );
// 	if (mysqli_connect_errno())
// 	{echo "fail to connect" . mysqli_connect_error();}
	
// 	echo "<TABLE BORDER=1>";
// 	echo "<TR><TH> Class </TH> <TH> Subject </TH>
// <TH> Semester </TH> <TH> Year </TH><TD></TD><TD></TD> </TR>";
	
// 	while(($kq = mysqli_fetch_array($sql,MYSQLI_ASSOC))){
// 	    echo "<TR>";
// 	    echo "<TD> " . $kq["sttdss"] . " </TD>";
// 	    echo "<TD> " . $kq["tenhp"] . " </TD>";
// 	    echo "<TD> " . $kq["ses"] . " </TD>";
// 	    echo "<TD> <p>" . $kq["namhoc"] . "</p></TD>";
// 	    echo "<TD> <a href='webcam/'>Start</a></TD>"; 
// 	    echo "<TD> <a href='classinfo.php?id=".$kq['tkid']."&st=".$kq['sttdss']."&thp=".$kq['tenhp']."&hk=".$kq['ses']."&y=".$kq['namhoc']."'>Info</a></TD>";
// 	    echo "</TR></a>";
// 	}
	
	?>
	</div>
	</div>
    </div>
    </div>

		</main>
	</body>
</html>
 -->