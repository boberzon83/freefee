<?php

namespace App\Imports;

use App\Models\Customer;
use App\Models\Distributor;
use App\Models\Log;
use App\Models\Product;
use App\Models\SaleItem;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\{Importable, ToModel};
use Maatwebsite\Excel\Concerns\WithStartRow;

class SaleItemImport implements ToModel, WithStartRow
{
    use Importable;

    private $sale_id;
    private $distributor_id;

    public function startRow(): int
    {
        return 2;
    }

    public function __construct(int $sale_id, int $distributor_id) 
    {
        $this->sale_id = $sale_id;
        $this->distributor_id = $distributor_id;
    }

    public function model(array $row)
    {

        //Obtener valores
        $id_distributor = 1;
        $id_customer = Customer::where('cif',$row[0])->first()->id;
        $id_product = Product::where('sku',$row[1])->first()->id;
        $name = Product::where('sku',$row[1])->first()->name;;
        $description = Product::where('sku',$row[1])->first()->description;
        $price = Product::where('sku',$row[1])->first()->price;;
        $sku = $row[1];
        $year = $row[3];
        $month_item = 4;

        //Crear registros por cada mes
        for ($month = 0; $month < 12; $month++){
            $item = $month_item + $month;
            $total_month = $month + 1;
            if($row[$item]){
                //Comprobar si ya existe este registro del mes para este cliente y distribuidor
                $saleitem = SaleItem::where('year', $year)
                    ->where('month', $total_month)
                    ->where('id_product', $id_product)
                    ->where('id_distributor', $id_distributor)
                    ->where('id_customer', $id_customer)
                    ->first();
                if($saleitem){
                    //Actualizar el registro
                    $saleitem->total = $row[$item];
                    $saleitem->save();
                }else{
                    SaleItem::create([
                        'id_sale' => $this->sale_id,
                        'id_product' => $id_product,
                        'id_distributor' => $id_distributor,
                        'id_customer' => $id_customer,
                        'name' => $name,
                        'description' => $description,
                        'price' => $price,
                        'sku' => $sku,
                        'total' => $row[$item],
                        'year' => $year,
                        'month' => $total_month,
                        'status' => 1,
                    ]);

                    //Crear registro en log
                    $user_id = Auth::user()->id;
                    $distributor = Distributor::where('id', $id_distributor)->first();
                    $module = 'Ventas';
                    $action = 'El distribuidor "'.$distributor->name.'" ha realizado la subida de las ventas del mes '.$total_month.'/'.$year.'';
                    Log::addLog($user_id,$module,$action);
                }
                
            }
        }
        

    }
}
