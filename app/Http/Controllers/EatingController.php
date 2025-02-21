<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eating;

class EatingController extends Controller
{
    public function update(Request $request, $id)
    {
        // バリデーション例（必要に応じてルールを調整）
        $validated = $request->validate([
            'type'   => 'required|in:morging,noon,evennig,snack',
            'result' => 'required|in:comp,8th,5th,3th,none',
            'time'   => 'required',
            // 'date' => 'required|date',  // 必要ならば
        ]);

        // 対象の Eating レコードを取得して更新
        $eating = Eating::findOrFail($id);
        $eating->update($validated);

        return redirect()->back()->with('status', '更新が完了しました');
    }
}

