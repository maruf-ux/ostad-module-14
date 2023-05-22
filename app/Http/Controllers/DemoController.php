<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    function userInfo(Request $request):string{
        $name = $request->input('name');
        return $name;
    }

    function userAgent (Request $request): string {
        $userAgent = $request->header('User-Agent');
        return $userAgent;
    }

    function apiEndpoint(Request $request){
        $page = $request->query('page',null);
        if($page !== null){
            return $page;
            }
            else{
                return;
            }
        }

        // function jsonResponse():JsonResponse{
        //     $data = array( "message"=> "Success", "data"=>array( "name"=> "John Doe", "age"=> 25 ) );
        // }

        function fileUploads(Request $request):bool{ $file=$request->file('avatar');
        $file->move(public_path('uploads'),$file->getClientOriginalName());
        return true;
    }
    function setCookie(Request $request){
    $rememberToken = $request->cookie('remember_token',null);
    return $rememberToken;
    }

}
