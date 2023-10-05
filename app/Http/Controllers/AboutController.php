<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    private $about_data = [
        ["id"=>"1", "img"=>"https://variety.com/wp-content/uploads/2022/08/Jonah-Hill.jpg?w=1000" , "name"=>"Arthur" , "job"=>"Technical Director"],
        ["id"=>"2", "img"=>"https://static01.nyt.com/images/2015/06/30/multimedia/opdoc-convo3/opdoc-convo3-superJumbo.jpg", "name"=>"Noah" , "job"=>"Operations Director"],
        ["id"=>"3", "img"=>"https://img.washingtonpost.com/posteverything/wp-content/uploads/2016/07/norton.jpg", "name"=>"William" , "job"=>"Support Director"],
        ["id"=>"4", "img"=>"https://media.cnn.com/api/v1/images/stellar/prod/120125042220-evan-p-apfelbaum.jpg?q=w_1500,h_2100,x_0,y_0,c_fill", "name"=>"Stephen" , "job"=>"Design Director"],


    ];
    function go_about(){
        return view('about',['about_data'=>$this->about_data]);

  
    }
}
