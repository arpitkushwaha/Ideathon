<?php

function redirect_to($path)
{
    header('Location:http://localhost/'.$path);
    exit();
}

function basepath()
{
    return "http://localhost/";
}
?>