<?php

namespace App\Interfaces\Backend;

use App\Http\Requests\Backend\HomeRequest;

interface HomeRepositoryInterface 
{
    public function getAll();
    public function getNewList();
    public function getById($id);
    public function delete($id);
    public function tryEntry(HomeRequest $request);
    // 多分不要??
    // public function create(array $orderDetails);
    // public function update($orderId, array $newDetails);
}