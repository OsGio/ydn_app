@extends('layouts.master')

@section('content')
{{Form::open()}}
<div class="container-fluid">
    <div class="row row_main">
        <div class="col-sm-12">
            <main id="main">
                <div class="jumbotron">
                    <h1>
                        <span>出稿データCSV生成</span>
                        <span class="pull-right"><a class="btn btn-default" href="https://ad-compass.com/help/">操作マニュアルを見る <i class="fa fa-arrow-right"></i></a></span>
                    </h1>
                </div>


                <section>
                    <ul class="nav nav-pills">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="label label-danger">Yahoo</span> 出稿データ選択 <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><span>SS</span></li>
                                <li><a href="./?t=new_ss_ads_y">新規キャンペーン出稿</a></li>
                                <li><a href="./?t=except_ads_keyword_y">除外キーワード</a></li>
                                <li><a href="./?t=add_ads_campaign_y">広告グループ追加出稿</a></li>
                                <li><a href="./?t=add_ss_ads_y">広告追加出稿</a></li>
                                <li class="divider"></li>
                                <li><span>YDN</span></li>
                                <li><a href="./?t=new_ydn_ads_y">新規キャンペーン出稿</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="label label-primary">Google</span> 出稿データ選択 <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="./?t=new_ads_g">新規キャンペーン出稿</a></li>
                            </ul>
                        </li>
                    </ul>

                </section>

                <article class="entry">
                    <section>
                    </section>


                        <div class="page-header">
                            <h3><span class="label label-danger">Yahoo</span> SS - 広告追加出稿</h3>
                        </div>

                        <form name="csv_maker" method="post" action="https://ad-compass.com/cms/wp-content/themes/ad-compass/php/listing/csv_listing_add_ad.php">
                            <p lingdex="0">
                                <button type="submit" class="btn btn-primary" name="csv_download" value="" autocomplete="off" disabled=""><i class="fa fa-download"></i> CSVダウンロード</button>
                            </p>

                            <section id="step1" class="step1">
                                <fieldset class="form-inline">
                                    <legend>ステップ1 - YahooからキャンペーンデータをCSVでダウンロードして取り込む</legend>
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-5">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">読み込むファイルを選択する</div>
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <input type="file" id="import_csv" name="import_csv">
                                                        </div>
                                                        <div class="form-group">
                                                            <button class="btn btn-primary" type="button" name="file_submit" data-loading-text="読込中..." autocomplete="off">読み込む</button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </section>

                            <section id="step2" class="step2" style="display: none;">
                                <fieldset class="form-inline">
                                    <legend>ステップ2 - 広告を追加する広告グループを選ぶ</legend>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h4 class="campaign_name">キャンペーン「」の広告グループ</h4>
                                            <div class="panel panel-default import_ad_group">
                                                <div class="panel-heading">
                                                    <label><input type="checkbox" name="all_check_ad_group_list"> すべて選択</label>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="ad_group_list">
                                                        <ul class="list-unstyled"></ul>
                                                    </div>
                                                    <p class="text-center" lingdex="1"><button class="btn btn-info" type="button" name="add_edit_ad_group_list">追加する <i class="fa fa-caret-right"></i></button></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4>広告追加する広告グループ</h4>
                                            <div class="panel panel-primary edit_ad_group">
                                                <div class="panel-heading">
                                                    <label><input type="checkbox" name="all_check_ad_group_list"> すべて選択</label>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="ad_group_list">
                                                        <ul class="list-unstyled"></ul>
                                                    </div>
                                                    <p class="text-center" lingdex="2"><button class="btn btn-info" type="button" name="delete_edit_ad_group_list"><i class="fa fa-caret-left"></i> 削除する</button></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </section>

                            <section id="step3" class="step3" style="display: none;">
                                <fieldset class="form-inline">
                                    <legend>ステップ3 - 選択した広告グループに広告を追加する</legend>
                                </fieldset>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                広告追加
                                            </div>
                                            <div class="panel-body">
                                                <fieldset class="form-horizontal ad_ads_field">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4">広告名</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group"><input class="form-control" type="text" name="ad_ads_name" data-max-input-length="50" data-check-text="yss"><span class="input-group-addon"><span class="count">0</span>/50</span></div><span class="help_nomargin"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4">広告タイトル</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group"><input class="form-control" type="text" name="ad_ads_title" data-max-input-length="15" data-change-insertion="true" data-check-text="yss"><span class="input-group-addon"><span class="count">0</span>/15</span></div><span class="help_nomargin"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4">説明文1</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group"><input class="form-control" type="text" name="ad_ads_note01" data-max-input-length="19" data-change-insertion="true" data-check-text="yss"><span class="input-group-addon"><span class="count">0</span>/19</span></div><span class="help_nomargin"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4">説明文2</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group"><input class="form-control" type="text" name="ad_ads_note02" data-max-input-length="19" data-change-insertion="true" data-check-text="yss"><span class="input-group-addon"><span class="count">0</span>/19</span></div><span class="help_nomargin"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4">表示URL</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group"><input class="form-control" type="text" name="ad_ads_display_url" data-max-input-length="29"><span class="input-group-addon"><span class="count">0</span>/29</span></div><span class="help_nomargin"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4">リンク先URL</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group"><input class="form-control" type="text" name="ad_ads_link_url" data-max-input-length="1024"><span class="input-group-addon"><span class="count">0</span>/1024</span></div><span class="help_nomargin"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-4 col-sm-8">
                                                            <input type="hidden" name="ad_ads_listing_type" value="y">
                                                            <button class="btn btn-primary" type="button" name="ad_ads_data">広告追加</button>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <script>
                                                    ads_data_list = [];
                                                </script>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="panel panel-default ads_pattern">
                                            <div class="panel-heading">キーワード自動挿入機能</div>
                                            <div class="panel-body">
                                                <button class="btn btn-info" type="button" name="insertion_keyword" data-ads_pattern="{KEYWORD:}">キーワード自動挿入 {KEYWORD:}</button>
                                            </div>
                                        </div>
                                        <div class="panel panel-default ads_pattern">
                                            <div class="panel-heading">
                                                <div class="form-inline">
                                                    広告文補助機能
                                                    <select id="ads_pattern_select_menu" class="form-control"><option values="数字">数字</option><option values="疑問文">疑問文</option><option values="感嘆符（！、？）">感嘆符（！、？）</option>
                                                        <option values="擬声語">擬声語</option><option values="ボリューム感">ボリューム感</option><option values="焦燥感">焦燥感</option><option values="緊張感">緊張感</option><option values="信頼感">信頼感</option>
                                                        <option values="割安感">割安感</option><option values="クオリティー">クオリティー</option><option values="斬新性">斬新性</option><option values="利便性">利便性</option><option values="専門性">専門性</option>
                                                        <option values="希少性">希少性</option><option values="心地良さ">心地良さ</option><option values="命令形で">命令形で</option><option values="危機感">危機感</option><option values="メソッド">メソッド</option>
                                                        <option values="タイムリー">タイムリー</option><option values="ポジティブ">ポジティブ</option><option values="ネガティブ">ネガティブ</option><option values="手軽感">手軽感</option><option values="理想形">理想形</option>
                                                        <option values="ランキング">ランキング</option><option values="呼びかけ">呼びかけ</option><option values="時代性">時代性</option><option values="対応策">対応策</option><option values="弱みを強みに">弱みを強みに</option><option values="メリット">メリット</option>
                                                        <option values="実は">実は</option><option values="共感形">共感形</option><option values="勧誘形">勧誘形</option><option values="敵・味方を作る">敵・味方を作る</option><option values="有名人のセリフ">有名人のセリフ</option><option values="安心感">安心感</option>
                                                        <option values="クイズ形式">クイズ形式</option><option values="特定する">特定する</option><option values="禁止する">禁止する</option><option values="決意させる">決意させる</option><option values="結論から">結論から</option><option values="怒り">怒り</option>
                                                        <option values="誇張形">誇張形</option><option values="ニュース">ニュース</option><option values="エピソード">エピソード</option><option values="理由を書く">理由を書く</option><option values="想像させる">想像させる</option><option values="情景">情景</option>
                                                        <option values="統計データ">統計データ</option><option values="リピート">リピート</option><option values="権威性">権威性</option></select>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="ads_pattern_list">
                                                    <li><button class="btn btn-info" type="button" data-ads_pattern="９０％が満足！">（例）９０％が満足！</button></li>
                                                    <li><button class="btn btn-info" type="button" data-ads_pattern="たった５分で！">（例）たった５分で！</button></li>
                                                    <li><button class="btn btn-info" type="button" data-ads_pattern="なんと１万円！">（例）なんと１万円！</button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="display_ads_area"></div>
                            </section>
                            <input name="campaign_id" value="" type="hidden">
                            <input name="campaign_name" value="" type="hidden">
                            <input name="listing_type" value="y" type="hidden">
                        </form>

            </article></main>
        </div>
    </div>
</div>
{{Form::close()}}

@stop
