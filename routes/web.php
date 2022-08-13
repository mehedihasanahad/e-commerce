<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('pages/landing');
//     $joinSubQuery = DB::table('applications')->select([
//         DB::raw("applications.upazila_id"),
//         DB::raw("FLOOR(AVG(DATEDIFF(csu_l_order.`created`,csu_rec.`created`))) 'Nisponno'"),
//     ])
//     ->leftJoin('case_status_updates AS csu_rec', 'csu_rec.application_id', '=',
//     DB::raw("applications.id AND csu_rec.`case_status_id`=2"))
//    ->leftJoin('case_status_updates AS csu_l_order', 'csu_l_order.application_id', '=',
//        DB::raw("applications.`id` AND csu_l_order.`case_status_id`=19 "))
//    ->where('applications.jomi_division_id', 3)
//    ->where('applications.district_id', 19)
//    ->whereRaw("DATE(applications.created) >= DATE(NOW()) - INTERVAL 90 DAY")
//    ->whereIn('applications.case_main_status_id', [19, 20, 22])
//    ->groupBy('applications.upazila_id');

//     $upazilaWiseData = DB::table('applications')->select([
//         DB::raw("dglr_upazilas.`name_bd` AS 'Upazila'"),
//         DB::raw("ROUND(COUNT(CASE WHEN applications.`case_main_status_id`IN(19,20,22) THEN 1 END)/COUNT(CASE WHEN
//         applications.`case_main_status_id`IN(19,20,22,27,9) THEN 1 END)*100) AS 'approval_ratio'"),
//         DB::raw("ROUND(temp.`Nisponno`) AS 'avg_nisponno'")
//     ])
//   ->leftJoin('dglr_upazilas', 'dglr_upazilas.id', '=', 'applications.upazila_id')
//   ->leftJoinSub($joinSubQuery, 'temp', function ($join) {
//       $join->on('temp.upazila_id', '=', 'applications.upazila_id');
//   })
//   ->whereRaw("DATE(applications.created) >= DATE(NOW()) - INTERVAL 90 DAY")
//   ->where('applications.jomi_division_id', 3)
//   ->where('applications.district_id', 19)
//   ->groupBy('applications.upazila_id')
//   ->having(DB::raw("COUNT(CASE WHEN applications.`case_main_status_id`IN(19,20,22) THEN 1 END)"), '>', 0)
//   ->orderBy('avg_nisponno', 'ASC')
//   ->orderBy('approval_ratio', 'DESC')
//   ->get();
  
//     return $upazilaWiseData;
})->name('home');
















Route::get('/category', function(Request $request) {
    return view('pages/category');
})->name('category');