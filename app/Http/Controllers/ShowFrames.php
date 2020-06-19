<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowFrames extends Controller
{
    public function FramesFill() {

        $sector_1_json = 'data_sector_1.json';
        $sector_2_json = 'data_sector_2.json';
        
        $med = file_get_contents("$sector_1_json");
        $sector_1_data = json_decode($med,true);
        $med = file_get_contents("$sector_2_json");
        $sector_2_data = json_decode($med,true);

        $sector_1_free = $sector_1_data["RECORD_"]["FREE_SPACES"];
        $sector_2_free = $sector_2_data["RECORD_"]["FREE_SPACES"];

        if (($sector_2_free) > ($sector_1_free)){
                $data[0][0] = $sector_2_free;
                $data[0][1] = $sector_2_data["RECORD_"]["DATA"];
                $data[0][2] = $sector_2_data["RECORD_"]["TIME"];
                $data[0][3] = 'sector_2_cropped.png';

                $data[1][0] = $sector_1_free;
                $data[1][1] = $sector_1_data["RECORD_"]["DATA"];
                $data[1][2] = $sector_1_data["RECORD_"]["TIME"];
                $data[1][3] = 'sector_1_cropped.png';
        }       
        else {
                $data[0][0] = $sector_1_free;
                $data[0][1] = $sector_1_data["RECORD_"]["DATA"];
                $data[0][2] = $sector_1_data["RECORD_"]["TIME"];
                $data[0][3] = 'sector_1_cropped.png';

                $data[1][0] = $sector_2_free;
                $data[1][1] = $sector_2_data["RECORD_"]["DATA"];
                $data[1][2] = $sector_2_data["RECORD_"]["TIME"];
                $data[1][3] = 'sector_2_cropped.png';
        }

        $image_location = 1;

        return view('home', ['data' => $data]);
        #return view('home', ['data' => $data]); #fdfdfd
        #return view('messages', ['data' => [$contact->find(2)]]); # 2 is id
        #return view('messages', ['data' => [$contact->inRandomOrder()->first()]]); # Random include_once
        #return view('messages', ['data' => $contact->inRandomOrder()->get()]); # All Random изначально сортируеются по полю created_at
        #return view('messages', ['data' => $contact->orderBy('id', 'desk')->get()]); #desk сортировка по убыванию пополям id (asc по возрастанию)
        #return view('messages', ['data' => $contact->orderBy('id', 'asc')->take(2)->get()]); #взять первые 2 записи
        #return view('messages', ['data' => $contact->orderBy('id', 'asc')->skip(1)->get()]); #пропуск одной записи
        #return view('messages', ['data' => $contact->where('subject', '=', 'Subject')->get()]); # все записи где subject имеет 'Subject' (<>, =)
      }


      
      public function SectorOneInfo(){
        $sector_1_json = 'data_sector_1.json';
        $med = file_get_contents("$sector_1_json");
        $sector_1_data = json_decode($med,true);
        $data[0][0] = $sector_1_data["RECORD_"]["FREE_SPACES"];
        $data[0][1] = $sector_1_data["RECORD_"]["DATA"];
        $data[0][2] = $sector_1_data["RECORD_"]["TIME"];
        $data[0][3] = 'sector_1_cropped.png';
        return view('sector_info', ['data' => $data]);
      }

      public function SectorTwoInfo(){
        $sector_2_json = 'data_sector_2.json';
        $med = file_get_contents("$sector_2_json");
        $sector_2_data = json_decode($med,true);
        $data[0][0] = $sector_2_data["RECORD_"]["FREE_SPACES"];
        $data[0][1] = $sector_2_data["RECORD_"]["DATA"];
        $data[0][2] = $sector_2_data["RECORD_"]["TIME"];
        $data[0][3] = 'sector_2_cropped.png';
        return view('sector_info', ['data' => $data]);
      }
}
