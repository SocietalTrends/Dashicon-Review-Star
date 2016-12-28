# Dashicon-Review-Star
<p>WordPress の Dashicon とショートコードを用いてレビューのスターを自動で作成 - Using Dashicon and Shortcodes, It creates review-star automatically for Wordpress</p>

Dashicon-Review-Star
=====
<p>Dashicon-Review-Starは、WordPress の Dashicon とショートコードを用いてレビューのスターを自動で作成します。</p>

実装方法 - How to implement
-----
<p>本レポジトリのfunction.phpの内容を、使用しているWordpressテーマ下のfunction.phpに追記し、同じくstyle.cssの内容も、使用しているテーマ下のstyle.cssに追記することで動作します。</p>

使用方法 - How to use
-----
<pre>[star review = 3]</pre>
と投稿フォームに入力すると、<br>
<p><img src="http://societaltrends.tech/wp-content/uploads/2016/12/reviewStar.png"><br>
画像の通り、5つ星評価で3つ星評価されます。また引数は[star "review" "isdeci" "max"]の3つの引数を取ることができ、属性にそれぞれ値を取ることで"review"は評価(整数で指定。）、"isdeci"は小数点の有無（つまり星が半分になるような3.5や0.5といった評価にも対応します。0か1で指定。）、"max"は最大評価（3段階評価にも20段階評価にもできます。整数で指定。）を設定します。</p>
<p>デフォルトの設定は、review属性は0、isdeci属性は0（無効）、max属性は5に指定（5段階評価に)されています。<br>
属性は空白で区切ってください。<br>
isdeci属性を有効にする場合は、review属性の評価は切り捨てて代入してください。（例えば3.5点にしたければ、review属性に3.5を切り捨てた3を代入する。）</p>
<p>また、max属性で指定した値以上の値を、review属性で指定するとメッセージが出る仕様になっておりますので、デフォルトの5段階評価の範囲を変更したい場合は、review属性の値を指定するとともに、max属性の値も指定してください。</p>

ライセンス - Licence
-----
Dashicon-Review-Star は MITライセンスに帰属します。
