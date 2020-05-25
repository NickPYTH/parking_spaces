<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowFrames extends Controller #fdfd
{
    public function FramesFill() {

        return view('home', ['free_spaces' => 2, 'image' => 'sector_1.png']);#fdfdfd
        #return view('messages', ['data' => [$contact->find(2)]]); # 2 is id
        #return view('messages', ['data' => [$contact->inRandomOrder()->first()]]); # Random include_once
        #return view('messages', ['data' => $contact->inRandomOrder()->get()]); # All Random изначально сортируеются по полю created_at
        #return view('messages', ['data' => $contact->orderBy('id', 'desk')->get()]); #desk сортировка по убыванию пополям id (asc по возрастанию)
        #return view('messages', ['data' => $contact->orderBy('id', 'asc')->take(2)->get()]); #взять первые 2 записи
        #return view('messages', ['data' => $contact->orderBy('id', 'asc')->skip(1)->get()]); #пропуск одной записи
        #return view('messages', ['data' => $contact->where('subject', '=', 'Subject')->get()]); # все записи где subject имеет 'Subject' (<>, =)
      }
}
