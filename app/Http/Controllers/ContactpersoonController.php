<?php

namespace App\Http\Controllers;

use App\Contactpersoon;
use Illuminate\Http\Request;
use App\Http\Requests\ContactpersoonRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactpersoonMail;

class ContactpersoonController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth', ['except' => ['create', 'store','mail']]);
    }
    
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
        return view('contactpersoon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactpersoonRequest $request)
    {
        $data = $request->all();
        $contactpersoon = Contactpersoon::create($data);
        
        session()->flash('bericht', 'De gegevens werden verstuurd. We nemen binnenkort contact op');        
        $this->mail('teveranderen@fake.be',$contactpersoon);
        $this->mail($contactpersoon['email'], $contactpersoon);
        return ['message' => 'Contactpersoon stored'];
    }

    public function mail($email,$contactpersoon){
      Mail::to($email)->send( new ContactpersoonMail($contactpersoon));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Contactpersoon  $contactpersoon
     * @return \Illuminate\Http\Response
     */
    public function show(Contactpersoon $contactpersoon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contactpersoon  $contactpersoon
     * @return \Illuminate\Http\Response
     */
    public function edit(Contactpersoon $contactpersoon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contactpersoon  $contactpersoon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contactpersoon $contactpersoon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contactpersoon  $contactpersoon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contactpersoon $contactpersoon)
    {
        //
    }
}
