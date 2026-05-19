# JobSeeker PHP App

A lightweight PHP job listing application built with a minimal custom router, authentication, and simple views.

## Overview

This repository contains a small job board web app written in plain PHP. It includes:

- User authentication (`/auth/login`, `/auth/register`, `/auth/logout`)
- Job listing creation and listing pages
- A blog page placeholder
- A custom `/ternary` page that demonstrates ternary logic for listing fallbacks
- A minimal routing layer and view loading helpers

## Features

- Custom routing with support for parameterized routes like `/listings/{id}`
- Basic session-based auth gating
- Simple database configuration via `config/db.php`
- Demo page for ternary operator examples in the codebase

## Getting Started

These steps assume you are running the app locally in a PHP environment.

### Requirements

- PHP 8+ installed
- A web server or PHP built-in server
- MySQL / MariaDB if you want to use the database features

### Run with PHP built-in server

From the project root:

```powershell
cd c:\laragon\www\ws03
php -S localhost:8000 -t public
```

Then open:

```
http://localhost:8000
```

### Routes

- `/` — home page with latest listings
- `/listings` — list all job postings
- `/listings/create` — create a new listing
- `/listings/{id}` — view a single listing
- `/blog` — blog page
- `/ternary` — ternary demo page
- `/auth/login` — login page
- `/auth/register` — registration page
- `/auth/logout` — logout action

> Note: All routes except `/auth/login`, `/auth/register`, and `/ternary` require authentication.

## Configuration

The database settings are located in `config/db.php` and use environment variables if available:

- `MYSQL_HOST` (default `127.0.0.1`)
- `MYSQL_PORT` (default `3306`)
- `MYSQL_DBNAME` (default `jobseeker`)
- `MYSQL_USERNAME` (default `root`)
- `MYSQL_PASSWORD` (default empty)

If you don’t set environment variables, the default values from `config/db.php` will be used.

## Project Structure

- `controllers/` — request handlers for pages and actions
- `views/` — page templates and partials
- `public/` — public web entrypoint and assets
- `config/` — app configuration files
- `Database.php` — database connection helper
- `Router.php` — custom router implementation
- `helpers.php` — view and path helper functions

## Notes

The `/ternary` page is intentionally left public so you can access the ternary demo without logging in.


