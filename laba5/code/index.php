<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum_scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="form">
        <form action="save.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" required>

            <label for="category">Category</label>
            <select name="category" required>
            	<?php
		$list = ['cars', 'food', 'drink', 'other'];
		for ($i = 0; $i < count($list); $i++)
		{?>
		    <option value=<?php echo $list[$i];?>><?php echo $list[$i];?></option>
		<?php }?>  
            </select>
        
            <label for="title">Title</label>
            <input type="text" name="title" required>

            <label for="description">Description</label>
            <textarea rows="3" name="description"></textarea>
        
            <input type="submit" value="Save">
        </form>
    </div>
    <div id="table">
        <table>
            <thead>
		<th>Email</th>
            	<th>Category</th>
            	<th>Title</th>
            	<th>Description</th>
            </thead>
            <tbody>
                <?php
                    include 'vendor/autoload.php';
                    $client = new Google_Client();
		    $client->setApplicationName('Google Sheets API');
		    $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
		    $client->setAccessType('offline');
		    $path = "civil-density-421619-c45e530196f3.json";
		    $client->setAuthConfig($path);
		    $service = new Google_Service_Sheets($client);
		    $spreadsheetId = '1J2LJpuwXbOBdOPKgF-SjFpIg5fpfy4NubTCXRCetG1s';
		    $spreadsheet = $service->spreadsheets->get($spreadsheetId);
		    $range = 'Sheet1'; // here we use the name of the Sheet to get all the rows
		    $response = $service->spreadsheets_values->get($spreadsheetId, $range);
		    $values = $response->getValues();
		    if (!is_null($values)) {
		        foreach ($values as $line) {?>
		        <tr>
		            <?php
		            foreach ($line as $val) {?>
			        <td><?php echo $val;?></td>
			        <?php
		            }?>
		        </tr>
		        <?php
		        }
		    }
	 	?>
            </tbody>
        </table>
    </div>
</body>
</html>
