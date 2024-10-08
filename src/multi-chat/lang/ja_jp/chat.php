<?php

return [
    'route' => 'チャット',

    'hint.select_a_chatroom' => 'チャットを開始するには、チャットルームを選択してください',
    'header.new_chat' => '現在、チャットモデルを指定しています',
    'prompt_area.hint' => 'ここにメッセージを入力してください',
    'button.new_chat' => '新しいチャット',
    'button.unchain' => '単発 Q&A',
    'button.chained' => '連結 Q&A',
    'button.cancel' => 'キャンセル',
    'button.delete' => '削除',
    'react_btn.safety_guard' => '安全ガード',
    'return_to_menu' => 'メインメニューに戻る',
    'button.export_chat' => 'チャット履歴をエクスポート',
    'tooltip.json_btn' => 'エスケープのない JSON 形式',
    'tooltip.TSV' => 'Excel で読み込めるタブ区切り',
    'button.download.TXT' => 'TXT ファイルをダウンロード',
    'button.download.JSON' => 'JSON ファイルをダウンロード',
    'button.download.PDF' => 'PDF ファイルをダウンロード',
    'button.download.DOC' => 'DOC ファイルをダウンロード',
    'label.TSV' => 'タブ区切りデータ（.txt ファイル）',
    'label.JSON' => 'JSON 形式（.json ファイル）',
    'label.share_link' => '共有リンク（現在は自分だけがアクセスできます）',
    'react_btn.copy' => 'コピー',
    'react_btn.like' => 'いいね',
    'react_btn.dislike' => 'よくないね',
    'react_btn.translate' => 'このモデルで翻訳',
    'react_btn.quote' => 'このメッセージを引用する',

    'modal.export.header' => 'チャット履歴をエクスポート',
    'modal.import.header' => 'チャット履歴をインポート',
    'modal.import.button.file' => 'ファイルからインポート',
    'modal.import.hint.drag_and_drop' => '...あるいは、ファイルをここにドラッグアンドドロップしてください',
    'modal.import.submit' => 'インポート',
    'hint.send.empty' => '空のメッセージを送信することはできません',
    'hint.send.still_processing' => '以前のリクエストがまだ処理中です。長すぎる場合は、ページを再読み込みしてみてください。',
    'hint.must_select_llm' => 'チャットするモデルを選択していません。選択してください！',
    'hint.please_refresh' => '何かがおかしいようです！ページを更新してください。',

    'modal.feedback.header' => 'フィードバックを送信',
    'modal.feedback.label.correct' => '正確である',
    'modal.feedback.label.easy to understand' => '理解しやすい',
    'modal.feedback.label.complete' => '完全な回答である',
    'modal.feedback.label.unsafe' => '不適切である',
    'modal.feedback.label.incorrect' => '事実ではない',
    'modal.feedback.label.inrelvent' => '的外れである',
    'modal.feedback.label.language' => '言語が間違っている',
    'modal.feedback.hint.bad' => 'その他のフィードバックまたは回答の改善策を提供してください',
    'modal.feedback.hint.good' => 'この回答が良いと思った理由を教えてください',
    'modal.feedback.button.submit' => 'フィードバックを送信',

    'button.upload_file' => 'ファイルをアップロード',
    'hint.llm_returned_empty' => '[申し訳ありませんが、現在モデルが混み合っています。しばらくしてからもう一度お試しください。問題が解決しない場合は、報告してください。]',
    'hint.please_retry_later' => '[申し訳ありませんが、何かが壊れています。しばらくしてからもう一度お試しください。]',
    'hint.file_too_large' => 'ファイルが大きすぎます',
    'hint.no_worker' => '[申し訳ありませんが、現在、そのメッセージを処理できるワーカーがいません。管理者に報告するか、しばらくしてからもう一度お試しください！]',
    'hint.url_required' => 'このモデルは、URL リンクで始める必要があります',
    'hint.first_url' => 'このモデルは、URL リンクで始める必要があります！',
    'hint.file_required' => 'このモデルを使用するには、ドキュメントが先頭にある必要があります。<br>最初にファイル（最大 10MB）をアップロードしてください',
    'hint.input_too_large' => '[申し訳ありませんが、入力したメッセージが長すぎます！]',
    'llm.describe_default' => 'この言語モデルは現在利用可能です！',
    'hint.human_feedback_only' => 'ここはモデルのフィードバック収集に使用されており、インポートとエクスポートのみ可能です。',

    'label.multiple_send' => '複数選択して送信',
    'label.direct_send' => '単一選択して直接送信',
    'modal.delete_chat.header' => 'チャットルーム「',
    'hint.no_permission_to_upload_file' => '申し訳ありませんが、ファイルをアップロードする権限がありません',
    'hint.no_llms' => '使用可能なモデルがありません<br>後で再訪してください！',
    'button.verilog_compile_test' => 'コンパイルテスト',
    'hint.backend_offline' => 'バックエンドがオフラインです',
    'label.compiling' => 'コンパイル中',
    'hint.success' => '成功',
    'hint.failed' => '失敗',
    'hint.copied' => 'コピーしました',
    'hint.processing' => 'メッセージを処理しています...しばらくお待ちください...',
    'hint.upload_file_too_large' => 'ファイルサイズが上限を超えています',
    'hint.upload_not_allowed_ext' => 'アップロードが許可されていないファイルの種類です',
    'hint.upload_disabled_by_admin' => 'ファイルのアップロード機能は管理者によって無効化されています',
];