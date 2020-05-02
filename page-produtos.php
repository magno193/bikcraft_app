<!-- HEADER WORDPRESS -->
<?php get_header(); ?>
<!-- HEADER WORDPRESS -->

  <!-- introducao -->
  <section class="introducao-interna interna_produtos">
    <div class="container">
      <h1 class="fadeInDown" data-anime="400">Produtos</h1>
      <p class="fadeInDown" data-anime="800">conheça todos os nossos produtos</p>
    </div>
  </section>
  <!-- fecha introducao -->

  <!-- produtos -->
  <section class="container produto_item fadeInDown" data-anime="1200">
    <div class="grid-11">
      <img src="img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft passeio">
      <h2>Passeio</h2>
    </div>
    <div class="grid-5 produto_icone">
      <img src="img/produtos/passeio.svg" alt="Bikcraft passeio">
    </div>
    <div class="grid-8">
      <img src="img/produtos/bikcraft-passeio-2.jpg" alt="Bikcraft passeio">
    </div>
    <div class="grid-8 produto_info">
      <p>No mundo atual, a contínua expansãop de nossa tividade cumpre um papel essencial na fórmula da gestão inovadora
        da qual fazemos parte.</p>
      <ul>
        <li>Conforto</li>
        <li>Velocidade</li>
        <li>Design</li>
        <li>Versatilidade</li>
      </ul>
    </div>
  </section>

  <section class="container produto_item fadeInDown" data-anime="1200">
    <div class="grid-11">
      <img src="img/produtos/bikcraft-esporte-1.jpg" alt="Bikcraft esporte">
      <h2>Esporte</h2>
    </div>
    <div class="grid-5 produto_icone">
      <img src="img/produtos/esporte.svg" alt="Bikcraft esporte">
    </div>
    <div class="grid-8">
      <img src="img/produtos/bikcraft-esporte-2.jpg" alt="Bikcraft esporte">
    </div>
    <div class="grid-8 produto_info">
      <p>No mundo atual, a contínua expansãop de nossa tividade cumpre um papel essencial na fórmula da gestão inovadora
        da qual fazemos parte.</p>
      <ul>
        <li>Conforto</li>
        <li>Velocidade</li>
        <li>Design</li>
        <li>Versatilidade</li>
      </ul>
    </div>
  </section>

  <section class="container produto_item fadeInDown" data-anime="1200">
    <div class="grid-11">
      <img src="img/produtos/bikcraft-retro-1.jpg" alt="Bikcraft retrô">
      <h2>Retrô</h2>
    </div>
    <div class="grid-5 produto_icone">
      <img src="img/produtos/retro.svg" alt="Bikcraft retrô">
    </div>
    <div class="grid-8">
      <img src="img/produtos/bikcraft-retro-2.jpg" alt="Bikcraft retrô">
    </div>
    <div class="grid-8 produto_info">
      <p>No mundo atual, a contínua expansãop de nossa tividade cumpre um papel essencial na fórmula da gestão inovadora
        da qual fazemos parte.</p>
      <ul>
        <li>Conforto</li>
        <li>Velocidade</li>
        <li>Design</li>
        <li>Versatilidade</li>
      </ul>
    </div>
  </section>
  <!-- fecha produtos -->

  <!-- orçamento -->
  <section class="orcamento fadeInDown" data-anime="1200">
    <div class="container">
      <h2 class="subtitulo">Orçamento</h2>
      <form id="form_orcamento" method="POST" action="./enviar.php" class="form grid-8 formphp">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required>
        <label for="email">E-mail</label>
        <input id="email" name="email" type="email" required>
        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone">
  
        <label class="anti-spam">Se você não é um robô, deixe em branco.</label>
        <input type="text" class="anti-spam" name="leaveblank">
        <label class="anti-spam">Se você não é um robô, não mude este campo.</label>
        <input type="text" class="anti-spam" name="dontchange" value="http://">
  
        <label for="espec">Especificações</label>
        <textarea id="espec" name="espec" required></textarea>
        <button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>
      </form>

      <div class="orcamento-dados grid-8">
        <h3>Dados</h3>
        <span>+55 21 93223 3232</span>
        <span>orcamento@bikcraft.com</span>
        <h3>Monte a sua Bikcraft</h3>
        <p>Escolha as especificações</p>
        <ul>
          <li>- Cores</li>
          <li>- Estilo</li>
          <li>- Medidas</li>
          <li>- Acessórios</li>
          <li>- E outros</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- fecha orçamento -->

  <!-- FOOTER WORDPRESS -->
  <?php get_footer(); ?>
  <!-- FOOTER WORDPRESS -->

</html>