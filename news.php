<?php 
	session_start();
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>LMS - Learning Management System</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<script language="javascript" type="text/javascript" src="main.js"></script>
	<link rel="stylesheet" type="text/css" href="common.css">
	<script language="javascript" type="text/javascript" src="news.js"></script>
	<link rel="icon" type="image/png" href="pictures/favicon-16x16.png" sizes="16x16">

</head>
<body>
	<div class="background-wrap">
		<video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="muted">
		<source src="login.mp4" type="video/mp4" >
		</video>
	</div>
		<div id="maindiv">
		
		<div id="navbardiv">
		 	
		 	<div id="navspacediv1">
		 		
		 	</div>

		 	<div id="logodiv1">
		 		<center>
		 		<img id="logo1" src="pictures/logo.png">
		  		</center>
		 	</div>
		 	
		 	<div id="navtispace"></div>
		 	<div id="navtispace1"></div>
		 	
		 	<div id="navtitlediv">
		 		<center><br>Learning Management System</center>
		 	</div>

		 	<a href="home.php" id="navbuttontxt"><div id="navbutton" onmouseover="homebutton()"; onmouseout="mouseleave();">
		 		HOME
		 	</div></a><br>
		 	<a  href="about.php" id="navbuttontxt"><div id="navbutton" onmouseover="aboutbutton()"; onmouseout="mouseleave();">
		 		ABOUT US
		 	</div></a><br>
		 	<a href="service.php" id="navbuttontxt"><div id="navbutton" onmouseover="servicebutton()"; onmouseout="mouseleave();">
		 		SERVICES
		 	</div></a><br>
		 	<a href="student.php" id="navbuttontxt"><div id="navbutton" onmouseover="stubutton()"; onmouseout="mouseleave();">
		 		STUDENT AREA
		 	</div></a><br>
		 	<a href="support.php" id="navbuttontxt"><div id="navbutton" onmouseover="supportbutton()"; onmouseout="mouseleave();">
		 		SUPPORT
		 	</div></a><br><br><hr><br>
		 	<div id="navbutton1">
		 		<?php 
						          if (isset($_SESSION['username'])){
						            echo '<a href="logout.php" id="navbuttontxt1">LOGOUT</a>';

						          }else {
						            echo '<a href="index.php" id="navbuttontxt1">LOGIN</a>';
						          }

						         ?>	
		 	</div><br>
		 	<div id="navbutton2">
		 		<?php 
						          if (isset($_SESSION['username'])){
						            echo '<a href="account.php" id="navbuttontxt">ACCOUNT</a>';

						          }else {
						            echo '<a href="register.php" id="navbuttontxt">REGISTER</a>';
						          }

						         ?>	
		 	</div>
		 	

		</div>
		
		<div id="bodydiv">
				
				<div id="bodydiv1">
					<div id="bodydiv11">

					</div>
					<div id="bodydiv12">
						<div id="bodydiv111"></div>
						<div id="bodydiv112"></div>
						<div id="bodymsgdiv1">
							<a id="msgtxt"></a><br><br><a id="msgtxt1"></a>
						</div>
					</div>
					<div id="bodydiv13">
						<div id="bodydiv13a"></div>
						<div id="bodydiv13b"></div>	
						<div id="bodydiv13c">

							<?php 
						          if (isset($_SESSION['username'])){
						            echo '<img id="userimg" src="pictures/user.png">';
						          }else {
						            echo '<img id="userimg" src="pictures/guest.png">';
						          }

						         ?>
							
						</div>
						<div id="bodydiv13b"></div>
						<div id="bodydiv13d"></div>
						<div id="bodydiv13e"></div>
						<div id="bodydiv13f">
							
								
								<?php 
						          if (isset($_SESSION['username'])){
						            echo '<p id="username">'.$_SESSION['username'].'</p>';
						          }else {
						            echo '<p id="username"> GUEST </p>';
						          }

						         ?>

							
						</div>

					</div>
				</div>

				<div id="bodylinediv1"></div>

				<div id="bodydiv2">
					<div id="bodydiv21"></div><div id="bodydiv23"></div>
					<div id="bodydiva">
						<div id="bmargindiv"></div>
						<div id="bmargindiv3"></div>
						<div id="bmargindiv2">
							<a id="btitle1">IMPORTANT NEWS</a><br><br>
							<div id="bline1"></div>
							<br><br>
							<?php 
                                $conn1 = mysqli_connect("localhost","root","","lmsnews");

                                    if (!$conn1){

                                        die ("Connection Failed : ".mysqli_connect_error());

                                    }


                                        $sql1 = "SELECT newstitle FROM news WHERE newsno='1'";
                                        $result1 = mysqli_query($conn1,$sql1);

                                if(!$row = mysqli_fetch_assoc($result1)){
                                    header('Location:error.php');
                                }else {
                                    $_SESSION['newstitle1'] = $row['newstitle'];


                                }
                                if (!$conn1){

                                        die ("Connection Failed : ".mysqli_connect_error());

                                    }


                                        $sql2 = "SELECT newstitle FROM news WHERE newsno='2'";
                                        $result2 = mysqli_query($conn1,$sql2);

                                if(!$row = mysqli_fetch_assoc($result2)){
                                   
                                }else {
                                    $_SESSION['newstitle2'] = $row['newstitle'];


                                }
                                if (!$conn1){

                                        die ("Connection Failed : ".mysqli_connect_error());

                                    }


                                        $sql3 = "SELECT newstitle FROM news WHERE newsno='3'";
                                        $result3 = mysqli_query($conn1,$sql3);

                                if(!$row = mysqli_fetch_assoc($result3)){
                                   
                                }else {
                                    $_SESSION['newstitle3'] = $row['newstitle'];


                                }
                                if (!$conn1){

                                        die ("Connection Failed : ".mysqli_connect_error());

                                    }


                                        $sql4 = "SELECT newstitle FROM news WHERE newsno='4'";
                                        $result4 = mysqli_query($conn1,$sql4);

                                if(!$row = mysqli_fetch_assoc($result4)){
                                    
                                }else {
                                    $_SESSION['newstitle4'] = $row['newstitle'];


                                }
                                if (!$conn1){

                                        die ("Connection Failed : ".mysqli_connect_error());

                                    }


                                        $sql5 = "SELECT newstitle FROM news WHERE newsno='5'";
                                        $result5 = mysqli_query($conn1,$sql5);

                                if(!$row = mysqli_fetch_assoc($result5)){
                                    
                                }else {
                                    $_SESSION['newstitle5'] = $row['newstitle'];


                                }
                                    if (isset($_SESSION['username'])){
						          	echo '
                                    <a href="news1.php" id="txtcate1">
							<div id="categorydiv1" onmouseover="socbutton()"; onmouseout="mouseleaveb1();">
								<div id="categorydiv1a">| '.$_SESSION['newstitle1'].' </div>
								<div id="categorydiv1b1"></div>
							</div>
							</a>
							<div id="bspace1"></div>
							<a href="news2.php" id="txtcate1">
							<div id="categorydiv1" onmouseover="sobbutton()"; onmouseout="mouseleaveb2();">
								<div id="categorydiv1a">| '.$_SESSION['newstitle2'].' </div>
								<div id="categorydiv1b2"></div> 
							</div>
							</a>
							<div id="bspace1"></div>
							<a href="news3.php" id="txtcate1">
							<div id="categorydiv1" onmouseover="soebutton()"; onmouseout="mouseleaveb3();">
								<div id="categorydiv1a">| '.$_SESSION['newstitle3'].' </div>
								<div id="categorydiv1b3"></div>
							</div>
							</a>
							<div id="bspace1"></div>
							<a href="news4.php" id="txtcate1">
							<div id="categorydiv1" onmouseover="sofbutton()"; onmouseout="mouseleaveb4();">
								<div id="categorydiv1a">| '.$_SESSION['newstitle4'].' </div>
								<div id="categorydiv1b4"></div>
							</div>
							</a>
							<div id="bspace1"></div>
							<a href="news5.php" id="txtcate1">
							<div id="categorydiv1" onmouseover="sogbutton()"; onmouseout="mouseleaveb5();">
								<div id="categorydiv1a">| '.$_SESSION['newstitle5'].' </div>
								<div id="categorydiv1b5"></div>
							</div>
							</a>';
											          }
									
								else{

									          	echo '
												    <br><br>
													<center>
													<br><br>
													<img src="pictures/block.png"><br><br>
													<a id="username">
														YOU HAVE TO LOGIN FIRST!
													</a>
													<br><br>
													
													</center>';
								}

						    ?>	
						</div>
					</div>
				</div>

				<div id="bodydiv3">
					<div id="bodydiv31"></div>
					<div id="bodydiv32">
						<div id="bodydiv321"></div>
						<div id=navtxtmsgdiv><a id="navtxtmsg">NSBM Green University Town</a></div>
					</div>
					<div id="bodydiv331" onmouseover="backbutton()"; onmouseout="mouseleav();">
						<a id="textnavb"><</a>
					</div>
					<div id="bodydiv34"></div>
					<div id="bodydiv332" onmouseover="nextbutton()"; onmouseout="mouseleav();">
						<a href="soc1st2.php" id="textnavb">></a>
					</div>
				</div>
		</div>

</body>
</html>