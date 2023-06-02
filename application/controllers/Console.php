<?php

/**
* @property User $user
* @property Address $address
* @property form_validation $form_validation
* @property input $input
*/

class Console extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user');
        $this->load->model('address');
    }

    public function view($page = "console") 
    {
        if ( ! file_exists(APPPATH.'views/console/'.$page.'.php')) show_404();

        $status = $this->input->get('status') ?? -1;
        $us = $this->input->get('us') ?? 0;

        $data['users'] = $status >= 0 && $status <= 1 ? $this->user->listByParams(array("status" => $status)) : $this->user->listAll();
        $data['addr'] = $us ? $this->address->listByParams(array("idUser" => $us)) : null;
        
        $data['us'] = $us ? $this->user->listById($us) : null;
        $data['title'] = ucfirst($page); 
        $data['s_status'] = $status; 
        
        $data['status_list'] = [-1 => "Status", 1 => "Ativo", 0 => "Inativo"]; 
        $data['genre_list'] = [0 => "Não definido", "F" => "Feminino", "M" => "Masculino", "O" => "Outros"]; 

        $this->load->view('templates/header.php', $data);
        $this->load->view('console/'.$page, $data);
        $this->load->view('templates/footer.php');
    }

}