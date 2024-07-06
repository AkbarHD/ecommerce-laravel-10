<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('pelanggan.home', [
            'title' => 'Pelanggaan'
        ]);
    }

    public function shop()
    {
        return view('pelanggan.shop', [
            'title' => 'Shop'
        ]);
    }

    public function transaksi()
    {
        return view('pelanggan.transaksi', [
            'title' => 'Transaksi'
        ]);
    }

    public function contact()
    {
        return view('pelanggan.contact', [
            'title' => 'Contact'
        ]);
    }

    public function checkout()
    {
        return view('pelanggan.checkout', [
            'title' => 'Checkout'
        ]);
    }

    public function admin()
    {
        return view('admin.dashboard', [
            'name' => 'Dashboard',
            'title' => 'Admin'
        ]);
    }

    public function product()
    {
        return view('admin.product', [
            'name' => 'Product',
            'title' => 'product'
        ]);
    }
    public function userManagement()
    {
        return view('admin.user', [
            'name' => 'User Management',
            'title' => 'user management'
        ]);
    }
    public function report()
    {
        return view('admin.report', [
            'name' => 'Repport',
            'title' => 'repport'
        ]);
    }
}
