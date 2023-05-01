<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function index(){
   $data = array();
   $data ['title'] = "Blade";
   $students[] = array ("no"=> 1,"npm"=>212310004 , "name"=>"Muhamad Agus", "gender"=>"Laki-Laki", "alamat"=> "JL Ciawi",);
   $students[] = array ("no"=> 2,"npm"=>212310009 , "name"=>"Bagas", "gender"=>"Laki-laki", "alamat"=> "JL Melati",);
   $students[] = array ("no"=> 3,"npm"=>212310010 , "name"=>"Aurel", "gender"=>"Perempuan", "alamat"=> "JL Kamboja",);
   $students[] = array ("no"=> 4,"npm"=>212310011 , "name"=>"Ananda", "gender"=>"Perempuan", "alamat"=> "JL Bonsai",);
   $students[] = array ("no"=> 5,"npm"=>212310012 , "name"=>"Adika", "gender"=>"Laki-laki", "alamat"=> "JL Beringin",);
   $students[] = array ("no"=> 6,"npm"=>212310013 , "name"=>"Steven", "gender"=>"Laki-laki", "alamat"=> "JL Delima",);
  
   $data['students']= $students;
   return view('modules.home.home')->with("data",$data);
 }   
}