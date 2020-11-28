<?php

namespace App\Exports;

use App\contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class contactExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return contact::all();
    }
    public function headings():array{
       return ["ID","Name", "Email", "Mobile","Message"];

    }
}
