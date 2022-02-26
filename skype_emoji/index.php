<?php
function emoji($name, $height, $seconds, $steps){
	
  echo "
/* skype emoji $name animated in css */
.$name {
	width: 80px;
	height: 80px;
	background: url('{$name}_anima.png');
	animation: skype_emoji_$name {$seconds}s steps($steps) infinite;
}
@keyframes skype_emoji_$name {
	from { background-position: 0px 0px; } 
	to { background-position: 0px -{$height}px; }
}
\n";

}
?>
<!DOCTYPE html>
<html>
<head>
<style>
body{ margin: 20px; background: #fff; }
<?php 
emoji("holidayspirit", "2880", "2", "36");
emoji("nerd", "3840", "2", "48"); 
emoji("movember", "8800", "3", "110"); 
emoji("cat", "9600", "4", "120"); 
?>
</style>
</head>
<body>
  <div class="holidayspirit"></div>
  <br />
  <div class="nerd"></div>
  <br />
  <div class="movember"></div>
  <br />
  <div class="cat"></div>
</body>
</html>