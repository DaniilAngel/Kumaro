<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Кумаро</title>
  <link rel="stylesheet" type="text/css" href="css/site.css"/>
  <link rel="icon" type="image/png" href="https://krot.info/uploads/posts/2021-03/1615772331_6-p-tatu-devyatikhvostogo-lisa-6.png" sizes="32x32">
  <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>
<header></header>
  <div class="wrapper">
    <img class="icon" src="https://krot.info/uploads/posts/2021-03/1615772331_6-p-tatu-devyatikhvostogo-lisa-6.png" alt="">
    <ul class="menu-top">
      <li class="menu-item"><a class="link" href="index.html">Главная</a></li>
      <li class="menu-item"><a class="" href="index.html"></a></li>
      <li class="menu-item">Ссылки
          <ul class="submenu">
            <li class="menu-item"><a class="link" href="https://www.instagram.com/daniilangel15"><img class="inst" alt="" src="https://img.icons8.com/fluency/48/000000/instagram-new.png">Instagram</a></li>
            <li class="menu-item"><a class="link" href="https://vk.com/foxforc"><img class="vk" alt="" src="https://img.icons8.com/color/48/000000/vk-circled.png">VK</a></li>
            <li class="menu-item"><a class="link" href="https://t.me/fox_furry1"><img alt="" src="https://img.icons8.com/fluency/48/000000/telegram-app.png" class="telega">Telegram</a></li>
          </ul>
          <li class="menu-item">Прочее
            <ul class="submenu">
              <li><a class="link" href="rules.html"><img class="rules" alt="" src="https://img.icons8.com/color-glass/48/000000/rules.png">Правила</a></li>
              <li><a class="link-partner" href="partner.html"><img class="partner" src="https://img.icons8.com/nolan/64/handshake.png" alt=""/>Партнёры</a></li>
            </ul>
          </li>
      </li>
    </ul>
  </div>
</header>
<main>
  <form action="sendMessage.php" method="post" name="form">
    <p class="is-h">Автор:<br> <input type="text" name="author" class="is-input" id="author"></p>
    <p class="is-h">Текст сообщения:<br><textarea name="message" rows="5" cols="50" id="message"></textarea></p>
    <input name="js" type="hidden" value="no" id="js">
    <button type="submit" id='click' name="button" class="is-button">Отправить</button>
  </form>
  <div class="clear">

  </div>
  <p>Комметарии к статье</p>
  <div id="commentBlock">
    
  </div>
</main>
</body>
</html>