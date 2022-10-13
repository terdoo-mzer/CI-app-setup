<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index() {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        // is_file() is a function that checks whether the file is located in the specified path.
        // APPATH means APP PATH - It is a wiz that knows where every file is located?

        $data['title'] = ucfirst($page); // Capitalize the first letter
        // The above takes the The name of the current page and writes as page title it to the header.php
        // file in Views/templates/...

        return view('templates/header', $data) // This makes the header template available to the pages. Data can be passed along as a second parameter. In this case, the name of the page is sent as title to each page
            . view('pages/' . $page) // This is the page itself
            . view('templates/footer'); // This is the footer
    }
}