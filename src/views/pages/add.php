<?php $render('header'); ?>

<main class="main">
  <h2>Adicionar novo usuário:</h2>

  <form action="<?= $base ?>/novo" method="POST">
    <div>
      <label for="name">Nome *</label>
      <br>
      <input type="text" name="name" id="name" placeholder="Nome" required>
    </div>
    <br>
    <div>
      <label for="email">Email *</label>
      <br>
      <input type="email" name="email" id="email" placeholder="Email" required>
    </div>
    <br>
    <div>
      <button type="submit">Cadastrar</button>
    </div>
  </form>

  <br>
  <a href="<?= $base ?>/">Voltar</a>
</main>

<?php $render('footer'); ?>