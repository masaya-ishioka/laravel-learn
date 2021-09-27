## 概要
- laravel勉強用のリポジトリ
- 環境構築参照先 （url: https://github.com/ucan-lab/docker-laravel ）
- チュートリアル参照先 （url: https://www.hypertextcandy.com/laravel-tutorial-introduction）

## コマンドメモ
 ```
 $ sudo chmod 777 -R ./backend
 ```

マイグレーションファイル作成

```
$ php artisan make:migration フォルダ名 --create=テーブル名(複数形)

```

マイグレーション実行

```
$ php artisan make:migrate
```

シーダー作成

```
$ php artisan make:seeder 任意の名称
```

シード実行

```
$ php artisan db:seed --class=任意の名称
```

モデル作成

```
$ php artisan make:model テーブル名(単数形)
```

コントローラー作成

```
$ php artisan make:controller 任意の名称
```

FormRequestクラス（バリデーション用）

```
$ php artisan make:request 任意の名称
```