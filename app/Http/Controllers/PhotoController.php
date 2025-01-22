<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\CardioFormRequest;
use Validator;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request /*CardioFormRequest $request*/)
    {

        //Form validation
       /* $result = $request->validate([
            'passport' => 'required',
            'name' => 'bail|required|min:12',
            'password' => 'required'
         ]);*/

         //Or using Custom request CardiomRequest
         //$validated = $request->validated();
         //var_dump($validated);
         //exit();

        //Or using Validator facade

        /*$validator = Validator::make($request->all(),
            [
                'passport' => 'required',
                'name' => 'bail|required|min:12',
                'password' => 'required'
            ]
            );

            if( $validator->fails()){
                return redirect()->route('test')->withErrors($validator)->withInput();

            }*/

         //to make a custom request validation
         // php artisan make request cardioFormRequest (for example)

         

                     //$request->url();
            //$request->fullUrl();
            //$request->is(admin/*);
            //$request->isMethod('post'), or get
            //$request->input('name');
            //$request->name;
            //$request->all();
            //$request->query('name'); through the url
            //$request->only('name'); only the input or $request->only('name', 'password') more of the input
            //$request->only(['name']); only the input or $request->only(['name', 'password']) more of the input
            //$request->except('name'); only the input or $request->except('name', 'password') more of the input
            //$request->except(['name']); only the input or $request->except(['name', 'password']) more of the input
            //request->input('products.0.name'); of input of an array
            /*if($request->has('name')){
                    echo to check if request has name
            }*/
            /*if($request->has(['name','email'])){
                    echo to check if request has name and email
            }*/
            /*if($request->filled('name')){
                    echo to check if a value in pressent on the request and it is not empty
            }*/

            //get request of hold input
            /*  $request->flash();
                $request->flashOnly(['name', 'email']);
                $request->flashExcept(['name']);
                return redirect('form')->withInput();
                return redirect('form')->withInput(
                    $request->except('password');
                );
            */

            //request old input
            //$request->old('name');

            //retriveing cookie from request;
            //$name = $request->cookie('name');
            //or using cookie facades
            //$name = Cookie::get('name');

            //Attaching cookie to response
            // return response('hello')->cookie('name', 'value', 'duration of time');
            // Or using cookie facade to queue cookie 
            // Cookie:: queue(Cookie::make('name', 'value', 'duration of time'));
            // Cookie:: queue('name', 'value', 'duration of time');
            
            //retrieving file from request
            // $request->file('passport'); or $request->passport;
            // check if file present on the request
            /* if($request->hasFile('passport')){

            }*/

            /* if($request->file('passport')->isValid()){

            }*/

            //get file upload path
            //$request->passport->path();
            //get file extention
            //$request->passport->extention();

            // how to save file into storage folder using store() or storeAs() function
            /*if($request->file('passport')->store('public/me')){
                echo 'uploaded';
                exit();
            }*/

            /*if($request->passport->store('public/me')){
                echo 'uploaded';
                exit();
            }*/

           /* if($request->passport->store('me', 'public')){
                echo 'uploaded';
                exit();
            }*/

            //or how to upload file in a folder in public folder of laravel
           /* $file = $request->passport;
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            echo 'upload';
            exit();
            */

            // Responses in with header
            //return response('Hello', 200)->header('Content-Type', 'text/plain');
            //OR use withHeaders
            //return response('Hello', 200)->withHeader(['Content-Type' => 'text/plain']);
            // back to the same route with input
            //return back()->withInput();
            //redirect to a named route
            //return redirect()->route('login')
            //redirect to a named route with an id
            //return redirect()->route('login', ['id'=1]);
            // redirect with an id gotten from an eloquent model
            //return redirect()->route('profile', [$user]);
            //redirect with flash session data
            //return redirect('dshboard')->with('status', 'Profile updated');

            //after user is redirected how to display session flash message in view

           /* @if(sessiion())
               <div class="alert alert-success">
                    {{session('status')}}
               </div>
            @endif
            */

            // View Response
            //return response('Hello', 200)->view('hello', $data, 200)->header('Content-Type', 'text/plain');
            //Json response
            //return response()->json(['name'=>'dayo', 'state'=> 'Lagos']);

            //it is used to generate response that force the users browser to download the file
            //return response()->file($pathtothefile);
            //return response()->file($pathtothefile,$header);


            //file response to display directly in browser
            //return response()->file($pathtothefile);
            //return response()->file($pathtothefile,$header);


            //View and how to pass in data where the data is an array
            //return view('admin', $data)
            // check if view exist using View facade

            /*if(View::exist()){

            }*/

            //how to handle session database
            // create session table thta store the session

           /* Schema::create('sessions', function(){
                $table->string('id')->unique();
                $table->unsignedInteger('user_id')->nullable();
                //..
                //etc
            });
            */
            //use php artisan session:table
            //php artsan migrate
            // or use redis session, but redis needed to be installed
            //retrieving data from session
            //$request->session->get('name') 
            //$request->session->get('name', 'default value') // to set default value for the session

            //Or use global session helper
             // session('key');

            //check if session exist in laravel
            /*if($request->session->has('users')){

            }*/

            /*if($request->session->exists('users')){
                
            }*/

            //Storing data in session using put
            //$request->session()->put('key', 'value');

            //pushing to array session values
            //$request->session->push('user.team', 'developer');

            //retreiving or deleting an item from session 
            //$request->session->pull('key', 'default');


            // How to flash data into session
            //$request->session()->flash('status', 'task was successful');
            // Or to reflash data to session
            //$request->session->reflash();
            //$request->session->keep(['username', 'email']);

            //Deleting Data
            //$request->session()->forget('key');
            //$request->session()->flash();

            //regenerating session ID to prevent malicious users from exploiting

            //$request->session()->regenerate();

            //Log Messages using facades
            //Any log message that is not critical will only be log on the system log
            Log::emergency($message);
            Log::alert($message);
            Log::critical($message);
            Log::error($message);
            Log::warning($message);
            Log::notice($message);
            Log::info($message);
            Log::debug($message);

            //you can also use stack to log into both single and slack to log the message on multiple channel
            Log::stack(['single', 'slack'])->info('something went wrong');


            //In Laravel, guards and providers are used to define how users are authenticated
            //and retrieved from a database. Guards determine how to verify user credentials, 
            //while providers determine how to retrieve user information

        /*'guards' => [
            'web' => [
                'driver' => 'session',
                'provider' => 'users',
            ],
        ],



        'providers' => [
            'users' => [
                'driver' => 'eloquent',
                'model' => App\Models\User::class,
            ],

        ]*/


        //php artisan make auth was remove in laravel 5.8 and the later version of laravel
        //rather it was replace ?
        //it is used install a layout view, registration and login views, routes for all authentication end point
        //and a home controller to handle the authentication






        


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
