<li class="menu-title">
    <span>Genel</span>
</li>


<li class="<?php hasActive("home") ?>">
    <a onclick="Route('home')"><i class="la la-dashboard"></i> <span> Ana Sayfa </span></a>
</li>
<li class="submenu">
    <a href="#"><i class="la la-cube"></i> <span> Projeler</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="<?php hasActive("project-new") ?>" onclick="Route('project-new')">Yeni Proje</a></li>
        <li><a class="<?php hasActive('projects','project-details') ?>" onclick="Route('projects')">Proje Listesi</a></li>

    </ul>
</li>
<li class="menu-title">
    <span>İmalat</span>
</li>

<li class="<?php hasActive("onimalat") ?>">
    <a href="deals-dashboard.php"><i class="la la-dashboard"></i> <span> Ön İmalat </span></a>
</li>

<li class="<?php hasActive("imalat") ?>">
    <a href="deals-dashboard.php"><i class="la la-dashboard"></i> <span>İmalat </span></a>
</li>


<li class="menu-title">
    <span>Stok</span>
</li>

<li class="<?php hasActive("onimalat") ?>">
    <a onclick="Route('dashboard')"><i class="la la-dashboard"></i> <span> Stok Listesi </span></a>
</li>

<li class="<?php hasActive("imalat") ?>">
    <a href="deals-dashboard.php"><i class="la la-dashboard"></i> <span>Stok istek Yönetimi </span></a>
</li>


<li class="menu-title">
    <span>Firma Yönetimi</span>
</li>

<li class="submenu">
    <a href="#"><i class="la la-cube"></i> <span> Firmalar</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
    <li><a class="<?php hasActive("customer-new") ?>" href="customer-new.php">Yeni Firma</a></li>
        <li><a class="<?php hasActive("customers") ?>" onclick="Route('customers')">Firma Listesi</a></li>

    </ul>
</li>

<li class="menu-title">
    <span>Personel Yönetimi</span>
</li>

<li class="submenu">
    <a href="#"><i class="la la-cube"></i> <span> Personeller</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a href="chat.php">Yeni Personel</a></li>
        <li><a class="<?php hasActive("events") ?>" href="events.php">Personel Listesi</a></li>

    </ul>
</li>

<li class="menu-title">
    <span>AYARLAR</span>
</li>

<li class="submenu">
    <a href="#"><i class="la la-cube"></i> <span> Tanımlamalar</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="<?php hasActive("events") ?>" onclick="Route('defines-suppliers')">Tedarikçi Firma Tanımlama</a></li>
        <li><a class="<?php hasActive("events") ?>" href="events.php">Ana Firma Tanımlama</a></li>
        <li><a class="<?php hasActive("events") ?>" href="events.php">Kullanıcı Tanımlama</a></li>
        <li><a class="<?php hasActive("events") ?>" href="events.php">Birim Sorumlusu Tanımlama</a></li>
        <li><a class="<?php hasActive("events") ?>" href="events.php">Proje Durum Tanımlama</a></li>
        <li><a class="<?php hasActive("events") ?>" href="events.php">Proje Süreç Tanımlama</a></li>
        <li><a class="<?php hasActive("events") ?>" href="events.php">Ral Kodları Tanımlama</a></li>
        <li><a class="<?php hasActive("events") ?>" href="events.php">Proje Alt Kategori/Pafta Tanımlama</a></li>

    </ul>
</li>

<li>
    <a href="deals-dashboard.php"><i class="la la-close"></i> <span> Çıkış Yap </span></a>
</li>