<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class carroController extends Controller{
    /**
    * @Route("/carro/{accion}/{id}/{cantidad}", name="tienda_carro", requirements={"cantidad"="\d+","id"="^id\d+"})
    */
    public function carro()
      {return new Response('<html><body>Aquí mostraremos el carrito de la compra.</body></html>');}


}
?>
