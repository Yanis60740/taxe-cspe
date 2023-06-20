<?php

session_start();
function naf($donnee){
    $codeNaf = $donnee['codeNaf'];
    $liste = ['0510Z','0520Z','0610Z','0620Z','0710Z','0721Z','0729Z','0811Z','0812Z','0891Z','0892Z','0893Z','0899Z',
    '0910Z','0990Z','1011Z','1012Z','1013A','1013B','1020Z','1031Z','1032Z','1039A','1039B','1041B','1042Z',
    '1051A','1051B','1051C','1051D','1052Z','1061A','1061B','1062Z','1071A','1071B','1071C','1071D','1072Z',
    '1073Z','1081Z','1082Z','1083Z','1084Z','1085Z','1086Z','1089Z','1091Z','1092Z','1101Z','1102A','1102B',
    '1103Z','1104Z','1105Z','1106Z','1107A','1107B','1200Z','1310Z','1320Z','1330Z','1391Z','1392Z','1393Z',
    '1394Z','1395Z','1396Z','1399Z','1411Z','1412Z','1413Z','1414Z','1419Z','1420Z','1431Z','1439Z','1511Z',
    '1512Z','1520Z','1610A','1610B','1621Z','1622Z','1623Z','1624Z','1629Z','1711Z','1712Z','1721A','1721B',
    '1721C','1722Z','1723Z','1724Z','1729Z','1811Z','1812Z','1813Z','1814Z','1820Z','1910Z','1920Z','2011Z',
    '2012Z','2013A','2013B','2014Z','2015Z','2016Z','2017Z','2020Z','2030Z','2041Z','2042Z','2051Z','2052Z',
    '2053Z','2059Z','2060Z','2110Z','2120Z','2211Z','2219Z','2221Z','2222Z','2223Z','2229A','2229B','2311Z',
    '2312Z','2313Z','2314Z','2319Z','2320Z','2331Z','2332Z','2341Z','2342Z','2343Z','2344Z','2349Z','2351Z',
    '2352Z','2361Z','2362Z','2363Z','2364Z','2365Z','2369Z','2370Z','2391Z','2399Z','2410Z','2420Z','2431Z',
    '2432Z','2433Z','2434Z','2441Z','2442Z','2443Z','2444Z','2445Z','2446Z','2451Z','2452Z','2453Z','2454Z',
    '2511Z','2512Z','2521Z','2529Z','2530Z','2540Z','2550A','2550B','2561Z','2562A','2562B','2571Z','2572Z',
    '2573A','2573B','2591Z','2592Z','2593Z','2594Z','2599A','2599B','2611Z','2612Z','2620Z','2630Z','2640Z',
    '2651A','2651B','2652Z','2660Z','2670Z','2680Z','2711Z','2712Z','2720Z','2731Z','2732Z','2733Z','2740Z',
    '2751Z','2752Z','2790Z','2811Z','2812Z','2813Z','2814Z','2815Z','2821Z','2822Z','2823Z','2824Z','2825Z',
    '2829A','2829B','2830Z','2841Z','2849Z','2891Z','2892Z','2893Z','2894Z','2895Z','2896Z','2899A','2899B',
    '2910Z','2920Z','2931Z','2932Z','3011Z','3012Z','3020Z','3030Z','3040Z','3091Z','3092Z','3099Z','3101Z',
    '3102Z','3103Z','3109A','3109B','3211Z','3212Z','3213Z','3220Z','3230Z','3240Z','3250A','3250B','3291Z',
    '3299Z','3311Z','3312Z','3313Z','3314Z','3315Z','3316Z','3317Z','3319Z','3320A','3320B','3320C','3320D',
    '3511Z','3512Z','3513Z','3514Z','3521Z','3522Z','3523Z','3530Z','3600Z','3700Z','3811Z','3812Z','3821Z',
    '3822Z','3831Z','3832Z','3900Z',
	'0510z','0520z','0610z','0620z','0710z','0721z','0729z','0811z','0812z','0891z','0892z','0893z','0899z',
    '0910z','0990z','1011z','1012z','1013a','1013b','1020z','1031z','1032z','1039a','1039b','1041b','1042z',
    '1051a','1051b','1051c','1051d','1052z','1061a','1061b','1062z','1071a','1071b','1071c','1071d','1072z',
    '1073z','1081z','1082z','1083z','1084z','1085z','1086z','1089z','1091z','1092z','1101z','1102a','1102b',
    '1103z','1104z','1105z','1106z','1107a','1107b','1200z','1310z','1320z','1330z','1391z','1392z','1393z',
    '1394z','1395z','1396z','1399z','1411z','1412z','1413z','1414z','1419z','1420z','1431z','1439z','1511z',
    '1512z','1520z','1610a','1610b','1621z','1622z','1623z','1624z','1629z','1711z','1712z','1721a','1721b',
    '1721c','1722z','1723z','1724z','1729z','1811z','1812z','1813z','1814z','1820z','1910z','1920z','2011z',
    '2012z','2013a','2013b','2014z','2015z','2016z','2017z','2020z','2030z','2041z','2042z','2051z','2052z',
    '2053z','2059z','2060z','2110z','2120z','2211z','2219z','2221z','2222z','2223z','2229a','2229b','2311z',
    '2312z','2313z','2314z','2319z','2320z','2331z','2332z','2341z','2342z','2343z','2344z','2349z','2351z',
    '2352z','2361z','2362z','2363z','2364z','2365z','2369z','2370z','2391z','2399z','2410z','2420z','2431z',
    '2432z','2433z','2434z','2441z','2442z','2443z','2444z','2445z','2446z','2451z','2452z','2453z','2454z',
    '2511z','2512z','2521z','2529z','2530z','2540z','2550a','2550b','2561z','2562a','2562b','2571z','2572z',
    '2573a','2573b','2591z','2592z','2593z','2594z','2599a','2599b','2611z','2612z','2620z','2630z','2640z',
    '2651a','2651b','2652z','2660z','2670z','2680z','2711z','2712z','2720z','2731z','2732z','2733z','2740z',
    '2751z','2752z','2790z','2811z','2812z','2813z','2814z','2815z','2821z','2822z','2823z','2824z','2825z',
    '2829a','2829b','2830z','2841z','2849z','2891z','2892z','2893z','2894z','2895z','2896z','2899a','2899b',
    '2910z','2920z','2931z','2932z','3011z','3012z','3020z','3030z','3040z','3091z','3092z','3099z','3101z',
    '3102z','3103z','3109a','3109b','3211z','3212z','3213z','3220z','3230z','3240z','3250a','3250b','3291z',
    '3299z','3311z','3312z','3313z','3314z','3315z','3316z','3317z','3319z','3320a','3320b','3320c','3320d',
    '3511z','3512z','3513z','3514z','3521z','3522z','3523z','3530z','3600z','3700z','3811z','3812z','3821z',
    '3822z','3831z','3832z','3900z'];
    if (in_array($codeNaf,$liste)) {
        header('Location: /conso-electrique');
        exit;
    }  
    else {
        header('Location: /erreur-eligibilite');
        exit;
    }
}   

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['naf'])){
        naf($_POST);
    }
    elseif(isset($_POST['eli'])) {
        eli($_POST);
    }   
}

function eli($donnee){
    if (isset($_POST['button-eli'])) {
        $_SESSION['conso_elec'] = $donnee['conso_elec'];
        $conso_elec = $_SESSION['conso_elec'];
        // if ($conso_elec == "") {
        //     echo '<script>alert("Veuillez remplir le champ de consommation d\'électricité.");</script>';
        //     // header('Location: conso-electrique.php');
        //     exit;
        // }

            header('Location: /resultat');
            exit;

    }
}
function custom_h1_class( $atts, $content = null ) {
    $atts['class'] = 'titre-h1-article';
    return $atts;
}
add_filter( 'the_title_attributes', 'custom_h1_class', 10, 2 );

function mon_script() {
   wp_enqueue_script('script.js', get_template_directory_uri() . '/script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'mon_script' );

