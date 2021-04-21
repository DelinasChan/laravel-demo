# 安裝 Laravel-activitylog

### composer 安裝套件
> composer require spatie/laravel-activitylog

### 建立 migration

> php artisan vendor:publish --provider="Spatie\Activitylog\ActivitylogServiceProvider" --tag="migrations"

### 建立 config 檔案

> php artisan vendor:publish --provider="Spatie\Activitylog\ActivitylogServiceProvider" --tag="config"

### 執行 migrate
> php artisan migrate

[GitHub](https://github.com/spatie/laravel-activitylog)
[Spatie](https://spatie.be/docs/laravel-activitylog/v3/introduction)


# 安裝 laravel-medialibrary

### 安裝 composer套件
> composer require "spatie/laravel-medialibrary-pro:^1.0.0"

### 複製 migration
> php artisan vendor:publish --provider="Spatie\MediaLibraryPro\MediaLibraryProServiceProvider" --tag="media-library-pro-migrations"

> php artisan migrate

### [model 引用方式](https://spatie.be/docs/laravel-medialibrary/v9/basic-usage/preparing-your-model)

---
modified: 2021-04-21T13:16:23.459Z
title: 安裝 Laravel-activitylog
---

