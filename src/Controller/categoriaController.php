<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class categoriaController extends Controller{
    /**
    * @Route("/categorias/{nombre}/{page}/{currentpage}", name="tienda_categoria", requirements={"page"="\d+"}, defaults={"currentpage"=1})
    */
    public function categoria($currentpage)
      {return new Response('<html><body>Aquí mostraremos las categorías.</body></html>');}


}
?>
