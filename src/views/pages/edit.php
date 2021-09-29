<?php $render('header'); ?>

<main class="main">
  <h2>Editando o usuário - <?= $usuario['name'] ?></h2>

  <form action="<?= $base ?>/usuario/<?= $usuario['id'] ?>/editar" method="POST">
    <div>
      <label for="name">Nome *</label>
      <br>
      <input type="text" name="name" id="name" value="<?= $usuario['name'] ?>" required>
    </div>
    <br>
    <div>
      <label for="email">Email *</label>
      <br>
      <input type="email" name="email" id="email" value="<?= $usuario['email'] ?>" required>
    </div>
    <br>
    <div>
      <button type="submit">Editar</button>
    </div>
  </form>

  <br>
  <a href="<?= $base ?>/">Voltar</a>
</main>

<?php $render('footer'); ?>