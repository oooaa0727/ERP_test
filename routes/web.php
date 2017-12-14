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

//社群登入
Route::get('auth/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/index', 'HomeController@index')->name('index');


Route::get('reset',['as' =>'reset','uses'=> function (){
    return View('auth.passwords.reset');
}]);

//Test->supplier


Route::group(['prefix' => 'basic'], function() {
    //基本資料->供應商
    Route::get('suppliers',['as' =>'supplier.index','uses' =>'SupplierController@index']);
    //基本資料->供應商->查詢
    Route::post('suppliers/search',['as' =>'supplier.search','uses' =>'SupplierController@search']);
    //基本資料->供應商->表單
    Route::get('suppliers/create',['as' =>'supplier.create','uses' =>'SupplierController@create']);
    //基本資料->供應商->新增
    Route::post('suppliers',['as' =>'supplier.store','uses' =>'SupplierController@store']);
    //基本資料->供應商->編輯
    Route::get('suppliers/{id}/edit', ['as' => 'supplier.edit' , 'uses' => 'SupplierController@edit']);
    //基本資料->供應商->更新
    Route::patch('suppliers/{id}',['as'=>'supplier.update','uses'=> 'SupplierController@update']);
    //基本資料->供應商->刪除
    Route::delete('suppliers/{id}',['as'=>'supplier.destroy','uses'=> 'SupplierController@destroy']);

    //基本資料->供應商->取消
    Route::get('suppliers/recall',['as' =>'supplier.recall','uses' =>'SupplierController@recall']);
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
Route::get('products',['as' =>'product.index','uses' =>'productController@index']);
//基本資料->庫存產品->表單
Route::get('products/create',['as' =>'product.create','uses' =>'productController@create']);
//基本資料->庫存產品->新增
Route::post('/store',['as' =>'product.store','uses' =>'productController@store']);
//基本資料->庫存產品->編輯
//
Route::get('products/{id}/edit', ['as' => 'product.edit'  , 'uses' => 'productController@edit']);
//基本資料->庫存產品->取消
Route::get('products/recall',['as' =>'product.recall','uses' =>'productController@recall']);

//基本資料->一般顧客
Route::get('customers',['as' =>'customer.index','uses' =>'customerController@index']);
//基本資料->一般顧客->表單
Route::get('customers/create',['as' =>'customer.create','uses' =>'customerController@create']);
//基本資料->一般顧客->新增
Route::post('/store',['as' =>'customer.store','uses' =>'customerController@store']);
//基本資料->一般顧客->編輯
//
Route::get('customers/{id}/edit', ['as' => 'customer.edit'  , 'uses' => 'customerController@edit']);
//基本資料->一般顧客->取消
Route::get('customers/recall',['as' =>'customer.recall','uses' =>'customerController@recall']);

//基本資料->營造工程
    Route::get('manufacturers',['as' =>'manufacturer.index','uses' =>'manufacturerController@index']);
//基本資料->營造工程->表單
    Route::get('manufacturers/create',['as' =>'manufacturer.create','uses' =>'manufacturerController@create']);
//基本資料->營造工程->新增
    Route::post('/store',['as' =>'manufacturer.store','uses' =>'manufacturerController@store']);
//基本資料->營造工程->編輯
//
    Route::get('manufacturers/{id}/edit', ['as' => 'manufacturer.edit'  , 'uses' => 'manufacturerController@edit']);
//基本資料->營造工程->取消
    Route::get('manufacturers/recall',['as' =>'manufacturer.recall','uses' =>'manufacturerController@recall']);

});

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
    return view('basic.product.setting');
}]);

