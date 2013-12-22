## Laravel 4.1 İle Örnek Blog Uygulaması

21 Aralık 2013 tarihinde İstanbul Teknik Üniversitesi Ayazağa kampüsünde Laravel Workshop etkinliği düzenlendi. Ben de bu etkinlikte atölye çalışması gerçekleştirdim. Atölye bölümünde içinde üyelik sistemi barındıran, basit bir blog kodladım. Bu adresten geliştirdiğim uygulamanın kaynak kodlarını inceleyebilirsiniz.

### Kurulum

Eğer makinenizde Composer kurulu değilse, ilk adım bunu kurmak olmalıdır. Composer kurulduktan sonra terminalden proje dizinine giderek:

```
composer install
```

komutunu çalıştırdığınızda kurulum başlayacaktır. Kurulumla ilgili detaylı bilgi için http://laravel.com/docs/installation adresini inceleyebilirsiniz.

### Uygulamanın Yapılandırılması

Laravel'in kurulumunu tamamladıktan sonra uygulamayı çalışır duruma getirmek gerekiyor. Öncelikle;

```
app/config/database.php
```
 
dosyasını açın ve;
 
``` php
'mysql' => array(
'driver'    => 'mysql',
'host'      => 'localhost',
'database'  => 'workshop',
'username'  => 'root',
'password'  => 'root',
'charset'   => 'utf8',
'collation' => 'utf8_unicode_ci',
'prefix'    => '',
),
```

satırlarını çalışacağınız ortama göre düzenleyin. 

#### Migration

Veritabanını oluşturduysanız ve mysql bağlantı ayarlarınızı tamamladıysanız aşağıda ki adımları gerçekleştirerek kurulumu tamamlayabilirsiniz.

* Terminalden proje dizinine gidin
* Sırasıyla aşağıdaki komutları çalıştırın

```
php artisan migrate:install
php artisan migrate
php artisan db:seed
```

Bu komutlar sayesinde veritabanınıza ilgili tablolar oluşturulacak ve örnek kayıtlar tablolara eklenecektir.

Artık browser üzerinden Laravel projesini çalıştırabilirsiniz.
