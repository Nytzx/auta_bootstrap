<?php
// Você pode adicionar lógica PHP aqui, se necessário.
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>mtx</title>
  <style>
    html, body {
      margin: 0;
      padding: 0;
      overflow: hidden;
      height: 100%;
      width: 100%;
      font-family: 'Courier New', monospace;
      color: white;
      text-align: center;
      background: black;
    }

    #video-background {
      position: fixed;
      right: 0;
      bottom: 0;
      min-width: 100%;
      min-height: 100%;
      z-index: -1;
      object-fit: cover;
    }

    .content {
      position: relative;
      top: 50%;
      transform: translateY(-50%);
    }

    img {
      max-width: 300px;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    p {
      font-size: 18px;
      max-width: 600px;
      margin: 0 auto 20px;
    }

    footer {
      font-size: 14px;
      color: #aaa;
    }

    #playButton {
      background-color: #111;
      border: 2px solid #fff;
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 20px;
    }

    #playButton:hover {
      background-color: #333;
    }

    audio {
      display: none;
    }
  </style>
</head>
<body>

  <!-- Vídeo de fundo -->
  <video autoplay muted loop id="video-background">
    <source src="https://cdn.discordapp.com/attachments/1357851561195344045/1381281231575978115/s_Nqv1ddETwFTiJlGJBXKGEpBK2-HQz-K3IWmp2aauM_online-video-cutter.com.mp4?ex=6846f1e4&is=6845a064&hm=68883320cbbc7584261fc88cd92b05d5792fc9d6761d55bbc7025f2089e5ac5e" type="video/mp4">
    Seu navegador não suporta vídeo HTML5.
  </video>

  <!-- Música de fundo (começa parada) -->
  <audio id="backgroundMusic" loop>
    <source src="song.mp3" type="audio/mpeg">
    Seu navegador não suporta áudio HTML5.
  </audio>

  <!-- Conteúdo principal -->
  <div class="content">
    <img src="https://cdn.discordapp.com/attachments/1357851561195344045/1381279274455007386/5a19c70aa68fe1f16198f7835c76a007.jpg?ex=6846f011&is=68459e91&hm=04dbacebbefb4150a9b9decd6ed552d98dcb109f01da5fe2f1a6f02e9bd76b4c" alt="Imagem central">
    
    <p>
      O mundo não precisa de mais usuários passivos.<br>
      Precisa de mentes inquietas.<br>
      Pessoas que olham para uma linha de código e enxergam possibilidades, não limitações.
    </p>

    <button id="playButton">Clique para tocar a música</button>

    <footer>-- made by mtx & ghost! --</footer>
  </div>

  <script>
    const playButton = document.getElementById('playButton');
    const audio = document.getElementById('backgroundMusic');

    playButton.addEventListener('click', () => {
      audio.play();
      playButton.style.display = 'none'; // Esconde o botão após o clique
    });
  </script>

</body>
</html>
