<div class="navbar-reverse">
  <ul class="nav nav-list nav-stacked nav-pills nav-list">
    {{ HTML::active_form('./', '管理画面TOP', ''); }}

    <ul class="nav nav-stacked nav-pills nav-list" id="sidebar">
      <li class="nav-header" style="padding:10px 5px;color:#777777;background:#D9EDF7;"><strong>リスト操作</strong></li>
    @if( in_array('m1', $menu_ids) )
      {{ HTML::active_form('./import', 'リストインポート', 'm1'); }}
    @endif
{{--
    @if( in_array('m2', $menu_ids) )
      {{ HTML::active_form('./list_modify', 'リスト修正・削除', 'm2'); }}
    @endif
--}}
    @if( in_array('m3', $menu_ids) )
      {{ HTML::active_form('./ban_all', '架電禁止登録（一括）', 'm3'); }}
    @endif

    @if( in_array('m4', $menu_ids) )
      {{ HTML::active_form('./ban_each', '架電禁止登録（個別）', 'm4'); }}
    @endif

    @if( in_array('m5', $menu_ids) )
      {{ HTML::active_form('./list_config', 'リスト状態設定', 'm5'); }}
    @endif
    </ul>
    <ul class="nav nav-stacked nav-pills" id="sidebar">
      <li class="nav-header" style="padding:10px 5px;color:#777777;background:#D9EDF7;"><strong>実績操作</strong></li>
{{--
    @if( in_array('m6', $menu_ids) )
      {{ HTML::active_form('./result_modify', '架電結果修正', 'm6'); }}
    @endif
    @if( in_array('m7', $menu_ids) )
      {{ HTML::active_form('./audio', '録音ファイル検索', 'm7'); }}
    @endif
--}}
    </ul>
    <li class="nav-header" style="padding:10px 5px;color:#777777;background:#D9EDF7;"><strong>分析</strong></li>
    <ul class="nav nav-stacked nav-pills" id="sidebar">
    {{ HTML::active_form('./daily', '日別CSV', ''); }}
    {{ HTML::active_form('./monthly', '月別CSV', ''); }}
    {{ HTML::active_form('./all_analysis', '全件CSV', ''); }}
    </ul>
{{--
    {{ HTML::active_form('#', '分析', ''); }}

    {{ HTML::active_form('#', 'その他', ''); }}
--}}
{{--
    <ul class="nav nav-stacked nav-pills" id="sidebar">
    @if( in_array('m8', $menu_ids) )
      {{ HTML::active_form('./audio', '閲覧ファイル登録', 'm8'); }}
    @endif
    @if( in_array('m9', $menu_ids) )
      {{ HTML::active_form('./audio', '保有リスト確認', 'm9'); }}
    @endif
--}}
    </ul>
    <ul class="nav nav-stacked nav-pills" id="sidebar">
      <li class="nav-header" style="padding:10px 5px;color:#777777;background:#D9EDF7;"><strong>保守</strong></li>
{{--
    @if( in_array('m10', $menu_ids) )
      {{ HTML::active_form('./master_group', 'グループマスター', 'm10'); }}
    @endif
    @if( in_array('m11', $menu_ids) )
      {{ HTML::active_form('./master_user', 'ユーザマスター', 'm11'); }}
    @endif
    @if( in_array('m12', $menu_ids) )
      {{ HTML::active_form('./audio', 'グループ割当', 'm12'); }}
    @endif
    @if( in_array('m13', $menu_ids) )
      {{ HTML::active_form('./level_config', '権限設定', 'm13'); }}
    @endif
--}}
    </ul>
{{--
    {{ HTML::active_form('./audio', '環境設定', ''); }}
    <ul class="nav nav-stacked nav-pills" id="sidebar">
    @if( in_array('m14', $menu_ids) )
      {{ HTML::active_form('./audio', '見出し設定', 'm14'); }}
    @endif
    @if( in_array('m15', $menu_ids) )
      {{ HTML::active_form('./audio', '成約ステータスマスタ', 'm15'); }}
    @endif
    </ul>
--}}

  </ul>


  {{--  ver.2.0
  <ul class="nav nav-stacked nav-pills" id="sidebar">

    {{ HTML::active_form('./', '管理画面', 'm1'); }}
    {{ HTML::active_form('./operator', 'ユーザーマスター', 'm2'); }}
    {{ HTML::active_form('./group', 'グループマスター', 'm3'); }}
    {{ HTML::active_form('#', '電話番号インポート', 'm4'); }}
    <ul>
      {{ HTML::active_form('./import_all', '一括インポート', 'm4'); }}
      {{ HTML::active_form('./import_each', '個別インポート', 'm4'); }}
    </ul>
    {{ HTML::active_form('./export', 'エクスポート', 'm5'); }}
    {{ HTML::active_form('#', 'リンク07', 'm6'); }}
    {{ HTML::active_form('./ban', 'ban', 'm7'); }}
    {{ HTML::active_form('./group_assign', 'グループ割当', 'm8'); }}
    {{ HTML::active_form('./assign', '所属割当', 'm9'); }}
    {{ HTML::active_form('./group_set', 'グループ設定', 'm10'); }}
    {{ HTML::active_form('./menu', 'メニュー登録', 'm11'); }}

  </ul>
  --}}

  {{-- ver.1.0
    <br />
    <li><a href="/laravel/" id="m1">管理画面</a></li>
    <li><a href="./operator" id="m2">ユーザーマスター</a></li>
    <li><a href="./group" id="m3">グループマスター</a></li>
    <li><a href="" style="cursor:default;" id="m4">電話番号インポート</a></li>
    <ul>
      <li><a href="./import_all" id="m4">一括インポート</a></li>
      <li><a href="./import_each" id="m4">個別インポート</a></li>
    </ul>
    <li><a href="./export" id="m5">エクスポート</a></li>
    <li><a href="" id="m6">リンク07</a></li>
    <li><a href="./ban" id="m7">ban</a></li>
    <li><a href="./group_assign" id="m8">グループ割当</a></li>
    <li><a href="./assign" id="m9">所属割当</a></li>
    <li><a href="./group_set" id="m10">グループ設定</a></li>
    <li><a href="./menu" id="m11">メニュー登録</a></li>
  --}}

  </ul>
</div>
