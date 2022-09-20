<?php

namespace App\Exports;

use App\Models\Custom;
use Maatwebsite\Excel\Concerns\FromCollection;

class QuotesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Custom::all();
    }
}
