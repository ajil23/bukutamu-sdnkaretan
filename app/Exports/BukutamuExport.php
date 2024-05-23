<?php

namespace App\Exports;

use App\Models\Bukutamu;
use Maatwebsite\Excel\Concerns\FromCollection;

class BukutamuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bukutamu::all();
    }
}
