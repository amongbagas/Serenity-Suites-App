<?php

class Home extends Controller
{
    public function index(): void
    {
        $data = array(
            0 => 'gilla',
            1 => 'linggae',
            2 => 'roy',
            3 => 'bagag',
            4 => 'sudha',
        );

        $this->view('home/index', $data);
    }
}
