<?php
$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];
//・変数名が数字から始まっている
//・"2月"の後のカンマが句読点になっている
//・"June"の後の比較演算子が=>ではなく、=になっている
//・10月が""で囲われていない
//・echoの部分で12月を選択する際Decemberが""で囲われていない
?>