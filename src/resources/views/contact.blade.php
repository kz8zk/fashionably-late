<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <!-- 名前 -->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="first_name" placeholder="例:山田" />
                            <input type="text" name="last_name" placeholder="例:太郎" />
                        </div>
                        <div class="form__error">
                            <!-- バリデーション機能を実装 -->
                        </div>
                    </div>
                </div>
                <!-- 性別 -->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="radio" name="gender" value="男性" checked />男性
                            <input type="radio" name="gender" value="女性" />女性
                            <input type="radio" name="gender" value="その他" />その他

                        </div>
                        <div class="form__error">
                            <!-- バリデーション機能を実装 -->
                        </div>
                    </div>
                </div>
                <!-- メールアドレス -->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="例:test@example.com" />
                        </div>
                        <div class="form__error">
                            <!-- バリデーション機能を実装 -->
                        </div>
                    </div>
                </div>
                <!-- 電話番号 -->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="tel" name="tel" placeholder="09012345678" />
                        </div>
                        <div class="form__error">
                            <!-- バリデーション機能を実装 -->
                        </div>
                    </div>
                </div>
                <!-- 住所 -->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3 />
                        </div>
                        <div class=" form__error">
                            <!-- バリデーション機能を実装 -->
                        </div>
                    </div>
                </div>
                <!-- 建物名 -->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" />
                        </div>
                        <div class="form__error">
                            <!-- バリデーション機能を実装 -->
                        </div>
                    </div>
                </div>
                <!-- 問い合わせ種類 -->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <!-- セレクトボックス追加 -->

                        </div>
                        <div class="form__error">
                            <!-- バリデーション機能を実装 -->
                        </div>
                    </div>
                </div>
                <!-- 問い合わせ内容 -->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
                        </div>
                        <div class="form__error">
                            <!-- バリデーション機能を実装 -->
                        </div>

                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="button">確認画面</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>