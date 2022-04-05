<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fanpage extends Model
{
    public $fillable= ['id_user','tinggi_badan','berat_badan','no_telp','jenis_kelamin','agama','hobi','prestasi','pekerjaan','kewarganegaraan','moto'];
}
