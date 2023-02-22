<?php

namespace App\Interfaces\Backend;

use App\Http\Requests\Backend\HomeRequest;

interface HomeRepositoryInterface 
{
    public function getNewList();
    public function getAll();
    public function getById($id);
    public function tryEntry(HomeRequest $request);
    public function delete($id);
    // 多分不要??
    // public function create(array $orderDetails);
    // public function update($orderId, array $newDetails);
}