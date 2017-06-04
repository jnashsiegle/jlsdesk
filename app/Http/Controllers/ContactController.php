<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Session;
use Mail;
use Route;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller
{   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Redirect
     */
    public function store(Request $request)
    {
        /*$contacts = Contact::with(['email'])->find($id);*/

                $validator = Validator::make($request->all(), [               
                'firstName'         => 'required|max:255',
                'lastName'          => 'required|max:255',
                'email'             => 'required|max:255|unique:users',
                'companyName'       => 'required|max:255|min:6',  
                'note'              => 'required'               
                /*'organizationType'  =>  ''*/
            ]);
                 if ($validator->fails())
                    {
                       return Redirect::to(URL::previous() . "#contact")
                            ->withErrors($validator)                 
                            ->withInput();
                     } 

                       // Send email / save data to database 
        \Mail::send('pages.contactView',
        array(
            'firstName'         => $request->get('firstName'),
            'lastName'          => $request->get('lastName'),
            'email'             => $request->get('email'),
            'companyName'       => $request->get('companyName'),                    
            'note'              => $request->get('note'),
                   
        ), function($message)
    {
        $message->from('jsiegle@lightpointdev.com');
        $message->to('jsiegle@lightpointdev.com', 'Admin')->subject('Jana Nash-Siegle Portfolio Contact Form Submission');
    });

  
        //Flash Message
        $request->session()->flash('alert-success', 'Thank you for your inquiry. Your email was sent successfully and I will respond as soon as I can! - Jana');
        // Generating Redirects...with message
        return Redirect::to(URL::previous() . "#contact");
        } // end else
    } // end store
