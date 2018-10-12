<!--
    GARG!S

    Mantığı çok basit. Kişilik testinden çıkan sonuçları yorumlamak. Hepsi bu. Yani çok abartılacak bi şi değil. ;D
    En basit haliyle anlatmak gerekirse dışa dönüklüğü %50 yi geçerse kişi dışa dönük olduğunu anlarız. 
    Dışa dönükse içe dönük meslekleri yapmaz yani özgüven gerektiren işleri yapması çok mantık. Girişimcilik gibi bir meslek yeterince özgüven isteyen bir meslek. 
    Bu da demek oluyor ki karakterimizin dışa dönüklüğü %50+ olduğunda dışa dönükler için önerilen meslekleri görecektir.

    Sonuç olarak karakterimiz uygun mesleği bulmuş olur.

    Ha, çıkan meslek için iş ilanları da koyabilir veya o meslek hakkında bir halt bilmiyorsa eğitimleri seçip iş güç öğrenebilir.
    Üniversite ağınıda bağlayıp ders notlarına göre çıkan şeylerle bambaşka şeyler yapılabilir. Ya düşündümde şu üniversitelerin apilerini çıkarsalar manyak şeyler çıkmaz mı? :)
    
    - Evvet bebeğim, bu adam yıkılıyo.. :D
-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gargis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-reboot.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-grid.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/genel.css" />
</head>
<body>
    <header class="container">
        <div class="row">
            <div class="col-sm-12">
                <img src="res/gargis.PNG" alt="Gargis Türkiye'nin 2. Kariyer Seçme Bilmem Nesi"><br />
                <div class="menu">
                    <a href="index.php" title="Valide Sayfa">Valide Sayfa</a>
                    <a href="https://github.com/ugurkilci/gargis" title="GitHub" target="_blank">Hacı kaynak kodlarını göster!</a>
                    <a href="https://instagram.com/ugur2nd" title="Instagram" target="_blank">Instagram</a>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-sm-6"><br />
                <h1>Hafız, Bu Ne?</h1>
                <p>Gargis, sana uygun olan en iyi işleri gösteren aşırı basit bir web sitedir. İstediğin gibi kullan bebeğim.</p>
                <h2>Yardım Edeyim Kayınçomun Çocuğu!</h2>
                <p>Emmioğlu önce şuradaki karakter analizini yap, çıkan sonuçları tabloya gir. Ve "Bana iş bul" tuşuna tıkla ve senin yapabileceğin işleri sana bulsun.</p>
                <a href="https://www.16personalities.com/tr/%C3%BCcretsiz-ki%C5%9Filik-testi?utm_source=UğurKILCI" class="btn btn-danger" target="_blank">Kişilik Testi Yap & Gel!</a>
            </div>

            <div class="col-sm-6"><br />
                <h3>Bu, Tablo.</h3>
                <em>Lütfen yüzdeleri gir:)</em>
                <form action="isbul.php" method="post">
                    <table>
                        <tr>
                            <td><strong>Dışa Dönük:</strong><input type="number" name="disadonuk" class="form-control" placeholder="%"></td>
                            <td><strong>İçe Dönük:</strong><input type="number" name="icedonuk" class="form-control" placeholder="%"></td>
                        </tr>
                        <tr>
                            <td><strong>Sezgisel:</strong><input type="number" name="sezgisel" class="form-control" placeholder="%"></td>
                            <td><strong>Gerçekçi:</strong><input type="number" name="gercekci" class="form-control" placeholder="%"></td>
                        </tr>
                        <tr>
                            <td><strong>Mantık Merkezli:</strong><input type="number" name="mantikm" class="form-control" placeholder="%"></td>
                            <td><strong>Prensip Merkezli:</strong><input type="number" name="prensipm" class="form-control" placeholder="%"></td>
                        </tr>
                        <tr>
                            <td><strong>Planlayıcı:</strong><input type="number" name="planlayici" class="form-control" placeholder="%"></td>
                            <td><strong>Araştırmacı:</strong><input type="number" name="arastirmaci" class="form-control" placeholder="%"></td>
                        </tr>
                        <tr>
                            <td><strong>İddialı:</strong><input type="number" name="iddiali" class="form-control" placeholder="%"></td>
                            <td><strong>Temkinli:</strong><input type="number" name="temkinli" class="form-control" placeholder="%"></td>
                        </tr>
                        <tr>
                            <td><br /></td>
                            <td><br /></td>
                        </tr>
                        <tr>
                            <td><input type="submit" class="btn btn-block btn-success" value="Bana iş bul!"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <footer class="container">
        <div class="row">
            <div class="col-sm-12">
                <br /><p><small>Gargis &copy; <?php echo date("Y"); ?> - Bir <strong>Uğur KILCI</strong> ürünüdür.</small></p>
            </div>
        </div>
    </footer>
</body>
</html>