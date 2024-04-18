<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BuucucController;
use App\Http\Controllers\DieukienController;
use App\Http\Controllers\LoptcController;
use App\Http\Controllers\HocController;
use App\Http\Controllers\HocphanController;
use App\Http\Controllers\SinhvienController;
use App\Http\Controllers\QuanLiHienThiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hienthi', function () {
//     return view('hienthi');
// });

//Đưa thông tin cho người dùng xem
Route::get('/hienthi', [QuanLiHienThiController::class, 'index'])->name('hienthi');
Route::get('/hp', [QuanLiHienThiController::class, 'indexHP'])->name('hienthiHP');
Route::get('/dk', [QuanLiHienThiController::class, 'indexDK'])->name('hienthiDK');
Route::get('/ltc', [QuanLiHienThiController::class, 'indexLTC'])->name('hienthiLTC');
Route::get('/sv', [QuanLiHienThiController::class, 'indexSV'])->name('hienthiSV');
Route::get('/hc', [QuanLiHienThiController::class, 'indexHoc'])->name('hienthiHoc');

//Đưa ra thanh tìm kiếm cho người dùng sử dụng
Route::get('/sv',[QuanLiHienThiController::class,'searchSV'])->name('hienthi.hienthiSV');
Route::get('/hp',[QuanLiHienThiController::class,'searchHP'])->name('hienthi.hienthiHP');
Route::get('/dk',[QuanLiHienThiController::class,'searchDK'])->name('hienthi.hienthiDK');
Route::get('/ltc',[QuanLiHienThiController::class,'searchLTC'])->name('hienthi.hienthiLTC');
Route::get('/hc',[QuanLiHienThiController::class,'searchHoc'])->name('hienthi.hienthiHoc');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//Học Phần
Route::get('/hocphan',[HocphanController::class,'index'])->name('hocphans.index');
Route::get('/hocphan/create',[HocphanController::class,'create']);
Route::post('/hocphan',[HocphanController::class,'store']);
Route::get('/hocphan/{MaHP}/edit',[HocphanController::class,'edit']);
Route::post('/hocphan/{MaHP}',[HocphanController::class,'update']);
Route::get('/hocphan/{MaHP}',[HocphanController::class,'show']);
Route::delete('/hocphan/{MaHP}',[HocphanController::class,'destroy']);
// Route::delete('/hocphan/{MaHP}', [HocphanController::class,'delete']);
// Route::delete('/hocphan/search', [HocphanController::class,'search']);
Route::get('/hocphan',[HocphanController::class,'search'])->name('hocphans.index');

//Điều Kiện
Route::get('/dieukien',[DieukienController::class,'index'])->name('dieukiens.index');
Route::get('/dieukien/create',[DieukienController::class,'create']);
Route::post('/dieukien',[DieukienController::class,'store']);
Route::get('/dieukien/{MaHPDK}/edit',[DieukienController::class,'edit']);
Route::post('/dieukien/{MaHPDK}',[DieukienController::class,'update']);
Route::get('/dieukien/{MaHPDK}',[DieukienController::class,'show']);
Route::delete('/dieukien/{MaHPDK}',[DieukienController::class,'destroy']);
// Route::delete('/dieukien/{MaHPDK}', [DieukienController::class,'delete']);
Route::delete('/dieukien/search', [DieukienController::class,'search']);
Route::get('/dieukien',[DieukienController::class,'search'])->name('dieukiens.index');

//Lớp TC
Route::get('/loptc',[LoptcController::class,'index'])->name('loptcs.index');
Route::get('/loptc/create',[LoptcController::class,'create']);
Route::post('/loptc',[LoptcController::class,'store']);
Route::get('/loptc/{MaLop}/edit',[LoptcController::class,'edit']);
Route::post('/loptc/{MaLop}',[LoptcController::class,'update']);
Route::get('/loptc/{MaLop}',[LoptcController::class,'show']);
Route::delete('/loptc/{MaLop}',[LoptcController::class,'destroy']);
// Route::delete('/loptc/{MaLop}', [LoptcController::class,'delete']);
Route::delete('/loptc/search', [LoptcController::class,'search']);
Route::get('/loptc',[LoptcController::class,'search'])->name('loptcs.index');


//Sinh viên
Route::get('/sinhvien',[SinhvienController::class,'index'])->name('sinhviens.index');
Route::get('/sinhvien/create',[SinhvienController::class,'create']);
Route::post('/sinhvien',[SinhvienController::class,'store']);
Route::get('/sinhvien/{MaSV}/edit',[SinhvienController::class,'edit']);
Route::post('/sinhvien/{MaSV}',[SinhvienController::class,'update']);
Route::get('/sinhvien/{MaSV}',[SinhvienController::class,'show']);
Route::delete('/sinhvien/{MaSV}',[SinhvienController::class,'destroy']);
// Route::delete('/sinhvien/{MaSV}', [SinhvienController::class,'delete']);
Route::delete('/sinhvien/search', [SinhvienController::class,'search']);
Route::get('/sinhvien',[SinhvienController::class,'search'])->name('sinhviens.index');


//Học
Route::get('/hoc',[HocController::class,'index'])->name('hocs.index');
Route::get('/hoc/create',[HocController::class,'create']);
Route::post('/hoc',[HocController::class,'store']);
Route::get('/hoc/{id}/edit',[HocController::class,'edit']);
Route::post('/hoc/{id}',[HocController::class,'update']);
Route::get('/hoc/{id}',[HocController::class,'show']);
Route::delete('/hoc/{id}',[HocController::class,'destroy']);
// Route::delete('/hoc/{id}', [HocController::class,'delete']);
Route::delete('/hoc/search', [HocController::class,'search']);
Route::get('/hoc',[HocController::class,'search'])->name('hocs.index');


//BOOKC
Route::get('/book',[BookController::class,'index'])->name('books.index');
Route::get('/book/create',[BookController::class,'create']);
Route::post('/book',[BookController::class,'store']);
Route::get('/book/{id}/edit',[BookController::class,'edit']);
Route::post('/book/{id}',[BookController::class,'update']);
Route::get('/book/{id}',[BookController::class,'show']);
Route::delete('/book/{id}',[BookController::class,'destroy']);
// Route::delete('/book/{id}', [BookController::class,'delete']);
Route::delete('/book/search', [BookController::class,'search']);
});

require __DIR__.'/auth.php';