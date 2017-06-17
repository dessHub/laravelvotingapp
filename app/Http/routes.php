<?php

namespace App\Http\Controllers;

use App\User;
use App\Election;
use App\County;
use App\Constituency;
use App\Aspirant;
use App\Agent;
use App\Ward;
use App\Party;
use Validator;
use Auth;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$this::get('/', function () {
    return view('welcome');
});

$this::get('/aspirants',function() {

$hit = Aspirant::where('status','=','verified')->get();;
return view('aspirants')->with('aspirants', $hit);
});

$this::get('/results',function() {

$hit = Aspirant::where('status','=','verified')->orderBy('docket')->get();
return view('results')->with('aspirants', $hit);
});


$this->get('/signup', function () {
     $counties = County::get();
     $conts = Constituency::get();
     $wards = Ward::get();
    return view('auth/register')->with('counties', $counties)->with('conts', $conts)->with('wards', $wards);
});

$this::auth();

$this::get('/home', 'HomeController@index');

$this->get('counties', 'IndexController@counties');
$this->post('counties', 'IndexController@addCounty');
$this->get('addCont{id}', 'IndexController@getCont');
$this->post('addCont', 'IndexController@addCont');
$this->get('addWard{id}', 'IndexController@getWard');
$this->post('addWard', 'IndexController@addWard');
$this->get('dockets', 'IndexController@getdockets');
$this->post('dockets', 'IndexController@addDocket');
$this->get('delDock{id}', 'IndexController@delDock');
$this->get('parties', 'IndexController@getparties');
$this->post('parties', 'IndexController@addParty');
$this->get('delParty{id}', 'IndexController@delParty');
$this->get('appDock', 'IndexController@getDocks');
$this->get('appDock{id}', 'IndexController@appDock');
$this->post('appDock', 'IndexController@aspirantapp');
$this->get('verifAsp', 'IndexController@getAsp');
$this->get('aspverify{id}', 'IndexController@aspverify');

$this->get('setdates', 'IndexController@setdates');
$this->post('setdates', 'IndexController@addDate');
$this->get('deletedate{id}', 'IndexController@deletedate');

$this->get('types', 'IndexController@types');
$this->get('apply{id}', 'IndexController@apply');
$this->post('voterapp', 'IndexController@voterapp');
$this->get('verify', 'IndexController@getVerify');
$this->get('verify{id}', 'IndexController@verify');

$this->get('load{id}', 'IndexController@load');
$this->post('cast', 'IndexController@cast');
