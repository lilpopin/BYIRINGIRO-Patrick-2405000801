<!DOCTYPE html>
<html>

<body>
<font color="green"><h1>The main body of Book </h1></font>
<hr>
<?php
$sentence ="The main body of Book";
echo strtolower($sentence);
echo strtoupper($sentence);
echo str_replace ("Book", "College",$sentence);
 echo strlen("$sentence");
 echo $sentence [4];
?> 

</body>
</html>
