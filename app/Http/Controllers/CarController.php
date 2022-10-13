<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function insertAll() {
        DB::table("cars")->insert([
            ["brand" => "BMW", "productyear" => 2017],
            ["brand" => "Citroen", "productyear" => 2012],
            ["brand" => "Audi", "productyear" => 2014],
        ]);
        DB::table("color")->insert([
            ["color" => "white"],
            ["color" => "black"],
            ["color" => "yellow"],
        ]);
        echo "<h1>Adatok feltoltve</h1>";
    }


    public function listCars() {
        $cars = DB::table("cars")
        ->join("color", "cars.id", "=", "color.id")->get();
        echo "<pre>";
        print_r($cars);
    }

    public function selectBrand() {
        $cars = DB::table("cars")
        ->select("cars.brand")
        ->join("color", "cars.id", "=", "color.id")->get();
        echo "<pre>";
        print_r($cars);
    }

    
}
