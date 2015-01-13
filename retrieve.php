<html>
<head>
<link rel='stylesheet' type='text/css' href='css/style.php' />
<?php
$size= $_REQUEST['text-size'];
$text = $_REQUEST['text'];
$text_font= $_REQUEST['text-font'];
$text_color= $_REQUEST['text-color'];

$letter_spacing= $_REQUEST['letter-spacing'];
$word_spacing = $_REQUEST['word-spacing'];
$shadow_color= $_REQUEST['stroke-width'];
$stroke_color=$_REQUEST['stroke-color'];



?>
<style>

body {
position: fixed; 
height: 100%;
width: 100%; 
margin: 0; 
padding: 0;
box-sizing: border-box;
border: 7px solid #5CAFA5;
}

.text {
color: <?php echo $text_color;?>;
font-family:<?php echo $text_font;?>;
font-size:<?php echo $size;?>;

text-align: center;
-webkit-text-stroke-color: <?php echo $stroke_color?>;
-webkit-text-stroke-width: <?php echo $shadow_color;?>;
letter-spacing: <?php echo $letter_spacing;?>;
word-spacing: <?php echo $word_spacing;?>;
}

</style>
</head>
<body>

<h2>
<?php print ("<p class='text'>$text</p>") ?>

</h2>
</body>
</html>