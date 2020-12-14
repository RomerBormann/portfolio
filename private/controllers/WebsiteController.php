<?php

namespace Website\Controllers;

/**
 * Class WebsiteController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class WebsiteController {

	public function home() {

		$template_engine = get_template_engine();
		echo $template_engine->render('website');

	}

    public function workspark() {

        $template_engine = get_template_engine();
        echo $template_engine->render('work/spark');

    }

    public function workportfolio() {

        $template_engine = get_template_engine();
        echo $template_engine->render('work/portfolio');

    }

    public function worknetwerk() {

        $template_engine = get_template_engine();
        echo $template_engine->render('work/netwerk');

    }

    public function workgoals() {

        $template_engine = get_template_engine();
        echo $template_engine->render('work/goals');

    }

    public function workloman() {

        $template_engine = get_template_engine();
        echo $template_engine->render('work/loman');

    }

    public function worktwittor() {

        $template_engine = get_template_engine();
        echo $template_engine->render('work/twittor');

    }

    public function workvrijpaleis() {

        $template_engine = get_template_engine();
        echo $template_engine->render('work/vrijpaleis');

    }

}