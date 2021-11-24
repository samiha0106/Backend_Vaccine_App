<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use App\Hospital;
use App\Reservation;


class RegistrationController extends Controller
{
    public function store(Request $req){
    $registration = new Registration;
    $registration->name = $req->input ('name');
    $registration->age = $req->input ('age');
    $registration->gender = $req->input ('gender');
    $registration->occupation = $req->input ('occupation');
    $registration->maritial_status = $req->input ('maritial status');
    $registration->date_of_birth = $req->input ('date of birth');
    $registration->phone_no = $req->input ('phone no');
    $registration->address = $req->input ('address');
    $registration->zone = $req->input ('zone');
    $registration->vaccine_center = $req->input ('vaccine_center');
    $registration->date_of_vaccine = $req->input ('date of vaccine');
    $registration->time_of_vaccine = $req->input ('time of vaccine');
    $registration->save();

    // $BSSMU = $req->input('BSSMU');
    // $Mugda_Hospital = $req->input('Mugda Hospital');
    // $Ibn_Sina = $req->input('Ibn Sina');
    // $Mirpur_Health_care= $req->input('Mirpur Health care');
    // $Praava_Health = $req->input('Praava Health');

  
    return $registration;

   
    }
    public function index()
    {
        return Registration::all();
    }
    // public function Hospital(){
    //   $hospital=new Hospital();
    //   $hospital->center_name = $req->input ('center_name');
    // }
}
