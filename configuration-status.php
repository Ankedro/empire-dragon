<?php
//ini_set("display_errors", 1);
//ini_set("track_errors", 1);
//ini_set("html_errors", 1);
//error_reporting(E_ALL);
//The following script is tested only with servers running on Minecraft 1.7.
$SERVER_Name = "Majkrafci.pl"; // Server name
$SERVER_Type = "Hub"; // Server type
$SERVER_IP = "mc.majkrafci.pl"; //Insert the IP of the server you want to query.
$SERVER_PORT = "25565"; //Insert the PORT of the server you want to ping. Needed to get the favicon, motd, players online and players max. etc
$QUERY_PORT = "25565"; //Port of query.port="" in your server.properties. Needed for the playerlist! Can be the same like the port or different. Query must be enabled in your server.properties file!
$HEADS = "normal"; //"normal" / "3D"
$show_max = "15"; // how much playerheads should we display? "unlimited" / "10" / "53"/ ...
$SHOW_FAVICON = "on"; //"off" / "on"
$TITLE_BLOCK_TWO = "Players";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$ping = json_decode(file_get_contents('http://api.minetools.eu/ping/' . $SERVER_IP . '/' . $SERVER_PORT . ''), true);
$query = json_decode(file_get_contents('http://api.minetools.eu/query/' . $SERVER_IP . '/' . $QUERY_PORT . ''), true);
//Put the collected player information into an array for later use.
if(empty($ping['error'])) {
$version = $ping['version']['name'];
$online = $ping['players']['online'];
$max = $ping['players']['max'];
$motd = $ping['description'];
$favicon = $ping['favicon'];
}
if(empty($query['error'])) {
$playerlist = $query['Playerlist'];
}
?>
<!-- Server status by https://github.com/FunnyItsElmo/PHP-Minecraft-Server-Status-Query/ -->