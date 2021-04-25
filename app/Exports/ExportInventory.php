<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\model\inventory2;

class ExportInventory implements FromCollection,WithHeadings
{
   public function headings():array
   {
      return ['Engine','Chasis','Capacity','Fuel','Color','Brand','Model'];
   }
    public function collection()
    {
        return collect(inventory2::all('engine','chasis','capacity','fuel','color','brand','model'));
    }
}
