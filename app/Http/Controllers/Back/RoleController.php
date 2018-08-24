<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\
    {   Http\Controllers\Controller,
        Http\Requests\RoleRequest,
        Models\Role
    };

class RoleController extends Controller
{
    /**
     * Display a listing of the categories.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $roles = Role::oldest('title')->withCount('posts')->get();
        $role = Role::get();

        return view('back.roles.index', compact ('role'));
    }

    /**
     * Show the form for creating a new categorie.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.roles.create');
    }

    /**
     * Store a newly created categorie in storage.
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        Role::create($request->all());

        return redirect(route('roles.index'))->with('role-ok', __('The Role has been successfully created'));
    }

    /**
     * Show the form for editing the specified categorie.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $category)
    {
        return view('back.roles.edit', compact ('role'));
    }

    /**
     * Update the specified categorie in storage.
     *
     * @param  \App\Http\Requests\RoleRequest  $request
     * @param  \App\Models\Role  $category
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, Role $role)
    {
        $role->update($request->all());

        return redirect(route('roles.index'))->with('role-ok', __('The role has been successfully updated'));
    }

    /**
     * Remove the specified categorie from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete ();

        return response ()->json ();
    }
}
