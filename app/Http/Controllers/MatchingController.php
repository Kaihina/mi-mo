<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matching;

class MatchingController extends Controller
{
    public function index(Matching $matching)//インポートしたPostをインスタンス化して$postとして使用。
{
    return $matching->get();//$postの中身を戻り値にする。
}
}
