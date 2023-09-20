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


    public function page($page=1)
    {


        $user_count = $this->employee->get_user_count();
        $config['base_url'] = base_url() . 'Employee/page';
        $config['total_rows'] = $user_count;
        $config['per_page'] = 4;
        $config['first_url'] = 1;
        $config['use_page_numbers'] = true;

        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
        $config['first_link'] = "First";
        $config['last_link'] = 'Last';
        $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = ['class' => 'page-link'];
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $from = ($user_count) ? (($page - 1) * $config['per_page']) + 1 : 0;
        $to = ((($page - 1) * $config['per_page']) > ($user_count - $config['per_page'])) ? $user_count : ((($page - 1) * $config['per_page']) + $config['per_page']);

        $page = ($page - 1) * $config['per_page'];
        $data['employees'] = $this->employee->getUser($config['per_page'], $page);
// print_r($data['employees']);die;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $data['result'] = "<div class=\"hint-text\">Showing <b>" . $from . "</b> to <b>" . $to . "</b>  out of <b>" . $user_count . "</b> ( <b>" . ceil($user_count / $config['per_page']) . "</b> Pages ) </div>";

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

                if (isset($_FILES['image']['name']) && $_FILES['image']['name']) {
                    $file = explode(".", $_FILES['image']['name']);
                    $_FILES['image']['name'] = $file[0] . time() . "." . $file[1];
                }

                $data = array(
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'image' => $_FILES['image']['name'],
                    'address' => $this->input->post('address'),
                    'phone' => $this->input->post('phone')
                );

                $id = $this->employee->add($data);



                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 3000;
                $config['max_width'] = 4000;
                $config['max_height'] = 4000;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) {
                    $json['error'] = 1;
                    $error = array('error' => $this->upload->display_errors());
                    //  print_r($error['error']);die;
                    $json['success_message'] = [
                        "message" => "<h5 class=\"text-success mt-3\">" . $error['error'] . "!<p></p></h5>"
                    ];


                } else {

                    $data = array('upload_data' => $this->upload->data());

                    $data = array(
                        'image' => $_FILES['image']['name']
                    );

                    $this->db->where('emp_id', $id);
                    $this->db->update('employee', $data);
                }

                if ($json['error'] == 0) {
                    $json['success_message'] = [
                        "message" => "<h5 class=\"text-success mt-3\">You logged in successfully !<p></p></h5>"
                    ];
                }
                $this->session->set_flashdata('success', 'Employee has been added Successfully!');


            }
            print_r(json_encode($json));
        }

    }

    public function edit($id)
    {

        $data = $this->employee->getUserById($id);
        $data['image'] = $data['image'] ? $data['image'] : 'avatar.webp';
        print_r(json_encode($data));

    }

    public function update()
    {

        $json = [];
        $json['error'] = '';
        
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

            if (isset($_FILES['image']['name']) && $_FILES['image']['name']) {
                $file = explode(".", $_FILES['image']['name']);
                $_FILES['image']['name'] =  trim( $file[0] . time() . "." . $file[1])  ;
            }  
         
           
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 3000;
            $config['max_width'] = 4000;
            $config['max_height'] = 4000;
    
            $this->load->library('upload', $config);
            
           
            if (!$this->upload->do_upload('image')) { 
                $json['error'] = array('error' => $this->upload->display_errors());
              
                //$this->load->view('upload_form', $error);
            } else {
    
                $data = array('upload_data' => $this->upload->data());
                // $this->load->view('upload_success', $data);
            }
    
          
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'image' => $_FILES['image']['name'],
                'address' => $this->input->post('address'),
                'emp_id' => $this->input->post('emp_id'),
                'phone' => $this->input->post('phone')
            );
         
    
    
            $data = $this->employee->update($data);
    
            $json = [
                "success" => "Employee has been Updated Successfully!"
            ];

        }

     
        $this->session->set_flashdata('success', 'Employee has been Updated Successfully!');
        print_r(json_encode($json));

    }

    public function delete()
    {

        $data = $this->employee->delete($this->input->post('delete_id'));
        $this->session->set_flashdata('error', 'Employee has been deleted Successfully!');
        print_r(json_encode($data));

    }

    public function multiDelete()
    {
        $data = $this->employee->multiDelete($this->input->post('ids'));
        print_r(json_encode($data));

    }




}