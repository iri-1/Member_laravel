<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();

        return view('index')
            ->with(['members' => $members]);
    }

    public function create()
    {

        return view('members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'phone' => 'required|min:7',
            'email' => 'required|email',
        ], [
            'name.required' => '名前は必須です',
            'name.min' => ':min 文字以上入力してください',
            'phone.required' => '名前電話番号は必須です',
            'phone.min' => ':min 文字以上入力してください',
            'email.required' => 'mailアドレスは有効なメールアドレス形式が必須です',
        ]);

        $member = new Member();
        $member->name = $request->name;
        $member->phone = $request->phone;
        $member->email = $request->email;
        $member->save();

        return redirect()
            ->route('members.index');
    }

    public function edit(Member $member)
    {

        return view('members.edit')
            ->with(['member' => $member]);
    }

    public function update(Request $request,Member $member)
    {
        $request->validate([
            'name' => 'required|min:3',
            'phone' => 'required|min:7',
            'email' => 'required|email',
        ], [
            'name.required' => '名前は必須です',
            'name.min' => ':min 文字以上入力してください',
            'phone.required' => '名前電話番号は必須です',
            'phone.min' => ':min 文字以上入力してください',
            'email.required' => 'mailアドレスは有効なメールアドレス形式が必須です',
        ]);
        $member->name = $request->name;
        $member->phone = $request->phone;
        $member->email = $request->email;
        $member->save();

        return redirect()
            ->route('members.index',$member);
    }

    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()
            ->route('members.index');
    }

}
