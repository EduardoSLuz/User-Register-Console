<?php
class Login extends CI_Controller {

    public function view($page = "login") 
    {
        if ( ! file_exists(APPPATH.'views/login/'.$page.'.php')) show_404();

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/login_header.php', $data);
        $this->load->view('login/'.$page, $data);
        $this->load->view('templates/login_footer.php');
    }

}