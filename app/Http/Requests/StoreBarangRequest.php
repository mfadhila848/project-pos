<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBarangRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'kode' => 'required',
            'nama' => 'required',
            'barcode' => 'required',
            'tebal' => 'required',
            'panjang' => 'required',
            'id_kategori' => 'required',
            'id_supplier' => 'required',
            'id_satuan' => 'required',
            'id_merek' => 'required',
            'id_perusahaan' => 'required',
            'stock' => 'required',
            'stock_minimal' => 'required',
            'harga_beli' => 'required',
            'keuntungan' => 'required',
            'keterangan' => 'required',
            'status' => 'required'
        ];
    }
}
