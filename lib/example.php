<?php

require_once('FriendsBonusTerminalService.php');

$terminalData = new TerminalData();
$terminalData->identification = "12345";
$terminalData->secret = "xyz";

$requestParam = new useFriendsBonusCard();
$requestParam->terminalData = $terminalData;
$requestParam->cardNumber = "12309843723982";

$service = new FriendsBonusTerminalService();
$response = $service->useFriendsBonusCard($requestParam);
$usage = $response->usageResponse;

echo "ValidationCode: ".$usage->validationCode."\n";

?>
