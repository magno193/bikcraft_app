<!-- HEADER WORDPRESS -->
<?php get_header(); ?>
<!-- HEADER WORDPRESS -->

  <!-- introducao -->
  <section class="introducao-interna interna_contato">
    <div class="container">
      <h1 class="fadeInDown" data-anime="400">Contato</h1>
      <p class="fadeInDown" data-anime="800">tire as suas dúvidas com a gente</p>
    </div>
  </section>
  <!-- fecha introducao -->

  <!-- contato -->
  <section class="contato container fadeInDown" data-anime="1200">
    <form id="form_orcamento" method="POST" action="./enviar.php" class="contato_form grid-8 formphp">
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

      <label for="mensagem">Mensagem</label>
      <textarea id="mensagem" name="mensagem" required></textarea>
      <button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>
    </form>

    <div class="contato-dados grid-8">
      <h3>Dados</h3>
      <span>+55 21 93223 3232</span>
      <span>orcamento@bikcraft.com</span>
      <span>Rua Ali Perto - Botafogo</span>
      <span>Rio de Janeiro - RJ - Brasil</span>
      <h3>Redes socias</h3>
      <ul>
        <li>
          <a href="http://facebook.com" target="_blank">
            <img src="img/redes-sociais/facebook.svg" alt="Facebook">
          </a>
        </li>
        <li>
          <a href="http://instagram.com" target="_blank">
            <img src="img/redes-sociais/instagram.svg" alt="Facebook">
          </a>
        </li>
        <li>
          <a href="http://twitter.com" target="_blank">
            <img src="img/redes-sociais/twitter.svg" alt="Facebook">
          </a>
        </li>
      </ul>
    </div>
  </section>
  <!-- fecha contato -->

  <!-- mapa -->
  <section class="container contato_mapa fadeInDown" data-anime="1200">
    <a href="http://google.com" target="_blank">
      <img src="img/endereco-bikcraft.jpg" alt="Endereço da Bikcraft">
    </a>
  </section>
  <!-- fecha mapa -->

  <!-- FOOTER WORDPRESS -->
  <?php get_footer(); ?>
  <!-- FOOTER WORDPRESS -->

</html>