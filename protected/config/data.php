<?php
$debug = false;
if(@$_SERVER["SERVER_NAME"]=="localhost"){
    $debug = true;
}
if($debug){ 
    return array(
        'title'=>'Practica 1',
        'connectionString' => 'mysql',
        'host' => 'localhost',
        'dbname' => 'riode', 
        'username' => 'root',
        'password' => '',
        'folderControladores' => 'protected/controller/',
        'folderModelos' => 'protected/model/', 
        'folderVistas' => 'protected/views/',
        'pathSite' => 'http://'.$_SERVER["SERVER_NAME"].'/portafolio/',
        'pathCMSSite' => 'http://'.$_SERVER["SERVER_NAME"].'/portafolio/',
        'design' => '1',
        'timezone' => 'America/Mexico_City',
        'createby' => 'Create By KMRww',
        
    );
} else {
    return array(
        'title'=>'KMRWW',
        'connectionString' => 'mysql',
        'host' => 'localhost',
        'dbname' => 'dixiproj_demokmrww',
        'username' => 'dixiproj_userdemokmr',
        'password' => '4&N2J**G+_m%',
        'folderControladores' => 'protected/controller/',
        'folderModelos' => 'protected/model/',
        'folderVistas' => 'protected/views/',
        'pathSite' =>    'https://admin.kmrww.com/',
        'pathCMSSite' => 'https://admin.kmrww.com/',
        'design' => '2',
        'timezone' => 'America/Mexico_City',
        'createby' => 'Create By KMRww',
        'API_KEY_ZOOM'=>'6KmvB5L3TiR9BkCKt5lRg',
        'API_SECRET_ZOOM'=>'EAFZAEVWtqq4fEvTI6U1ct8WOy7oDeg1',
        'gettoken_ZOOM'=>'https://admin.kmrww.com/gettoken/'
    );
}
?>