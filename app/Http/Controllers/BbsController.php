<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BbsController extends Controller
{
    //
    public function index()
    {


        $context = ['bb' => Bb::latest()->get()];
        return view('posts', $context);

    }
    public function detail(Bb $bb)
    {
        return view('detail', ['b' => $bb]);
    }
    public function adduser()
    {
        $user = new User();
        $user = User::create([
            'name' => 'Vovan',
            'email' => 'vovan@invox.ru',
            'password' => Hash::make('vovan')
        ]); 


    }
    public function addPost()
    {
        $user = new User();
        $user = User::find(1);
        $user->bbs()->create(
            [
                'title' => 'Грузовик',
                'content' => 'Грузовик большой и тяжелый',
                'price' => 2000.20
            ]
        );






    }
}
