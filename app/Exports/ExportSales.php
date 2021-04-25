<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\model\sell;

class ExportSales implements FromCollection,WithHeadings

{
    public function headings():array
    {
        return['Date','Registration','Chalan','Invoice','Chasis','Engine','Model','Value','Discount','Net Value'];
    }
    public function collection()
    {
      return collect(sell::all('Date','Registration_no','Chalan_no','Invoice_no','Chasis','Engine','Model','Value','Discount','net_value'));
    }
}
