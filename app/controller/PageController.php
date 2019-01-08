<?php

class PageController extends Controller {

    public function index(){
        $festivals = Festival::getAllFest();

        $template = $this->twig->loadTemplate('/Page/index.html.twig');
        echo $template->render(array(
            'festivals' => $festivals,
        ));
    }

    public function help(){
        $template = $this->twig->loadTemplate('/Page/help.html.twig');
        echo $template->render(array());
    }
}