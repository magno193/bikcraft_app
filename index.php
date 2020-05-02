<!-- HEADER WORDPRESS -->
<?php get_header(); ?>
<!-- HEADER WORDPRESS -->

<body>
  <script>
    document.documentElement.classList.add("js");
  </script>
  <!-- header -->
  <header class="header">
    <div class="container">
      <a href="index.html" class="grid-4">
        <img src="img/bikcraft.svg" alt="Bikcraft">
      </a>
      <nav class="grid-12 header_menu">
        <ul>
          <li><a href="sobre.html">Sobre</a></li>
          <li><a href="produtos.html">Produtos</a></li>
          <li><a href="portifolio.html">Portfolio</a></li>
          <li><a href="contato.html">Contato</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- fecha header -->

  <!-- introducao -->
  <section class="introducao">
    <div class="container">
      <h1 data-anime="400" class="fadeInDown">Bicletas feitas a mão</h1>
      <blockquote data-anime="800" class="quote-externo fadeInDown">
        <p>"não tenha nada em sua casa que você não considere útil ou acredita ser bonito"</p>
        <cite>WILLIAM MORRIS</cite>
      </blockquote>
      <a data-anime="1200" href="produtos.html" class="btn">Orçamento</a>
    </div>
  </section>
  <!-- fecha introducao -->

  <!-- produtos -->
  <section class="produtos container fadeInDown" data-anime="1200">
    <h2 class="subtitulo">Produtos</h2>

    <ul class="produtos_lista">
      <li class="grid-1-3">
        <div class="produtos_icone">
          <img src="img/produtos/passeio.svg" alt="Bikcraft Passeio">
        </div>
        <h3>Passeio</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
      </li>
      <li class="grid-1-3">
        <div class="produtos_icone">
          <img src="img/produtos/esporte.svg" alt="Bikcraft Esporte">
        </div>
        <h3>Esporte</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
      </li>
      <li class="grid-1-3">
        <div class="produtos_icone">
          <img src="img/produtos/retro.svg" alt="Bikcraft Retrô">
        </div>
        <h3>Retrô</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
      </li>
    </ul>

    <div class="call">
      <p>clique e veja os nossos produtos</p>
      <a href="produtos.html" class="btn btn-preto">Produtos</a>
    </div>
  </section>
  <!-- produtos -->

  <!-- portifolio -->
  <section class="portifolio fadeInDown" data-anime="1200">
    <div class="container">
      <h2 class="subtitulo">Portfólio</h2>
      <ul class="portifolio_lista">
        <li class="grid-8"><img src="img/portfolio/retro.jpg" alt="Bicleta retrô"></li>
        <li class="grid-8"><img src="img/portfolio/passeio.jpg" alt="Bicleta passeio"></li>
        <li class="grid-16 last-child"><img src="img/portfolio/esporte.jpg" alt="Bicleta esporte"></li>
      </ul>
      <div class="call">
        <p>conheça mais o nosso portfólio</p>
        <a href="portifolio.html" class="btn">Portfólio</a>
      </div>
    </div>
  </section>
  <!-- fecha portifolio -->

  <!-- qualidade -->
  <section class="qualidade container fadeInDown" data-anime="1200">
    <h2 class="subtitulo">Qualidade</h2>
    <img src="img/bikcraft-qualidade.svg" alt="Bikcraft">
    <ul class="qualidade_lista">
      <li class="grid-1-3">
        <h3>Durabilidade</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
      </li>
      <li class="grid-1-3">
        <h3>Design</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
      </li>
      <li class="grid-1-3">
        <h3>Sustentabilidade</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
      </li>
    </ul>
    <div class="call">
      <p>conheça mais a nossa história</p>
      <a href="sobre.html" class="btn btn-preto">Sobre</a>
    </div>
  </section>
  <!-- fecha qualidade -->

  <!-- FOOTER WORDPRESS -->
  <?php get_footer(); ?>
  <!-- FOOTER WORDPRESS -->