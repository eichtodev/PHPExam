<?php

$Name = $_POST['Name'];
$Birthday = $_POST['Birthday'];

$dataXML = "data/data.xml";

$XML = simplexml_load_file($dataXML);

$Community = $XML->community;

$MemberNode = $Community->addChild('member');
$NameNode = $MemberNode->addChild('name', $Name);
$BirthdayNode = $MemberNode->addChild('birthday', $Birthday);

if ($XML->asXML($dataXML)) {
	echo "ok";
} else {
	echo "error";
}
?>