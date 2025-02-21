<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    // 一覧表示
    public function index()
    {
        $members = Member::all();
        return view('members', compact('members'));
    }

    public function show($id)
    {
        // 実際にレコードを取得するために findOrFail を呼び出す
        // また、リレーション名は Member モデルで "eat" と定義しているのでそれを使用
        $personalData = Member::with('eat')->findOrFail($id);
        return view('memberdata', compact('personalData'));

    }

    public function update($id)
    {
        $personalData = Member::with('eat')->findOrFail($id);
        // Eating テーブルの 'type' カラムに許容されるenum値の配列
        $selectTypes = ['morging', 'noon', 'evennig', 'snack'];
        $selectResults = ['comp', '8th', '5th', '3th', 'none'];
        return view('memberupdate', compact('personalData', 'selectResults', 'results'));
    }
    

    // 新規作成
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'age'  => 'required',
            'gender'  => 'required',
        ]);

        Member::create($validated);

        return redirect('/members');
    }
}
