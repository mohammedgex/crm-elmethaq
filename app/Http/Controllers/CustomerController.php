<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Delegate;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class CustomerController extends Controller
{
    //
    public function index(){
        $delegates = Delegate::all();
        return view("user-create",[
            "delegates"=> $delegates
        ]);
    }


    public function create(Request $request){
        $customer = new Customer($request->all());
        $customer->passport_id = 'fdshsgfddsh';
        $customer->visa_type_id = "1";
        $customer->visa_peroid_id = "1";
        $customer->customer_group_id = "1";
        $customer->sponser_id = "1";
        $customer->evalution_id = "1";
        $customer->embassy_id = "1";
        $customer->job_title_id = "1";
        $customer->save();

        return redirect()->route('workers');

    }
}
