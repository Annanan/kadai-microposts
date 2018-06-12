<?php
    date_default_timezone_set('Asia/Tokyo');
    $now = date("Y/m/d H:i:s");
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <?php print "<p>ここにphpコードを埋め込む。</p>"; ?></p>
        <p>今は<?php print $now; ?>時です。</p>
        <?php if (6 <= $now_hour && $now_hour < 12) { ?>
           <p>おはよう、太郎さん</p>
        <?php } elseif(12 <= $now_hour && $now_hour < 18) {?>
           <p>こんにちは、太郎さん</p>
        <?php } else {?>
        <p>こんばんは、太郎さん</p>
        <?php } ?>
        <ul>
            
            <?php for($i = 1; $i < 10; $i++){ ?>
                <li><?php print "3 × " . $i . " = " . (3 * $i);?> </li>
            <?php } ?>
        </ul>
        
       
    </body>
</html>

