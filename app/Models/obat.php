<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
   use HasFactory;

   protected $guarded = ['id'];

   public function category()
   {
      return $this->belongsTo(Category::class);
   }

   public function favorite()
   {
      return $this->hasMany(Favorite::class);
   }

   public function transactionDetail()
   {
      return $this->hasMany(TransactionDetail::class);
   }
}
