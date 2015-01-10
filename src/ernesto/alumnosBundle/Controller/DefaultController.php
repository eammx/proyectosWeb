<?php

namespace ernesto\alumnosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    var $alumnos = array(
        array("matricula" => 1, "nombre" => "Ernesto"),
        array("matricula" => 2, "nombre" => "Alberto"),
    );

    public function indexAction($name) {
        return $this->render('ernestoalumnosBundle:Default:index.html.twig', array('name' => $name));
    }

    public function alumnosAction() {
        return $this->render('ernestoalumnosBundle:Default:alumnos.html.twig', array("alumnos" => $this->alumnos));
    }

    public function alumnoAction($matricula) {
        return $this->render('ernestoalumnosBundle:Default:alumno.html.twig', array("alumno" => $this->alumnos[$matricula - 1]));
    }
    public function ejemplosAction() {
        return $this->render('ernestoalumnosBundle:Default:ejemplos.html.twig' );
    }

}
