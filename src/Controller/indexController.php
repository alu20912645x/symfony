<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class indexController extends Controller{
    /**
    * @Route("/", name="tienda_index")
    */
    public function index()
      {return new Response('<html><body>Éste es el índice de la tienda.</body></html>');}


}
?>
