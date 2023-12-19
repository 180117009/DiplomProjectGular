<?php
$url = 'http://5.45.121.184:7777/new.zaman-ai.kz/payment/user_id=36/parent_id=7';

// Extracting parent_id
preg_match('/parent_id=(\d+)/', $url, $matches);

if (isset($matches[1])) {
    $parent_id = $matches[1];
    echo "Parent ID: $parent_id";
} else {
    
   
echo "Parent ID not found in the URL.";
}
?>