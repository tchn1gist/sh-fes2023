<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>栄東fes2023|ログイン</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes">
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <link rel="stylesheet" href="./common/style.css">
        <!-- CSS only -->
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" type="text/javascript"></script>
        <script type="text/javascript" src="./common/script.js"></script>
        <script defer src="https://kit.fontawesome.com/54953bcf0d.js" crossorigin="anonymous"></script>
        <noscript>
          <!-- JavaScriptが利用できない環境の場合表示される -->
          <p>あなたのブラウザはJavaScriptが利用できません</p>
        </noscript>
        

        
    </head>
    <body>
      <?php include("./common/header2.php"); ?>
      <br><br>
      <form name="form1" class="ninsho">
        <p>文実技術部 : ログイン</p>
        <input type="password" name="pass">
        <input type="button" value="Enter" onClick="nextPage();">
      </form><br><br>
      <?php include("./common/footer.php"); ?>
      
        
        


    </body>
</html>