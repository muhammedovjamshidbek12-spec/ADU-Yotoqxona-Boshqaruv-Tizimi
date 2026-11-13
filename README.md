# Andijon Davlat Universiteti  
## Yotoqxona Boshqaruv Tizimi (Dormitory Management System)

**Loyiha nomi:** Universitet yotoqxonasini boshqarish va talabalar farovonligini ta’minlash tizimi  

**Universitet:** Andijon Davlat Universiteti (ADU)  

**Texnologiyalar:** PHP, MySQL, HTML, CSS, JavaScript  

---

## Loyiha haqida

Bu tizim universitet yotoqxonasini raqamli boshqarish uchun mo‘ljallangan.  
Asosiy maqsad — yotoqxona ma’muriyati va talabalar o‘rtasidagi jarayonlarni soddalashtirish, qog‘oz ishlarini kamaytirish va shaffoflikni oshirish.

### Asosiy funksiyalar

| Modul              | Vazifasi                                      |
|--------------------|-----------------------------------------------|
| **Admin**          | Tizimga kirish va boshqaruv paneli            |
| **Talabalar**      | Talabalarni qo‘shish, tahrirlash, ko‘rish     |
| **Yotoqxona**      | Yotoqxona (Hall) ma’lumotlari                 |
| **Xonalar**        | Xonalar va o‘rinlar boshqaruvi                |
| **Qavatlar**       | Qavatlar va bloklar                           |
| **Yotoqxona mudiri**| Provost / mudir ma’lumotlari                 |
| **Xodimlar**       | Xodimlar ro‘yxati                             |
| **Ovqatlanish**    | Ovqatlanish buyurtmalari                      |
| **Muammolar**      | Xonalardagi nosozliklar (fan, chiroq va h.k.) |

---

## O‘rnatish (XAMPP / OpenServer)

1. **XAMPP** yoki **OpenServer** o‘rnating.
2. Loyiha papkasini `htdocs` (yoki `domains`) ichiga ko‘chiring:
   ```
   C:\xampp\htdocs\DMS_ADU
   ```
3. **phpMyAdmin** ga kiring → yangi baza yarating: `DMS`
4. `Database/DMS.sql` faylini import qiling.
5. Brauzerda oching:
   ```
   http://localhost/DMS_ADU/
   ```
6. **Admin login:**
   - Login: `admin` (yoki bazadagi admin jadvalidagi ma’lumot)
   - Parol: `admin` (asl loyihada tekshirib oling)

> **Eslatma:** `database connection.php` faylida host, user, password va baza nomi to‘g‘ri ekanligini tekshiring.

---

## Papka tuzilmasi

```
DMS_ADU/
├── index.php                 # Bosh sahifa
├── login.php                 # Admin kirish
├── login process.php
├── logout process.php
├── database connection.php
├── home.css
├── dashboard/
│   └── home.php              # Admin paneli
├── Student/                  # Talabalar moduli
├── Hall/                     # Yotoqxona
├── Room/                     # Xonalar
├── Floor/                    # Qavatlar
├── Provost/                  # Yotoqxona mudiri
├── Staff/                    # Xodimlar
├── Dining/                   # Ovqatlanish
├── FacilitiesProblem/        # Muammolar
└── Database/
    └── DMS.sql               # Ma’lumotlar bazasi
```

---

## O‘zgartirilgan qismlar (ADU uchun)

- Tizim nomi: **Andijon Davlat Universiteti Yotoqxona Boshqaruv Tizimi**
- Login sahifasi o‘zbek tilida
- Dashboard menyusi o‘zbekcha
- Favicon va eski universitet havolalari olib tashlandi
- UTF-8 qo‘llab-quvvatlash qo‘shildi

---

## Kelajakda qo‘shish mumkin bo‘lganlar

- To‘liq o‘zbek tiliga tarjima
- Talaba shaxsiy kabineti
- To‘lovlar moduli
- SMS / Telegram xabarnomalari
- Mobil versiya

---

**Tayyorlagan:** Grok yordamida Andijon Davlat Universiteti uchun moslashtirilgan  
**Asl manba:** https://github.com/shakiliitju/Dormitory-Management-System (MIT License)
