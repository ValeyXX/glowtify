<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Menu_model');
        
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Menu Management';

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New menu added!</div>');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $data['title'] = 'Sub Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        }else{
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New sub menu added!</div>');
            redirect('menu/submenu');
        }
    }

    public function hapus($id)
    {
        $this->Menu_model->hapusDataMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Deleted!</div>');
        redirect('menu');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit';

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->Menu_model->getMenuById($id);

        $this->form_validation->set_rules('id', 'Id', 'required');
        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/edit_menu', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Menu_model->editDataMenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Edit success!</div>');
            redirect('menu/index');
        }
    }

    public function hapusSubMenu($id)
    {
        $this->Menu_model->hapusDataSubMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Deleted!</div>');
        redirect('menu/submenu');
    }


    public function editSubMenu($id)
    {
        $data['title'] = 'Edit';

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['submenu'] = $this->Menu_model->getSubMenuById($id);

        $this->form_validation->set_rules('id', 'Id', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu Id', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');
        $this->form_validation->set_rules('is_active', 'Active', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/edit_submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Menu_model->editDataMenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Edit success!</div>');
            redirect('menu/submenu');
        }
    }
}
