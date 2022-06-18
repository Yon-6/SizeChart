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
                    <!-- ↓↓↓ ここから検索機能 ↓↓↓ -->
                    <form role="search" method="post" id="searchform" class="searchform" action="/">
                        <div>
                            <select name="brand_search" class="form-layout">
                                <option>ブランド名を選択</option>
                                @foreach($brands as $brand)
                                    <option value="{{ $brand['brand_id'] }}">{{ $brand['brand_name'] }}</option>
                                @endforeach
                            </select>
                            {{ csrf_field() }}
                            <button type="submit" id="searchsubmit" class="form-btn">検索する</button>
                        </div>
                    </form>
                    <!-- ↑↑↑ ここまで検索機能 ↑↑↑ -->
                </div>
                <!-- ↓↓↓ ここから検索結果の表示 ↓↓↓ -->
                @if(!$size_charts->isEmpty())
                    <div class="size-chart-wrap">
                        <table>
                            <tbody>
                            <tr class="t-layout th-layout">
                                <td>タグ表示サイズ</td>
                                <td>日本サイズ</td>
                                <td>年齢</td>
                                <td>身長</td>
                                <td>体重</td>
                                <td>ヘッド</td>
                                <td>バスト</td>
                                <td>ウエスト</td>
                                <td>ヒップ</td>
                                <td>肩幅</td>
                                <td>身幅</td>
                                <td>裄丈(ゆきたけ)</td>
                                <td>袖丈(そでたけ)</td>
                                <td>身丈(みたけ)</td>
                                <td>着丈(きたけ)</td>
                            </tr>
                            @foreach($size_charts as $size_chart)
                                <tr class="t-layout">
                                    <td>{{ $size_chart['tag_display_size'] }}</td>
                                    <td>{{ $size_chart['japan_size'] }}</td>
                                    <td>{{ $size_chart['age'] }}</td>
                                    <td>{{ $size_chart['height'] }}</td>
                                    <td>{{ $size_chart['weight'] }}</td>
                                    <td>{{ $size_chart['head'] }}</td>
                                    <td>{{ $size_chart['bust'] }}</td>
                                    <td>{{ $size_chart['waist'] }}</td>
                                    <td>{{ $size_chart['hip'] }}</td>
                                    <td>{{ $size_chart['shoulder_length'] }}</td>
                                    <td>{{ $size_chart['body_width'] }}</td>
                                    <td>{{ $size_chart['shoulder_and_arm_length'] }}</td>
                                    <td>{{ $size_chart['sleeve_length'] }}</td>
                                    <td>{{ $size_chart['total_length'] }}</td>
                                    <td>{{ $size_chart['body_length'] }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
                <!-- ↑↑↑ ここまで検索結果の表示 ↑↑↑ -->
            </div>
    </main>
    </body>
</html>
