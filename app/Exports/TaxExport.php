<?php

namespace App\Exports;

use App\Tax;
use Maatwebsite\Excel\Concerns\FromCollection;

class TaxExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tax::all();
    }
}
