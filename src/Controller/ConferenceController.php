<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{

  /**
   * @Route("/", name="index")
   */
    public function index()
    {
        return $this->render('index.html.twig');
    }


  /**
   * @Route("/apropos", name="apropos")
   */
    public function apropos()
    {
        return $this->render('a_propos_nous.html.twig',['name' => 'welcome'
        ]);
    }

    /**
     * @Route("/offre", name="offre")
     */
      public function offre()
      {
          return $this->render('offre.twig',['name' => 'welcome'
          ]);
      }

    /**
     * @Route("/inscription", name="inscription")
     */
      public function inscription()
      {
          return $this->render('inscription.html.twig');
      }

    /**
     * @Route("/galerie/charpente", name="galerieCharpente")
     */
      public function galerieCharpente()
      {
          return $this->render('galerie/charpente.html.twig');
      }

    /**
     * @Route("/galerie/couverture", name="galerieCouverture")
     */
      public function galerieCouverture()
      {
          return $this->render('galerie/couverture.html.twig');
      }

    /**
     * @Route("/galerie/eouvre", name="galerieEouvre")
     */
      public function galerieEouvre()
      {
          return $this->render('galerie/eouvre.html.twig');
      }

      /**
       * @Route("/contact", name="contact")
       */
        public function contact()
        {
            return $this->render('contact.html.twig');
        }
}
