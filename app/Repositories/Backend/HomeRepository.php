<?php

namespace App\Repositories\Backend;

use App\Interfaces\Backend\HomeRepositoryInterface;
use App\Models\Backend\Home;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\Backend\HomeRequest;
use Illuminate\Support\Str;

class HomeRepository implements HomeRepositoryInterface 
{

    /**
     * ダミークラスの作成
     */
    public function getNewList(){
        Log::debug('log_start:'.__FUNCTION__);
        
        $obj = new \stdClass();

        $obj->id= '';
        $obj->name= '';
        $obj->post_number= '';
        $obj->address= '';
        $obj->tel= '';
        $obj->fax= '';
        
        $ret = [];
        $ret = $obj;

        Log::debug('log_end:'.__FUNCTION__);
        return $ret;
    }
    
    /**
     * 全データ取得
     */
    public function getAll() 
    {
        return Home::all();
        // dd(Home::pagenate(20));
        // return Home::pagenate(20);
    }

    /**
     * idからデータ取得
     */
    public function getById($id) 
    {
        return Home::findOrFail($id);
    }

    /**
     * 登録分岐
     */
    // 引数でクラス指定は必要か??
    public function tryEntry(HomeRequest $request){
        Log::debug('start:' .__FUNCTION__);

        // バリデーション
        $validated = $request->validated();

        $id = $request->input('id');

        if($id == ''){

            return $this->create($request);

        }else{

            return $this->update($id, $request);

        }
    }

    /**
     * 新規登録
     */
    private function create($request) 
    {
        Log::debug('start:' .__FUNCTION__);
        $result = Str::random(10);
        $email = $result. '@gmail.com';

        return Home::create([
            'name' => $request->name,
            'email' => $email,
            'post_number' => $request->post_number,
            'address' => $request->address,
            'tel' => $request->tel,
            'fax' => $request->fax,
        ]);
    }

    /**
     * 編集登録
     */
    private function update($id, $request) 
    {
        Log::debug('start:' .__FUNCTION__);
        $result = Str::random(10);
        $email = $result. '@gmail.com';

        return Home::where('id', '=', $id)->update([
            'name' => $request->name,
            'email' => $email,
            'post_number' => $request->post_number,
            'address' => $request->address,
            'tel' => $request->tel,
            'fax' => $request->fax,
        ]);
    }

    /**
     * 削除
     */
    public function delete($id) 
    {
        Home::destroy($id);
    }
}