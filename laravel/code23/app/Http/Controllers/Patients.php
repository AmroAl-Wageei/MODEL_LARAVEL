<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Patients extends Controller
{
    
    public function New_patients() {
        
        return " Dr . Abd ";
    }
    public function Create_patients() {

        return " Create Patients ";
    }
    public function Edit_patients($id) {

        return " Edit_patients $id ";
    }
    public function Delete_patients($id) {

        return " Delete_patients $id ";
    }
}
