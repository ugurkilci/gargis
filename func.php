<?php

function gargis($a, $b){   
    if ($a == "disadonuk") { // Dışa dönük meslekler
        if ($b > 50) {
            echo '
                <li>Aşçı</li>
                <li>Spiker</li>
                <li>Girişimci</li>
                <li>Cumhurbaşkanı</li>
                <li>Antrenör</li>
            ';
        }
    }

    if ($a == "icedonuk") { // İçe dönük meslekler
        if ($b > 50) {
            echo '
                <li>Tıbbi Sekreter</li>
                <li>Anaokul Öğretmeni</li>
                <li>Muhasebeci</li>
                <li>Anketör</li>
                <li>Veteriner</li>
            ';
        }
    }

    if ($a == "sezgisel") { // Sezgisel meslekler
        if ($b > 50) {
            echo '
                <li>Ressam</li>
                <li>Doktor</li>
                <li>Yazılımcı</li>
                <li>Grafik Tasarım</li>
                <li>Profesör</li>
            ';
        }
    }

    if ($a == "gercekci") { // Gerçekçi meslekler
        if ($b > 50) {
            echo '
                <li>Memur</li>
                <li>Matematik Öğretmeni</li>
                <li>Asker</li>
                <li>Polis</li>
                <li>Hemşire</li>
            ';
        }
    }

    if ($a == "mantikm") { // Mantık Merkezli meslekler
        if ($b > 50) {
            echo '
                <li>Bakkal</li>
                <li>Restoran Sahibi</li>
                <li>Galerici</li>
                <li>Balıkçı</li>
                <li>Milyoncu</li>
            ';
        }
    }

    if ($a == "prensipm") { // Prensip Merkezli meslekler
        if ($b > 50) {
            echo '
                <li>Avukat</li>
                <li>Savcı</li>
                <li>Şarkıcı</li>
                <li>Psikolog</li>
                <li>Müzisyen</li>
            ';
        }
    }

    if ($a == "planlayici") { // Planlayıcı meslekler
        if ($b > 50) {
            echo '
                <li>Müdür</li>
                <li>Yönetmen</li>
                <li>Senarist</li>
                <li>Yönetici</li>
                <li>DevOps</li>
            ';
        }
    }

    if ($a == "arastirmaci") { // Araştırmacı meslekler
        if ($b > 50) {
            echo '
                <li>Bilim İnsanı</li>
                <li>Astronot</li>
                <li>Arkeolog</li>
                <li>Kimyager</li>
                <li>Astro Fizikçi</li>
            ';
        }
    }

    if ($a == "iddiali") { // İddialı meslekler
        if ($b > 50) {
            echo '
                <li>İnternet Girişimcisi</li>
                <li>Cerrah</li>
                <li>Sinema Oyuncusu</li>
                <li>Yatırımcı</li>
                <li>Pilot</li>
            ';
        }
    }

    if ($a == "temkinli") { // Temkinli meslekler
        if ($b > 50) {
            echo '
                <li>İngilizce Öğretmeni</li>
                <li>Diş Hekimi</li>
                <li>Futbolcu</li>
                <li>Mühendis</li>
                <li>Mimar</li>
            ';
        }
    }
}