<?php

namespace App\Services\admin;

use App\Models\obat;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class obatService {
   public function createobat($request) {
      $newobat = $request->validated();
      
      $newobat["obat_photo"] = $request->file('obat_photo')->store('public/uploaded-obat-photo');
      $newobat["excerpt"] = Str::limit(strip_tags($request->obat_description, 20));

      $obat = obat::create($newobat);
      return $obat;
   }

   public function getobatDetailById($id) {
      $obat = obat::with('category')->where('obats.id', '=', $id)->first();
      return $obat;
   }

   public function getobatForEditById($id) {
      $obat = obat::where('obats.id', '=', $id)->first();
      return $obat;
   }

   public function updateobat($request, $obat) {
      $updateobat = $request->validated();
      
      $updateobat["excerpt"] = Str::limit(strip_tags($request->obat_description, 20));

      if ($request->file('obat_photo')) {
         $updateobat["obat_photo"] = $request->file('obat_photo')->store('public/uploaded-obat-photo');
         Storage::delete($request->oldobatImage);
      }

      $obat->update($updateobat);
   }

   public function findobatToDelete($id) {
      $obat = obat::where('obats.id', '=', $id)->first();
      return $obat;
   }

   public function deleteobat($obat) {
      Storage::delete($obat->obat_photo);
      $obat->delete();
   }
}