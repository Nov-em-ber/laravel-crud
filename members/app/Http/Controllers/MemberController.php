<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('members.index', compact('members'));
    }
    public function create()
    {
        return view('members.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:20',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:members',
        ]);
        Member::create($request->all());

        return redirect() -> route('members.index');
    }

    public function edit(Member $member)
    {
        return view('members.edit', compact('member'));
    }
    
    public function update(Request $request, Member $member)
    {
        $request -> validate([
            'name' => 'required|string|max:20',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:members,email,'.$member->id,
        ]);

        $member->update($request->all());

        return redirect()->route('members.index');
    }

    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()->route('members.index');
    }

}
