<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class isLoggedIn implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        if (!session('username')) {
            return redirect()->to(base_url('/auth/login'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // if (session('username')) {
        //     return redirect()->to(base_url('admin/dashboard'));
        // }
    }
}
