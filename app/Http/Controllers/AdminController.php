<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function customer() {
        return view('admin.customer');
    }

    public function order() {
        return view('admin.order');
    }

    public function analytic() {
        return view('admin.analytics');
    }

    public function message() {
        return view('admin.message');
    }

    public function product() {
        return view('admin.product');
    }

    public function addProduct() {
        return view('admin.add-product');
    }
}
