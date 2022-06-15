<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="asset/css/reset.css">
        <link rel="stylesheet" href="asset/css/style.css">
    </head>
    <body class="antialiased">
        <header>
            <div class="h-inner">
                <h1 class="main-title">Size Chart</h1>
            </div>
        </header>
        <main>
            <div class="main-inner">
                <div class="search-wrap">
                    <form role="search" method="post" id="searchform" class="searchform" action="">
                        <div>
                            <select name="brand" class="form-layout">
                                <option> ----- </option>'
                                <option value="1">NIKE</option>
                                <option value="2">addidas</option>
                                <option value="3">ラルフローレン</option>
                            </select>
                            <input type="search" id="s" name="s" value="" class="form-layout"/>
                            <button type="submit" id="searchsubmit" class="form-btn">検索する</button>
                        </div>
                    </form>
                </div>
                <div class="size-chart-wrap">
                    <table>
                        <tbody>
                        <tr class="t-layout">
                            <td>タグ表示サイズ</td>
                            <td>日本サイズ</td>
                            <td>年齢</td>
                            <td>身長</td>
                            <td>体重</td>
                            <td>胸囲</td>
                            <td>ウエスト</td>
                            <td>ヒップ</td>
                        </tr>
                        <tr class="t-layout">
                            <td>S</td>
                            <td>S</td>
                            <td></td>
                            <td>100cm</td>
                            <td>30kg</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="t-layout">
                            <td>M</td>
                            <td>M</td>
                            <td></td>
                            <td>130cm</td>
                            <td>40kg</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="t-layout">
                            <td>L</td>
                            <td>L</td>
                            <td></td>
                            <td>140cm</td>
                            <td>50kg</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="t-layout">
                            <td>LL</td>
                            <td>LL</td>
                            <td></td>
                            <td>150cm</td>
                            <td>60kg</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="t-layout">
                            <td>3L</td>
                            <td>3L</td>
                            <td></td>
                            <td>160cm</td>
                            <td>70kg</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="t-layout">
                            <td>4L</td>
                            <td>4L</td>
                            <td></td>
                            <td>180cm</td>
                            <td>80kg</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </main>
    </body>
</html>
