<?php

declare(strict_types=1);


$cfg['blowfish_secret'] = 'uhweiufthweiufhdjfbrsjfSSSvbfdjm';
    
$i = 0;

$i++;
    
$cfg['Servers'][$i]['auth_type'] = 'cookie';
/* Server parameters */
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;


$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
$cfg['TempDir'] = '/tmp';
