<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata['email'] == null) {
            redirect('login');
        }
        $data['title'] = 'Dashboard TU Sekolah Alam';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('content/dashboard', $data);
        $this->load->view('template/footer');
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Kolom Harus Diisi',
            'valid_email' => 'Harus Diisi Format Email'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'Kolom Harus Diisi',]);

        $this->db->where('useremail', $this->input->post('email'));
        $this->db->where('userstatus', 2);
        $user = $this->db->get('user')->row_array();

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login | DHC Herbal System';
            $this->load->view('template/header', $data);
            $this->load->view('content/login');
            $this->load->view('template/footer');
        } else {
            if ($user) {
                if (password_verify($this->input->post('password'), $user['userpassword'])) {
                    $data = [
                        'email' => $user['useremail'],
                        'status' => $user['userstatus']
                    ];
                    $this->session->set_userdata($data);
                    redirect('user');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata Sandi Salah!</div>');
                    redirect('user');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Tidak Terdaftar!</div>');
                redirect('user');
            }
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required' => 'Kolom ini Harus Diisi']);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['required' => 'Kolom ini Harus Diisi']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Password doesnt match',
            'min_length' => 'Password too short',
            'required' => 'Kolom ini Harus Diisi'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'required' => 'Kolom ini Harus Diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daftar TUS SekolahAlamIndramayu.com';
            $this->load->view('template/header', $data);
            $this->load->view('content/register');
            $this->load->view('template/footer');
        } else {
            $insert2user = [
                'username' => htmlspecialchars($this->input->post('nama', true)),
                'useremail' => htmlspecialchars($this->input->post('email', true)),
                'userpassword' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'userstatus' => 1
            ];
            $this->db->insert('user', $insert2user);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Mendaftarkan Akun Anda! Silahkan Menghubungi Staff untuk Akses Masuk</div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('status');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah Logout!</div>');
        redirect('login');
    }
}
