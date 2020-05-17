<?php

namespace App\Imports;

use App\Wholesaler;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToCollection ;
use Illuminate\Support\Collection;
class LeadsImport implements  WithHeadingRow, ToCollection
{

    public function headingRow(): int
    {
        return 1;
    }

    public function collection(Collection $collection)
    {
        foreach ($collection as $row)
        {
            try{
            Wholesaler::create([
                'ext_id'     => $row['id'],
                'name'    => $row['imya'],
                'sername' => $row["familiya"],
                'phone'    => $row["telefon"],
                'city'    => $row["gorod"],
                'group'    => $row["gruppa"],
                'active'    => boolval($row["vklyucheno"]),
                'manager'    => $row["manager"],
            ]);
            }catch(\Illuminate\Database\QueryException $e){
                var_dump('EXCEPTION');
                continue;
            }
        }
    }
}
