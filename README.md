## 概要

Gatsby.js など静的サイトジェネで手取り早くフォームを使うには

- Netlify フォーム
- Ggoogle フォーム

の主に二通り

ただし、上記二つとも要件に沿わない時に

- サーバーの任意の箇所に WordPress 突っ込んで Gatsby 側で iframe 呼び出し

という選択肢もある

## 使い方

1. サーバーに WordPress 突っ込む
2. このテーマインストール
3. Contact Form 7 インストール
4. お問い合わせ > 新規追加で下記テンプレを使用する
5. 固定ページでショートコード呼び出し
6. URL をもとに Gatsby で iframe 呼び出し

## テンプレ

```
<table class="inquiry">
<tr>
<th>
<span class="haveto">必須</span><span>お名前</span>
</th>
<td>
[text* your-name class:textsp placeholder"鈴木 花子"]
</td>
</tr>
<tr>
<th>
<span class="haveto">必須</span><span>メールアドレス</span>
</th>
<td>[email* your-email class:mailsp placeholder"xxxxx@gmail.com"]</td>
</tr>
<tr>
<th>
<span class="any">任意</span><span>電話番号</span>
</th>
<td>
[tel your-tel class:tel placeholder"090-0000-0000"]
</td>
</tr>
<tr>
<th>
<span class="haveto">必須</span><span>お問い合わせ種別</span>
</th>
<td>
[select* contact-menu include_blank "●●種別1●●" "●●種別2●●" "●●種別3●●" "●●種別4●●" "●●種別5●●"]
</td>
</tr>
<tr>
<th>
<span class="haveto">必須</span><span>お問い合わせ内容</span>
</th>
<td>
[textarea* your-message class:content placeholder "具体的なお問い合わせ内容をご記入ください"]
</td>
</tr>
</table>
<p style="text-align:center">[acceptance accept-this-1 class:input2] スパムメール防止のため、こちらのボックスにチェックを入れてから送信してください。[/acceptance]</p>

<p style="text-align:center">[submit id:formbtn "上記の内容で送信する"]</p>
<p style="text-align:center"><small>このサイトはreCAPTCHAによって保護されています。Googleの<a href = "https://policies.google.com/privacy">プライバシーポリシー</a>と<a href = "https://policies.google.com/terms">利用規約</a>が適用されます。</small></p>
```

## 参考

[ソースコードコピペで簡単 Contact Form 7 カスタマイズ シンプルデザイン 2020年度版](https://noripon.blog/2020/03/23/how-to-customize-contact-form-7-wordpress/)
