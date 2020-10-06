<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all(); //lấy ra hết hoặc $students = Student::orderBy('id','desc')->get();
        return view('test-admin', ['list' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->gender = $request->gender;
        $student->age = $request->age;
        $student->address = $request->address;
        $student->is_active = $request->is_active;
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // nếu chỉ truyền vào $student -> chỉ nhận đc id của student
        // $studentObjEloquentModel = Student::find($student);
        // $studentObjQueryBuiler = DB::table('students')->find($student);
        // dd($studentObjEloquentModel, $studentObjQueryBuiler);
        // nếu truyền Student $student -> thực hiện truy vấn tìm student có id
        // $studentObj = $student;
        return view('students.show', ['Showstudents' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', ['Editstudent' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //gán giá trị mới chop các thuộc tính cần sửa
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->gender = $request->gender;
        $student->age = $request->age;
        $student->address = $request->address;
        $student->is_active = $request->is_active;
        //thực hiện phương thức save() để lưu
        $student->save();

        //cách 2:
        // $student->update(['name'=>$request->name]);

        //trở về index
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //kiểm tra tồn tại sinh viên -> xóa
        if ($student) {
            $student->delete();
        }
        //cach 2:
        //Student::destroy($student->id);

        //trở về index
        return redirect()->route('students.index');
    }
}
