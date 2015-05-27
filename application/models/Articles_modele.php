<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Articles_modele
 *
 * @author emma
 */
class articles_modele extends CI_Model {
        public function __construct()
        {
                $this->load->database();
        }
        
        
         //public function tests(){
            //$this->load->library('unit_test');
            //$this->unit->run('article_modele', 'is_string');
            //echo $this->unit->report();
         //}
        
        public function get_articles($idArticle = FALSE)
   {
            if ($idArticle === FALSE)
            {
                

$this->db->select('*');
$this->db->from('auteurs');
$this->db->join('articles', 'articles.idAuteur = auteurs.idAuteur');
$query = $this->db->get(); 
  
                    return $query->result_array();
            }
     
  //Pour récupérer tous les articles
                    $query = $this->db->get('articles');
                    return $query->result_array();
            }
   
   public function set_articles()
{
    $this->load->helper('url');

    $slug = url_title($this->input->post('titre'), 'dash', TRUE);

    $data = array(
        'titre' => $this->input->post('titre'),
        'texte' => $this->input->post('texte'),
    );

    return $this->db->insert('articles', $data);
}
}
