<?php
function redirect_To($page)
{
    header("Location:".$page);
    exit();
}
?>