<?php

//$files = array('404.php','archive.php','comments.php','footer.php','functions.php','header.php','index.php','LICENSE','page.php','page-archives.php','page-links.php','page-whisper.php','post.php','README.md','screenshot.png','sidebar.php','style.css');
if (isset($argv[1])) {
    if ($argv[1] == 'hash') {
$files=array('README.md','Autohash.php');
$hash = '';
foreach ($files as $file) {
    $hash.=hash('sha256', file_get_contents($file)).' '.$file."\n";
}
file_put_contents("hash.txt",$hash);
    }
}