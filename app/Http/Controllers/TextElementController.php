<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TextElementController extends Controller
{


    public function edit()
    {

        $text = DB::table('text_elements')->get();

        return view('vendor.voyager.text.edit',compact('text'));
    }


    public function update(Request $request)
    {







        DB::table('text_elements')->upsert([

            [
                'id'=>1,
                'name'=>'Įmonė',
                'text'=>$request->form1,


            ],
            [
                'id'=>2,
                'name'=>'Įmonės prisistatymas',
                'text'=>$request->form2,

            ],

            [
                'id'=>3,
                'name'=>'Adresas',
                'text'=>$request->form3,

            ],
            [
                'id'=>4,
                'name'=>'Telefono numeris',
                'text'=>$request->form4,
           ],

            [
                'id'=>5,
                'name'=>'Mob. tel. numeris',
                'text'=>$request->form5,

            ],

            [
                'id'=>6,
                'name'=>'El. paštas',
                'text'=>$request->form6,

            ],

            [
                'id'=>7,
                'name'=>'Darbo laikas',
                'text'=>$request->form7,

            ],

            [
                'id'=>8,
                'name'=>'Trumpas footer tekstas',
                'text'=>$request->form8,

            ],

            [
                'id'=>9,
                'name'=>'Kainų sąrašo viršutinis tekstas',
                'text'=>$request->form9,

            ],



        ], ['id'], ['text']);




        return redirect()->route('text.edit')
            ->with('success', 'Teksto elementai atnaujinti sėkmingai');

    }

}
