<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class productoController extends Controller{
    /**
    * @Route("/productos/{nombre}", name="tienda_producto", requirements={"nombre"="\D+"})
    */
    public function producto()
      {return new Response('<html><body>Aquí mostraremos el producto.</body></html>');}


}
?>
