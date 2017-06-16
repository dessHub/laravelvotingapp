<?php

namespace App\Http\Controllers;

use App\User;
use App\Election;
use App\County;
use App\Constituency;
use App\Aspirant;
use App\Agent;
use App\Ward;
use App\Voter;
use App\Docket;
use App\Party;
use Validator;
use Auth;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Mail;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function counties()
    {
        $name = County::get();
        return view('counties')->with('counties', $name);
    }

    protected function addCounty() {
      $rules = array(
              'name' => 'required|max:100|unique:counties',
              'code' => 'required|max:100|unique:counties'
          );

          $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/counties')
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // report has passed all tests!
        // let him enter the database

        // create the data for report
        $county = new County;
        $county->name     = Input::get('name');
        $county->code     = Input::get('code');
        $county->constituencies     = Input::get('constituencies');

        // save report
        $county->save();

        // redirect ----------------------------------------
        // redirect our user back to the form so they can do it all over again
        return Redirect::to('/counties');
         }

    }

   public function getdockets()
   {
       $name = Docket::get();
       return view('dockets')->with('dockets', $name);
   }

   protected function addDocket() {
     $rules = array(
             'name' => 'required|max:100|unique:dockets',
         );

         $validator = Validator::make(Input::all(), $rules);

   // check if the validator failed -----------------------
   if ($validator->fails()) {

       // get the error messages from the validator
       $messages = $validator->messages();

       // redirect our user back to the form with the errors from the validator
       return Redirect::to('/dockets')
           ->withErrors($validator);

   } else {
       // validation successful ---------------------------

       // report has passed all tests!
       // let him enter the database

       // create the data for report
       $docket = new Docket;
       $docket->name     = Input::get('name');

       // save report
       $docket->save();

       // redirect ----------------------------------------
       // redirect our user back to the form so they can do it all over again
       return Redirect::to('/dockets');
        }

   }

protected function delDock($id) {

$hit = Docket::find($id);
$hit->delete();
return Redirect::to('/dockets');
}

public function getDocks()
{
   $name = Docket::get();
   return view('docketapp')->with('dockets', $name);
}

protected function appDock($id) {
  $ver = Voter::where('user_id','=',Auth::user()->id)->where('status','=','verified')->count();
  if($ver < 1){
    return view('400');
  }else {
$count = Aspirant::where('user_id','=',Auth::user()->id)->count();
if($count > 0){
  return view('200a');
}else {
  $docket = Docket::find($id);
  $party = Party::get();
$hit = Election::where('status','=', "open")->get();
$conts = Voter::where('user_id','=',Auth::user()->id)->get();
return view('aspApp')->with('elections', $hit)->with('conts', $conts)->with('docket', $docket)->with('parties', $party);
}
}

}

 protected function aspirantapp() {
   $rules = array(
           'election' => 'required|max:100',
           'county' => 'required|max:100',
           'name' => 'required|max:100'
       );

       $validator = Validator::make(Input::all(), $rules);

 // check if the validator failed -----------------------
 if ($validator->fails()) {

     // get the error messages from the validator
     $messages = $validator->messages();
     $id = Input::get('dock_id');

     // redirect our user back to the form with the errors from the validator
     return Redirect::to('/appDock'.$id)
         ->withErrors($validator);

 } else {
     // validation successful ---------------------------

     // report has passed all tests!
     // let him enter the database
     $id = Input::get('dock_id');

     $aspirant = new Aspirant;
     $aspirant->type     = Input::get('election');
     $aspirant->party     = Input::get('party');
     $aspirant->date     = Input::get('date');
     $aspirant->name     = Input::get('name');
     $aspirant->regNo     = Input::get('regNo');
     $aspirant->user_id     = Input::get('id');
     $aspirant->phoneno     = Input::get('phoneno');
     $aspirant->email     = Input::get('email');
     $aspirant->gender     = Input::get('gender');
     $aspirant->county     = Input::get('county');
     $aspirant->constituency     = Input::get('constituency');
     $aspirant->ward     = Input::get('ward');

     // save report
     $aspirant->save();

     // redirect ----------------------------------------
     // redirect our user back to the form so they can do it all over again
     return view('200a');
      }
    }

  protected function verifAsp() {

  $hit = Aspirant::where('status','=','unverified')->get();;
  return view('aspverifications')->with('aspirants', $hit);
  }


public function getparties()
{
   $name = Party::get();
   return view('parties')->with('parties', $name);
}

protected function addParty() {
 $rules = array(
         'name' => 'required|max:100|unique:parties',
     );

     $validator = Validator::make(Input::all(), $rules);

// check if the validator failed -----------------------
if ($validator->fails()) {

   // get the error messages from the validator
   $messages = $validator->messages();

   // redirect our user back to the form with the errors from the validator
   return Redirect::to('/parties')
       ->withErrors($validator);

} else {
   // validation successful ---------------------------

   // report has passed all tests!
   // let him enter the database

   // create the data for report
   $party = new Party;
   $party->name     = Input::get('name');
   $party->slogan     = Input::get('slogan');

   // save report
   $party->save();

   // redirect ----------------------------------------
   // redirect our user back to the form so they can do it all over again
   return Redirect::to('/parties');
    }

}

protected function delParty($id) {

$hit = Party::find($id);
$hit->delete();
return Redirect::to('/parties');
}


   public function getCont($id)
   {
       $name = County::where('id','=',$id)->get();
       $c = "";
       foreach($name as $key){
         $c = $key->name;
       }
       $conts = Constituency::where('county','=', $c)->get();
       return view('constForm')->with('counties', $name)->with('constituencies', $conts);
   }

    protected function addCont() {
      $rules = array(
              'name' => 'required|max:100|unique:constituencies',
              'wards' => 'required|max:100'
          );

          $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();
        $id = Input::get('id');

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/addCont'.$id)
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // report has passed all tests!
        // let him enter the database

        $id = Input::get('id');
        $count = Constituency::where('county','=',Input::get('county'))->count();
        if($count >= Input::get('conts')){
          return Redirect::to('/addCont'.$id);
        }else {
        // create the data for report
        $counts = new Constituency;
        $counts->name     = Input::get('name');
        $counts->county     = Input::get('county');
        $counts->wards     = Input::get('wards');

        // save report
        $counts->save();

        // redirect ----------------------------------------
        // redirect our user back to the form so they can do it all over again
        return Redirect::to('/addCont'.$id);
         }
       }

    }

   public function getWard($id)
   {
       $name = Constituency::where('id','=',$id)->get();
       $c = "";
       $coun = "";
       foreach($name as $key){
         $c = $key->name;
         $coun = $key->county;
       }
       $conts = Ward::where('constituency','=',$c)->where('county','=',$coun)->get();
       return view('wardForm')->with('conts', $name)->with('wards', $conts);
   }

    protected function addWard() {
      $rules = array(
              'name' => 'required|max:100',
              'county' => 'required|max:100'
          );

          $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();
        $id = Input::get('id');

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/addWard'.$id)
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // report has passed all tests!
        // let him enter the database

        $id = Input::get('id');
        $count = Ward::where('county','=',Input::get('county'))->where('constituency','=',Input::get('constituency'))->count();
        if($count >= Input::get('conts')){
          return Redirect::to('/addWard'.$id);
        }else {
        // create the data for report
        $wards = new Ward;
        $wards->name     = Input::get('name');
        $wards->county     = Input::get('county');
        $wards->constituency     = Input::get('constituency');

        // save report
        $wards->save();

        // redirect ----------------------------------------
        // redirect our user back to the form so they can do it all over again
        return Redirect::to('/addWard'.$id);
         }
       }

    }

   public function setdates()
   {
       $name = Election::get();
       return view('dates')->with('elections', $name);

   }

    protected function addDate() {
      $rules = array(
              'type' => 'required|max:100',
              'year' => 'required|max:100',
              'date' => 'required|max:100|unique:elections'
          );

          $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/setdates')
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // report has passed all tests!
        // let him enter the database

        $election = new Election;
        $election->type     = Input::get('type');
        $election->year     = Input::get('year');
        $election->date     = Input::get('date');

        // save report
        $election->save();

        // redirect ----------------------------------------
        // redirect our user back to the form so they can do it all over again
        return Redirect::to('/setdates');
         }
       }

  protected function deletedate($id) {

    $hit = Election::find($id);
    $hit->delete();
    return Redirect::to('/setdates');
  }

protected function types() {

$hit = Election::get();;
return view('types')->with('elections', $hit);
}

protected function apply($id) {
$count = Voter::where('type_id','=', $id)->where('user_id','=',Auth::user()->id)->count();
if($count > 0){
  return view('200');
}else {
$hit = Election::where('id','=', $id)->get();
$conts = Constituency::get();
$county = County::get();
$wards = Ward::get();
return view('applevel1')->with('elections', $hit)->with('constituencies', $conts)->with('counties', $county)->with('wards', $wards);
}
}

 protected function voterapp() {
   $rules = array(
           'election' => 'required|max:100',
           'year' => 'required|max:100',
           'date' => 'required|max:100'
       );

       $validator = Validator::make(Input::all(), $rules);

 // check if the validator failed -----------------------
 if ($validator->fails()) {

     // get the error messages from the validator
     $messages = $validator->messages();
     $id = Input::get('election_id');

     // redirect our user back to the form with the errors from the validator
     return Redirect::to('/apply'.$id)
         ->withErrors($validator);

 } else {
     // validation successful ---------------------------

     // report has passed all tests!
     // let him enter the database
     $id = Input::get('election_id');

     $voter = new Voter;
     $voter->type     = Input::get('election');
     $voter->type_id     = Input::get('election_id');
     $voter->date     = Input::get('date');
     $voter->name     = Input::get('name');
     $voter->regNo     = Input::get('regNo');
     $voter->user_id     = Input::get('id');
     $voter->phoneno     = Input::get('phoneno');
     $voter->email     = Input::get('email');
     $voter->gender     = Input::get('gender');
     $voter->county     = Input::get('county');
     $voter->constituency     = Input::get('constituency');
     $voter->ward     = Input::get('ward');

     // save report
     $voter->save();

     // redirect ----------------------------------------
     // redirect our user back to the form so they can do it all over again
     return Redirect::to('/apply'.$id);
      }
    }

  protected function getVerify() {

  $hit = voter::where('status','=','unverified')->get();;
  return view('verifications')->with('voters', $hit);
  }

protected function verify($id) {

$hit = Voter::findOrFail($id);
$county = County::where('name','=',$hit->county)->get();
$conts = Constituency::where('name','=', $hit->constituency)->get();
$ward = Ward::where('name','=',$hit->ward)->get();

$voter_obj = new Voter();
$voter_obj->id = $id;
$voter = Voter::find($voter_obj->id); // Eloquent Model
$voter->update(['status' => "verified"]);

foreach($county as $key){
  $total = $key->voters + 1;
  $i = $key->id;
  $con_obj = new County();
  $con_obj->id = $i;
  $con = County::find($con_obj->id); // Eloquent Model
  $con->update(['voters' => $total]);
}

foreach($conts as $key){
  $total = $key->voters + 1;
  $i = $key->id;
  $con_obj = new Constituency();
  $con_obj->id = $i;
  $con = Constituency::find($con_obj->id); // Eloquent Model
  $con->update(['voters' => $total]);
}

foreach($ward as $key){
  $total = $key->voters + 1;
  $i = $key->id;
  $con_obj = new Ward();
  $con_obj->id = $i;
  $con = Ward::find($con_obj->id); // Eloquent Model
  $con->update(['voters' => $total]);
}

return Redirect::to('/verify');
}





}
