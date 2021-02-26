<?php
// Glimpse CST-256 Assessment
// Assessment Controller
// Collin Willis
// 2/26/21


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\UserModel;
use App\Services\Business\SecurityService;


class AssessmentController
{

    public function checkUser(Request $request) 
    {
        //Set posted properties to variables
        $username = request()->get('username');
        $password = request()->get('password');
        $firstName = request()->get('firstName');
        $lastName = request()->get('lastName');
        
        //Create new User object using posted variables.
        $newUser = new UserModel($username, $password, $firstName, $lastName);
        
        //Create a new Security Service
        $securityservice = new SecurityService();
        
        //Set variable 'result' to the return of the CheckValues() function.
        $result = $securityservice->checkValues($newUser);
        
        
        //Return the Assessment page with the result.
        return view('assessment')->with('result', $result)->with('username', $username)->with('password', $password)
                                  ->with('firstName', $firstName)->with('lastName', $lastName);
     
    }
    


}
