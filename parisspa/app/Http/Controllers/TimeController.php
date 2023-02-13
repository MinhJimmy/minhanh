<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\TimeSetting;
use Carbon\Carbon;

class TimeController extends Controller
{
    public function getListDay(){
        Carbon::setLocale('vi');
        $day_of_weeks = [1 => "Thứ hai" , 2 => "Thứ ba" , 3 => "Thứ tư" , 4 => "Thứ năm" , 5 => "Thứ sáu" , 6 => "Thứ bảy" , 0 => "Chủ nhật" , ];
        $list_day = [];
        for($i=1; $i<=7; $i++){
            $date_text = '';
            $date_type = '';
            $day_of_week = Carbon::now('Asia/Ho_Chi_Minh')->addDays($i - 1)->dayOfWeek;
            if($day_of_week != 0 && $day_of_week != 5 && $day_of_week != 6 ){
                $date_type = "Ngày thường";
            }else{
                $date_type = "Cuối tuần";
            }
            $now = Carbon::now('Asia/Ho_Chi_Minh')->addDays($i - 1)->format('d/m');
            if($i == 1) $date_text = 'Hôm nay, ' .$day_of_weeks["$day_of_week"] . " ($now)";
            if($i == 2) $date_text = 'Ngày mai, '.$day_of_weeks["$day_of_week"]. " ($now)";
            if($i == 3) $date_text = 'Ngày kia, '.$day_of_weeks["$day_of_week"]. " ($now)";
            if($i > 3) $date_text = $day_of_weeks["$day_of_week"]. " ($now)";

            $date = (object) [
                'date_text' => $date_text,
                'date_time' => Carbon::now('Asia/Ho_Chi_Minh')->addDays($i - 1)->format('d/m'),
                'date_type' => $date_type,
                'value' => $now = Carbon::now('Asia/Ho_Chi_Minh')->addDays($i - 1)->format("Y-m-d")
            ];
            array_push($list_day,$date);
        }
        return response()->json( $list_day , 200);
    }

    public function getListTime(Request  $request){
        $time_setting = TimeSetting::first();
        $limit_order = $time_setting->limit_order;

        Carbon::setLocale('vi');
        $total_work_time = (($time_setting->time_end - $time_setting->time_start) * 60) /  $time_setting->time_step;
        $Minute = -($time_setting->time_step);
        $list_time = [];

        for ($i=0; $i<$total_work_time; $i++){
            $Minute += $time_setting->time_step;
            $hour = Carbon::parse($request->day)->addHour($time_setting->time_start)->addMinute($Minute)->format('H');
            $minute = Carbon::parse($request->day)->addHour($time_setting->time_start)->addMinute($Minute)->format('i');
            $time_order = "$request->day $hour:$minute:00";

            $count_order_by_time = Booking::where('time' , $time_order)->count();
            $select = false;
            if(Carbon::parse($request->day)->addHour($time_setting->time_start)->addMinute($Minute)->gte(Carbon::now('Asia/Ho_Chi_Minh')->format("Y-m-d H:i:s"))){
                $select = true;
            }

            if($count_order_by_time >= $time_setting->limit_order){
                $select = false;
            }
            $time = (object)[
                'hour' => $hour,
                'minute' => $minute,
                'select' => $select,
                'time_order' => $time_order,
                'book_count' => $count_order_by_time
            ];
            $list_time[] = $time;
        }
        return response()->json( $list_time, 200);
    }
}
