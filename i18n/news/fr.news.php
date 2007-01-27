<?php

/* The following bb codes are available:
   [link=/downloads/]download[/link] <- used for internal links, always starting from root (/)
   [url=http://link.com]link[/url]   <- external links (new window)
   [b]bold[/b]
   [i]italic[/i]
   [br]

   All full http://, https://, ftp:// and email adresses are converted into link
*/
$date_format = "%e %B %Y";
$posted_by = "Posté par";

$news = array (
/*
    array (
        'id'      => <previous id number + 1>
        'date'    => '<day> <month> <year>',
        'author'  => '<you>',
        'title'   => '<title>',
        'content' => '<stuff you want to say>',
    ),
*/
    2 => array (
        'date'    => '21 jan 2007',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Sortie de Xfce 4.4.0',
        'content' => 'Après plus de deux années de développement, Xfce 4.4.0 vient juste de sortir.'.
                     '[br]'.
                     'Xfce 4.4 comprend de nouveaux utilitaires dont le très attendu gestionnaire de fichiers Thunar. Xfce 4.4 contient aussi d\'énormes améliorations de ses composants de base.'.
                     '[br][br]'.
                     'Un tour visuel de Xfce 4.4 est disponible à l\'adresse suivante :[br]'.
                     '[link=/about/tour]http://www.xfce.org/about/tour[/link]'.
                     '[br][br]'.
                     'Téléchargez Xfce 4.4 à partir le la section téléchargement :[br]'.
                     '[link=/download]http://www.xfce.org/download[/link]',
    ),    
    1 => array (
        'date'    => '15 jan 2007',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Sortie de Xfce 4.2.4',
        'content' => 'Une nouvelle version corrigée de Xfce 4.2 est disponible. Cette version est probablement la dernière pour la famille de Xfce 4.2. elle contient plusieurs correctifs de bogues portés de la version en développement.[br]'.
                     'Cette version ne doit pas être confondue avec la prochaine sortie de la version 4.4 de Xfce, c\'est une version corrigée de la dernière version stable de la famille Xfce 4.2. Téléchargez Xfce 4.4 à partir le la section téléchargement :[br]'.
                     '[link=/download]http://www.xfce.org/download[/link]',
    ),
);
?>
