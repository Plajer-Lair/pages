<?php
include_once('../../json_localization.php');
include_once("../../tracking.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Plajer's Lair Wiki</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <link rel="stylesheet" href="../../markdown.css">
    <link rel="stylesheet" href="../../alerts.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#9e9e9e">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#9e9e9e">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#9e9e9e">
    <link rel="icon" sizes="192x192" href="../../img/faviconmobile.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.ico">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <h1 id="plugin-files-explained-a-k-a-plugin-configuration-section-">Plugin files - explained (a.k.a Plugin
                configuration section)</h1>
            <h2 id="table-of-contents">Table of contents</h2>
            <p><strong>Basic files</strong></p>
            <ul>
                <li>
                    <a href="#arenas-yml">arenas.yml</a>
                </li>
                <li>
                    <a href="#bungee-yml">bungee.yml</a>
                </li>
                <li>
                    <a href="#config-yml">config.yml</a>
                </li>
                <li><a href="#mysql-yml">mysql.yml</a>
                </li>
            </ul>
            <p><strong>Additional content</strong></p>
            <ul>
                <li><a href="#language-and-locales">Language
                        and l10n (locale)</a></li>
                <li><a href="#stats-storage-types">Stats
                        storage types</a></li>
            </ul>
            <hr>
            <h2 id="basic-files">Basic files</h2>
            <h3 id="arenas-yml">arenas.yml</h3>
            <p>This file is only for in-game usage. It&#39;s not recommended to edit it while the server is on!
                The file contains all information about created arenas.</p>
            <hr>
            <h3 id="bungee-yml">bungee.yml</h3>
            <p>BungeeCord configuration is there. You must enable bungee support first in <strong>config.yml</strong>.
                Set
                <strong>BungeeActivated</strong> to <strong>true</strong> to enable it.</p>
            <div class="alert alert-info alert-white rounded">
                <div class="icon">
                    <i class="fa fa-info-circle"></i>
                </div>
                <div style="margin-left: 45px;"><strong>What is MOTD Manager?</strong>
                    MOTD Manager modifies server&#39;s MOTD to make it readable by Server Bungeecord systems like <a
                            href="https://www.spigotmc.org/resources/timocloud-the-most-efficient-cloud-system.53757/">Timo
                        Cloud</a>
                    and <a href="https://www.spigotmc.org/resources/bungeesigns.6563/">Bungee Signs</a>. MOTD is based
                    on game state
                    if that option is enabled.
                </div>
            </div>
            <hr>
            <h3 id="config-yml">config.yml</h3>
            <p>config.yml is very well commented. No need to explain more any part of it.</p>
            <p>For customizing custom permissions check out <a
                        href="https://plajer.xyz/wiki/mc/villagedefense/cmds_and_perms.php#custom-permissions">this
                    section</a>.</p>
            <p><strong>Part of config.yml</strong></p>
            <p><img src="https://i.imgur.com/3fH8j8k.png" alt=""></p>
            <hr>
            <h3 id="mysql-yml">mysql.yml</h3>
            <p>Here you can set up MySQL plugin configuration.
                You need to enable MySQL first in <strong>config.yml</strong>. Set <strong>DatabaseActivated</strong>
                option to
                <strong>true</strong>.</p>
            <p><strong>This is mysql.yml file with explanations of individual options.</strong>
                <img src="https://i.imgur.com/m31nvuz.png" alt=""></p>
            <h2 id="additional-content">Additional content</h2>
            <h3 id="language-and-locales">Language and locales</h3>
            <p>Plugin is 95% translatable via <strong>language.yml</strong> file.</p>
            <p><img src="https://i.imgur.com/WTG1CL2.png" alt=""></p>
            <p>However, you can use localization support which was implemented in VD 3.</p>
            <p>To change locale of plugin go to <strong>config.yml</strong> and modify <strong>locale</strong> value.
            </p>
            <p><img src="https://i.imgur.com/bHYXt2q.png" alt=""></p>
            <p><strong>Valid localizations:</strong></p>
            <ul>
                <li><img src="https://www.icon2s.com/wp-content/uploads/2013/08/00_cctld-gb.png" alt=""> default
                    (English)
                </li>
                <li><img src="https://www.icon2s.com/wp-content/uploads/2013/08/00_cctld-pl.png" alt=""> pl
                    (Polish/Polski)
                </li>
                <li><img src="https://www.icon2s.com/wp-content/uploads/2013/08/00_cctld-de.png" alt=""> de
                    (German/Deutsch) (by
                    Tigerkatze)
                </li>
                <li><img src="https://www.icon2s.com/wp-content/uploads/2013/08/00_cctld-es.png" alt=""> es
                    (Spanish/Español)
                    (by POEditor contributors)
                </li>
                <li><img src="https://www.icon2s.com/wp-content/uploads/2013/08/00_cctld-id.png" alt=""> id
                    (Indonesian/Indonesia) (by POEditor contributors (Yume))
                </li>
                <li><img src="https://www.icon2s.com/wp-content/uploads/2013/08/00_cctld-cn.png" alt=""> zh (Chinese
                    (Simplified)/简体中文) (by POEditor contributors)
                </li>
                <li><img src="https://www.icon2s.com/wp-content/uploads/2013/08/00_cctld-fr.png" alt=""> fr
                    (French/Français)
                    (by POEditor contributors)
                </li>
                <li><img src="https://www.icon2s.com/wp-content/uploads/2013/08/00_cctld-hu.png" alt=""> hu
                    (Hungarian/Magyar)
                    (by POEditor contributors)
                </li>
                <li><img src="https://www.icon2s.com/wp-content/uploads/2013/08/00_cctld-vn.png" alt=""> vn
                    (Vietnamese/Việt)
                    (by POEditor contributors)
                </li>
                <li><img src="https://www.icon2s.com/wp-content/uploads/2013/08/00_cctld-ro.png" alt=""> ro
                    (Romanian/Românesc)
                    (by POEditor contributors (Andrei))
                </li>
            </ul>
            <hr>
            <h3 id="stats-storage-types">Stats storage types</h3>
            <p><strong>Current stats storage types for player statistics:</strong></p>
            <ul>
                <li>Flat file (.yml) - enabled by default</li>
                <li>MySQL (database) - can be enabled in config.yml (see <a
                            href="#mysql-yml">mysql.yml</a>)
                </li>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12">
            <div id="side-menu">
                <img src="https://i.imgur.com/ZMPQeCz.png" class="img-fluid mx-auto d-block" alt="logo"
                     width="200">
                <div class="menu-content">
                    <h3 id="-general-"><strong><?php echo localize("VD-Sidebar-General"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/index.php"><?php echo localize("VD-Sidebar-Home"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/cmds_and_perms.php"><?php echo localize("VD-Sidebar-Cmds-And-Perms"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/free_maps.php"><?php echo localize("VD-Sidebar-Free-Maps"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/addons.php"><?php echo localize("VD-Sidebar-Plugin-Addons"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/tips.php"><?php echo localize("VD-Sidebar-Server-Tips"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/papi_placeholders.php"><?php echo localize("VD-Sidebar-PAPI-Placeholders"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-support-"><strong><?php echo localize("VD-Sidebar-Support"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://youtu.be/16GS6zAte5I"><?php echo localize("VD-Sidebar-Setup-Tutorial"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/faq.php"><?php echo localize("VD-Sidebar-FAQ"); ?></a> - <?php echo localize("VD-Sidebar-FAQ-Problems-And-Tips"); ?>
                        </li>
                        <li style="list-style-image: url('../../img/you-are-here.png');">
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/configuration.php"><?php echo localize("VD-Sidebar-Files-Explained"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-developement-space-"><strong><?php echo localize("VD-Sidebar-Development-Space"); ?></strong>
                    </h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/api.php"><?php echo localize("VD-Sidebar-Developer-API"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer-lair.github.io/Village_Defense/"><?php echo localize("VD-Sidebar-Java-Docs"); ?></a>
                        </li>
                    </ul>
                    <h3 id="enhancements-addon"><?php echo localize("VD-Sidebar-Enhancements-Addon"); ?></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/enhancements/cmds_and_perms.php"><?php echo localize("VD-Sidebar-Cmds-And-Perms"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/enhancements/faq.php"><?php echo localize("VD-Sidebar-Enhancements-FAQ"); ?></a>
                        </li>
                    </ul>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer font-small grey">

    <div class="footer-copyright text-center py-3">© 2018 <a target="_blank" href="https://www.spigotmc.org/resources/village-defence-1-8-8-and-1-12-only.41869/">Village Defense 3</a> |
        Created by <a target="_blank" href="https://github.com/Plajer-Lair">Plajer's Lair</a> and maintained by
        <a target="_blank" href="https://www.spigotmc.org/members/plajer.423193/">Plajer</a>
    </div>

</footer>
</body>
</html>