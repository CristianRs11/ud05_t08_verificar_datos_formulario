<?php
    header ('Content-Type: text/html; charset=UTF-8');
    echo "<pre>"; print_r($_REQUEST); echo "</pre>";

    $nomeCompleto= htmlspecialchars(trim(strip_tags($_REQUEST['nomeCompleto'])), ENT_QUOTES, "ISO-8859-1");
    if ($nomeCompleto == "")
        print "<p>O campo nome completo está baleiro.</p>";
    else
        print "<p>O valor recibido do campo nome completo é: $nomeCompleto</p>";

    $nomeUsr=htmlspecialchars(trim(strip_tags($_REQUEST['nomeUsr'])), ENT_QUOTES, "ISO-8859-1");
    if ($nomeUsr == "")
        print "<p>O campo nome de usuario está baleiro. É un campo obrigatorio.</p>";
    else
        print "<p>O valor recibdo do campo nome de usuario é: $nomeUsr</p>";

    $contrasinal=htmlspecialchars(trim(strip_tags($_REQUEST['contrasinal'])), ENT_QUOTES, "ISO-8859-1");
    if ($contrasinal == "")
        print "<p>O campo contrasianl está baleiro. É un campo obrigatorio.</p>";
    else
        print "<p>O valor recibido do campo contrasinal é: $contrasinal";
    
    $idade=htmlspecialchars(trim(strip_tags($_REQUEST['idade'])), ENT_QUOTES, "ISO-8859-1");
    if ($idade == "")
        print "<p>O campo idade está baleiro.</p>";
    else
        print "<p>O valor recibido do campo idade é: $idade</p>";
    
    $dNac=htmlspecialchars(trim(strip_tags($_REQUEST['dNac'])), ENT_QUOTES, "ISO-8859-1");
    if ($dNac == "")
        print "<p>O campo data de nacemento está baleiro.</p>";
    else
        print "<p>O valor recibido do campo data de nacemento é: $dNac</p>";
    
    $email=htmlspecialchars(trim(strip_tags($_REQUEST['email'])), ENT_QUOTES, "ISO-8859-1");
    if ($email == "")
        print "<p>O campo email está baleiro. É un campo obrigatorio.</p>";
    else
        print "<p>O valor recibido do campo email é: $email</p>";
    
    $url=htmlspecialchars(trim(strip_tags($_REQUEST['url'])), ENT_QUOTES, "ISO-8859-1");
    if ($url == "")
        print "<p>O campo URL da páxina persoal está baleiro.</p>";
    else
        print "<p>O valor do campo URL da páxina persoal é: $url</p>";
    
    $ip=htmlspecialchars(trim(strip_tags($_REQUEST['ip'])), ENT_QUOTES, "ISO-8859-1");
    if ($ip == "")
        print "<p>O campo IP do equipo está baleiro.</p>";
    else
        print "<p>O valor do campo IP do equipo é: $ip</p>";
    
    $hobbies=htmlspecialchars(trim(strip_tags($_REQUEST['hobbies'])), ENT_QUOTES, "ISO-8859-1");
    if ($hobbies == "")
        print "<p>O campo descrición dos hobbies está baleiro.</p>";
    else
        print "<p>O valor do campo hobbies é: $hobbies</p>";
    
    $rcbInfo= (isset($_REQUEST['rcbInfo']))
        ? htmlspecialchars(trim(strip_tags($_REQUEST['rcbInfo'])), ENT_QUOTES, "ISO-8859-1")
        : "";
    if ($rcbInfo == "")
        print "<p>Non se utilizou o control recibir información.</p>";
    else
        print "<p>O valor recibido do control recibir información é: $rcbInfo</p>";
    
    $sexo=(isset($_REQUEST['sexo']))
        ? htmlspecialchars(trim(strip_tags($_REQUEST['sexo'])), ENT_QUOTES, "ISO-8859-1")
        : "";
    if ($sexo == "")
        print "<p>Non se utilizou o control sexo. É obrigatorio.</p>";
    else
        print "<p>O valor recibido do control sexo é: $sexo</p>";

    $linguasEs= (isset($_REQUEST['LinguasEs']))
        ? $_REQUEST['LinguasEs']
        : "";
    if ($linguasEs == "")
        print "<p>Non se utilizou o control linguas estranxeiras.</p>";
    else{
        echo "Os valores recibidos do menú linguas estranxeiras son: <pre>";
        print_r($linguasEs);
        print "</pre>";
    }

    $curriculo= (isset($_FILES['curriculo']))
        ? $_FILES['curriculo']
        : "";
    if ($curriculo == "")
        print "<p>Non se utilizou o control currículo.</p>";
    else{
        echo "O nome e tamaño do arquivo recibido no campo currículo son: ".$curriculo["name"]." e ".$curriculo["size"]." bytes</p>";
        move_uploaded_file($curriculo["tmp_name"], "subidos/".$curriculo["name"]);
    }
?>