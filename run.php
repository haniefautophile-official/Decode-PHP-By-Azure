<?php
# Decode PHP Encode v1.0 by zeura.com
# Author : namdevel

function decode($file)
{
    $f = substr($file, 655 + 236, 40);
    $s = explode($f, $file);
    return gzinflate(base64_decode($s[1]));
}

$file   = file_get_contents('file_encoded.php'); // Encoded PHP File
$decode = decode($file);
file_put_contents("file_decoded.php", "<?php\n" . $decode); // Write output file_decoded.php
print $decode; // Display decode output
