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
4. zipaddr-jp インストール
5. お問い合わせ > 新規追加で下記テンプレを使用する
6. 固定ページでショートコード呼び出し
7. URL をもとに Gatsby で iframe 呼び出し

## テンプレ

```
<div class="form">
  <table class="form__table">
    <tr>
      <th>
        <span class="form__label--must">必須</span><span>氏名</span>
      </th>
      <td>
        [text* your-name class:textsp placeholder"鈴木 花子"]
      </td>
    </tr>
    <tr>
      <th>
        <span class="form__label--must">必須</span><span>性別</span>
      </th>
      <td>
        [radio your-sex class:form__radio use_label_element default:1 "男性" "女性"]
      </td>
    </tr>
    <tr>
      <th>
        <span class="form__label--must">必須</span><span>郵便番号</span>
      </th>
      <td>[text* your-postalcode zip id:zip placeholder"123-4567"]</td>
    </tr>
    <tr>
      <th>
        <span class="form__label--must">必須</span><span>都道府県</span>
      </th>
      <td>[text* your-prefectures pref id:pref placeholder"◯◯県"]</td>
    </tr>
    <tr>
      <th>
        <span class="form__label--must">必須</span><span>市町村区</span>
      </th>
      <td>[text* your-address city id:city addr id:addr placeholder "○○市○○1-2-3 ○○マンション 101号室"]</td>
    </tr>
    <tr>
      <th>
        <span class="form__label--must">必須</span><span>メールアドレス</span>
      </th>
      <td>[email* your-email class:mailsp placeholder"example@gmail.com"]</td>
    </tr>
    <tr>
      <th><span class="form__label--must">必須</span><span>電話番号</span></th>
      <td>[tel your-tel class:tel placeholder"090-0000-0000"]</td>
    </tr>
  </table>
  <p class="form__center">[acceptance accept-this-1 class:input2] スパムメール防止のため、こちらのボックスにチェックを入れてから送信してください。[/acceptance]</p>

  <p class="form__center">[submit id:formbtn "上記の内容で送信する"]</p>
  <p class="form__center"><small>このサイトはreCAPTCHAによって保護されています。Googleの<a href = "https://policies.google.com/privacy">プライバシーポリシー</a>と<a href = "https://policies.google.com/terms">利用規約</a>が適用されます。</small></p>
</div>
```

## 参考

![ソースコードコピペで簡単 Contact Form 7 カスタマイズ シンプルデザイン 2020年度版](https://noripon.blog/2020/03/23/how-to-customize-contact-form-7-wordpress/)
