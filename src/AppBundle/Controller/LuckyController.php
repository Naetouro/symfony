<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return $this->render('number.html', array(
            'number' => $number,
        ));
    }
}
?>
