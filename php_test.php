<?php

include 'IP.class.php';

foreach(array('8.8.8.8','8.8.4.4',
'202.106.195.68','123.118.91.246',
'202.115.128.64','110.106.46.151','11.106.46.151','20.106.46.151',
'1.106.46.151','99.106.46.151','10.106.46.151'
) as $ip){
    $a = IP::find($ip);
     echo "\"$ip\": \"$a[0]".'\t'.$a[1].'\t'.$a[2]."\",\n";
}