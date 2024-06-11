<?php

class Controller
{
    public function view(string $view, array $data = []): void
    {
        $data;
        require 'app/views/layouts/header.php';
        require 'app/views/' . $view . '.php';
        require 'app/views/layouts/footer.php';
    }

    public function view_admin(string $view, array $data = []): void
    {
        $data;
        require 'app/views/admin/layouts/header.php';
        require 'app/views/' . $view . '.php';
        require 'app/views/admin/layouts/footer.php';
    }

    public function repository(string | object $repository): object
    {
        require 'app/models/repository/' . $repository . '.php';
        return new $repository;
    }
}
