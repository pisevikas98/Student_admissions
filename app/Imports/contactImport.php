<?php

namespace App\Imports;

use App\contact;
use Maatwebsite\Excel\Concerns\ToModel;

class contactImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new contact([
            //
        ]);
    }
}
