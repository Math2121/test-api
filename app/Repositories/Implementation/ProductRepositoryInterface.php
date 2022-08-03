<?php
namespace App\Repositories\Implementation;
interface ProductRepositoryInterface{
    public function create(array $data);
    public function list();
}