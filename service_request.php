<?php
if (isset($_POST['submit'])) {

    $writerequest = implode('', file('test.txt')) . '[!@X#$]'. $_POST['data'];
    $myfile = fopen("test.txt", "w") or die("Unable to open file!");

    fwrite($myfile, rtrim($writerequest, '[!@X#$]'));
    fclose($myfile);
}

$fileContent = implode('', file('test.txt'));
$request = explode('[!@X#$]', rtrim($fileContent, '[!@X#$]'));

?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8" />
    <title>Submit Data</title>
</head>
<body>

    <form id="input" action="" method="post">
        	request: <textarea name="data" cols="100" rows="10">
            Name: 
            Address: 
            Email: 
            Phone: 
            ---------------------------------------------
        </textarea>
        <input type="submit" name="submit" value="Submit">
    </form>
    <table>
        <?php foreach ($request as $i => $request) { ?>
        <tr>
            <td>
                request(<?php echo ($i + 1)?>):
            </td>
            <td>
                <?php echo $request;?>
            </tr>
        </td>
        <?php }?>
    </table>
    <a href="test.txt">View Core File</a>
	<a href="home.html">Home</a>
	
</body>
</html>