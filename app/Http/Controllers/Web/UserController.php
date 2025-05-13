<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $users = DB::table('users')
        //     ->when($request->input('seacrh'), function ($query, $search) {
        //         return $query->where('name', 'like', "%{$search}%")
        //             ->orWhere('email', 'like', "%{$search}%");
        //     })->select('id', 'name', 'email', 'phone', 'role', DB::raw('DATE_FORMAT(created_at, "%d %M %Y") as created_at'))
        //     ->paginate(10);
        // // dd($users);
        // return view('pages.users.index', [
        //     'users' => $users,
        // ]);

        $users = User::select('id', 'name', 'email', 'phone', 'role', DB::raw('DATE_FORMAT(created_at, "%d %M %Y") as created_at'))
            ->when($request->input('search'), function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            })->paginate(10);


        // $users = DB::table('users')
        //     ->when($request->input('search'), function ($query, $search) {
        //         return $query->where('name', 'like', '%' . $search . '%');
        //     })
        //     ->select('id', 'name', 'email', 'phone', DB::raw('DATE_FORMAT(created_at, "%d %M %Y") as created_at'))
        //     ->orderBy('id', 'desc')
        //     ->paginate(10);
        return view('pages.users.index', compact('users'));

        // $query = User::query();
        // if ($request->has('search') && !empty($request->input('search'))) {
        //     $search = $request->input('search');
        //     $query->where('name', 'like', '%' . $search . '%')
        //         ->orWhere('email', 'like', '%' . $search . '%')
        //         ->orWhere('phone', 'like', '%' . $search . '%');
        // }

        // $users = $query->paginate(10); // Pagination

        // return view('pages.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
