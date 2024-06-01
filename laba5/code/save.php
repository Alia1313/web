<?php
include 'vendor/autoload.php';

function redirectToHome(): void 
{
    header('Location: /');

    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    redirectToHome();
}

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$desc = $_POST['description'];

$client = new Google_Client();
$client->setApplicationName('Google Sheets API');
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$path = "civil-density-421619-c45e530196f3.json";
$client->setAuthConfig($path);
$service = new Google_Service_Sheets($client);
$spreadsheetId = '1J2LJpuwXbOBdOPKgF-SjFpIg5fpfy4NubTCXRCetG1s';
$newRow = [$email, $category, $title, $desc];
$rows = [$newRow]; 
$valueRange = new Google_Service_Sheets_ValueRange();
$valueRange->setValues($rows);
$range = 'Sheet1';
$options = ['valueInputOption' => 'USER_ENTERED'];
$service->spreadsheets_values->append($spreadsheetId, $range, $valueRange, $options);

redirectToHome();

