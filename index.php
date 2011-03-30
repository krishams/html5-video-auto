<html>
<head>

</head>

<body>
<?php
$dir = "videos";

// Open a known directory, and proceed to read its contents
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            
            echo "<video src='videos/$file' controls='controls' controls='fullscreen'>";
			echo "your browser does not support the video tag";
			echo "</video>";
			echo "he";
            
            echo "filename: $file : filetype: " . filetype($dir . $file) . "\n" . "</br>";
            
        }
        closedir($dh);
    }
}
?>
</body>
</html>