<li class="menu-title">
    <span>Genel</span>
</li>


<li class="<?php hasActive("home") ?>">
    <a onclick="Route('home')"><i class="la la-dashboard"></i> <span> Ana Sayfa </span></a>
</li>
<li class="menu-title">
    <span>Proje Yönetimi</span>
</li>

<li class="<?php hasActive("project-new") ?>">
    <a onclick="Route('pages/projects/project-new')"><i class="la la-cube"></i> <span> Yeni Proje </span></a>
</li>

<li class="<?php hasActive("projects") ?>">
    <a onclick="Route('pages/projects/projects')"><i class="la la-cube"></i> <span> Proje Listesi</span></a>
</li>

<li class="menu-title">
    <span>İmalat Yönetimi</span>
</li>

<li class="<?php hasActive("onimalat") ?>">
    <a href="deals-dashboard.php"><i class="la la-industry"></i> <span> Ön İmalat </span></a>
</li>

<li class="<?php hasActive("imalat") ?>">
    <a href="deals-dashboard.php"><i class="la la-industry"></i> <span>İmalat </span></a>
</li>


<li class="menu-title">
    <span>Stok Yönetimi</span>
</li>

<li class="<?php hasActive("onimalat") ?>">
    <a onclick="Route('dashboard')"><i class="la la-inbox"></i> <span> Stok Listesi </span></a>
</li>

<li class="<?php hasActive("imalat") ?>">
    <a href="deals-dashboard.php"><i class="la la-inbox"></i> <span>Stok istek Yönetimi </span></a>
</li>


<li class="menu-title">
    <span>Firma Yönetimi</span>
</li>

<li class="<?php hasActive("customers") ?>">
    <a onclick="Route('pages/customers/customers')"><i class="la la-building"></i> <span> Firmalar</span></a>
</li>

<li class="menu-title">
    <span>Personel Yönetimi</span>
</li>

<li class="<?php hasActive("list") ?>">
    <a onclick="Route('pages/personel/list')"><i class="la la-male"></i> <span> Personeller</span></a>
</li>

<li class="menu-title">
    <span>AYARLAR</span>
</li>

<li class="submenu">
    <a href="#"><i class="la la-gear"></i> <span> Tanımlamalar</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="<?php hasActive("kullanici") ?>  " onclick="Route('pages/tanımlamalar/kullanici')">Kullanıcı Tanımlama</a></li>
        <li><a class="<?php hasActive("departman") ?> " onclick="Route('pages/tanımlamalar/departman')">Birim Sorumlusu Tanımlama</a></li>
        <li><a class="<?php hasActive("durum") ?>     " onclick="Route('pages/tanımlamalar/durum')">Proje Durum Tanımlama</a></li>
        <li><a class="<?php hasActive("surec") ?>     " onclick="Route('pages/tanımlamalar/surec')">Proje Süreç Tanımlama</a></li>
        <li><a class="<?php hasActive("ralkodu") ?>   " onclick="Route('pages/tanımlamalar/ralkodu')">Ral Kodları Tanımlama</a></li>
        <li><a class="<?php hasActive("kategori") ?>  " onclick="Route('pages/tanımlamalar/kategori')">Ana Kategori Tanımlama</a></li>
        <li><a class="<?php hasActive("altkategori") ?>" onclick="Route('pages/tanımlamalar/altkategori')">Proje Alt Kategori/Pafta Tanımlama</a></li>

    </ul>
</li>

<li>
    <a href="deals-dashboard.php"><i class="la la-close"></i> <span> Çıkış Yap </span></a>
</li>