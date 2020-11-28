<?php

namespace App\Exports;

use App\student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class studentExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return student::all();
    }
    public function headings():array
    {
        return ["SR. NO.", "name", "email","phone","DOB","address","gender","photo","sign","college name","branch","passig year","college address","HSC result","SSC result","leaving cirtificate"];
    }
}
