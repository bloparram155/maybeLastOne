<?php
        class Home extends CI_Controller {

                public function view($page = 'home')
                {
                	if ( ! file_exists(APPPATH.'views/home/'.$page.'.php'))
                	{
                        // Whoops, we don't have a page for that!
                        show_404();
                	}

                	$data['title'] = ucfirst($page); // Capitalize the first letter

        	        $this->load->view('templates/header', $data);
                        $this->load->view('templates/topMainNav', $data);
        	        $this->load->view('home/'.$page, $data);
        	        $this->load->view('templates/footer', $data);
                }

                public function registro($page = 'registro')
                {

                        if ( ! file_exists(APPPATH.'views/app/'.$page.'.php'))
                        {
                        // Whoops, we don't have a page for that!
                        show_404();
                        }

                        $data['title'] = ucfirst($page); // Capitalize the first letter

                        $this->load->view('templates/header', $data);
                        $this->load->view('app/'.$page, $data);
                        $this->load->view('templates/footer', $data);  
                }
        }