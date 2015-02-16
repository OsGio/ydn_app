@extends('layouts.master')

@section('content')
{{ Form::open(array('url' => './')) }}

<section class="col-sm-12">
	<div id="first" class="col-md-12 col-lg-12">

	<div id="campaign" class="panel panel-default col-sm-5">
		<div class="panel-heading">キャンペーン</div>
		<div class="panel-body">
			<div class="form-group">
				<fieldset class="form-horizontal">
					<label for="campaign_name" class="col-sm-4 control-label">キャンペーン名</label>
					<div class="col-sm-8">
						<div class="input-group">
							<input type="text" class="form-control" id="campaign_name" name="campaign_name" placeholder="キャンペーン名" data-max-input-length="50" value="" required="">
							<span class="input-group-addon">
								<span class="count">0</span>/50
							</span>
						</div>
						<span class="help_nomargin"></span>
					</div>
				</fieldset>
			</div>
			<div class="form-group">
				<fieldset class="form-horizontal">
					<label for="campaign_budget" class="col-sm-4 control-label">キャンペーン予算（日額）</label>
					<div class="col-sm-8">
						<div class="input-group">
							<span class="input-group-addon">¥</span>
							<input type="number" class="form-control" id="campaign_budget" name="campaign_budget" step="100" min="0" placeholder="キャンペーン予算" value="" required="">
						</div>
					</div>
				</fieldset>
			</div>
		</div>
	</div><!-- /#campaign -->

	<div id="adgroup" class="panel panel-default col-sm-5 col-sm-offset-1">
		<div class="panel-heading">広告グループ</div>
		<div class="panel-body">
			<fieldset class="form-horizontal">
				<div class="form-group">
					<label for="ad_group_cost" class="col-sm-4 control-label">入札価格</label>
						<div class="col-sm-8">
							<div class="input-group">
							<span class="input-group-addon">¥</span>
							<input type="number" class="form-control" id="ad_group_cost" name="ad_group_cost" placeholder="入札価格" step="1" min="0" value="" required="">
							</div><!-- /.input-group -->
						</div><!-- /.col-sm-8 -->
					</div><!-- /.form-group -->
				</fieldset>
			</div><!-- /.panel-body -->
		</div><!-- /#adgroup -->

	</div><!-- /#first -->
</section>


<!-- ***** .collapseをremoveClassで表示 ***** -->
	<section class="col-sm-12">
			<div class="page-header col-md-12 col-lg-12">
				<h4>キーワード設定</h4>
			</div>
		<div id="second" class="col-md-12 col-lg-12">
				<div id="keyword_config" class="panel panel-default col-sm-12">
					<div class="panel-heading">マッチタイプ設定</div>
					<div class="panel-body">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th class="col-sm-4 text-right" rowspan="4">マッチタイプ / 表示URL接尾辞</th>
								<td class="col-sm-4">
									<div class="form-inline">
										<div class="checkbox">
											<label class="matchtype_label">
												<input type="checkbox" name="match_type[]" value="exact">
												完全一致
											</label>
										</div>
										<br>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">.</span>
												<input type="text" class="form-control matchtype_suffix" name="exact_suffix" value="jp">
											</div>
										</div>
									</div>
								</td>
							<!-- </tr>
							<tr> -->
								<td class="col-sm-4">
									<div class="form-inline">
										<div class="checkbox">
											<label class="matchtype_label">
												<input type="checkbox" name="match_type[]" value="phrase">
												フレーズ一致
											</label>
										</div>
										<br>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">.</span>
												<input type="text" class="form-control matchtype_suffix" name="exact_suffix" value="co.jp">
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td class="col-sm-4">
									<div class="form-inline">
										<div class="checkbox">
											<label class="matchtype_label">
												<input type="checkbox" name="match_type[]" value="broad_plus">
												絞り込み部分一致
											</label>
										</div>
										<br>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">.</span>
												<input type="text" class="form-control matchtype_suffix" name="phrase_suffix" value="co.jp">
											</div>
										</div>
									</div>
								</td>
							<!-- </tr>
							<tr> -->
								<td class="col-sm-4">
									<div class="form-inline">
										<div class="checkbox">
											<label class="matchtype_label">
												<input type="checkbox" name="match_type[]" value="broad">
												部分一致
											</label>
										</div>
										<br>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">.</span>
												<input type="text" class="form-control matchtype_suffix" name="broad_suffix" value="jp">
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					</div>
				</div><!-- /#keyword_config -->

			<div class="panel panel-default">
				<div class="panel-heading">
					キーワード
				</div>
				<div class="panel-body">
					<p lingdex="1">
						<a class="btn btn-info" href="#cross_keyword_area" data-toggle="collapse"><i class="fa fa-plus"></i> キーワード掛け合わせ</a>
						<!-- <a class="btn btn-default" href="http://www.related-keywords.com/" target="_blank"><i class="fa fa-share"></i> 関連キーワードを探す（外部サイト）</a> -->
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
									<!-- <label><input type="checkbox" id="keywordsAll"> 順序入れ替えあり</label> -->
								</p>
							</div>
						</div>
					</div><!-- /#cross_keyword_area -->

					<fieldset class="form-horizontal col-sm-7">
						<div class="form-group">
							<div class="col-sm-12">
								<textarea id="result" class="form-control" rows="8" name="keyword" required=""></textarea>
								<span class="help-block">キーワード数：<span class="count">0</span></span>
							</div>
						</div>
					</fieldset>

					<fieldset class="form-horizontal col-sm-5">
						<div class="form-group">
							<div class="col-sm-12">
								<textarea id="encode" class="form-control" rows="8" name="url_encode" required=""></textarea>
								<span class="help-block">キーワード数：<span class="count">0</span></span>	<span class="btn btn-sm btn-warning encode_btn" data-role="encode">URLエンコード</span>
							</div>
						</div>
					</fieldset>
				</div><!-- /.panel-body -->
			</div><!-- /.panel-default -->

		</div><!-- /#second -->
</section>

{{--
	<div id="second" class="col-md-6 col-lg-6">
		<div id="keyword_config" class="panel panel-default">
			<div class="panel-heading">キーワード設定</div>
			<table class="table table-bordered">
				<tbody>
					<tr>
						<th class="col-sm-5 text-right" rowspan="4">マッチタイプ / 表示URL接尾辞</th>
						<td class="col-sm-7">
							<div class="form-inline">
								<div class="checkbox">
									<label class="matchtype_label">
										<input type="checkbox" name="match_type[]" value="exact">
										完全一致
									</label>
								</div>
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
								<div class="checkbox">
									<label class="matchtype_label">
										<input type="checkbox" name="match_type[]" value="phrase">
										フレーズ一致
									</label>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">.</span>
										<input type="text" class="form-control matchtype_suffix" name="exact_suffix" value="co.jp">
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="col-sm-7">
							<div class="form-inline">
								<div class="checkbox">
									<label class="matchtype_label">
										<input type="checkbox" name="match_type[]" value="broad_plus">
										絞り込み部分一致
									</label>
								</div>
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
								<div class="checkbox">
									<label class="matchtype_label">
										<input type="checkbox" name="match_type[]" value="broad">
										部分一致
									</label>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">.</span>
										<input type="text" class="form-control matchtype_suffix" name="broad_suffix" value="jp">
									</div>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div><!-- /#keyword_config -->
	</div><!-- /#second /.col-md-6 col-lg-5 -->
--}}


<section class="col-sm-12">
		<div class="page-header col-md-12 col-lg-12">
			<h4>広告設定</h4>
		</div><!-- /.page-header -->


		<div id="third" class="col-md-12 col-lg-12">
			<div class="col-sm-12">
				<div id="title_generator" class="panel panel-default">
					<div class="panel-heading">
						広告タイトルパターン生成
					</div>
					<div class="panel-body">
						<div class="col-sm-12">
							<div class="col-sm-6">
								<table class="table table-striped table-bordered table-hover col-sm-6">
									<thead>
										<tr>
											<th colspan="2">タイトルワード<p class="btn btn-sm btn-primary add_btn" data-id="word">+</p></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="ad_ads_title_word">{{Form::text('ad_ads_title_word[]', '', array('class' => 'as_ads_title_word'))}}</td><td class="title_word_num"></td>{{Form::hidden('title_word_num[]', '0', array('class' => 'title_word_num'))}}
										</tr>
									</tbody>
								</table>
							</div>
							<div class="col-sm-6">
								<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th colspan="2">タイトルフレーズ<p class="btn btn-sm btn-primary add_btn" data-id="phrase">+</p></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="ad_ads_title_phrase">{{Form::text('ad_ads_title_phrase[]', '', array('class' => 'as_ads_title'))}}</td><td class="title_phrase_num"></td>{{Form::hidden('title_phrase_num[]', '0', array('class' => 'title_phrase_num'))}}
										</tr>
									</tbody>
								</table>
							</div>
							<div class="col-sm-12 collapse in">
								<p class="btn btn-sm btn-info" id="generate">広告タイトル生成</p>
								<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<!-- <th>ワードカウント</th><th colspan="2">広告タイトル</th><th>文字数</th> -->
										</tr>
									</thead>
									<tbody class="ad_ads_titles">
										<!-- <tr> -->
											<!-- <td class="ad_ads_title" colspan="3">{{Form::text('ad_ads_title[]', '', array('class' => 'as_ads_title'))}}</td><td class="title_num"></td>{{Form::hidden('title_num[]', '0', array('class' => 'title_num'))}} -->
										<!-- </tr> -->
									</tbody>
								</table>
							</div>
					</div><!-- /.col-sm-12 -->
					</div><!-- /.panel-body -->
				</div><!-- /.panel panel-default -->
			</div><!-- /.col-sm-12 -->
		</div><!-- /#third /.col-md-12 col-lg-11 -->


	<div id="fourth" class="col-md-12 col-lg-12">
		<div class="col-sm-12">
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
{{--
						<div class="form-group">
							<label class="control-label col-sm-4">広告タイトル</label>
							<div class="col-sm-8">
								<div class="input-group"><input class="form-control" type="text" name="ad_ads_title" data-max-input-length="15" data-change-insertion="true" data-check-text="yss"><span class="input-group-addon"><span class="count">0</span>/15</span></div><span class="help_nomargin"></span>
							</div>
						</div>
--}}
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
	</div><!-- /#fourth -->
</section>

{{--
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
						<select id="ads_pattern_select_menu" class="form-control"><option values="数字">数字</option><option values="疑問文">疑問文</option><option values="感嘆符（！、？）">感嘆符（！、？）</option><option values="擬声語">擬声語</option><option values="ボリューム感">ボリューム感</option><option values="焦燥感">焦燥感</option>
							<option values="緊張感">緊張感</option><option values="信頼感">信頼感</option><option values="割安感">割安感</option><option values="クオリティー">クオリティー</option><option values="斬新性">斬新性</option><option values="利便性">利便性</option><option values="専門性">専門性</option>
							<option values="希少性">希少性</option><option values="心地良さ">心地良さ</option><option values="命令形で">命令形で</option><option values="危機感">危機感</option><option values="メソッド">メソッド</option><option values="タイムリー">タイムリー</option><option values="ポジティブ">ポジティブ</option>
							<option values="ネガティブ">ネガティブ</option><option values="手軽感">手軽感</option><option values="理想形">理想形</option><option values="ランキング">ランキング</option><option values="呼びかけ">呼びかけ</option><option values="時代性">時代性</option><option values="対応策">対応策</option>
							<option values="弱みを強みに">弱みを強みに</option><option values="メリット">メリット</option><option values="実は">実は</option><option values="共感形">共感形</option><option values="勧誘形">勧誘形</option><option values="敵・味方を作る">敵・味方を作る</option><option values="有名人のセリフ">有名人のセリフ</option>
							<option values="安心感">安心感</option><option values="クイズ形式">クイズ形式</option><option values="特定する">特定する</option><option values="禁止する">禁止する</option><option values="決意させる">決意させる</option><option values="結論から">結論から</option><option values="怒り">怒り</option>
							<option values="誇張形">誇張形</option><option values="ニュース">ニュース</option><option values="エピソード">エピソード</option><option values="理由を書く">理由を書く</option><option values="想像させる">想像させる</option><option values="情景">情景</option><option values="統計データ">統計データ</option>
							<option values="リピート">リピート</option><option values="権威性">権威性</option></select>
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
--}}


{{--
					<fieldset class="form-horizontal ad_ads_field">
						<div class="form-group row">
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
--}}



	{{Form::submit('出力', array('class' => 'btn btn-large btn-primary'))}}
{{Form::close()}}
@stop
