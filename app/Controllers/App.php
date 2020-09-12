<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class App extends Controller
{

    private $categoryModel;
    private $postModel;

    public function __construct()
    {
        $this->categoryModel = new \App\Models\Category();
        $this->postModel = new \App\Models\Post();
    }

    public function index()
    {
        return view('templates');
    }

    public function category()
    {

        return view('category');
    }
    public function post()
    {

        return view('post');
    }
    public function insert_category()
    {

        $input_category = $this->request->getPost("name");

        $data = ([
            "category_name" => $input_category
        ]);

        $this->categoryModel->insert($data);

        return redirect()->to(base_url("/category"));
    }
}
