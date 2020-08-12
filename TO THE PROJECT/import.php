
<!DOCTYPE html>
<html>
<body>

<?php
$xml=simplexml_load_file('contacts.xml');

echo $xml->name. "<br>";
echo $xml->lastName. "<br>";
echo $xml->phone. "<br>";

?>

</body>
</html>

