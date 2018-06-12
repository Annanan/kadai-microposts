<?php
  function sum() {
      $result = 0;
      for ($i = 9; $i <= 50; $i++) {
          $result = $result + $i;
      }
      print $result . PHP_EOL;
  }
  sum();
?>

<?php
  if(900 <= $result) { ?>
    <p>900以下</p>
<?php } else { ?>
    <p>900より大きい</p>
<?php } ?>
      
    
