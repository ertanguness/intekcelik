<!-- <?php //require_once "config/functions.php"; 
        ?> -->

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul class="sidebar-vertical">
                <li class="menu-title">
                    <span>Main</span>
                </li>

                <li>
                    <a href="#" class="top-menu" data-page="admin-dashboard"><i class="la la-dashboard"></i> <span>ANA SAYFA</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-rocket"></i> <span> PROJELER</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="#" data-page="projects/add">Yeni Proje</a></li>
                        <li><a href="#" data-page="projects/list">Proje Listesi</a></li>
                    </ul>
                </li>

                <!-- İMALAT -->
                <li class="menu-title">
                    <span>İMALAT YÖNETİMİ</span>
                </li>
                <li>
                    <a href="#" class="top-menu"><i class="la la-pencil-alt"></i> <span>Ön İmalat</span></a>
                </li>
                <li> <a href="#" data-page="error-404"><i class="la la-pencil-ruler"></i> <span>İmalat</span></a>
                </li>
                <!-- İMALAT -->


                <!-- STOK -->
                <li class="menu-title">
                    STOK YÖNETİMİ
                </li>

                <li>
                    <a href="#" class="top-menu" data-page="stok/list"><i class="lab la-buffer"></i> <span>STOK</span></a>
                </li>

                <li class="<?php echo ($page == 'clients.php' || $page == 'clients-list.php') ? 'active' : ''; ?>">
                    <a href="k.php"><i class="lab la-audible"></i> <span>Stok İstek Yönetimi</span></a>
                </li>
                <li>
                    <a href="#" data-page=""><i class="la la-warehouse"></i> <span>Yatay Form</span></a>
                </li>
                <!-- STOK -->


                <!-- FİRMA -->
                <li class="menu-title">
                    <span>FİRMA YÖNETİMİ</span>
                </li>
                <li>
                    <a href="#" class="top-menu" data-page="companies/list"><i class="lab la-buffer"></i> <span>Firmalar</span></a>
                </li>
                <li class="menu-title">
                    <span>PERSONEL YÖNETİMİ</span>
                </li>
                <li>
                    <a href="#" class="top-menu" data-page="personel/list"><i class="lab la-buffer"></i> <span>Personel</span></a>
                </li>

                <li class="submenu">
                    <a href="#"><i class="la la-gear"></i> <span> TANIMLAMALAR</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="#" data-page="tanımlamalar/kullanici">Kullanıcı Tanımlama</a></li>
                        <li><a href="#" data-page="tanımlamalar/departman">Departman Tanımlama</a></li>
                        <li><a href="#" data-page="tanımlamalar/durum">Proje Durum Tanımlama</a></li>
                        <li><a href="#" data-page="tanımlamalar/surec">Proje Süreç Tanımlama</a></li>
                        <li><a href="#" data-page="tanımlamalar/ralkodu">Ral Kodları Tanımlama</a></li>
                        <li><a href="#" data-page="tanımlamalar/kategori">Proje Kategori Tanımlama</a></li>
                        <li><a href="#" data-page="tanımlamalar/altkategori">Proje Alt Kategori/Pafta Tanımlama</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/logout.php"><i class="la la-close"></i> <span>ÇIKIŞ YAP</span></a>
                </li>

                <!-- DİĞER -->
            </ul>

        </div>
    </div>
</div>




<!-- /Sidebar -->