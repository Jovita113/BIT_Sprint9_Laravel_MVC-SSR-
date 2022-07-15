<?php

namespace App\Repository;

interface IAdminRepository {

    public function adminGetAllProducts();

    public function adminGetAllComments();

    public function adminDeleteProduct($id);

    public function adminDeleteComment($id);

   

}

?>