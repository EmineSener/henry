# henry
Web Based Programming PHP Project


` Henry` teknolojik ürün satışı yapan bir firmadır ve bu proejede firma yönetimi için yapılmıştır. 

 Proje PHP ve Mysql ile geliştirilmiş olup Bootstrap aracılığıyla stillendirilmiştir. 

 Proje için şirketin başarı kaydı özelliği eklenilebilir.





## Kurulum


1.Deponun sağ üst kısmında `Code`  yazan yeşil butona tıkladıktan sonra `ZIP İndir` sekmesine tıklayıp yerel bilgisayara proje kaynak kodları indirilir.

2.Eğer yerel bilgisayarınızda XAMPP uygulaması yoksa indirilir ve kurulumu sağlanır.

3.XAMPP control panalinde yer alan MySql ve Apache server'ları çalıştırılır.Eğer sorun olursa config dosyasından port ayarları yapılır.

4.Yerel bilgisayrınızda localhost/phpMyAdmin ' a bağlanınız.

5.Burda ` henry` adında bir database oluşturunuz.Ve içe aktar özelliği aracılığıyla kaynak kod ile indirdiğiniz ` henry (1).sql`  dosyasını yükelyiniz.

6.Kaynak kodda bulunan config.php dosyasına erişip dosyada belirtilen yerleri yorum satırından çıkatıp yine belirtilen yerleri yorum stırına alınız.

7.XAMPP'ı yeni kurduysanız XAMPP ile birlikte gelen ` htdocs` klasörünü boşaltınız.

8.` htdocs` klasörü içerisine kaynak kodun tamamını yerleştiriniz.

9.Localhost'a bağlanınız.



## Kullanım

Program çalıştırıldığında karşınıza ilk olarak aşağıda görüldüğü gibi ekran çıkacaktır.Bu sayafaya eerişmek için herhangi bir kayıt işlemi gerekmemektedir.


![alt text](https://github.com/EmineSener/henry/blob/main/readme/giris.png)


Bu ekranda şirketimiz Henry hakkında bilgiler verilmektedir.Ayrıca rehber butonları sayesinde yine aynı sayfada yer alan bilgilendirme yazılarına ulaşabilirsiniz.


Sitemizin bilgilendirme sayfası aşağıdaki gibidir.


![alt text](https://github.com/EmineSener/henry/blob/main/readme/sirketbilgi.png)


Site 3 farklı tipte kullanıcıya hitap eder şekilde tasarlanmıştır: şirket yöneticisi,şirket çalışanı ve şirket hakkında bilgi edinemk isteyen kişi.


Bu rehberler aracılığıyla bu 3 farklı kişinin siteden nasıl faydalanabileceği anlatılmaktadır.


![alt text](https://github.com/EmineSener/henry/blob/main/readme/rehber.png)


Siteye giriş yapmak ya da giriş yapabilmek için kayıt olmak için gerekli butonlar aşağıda resmedilmiştir.


![alt text](https://github.com/EmineSener/henry/blob/main/readme/girisbuton.png)


Kayıt ol butonuna tıkladığınız takdirde karşınıza kayıt formu çıkacaktır.


![alt text](https://github.com/EmineSener/henry/blob/main/readme/kayit.png)


Burda önemli bir nokta şu ki:type bölgesine Türkçe karakter kullanılmadan yönetici ya da calisan yazılmalıdır.Bu özelliğin iyileştirlimesi hedeflenmektedir.


Siteye kayıt olduğunuzda giriş yap butonuyla giriş sayfasına yönleneceksiniz.


![alt text](https://github.com/EmineSener/henry/blob/main/readme/login.png)


Siteye giriş yaptıktan sonra kullanıcı tip'inize göre farklı sayfalara yönleneceksiniz.


Yönetici olarak giriş yaptıysanız eğer sizi karşılayan ekranda butonlar ve şirketin en yeni 3 başarısını göreceksiniz.


![alt text](https://github.com/EmineSener/henry/blob/main/readme/yonetici.png)


Yönetici sayfasında bulunan ürün kaydı gir butonu aracılığıyla firmanıza eklenen yeni ürünleri kaydedebilirsiniz.


![alt text](https://github.com/EmineSener/henry/blob/main/readme/urunkayit.png)


Ürünleri listele butonuyla satışta olan ürünlerinizi görebilir yanlarında bulunna butonlar aracılığıyla ürünlerinizi silebilir güncelleyebilirsiniz.


![alt text](https://github.com/EmineSener/henry/blob/main/readme/urun.png)


Güncellemek istediğinizde yine ürün kayıt formuyla karşılaşacaksınız,güncellemek istediğiniz ürünün eski bilgiler gerekli bölümlerde yazılı olacak değiştirmediğiniz takdirde aynı kalacak.


Ayrıca yönetici sayfasında çalışanlarınızın yapmış olduğu satışları da inceleyebilirsiniz.


![alt text](https://github.com/EmineSener/henry/blob/main/readme/satislistesi.png)


Yönetici sayfasının en dikkate değer bölümü ise analiz bölümüdür.Analiz butonuna tıkladığınız takdirde o ana kadar en çok sataş yapan çalışanınıa ve en çok satan ürününüzü görebileceksiniz.


En çok satış yapan çalışanınızın bilgileri de gösterilmektedir.


![alt text](https://github.com/EmineSener/henry/blob/main/readme/analiz1.png)


En çok satan ürününüz ve bilgileri gösterilmektedir.


![alt text](https://github.com/EmineSener/henry/blob/main/readme/analiz2.png)


Eğer çalışan olarak giriş yaparsanız yine şirketin en yeni başarılarını gösteren bir ekran ve butonlar gelecektir.


Yönetici sayfasında bulunmayan bir butonunuz olacak : satış kaydı yap 


Bu butona tıkladığınızda ürünler listesi ve yanlarında satış kaydına git butonları çıkacaktır.


![alt text](https://github.com/EmineSener/henry/blob/main/readme/satis1.png)


Ardından satış yaptığınız ürünün satış bilgilerini satış kayıt formuna giriniz.


![alt text](https://github.com/EmineSener/henry/blob/main/readme/Ekran%20G%C3%B6r%C3%BCnt%C3%BCs%C3%BC%20(179).png)


Satışları listele özelliği sayesinde çalıştığınız firmadaki yapılan diğer satışları görebilirsiniz.



## Proje Detayı


Projede hayali bir site olan Henry için site yapılmıştır .


Site yapısı farklı şirketler için kolayca dönüştürlebilir şekildedir.


## Henry site 

http://henrycompany.lovestoblog.com/





