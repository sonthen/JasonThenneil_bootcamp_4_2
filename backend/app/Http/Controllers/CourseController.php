<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function addStudent(Request $request){

        //untuk rollback data jika ada yang error sebagian
        DB::beginTransaction();

        try{
            

            $this->validate($request, [
                'name' => 'required',
                'gender' => 'required',
                'email'=> 'required|email'
            ]);

            $name = $request->input('name');
            $gender = $request->input('gender');
            $birth_date = $request->input('birth_date');
            $phone = $request->input('phone');
            $email = $request->input('email');
            

            //save ke database(eloquent)

            $stu = new student;
            $stu->name = $name;
            $stu->gender = $gender;
            $stu->birth_date = $birth_date;
            $stu->phone = $phone;
            $stu->email = $email;
            
            $stu->save();

            $Student= student::get();
            //temannya beginTransaction(); untuk commit data
            DB::commit();
            return response()->json($Student, 201);
        }
        catch(\Exception $e){

            //temannya beginTransaction(); untuk rollback
            DB::rollback();
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }



    function updateStudent(Request $request){

        //untuk rollback data jika ada yang error sebagian
        DB::beginTransaction();

        try{
            

            $this->validate($request, [
                'id' => 'required',
                'name' => 'required',
                'gender' => 'required',
                'email'=> 'required|email'
            ]);
            $id = $request->input('id');
            $name = $request->input('name');
            $gender = $request->input('gender');
            $birth_date = $request->input('birth_date');
            $phone = $request->input('phone');
            $email = $request->input('email');
            

            //save ke database(eloquent)

            // $p = product::where ('id','=','1')->first();
            // $p->name="newprodedited";
            // $p->save();
            $stu = student::where ('id','=',$id->first();
            $stu->name = $name;
            $stu->gender = $gender;
            $stu->birth_date = $birth_date;
            $stu->phone = $phone;
            $stu->email = $email;
            
            $stu->save();

            $Student= student::get();
            //temannya beginTransaction(); untuk commit data
            DB::commit();
            return response()->json($Student, 201);
        }
        catch(\Exception $e){

            //temannya beginTransaction(); untuk rollback
            DB::rollback();
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

}
