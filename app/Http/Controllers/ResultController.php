<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resul;

class ResultController extends Controller
{


    public function form()
    {
        return view("result.form");
    }




    public function insert(Request $request)
    {
        $request->validate([
            's_id'=>'required',
            'd_name'=>'required',
            'institute'=>'required',
            'p_year'=>'required',
        ]);

        // Create a new Student instance
        $data_insert = new Resul;

        // Assign values to the model properties
        $data_insert->s_id = $request->s_id;
        $data_insert->d_name = $request->d_name;
        $data_insert->institute = $request->institute;
        $data_insert->p_year = $request->p_year;

         $data_insert->save();
         return redirect()->route('form')->with('success', 'Result added successfully');
    }

    public function display()
    {
        $result = Resul::all();
        return view("result.result_dashboard", compact("result"));
    }


    public function edit($id)
    {
        $result = Resul::find($id);
        return view("result.edit", compact("result"));
    }




        public function update(Request $request, $id)
    {
        $result = Resul::find($id);
        $result->id= $request->id;
         $result->s_id = $request->s_id;
         $result->d_name = $request->d_name;
         $result->institute = $request->institute;
         $result->p_year = $request->p_year;
         $result->save();
        return redirect()->route('display', $id);
    }

    public function delete($id)
    {
        Resul::find($id)->delete();
        return redirect()->route('display', $id);
    }
}


