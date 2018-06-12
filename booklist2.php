<?php
  $username = 'root';
  $password = '';
  
  $database = new PDO('mysql:host=localhost;dbname=booklist2;charset=UTF8;', $username, $password);

if($_POST ['book2_title']){
    $sql = 'INSERT INTO books '
}  
  $sql = 'SELECT *FROM books ORDER BY created_at DESC';
  $statement = $database->query($sql);
  $records = $statement->fetchAll();
  
  $staement = null;
  $database = null;
  
?>

  <!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Booklist</title>
    </head>
    <body>
<?php
    // フォームデータ送受信確認用コード（本番では削除）
    print '<div style="background-color: skyblue;">';
    print '<p>動作確認用:</p>';
    print_r($_POST);
    print '</div>';
?>
        <h1>Booklist</h1>
        <h2>書籍の登録フォーム</h2>
        <form action="booklist2.php" method="POST">
            <input type="text" name="book_title" placeholder="書籍タイトルを入力" required>
            <input type="submit" name="submit_add_book" value="登録">
        </form>
        <h2>登録された書籍一覧</h2>
        <ul>
<?php 
      if ($records) {
          foreach ($records as $record) {
              $book_title = $record['book_title'];
  ?>
                <li><?php print $book_title; ?></li>
 <?php             
              
          }
      }

?>




        </ul>
    </body>
</html>
  