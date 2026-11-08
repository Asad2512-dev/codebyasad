# Architecture

## What this is

The repository is a Laravel application.

## Layout

- `app/` — `Exceptions`, `Http`, `Models`, `Providers`
- `bootstrap/`
- `config/`
- `database/`
- `lang/`
- `love/`
- `platform/` — `core`, `packages`, `plugins`, `themes`
- `public/`
- `resources/`
- `routes/` — `console.php`, `web.php`
- `storage/`
- `tests/`
- Tooling: `.DS_Store`, `.editorconfig`, `.env.example`, `.gitattributes`, `.gitignore`, `.htaccess`
- Root files: `artisan`, `composer.json`, `composer.lock`, `package-lock.json`, `package.json`, `phpunit.xml`, `webpack.mix.js`, `zelio.sql`

## How the pieces fit

Laravel application: `artisan` and `composer.json` are at the root, and PHP code is under `app/` (Exceptions, Http, Models, Providers). Route files: `routes/console.php`, `routes/web.php`. Views and frontend source are under `resources/`. Migrations and seeders are under `database/`. `platform/` contains `core`, `packages`, `plugins`, `themes`. Composer requires Botble, Laravel Sanctum. The root `package.json` builds frontend assets with Laravel Mix.

## How to run

Scripts in the root `package.json`:

- `dev` — `npm run development`
- `development` — `mix`

## External services named in the repo

- Redis — `predis/predis` in `composer.json`
