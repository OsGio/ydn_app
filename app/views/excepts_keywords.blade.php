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
                            <h3><span class="label label-danger">Yahoo</span> 除外キーワード</h3>
                        </div>

                        <form name="csv_maker" method="post" action="https://ad-compass.com/cms/wp-content/themes/ad-compass/php/listing/csv_listing_new_keyword03.php">
                            <p lingdex="0">
                                <button type="submit" class="btn btn-primary" name="" value="" autocomplete="off"><i class="fa fa-download"></i> CSVダウンロード</button>
                            </p>

                            <div class="row">
                                <div class="col-md-6 col-lg-5">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            出稿タイプ
                                        </div>
                                        <div class="panel-body">
                                            <div class="radio">
                                                <ul class="list-unstyled">
                                                    <li><label><input type="radio" name="keyword_pattern" value="c" checked="">  キャンペーンの対象外キーワード</label></li>
                                                    <li><label><input type="radio" name="keyword_pattern" value="a">  広告グループの対象外キーワード</label></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

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
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="panel panel-default panel-ad_group" style="display: none;">
                                        <div class="panel-heading">
                                            広告グループ
                                        </div>
                                        <div class="panel-body">
                                            <fieldset class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="ad_group_id" class="col-sm-4 control-label">広告グループID</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="ad_group_id" name="ad_group_id" placeholder="広告グループID" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ad_group_name" class="col-sm-4 control-label">広告グループ名</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group"><input type="text" class="form-control" id="ad_group_name" name="ad_group_name" placeholder="広告グループ名" data-max-input-length="50" value=""><span class="input-group-addon"><span class="count">0</span>/50</span></div><span class="help_nomargin"></span>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            キーワード設定
                                        </div>
                                        <div class="panel-body">
                                            <fieldset class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="ad_group_id" class="col-sm-5 control-label">マッチタイプ / 表示URL接尾辞</label>
                                                    <div class="col-sm-7">
                                                        <div class="checkbox"><label class="matchtype_label"><input type="checkbox" name="match_type[]" value="exact"> 完全一致</label></div>
                                                        <div class="checkbox"><label class="matchtype_label"><input type="checkbox" name="match_type[]" value="phrase"> フレーズ一致</label></div>
                                                        <div class="checkbox"><label class="matchtype_label"><input type="checkbox" name="match_type[]" value="broad_plus"> 絞り込み部分一致</label></div>
                                                        <div class="checkbox"><label class="matchtype_label"><input type="checkbox" name="match_type[]" value="broad"> 部分一致</label></div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
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
                                                            <input type="checkbox" id="keywordsAll"> 順序入れ替えあり
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
                            <input type="hidden" name="listing_type" value="y">
                        </form>

            </article></main>
        </div>
    </div>
</div>
{{Form::close()}}

@stop
