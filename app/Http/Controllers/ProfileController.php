<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class ProfileController extends Controller
{

    /**
     * Display the user's profile.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('profile.show', ['user' => $user]);
    }
    
    /**
     * Display the user's profile form for editing.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        // Check if the authenticated user is the same as the user being edited or if the authenticated user is an admin
        if (Auth::user()->id == $user->id || Auth::user()->isAdmin()) {
            return view('profile.edit', ['user' => $user]);
        } else {
            return redirect()->back()->with('error', 'You do not have permission to edit this profile.');
        }
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Check if the authenticated user is the same as the user being edited or if the authenticated user is an admin
        if (Auth::user()->id == $user->id || Auth::user()->isAdmin()) {
            $user->fill($request->validated());

            if ($user->isDirty('email')) {
                $user->email_verified_at = null;
            }

            $user->save();

            return Redirect::route('profile.edit', $user->id)->with('status', 'profile-updated');
        } else {
            return redirect()->back()->with('error', 'You do not have permission to edit this profile.');
        }
    }

    /**
     * Show the form for deleting the user's profile.
     */
    public function showDeleteForm($id)
    {
        $user = User::findOrFail($id);

        // Check if the authenticated user is the same as the user being deleted or if the authenticated user is an admin
        if (Auth::user()->id == $user->id || Auth::user()->isAdmin()) {
            return view('profile.delete', ['user' => $user]);
        } else {
            return redirect()->back()->with('error', 'You do not have permission to delete this profile.');
        }
    }

    /**
     * Delete the user's profile.
     */
    public function destroy(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Check if the authenticated user is the same as the user being deleted or if the authenticated user is an admin
        if (Auth::user()->id == $user->id || Auth::user()->isAdmin()) {
            // Validate the password
            $request->validate([
                'password' => ['required', 'password'],
            ]);

            $user->delete();

            return Redirect::route('home')->with('status', 'profile-deleted');
        } else {
            return redirect()->back()->with('error', 'You do not have permission to delete this profile.');
        }
    }
}
