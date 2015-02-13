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
                            <h3><span class="label label-danger">Yahoo</span> SS - 広告グループ追加出稿</h3>
                        </div>
                        <form name="csv_maker" method="post" action="https://ad-compass.com/cms/wp-content/themes/ad-compass/php/listing/csv_listing_new_keyword02.php">
                            <p lingdex="0">
                                <button type="submit" class="btn btn-primary" name="" value="" autocomplete="off"><i class="fa fa-download"></i> CSVダウンロード</button>
                            </p>

                            <div class="row">
                                <div class="col-md-6 col-lg-5">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            キャンペーン
                                        </div>
                                        <div class="panel-body">
                                            <fieldset class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="campaign_id" class="col-sm-4 control-label">キャンペーンID</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="campaign_id" name="campaign_id" placeholder="キャンペーンID" value="" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="campaign_name" class="col-sm-4 control-label">キャンペーン名</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group"><input type="text" class="form-control" id="campaign_name" name="campaign_name" placeholder="キャンペーン名" data-max-input-length="50" value="" required=""><span class="input-group-addon"><span class="count">0</span>/50</span></div><span class="help_nomargin"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="campaign_budget" class="col-sm-4 control-label">キャンペーン予算（日額）</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">¥</span>
                                                            <input type="number" class="form-control" id="campaign_budget" name="campaign_budget" step="100" min="0" placeholder="キャンペーン予算" value="" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            広告グループ
                                        </div>
                                        <div class="panel-body">
                                            <fieldset class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="ad_group_cost" class="col-sm-4 control-label">入札価格</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">¥</span>
                                                            <input type="number" class="form-control" id="ad_group_cost" name="ad_group_cost" placeholder="入札価格" step="1" min="0" value="" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            キーワード設定
                                        </div>
                                        <table class="table table-bordered">
                                            <tbody><tr>
                                                <th class="col-sm-5 text-right" rowspan="4">マッチタイプ / 表示URL接尾辞</th>
                                                <td class="col-sm-7">
                                                    <div class="form-inline">
                                                        <div class="checkbox"><label class="matchtype_label"><input type="checkbox" name="match_type[]" value="exact"> 完全一致</label></div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">.</span>
                                                                <input type="text" class="form-control matchtype_suffix" name="exact_suffix" value="jp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-sm-7">
                                                    <div class="form-inline">
                                                        <div class="checkbox"><label class="matchtype_label"><input type="checkbox" name="match_type[]" value="phrase"> フレーズ一致</label></div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">.</span>
                                                                <input type="text" class="form-control matchtype_suffix" name="phrase_suffix" value="co.jp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-sm-7">
                                                    <div class="form-inline">
                                                        <div class="checkbox"><label class="matchtype_label"><input type="checkbox" name="match_type[]" value="broad_plus"> 絞り込み部分一致</label></div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">.</span>
                                                                <input type="text" class="form-control matchtype_suffix" name="broad_plus_suffix" value="net">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-sm-7">
                                                    <div class="form-inline">
                                                        <div class="checkbox"><label class="matchtype_label"><input type="checkbox" name="match_type[]" value="broad"> 部分一致</label></div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">.</span>
                                                                <input type="text" class="form-control matchtype_suffix" name="broad_suffix" value="com">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-7">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            キーワード
                                        </div>
                                        <div class="panel-body">
                                            <p lingdex="1">
                                                <a class="btn btn-info" href="#cross_keyword_area" data-toggle="collapse"><i class="fa fa-plus"></i> キーワード掛け合わせ</a>
                                                <a class="btn btn-default" href="http://www.related-keywords.com/" target="_blank"><i class="fa fa-share"></i> 関連キーワードを探す（外部サイト）</a>
                                            </p>
                                            <div id="cross_keyword_area" class="collapse">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label>キーワードA</label>
                                                        <p lingdex="2">
                                                            <textarea id="keys1" class="form-control" name="cross_keyword01" rows="8" data-count-keyword="true"></textarea>
                                                            <span class="help-block">キーワード数：<span class="count">0</span></span>
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label>キーワードB</label>
                                                        <p lingdex="3">
                                                            <textarea id="keys2" class="form-control" name="cross_keyword02" rows="8" data-count-keyword="true"></textarea>
                                                            <span class="help-block">キーワード数：<span class="count">0</span></span>
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label>キーワードC</label>
                                                        <p lingdex="4">
                                                            <textarea id="keys3" class="form-control" name="cross_keyword03" rows="8" data-count-keyword="true"></textarea>
                                                            <span class="help-block">キーワード数：<span class="count">0</span></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-8 col-sm-offset-2">
                                                        <p lingdex="5">
                                                            <button class="btn btn-primary btn-lg btn-block" type="button" name="crossing_keyword"><i class="fa fa-arrow-circle-down"></i> 変換</button>
                                                            <input type="hidden" id="campaign">
                                                            <input type="hidden" id="adGroup">
                                                            <label><input type="checkbox" id="keywordsAll"> 順序入れ替えあり</label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <fieldset class="form-horizontal">
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <textarea id="result" class="form-control" rows="8" name="keyword" required=""></textarea>
                                                        <span class="help-block">キーワード数：<span class="count">0</span></span>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="page-header">
                                <h4>広告設定</h4>
                            </div>

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
                                                    <div class="col-sm-offset-4 col-sm-4">
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
                                                <select id="ads_pattern_select_menu" class="form-control"><option values="数字">数字</option><option values="疑問文">疑問文</option>
                                                    <option values="感嘆符（！、？）">感嘆符（！、？）</option><option values="擬声語">擬声語</option><option values="ボリューム感">ボリューム感</option>
                                                    <option values="焦燥感">焦燥感</option><option values="緊張感">緊張感</option><option values="信頼感">信頼感</option><option values="割安感">割安感</option>
                                                    <option values="クオリティー">クオリティー</option><option values="斬新性">斬新性</option><option values="利便性">利便性</option><option values="専門性">専門性</option>
                                                    <option values="希少性">希少性</option><option values="心地良さ">心地良さ</option><option values="命令形で">命令形で</option><option values="危機感">危機感</option>
                                                    <option values="メソッド">メソッド</option><option values="タイムリー">タイムリー</option><option values="ポジティブ">ポジティブ</option><option values="ネガティブ">ネガティブ</option>
                                                    <option values="手軽感">手軽感</option><option values="理想形">理想形</option><option values="ランキング">ランキング</option><option values="呼びかけ">呼びかけ</option><option values="時代性">時代性</option>
                                                    <option values="対応策">対応策</option><option values="弱みを強みに">弱みを強みに</option><option values="メリット">メリット</option><option values="実は">実は</option><option values="共感形">共感形</option>
                                                    <option values="勧誘形">勧誘形</option><option values="敵・味方を作る">敵・味方を作る</option><option values="有名人のセリフ">有名人のセリフ</option><option values="安心感">安心感</option><option values="クイズ形式">クイズ形式</option>
                                                    <option values="特定する">特定する</option><option values="禁止する">禁止する</option><option values="決意させる">決意させる</option><option values="結論から">結論から</option><option values="怒り">怒り</option><option values="誇張形">誇張形</option>
                                                    <option values="ニュース">ニュース</option><option values="エピソード">エピソード</option><option values="理由を書く">理由を書く</option><option values="想像させる">想像させる</option><option values="情景">情景</option>
                                                    <option values="統計データ">統計データ</option><option values="リピート">リピート</option><option values="権威性">権威性</option></select>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="ads_pattern_list"><li><button class="btn btn-info" type="button" data-ads_pattern="９０％が満足！">（例）９０％が満足！</button></li><li><button class="btn btn-info" type="button" data-ads_pattern="たった５分で！">（例）たった５分で！</button></li><li><button class="btn btn-info" type="button" data-ads_pattern="なんと１万円！">（例）なんと１万円！</button></li></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="display_ads_area"></div>
                            <input type="hidden" name="listing_type" value="y">
                            <input type="hidden" name="campaign_type" value="exist">
                            <input type="hidden" name="listing_pattern" value="ss">
                        </form>

            </article></main>
        </div>
    </div>
</div>
{{Form::close()}}

@stop
