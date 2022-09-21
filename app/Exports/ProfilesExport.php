<?php

namespace App\Exports;

use App\Models\Profile;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProfilesExport implements FromCollection , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Profile::all();
    }
    public function headings(): array
    {
        return [
            'id',
            'name',
            'last_name',
            'email',
            'phone',
            'indoor / outdoor',
            'size',
            'Custom design',
            'Budget',
            'Amount',
            'created_at',
           
        ];
    }
}
