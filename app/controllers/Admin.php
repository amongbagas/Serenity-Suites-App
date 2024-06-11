<?php

class Admin extends Controller
{

    public function index(): void
    {
        $data = array(
            'title' => 'Admin',
        );

        $this->view_admin('admin/index', $data);
    }

    public function user(): void
    {
        $data = array(
            'title' => 'Admin',
        );

        $this->view_admin('admin/user', $data);
    }

    public function kamar(): void
    {
        $data = array(
            'title' => 'Admin',
        );

        $this->view_admin('admin/kamar', $data);
    }
    public function reservasi(): void
    {
        $data = array(
            'title' => 'Admin',
        );

        $this->view_admin('admin/reservasi', $data);
    }
}
