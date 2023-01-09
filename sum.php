<?php
/*1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください*/
function sum($number){
    $result = 0;
$result = $number *2;
  return $result;
  
}
echo sum(15);
echo "\n";

/*2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください

　参考）引数は下記のように指定すると、複数の仮引数を使うことができます

 function add($a, $b){
 //処理したい内容
 }*/
function add($a, $b){
    $result = 0;
$result = $a + $b;
return $result ;
}
echo add(13, 42);
echo "\n";

/*3.$arr という配列の仮引数を持ち、
数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
その要素をすべてかけた結果を返す関数を作成してください*/

function multiply($arr){
  $result = $arr[0];
  for ($i=1;$i<count($arr);$i++){
  $result *= $arr[$i];
  }
  return $result;
}
$arr = array(1, 3, 5 ,7, 9);
echo multiply($arr);
echo "\n";

/*
4.配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
*/
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 }
 if($max_number > $a){
  $max_number = $a; 
 
 }

 return $max_number;
 }
 
 //5.
 /*
 用途・・・指定した文字列から全てのHTML、PHP タグを取り除く
 構文・・・$変数 = strip_tags([変換したい文字列]);*/
 $a = "<p>テスト</p>";
echo strip_tags($a);//$aについているタグを全て排除する

$a = "<p>テスト</p>";
echo strip_tags($a,"<p>");//$aの<p>だけ排除する

/*array_push
 用途・・・配列の最後に1つ以上の要素を追加したい時に使用する
 構文・・・array_push(追加先の配列,追加する値1,追加する値2,…)*/
 $zodiac_animals = array("Rat","Cow","Tiger"); //配列を作る
 array_push($zodiac_animals,"Rabbit","Dragon");//干支の虎の次を追加する
 print_r ($zodiac_animals); 
 
 /*array_merge
 用途・・・配列と配列をまとめて一つの配列にするために使用
 構文・・・array_merge(結合元配列, 追加する配列 [, 追加する配列]);*/

$fruits1 = array('apple', 'orange', 'melon', 'banana', 'pineapple');
$fruits2 = array('strawberry', 'cherry', 'watermelon');
$fruits3 = array('anzu', 'papaya');
 
//配列を結合する
$fruits_merge = array_merge($fruits1, $fruits2, $fruits3);
 
print_r($fruits_merge);

 /*mktime
 用途・・・標準関数で指定した日時のタイムスタンプを取得する
 　　　　　　　1970年1月1日00:00:00 GMTから指定した時間までの秒を取得
 構文・・・変数 = mktime([int hour [, int minute [, int second
             [, int month [, int day [, int year [,int is_dst]]]]]]]);*/
 $time = mktime(1);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');
  
  /*date
  用途・・・ローカルの日付や時刻を書式化する
  構文・・・  string date(フォーマット文字 [, タイムスタンプ])*/
  echo date('Y年m月d日').'<br>';
  echo date('Y年m月d日　H時i分s秒');
  