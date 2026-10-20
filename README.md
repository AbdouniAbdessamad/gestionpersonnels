# Gestion Personnels

**A Laravel web app for managing teaching and administrative staff records in a vocational training network (built for ISAT Meknès).**

![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4?logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-9-FF2D20?logo=laravel&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3-06B6D4?logo=tailwindcss&logoColor=white)
![Alpine.js](https://img.shields.io/badge/Alpine.js-3-8BC0D0?logo=alpinedotjs&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-4-646CFF?logo=vite&logoColor=white)

## Overview

Gestion Personnels is an HR record-keeping application (French-language UI) that replaces spreadsheet-based staff tracking with a secure web interface. Authenticated users can create, view, update and delete detailed staff files: identity, contact details, assignment (region, training establishment, annex), employment status, teaching load, career grades and qualifications. Each staff member's age is calculated automatically from their date of birth.

## Key Features

- **Authentication** with login, registration, password reset and profile management (Laravel Breeze). All staff-management pages require login.
- **Full CRUD on staff records** through a single resource controller (`/gestionp`).
- **Detailed staff file**, about 25 fields per person:
  - *Assignment:* region (dropdown of Morocco's 12 regions), EFP (training establishment), annex, corps
  - *Identity:* full name, CIN (national ID), gender, date of birth, family status
  - *Contact:* phone, email
  - *Employment:* function, status, PPR (civil-service staff number), employment mode, level, field of study (*filière*), modules taught, weekly teaching hours
  - *Career:* recruitment date, entry grade, current grade, latest diploma, specialty, observations
- **Automatic age calculation** from the date of birth (Carbon) on both create and update.
- **Staff list** showing ID, name, CIN, gender, age, phone and email, with a client-side name filter and reset.
- **Detail and edit views** for each record, with server-side validation and flash success messages.

## Tech Stack

| Layer | Technology |
|---|---|
| Backend | PHP 8.0.2+, Laravel 9 (Eloquent ORM, Blade, resource controllers) |
| Auth | Laravel Breeze 1 (Blade stack), Laravel Sanctum 3 |
| Frontend | Blade templates, Tailwind CSS 3 (+ `@tailwindcss/forms`), Alpine.js 3, vanilla JS filter |
| Build | Vite 4 with `laravel-vite-plugin` |
| Database | MySQL (database name `gestionp` by default) |
| Testing | PHPUnit 9 (Breeze auth and profile feature tests) |

## Project Structure

```
gestionpersonnels/
├── app/
│   ├── Http/Controllers/
│   │   ├── GestionpController.php   # staff CRUD + age calculation
│   │   ├── ProfileController.php    # user profile (Breeze)
│   │   └── Auth/                    # Breeze authentication
│   └── Models/
│       ├── Gestionp.php             # staff record model
│       └── User.php
├── database/migrations/             # users + gestionps schema
├── resources/views/
│   ├── gestionp/                    # index, create, show, edit
│   ├── dashboard.blade.php          # entry point to the staff manager
│   └── layouts/                     # app layout + navigation
├── public/                          # front controller, ISAT logo
└── routes/web.php                   # auth-protected resource routes
```

The app follows a classic Laravel MVC layout: `routes/web.php` maps `/gestionp` to `GestionpController`, which validates input, computes the age and persists the `Gestionp` model, while Blade views under `resources/views/gestionp` render the list, form and detail pages.

## Database

| Table | Purpose | Main columns |
|---|---|---|
| `users` | Application accounts | `name`, `email`, `password` (Laravel default) |
| `gestionps` | Staff records | `region`, `efp`, `annexe`, `corps`, `nomprenom`, `cin`, `genre`, `datenaissance`, `age`, `tel`, `email`, `situationfamiliale`, `fonction`, `statut`, `ppr`, `mode`, `niveau`, `filiere`, `modules`, `nbheuresparsemaine`, `daterecrutement`, `gradeentree`, `gradeactuel`, `dernierdiplome`, `specialite`, `observations` |

Laravel's default `password_resets`, `failed_jobs` and `personal_access_tokens` tables are also created.

## Getting Started

**Prerequisites:** PHP 8.0.2+, Composer, Node.js and npm, and a MySQL server.

```bash
git clone https://github.com/AbdouniAbdessamad/gestionpersonnels.git
cd gestionpersonnels

composer install
npm install

cp .env.example .env
php artisan key:generate
```

Create a MySQL database called `gestionp` (or change `DB_DATABASE` in `.env`) and set your DB credentials, then:

```bash
php artisan migrate
npm run build        # or `npm run dev` while developing
php artisan serve
```

Open http://127.0.0.1:8000/register to create an account, then go to **Dashboard → Gestionnaire** to manage staff records.

Run the tests with:

```bash
php artisan test
```

## Possible Improvements

- **Server-side search and pagination.** The list loads every record and filters by name in the browser, which won't scale to a large staff base.
- **Data integrity.** Make `cin`, `ppr` and `email` unique, and calculate age on the fly instead of storing it (a stored age goes stale every year).
- **Access control.** Any registered user can manage every record; roles or policies (for example read-only vs. HR admin) and restricted registration would fit sensitive HR data better.
- **Export & reporting.** Excel/PDF export and statistics by region, establishment or grade.

## Author

**Abdessamad Abdouni**, Information Systems Engineering student at SUPMTI Rabat, Morocco
GitHub: [github.com/AbdouniAbdessamad](https://github.com/AbdouniAbdessamad)
