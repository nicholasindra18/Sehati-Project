<?php

namespace App\Services\user;

use App\Models\obat;
use App\Models\Favorite;

class FavoriteService {
   public function showFavorites() {
      $favorites = Favorite::with('obat')
                  ->where('user_id', '=', auth()->user()->id)
                  ->has('obat')
                  ->get();

      return $favorites;
   }

   public function addFavorite($id) {
      $obat = obat::find($id);

      Favorite::firstOrCreate([
         'obat_id' => $obat->id,
         'user_id' => auth()->user()->id
      ]);
   }

   public function removeFavoriteFromProductDetail($id) {
      $favorite = Favorite::where('obat_id', '=', $id)
                  ->where('user_id', '=', auth()->user()->id)
                  ->first();
      
      $favorite->delete();
   }

   public function removeFavoriteFromFavoritePage($request) {
      $favorite = Favorite::where('id', '=', $request->favoriteId)
                  ->where('user_id', '=', auth()->user()->id)
                  ->first();

      $favorite->delete();
   }
}