<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-11</title>
</head>
<body>
<h3>複数入力可能なテキストボックス</h3>
<?php
    if (isset($_POST['btnExec'])) {
        // 送信ボタンがクリックされたとき
        // 受け取ったデータをrcv_で始める変数名に展開
        extract($_REQUEST, EXTR_SKIP|EXTR_PREFIX_ALL|EXTR_REFS, "rcv");
        $num = 1;
        foreach ($rcv_inputdata as $data) {
            print "$num 個目のテキストボックス：";
            print $data . "<br />";
            $num++;
        }
        print "<br/ ><br/ >";
    }
?>
    <hr>
    テキストボックスに値を入力して[送信]ボタンをクリックしてください。（複数入力可）
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="POST">
        <p><input sizse="40" type="text" name="inputdata[]"></p>
        <p><input sizse="40" type="text" name="inputdata[]"></p>
        <p><input sizse="40" type="text" name="inputdata[]"></p>
        <p><input sizse="40" type="text" name="inputdata[]"></p>
        <input type="submit" name="btnExec" value="送信">
    </form>        
</body>
</html>