<?php

namespace App\Services\user;

use App\Models\obat;
use App\Models\Favorite;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;

class TransactionService {
   public function showProductDetail($id) {
      $obat = obat::where('obats.id', '=', $id)->first();
      $favorite = Favorite::where('obat_id', '=', $id)->where('user_id', '=', auth()->user()->id)->first();

      $productDetail = [
         'obat' => $obat,
         'favorite' => $favorite
      ];

      return $productDetail;
   }

   public function orderobat($request, $id) {
      $transactionHeader = TransactionHeader::create([
         'user_id' => auth()->user()->id
      ]);

      $obat = obat::where('id', $id)->first();
      $transactionDetail = TransactionDetail::create([
         'transaction_header_id' => $transactionHeader->id,
         'obat_id' => $obat->id,
         'quantity' => $request->quantity
      ]);
      
      return $transactionDetail;
   }

   public function paymentConfirmation($id) {
      $transaction = TransactionDetail::with('obat')->where('id', '=', $id)->first();
      return $transaction;
   }

   public function cancelTransaction($transactionDetail) {
      $transactionHeader = TransactionHeader::find($transactionDetail->transaction_header_id);
      
      $obatId = $transactionDetail->obat_id;

      $transactionHeader->delete();
      $transactionDetail->delete();

      return $obatId;
   }

   public function showOngoingTransactions() {
      $ongoingTransactions = TransactionDetail::with([
         'transactionHeader.status', 
         'obat'
      ])
      ->join('transaction_headers', 'transaction_details.transaction_header_id', '=', 'transaction_headers.id')
      ->has('obat')
      ->where('transaction_headers.user_id', '=', auth()->user()->id)
      ->whereIn('transaction_headers.status_id', [1, 2])
      ->latest('transaction_headers.transaction_date')
      ->get();

      return $ongoingTransactions;
   }

   public function showSucceedTransactions() {
      $succeedTransactions = TransactionDetail::with([
         'transactionHeader.status', 
         'obat'
      ])
      ->join('transaction_headers', 'transaction_details.transaction_header_id', '=', 'transaction_headers.id')
      ->has('obat')
      ->where('transaction_headers.user_id', '=', auth()->user()->id)
      ->whereIn('transaction_headers.status_id', [3])
      ->latest('transaction_headers.transaction_date')
      ->get();

      return $succeedTransactions;
   }

   public function showTransactionDetail($id) {
      $transactionDetail = TransactionDetail::with('obat')->where('transaction_details.id', '=', $id)->first();

      return $transactionDetail;
   }

   public function updateTransactionStatus($request) {
      $transactionHeader = TransactionHeader::find($request->transactionId);
      $transactionHeader->update(['status_id' => 3]);
   }
}