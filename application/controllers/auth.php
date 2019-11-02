<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('home');
        }
        $this->form_validation->set_rules('email', 'email', 'trim|valid_email');
        $this->form_validation->set_rules('password', 'password', 'trim|callback_login_check');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            $this->login();
        }
    }

    public function login_check()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if ($email == '' || $password == '') {
            $this->form_validation->set_message('login_check', 'Form Kosong');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    private function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'username' => $user['username']
                ];
                $this->session->set_userdata($data);
                redirect('home');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password salah</div>');
                $this->load->view('auth/login');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">email tidak terdaftar</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('home');
        }

        $this->form_validation->set_rules('username', 'username', 'trim');
        $this->form_validation->set_rules('email', 'email', 'trim|valid_email');
        $this->form_validation->set_rules('repeat-password', 'repeat-password', 'trim');
        $this->form_validation->set_rules('password', 'password', 'trim|min_length[8]|callback_registration_check');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/registration');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username')),
                'email' => htmlspecialchars($this->input->post('email')),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat</div>');
            redirect('auth');
        }
    }

    public function registration_check()
    {
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $repeat_password = $this->input->post('repeat-password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($email == '' || $password == '' || $username == '' || $repeat_password == '') {
            $this->form_validation->set_message('registration_check', 'Form Kosong');
            return FALSE;
        } elseif ($password != $repeat_password) {
            $this->form_validation->set_message('registration_check', 'Password tidak sama');
            return FALSE;
        } elseif ($user) {
            $this->form_validation->set_message('registration_check', 'Email Sudah Pernah Terdaftar');
            return FALSE;
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}
