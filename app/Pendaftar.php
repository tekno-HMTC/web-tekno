<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
  protected $fillable = [
      'nama','nrp' ,'pilihan1', 'alasanPilihan1','pilihan2', 'alasanPilihan2','pilihan3', 'alasanPilihan3',
  ];
}
