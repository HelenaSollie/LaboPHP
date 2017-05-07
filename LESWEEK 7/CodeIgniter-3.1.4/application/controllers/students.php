<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Students extends CI_Controller{

        public function create()
        {

            $this->load->model('Student_model', 'student', true);

            //$this->load->view('student/create');
            if( !empty( $_POST ) ) {

            $this->load->library('form_validation');
            $this->form_validation->set_rules('firstname', 'Firstname', 'required');
            $this->form_validation->set_rules('lastname', 'Lastname', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                    $this->load->view('student/error');
                }
                else
                {
                $x['firstname'] = $this->input->post('firstname');
                $x['lastname'] = $this->input->post('lastname');
                $this->students->SaveStudents($x);
                $this->load->view('student/success');
                }
                } else {

                }

        if( !empty( $_GET) ) {
            $y['firstname'] = $this->input->get('search');
            $search['students'] = $this->students->SearchStudents($y);
            $this->load->view('student/create', $search);
        } else {

        }
    }
}