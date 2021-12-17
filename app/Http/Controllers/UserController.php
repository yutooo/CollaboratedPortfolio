<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userAll(){

        $users = User::latest()->get();
        $user = Auth::user();

        //管理者なら管理者ページ、それ以外は個人の編集
        if($user->role==1){
            return view('user.userAllAdmin')
            ->with(['users'=> $users]);
        }
        else{
            return view('user.userAll')
            ->with(['users'=> $users]);
        }
    }

    //userAllUpdate投げたのに変更が反映されず、userAllに行っちゃう
    // public function userAllUpdate(UserRequest $request, User $user){

    //     $aaa=$user->role;
    //     $bbb= $request->role;

    //     return view('test')
    //     ->with(['aaa'=>$aaa]);
    // }


    public function userAllUpdate(UserRequest $request, User $user){
        // $users = User::latest()->get();

        dd('aaaa');
        $user->role = $request->role;
        $user->save();

        return view('test');
        // ->route('user.userAll');
    }

    public function userDestroy(User $user){
        $user->delete();

             return redirect()
        ->route('user.userAll');
    }

    public function edit(){
        $user = Auth::user();

        return view('user.userEditPrivate')
        ->with(['user'=> $user]);
    }

    // public function update(UserRequest $request){
    //     $user = User::find(Auth::id());
    //     $user->email = $request->email;
    //     $user->password = $request->password;
    //     $user->name = $request->name;
    //     $user->class = $request->class;
    //     $user->save();

    //     return redirect()
    //     ->route('user.userAll');
    // }

    public function update(UserRequest $request, User $user){

        $user->email = $request->email;
        $user->password = Hash::make($request->password);//ハッシュ化
        $user->name = $request->name;
        $user->class = $request->class;
        $user->save();

        return redirect()
        ->route('user.userAll');
    }
}
