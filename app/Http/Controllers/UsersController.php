<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;

class UsersController extends Controller
{
    public function __construct()
    {
        //$this->middleware('admin');
    }

    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $title = "Users";
        $roles = [
            'roles' => \App\Role::get()->pluck('title', 'id')->prepend('Please select', ''),
        ];
        $sites = [
            'sites' => \App\Site::get()->pluck('site', 'id')->prepend('Please select', ''),
        ];
        return view('pages.users.index', compact('users', 'title', 'roles', 'sites'));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'roles' => \App\Role::get()->pluck('title', 'id')->prepend('Please select', ''),
            'sites' => \App\Site::get()->pluck('site', 'id')->prepend('Please select', ''),
        ];

        return view('pages.users.create', $relations);
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsersRequest $request)
    {
        //User::create($request->all());
        $user = new User([
        'name' => $request->get('name'),
        'domain'=> $request->get('domain'),
        'role_id'=> $request->get('role_id'),
        'site_id'=> $request->get('site_id'),
        'password' => bcrypt($request->get('password')),
        ]);
        if($user->save()){
          return redirect('/users')->with('success', 'User Created!');
        }
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'roles' => \App\Role::get()->pluck('title', 'id')->prepend('Please select', ''),
            'sites' => \App\Site::get()->pluck('site', 'id')->prepend('Please select', '')
        ];

        $user = User::findOrFail($id);

        return view('pages.users.edit', compact('user') + $relations);
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsersRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect('/users')->with('success', 'Akun berhasil diedit');

    }


    /**
     * Display User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
        $relations = [
            'roles' => \App\Role::get()->pluck('title', 'id')->prepend('Please select', ''),
        ];

        $user = User::findOrFail($id);

        return view('pages.users.show', compact('user') + $relations);
    }


    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/users')->with('success', 'User Deleted!');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = User::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
