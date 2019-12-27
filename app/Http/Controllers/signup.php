<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signup extends Controller
{
    public function edit(){
        $signup = signUp::find(1);
        if (empty($signup))
        return view('auth.signUp');
    }

    public function update(Request $request)
{
    // 因為沒有特別建立create頁面，所以特別判斷資料庫中是否有資料可以更新
    $signup = signUp::find(1);
    if (empty($website)) {
        // 沒有資料 -> 新增
        $signup = new signUp;
    }
    $signup->email = $request->input('email');
    $signup->password = $request->input('password');
    
    $website->save();
    return redirect()->route('auth.signUp');
}
}
