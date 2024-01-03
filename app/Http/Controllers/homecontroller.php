<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function index1()
    {
        return view('index1');
    }

    public function Hospitals()
    {
        return view('services.hospitals.hospitals');
    }
    public function Patholabs()
    {
        return view('services.patholabs');
    }
    public function Doctors()
    {
        return view('services.doctors');
    }

    public function Clinics()
    {
        return view('services.clinics');
    }

    public function bmiCalculator()
    {
        return view('services.healthCalculator.bmiCalculator');
    }

    public function Pregnancycal()
    {
        return view('services.healthCalculator.pregnancycal');
    }

    public function Bodyfatcal()
    {
        return view('services.healthCalculator.bodyfatcal');
    }





}