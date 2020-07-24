<?php 
//there are two types of youtube normal url
//the code below simulatneously takes care of the two.
//many codes that attempt to do this fail because they don't realize this ancient truth
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
              
?>
          
          <!-- the embed code -->
          
<iframe id="ytplayer" type="text/html" width="560" height="400"
    src="<?php echo linkembed("https://www.youtube.com/watch?v=JUNMosp3TMI"); ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
    frameborder="0" allowfullscreen></iframe> 
    
