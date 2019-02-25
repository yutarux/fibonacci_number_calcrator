<?php

/**
 * フィボナッチ数計算クラス
 */
class FibonacciNumberCalculator
{
    /**
     * 計算処理
     * 
     * @see フィボナッチ数の詳細については→ https://ja.wikipedia.org/wiki/%E3%83%95%E3%82%A3%E3%83%9C%E3%83%8A%E3%83%83%E3%83%81%E6%95%B0
     * @return int[] 計算結果
     */
    public static function calc() : array
    {
        // フィボナッチ数... 最初の二項は 0, 1 であり、以後どの項もその直前の2つの項の和となっている
        //TODO: ここに最初の10個のフィボナッチ数を求め、結果を配列で返すコードを書いてください


    }

    /**
     * 計算結果を検証する
     *
     * @param int[] $result
     * @return bool
     */
    public static function test(array $result) : bool
    {
        return $result === [1, 1, 2, 3, 5, 8, 13, 21, 34, 55];
    }
}

$result = FibonacciNumberCalculator::calc();

if(FibonacciNumberCalculator::test($result)) {
    exit('正解！');
}

exit('何かが違うようです...');