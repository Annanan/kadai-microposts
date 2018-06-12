<?php
  date_default_timezone_set('Asia/Tokyo');
  $now_hour = (int)date('H');
  
  function greeting($hour) {
       $result = "";
       
       if(6 <= $hour && $hour < 12 ) {
           $result = "goodmorning";
       }
        elseif (12 <= $hour && $hour < 18 ){
           $result = "goodafternoon";
       }
       
        else {
            $result = "goodevenig";
        }
       
      
        return $result;
       }
      
?>

<?php
   for ($i = 1; $i < 6; $i++){
          print $i . '回目のこんにちは！' . PHP_EOL;
          
   }
?>
   
<?php 
   function display_hello ($num) {
        for($i = 0, $num>$i, $i++) {
        print $num . '回目のさようなら' . PHP_EOL;
       }
   }
?>
   
   
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <p>今は<?php print $now_hour; ?>時です。</p>
                
        <p><?php print greeting($now_hour); ?></p>
    </body>
    
</html>