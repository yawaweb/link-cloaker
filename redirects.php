<?php

/**
* Name of developer: Ousama Yamine
* Website: www.yawaweb.com
* Donate BTC: 1BoBFr6pYh3phS8iEs5jxxN2cihYxuMdgW
* Donate ETH: 0xf197d28c9053C4fdfef6794CD80bcbf8886caAD9
* Donate NEO: AMKM4avT1iCimjoXJVZc5TeAiXVFe8d51m
**/

$myhomepage = 'https://your-homepage.com'; //Your Startpage

$affid = htmlspecialchars($_GET["affid"]); //Do not changing

$affLinkList = array( //Insert here the links do you want mask
"affiliatelink1" => "https://www.example.com",
"affiliatelink2" => "https://www.test.com"
);

$link = array_key_exists($affid, $affLinkList) === false ? $myhomepage : $affLinkList[$affid]; //Checks if the Link exists if not then redirect to your Homepage


header("Location: $link"); //Do not changing
exit(); //Do not changing
