<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::create([
            'name' => 'fornecedor X',
            'url' => 'fornecedorx.com.br',
            'uf' => 'BA',
            'email' => 'contato@fornecedorx.com.br',
        ]);

        Supplier::create([
            'name' => 'fornecedor Y',
            'url' => 'fornecedory.com.br',
            'uf' => 'BA',
            'email' => 'contato@fornecedory.com.br',
        ]);
    }
}
