<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

// Version: 2015040101
// Date: 2015-04-01
// Language: ja.

$string['addsubmission'] = '提出物を追加';
$string['allowlate'] = '提出期限日を過ぎた提出を許可する';
$string['allsubmissions'] = '提出物受信箱';
$string['anon'] = '匿名';
$string['anonenabled'] = '匿名でのコメント記入が可能';
$string['anytype'] = 'すべての提出タイプ';
$string['assigngeterror'] = 'turnitintooltwoデータを取得できませんでした';
$string['ced'] = 'クラス終了日';
$string['classcreationerror'] = 'Turnitinクラスの作成エラー';
$string['classupdateerror'] = 'Turnitinクラスのデータを更新できませんでした';
$string['configureerror'] = 'このコースの使用を開始する前に、管理者がこのモジュールを設定する必要があります。Moodle管理者までお問い合わせください。';
$string['connecttest'] = 'Turnitin接続のテスト';
$string['connecttestcommerror'] = 'Turnitinに接続できませんでした。APIのURL設定を確認してください。';
$string['connecttesterror'] = 'Turnitinへの接続中にエラーが発生しました。エラーメッセージは以下の通りです。<br /><br />';
$string['connecttestsuccess'] = 'MoodleはTurnitinに正しく接続しました。';
$string['copyrightagreement'] = 'このボックスをチェックすることで、私はこの提出物が私自身のものであることを認め、この提出物に関するすべての著作権侵害の責任を負うことを認めます。';
$string['coursegeterror'] = 'コースデータを取得できませんでした';
$string['courseiderror'] = 'コースIDが間違っています';
$string['deleteconfirm'] = 'この提出物を削除しますか？\n\n　いったん削除すると、元に戻すことはできません。';
$string['deletesubmission'] = '提出物を削除';
$string['downloadsubmission'] = '提出物をダウンロード';
$string['dtdue'] = '提出期限日';
$string['dtpost'] = '提示日';
$string['dtstart'] = '開始日';
$string['excludebiblio'] = '参考文献の除外';
$string['excludebiblio_help'] = 'この設定では、オリジナリティ レポートが作成される際、一致の検索から参考文献、引用文、または参照文を除外するかどうかをインストラクタが選択できます。この設定は、個人のオリジナリティ レポートでは無効にすることができます。';
$string['excludepercent'] = 'パーセント';
$string['excludequoted'] = '引用文献を除外';
$string['excludequoted_help'] = 'この設定では、オリジナリティ レポートが作成される際、一致の検索から引用文章を除外するかどうかをインストラクタが選択できます。この設定は、個人のオリジナリティ レポートでは無効にすることができます。';
$string['excludevalue'] = '小さな一致を除外する';
$string['excludevalue_help'] = 'この設定では、インストラクタはオリジナリティ レポートが作成される際、比較するのに長さが十分でない（講師によって決定される）一致を除外することを選択できます。この設定は、個人のオリジナリティ レポートでは無効にすることができます。';
$string['excludewords'] = '語';
$string['filetosubmit'] = '提出するファイル';
$string['filetosubmit_help'] = '課題に対してファイルを提出する際、このフォームを使用してアップロードするファイルを、コンピューターで検索してください。';
$string['fileupload'] = 'ファイルのアップロード';
$string['genduedate'] = '提出期限日にレポートを作成する（提出期限日までの再提出可）';
$string['genimmediately1'] = '即座にレポートを作成する（再提出不可）';
$string['genimmediately2'] = '即座にレポートを作成する（再提出は提出期限日まで可能）{$a->num_resubmissions} つの再提出後、レポートは {$a->num_hours} 時間後に作成されます';
$string['institutionalrepository'] = '所属機関リポジトリ（適用する場合）';
$string['institutionalchecksettings'] = '所属機関リポジトリで<br />チェックする';
$string['institutionalcheck'] = '所属機関リポジトリでチェックする';
$string['internetcheck'] = 'インターネットでチェックする';
$string['internetcheck_help'] = 'レポートのオリジナリティ レポートを処理する際にTurnitinインターネットリポジトリに対してチェックします。選択されないと、類似性指標は減少する場合があります。';
$string['journalcheck'] = 'ジャーナル、定期刊行物、<br />出版物をチェックする';
$string['journalcheck_help'] = 'レポートのオリジナリティ レポートを処理する際にTurnitinの学術誌、定期刊行物、および出版物リポジトリに対してチェックします。選択されないと、類似性指標は減少する場合があります。';
$string['maxfilesize'] = '最大ファイルサイズ';
$string['maxfilesize_help'] = 'この設定によって、課題ごとにユーザーが提出できるファイルサイズの上限が決まります。ここに設定できる最大値はコースの設定によって決まり、さらにその値はTurnitinでアップロードできるファイルサイズの上限である40MB以内である必要があります。';
$string['maxlength'] = '{$a->field}の最大文字数は{$a->length}字（半角）までです。';
$string['maxmarks'] = '最高得点';
$string['pluginname'] = 'Turnitin課題2';
$string['modulename'] = 'Turnitin課題2';
$string['modulenameplural'] = 'Turnitin課題';
$string['moduleversion'] = 'バージョン';
$string['mysubmissions'] = '私の提出物';
$string['nolimit'] = '無制限';
$string['nonmoodleuser'] = 'Moodleユーザーでない方';
$string['norepository'] = 'リポジトリなし';
$string['nosubmissions'] = '提出物がありません';
$string['notavailableyet'] = '利用できません';
$string['numberofparts'] = 'パート数';
$string['numberofparts_help'] = '複数の課題の作成が可能で、各ユーザーは課題ごとに1つの提出物を提出することができます。';
$string['overallgrade'] = '全体の評価';
$string['overallgrade_help'] = '全体の評価は課題全体に許可された最高評価を決定し、課題の各パートには、全体的な評価を決定するために均等に分配された最高数のマークが割り当てられています。';
$string['partdberror'] = 'パート{$a}をデータベースに入力中に問題が発生しました<br />';
$string['partupdateerror'] = 'パート{$a}をデータベースに更新中に問題が発生しました<br />';
$string['partdeleteerror'] = '課題のパート{$a}のデータを削除できませんでした';
$string['partdeletewarning'] = 'あなたが削除しようとしている課題のパートには提出物が含まれています。この課題のパートを削除するとその提出物は削除されます。\n\n続けますか？';
$string['partposterror'] = '開始日は発表日の前でなければなりません。';
$string['partgeterror'] = '課題のパートのデータを入手できませんでした';
$string['partname'] = '課題のパート';
$string['partnameerror'] = 'パート名を記入してください。';
$string['partdueerror'] = '提出期限日は提示日の前でなければなりません。';
$string['pending'] = '保留中';
$string['permissiondeniederror'] = '要求されたリクエストを処理する許可があなたにおりていません。';
$string['pluginadministration'] = 'Turnitin課題2管理';
$string['portfolio'] = 'ポートフォリオ';
$string['print'] = '印刷';
$string['proxypassword'] = 'プロキシパスワード';
$string['proxypassword_desc'] = '<b>[オプション]</b><br />あなたのプロキシに認証が必要な場合は、こちらにパスワードを入力してください。';
$string['proxyport'] = 'プロキシポート';
$string['proxyport_desc'] = '<b>[オプション]</b><br />あなたのサーバーがプロキシを使用してインターネットに接続する場合は、こちらにプロキシポートを入力してください。';
$string['proxyurl'] = 'プロキシURL';
$string['proxyurl_desc'] = '<b>[オプション]</b><br />あなたのサーバーがプロキシを使用してインターネットに接続する場合は、こちらにプロキシアドレスを入力してください。';
$string['proxyuser'] = 'プロキシユーザー名';
$string['proxyuser_desc'] = '<b>[オプション]</b><br />あなたのプロキシに認証が必要な場合は、こちらにユーザー名を入力してください。';
$string['reportgenspeed'] = '作成速度を報告する';
$string['resubmission'] = '再提出';
$string['resubmissiongradewarn'] = '提出期限日を過ぎるまで、この課題に対して再提出が可能です。レポートが再提出された場合、マークすべてが削除されます。続けますか？';
$string['resubmissiongradewarnaware'] = 'これが再提出されると、すべてのマークが削除されることにご注意ください。';
$string['resubmit'] = '再提出';
$string['reveal'] = '明らかにする';
$string['revealerror'] = '受講生名を明らかにする正当な理由を述べてください。';
$string['revealreason'] = '明らかにする理由';
$string['saveusage'] = 'ダンプされたデータを保存';
$string['selectoption'] = 'オプションを選択';
$string['showusage'] = 'ダンプされたデータを表示';
$string['spapercheck'] = '保存されている学生のレポートと比較する';
$string['spapercheck_help'] = 'レポートのオリジナリティーレポートを処理する際にTurnitin受講生レポートリポジトリに対してチェックします。これを選択しない場合は、類似性指標が減少する場合があります。';
$string['standardrepository'] = '標準リポジトリ';
$string['student'] = '学生';
$string['studentreports'] = 'オリジナリティ レポートを学生に表示する';
$string['studentreports_help'] = 'Turnitinオリジナリティーレポートを受講生に表示することを許可する。はい、に設定すると、Turnitinにより作成されたオリジナリティーレポートは受講生により閲覧することができます。';
$string['studentstatus'] = '提出済{$a->modified}（レポートID：{$a->objectid}）';
$string['submissiondeleteerror'] = '提出物を削除できませんでした';
$string['submissionextract'] = '提出物の抜粋';
$string['submissionfileerror'] = '提出するファイルを添付してください';
$string['submissionfiletypeerror'] = 'ファイルタイプを確認してください。許可されているファイルタイプ（{$a}）';
$string['submissiongeterror'] = '提出物データを得ることができませんでした';
$string['submissiongrade'] = '評価';
$string['submissionorig'] = '類似性';
$string['submissionpart'] = '提出物のパート';
$string['submissionpart_help'] = 'この提出物を提出したいTurnitin課題のパートを選択してください。';
$string['submissions'] = '提出物';
$string['submissiontexterror'] = 'この提出物のテキストを含めてください';
$string['submissiontitle'] = '提出物タイトル';
$string['submissiontitle_help'] = 'あなたの提出物のタイトルを入力してください。';
$string['submissiontitleerror'] = 'この提出物のタイトルを入力してください';
$string['submissiontype'] = '提出物のタイプ';
$string['submissiontype_help'] = '<p>Turnitinで許可されている提出タイプを示しています。</p>';
$string['submissionupdateerror'] = '提出物データを更新できませんでした';
$string['submissionuploadsuccess'] = 'Turnitinへの提出物のアップロードに成功しました。';
$string['submitpaper'] = 'レポートを提出';
$string['submitpapersto'] = '学生レポートを保存';
$string['submitpapersto_help'] = 'インストラクタはこの設定を使って、Turnitinの学生のレポートリポジトリに提出されたレポートを保存するかどうかを決めます。レポートをリポジトリに保存すると、課題に提出されたレポートを現在のクラス、または過去に提出された提出物に照らし合わせてチェックできるメリットがあります。［リポジトリなし］を設定すると、Turnitinの学生のレポートリポジトリにレポートは保存されません。';
$string['submitted'] = '提出済み';
$string['submittoturnitin'] = 'Turnitinに提出';
$string['textsubmission'] = 'テキスト提出';
$string['texttosubmit'] = '提出する文章';
$string['texttosubmit_help'] = 'あなたの提出物の文章をこのボックス内にコピー／貼付けしてください。';
$string['title'] = 'タイトル';
$string['turnitinaccountid'] = 'TurnitinアカウントID';
$string['turnitinaccountid_desc'] = '<b>[必須]</b><br />Turnitinの一次アカウントIDを入力してください';
$string['turnitinanon'] = '匿名マーキング';
$string['turnitinapiurl'] = 'Turnitin API URL';
$string['turnitindeleteconfirm'] = '提出物リストおよび受信箱よりレポートを削除することは可能ですが、Turnitinデータベースより完全に削除することはできません。\n\n提出物を削除しますか? このアクションは元に戻すことはできません。';
$string['turnitindeletionerror'] = 'Turnitinの提出物削除に失敗しました。ローカル Moodle コピーは削除されましたが、Turnitin内の提出物を削除することはできませんでした。';
$string['turnitinenrolstudents'] = '全受講生を参加登録';
$string['turnitinloading'] = 'データ同期中';
$string['turnitinpart'] = 'パート {$a}';
$string['turnitinrefreshsubmissions'] = '提出物を更新';
$string['turnitinsecretkey'] = 'Turnitin共有キー';
$string['turnitinsecretkey_desc'] = '<b>[必須]</b><br />Turnitinの共有キーを入力してください<br /><i>（Turnitin管理者が設定したもの）</i>';
$string['turnitintooltwo'] = 'Turnitinツール';
$string['turnitintooltwo:admin'] = 'Turnitinツールを管理する';
$string['turnitintooltwo:grade'] = 'Turnitinツール課題を評価する';
$string['turnitintooltwo:submit'] = 'Turnitinツール課題を提出する';
$string['turnitintooltwo:read'] = 'Turnitinツール課題を読む';
$string['turnitintooltwo:view'] = 'Turnitinツール課題を閲覧する';
$string['turnitintooltwoadministration'] = 'Turnitin課題2管理';
$string['turnitintooltwoagreement'] = '免責事項／契約';
$string['turnitintooltwoagreement_default'] = 'このボックスをチェックすることによって、私はこの提出物が私自身の物であることを確認し、この提出物に関しての全ての著作権侵害の責任を負うこと誓います。';
$string['turnitintooltwointro'] = '概要';
$string['turnitintooltwoname'] = 'Turnitin課題名';
$string['turnitintooltworesetdata0'] = 'Turnitinの課題をコピー<i>（写しの作成、新規Turnitinクラス）</i>';
$string['turnitintooltworesetdata1'] = 'Turnitin課題を差し替える<i>（課題のパートを差し替える、Turnitinのクラスを再利用する）</i>';
$string['turnitintooltworesetdata2'] = 'Turnitin課題をそのまま残す';
$string['turnitintooltworesetinfo'] = 'このコースのTurnitin課題において下のオプションを選択してください：';
$string['turnitintooltwoupdateerror'] = 'turnitintooltwoデータを更新できませんでした';
$string['turnitintooltwoagreement_desc'] = '<b>[オプション]</b><br />提出物への同意確認を入力してください。<br />（<b>注意：</b>同意欄が空白のまま残されると、学生の提出時に同意確認を要求しません）';
$string['turnitintooltwodeleteerror'] = 'turnitintooltwoデータを削除することができませんでした';
$string['turnitintooltwogeterror'] = 'turnitintooltwoデータを取得できませんでした';
$string['turnitinuseanon'] = '匿名コメント記入（マーキング）を使用';
$string['turnitinuseanon_desc'] = '提出物評価時に匿名コメントの記入（マーキング）を許可するかどうかを設定してください。<br /><i>（このオプションは、アカウントで匿名コメントの記入を設定している方にのみ利用可能です）</i>';
$string['turnitinusegrademark'] = 'GradeMarkを使用する';
$string['turnitinusegrademark_help'] = 'GradeMarkまたはMoodleのどちらかを使用して提出物を評価することを選択してください。';
$string['turnitinusegrademark_desc'] = 'GradeMarkを使用して提出物を評価するかどうかを選択してください。<br /><i>（このオプションは、アカウントでGradeMarkの使用を設定している方にのみ利用可能です）</i>';
$string['turnitinuserepository'] = '所属機関リポジトリをオンにする';
$string['turnitinuserepository_desc'] = 'Turnitin課題において所属機関リポジトリを使用するかどうかを選択してください。<br /><i>（このオプションは、アカウントで所属機関リポジトリの使用を設定している方にのみ利用可能です）</i>';
$string['turnitintutorsremove'] = 'Turnitin内のコースからチューターを削除しますか？';
$string['turnitinuserepository_help'] = '課題設定の画面で所属機関リポジトリのオプションを有効にするには、この設定を使用してください。<br /><i>（このオプションは、アカウントで所属機関リポジトリの使用を設定している方にのみ利用可能です）</i>';
$string['tutorstatus'] = '{$a->submitted}/{$a->total} 学生の提出物、{$a->graded} 採点済みの{$a->gplural}提出物';
$string['type'] = '提出物のタイプ';
$string['types'] = '提出物のタイプ';
$string['types_help'] = '<p>レポートの提出は、コピー／貼り付け、またはファイルのアップロードのいずれかでできます。</p>';
$string['unlinkusers'] = 'ユーザーのリンクを削除する';
$string['usercreationerror'] = 'Turnitinユーザー作成に失敗';
$string['userdeleteerror'] = 'ユーザーデータを削除できませんでした';
$string['usergeterror'] = 'ユーザーデータを得られませんでした';
$string['userstounlink'] = 'ユーザーを解除';
$string['userupdateerror'] = 'ユーザーデータを講師できませんでした';
$string['viewreport'] = 'レポートを閲覧する';
$string['wrongaccountid'] = 'Turnitinクラスにリンクする際にエラーが発生しました。あなたが設定したアカウントは{$a->current}のアカウントです。このクラスは、{$a->backupid}のアカウントからです。あなたは同じTurnitinアカウントにあるクラスのみ復元することができます。';
$string['copyassigndata'] = 'Turnitinの課題データをコピーする';
$string['replaceassigndata'] = 'Turnitinの課題データを差し替える';
$string['downloadexport'] = 'エクスポート';
$string['downloadorigzip'] = 'ZIPファイル（オリジナルフォーマット）';
$string['downloadpdfzip'] = 'ZIPファイル（PDF）';
$string['downloadgradexls'] = '評価エクスポート（XLS）';
$string['turnitintutors'] = 'Turnitinチューター';
$string['turnitintutorsadd'] = 'Turnitinチューターを追加';
$string['turnitintutorsallenrolled'] = '全てのチューターはTurnitinに登録済み';
$string['turnitintutors_desc'] = '下に選択したチューターはこのTurnitinクラスに登録しています。登録済みのチューターはTurnitinウェブサイトにログインすることによりこのクラスにアクセスすることができます。';
$string['duplicatesfound'] = 'Turnitinの同じ課題の重複が見つかりました。重複は、Turnitin APIによって、1つ以上のMoodle Directの課題が同じTurnitinの課題にリンクされた場合に発生します。これは、重複に対して提出された提出物が他の提出物受信箱に現れるという問題を引き起こすことがわかっています。この問題を防ぐには、重複した課題を削除するか、重複した課題があるコースをリセットしてください。<br /><br />見つかった重複：';
$string['erater'] = 'e-rater文法チェックを有効にする';
$string['eraternoun'] = 'E-rater';
$string['erater_handbook'] = 'ETS&copy; ハンドブック';
$string['erater_dictionary'] = 'e-rater 辞書';
$string['erater_categories'] = 'e-rater カテゴリー';
$string['erater_spelling'] = 'スペリング';
$string['erater_grammar'] = '文法';
$string['erater_usage'] = '使用法';
$string['erater_mechanics'] = 'メカニズム';
$string['erater_style'] = 'スタイル';
$string['erater_handbook_advanced'] = '上級';
$string['erater_handbook_highschool'] = '高校';
$string['erater_handbook_middleschool'] = '中学校';
$string['erater_handbook_elementary'] = '小学校';
$string['erater_handbook_learners'] = '英語学習者';
$string['erater_dictionary_enus'] = 'アメリカ英語辞書';
$string['erater_dictionary_engb'] = 'イギリス英語辞書';
$string['erater_dictionary_en'] = 'アメリカ／イギリス英語辞書';
$string['turnitinuseerater'] = 'ETS&copy;を有効にする';
$string['turnitinuseerater_desc'] = 'ETS&copy;文法チェックを有効にするかどうかを選択します。<br /><i>（これは、TurnitinのアカウントでETS&copy; e-raterが有効になっている場合にのみ選択してください）</i>';
$string['student_read'] = 'レポートの閲覧日：';
$string['student_notread'] = '受講生はこのレポートをまだ閲覧していません。';
$string['relinkusers'] = 'ユーザーを再リンクする';
$string['unlinkrelinkusers'] = 'ユーザーのリンクを削除／再リンクする';
$string['usersunlinkrelink'] = 'リンクを削除／再リンクしたいユーザー';
$string['turnitinid'] = 'Turnitin ID';
$string['turnitinsubmissionid'] = '既定設定';
$string['defaults'] = 'デフォルト設定';
$string['defaults_desc'] = '次の設定は新しい Moodle Direct Turnitin 課題 2に使用されるデフォルト設定となります。';
$string['upgradeavailable'] = 'アップグレードがご利用できます';
$string['coursemodidincorrect'] = 'コースモジュールIDが不正確です';
$string['coursemisconfigured'] = 'コースの設定に誤りがあります';
$string['coursemodincorrect'] = 'コースモジュールが不正確です';
$string['no'] = 'いいえ';
$string['yes'] = 'はい';
$string['migrationassignmentcreated'] = '移行課題を作成しました - ID： {$a}';
$string['migrationassignmentpartcreated'] = '移行課題のパートを作成しました - ID： {$a}';
$string['migrationassignmentcreationerror'] = '移行課題を作成できませんでした - コース {$a}';
$string['migrationassignmenterror1'] = '新しいコースモジュールをコースに追加できませんでした {$a}';
$string['migrationassignmenterror2'] = '新しいコースモジュールをセクションに追加できませんでした - コース {$a}';
$string['migrationassignmenterror3'] = '移行した課題にイベントを作成できませんでした - コース {$a}';
$string['migrationcoursecreateerror'] = 'Moodle上にコース{$a}を作成できませんでした';
$string['migrationcoursecreatederror'] = 'コース{$a}が再作成されましたが、リンクを保存中にエラーが発生しました';
$string['migrationcoursecreated'] = 'Moodle上にTurnitinのクラスが再作成されました';
$string['migrationcoursegeterror'] = 'Turnitinからクラスを入手することができません';
$string['migrationassignmentgeterror'] = 'Turnitinから課題を入手することができません';
$string['getassignmenterror'] = 'Turnitinから移行課題を取得できませんでした';
$string['checkupdateavailableerror'] = 'Moodle Directのバージョン更新をチェックできませんでした';
$string['maxmarkserror'] = '最高得点は0から100までに設定してください';
$string['nosubmissiondataavailable'] = '利用可能な提出物データは他にありません';
$string['nointegration'] = '統合無し';
$string['testingconnection'] = 'Turnitinへの接続をテスト中';
$string['integration'] = '統合';
$string['id'] = 'ID';
$string['course'] = 'コース';
$string['selectcoursecategory'] = 'コースカテゴリーを選択してください';
$string['module'] = 'モジュール';
$string['source'] = 'ソース';
$string['similarity'] = '類似性';
$string['moodlelinked'] = 'Moodleにリンクされました';
$string['coursegettiierror'] = 'Turnitinからコースのデータを取得できませんでした';
$string['savecourseenddateerror'] = '新しいコースの終了日をTurnitinに保存する際、エラーが発生しました';
$string['savecourseenddate'] = '新しいコースの終了日を保存する';
$string['newcourseenddate'] = '新しいコースの終了日';
$string['newenddatedesc'] = 'コースの新しい終了日を選択してください。選択された日付はTurnitinで更新されます。';
$string['close'] = '閉じる';
$string['errors'] = 'エラー';
$string['setinstructordefaults'] = 'これらの値を課題のデフォルトとして設定する';
$string['setinstructordefaults_help'] = 'これらの設定は作成されたMoodle Direct Turnitin 課題に適用されます。これらはシステム管理者によって決められた既定の設定よりも優先され、あなた独自の設定となります。';
$string['messagesinbox'] = 'Turnitinメッセージ受信箱';
$string['downloadgrademarkzip'] = '選択したGradeMarkファイルをダウンロードする';
$string['downloadorigfileszip'] = 'オリジナルファイルをダウンロードする';
$string['uploadingsubtoturnitin'] = '提出物をTurnitinへアップロードする';
$string['emptycreatedfile'] = '提出しようとしているファイルは空か、またはこわれています';
$string['studentdataprivacy'] = '受講生データプライバシー設定';
$string['studentdataprivacy_desc'] = '次の設定では、API経由で学生の個人情報をTurnitinに送信しないことを選択できます。';
$string['enablepseudo'] = '学生プライバシーを有効にする';
$string['enablepseudo_desc'] = 'このオプションを選択すると、学生の電子メール アドレスがTurnitin APIコールに変更されます。<br /><i>（<b>注意：</b>このオプションは、MoodleのユーザーデータがすでにTurnitinと同期されている場合は、変更できません）</i>';
$string['pseudofirstname'] = '学生の疑似の名前';
$string['pseudofirstname_desc'] = '<b>[オプション]</b><br />Turnitinの文書閲覧に学生の名だけが表示されます。';
$string['pseudolastname'] = '学生の疑似の姓';
$string['pseudolastname_desc'] = '文書閲覧に学生の名字が表示されます。';
$string['pseudolastnamegen'] = '名字を自動作成する';
$string['pseudolastnamegen_desc'] = 'これを有効にすると、疑似の姓がユーザーのプロファイルフィールドに設定され、このフィールドが固有のIDとして自動的に入力されます。';
$string['pseudoemailsalt'] = '擬似暗号化ソルト';
$string['pseudoemailsalt_desc'] = '<b>[オプション]</b><br />作成された学生の疑似電子メール アドレスをさらに複雑にするために、ソルトを使用できます。<br />（<b>注意：</b>疑似電子メール アドレスの一貫性を保つためには、ソルトを変更しないでください）';
$string['pseudoemaildomain'] = '疑似電子メールドメイン';
$string['pseudoemaildomain_desc'] = '<b>[オプション]</b><br />疑似電子メール アドレスのオプションドメイン（空白のままにすると、デフォルトで@tiimoodle.comに設定されます）';
$string['pseudoemailaddress'] = '疑似電子メール アドレス';
$string['instructor'] = '講師';
$string['files'] = 'ファイル';
$string['filedeleteconfirm'] = 'このファイルを削除しますか？一度削除すると元に戻すことができません。';
$string['filebrowser'] = 'Moodle Direct ファイルブラウザ';
$string['deletable'] = '消去可能';
$string['inactive'] = '無効';
$string['created'] = '作成済み';
$string['filename'] = 'ファイル名';
$string['user'] = 'ユーザー';
$string['sprevious'] = '前';
$string['snext'] = '次';
$string['semptytable'] = '検索結果がありません。';
$string['slengthmenu'] = '表示 _MENU_ 項目';
$string['ssearch'] = '検索：';
$string['sprocessing'] = 'Turnitinからデータをロード中...';
$string['szerorecords'] = '表示できる記録がありません。';
$string['sinfo'] = '_START_～_END_（全_TOTAL_）エントリを表示';
$string['unlinkedusers'] = 'リンクされていないユーザー';
$string['modulename_help'] = 'Moodle内のアクティビティーとTurnitinの課題をリンクする、Turnitin Moodle Directの課題が作成されます。いったんアクティビティーをリンクすると、インストラクタがTurnitin文書閲覧内の評価ツールを使って、学生の文章を評価したりフィードバックを返すことができるようになります。';
$string['transmatch'] = '翻訳一致機能';
$string['transmatch_desc'] = '課題の設定画面で翻訳一致機能を利用するかどうかを決めます。<br /><i>（Turnitinアカウントで翻訳一致機能を有効にしている場合にのみ、このオプションを使用してください）</i>';
$string['turnitintooltwo:addinstance'] = 'Turnitin ツールアクティビティーを追加する';
$string['copyrightagreementerror'] = '提出する前に同意するかどうかを示すボックスをチェックしてください。';
$string['updatepart'] = 'パートを更新する';
$string['grademark'] = 'GradeMark';
$string['launchgrademark'] = 'GradeMark';
$string['submissiondeleted'] = '提出物が削除されました';
$string['tutoradded'] = 'Turnitin のコースにチューターが追加されました';
$string['tutoraddingerror'] = 'Turnitin のコースにチューターを追加する際、問題が発生しました';
$string['tutorremoved'] = 'Turnitin のコースからチューターが削除されました';
$string['tutorremovingerror'] = 'Turnitin のコースからチューターを削除する際、問題が発生しました';
$string['noturnitinassignemnts'] = 'Turnitin課題がありません';
$string['notutors'] = 'Turnitinでこのクラスに登録しているチューターはいません';
$string['settings'] = '設定';
$string['faultcode'] = 'フォルトコード';
$string['line'] = 'ライン';
$string['message'] = 'メッセージ';
$string['code'] = 'コード';
$string['userfinderror'] = 'Turnitinのユーザーを検索中にエラーが発生しました';
$string['userjoinerror'] = 'Turnitinのコースにユーザーを登録中にエラーが発生しました';
$string['userremoveerror'] = 'Turnitinのコースからにユーザーを削除中にエラーが発生しました';
$string['membercheckerror'] = 'このコースに登録しているユーザーを確認中にエラーが発生しました';
$string['tiiusergeterror'] = 'ユーザー情報をTurnitinから入手する際にエラーが発生しました';
$string['createassignmenterror'] = '課題をTurnitinで作成する際にエラーが発生しました';
$string['editassignmenterror'] = '課題をTurnitinで編集する際にエラーが発生しました';
$string['deleteassignmenterror'] = 'Turnitinで課題を削除する際にエラーが発生しました';
$string['createsubmissionerror'] = 'Turnitinで提出物を作成する際にエラーが発生しました';
$string['updatesubmissionerror'] = '提出物をTurnitinへ再提出する際にエラーが発生しました';
$string['tiisubmissiongeterror'] = '提出物をTurnitinから入手する際にエラーが発生しました';
$string['tiisubmissionsgeterror'] = '提出物をTurnitinからこの課題へ入手する際にエラーが発生しました';
$string['enrolling'] = '受講生をTurnitinに登録する';
$string['tiiassignmentgeterror'] = 'Turnitinから課題を入手する際にエラーが発生しました';
$string['turnitinstudents'] = 'Turnitin受講生';
$string['turnitinstudentsremove'] = 'Turnitin内のコースからこの受講生を削除しますか？';
$string['studentremoved'] = 'Turnitin内のコースから受講生が削除されました';
$string['studentremovingerror'] = 'Turnitin内のコースから受講生を削除する際にエラーが発生しました';
$string['turnitinstudents_desc'] = '選択された下記のユーザーはこのTurnitinクラスに登録しています。登録している受講生はTurnitinウェブサイトからログインすることによって、このクラスにアクセスできます。';
$string['coursebrowserdesc'] = 'Moodle内でコースとして再作成したいクラスをTurnitinから検索することができます';
$string['courseexistsmoodle'] = 'このクラスは現在次の形でMoodleに存在します：';
$string['coursetitle'] = 'コースタイトル';
$string['coursetitleerror'] = '検索したいクラス名を入力してください';
$string['createmoodlecourses'] = 'コースを再作成する';
$string['createmoodleassignments'] = 'Moodle内の選択したクラス全ての課題を再作成しますか？';
$string['recreatemulticlasses'] = '現在再作成されているクラスを選択したため、数によってはこの作業に数分かかることがあります。';
$string['recreatemulticlassescomplete'] = 'クラスの再作成が完了しました。{$a->completed}件中{$a->total}件のクラスが正しく作成されました。';
$string['createcourse'] = '新しいMoodleコースを作成する';
$string['linkcourse'] = 'コースを現存するMoodleコースにリンクする';
$string['selectcourse'] = 'Moodleコースを選択する';
$string['defaultcoursetiititle'] = 'Turnitinのコース';
$string['or'] = 'または';
$string['downloadassignment'] = '課題をMoodleにダウンロードする';
$string['assignmenttitle'] = '新規課題タイトル';
$string['defaultassignmenttiititle'] = 'Turnitinの課題';
$string['revealdesc'] = '受講生名を公表する理由を述べてください。';
$string['noreason'] = '理由が述べられていません';
$string['unanonymiseerror'] = '受講生名を公表する際にエラーが発生しました';
$string['digitalreceipt'] = 'デジタル受領書';
$string['viewdigitalreceipt'] = 'デジタル受領書を見る';
$string['noscript'] = 'Turnitinをご利用になるにはJavascriptを有効にする必要がありますが、お使いのブラウザでは現在オフになっています。Turnitinの機能をフルにご利用いただくためには、ブラウザのJavascriptを有効にしてください。';
$string['noscriptsummary'] = 'Turnitinをご利用になるにはジャバスクリプトが作動されていなければなりませんが、あなたのブラウザでは現在オフになっています。作動されていなければTurnitinを使用できません。';
$string['noscriptula'] = '（ジャバスクリプトが作動されていないため、Turnitinユーザー使用規約に承諾した後、提出する前にこのページをマニュアル操作で更新する必要があります。）';
$string['showsummary'] = '課題概要を表示する';
$string['hidesummary'] = '課題概要を表示しない';
$string['marksavailable'] = 'マークが使用できます';
$string['deletepart'] = 'パートを削除する';
$string['partdeleted'] = '課題のパートが削除されました';
$string['turnitin'] = 'Turnitin';
$string['coursebrowserassignmentdesc'] = '下の表で、課題を5つまで選択し、Moodle内で複製されたTurnitin課題のパートを作成できます。';
$string['turnitinoroptions'] = 'オリジナリティーレポートオプション';
$string['turnitingmoptions'] = 'GradeMarkオプション';
$string['attachrubric'] = '採点をこの課題に添付する';
$string['norubric'] = '採点なし';
$string['otherrubric'] = '他の講師に属するルーブリックを使用する';
$string['attachrubricnote'] = '注意：学生は提出する前に、添付された採点およびその内容を閲覧できます。';
$string['changerubricwarning'] = '採点を変更したり解除したりすると、スコアカードを含めてこの課題のレポートに既に存在する採点がすべて削除されます。以前に採点されたレポートの全体評価は残ります。';
$string['launchrubricmanager'] = '採点マネジャーを起動する';
$string['launchrubricview'] = 'マーキングに使用された採点を閲覧する';
$string['launchrubricviewshort'] = 'ルーブリックを作成中';
$string['launchquickmarkmanager'] = 'Quickmarkマネジャーを起動する';
$string['launchpeermarkmanager'] = 'Peermarkマネジャーを起動する';
$string['launchpeermarkreviews'] = 'Peermarkレビューを起動する';
$string['peermark'] = 'Peermark';
$string['peermarkassignments'] = 'Peermark課題';
$string['showpeermark'] = 'Peermark課題を表示する';
$string['hidepeermark'] = 'Peermark課題を表示しない';
$string['noofreviewsrequired'] = '必修のレビュー数';
$string['showpeermarkinstructions'] = 'Peermarkの詳細を表示する';
$string['hidepeermarkinstructions'] = 'Peermarkの詳細を表示しない';
$string['turnitinenablepeermark'] = 'Peermark課題のみを有効にする';
$string['turnitinenablepeermark_desc'] = 'Peermark課題の作成を許可するかどうかを選択してください。<br/><i>（Peermarkがアカウントに設定されている場合のみに使用可能です）</i>';
$string['nonenrolledstudent'] = '登録していない学生';
$string['startdatenotyearago'] = '開始日は一年以内に設定してください。';
$string['searchcourses'] = 'コースを検索する';
$string['errorsdesc'] = '次のファイルをTurnitinへアップロードする際に問題が起きました。';
$string['tiiexplain'] = 'Turnitinは商用製品であり、このサービスを利用するにはサービス料のお支払いが必要です。詳しくは、<a href=http://docs.moodle.org/en/Turnitin_administration>http://docs.moodle.org/en/Turnitin_administration</a>をご覧ください。';
$string['useturnitin'] = 'Turnitinを有効にする';
$string['turnitinconfig'] = 'Turnitin Plagiarismプラグインの構成';
$string['studentdisclosuredefault'] = 'アップロードされた全てのファイルは、剽窃発見サービスのTurnitin.comに提出されます';
$string['studentdisclosure'] = '受講生への情報開示';
$string['studentdisclosure_help'] = 'この文章はファイルアップロードページで受講生に表示されます';
$string['settingsinserterror'] = '設定をデータベースに挿入中にエラーが発生しました';
$string['settingsupdateerror'] = '設定をデータベースに更新中にエラーが発生しました';
$string['config'] = '設定';
$string['configupdated'] = '設定が更新されました';
$string['turnitindefaults'] = 'Turnitin Plagiarismプラグインデフォルト設定';
$string['turnitinpluginsettings'] = 'Turnitin Plagiarismプラグイン設定';
$string['defaultsdesc'] = '次の設定はアクティビティーモジュール内のTurnitinを有効にする際のデフォルト設定です';
$string['compareinstitution'] = '提出されたファイルを教育機関内のレポートと比較する';
$string['defaultinserterror'] = 'データベースのデフォルト設定値を挿入中にエラーが発生しました';
$string['defaultupdateerror'] = 'データベースのデフォルト設定値を更新中にエラーが発生しました';
$string['defaultupdated'] = 'Turnitin デフォルトが更新されました';
$string['pp_createsubmissionerror'] = '提出物を作成する際に剽窃プラグインにエラーが発生しました';
$string['pp_updatesubmissionerror'] = '提出物を更新する際に、剽窃プラグインにエラーが発生しました';
$string['coursestomigrate'] = 'Turnitinから{$a}件のクラスを復元することができます';
$string['gradingtemplate'] = '評価テンプレート';
$string['allownonor'] = 'すべてのファイルタイプの提出物の提出を許可しますか？';
$string['allownonor_help'] = 'この設定では、すべてのファイルタイプで提出が可能になります。この設定を［はい］に設定すると、提出物のオリジナリティがチェックされ、ダウンロードが可能になり、また、GradeMarkフィードバックツールも利用できるようになります。';
$string['submitnothing'] = 'この学生に対する評価を提出物なしで有効にする';
$string['submitnothingwarning'] = '灰色のペンをクリックすると、ファイルを提出していない学生に対して、課題のGradeMarkフィードバックを返すための評価テンプレートを作成できるようになります。評価テンプレートは提出の役割を果たし、再提出が許可されていない課題に学生が提出しないようにすることもできます。<br><br>提出物なしでも評価をしますか？';
$string['draftsubmit'] = 'いつTurnitinにファイルを提出しますか？';
$string['submitondraft'] = '最初にアップロードされた際にファイルを提出する';
$string['submitonfinal'] = '受講生がマーキングに送信した際にファイルを提出する';
$string['turnitindiagnostic'] = '診断モードをオンにする';
$string['turnitindiagnostic_desc'] = '<b>[注意]</b><br />Turnitin APIを使用して診断モードを有効にするのは、問題を追跡するときにだけにしてください。';
$string['autorefreshgrades'] = '成績／スコアを自動的にリフレッシュする';
$string['autorefreshgrades_help'] = 'デフォルトでは、Turnitinへのコールごとに、Moodle統合プラグインによってTurnitin内への変更を自動的に引き出します。この機能は、このオプションを使って無効にすることができます。ただし、双方のシステム間の同期を維持するには、Moodle内の成績やオリジナリティのスコアを手動で頻繁に更新する必要があります。';
$string['yesgrades'] = 'はい、自動的にオリジナリティのスコアと成績をリフレッシュする';
$string['nogrades'] = 'いいえ、手動でオリジナリティのスコアと成績を更新する';
$string['submissionagreementerror'] = 'この提出物に対して契約に同意してください。';
$string['noxmlwriterlibrary'] = 'このプラグインを使用するには、PHP XMLWriter エクステンションがあなたのサーバーにインストールされていなければなりません。';
$string['checkupgrade'] = '使用できるアップグレードを確認する';
$string['checkingupgrade'] = '使用できるアップグレードを確認中';
$string['usinglatest'] = 'あなたは最新のバージョンを使用しています！';
$string['useturnitin_mod'] = 'Turnitinを有効にする： {$a}';
$string['notorcapable'] = 'このファイルに対してオリジナリティ レポートを作成することができません。';
$string['redirecttoeula'] = '使用許諾契約へリダイレクトします。';
$string['filedoesnotexist'] = 'ファイルは削除されました';
$string['eventremoved'] = 'このイベントは cron queue から削除されており、再度処理されることはありません。';
$string['partnametoolarge'] = 'パート名が長すぎます。40文字までに制限してください。';
$string['enableperformancelogs'] = 'ネットワークパフォーマンスログを有効にする';
$string['enableperformancelogs_desc'] = '有効にすると、Turnitinサーバーへの各リクエストは{tempdir}/turnitintooltwo/logsにログされます。';
$string['listsubmissions'] = '提出物をリストする';
$string['viewsubmission'] = '提出物を見る';
$string['listsubmissionsdesc'] = 'ユーザーはコースの提出物のリストを閲覧しました';
$string['viewsubmissiondesc'] = 'ユーザーは提出物を閲覧しました';
$string['addsubmissiondesc'] = 'ユーザーは提出物を追加しました';
$string['deletesubmissiondesc'] = 'ユーザーは提出物を削除しました';
$string['turnitinrepositoryoptions'] = 'レポートリポジトリの課題';
$string['turnitinrepositoryoptions_desc'] = 'Turnitin課題のリポジトリ オプションを選択してください。<br /><i>（所属機関リポジトリは、アカウントで有効にしている場合にのみ利用可能です）</i>';
$string['turnitinrepositoryoptions_help'] = 'この設定を使って、課題設定画面のリポジトリ オプションを変更してください。<br /><i>（所属機関リポジトリは、アカウントで有効にしている場合にのみ利用可能です）</i>';
$string['repositoryoptions_0'] = 'インストラクタの標準リポジトリ オプションを有効にする';
$string['repositoryoptions_1'] = '講師の拡大リポジトリオプションを有効にする';
$string['repositoryoptions_2'] = 'すべてのレポートを標準リポジトリに提出する';
$string['repositoryoptions_3'] = 'レポートをリポジトリに提出しない';
$string['turnitinula_btn'] = 'こちらをクリックし、規約に同意してください';
$string['turnitinula'] = '提出する前に、Turnitinの利用規約に同意する必要があります。';
$string['upgradenotavailable'] = 'アップグレードがありません';
$string['turnitintoolofflineerror'] = '現在一時的な問題が発生しています。後ほど再度試みてください。';
$string['offlinestatus'] = 'Turnitinがオフラインになっています。（変数 $CFG->tiioffline が設定されています。）';
$string['disableanonconfirm'] = 'これで、匿名マーキングはこの課題に対して完全に不作動になります。続行しますか？';
$string['uniquepartname'] = 'パート名は固有でなければなりません';
$string['closebutton'] = '閉じる';
$string['reportgenspeed_help'] = 'この課題の設定には、&#39;報告書を即座に生成する（再提出は許可されていません）&#39;、&#39;報告書を即座に生成する（再提出は提出期限日まで提出可能です）&#39;、&#39;提出期限日に報告書を生成する（再提出は提出期限日まで提出可能です）&#39;の、3つのオプションがあります。<br /><br />&#39;報告書を即座に生成する（再提出は許可されていません）&#39;のオプションは、学生が提出すると、オリジナリティレポートが即座に作成されます。このオプションを選択すると、学生はこの課題への再提出ができません。<br /><br />再提出を許可するには、&#39;報告書を即座に生成する（再提出は提出期限日まで提出可能です）&#39;を選択してください。このオプションを選択すると、学生は期限日までレポートを再提出することができます。再提出物に対するオリジナリティ レポートの作成には、24時間ほどかかります。<br /><br />また、&#39;提出期限日に報告書を生成する（再提出は提出期限日まで提出可能です）&#39;のオプションでは、オリジナリティ レポートが課題の提出期限日に作成されます。この設定では、オリジナリティ レポートが作成される際、この課題に対して提出されたすべてのレポートが互いの提出物に対して比較されます。';
$string['submissiondate'] = '提出日';
$string['receiptassignmenttitle'] = '課題タイトル';
$string['refid'] = '参照ID';
$string['turnitinpaperid'] = 'Turnitin レポート ID';
$string['submissionauthor'] = '提出物の著者';
$string['receiptparagraph'] = 'この受領書はTurnitinがあなたのレポートを受理したことを確認するものです。下記は、あなたの提出物に関する受領書の情報です。';
$string['objectid'] = 'Turnitin レポート ID';
$string['anonalert'] = '発表日が現在の日付よりも前に設定されているため、これを保存すると、この課題に対する匿名マーキング機能が完全に無効になります。';
$string['turnitinapiurl_desc'] = '<b>[必須]</b><br />Turnitin APIのURLを選択する';
$string['tii_submission_failure'] = '更なる詳細については、チューターまたは、Moodle管理者までご相談ください';
$string['turnitinrefreshingsubmissions'] = '提出物を更新中';
$string['turnitinanon_help'] = 'このオプションを［はい］にすると、Turnitinの課題で匿名マーキングを使用するように設定することができます。匿名マーキングは、提出があると無効にできなくなります。';
$string['digital_receipt_subject'] = 'これはあなたのTurnitinのデジタル受領書です';
$string['digital_receipt_message'] = '{$a->lastname} {$a->firstname}様、<br /><br />あなたは<strong>{$a->submission_date}</strong>に、<strong>{$a->course_fullname}</strong>クラスの課題<strong>{$a->assignment_name}{$a->assignment_part}</strong>にファイル<strong>{$a->submission_title}</strong>を提出しました。提出IDは<strong>{$a->submission_id}</strong>です。デジタル受領書はすべて、あなたの課題受信箱および文書閲覧内にある印刷やダウンロードボタンを使って閲覧および印刷することができます。<br /><br />Turnitinをご利用いただき、ありがとうございます。<br /><br />Turnitinチーム一同';
$string['messageprovider:submission'] = 'Turnitinの課題のデジタル受領書 に関する通知';
$string['errorenrollingall'] = '全学生をTurnitinに登録する際にエラーが発生しました。システム管理者にお問い合わせください。';
$string['ppassignmentcreateerror'] = 'このモジュールをTurnitin上で作成できませんでした。詳しい情報については、APIログをご覧ください。';
$string['pp_classcreationerror'] = 'このクラスをTurnitin上で作成できませんでした。詳しい情報については、APIログをご覧ください。';
$string['pp_submission_error'] = 'Turnitinから次の提出物についてエラーが返されました。';
$string['turnitinppulapre'] = 'Turnitinにファイルを提出するには、EULAへの同意が必要です。EULAに同意しないことを選択すると、ファイルはMoodleだけに提出されます。同意するには、こちらをクリックしてください。';
$string['turnitinppulapost'] = 'あなたのファイルはTurnitinに提出されませんでした。こちらをクリックして、EULAに同意してください。';
$string['listsubmissionsdesc_student'] = 'ユーザーがコースの提出物受信箱を表示しました';
$string['gradenosubmission'] = 'ユーザーIDに対して、提出物なしの評価を有効にしました';
$string['turnitinstatus'] = 'Turnitinのステータス';
$string['resubmittoturnitin'] = 'Turnitinに再提出する';
$string['resubmitting'] = '再提出中';
$string['addresubmissiontiidesc'] = 'ユーザーの再提出物がTurnitinに送信されました';
$string['addsubmissiontiidesc'] = 'ユーザーの提出物がTurnitinに送信されました';
$string['deletesubmissiontiidesc'] = 'ユーザーがTurnitinから提出物を削除しました';
$string['download'] = 'ダウンロード';
$string['grademarkzip'] = '選択されたGradeMarkファイル';
$string['origfileszip'] = 'オリジナルファイル';
$string['sharedrubric'] = '共有された採点';
$string['resubmitselected'] = '選択したファイルを再提出する';
$string['turnitininboxlayout'] = '課題ページのレイアウト';
$string['turnitininboxlayout_desc'] = 'Turnitinの課題ページにナビゲーションを表示するか、全幅で表示するかを選択します。';
$string['layoutoptions_0'] = '全幅';
$string['layoutoptions_1'] = 'Moodleのデフォルトのナビゲーション表示';
$string['messagenonsubmitters'] = '未提出者に通知する';
$string['nonsubmittersformdesc'] = 'この課題にまだ提出していない学生に送るメッセージを以下に入力してください。';
$string['nonsubmitterssubject'] = '件名';
$string['nonsubmittersmessage'] = 'メッセージ';
$string['nonsubmitterssendtoself'] = 'このメッセージのコピーを自分に送る';
$string['nonsubmitterssubmit'] = '電子メールを送る';
$string['nonsubmitterserror'] = '電子メールの件名とメッセージを入力してください';
$string['nonsubmitterssubjecterror'] = '電子メールの件名を入力してください';
$string['nonsubmittersmessageerror'] = '電子メールのメッセージを入力してください';
$string['nonsubmittersformsuccess'] = '未提出者にメッセージが送信されました。';
$string['messageprovider:nonsubmitters'] = 'Turnitinの課題の未提出者への通知';
$string['checkagainstnote'] = '注意：［～に対してチェックする］オプションのいずれにも［はい］を選択しなかった場合は、オリジナリティ レポートが生成されません。';
$string['anonblindmarkingnote'] = '注意：Turnitinの個別の匿名マーキングの設定が削除されました。Turnitinでは、Moodleのブラインドマーキングの設定を使って、匿名マーキングの設定を決定します。';
$string['displaygradesas'] = '成績の表示';
$string['displaygradesas_help'] = 'このオプションで成績の表示モードを設定します。選択肢には、パーセントでの表示と、45/60といった分数での表示があります。';
$string['displaygradesasfraction'] = '分数で表示（89/100点など）';
$string['displaygradesaspercent'] = 'パーセントで表示（89&#37;など）';
$string['genspeednote'] = '注意：再提出物に対するオリジナリティ レポートの作成には、24時間ほどかかります。';
$string['cronsubmittedsuccessfully'] = '{$a->coursename}コースの課題{$a->assignmentname}に対して、提出物：{$a->title}（TII ID：{$a->submissionid}）が正しくTurnitinに送信されました。';
$string['ppassignmentediterror'] = 'モジュール{$a->title}（TII ID：{$a->assignmentid}）をTurnitin上で作成できませんでした。詳しい情報については、APIログをご覧ください。';
$string['nombstringlibrary'] = 'このプラグインを使用するには、PHP mbstring拡張がサーバー上にインストールされていなければなりません。';
$string['receipt_instructor_copy'] = '<strong>{$a->submission_title}</strong>という名前の提出物が<strong>{$a->course_fullname}</strong>.<br /><br />クラスの課題<strong>{$a->assignment_name}{$a->assignment_part}</strong>に送られました。提出ID：<strong>{$a->submission_id}</strong><br />提出日： <strong>{$a->submission_date}</strong><br />';
$string['receipt_instructor_copy_subject'] = '提出物が課題に送られました';
$string['instructorreceipt'] = '送信時にインストラクタに通知する';
$string['instructorreceipt_desc'] = '提出物を課題に送った際にコースのインストラクタに通知を送るかどうかを選択します。';
$string['loadingdv'] = 'Turnitin文書閲覧を読み込み中...';
$string['messageprovider:notify_instructor_of_submission'] = 'Turnitinの課題のインストラクタ用デジタル受領書に関する通知';
$string['postdate_warning'] = '課題の日程を変更すると、学生が成績を受け取る日と、学生のIDがインストラクタに通知される日に影響することがあります。';
$string['task_name'] = 'Turnitintooltwo Cronタスク';
$string['crontaskmodeactive'] = 'Turnitintooltwo - タスクモードがアクティブのため、Cronコールを中止しました';
$string['restorationheader'] = 'Turnitinクラスの復元';
$string['turnitinhelpdesk'] = 'Turnitinヘルプデスク';
$string['helpdesklink'] = 'Turnitinに関するヘルプが必要な場合';
$string['turnitinsettingshelpwizard'] = 'インストラクタのためのTurnitinヘルプデスクを有効にする';
$string['turnitinsettingshelpwizard_desc'] = 'これを選択すると、インストラクタがMoodle内からTurnitinヘルプデスクウィザードにアクセスできるようになります。';
$string['tiiaccountconfig'] = 'Turnitinアカウントの構成';
$string['tiiaccountsettings'] = 'Turnitinアカウントの設定';
$string['tiiaccountsettings_desc'] = 'これらの設定がTurnitinアカウントでの構成と一致していることを確認してください。一致していないと、課題の作成や学生の提出物に問題が発生することがあります。';
$string['tiimiscsettings'] = 'その他のプラグインの設定';
$string['tiidebugginglogs'] = 'デバッグとログ';
$string['diagnosticoptions_0'] = 'オフ';
$string['diagnosticoptions_1'] = '標準';
$string['diagnosticoptions_2'] = 'デバッグ';
$string['reportgenspeed_resubmission'] = 'この課題に対するレポートはすでに提出されており、その提出への類似性レポートが作成されました。レポートを再提出すると選択した場合、最初の提出と置き換えられ、新たなレポートが作成されます。{$a->num_resubmissions}再提出後は、新しい類似性レポートを見るのに再提出から{$a->num_hours}時間待つ必要があります。';
