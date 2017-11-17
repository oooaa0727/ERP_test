<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use App\Supplier;
Route::get('/', function () {
    return view('index');
});

//登入 登出 註冊
Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');



//基本資料->供應商

Route::get('/supplier',['as' =>'supplier.index', function () {
    return view('basic.supplier.supplier');
}]);

//無效↓
Route::get('suppliers',['as' =>'supplier.index','use' =>'SupplierController@index']);


//基本資料->供應商->表單
//無效↓
Route::get('suppliers/create',['as' =>'supplier.create','use' =>'SupplierController@form']);

Route::get('/create',['as' =>'supplier.create', function () {
    return view('basic.supplier.create');
}]);
//基本資料->供應商->新增
Route::post('/store',['as' =>'supplier.store','use' =>'SupplierController@test']);
/*
Route::get('/', function () {
    $suppliers = Supplier::orderBy('created_at', 'asc')->get();

    return view('supplier', [
        'supplier' => $suppliers
    ]);
});

Route::post('/supplier', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'S_name' => 'required|max:20',
    ]);

    if ($validator->fails()) {
        return redirect('/supplier')
            ->withInput()
            ->withErrors($validator);
    }

    $supplier = new Supplier;
    $supplier->S_name = $request->S_name;
    $supplier->save();

    return redirect('/supplier');
});
*/
//基本資料->庫存產品
Route::get('/product',['as' =>'product','uses'=> function (){
    return view('basic.product');
}]);
//基本資料->一般顧客
Route::get('/customer',['as' =>'customer','uses'=> function (){
    return view('basic.customer');
}]);
//基本資料->營造工程
Route::get('/manufacturer',['as' =>'manufacturer','uses'=> function (){
    return view('basic.manufacturer');
}]);
//基本資料->進貨
Route::get('/purchase',['as' =>'purchase','uses'=> function (){
    return view('purchase');
}]);
//基本資料->銷貨
Route::get('/sales',['as' =>'sales','uses'=> function (){
    return view('sales');
}]);

//服務
Route::get('/service',['as' =>'service','uses'=> function () {
    return view('service');
}]);
//設定
Route::get('/setting',['as' =>'setting','uses'=> function () {
    return view('setting');
}]);
//查詢
Route::get('/search',['as' =>'search','uses'=> function () {
    return view('search');
}]);
