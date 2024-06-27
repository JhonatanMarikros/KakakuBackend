## Tim

Jhonatan marikros - 535220189
Asrul alif - 535220172
Randy gunawan - 535220180
Gerry dominiki sinaga - 535220225

## TUTORIAL LOGIN/REGISTER

User :
1. Jalankan Perintah “php artisan migrate”Untuk memasukan Database migrations ke pgAdmin.
2. Setelah menjalankan “php artisan migrate” Untuk menjalankan Web jalankan perintah “php
artisan serve” setelah Web di jalankan langsung saja kilik tombol pada perintah
“http://127.0.0.1:8000”.
3. Register terlebih dahulu seperti memasukan,Name,Email,Password,dan Confirm Password
dengan 8 karakter / huruf.
4. Login dengan memasukan Email dan Password yang sudah terdaftar ketika sudah register.
5. User akan di arah kan ke halaman utama ,untuk melihat produk produk yang sedang di
promosikanm
6. User juga bisa mencari makanan pada kafe tersebut dan juga mencari makanan atau minuman
melalui kategori yang di pilih.
7. User juga bisa mengeclaim/mendapatkan Coupon yang sudah di sediakan oleh Admin.
8. Download laravel.sql untuk Database


Admin:
1. Jalankan Perintah “php artisan migrate” Untuk memasukan Database migrations ke pgAdmin.
2. Setelah menjalankan “php artisan migrate” Untuk menjalankan Web jalankan perintah “php
artisan serve” setelah Web di jalankan langsung saja kilik tombol pada perintah
“http://127.0.0.1:8000”.
3. Untuk admin Dia Hanya bisa Login dengan emal yang tersedia yaitu”Email:admin123@gmail.com
Password:admin123.
4. Jalankan Perintah” php artisan db:seed --class=SpecialAdminSeeder” Agar Email dan Password
masuk kedalam Database.
5.Untuk masuk ke Admin DashBord, Admin bisa langsung login sebagai Admin mengunakan
“Email:admin123@gmail.com dan Password: admin123.
6. Admin bisa langsung memilih apa aja yang mau di edit untuk melengkap kan web nya.
7. Seperti Admin bisa meng edit,menambahkan,dan menghapus seperti Login pada User,Makanan
dan Lain-lain.

## Untuk .env

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=postgres
DB_PASSWORD=admin

## Untuk Email di .env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=kakakucoffeecafe@gmail.com
MAIL_PASSWORD=ecbedwytocqhzqhr
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="kakakucoffeecafe@gmail.com"
MAIL_FROM_NAME="${APP_NAME}"


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).