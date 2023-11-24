<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        return Inertia::render('Users/Index', [
            'users' => UserResource::collection(User::query()->when(Request::input('search'), function ($query, $search) {
                    $query->where('name', 'like', "%{$search}%");
                })
                ->paginate(10)
                ->withQueryString()),

            'filters' => Request::only('search'),

            'can' => [
                'createUser' => Auth::user()->can('create', User::class)
            ]
        ]);
    }

    public function show(User $user)
    {
        return Inertia::render('Users/Show', [
            'user' => UserResource::make($user)
        ]);
    }

    public function create()
    {
        return Inertia::render('Users/Create');
    }

    public function store() {
        $attributes = Request::validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        User::create($attributes);

        return redirect('users');
    }
}
