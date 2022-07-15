<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use App\Repository\IAdminRepository;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $admin;

    public function __construct(IAdminRepository $admin)
    {
        $this->admin = $admin;
    }


    //products admin page
    public function adminGetAllProducts() {
        $products =  $this->admin->adminGetAllProducts();
        return view('admin.products')->with('products', $products);
    }

    //comments admin page
    public function adminGetAllComments() {
            $comments =  $this->admin->adminGetAllComments();
            return view('admin.comments')->with('comments', $comments);
    }

    //delete a single product
    public function adminDeleteProduct($id) {
        $this->admin->adminDeleteProduct($id);
        return redirect('/admin/products');
    }

    //delete a single comment
    public function adminDeleteComment($id) {
        $this->admin->adminDeleteComment($id);
        return redirect('/admin/products/comments');
    }


}