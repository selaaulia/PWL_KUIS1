<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Member;
use App\Models\Supplier;
use App\Models\Customer;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home', ['title' => '- Home Page', 'status' => 'active']);

    }
    public function product() {
        return view('product', ['products' => Product::product(), 'title' => '- Products Page', 'status' => 'active']);
    }

    public function about() {
        return view('about', ['members' => Member::index(), 'title' => '- About Page', 'status' => 'active']);
    }

    public function contact() {
        return view('contact', ['title' => '- Contact Page', 'status' => 'active']);
    }
    public function supplier() {
        return view('supplier', ['suppliers' => Supplier::supplier(), 'title' => '- Supplier Page', 'status' => 'active']);
    }

    public function customer() {
        return view('customer', ['customers' => Customer::customer(), 'title' => '- Customer Page', 'status' => 'active']);
    }
    
}
