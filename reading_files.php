<?php 

$file = "example.txt";

//Its possible to decalare a variable inside a if statement.
//However the if statement will only continue once it has a TRUTHY value.
//fopen(file directory, 'w or r') opens the file but doesn't do anything to the file.

if($handle = fopen($file, 'r')) {
    //fread(handler(filepointer), amount of bytes).
    echo $content = fread($handle, 10);
    //closes the file.
    fclose($handle);

} else {
    echo "File cannot be read.";
}
?>