<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Member;

class UserController extends Controller
{
    public function __construct(Member $member,City $city)
    {
        $this->member = $member;
        $this->city = $city;
    }

    public function fetchDataFromCity()
    {
        $requestedCity = $this->member->with('city')->get();
        return view('view',compact('requestedCity'));
    }

    public function fetchDataFromName()
    {
        $requestedName = $this->city->with('member')->get();
        // dd($requestedName);
        return view('view',compact('requestedName'));
    }
}
