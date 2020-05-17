<?php

namespace App\Containers\Wholesalers\Imports;

use App\Wholesaler;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToCollection ;
use Illuminate\Support\Collection;
class WholesalersImport implements  WithHeadingRow, ToCollection
{

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
/*    public function model(array $row)
    {
        return new Wholesaler([
            'ext_id'     => $row['id'],
            'name'    => $row['imya'],
            'sername' => $row["familiya"],
            'phone'    => $row["telefon"],
            'city'    => $row["gorod"],
            'group'    => $row["gruppa"],
            'active'    => boolval($row["vklyucheno"]),
            'manager'    => $row["manager"],
        ]);
    }*/

    public function headingRow(): int
    {
        return 1;
    }

    public function collection(Collection $collection)
    {
        foreach ($collection as $row)
        {
          var_dump($row["telefon"]);
            try{
                \App\Containers\Wholesalers\Models\Wholesalers::create([
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
