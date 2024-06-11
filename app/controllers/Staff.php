<?php

class Staff extends Controller
{

    public function index(): void
    {
        $data = array(
            'title' => 'Staff',
        );

        $this->view_admin('staff/index', $data);
    }
}
