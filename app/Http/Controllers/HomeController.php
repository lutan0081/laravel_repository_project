<?php

namespace App\Http\Controllers;

use App\Models\Backend\Home;
use App\Interfaces\Backend\HomeRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\Backend\HomeRequest;

class HomeController extends Controller
{

    private HomeRepositoryInterface $homeRepository;

    // コンストラクタ
    public function __construct(HomeRepositoryInterface $homeRepositoryInterface) 
    {
        $this->homeRepository = $homeRepositoryInterface;
    }

    // 初期表示
    public function show()
    {
        Log::debug('start:' .__FUNCTION__);

        $edit_list = [];
        $edit_list = $this->homeRepository->getNewList();

        return view('backend.home')->with([
            "user_list" => [],
            "edit_list" => $edit_list,
         ]);
    }

    // 全データ取得
    public function index()
    {
        Log::debug('start:' .__FUNCTION__);

        $edit_list = [];
        $edit_list = $this->homeRepository->getNewList();

        $user_list = [];
        $user_list = $this->homeRepository->getAll();


        return view('backend.home')->with([
            "user_list" => $user_list,
            "edit_list" => $edit_list,
         ]);
    }

    // 編集表示
    public function showEdit($id)
    {
        Log::debug('start:' .__FUNCTION__);

        $edit_list = [];
        $edit_list = $this->homeRepository->getById($id);

        $user_list = [];
        $user_list = $this->homeRepository->getAll();

        Log::debug('end:' .__FUNCTION__);

        return view('backend.home')->with([
            "user_list" => $user_list,
            "edit_list" => $edit_list,
        ]);
    }

    // 登録分岐
    public function entry(HomeRequest $request)
    {
        Log::debug('start:' .__FUNCTION__);

        // 一覧
        $this->homeRepository->tryEntry($request);

        // ユーザデータ
        $edit_list = [];
        $edit_list = $this->homeRepository->getNewList();

        // 一覧
        $user_list = [];
        $user_list = $this->homeRepository->getAll();


        return view('backend.home')->with([
            "user_list" => $user_list,
            "edit_list" => $edit_list,
         ]);
    }

    // 削除
    public function delete($id)
    {
        Log::debug('start:' .__FUNCTION__);

        // 削除実行
        $this->homeRepository->delete($id);

        // 詳細の値取得
        $edit_list = [];
        $edit_list = $this->homeRepository->getNewList();

        // 一覧取得
        $user_list = [];
        $user_list = $this->homeRepository->getAll();

        Log::debug('end:' .__FUNCTION__);

        return view('backend.home')->with([
            "user_list" => $user_list,
            "edit_list" => $edit_list,
        ]);
    }
}
