<?php
echo move_uploaded_file(
  $_FILES["upfile"]["tmp_name"], 
  "temp.txt"
) ? "OK" : "ERROR UPLOADING";




$Content = file_get_contents('http://testmedia.local/wp-content/themes/test_media/assets/temp.txt');



file_put_contents('subscribers.txt',"$Content\n",FILE_APPEND); 



