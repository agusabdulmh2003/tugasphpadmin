<?php
include_once 'top.php';
include_once 'menu.php';

$urlMappings = array(
    'dashboard' => 'dashboard.php',
    'layoutstatic' => 'layoutstatic.php',
    'layoutsidenavlight' => 'layoutsidenavlight.php',
    'tables' => 'tables.php',
    'charts' => 'charts.php',
    'collapseLayouts' => 'collapseLayouts.php',
    'pagesCollapseAuth' => 'pagesCollapseAuth.php',
    '401' => '401.php',
    '404' => '404.php',
    '500' => '500.php',
    'password' => 'password.php',
    'register' => 'register.php',
    'collapsePages' => 'collapsePages.php',
    'setting' => 'setting.php',
    'activity' => 'activity.php',
);
error_reporting(0);
$url = $_GET['url'];
if (array_key_exists($url, $urlMappings)) {
    $fileToInclude = $urlMappings[$url];
    include_once $fileToInclude;
} else {
    include_once 'dashboard.php';
}

include_once 'bottom.php';
?>
