## Tutorial Menggunakan Aplikasi 
### Clone Repo

```bash
git clone https://github.com/muhidin/AppKlinik.git
cd AppKlinik
composer install
npm install
```
salin .env.example dan ubah namanya menjadi .env, jika menggunakan OS Linux bisa dengan perintah
```bash
cp .env.example .env
```
lalu sesuaikan isinya pada baris 22-27 menjadi
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pst11_klinikapp
DB_USERNAME=root
DB_PASSWORD=
```
lanjutkan dengan perintah
```bash
php artisan migrate --seed
php artisan storage:link
php artisan key:generate
php artisan serve
code .
```
Buka Visual Studio Code dan buka terminal berikan perintah

```bash
npm run dev
```
buka browser di http://127.0.0.1:8000
klik login, masukan username dengan email muhidins@gmail.com dan password muhidins