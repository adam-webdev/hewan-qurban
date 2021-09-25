<?php

namespace App\Exports;

use App\Models\Sapi;
use Maatwebsite\Excel\Concerns\FromCollection;

class SapiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Sapi::all();
    }
}
