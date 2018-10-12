<?php
include 'func.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>İş Bul - Gargis</title>
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
            <div class="col-sm-12"><br />
                <h1>Sana Uygun İşler..</h1>
                <ul>
                <?php
                    gargis("disadonuk", $_POST["disadonuk"]);
                    gargis("icedonuk", $_POST["icedonuk"]);
                    gargis("sezgisel", $_POST["sezgisel"]);
                    gargis("gercekci", $_POST["gercekci"]);
                    gargis("mantikm", $_POST["mantikm"]);
                    gargis("prensipm", $_POST["prensipm"]);
                    gargis("arastirmaci", $_POST["arastirmaci"]);
                    gargis("iddiali", $_POST["iddiali"]);
                    gargis("temkinli", $_POST["temkinli"]);
                ?>
                </ul>
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