<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
  protected $table = "pendaftar";

  protected $fillable = [
      'nama',
      'nrp' ,
      'pilihan_satu', 
      'alasan_pilihan_satu',
      'pilihan_dua', 
      'alasan_pilihan_dua',
      'file_foto',
      'file_cv',
      'portofolio',
      'status',
      'departemen',
      'departemen_nama',
      'question_dept_ngapain',
      'question_dept_proker',
      'question_dept_fungsionaris',
      'question_magang_harapan'
  ];
}
