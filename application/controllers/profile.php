<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('profile', $data);
    }

    public function save()
    {
        $this->form_validation->set_rules('email', 'email', 'trim|valid_email');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/profile');
        } else {
            $nama_depan = htmlspecialchars($this->input->post('nama_depan'));
            $nama_belakang = htmlspecialchars($this->input->post('nama_belakang'));
            // $email = htmlspecialchars($this->input->post('email'));
            $email = $this->input->post('email');

            $this->db->set('nama_depan', $nama_depan);
            $this->db->set('nama_belakang', $nama_belakang);
            // $this->db->set('email', $email);
            $this->db->where('email', $email);
            $this->db->update('user');

            // $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat</div>');
            redirect('profile');
        }
    }

    public function ubahPassword()
    { }
}
