<?php

function redirect_to($path)
{
    header('Location:http://localhost/myfurries/'.$path);
    exit();
}


function basepath()
{
    return "http://localhost/myfurries/";
}


function linkembed($link){

    $url = $link;
    $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
    $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';
 
    if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }
 
    if (preg_match($shortUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }
    return 'https://www.youtube.com/embed/' . $youtube_id ;
 
    // <!-- the embed code -->
           
    // <iframe id="ytplayer" type="text/html" width="560" height="400"
    //     src="<?php echo linkembed("https://www.youtube.com/watch?v=JUNMosp3TMI");?rel=0&showinfo=0&color=white&iv_load_policy=3"
    //     frameborder="0" allowfullscreen></iframe> 
 
 }

 function timestamp($timestamp)
 {
    $new_datetime = DateTime::createFromFormat ( "Y-m-d H:i:s", $timestamp );
    return $new_datetime->format('M j, Y');
    //return $new_datetime->format('d/M/Y, h:i:s');
    //return date('M j Y g:i A', strtotime($timestamp));
 }
?>