
---

```markdown
# 📚 BookStore – Web Aplikasi Manajemen Toko Buku

BookStore adalah aplikasi web sederhana berbasis [CodeIgniter 3](https://codeigniter.com/) yang digunakan untuk mengelola data toko buku, termasuk user login, register, dan manajemen data buku.

## 🚀 Fitur Utama

- 🔐 Autentikasi: Login & Register
- 📖 Manajemen Buku: Tambah, edit, hapus, dan lihat data buku
- 👥 Manajemen User: Role-based access (admin & user)
- 📊 Dashboard interaktif
- ⚙️ Setting konfigurasi aplikasi

## 🧰 Teknologi

- PHP 8.1.6
- CodeIgniter 3
- MySQL
- Bootstrap 4
- jQuery
- Font Awesome

## 📂 Struktur Direktori

```

bookstore/
├── application/
│   ├── controllers/
│   ├── models/
│   ├── views/
│   └── config/
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
├── system/
├── index.php
└── .htaccess

## ⚙️ Cara Instalasi

### 1. Clone Repo

````
```bash
git clone https://github.com/HilmiSalsabilla/bookstore.git
````

### 2. Pindahkan ke `htdocs` XAMPP

Letakkan folder `bookstore/` ke dalam:

```
D:/App/xampp/htdocs/
```

### 3. Import Database

* Buat database baru, misalnya `bookstore_db`
* Import file SQL jika tersedia (`database/bookstore.sql`)

### 4. Konfigurasi Database

Edit `application/config/database.php`:

```php
'username' => 'root',
'password' => '',
'database' => 'bookstore_db',
```

### 5. Atur `base_url`

Edit `application/config/config.php`:

```php
$config['base_url'] = 'http://localhost/bookstore/';
```

### 6. Aktifkan Apache & MySQL (via XAMPP)

Buka di browser:

```
http://localhost/bookstore/
```

## 📷 Screenshot (Opsional)

<img width="2219" height="1199" alt="image" src="https://github.com/user-attachments/assets/ef4a0868-07e4-4785-a507-3ade7e2b7035" />


## 📄 License

MIT License. Bebas digunakan dan dimodifikasi.

---

Made with ❤️ by [Hilmi Salsabilla](https://github.com/HilmiSalsabilla)

````

---

Kamu bisa langsung salin file ini ke dalam file `README.md` di root folder project GitHub-mu, lalu `commit & push`:

```bash
git add README.md
git commit -m "add README"
git push origin main
````
