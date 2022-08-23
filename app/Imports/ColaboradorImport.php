<?php

namespace App\Imports;

use App\Models\ModelsColaborador;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Facades\Excel;

class ColaboradorImport implements ToModel , WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ModelsColaborador([
           'filial'=> $row['filial'],
           'matricula'=>$row['matricula'],
           'nome'=>$row['nome'],
           'posicao'=>$row['posicao'],
           'email'=>$row['email'],
           'gestor'=>$row['gestor'],
           'update_at'=>time(),
           'create_at'=>time()
        ]);
    }
}
