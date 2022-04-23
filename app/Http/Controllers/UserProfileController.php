<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\UserProfile;
use App\Http\Requests\UserProfileRequest;


class UserProfileController extends Controller
{
   use Helper;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserProfileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfile $userProfile)
    {
        
            return view('profiles.show', compact('userProfile'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProfile $userProfile)
    {
        return view('profiles.edit', compact('userProfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserProfileRequest  $request
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(UserProfileRequest $request)
    {
        try{

            $userProfile = UserProfile::find(auth('web')->user()->id);

        if ($request->filled('password')) {
            $request->merge(['password' => bcrypt($request->password)]);
        }
        $fileName = "";
        if ($request->has('img')) {

            $fileName = uploadImage('users', $request->photo);
        }

        $userProfile->update([
            'name' => $fileName,
            'img' => $request->img,
            'phone'=>$request->phone,
            'birthday'=>$request->birthday,
        ]);
        return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);

    }catch(\Exception $e){
    return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاولة فيما بعد']);

    }  
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfile $userProfile)
    {
        //
    }
}