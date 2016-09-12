<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title></title>
  <style>
    .blue {
      color: blue;
    }

    .red {
      color: red;
    }
  </style>

  <!-- jQuery - JavaScriptをより効率的に使える用にパワーアップさせたライブラリ -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.2.min.js"></script>

  <!-- JavaScript -->
  <script type="text/javascript">
    // 変数
    var firstName = 'Shinya';
    var lastName = 'Hirai';
    // 文字連結
    var fullName = firstName + ' ' + lastName;

    // 実行、確認 (PHPのecho文)
    console.log(fullName);
    // alert(fullName);

    // 配列
    var members = ['Tomo', 'Ko', 'Sanshiro', 'Shinya'];
    console.log(members[3]);

    // 連想配列
    var profile = { name: 'Shinya Hirai', age: '26', gender: 'male'};
    console.log(profile['age']);

    // jQueryを使ったサンプル
    $(document).ready(function(){
      // HTML=DOMの読み込みが終わったら処理スタート
      // JavaScriptはHTMLが読み込まれた後に動作しないとバグる可能性が高いため

      // $(要素)でHTMLのタグを取得できる
      $('#link_a').click(function(){
        // タグで指定する場合は 'タグ'
        // idで指定する場合は '#id'
        // classで指定する場合は '.class'

        // aタグがクリックされたら処理スタート

        // attr()は指定した要素の属性値を取得できる
        // var link = $('#link_a').attr('class');
        // attr()は第二引数に渡した値で属性値を書き換えられる
        // $(this)で自分自身 ⇒ メソッドが発動した際に指定していた要素
        $(this).attr('class', 'link_c');
        $('h1').attr('class', 'red');

        // alert(link);

      });

      // input要素が変更されたとき
      $('input').change(function(){
        // inputタグのvalueを取得し、画面に出力
        // val()で取得したinputやselectタグの入力値を取得
        var input = $(this).val();
        // text()で取得したタグ内のテキストを取得、書き換えが可能
        $('.input_val').text(input);
      });

      // select要素が変更されたとき
      $('select').change(function(){
        // 選択されている値を取得して画面に表示
        var select = $('option:selected').text();
        $('.select_val').text(select);

        // addClass()は取得したタグにclassを追加できる
        $('.select_val').addClass('blue');

        // toggleClass()は指定したclassが付いていれば外し、なければ付ける
        $('h1').toggleClass('blue');
      });
    });

  </script>
</head>
<body>
  <h1 class="blue">ほげほげ</h1>
  <a id="link_a" class="link_b" href="#">jQueryで要素取得</a><br>
  <a href="#">別のaタグ</a>
  <hr>
  <br>
  <form action="">
    <input type="text" name="nick_name">
    <br>
    <span class="input_val">未入力</span>
    <br>

    <select name="lang">
      <option value="1">PHP</option>
      <option value="2">Swift</option>
      <option value="3">Ruby</option>
      <option value="4">JavaScript</option>
    </select>
    <br>
    <span class="select_val">未選択</span>
    <br>
  </form>
</body>
</html>







