<?php
namespace app\models;

use Yii;
use yii\base\Model;

class Activity extends \yii\base\Model {


/// MySql
/// 
public $bdMount;  ///1) Monthly schedule table. The user is only reading. Does not change.
public $bdWeek;   //2) Table of the weekly schedule. It often changes. and is changed by the user.

public $reapit;  // Recurring event of the day
public $Block;    // bulian // Block of the day

public $DayRules;  // Rules for the current day. Reminds "return"



} 

