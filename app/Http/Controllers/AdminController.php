<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\obat;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\admin\obatRequest;
use App\Services\admin\obatService;
use App\Services\admin\TransactionService;

class AdminController extends Controller
{
   private $obatService;
   private $transactionService;

   public function __construct() {
      $this->obatService = new obatService();
      $this->transactionService = new TransactionService();
   }

   public function showAdminPage() {
      $transactions = $this->transactionService->showTransactions();

      return view('admin.home', [
         'title' => 'Admin',
         'transactions' => $transactions,
         'obats' => obat::all()
      ]);
   }

   public function updateTransactionStatus(Request $request) {
      try {
         $this->transactionService->updateTransactionStatus($request);
         return to_route('admin');
      } catch (Exception $e) {
         return dd($e->getMessage());
      }
   }

   public function showAddobatForm() {
      return view('admin.add-obat', [
         'title' => 'Add obat',
         'categories' => Category::all()
      ]);
   }

   public function addobatSuccess() {
      return view('admin.add-obat-success', [
         'title' => 'Add obat Succeed'
      ]);
   }

   public function showobatDetail($id) {
      $obat = $this->obatService->getobatDetailById($id);

      return view('admin.edit-obat', [
         'title' => 'Edit obat',
         'obat' => $obat
      ]);
   }

   public function showEditobatForm($id) {
      $obat = $this->obatService->getobatForEditById($id);

      return view('admin.update-obat', [
         'title' => 'Update obat',
         'obat' => $obat,
         'categories' => Category::all()
      ]);
   }

   public function updateobatSuccess() {
      return view('admin.update-obat-success', [
         'title' => 'Update obat Succeed'
      ]);
   }    

   public function createobat(obatRequest $request) {
      try {
         $this->obatService->createobat($request);
         return to_route('addobatSuccess');
      } catch (Exception $e) {
         return dd($e->getMessage());
      }
   }

   public function updateobat(obatRequest $request, obat $obat) {
      try {
         $this->obatService->updateobat($request, $obat);
         return to_route('updateobatSuccess');
      } catch (Exception $e) {
         return dd($e->getMessage());
      }
   }

   public function showDeleteobatConfirmation($id) {
      $obat = $this->obatService->findobatToDelete($id);

      return view('admin.delete-obat', [
         'title' => 'Delete obat',
         'obat' => $obat
      ]);
   }

   public function deleteobat(obat $obat) {
      try {
         $this->obatService->deleteobat($obat);
         return to_route('deleteobatSuccess');
      } catch (Exception $e) {
         return dd($e->getMessage());
      }
   }

   public function deleteobatSuccess() {
      return view('admin.delete-obat-success', [
         'title' => 'Delete Medicine Succeed'
      ]);
   }
}