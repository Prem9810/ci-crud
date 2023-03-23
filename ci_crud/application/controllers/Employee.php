<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Employee extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Employee_model', 'employee');
        $this->load->library('pagination');
    }


    public function page($page)
    {
     
        
        $user_count = $this->employee->get_user_count();       
        $config['base_url'] = base_url().'Employee/page';
        $config['total_rows'] = $user_count;
        $config['per_page'] = 4;
        $config['first_url'] = 1;
        $config['use_page_numbers'] = true;

        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Previous';
        $config['first_link']       = "First";
        $config['last_link']        = 'Last';
        $config['full_tag_open']    = '<ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul>';
        $config['attributes']       = ['class' => 'page-link'];
        $config['first_tag_open']   = '<li class="page-item">';
        $config['first_tag_close']  = '</li>';
        $config['prev_tag_open']    = '<li class="page-item">';
        $config['prev_tag_close']   = '</li>';
        $config['next_tag_open']    = '<li class="page-item">';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li class="page-item">';
        $config['last_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['num_tag_open']     = '<li class="page-item">';
        $config['num_tag_close']    = '</li>';

        $from = ($user_count) ? (($page - 1) * $config['per_page']) + 1 : 0;
        $to = ((($page - 1) * $config['per_page']) > ($user_count - $config['per_page'])) ? $user_count : ((($page - 1) * $config['per_page']) + $config['per_page']);

        $page = ($page - 1) * $config['per_page'];
        $data['employees'] = $this->employee->getUser($config['per_page'], $page);
       
        $this->pagination->initialize($config);

        

        $data['pagination'] = $this->pagination->create_links();
       
        $data['result'] = "<div class=\"hint-text\">Showing <b>".  $from ."</b> to <b>".$to."</b>  out of <b>" .$user_count. "</b> ( <b>". ceil($user_count / $config['per_page']) ."</b> Pages ) </div>";

        $this->load->view('common/header');
        $this->load->view('Employee/Employee', $data);
        $this->load->view('common/footer');
    }

    public function add()
    {
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
            $json = [];
            $json['error'] = 0;
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');




            if ($this->form_validation->run() == FALSE) {
                $json['error'] = 1;
                $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
                $json['error_message'] = [
                    "name" => form_error('name'),
                    "email" => form_error('email'),
                    "address" => form_error('address'),
                    "phone" => form_error('phone'),

                ];
            } else {
                $data = array(
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'address' => $this->input->post('address'),
                    'phone' => $this->input->post('phone')
                );
                $this->employee->add($data);
                $json['error'] = 0;
                $json['success_message'] = [
                    "message" => "<h5 class=\"text-success mt-3\">You logged in successfully !<p></p></h5>"
                ];

            }
            print_r(json_encode($json));
        }

    }

    public function edit($id)
    {

        $data = $this->employee->getUserById($id);
        print_r(json_encode($data));

    }

    public function update()
    {

        $data = $this->employee->update($this->input->post());
        print_r(json_encode($data));

    }

    public function delete()
    {

        $data = $this->employee->delete($this->input->post('delete_id'));
        print_r(json_encode($data));

    }

    public function multiDelete()
    {
        $data = $this->employee->multiDelete($this->input->post('ids'));
        print_r(json_encode($data));

    }




}