<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Desa extends Model
{
    use HasFactory;
    protected $fillable = ['nama_desa'];

    public function getDesaFromApi()
    {
        $response = Http::get('https://raw.githubusercontent.com/laravolt/indonesia/master/json/villages.json');

        if ($response->failed()) {
            return [];
        }

        return $response->json();
    }
}
