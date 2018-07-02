<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function ($req, $res, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    $data = array();

    if (isset($_SESSION['uac'])) {
        $data['isLogin'] = true;
    } else {
        $data['isLogin'] = false;
    }

    // Render index view
    return $this->view->render($res, 'home.twig', $data);
})->setName('home');

$app->get('/login', function ($req, $res, $args) {
    return $this->view->render($res, 'login.twig', [
        'isDataCorrect' => true
    ]);
})->setName('login');

$app->post('/login', function ($req, $res, $args) {
    $dataUser = array(
        'email' => $req->getParam('email'),
        'password' => md5($req->getParam('password'))
    );

    $data = User::all(array(
        'conditions' => array(
            'email = ? and password = ?',
            $dataUser['email'],
            $dataUser['password']
    )));

    if (empty($data)) {
        return $this->view->render($res, 'login.twig', [
            'isDataCorrect' => false
        ]);
    } else {
        if (!isset($_SESSION['uac'])) {
            $_SESSION['uac'] = $data[0]->auth_email;
        }
        return $res->withHeader('Location', $this->router->pathFor('home'));
    }
});

$app->get('/register', function ($req, $res, $args) {
    return $this->view->render($res, 'register.twig', [
        'methode' => 'get'
    ]);
})->setName('register');

$app->post('/register', function ($req, $res, $args) {
    $dataUser = array(
        'email' => $req->getParam('email'),
        'password' => md5($req->getParam('password'))
    );
    
    if (User::all(array('conditions' => array('email = ?', $dataUser['email'])))) {
        return $this->view->render($res, 'register.twig', [
            'emailExists' => true
        ]);
    }

    // User
    $attributesUser = array();
    $attributesUser['username'] = 'default';
    $attributesUser['email'] = $dataUser['email'];
    $attributesUser['password'] = $dataUser['password'];
    $attributesUser['auth_email'] = md5(getdate()['0'].$dataUser['email']);
    User::create($attributesUser);


    return $res->withHeader('Location', $this->router->pathFor('login'));
});

$app->get('/logout', function ($req, $res, $args) {
    if (isset($_SESSION['uac'])) {
        unset($_SESSION['uac']);
    }
    return $res->withHeader('Location', $this->router->pathFor('home'));
})->setName('logout');

$app->get('/playground', function ($req, $res, $args) {
    $data = array();
    
    if (isset($_SESSION['uac'])) {
        $data['isLogin'] = true;
    } else {
        $data['isLogin'] = false;
    }

    return $this->view->render($res, 'playground.twig', $data);
})->setName('playground');