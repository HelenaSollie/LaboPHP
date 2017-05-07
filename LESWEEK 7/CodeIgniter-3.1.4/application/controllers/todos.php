<?php

    class todos extends CI_Controller {

        public function create() {

            $data['title'] = "Add a new todo item";
            $this->load->view('todos/create', $data);



            if ( !empty($_POST)) {

                $x ['todo'] = $this->input->post('todo');
                $this->load->model('todo_model');

                $this->todo->Save($x);
                $this->load->view('todos/success');

            }

            $data ['todos'] = $this -> todo -> GetAll();
        }

    }