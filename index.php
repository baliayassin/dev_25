<?php
include('server.php'); // Includes Login Script?>



<!DOCTYPE html>
<html>
<head>
	<title>BZ Gambling</title>
	<link rel="stylesheet" href="includes/style.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="includes/main.js" async></script>
	
	<meta charset="UTF-8">
</head>

<body>
<header>
<a id="logo"> </a>
<div hidden id="logedIn">
		<button type="submit" name="connect" >התנתק </button>
		<h4> מוהנד עיסא </h4>
		<h4> 32,395$ </h4>		
        <div><h4 id="circle"> 19 </h4></div>

</div>


<div id="loghide">
<button type="submit" name="connect" onclick="hiddiv()" >התחבר </button>
<input  name="password" type="text" placeholder="סיסמא" ></input>
<input name="username" type="text" placeholder="שם משתמש"></input>
<h4 class="h4color">הרשם עכשיו</h4>
<span>|</span>
<h4 >?שכחת סיסמא</h4>
</div>

<section id="hamburger">
		
			   <input type="checkbox" />

  
			   <span></span>
			   <span></span>
			   <span></span>

		
			   <ul id="hamburger_menu">
				   <li>
					   <a id="logo" href="index.html">

					   </a>
				   </li>
				   <li>
					   <a href="#">איסקו</a>
				   </li>
				   <li>
					   <a href="#">באליא</a>
				   </li>
				   <li>
					   <a href="#">רונאלדו</a>
				   </li>
				   <li>
					   <a href="#">זיאד</a>
				   </li>
				   <li>
					   <a href="#">ראמוס</a>
				   </li>
			   </ul>
		   </section>

<nav>
	 <ul>
	<li> <a href="#">המלצות </a></li> 
	<li> <a href="#">כל המשחקים </a></li>
	<li> <a href="#">דף התוצאות </a></li>
	<li> <a href="#">מידע שימושי</a></li>
	<li> <a href="#">הפרופיל שלי </a></li>
    </ul>
 </nav>
 </header>
<div id=container>
<div id="wrapper">
<aside class="leftAside">
<div id="search">
<form method="GET" action="#"> 
	<input type="text" name="srh" value="" placeholder="חפש" >
	<input type="submit" name="search" value="חיפוש" >
</form>
</div>
<div class="myGames">
	<div>
		<h2>הטופס שלי</h2>
	</div>
	<div >
		<h3>שלום אורח</h3>
		<p> טופס המשחקים שלך ריק</p>
		<p>!התחל לשחק</p>
	</div>
</div>
<div class="groupNumber1">
<div> <h3> הקבוצה הכי חזקה </h3> </div>
<div class="mohnd">
	<div><img src="images/mohnd.png" title="מוהנד עיסא" ></div>
	<div><h4>איסקו</h4></div>
</div>
<div class="games">
	<div><img src="images/game1.png" title="game1"></div>
	<div><img src="images/game2.png" title="game2"></div>
	<div><img src="images/game3.png" title="game3"></div>
</div>
<div class="info">
	<h5>שם הקבוצה - איסקו </h5>
	<h5>סכום השתתפות - 50$</h5>
	<h5>כמות משתתפים - 30</h5>
	<h5>סכום זכייה צפויה - 67,579$</h5>
<div> <button value="join" name="join">הצטרף לקבוצה</button> </div>
</div>
</div>
</aside>

<main>
	 <img src="images/pic.png">
	<div id="allGames">
		<div>
			<h5>משחקיים מרכזיים</h5>
		</div>
		<div> <h6>יום ב' &nbsp;|&nbsp; 12.02</h6> </div>
		</div>
		<nav hidden class="likeFooter">
			<a href="#">
				<div> <h4> המלצות </h4> </div> </a>
			<a href="#"><div> 
					<img src="images/sminu.png">	
				<h4> כל המשחקים </h4> </div></a>
			<a href="#"><div> <h4> דף תוצאות </h4> </div></a>
			<a href="#"><div>
					<img src="images/infoo.png">	
					<h4> מידע שימושי </h4> </div></a>
			<a href="#"><div>
				<div id="gamesCounter"></div>
				<h4> לטופס שלי </h4> </div></a>
			
		</nav>
	 </main>

<aside class="rightAside">



<div id="openedGroups">
קבוצות פתוחות
</div>
<div id="table">
<table>
 
 <thead>
    <tr>
	    <th>סכום זכייה</th> 
        <th>שם הקבוצה</th>
        
	</tr>
 </thead>
 <tbody>
    
 <?php   while($row = mysqli_fetch_assoc($results)) { ?>
      <tr>
	    <td><?php echo $row['total']; ?></td>
        <td><?php echo $row['groupname']; ?></td>
        
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</aside>
</div>
</div>
</body>
</html>
