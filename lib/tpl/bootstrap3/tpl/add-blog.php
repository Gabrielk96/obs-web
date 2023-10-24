
<?php
$fileName = date('Ymd');
$filePath = '/var/www/obs-web.rs.umbc.edu/data/pages/blog/';
$filePath .= $fileName . '.txt';

if(!file_exists($filePath)){
	$file = fopen($filePath, 'w');
}

$template = "======" . $fileName . file_get_contents('/usr/obs/blog-template.txt');

if ($file) {
	$content = "This is the content of the file.";
       	fwrite($file, $template);
       	fclose($file);
}

echo $fileName;
?>

