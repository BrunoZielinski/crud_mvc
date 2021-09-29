<?php $render('header'); ?>

<main class="main">
  <a href="<?= $base ?>/novo" class="add-user">Novo Usuário</a>

  <hr>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($usuarios as $usuario) : ?>
        <tr>
          <td><?= $usuario['id'] ?></td>
          <td><?= $usuario['name'] ?></td>
          <td><?= $usuario['email'] ?></td>
          <td>
            <a href="<?= $base ?>/usuario/<?= $usuario['id'] ?>/editar">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M18 14.45v6.55h-16v-12h6.743l1.978-2h-10.721v16h20v-10.573l-2 2.023zm1.473-10.615l1.707 1.707-9.281 9.378-2.23.472.512-2.169 9.292-9.388zm-.008-2.835l-11.104 11.216-1.361 5.784 5.898-1.248 11.103-11.218-4.536-4.534z" />
              </svg>
            </a>

            <a href="<?= $base ?>/usuario/<?= $usuario['id'] ?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M3 6v18h18v-18h-18zm5 14c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm4-18v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.315c0 .901.73 2 1.631 2h5.712z" />
              </svg>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</main>

<?php $render('footer'); ?>