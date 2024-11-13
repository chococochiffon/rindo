# moca
<p align="center">
<img src="https://img.shields.io/badge/-Laravel-E74430.svg?logo=laravel&style=plastic">
<img src="https://img.shields.io/badge/-Php-777BB4.svg?logo=php&style=plastic">
<img src="https://img.shields.io/badge/-Mysql-4479A1.svg?logo=mysql&style=plastic">
<img src="https://img.shields.io/badge/-Docker-1488C6.svg?logo=docker&style=plastic">
</p>

# laravel コマンド
## コントローラー
### API
```
❯ php artisan make:controller API/XxxxxController --resource
```
### WEB
```
❯ php artisan make:controller XxxxxController --resource
```

## マイグレーション
### 実行
```
❯ php artisan migrate
```
### リフレッシュ
```
❯ php artisan migrate:refresh --seed
```