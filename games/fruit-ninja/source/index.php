<?php
require_once '../../../php/link.php';

// Check if user exists or not & create data for user if not
// 
// if($user_status) {

//     $getUser = "SELECT * FROM fruit_ninja WHERE user_id = '".mysqli_real_escape_string($link_fruitNinja, $account)."' LIMIT 1";
//     $resultUser = mysqli_query($link_fruitNinja, $getUser);
//     $isNewUser=0;
//     if(mysqli_num_rows($resultUser) > 0) {
//         $user = mysqli_fetch_assoc($resultUser);
//         $isNewUser = 0;
//     } else {
//         $isNewUser = 1;
//         $insertUser = "INSERT INTO fruit_ninja (`user_id`, `level`, `coins`, `highScore`) 
//                         VALUES('".mysqli_real_escape_string($link_fruitNinja, $account)."',
//                                 '".mysqli_real_escape_string($link_fruitNinja, "1")."',
//                                 '".mysqli_real_escape_string($link_fruitNinja, "0")."',
//                                 '".mysqli_real_escape_string($link_fruitNinja, "0")."')";
//         mysqli_query($link_fruitNinja, $insertUser);
//     }
//     if($isNewUser == 0) {
//         $coins = $user['coins'];
//         $highScore = $user['highScore'];
//     } else {
//         $coins = 0;
//         $highScore =0;
//     }

// }

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="A simple HTML5 Template">
<meta name="author" content="dron">
<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="shortcut icon" href="/favicon.ico">
<link rel="stylesheet" href="images/index.css">
<title>Gaming Galaxy - Fruit Ninja</title>
<!--[if lt IE 9]><script>document.createElement("canvas");</script><![endif]-->
</head>
<body>
<div id="extra"></div>
<div id="desc">
	<!-- <div>code-projects<a href="http://www.code-projects.org" target="_blank"></a></div> -->
	<div id="browser"></div>
</div>

<script src="scripts/all.js"></script>
<script src="../../../js/jquery-3.4.1.min.js"></script>
</body>
</html>