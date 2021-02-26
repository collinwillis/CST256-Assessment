<?php
namespace App\Services\Business;
use App\Model\UserModel;
class SecurityService
{

    public function checkValues(UserModel $newUser)
    {
        $string = "CST-256";
        
        //Check if the username is equal to the string
        if($newUser->getUsername() == $string)
        {
            return true;
        }
        else 
        {
            //Check if the password is equal to the string
            if($newUser->getPassword() == $string)
            {
                return true;
            }
            else
            {
                //Check if the First Name is equal to the string
                if($newUser->getFirstName() == $string)
                {
                    return true;
                }
                else 
                {
                    //Check if the Last Name is equal to the string
                    if($newUser->getLastName() == $string)
                    {
                        return true;
                    }
                    else 
                    {
                        return false;
                    }
                }
            }
        }
    }
}

?>