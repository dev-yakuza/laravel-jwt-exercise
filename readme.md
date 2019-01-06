## document
- [laravel-jwt-exercise 문서](#laravel-jwt-exercise-문서)
- [laravel-jwt-exerciseドキュメン](#laravel-jwt-exerciseドキュメン)
- [laravel-jwt-exercise document](#laravel-jwt-exercise-document)

## laravel-jwt-exercise 문서
이 프로젝트는 ```tymon/jwt-auth```를 라라벨(Laravel) 프로젝트에 적용한 예제입니다.

### 개발 환경
이 프로젝트는 앤서블(Ansible)과 라라독(Laradock)을 사용하여 만든 개발 환경에서 개발하고 테스트하였습니다. 앤서블(Ansible)과 라라독(Laradock)으로 만든 개발 환경이 궁금하신 분은 아래의 저장소(Repository)를 확인하세요.

- dev-yakuza/laravel-devtool: <a href="https://github.com/dev-yakuza/laravel-devtool#laravel-devtool-%EC%82%AC%EC%9A%A9%EB%B2%95" target="_blank">https://github.com/dev-yakuza/laravel-devtool#laravel-devtool-%EC%82%AC%EC%9A%A9%EB%B2%95</a>

위에서 소개한 저장소(Repository)에 대한 설명은 아래의 블로그를 확인하세요.

- vagrant 설치 및 사용법: <a href="https://dev-yakuza.github.io/ko/environment/vagrant-install-and-usage/" target="_blank">https://dev-yakuza.github.io/ko/environment/vagrant-install-and-usage</a>
- 앤서블 설치: <a href="https://dev-yakuza.github.io/ko/environment/install-ansible/" target="_blank">https://dev-yakuza.github.io/ko/environment/install-ansible</a>
- 앤서블 플레이북: <a href="https://dev-yakuza.github.io/ko/environment/ansible-playbook/" target="_blank">https://dev-yakuza.github.io/ko/environment/ansible-playbook</a>
- 앤서블&도커: <a href="https://dev-yakuza.github.io/ko/environment/ansible-docker/" target="_blank">https://dev-yakuza.github.io/ko/environment/ansible-docker</a>
- 앤서블&라라독: <a href="https://dev-yakuza.github.io/ko/environment/ansible-laradock/" target="_blank">https://dev-yakuza.github.io/ko/environment/ansible-laradock</a>
- 앤서블&라라벨: <a href="https://dev-yakuza.github.io/ko/environment/ansible-laravel/" target="_blank">https://dev-yakuza.github.io/ko/environment/ansible-laravel</a>

### 사용 방법
이 저장소(Repository)를 복사(Clone)합니다.

```bash
git clone https://github.com/dev-yakuza/laravel-jwt-exercise.git
```

프로젝트에 필요한 미들웨어(Middleware)를 설치합니다.

```bash
composer install
```

프로젝트의 환경 파일을 복사한 후 데이터베이스(Database)와 연결합니다. (데이터베이스와의 연결은 블로그를 참고해 주세요. - <a href="https://dev-yakuza.github.io/ko/environment/ansible-laravel/" target="_blank">앤서블&라라벨</a>)

```bash
cp .env.example .env
```

라라벨(Laravel)의 비밀키(Secret Key)를 생성합니다.

```bash
php artisan key:generate
```

jwt 인증 시스템의 비밀키(Secret Key)를 생성합니다.

```bash
php artisan jwt:secret
```

라라벨(Laravel)의 사용자 테이블(User Table)을 생성합니다.

```bash
php artisan migrate
```

jwt의 사용방법은 아래에 내용을 참고하세요.

### jwt의 사용방법
이 저장소(Repository)를 생성하면서 만든 블로그가 있습니다. jwt 미들웨어(Middleware) 설치나 사용 방법에 대해서는 아래에 블로그를 확인해 주세요.

- jwt 설치 및 설정: <a href="https://dev-yakuza.github.io/ko/laravel/jwt/" target="_blank">https://dev-yakuza.github.io/ko/laravel/jwt/</a>
- jwt:회원가입: <a href="https://dev-yakuza.github.io/ko/laravel/jwt-signup/" target="_blank">https://dev-yakuza.github.io/ko/laravel/jwt-signup/</a>
- jwt:로그인: <a href="https://dev-yakuza.github.io/ko/laravel/jwt-signin/" target="_blank">https://dev-yakuza.github.io/ko/laravel/jwt-signin/</a>
- jwt:사용자 정보: <a href="https://dev-yakuza.github.io/ko/laravel/jwt-user-info/" target="_blank">https://dev-yakuza.github.io/ko/laravel/jwt-user-info/</a>
- jwt:토큰 갱신: <a href="https://dev-yakuza.github.io/ko/laravel/jwt-refresh-token/" target="_blank">https://dev-yakuza.github.io/ko/laravel/jwt-refresh-token/</a>
- jwt:로그아웃: <a href="https://dev-yakuza.github.io/ko/laravel/jwt-logout/" target="_blank">https://dev-yakuza.github.io/ko/laravel/jwt-logout/</a>

## laravel-jwt-exerciseドキュメン
このプロジェクトは```tymon/jwt-auth```をララベル(Laravel)プロジェクトに適用した例です。

### 開発環境
このプロジェクトはアンシブル(Ansible)とLaradock)を使って作った開発環境の上で開発してテストしました。アンシブル(Ansible)とLaradockで作った開発環境が知りたい方は下のリポジトリ(Repository)を確認してください。

- dev-yakuza/laravel-devtool: <a href="https://github.com/dev-yakuza/laravel-devtool#laravel-devtool%E4%BD%BF%E3%81%84%E6%96%B9" target="_blank">https://github.com/dev-yakuza/laravel-devtool#laravel-devtool%E4%BD%BF%E3%81%84%E6%96%B9</a>

上に紹介したリポジトリ(Repository)については下記のブログを確認してください。

- vagrantインストールや使い方: <a href="https://dev-yakuza.github.io/environment/vagrant-install-and-usage/" target="_blank">https://dev-yakuza.github.io/environment/vagrant-install-and-usage</a>
- アンシブルインストール: <a href="https://dev-yakuza.github.io/environment/install-ansible/" target="_blank">https://dev-yakuza.github.io/environment/install-ansible</a>
- アンシブルプレイブック: <a href="https://dev-yakuza.github.io/environment/ansible-playbook/" target="_blank">https://dev-yakuza.github.io/environment/ansible-playbook</a>
- アンシブル&ドッカー: <a href="https://dev-yakuza.github.io/environment/ansible-docker/" target="_blank">https://dev-yakuza.github.io/environment/ansible-docker</a>
- アンシブル&Laradock: <a href="https://dev-yakuza.github.io/environment/ansible-laradock/" target="_blank">https://dev-yakuza.github.io/environment/ansible-laradock</a>
- アンシブル&ララベル: <a href="https://dev-yakuza.github.io/environment/ansible-laravel/" target="_blank">https://dev-yakuza.github.io/environment/ansible-laravel</a>

### 使い方
このリポジトリ(Repository)をコピー(Clone)します。

```bash
git clone https://github.com/dev-yakuza/laravel-jwt-exercise.git
```

プロジェクトへ必要なミドルウェア(Middleware)をインストールします。

```bash
composer install
```

プロジェクトの環境ファイルをコピーした後データベース(Database)と連携します。(データベースとの連携についてはブログを確認してください。 - <a href="https://dev-yakuza.github.io/environment/ansible-laravel/" target="_blank">アンシブル&ララベル</a>)

```bash
cp .env.example .env
```

ララベル(Laravel)の秘密キー(Secret Key)を生成します。

```bash
php artisan key:generate
```

jwt認証システムの秘密キー(Secret Key)を生成します。

```bash
php artisan jwt:secret
```

ララベル(Laravel)のユーザテーブル(User Table)を生成します。

```bash
php artisan migrate
```

jwtの使い方は下を確認してください。

### jwtの使い方
このリポジトリ(Repository)を生成しながら作ったブログがあります。jwtミドルウェア(Middleware)のインストールや使い方は下記のブログを参考してください。

- jwtインストールや設定: <a href="https://dev-yakuza.github.io/laravel/jwt/" target="_blank">https://dev-yakuza.github.io/laravel/jwt/</a>
- jwt:会員登録: <a href="https://dev-yakuza.github.io/laravel/jwt-signup/" target="_blank">https://dev-yakuza.github.io/laravel/jwt-signup/</a>
- jwt:ログイン: <a href="https://dev-yakuza.github.io/laravel/jwt-signin/" target="_blank">https://dev-yakuza.github.io/laravel/jwt-signin/</a>
- jwt:ユーザ情報: <a href="https://dev-yakuza.github.io/laravel/jwt-user-info/" target="_blank">https://dev-yakuza.github.io/laravel/jwt-user-info/</a>
- jwt:トークン更新: <a href="https://dev-yakuza.github.io/laravel/jwt-refresh-token/" target="_blank">https://dev-yakuza.github.io/laravel/jwt-refresh-token/</a>
- jwt:ログアウト: <a href="https://dev-yakuza.github.io/laravel/jwt-logout/" target="_blank">https://dev-yakuza.github.io/laravel/jwt-logout/</a>

## laravel-jwt-exercise document
this project is an example to apply ```tymon/jwt-auth``` to Laravel.

### Development Environment
this project was developed and tested on the development environment which is consisted of Ansible and Laradock. if you want to know how to make the development environment by Ansible and Laradock, see below repository.

- dev-yakuza/laravel-devtool: <a href="https://github.com/dev-yakuza/laravel-devtool#laravel-devtool-%EC%82%AC%EC%9A%A9%EB%B2%95" target="_blank">https://github.com/dev-yakuza/laravel-devtool#laravel-devtool-%EC%82%AC%EC%9A%A9%EB%B2%95</a>

if you want to know details about above repository, see below blogs.

- vagrant installation and usage: <a href="https://dev-yakuza.github.io/en/environment/vagrant-install-and-usage/" target="_blank">https://dev-yakuza.github.io/en/environment/vagrant-install-and-usage</a>
- Ansible installation: <a href="https://dev-yakuza.github.io/en/environment/install-ansible/" target="_blank">https://dev-yakuza.github.io/en/environment/install-ansible</a>
- Ansible Playbook: <a href="https://dev-yakuza.github.io/en/environment/ansible-playbook/" target="_blank">https://dev-yakuza.github.io/en/environment/ansible-playbook</a>
- Ansible&Docker: <a href="https://dev-yakuza.github.io/en/environment/ansible-docker/" target="_blank">https://dev-yakuza.github.io/en/environment/ansible-docker</a>
- Ansible&Laradock: <a href="https://dev-yakuza.github.io/en/environment/ansible-laradock/" target="_blank">https://dev-yakuza.github.io/en/environment/ansible-laradock</a>
- Ansible&Laravel: <a href="https://dev-yakuza.github.io/en/environment/ansible-laravel/" target="_blank">https://dev-yakuza.github.io/en/environment/ansible-laravel</a>

### How To Use
first, clone this repository.

```bash
git clone https://github.com/dev-yakuza/laravel-jwt-exercise.git
```

install middlewares those this project requires.

```bash
composer install
```

copy the project environment file and connect the database. (if you want to know how to connect database, see the blog post. - <a href="https://dev-yakuza.github.io/en/environment/ansible-laravel/" target="_blank">Ansible&Laravel</a>)

```bash
cp .env.example .env
```

create the secret key of Laravel.

```bash
php artisan key:generate
```

create the secret key of jwt authentication system.

```bash
php artisan jwt:secret
```

create the user table of Laravel.

```bash
php artisan migrate
```

see below about how to use jwt.

### How To Use JWT
we've made blogs when we're creating this repository. if you want to know how to install jwt middleware or how to use jwt, see below blog posts.

- jwt installation&settings: <a href="https://dev-yakuza.github.io/en/laravel/jwt/" target="_blank">https://dev-yakuza.github.io/en/laravel/jwt/</a>
- jwt:signup: <a href="https://dev-yakuza.github.io/en/laravel/jwt-signup/" target="_blank">https://dev-yakuza.github.io/en/laravel/jwt-signup/</a>
- jwt:signin: <a href="https://dev-yakuza.github.io/en/laravel/jwt-signin/" target="_blank">https://dev-yakuza.github.io/en/laravel/jwt-signin/</a>
- jwt:user information: <a href="https://dev-yakuza.github.io/en/laravel/jwt-user-info/" target="_blank">https://dev-yakuza.github.io/en/laravel/jwt-user-info/</a>
- jwt:refresh token: <a href="https://dev-yakuza.github.io/en/laravel/jwt-refresh-token/" target="_blank">https://dev-yakuza.github.io/en/laravel/jwt-refresh-token/</a>
- jwt:logout: <a href="https://dev-yakuza.github.io/en/laravel/jwt-logout/" target="_blank">https://dev-yakuza.github.io/en/laravel/jwt-logout/</a>