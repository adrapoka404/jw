<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestContactStore;
use App\Http\Requests\RequestInformationStore;
use App\Models\Franchise;
use App\Models\TableContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index()
    {
        return view('welcome');
    }

   
    public function contact(RequestContactStore $request)
    {
        $contact = TableContact::create($request->all());
 
        return $contact;
    }

    public function information(RequestInformationStore $request)
    {

        
        $franquicia = Franchise::create($request->all());
 
        return $franquicia;
    }
}