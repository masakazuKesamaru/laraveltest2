<?php

namespace App\Http\Controllers;

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
