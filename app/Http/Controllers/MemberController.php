<?php

namespace App\Http\Controllers;

use App\Member;
use App\status;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('compro.join', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|min:3|max:58',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => '',
            'jenis_kelamin' => 'required:in:P,L'
        ]);
        $member = Member::create($validatedData);
        $status = new Status;
        $status->bagian = $request->input('bagian');
        $status->pekerjaan = $request->input('pekerjaan');
        $member->status()->save($status);
        $request->session()->flash('pesan', "Data {$validatedData['nama']} Berhasil Disimpan");
        return redirect()->route('members.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        return view('compro.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('compro.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $validatedData = $request->validate([
            'nama' => 'required|min:3|max:58',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => '',
            'jenis_kelamin' => 'required:in:P,L'
        ]);
        $member->update($validatedData);
        $member->status->bagian = $request->bagian;
        $member->status->pekerjaan = $request->pekerjaan;
        $member->status->save();
        return redirect()->route('members.show', compact('member'))->with('pesan', "Update Data {$validatedData['nama']} Berhasil");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('members.join')->with('pesan', "Hapus Data Variabel $member->nama Berhasil");
    }
}
