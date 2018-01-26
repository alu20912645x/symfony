<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class sesionController extends Controller{
    /**
    * @Route("/login", name="tienda_login", methods={"GET","POST"})
    */
    public function login()
      {}

    /**
    * @Route("/login/nombreusu", name="tienda_login_usuario", methods={"GET"})
    */
    public function login_usu()
      {}

    /**
    * @Route("/register", name="tienda_register", methods={"GET","POST"})
    */
    public function register()
      {}

}

?>
