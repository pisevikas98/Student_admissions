<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use App\student;
use PDF;
use App\Exports\studentExport;
use App\Exports\contactExport;
use Maatwebsite\Excel\Facades\Excel;
use Mail;
use App\scholarship;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function abotus(){
        return view('abotus');
    }


    public function contact_us(){
        return view('contact_us');
    }

    public function examination(){
        return view('examination');
    }

    public function examinationsave(Request $request){
        $data = new contact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->msg = $request->msg;

        $title="User Registration";
        $message = "Thank you for Joining With BizNest.";
        // $email = $request->email;
        $message_data = ["message" => $message, "email"=> $request->email];
        Mail::send('Thankyou', ['title' => $title, 'message_data' => $message_data], function ($message) use($message_data)
        {
            $message->from('therathdorahul@gmail.com');
            $message->to($message_data['email'])->subject('Thank you for Joining With BizNest.');
        });

        $data->save();

     return redirect('examinationread')->with('success','student contact details save successfully!');


    }
    public function examinationread(){
        $data = contact::all();
        return view('examinationread',compact('data'));
    }

    public function examinationedit($rahul_id){
        $data = contact::find($rahul_id);
        return view('examinationedit',compact('data'));
    }

    public function examinationupdate(Request $request,$rahul_id){
        $data = contact::find($rahul_id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->msg = $request->msg;
        $data->save();

     return redirect('examinationread')->with('success','student contact data updated successfully!');

    }

    public function examinationdelete($rahul_id){
        $data = contact::find($rahul_id);
        $data->delete();

        return redirect('examinationread')->with('success','student contact data deleted successfully!');
    }
    public function examinationexport(){
    return Excel::download(new contactExport, 'contact.xlsx');

    }

    public function admission(){
        return view('admission');
    }

    public function admissionform(){
        return view('admissionform');
    }

    public function admissionformsave(Request $request){
        $data = new student();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->dob = $request->dob;
        $data->address = $request->address;
        $data->gender = $request->gender;


        $photo = time().'.'.$request->photo->extension();  
        $request->photo->move(public_path('photo'), $photo);
        $data->photo = $photo;


        $sign = time().'.'.$request->sign->extension();  
        $request->sign->move(public_path('sign'), $sign);
        $data->sign = $sign;

        $data->college_name = $request->college_name;
        $data->branch = $request->branch;
        $data->passing_year = $request->passing_year;
        $data->clg_address = $request->clg_address;


        $hsc = time().'.'.$request->hsc->extension();  
        $request->hsc->move(public_path('hsc'), $hsc);
        $data->hsc = $hsc;

        $scc = time().'.'.$request->ssc->extension();  
        $request->ssc->move(public_path('ssc'), $scc);
        $data->ssc = $scc;


        $leaving = time().'.'.$request->leaving->extension();  
        $request->leaving->move(public_path('leaving_certificate'), $leaving);
        $data->leaving = $leaving;

        $title="User Registration";
        $message = "Thank you for Joining With BizNest.";
        // $email = $request->email;
        $message_data = ["message" => $message, "email"=> $request->email];
        Mail::send('Thanks', ['title' => $title, 'message_data' => $message_data], function ($message) use($message_data)
        {
            $message->from('therathdorahul@gmail.com');
            $message->to($message_data['email'])->subject('Thank you for Joining With BizNest.');
        });


        $data->save();

        return redirect('admissionformread')->with('success','student details save successfully!');

    }
     
     public function admissionformread(){
        $data = student::all();
        return view('admissionformread',compact('data'));
     }

     public function admissionformedit($pise_id){
        $data = student::find($pise_id);
         // dd($data);
        return view('admissionformedit',compact('data'));
     }

     public function admissionformupdate(Request $request,$pise_id){
        // dd($request->photo == null);
        // dd($pise_id);
        $data = student::find($pise_id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->dob = $request->dob;
        $data->address = $request->address;
        $data->gender = $request->gender;

        if($request->hasFile('photo')) {
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $photo->move(public_path('photo'), $filename);
        $service->photo = $request->file('photo')->getClientOriginalName();
    }

        if($request->hasFile('sign')) {
        $sign = $request->file('sign');
        $filename = $sign->getClientOriginalName();
        $sign->move(public_path('sign'), $filename);
        $service->sign = $request->file('sign')->getClientOriginalName();
    }
        $data->college_name = $request->college_name;
        $data->branch = $request->branch;
        $data->passing_year = $request->passing_year;
        $data->clg_address = $request->clg_address;

        if($request->hasFile('hsc')) {
        $hsc = $request->file('hsc');
        $filename = $hsc->getClientOriginalName();
        $hsc->move(public_path('hsc'), $filename);
        $service->hsc = $request->file('hsc')->getClientOriginalName();
    }

         if($request->hasFile('ssc')) {
        $ssc = $request->file('ssc');
        $filename = $ssc->getClientOriginalName();
        $ssc->move(public_path('ssc'), $filename);
        $service->ssc = $request->file('ssc')->getClientOriginalName();
    }

         if($request->hasFile('leaving')) {
        $leaving = $request->file('leaving');
        $filename = $leaving->getClientOriginalName();
        $leaving->move(public_path('leaving'), $filename);
        $service->leaving = $request->file('leaving')->getClientOriginalName();
    }


        $data->save();

        return redirect('admissionformread')->with('success','student details update successfully!');

     }
     public function admissionformdelete($pise_id){
        $data = student::find($pise_id);
        $data->delete();

        return redirect('admissionformread')->with('success','student details Delete successfully!');

     }
     public function admissionformPdf(){
        $data = student::all();
         $pdf = PDF::loadView('admissionformPdf', compact('data'));
  
        return $pdf->download('student_pdf.pdf');
     }
     public function admissionexport(){

     return Excel::download(new studentExport, 'student.xlsx');

     }

     public function syllabus(){
        return view('syllabus');
     }

     public function scholarship(){
        return view('scholarship');
     }
     public function scholarshipsave(Request $request){
        $data = new scholarship();
        $data->name = $request->name;
        $data->amout = $request->amout;
        $data->income = $request->income;
        $data->domicile = $request->domicile;
        $data->non_criminal = $request->non_criminal;
        $data->cast = $request->cast;
        $data->aadhar = $request->aadhar;
        $data->pan = $request->pan;
        $data->Save();

        return redirect('scholarship')->with('success','student scholarship details save successfully!');


     }
}
