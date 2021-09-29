<?php

namespace src\controllers;

use \core\Controller;
use src\models\User;

class UsersController extends Controller
{
  // ======================================================
  public function add()
  {
    $this->render('add');
  }

  public function addAction()
  {
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');

    if ($name && $email) {
      $data = User::select()->where('email', $email)->execute();

      if (count($data) === 0) {
        // insere
        User::insert([
          'name' => $name,
          'email' => $email
        ])->execute();

        // REDIRECIONA PARA HOME
        $this->redirect('/');
      }
    }
    // REDIRECIONA PARA NOVO
    $this->redirect('/novo');
  }

  // ======================================================
  public function edit($args)
  {
    $usuario = User::select()->find($args['id']);

    $this->render('edit', [
      'usuario' => $usuario
    ]);
  }

  public function editAction($args)
  {
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');

    if ($name && $email) {
      User::update()
        ->set('name', $name)
        ->set('email', $email)
        ->where('id', $args['id'])
        ->execute();

      $this->redirect('/');
    }

    // REDIRECIONA PARA NOVO
    $this->redirect('/usuario/' . $args['id'] . '/editar');
  }

  // ======================================================
  public function del($args)
  {
    User::delete()->where('id', $args['id'])->execute();
    $this->redirect('/');
  }
}
