<?php

namespace App\Exports;

use App\Models\Custom;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class QuotesExport implements FromCollection , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Custom::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'name',
            'email',
            'phone',
            'indoor / outdoor',
            'Help',
            'created_at',
            'created_at',
        ];
    }
}
