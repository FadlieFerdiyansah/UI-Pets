<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->AuthModel = new AuthModel();
    }
    public function login()
    {
        $data = [
            'title' => 'Login',
            'validation' => \Config\Services::validation()
        ];
        return view('auth/login', $data);
    }

    public function proses_login()
    {
        if (!$this->validate([

            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email tidak boleh kosong.'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email tidak boleh kosong.'
                ]
            ]

        ])) {
            return redirect()->to('/auth/login')->withInput();
        } else {

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $cek_data = $this->AuthModel->login($email, $password);

            if ($cek_data) {

                session()->set('log', true);
                session()->set($cek_data);
                return redirect()->to('/dashboard');
            } else {
                session()->setFlashdata('pesan', 'Email atau Password anda salah');
                return redirect()->to('/auth/login')->withInput();
            }
        }
    }

    public function daftar()
    {
        $data = [
            'title' => 'Daftar',
            'validation' => \Config\Services::validation()
        ];
        return view('auth/daftar', $data);
    }

    public function proses_daftar()
    {
        if (!$this->validate([

            'nama_dpn' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama depan tidak boleh kosong.'
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[data_user.email]',
                'errors' => [
                    'required' => 'Email tidak boleh kosong.',
                    'is_unique' => 'Email sudah digunakan.'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email tidak boleh kosong.'
                ]
            ],
            'konfirmasi_password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Konfirmasi password tidak boleh kosong.',
                    'matches' => 'Konfirmasi password tidak sama dengan password.'
                ]
            ]

        ])) {

            return redirect()->to('/auth/daftar')->withInput();
        } else {

            $this->AuthModel->insert([

                'nama_dpn' => $this->request->getPost('nama_dpn'),
                'nama_blkng' => $this->request->getPost('nama_blkng'),
                'jenkel' => $this->request->getPost('jenkel'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),

            ]);
        }

        session()->setFlashdata('pesan', 'Anda berhasil daftar');
        return redirect()->to('/auth/daftar');
    }

    //--------------------------------------------------------------------

}
