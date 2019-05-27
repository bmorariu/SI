<?php
session_start();
if(!$_SESSION["loggedIn"])
	{
			header("Location: index.php");
	}
	system("gpio -g mode 6 out");
	system("gpio -g write 6 0");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>GPIO controller</title>
		<link rel="stylesheet" type="text/css" href="pinon.css">
	</head>
	<body>
		<div id="nr1"><img src="yellow.png" height="30px" width="30px"></div>
		<div id="nr2"><img src="red.png" height="30px" width="30px"></div>
		<div id="nr3" onclick="location.href='pinon2.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr4"><img src="red.png" height="30px" width="30px"></div>
		<div id="nr5" onclick="location.href='pinon3.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr6"><img src="black.png" height="30px" width="30px"></div>
		<div id="nr7" onclick="location.href='pinon4.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr8" onclick="location.href='pinon14.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr9"><img src="black.png" height="30px" width="30px"></div>
		<div id="nr10" onclick="location.href='pinon15.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr11" onclick="location.href='pinon17.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr12" onclick="location.href='pinon18.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr13" onclick="location.href='pinon27.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr14"><img src="black.png" height="30px" width="30px"></div>
		<div id="nr15" onclick="location.href='pinon22.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr16" onclick="location.href='pinon23.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr17"><img src="yellow.png" height="30px" width="30px"></div>
		<div id="nr18" onclick="location.href='pinon24.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr19" onclick="location.href='pinon10.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr20"><img src="black.png" height="30px" width="30px"></div>
		<div id="nr21" onclick="location.href='pinon9.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr22" onclick="location.href='pinon25.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr23" onclick="location.href='pinon11.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr24" onclick="location.href='pinon8.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr25"><img src="black.png" height="30px" width="30px"></div>
		<div id="nr26" onclick="location.href='pinon7.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr27"><img src="gray.jpg" height="30px" width="30px"></div>
		<div id="nr28"><img src="gray.jpg" height="30px" width="30px"></div>
		<div id="nr29" onclick="location.href='pinon5.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr30"><img src="black.png" height="30px" width="30px"></div>
		<div id="nr31" onclick="location.href='pinon6.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr32" onclick="location.href='pinon12.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr33" onclick="location.href='pinon13.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr34"><img src="black.png" height="30px" width="30px"></div>
		<div id="nr35" onclick="location.href='pinon19.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr36" onclick="location.href='pinon16.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr37" onclick="location.href='pinon26.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr38" onclick="location.href='pinon20.php';"><img src="green.png" height="30px" width="30px"></div>
		<div id="nr39"><img src="black.png" height="30px" width="30px"></div>
		<div id="nr40" onclick="location.href='pinon21.php';"><img src="green.png" height="30px" width="30px"></div>

		<div id="text1"><b>+3,3V</b></div>
		<div id="text3"><b>(SDA) GPIO 2</b></div>
		<div id="text5"><b>(SCL) GPIO 3</b></div>
		<div id="text7"><b>(GPCLK0) GPIO 4</b></div>
		<div id="text9"><b>GND</b></div>
		<div id="text11"><b>GPIO 17</b></div>
		<div id="text13"><b>GPIO 27</b></div>
		<div id="text15"><b>GPIO 22</b></div>
		<div id="text17"><b>+3,3V</b></div>
		<div id="text19"><b>(MOSI) GPIO 10</b></div>
		<div id="text21"><b>(MSIO) GPIO 9</b></div>
		<div id="text23"><b>(SCLK) GPIO 11</b></div>
		<div id="text25"><b>GND</b></div>
		<div id="text27"><b>ID_SD</b></div>
		<div id="text29"><b>GPIO 5</b></div>
		<div id="text31"><b>GPIO 6</b></div>
		<div id="text33"><b>GPIO 13</b></div>
		<div id="text35"><b>GPIO 19</b></div>
		<div id="text37"><b>GPIO 26</b></div>
		<div id="text39"><b>GND</b></div>
		
		<div id="text2"><b>+5V</b></div>
		<div id="text4"><b>+5V</b></div>
		<div id="text6"><b>GND</b></div>
		<div id="text8"><b>GPIO 14(TXD)</b></div>
		<div id="text10"><b>GPIO 15(RXD)</b></div>
		<div id="text12"><b>GPIO 18</b></div>
		<div id="text14"><b>GND</b></div>
		<div id="text16"><b>GPIO 23</b></div>
		<div id="text18"><b>GPIO 24</b></div>
		<div id="text20"><b>GND</b></div>
		<div id="text22"><b>GPIO 25</b></div>
		<div id="text24"><b>GPIO 8(CE0)</b></div>
		<div id="text26"><b>GPIO 7(CE1)</b></div>
		<div id="text28"><b>ID_SC</b></div>
		<div id="text30"><b>GND</b></div>
		<div id="text32"><b>GPIO 12</b></div>
		<div id="text34"><b>GND</b></div>
		<div id="text36"><b>GPIO16</b></div>
		<div id="text38"><b>GPIO20</b></div>
		<div id="text40"><b>GPIO21</b></div>
	</body>
</html>
