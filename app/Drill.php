<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drill extends Model
{
    // DBで間違っても変更させたくないカラム（ユーザーID、管理者権限など）にはロックをかけておく事ができる
    // ロックの掛け方にはfillableかguardedの２種類がある。
    // どちらかしか指定できない

    // モデルがその属性以外を持たなくなる（fillメソッドに対応しやすいが、カラムが増えるほど足していく必要あり）
    protected $fillable = ['title', 'category_name', 'problem0', 'problem1', 'problem2', 'problem3', 'problem4', 'problem5', 'problem6', 'problem7', 'problem8', 'problem9'];
    // モデルからその属性が取り除かれる（カラムが増えてもほとんど変更しなくて良い）
    //protected $guarded = ['id'];
}
