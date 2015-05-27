
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Articles
 *
 * @author emma
 */
class articles extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('articles_modele');
    }

    public function index() {
        $data['articles'] = $this->articles_modele->get_articles();
        $data['title'] = 'Articles';
        $this->load->view('templates/header', $data);
        $this->load->view('articles/index', $data);
        $this->load->view('templates/footer');
    }

    //public function tests() {
        //$this->load->library('unit_test');
        //$this->unit->run('azert', 'is_string');
        //echo $this->unit->report();
    //}

    public function view($nomTheme = NULL) {
        $data['articles'] = $this->articles_modele->get_articles($nomTheme);

        if (empty($data['articles'])) {
            show_404();
        }

        $data['titre'] = $data['articles']['titre'];

        $this->load->view('templates/header', $data);
        $this->load->view('articles/view', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['titre'] = 'Créer un nouvel article';

        //$this->form_validation->set_rules('slug', 'slug', 'required');
        $this->form_validation->set_rules('titre', 'titre', 'required');
        $this->form_validation->set_rules('texte', 'texte', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('articles/create');
            $this->load->view('templates/footer');
        } else {
            $this->articles_modele->set_articles();
            $this->load->view('articles/success');
        }
    }

}
