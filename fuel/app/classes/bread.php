<?php

class Bread
{

	static function wordlist($seg = null)
	{
		switch ($seg) {
			case 'breadtest':
				//パンくずにリンクを付ける場合
				$word = Html::anchor('breadtest/', 'breadtest');
				break;
			case 'index':
				//パンくずにリンクを付ける場合
				$word = Html::anchor('index/', 'index');
				break;
			case 'aiu':
				//パンくずにリンクを付ける場合
				$word = Html::anchor('aiu/', 'aiu');
				break;
			case 'ueo':
				//パンくずにリンクを付ける場合
				$word = Html::anchor('ueo/', 'ueo');
				break;

			//省略！！！

			default:
				$word = null;
				break;
		}

		return $word;
	}

	public static function generate($title)
	{
		//urlセグメントを全て配列で取得
		$url = Uri::segments();

		//パンくずの先頭「TOP >」は必ず表示
		$crumb = '<li>' . Html::anchor('/', 'TOP') . '</li>';

		//パンくず末尾はそのページのタイトルを表示させたい
		//つまりforeachでの最後の処理を別にしなければならない
		//最後であるかどうか判断するため最後の要素のキーを取得する
		//foreach+end()+each()じゃなくてfor+count()でもいいのかも、そっちの方が単純
		end($url);
		$url_last_element = each($url); //現在のキーと値のペアを返して、最後なのでカーソルが進まない
		$url_last_key = $url_last_element["key"]; //キー取得

		foreach ($url as $key => $seg)
		{
			if ($key == $url_last_key || self::wordlist($seg) == null) //最後ならば(なんかもっとましな書き方ありそう)
			{
				$crumb .= '<li>' . $title . '</li>'; //パンくずリスト末尾にページタイトルをつける
			} else
			{
				$crumb .= '<li>' . self::wordlist($seg) . '</li>'; //パンくずリスト末尾にURLに対応した要素をつける
			}
		}

		return $crumb;
	}

}
