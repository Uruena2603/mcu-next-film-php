<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
#Inicializar una nueva sesión de cURL; ch = cURL handle
$ch = curl_init(API_URL);
//Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
#Ejecutar la peticion y guardamos el resultado
$result = curl_exec($ch);

//alternativa utilizar file_get_contents
//$result = get_file_contents(API_URL); si solo quieres hacer un GET de una API

$data = json_decode($result, true);

curl_close($ch);
?>

<head>
    <meta charset="UTF-8"/>
    <title>La próxima película de Marvel</title>
    <meta name = "description" content = "width=device-width, initial-scale=1.0"/>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
</head>

<main>

    <section>
        <img src="<?= $data["poster_url"]; ?>" width="200" alt="Poster de <?=$data["title"]; ?>" 
        style="border-radius:16px" />
        <h2>La próxima película de Marvel</h2>
    </section>

    <hgroup>
        <h2> <?= $data["title"] ?> se estrena en <?= $data["days_until"] ?> días. </h2>
        <p>Fecha de estreno: <?= $data["release_date"] ?> </p>
        <p>La siguiente es: <?= $data["following_production"]["title"]; 
        ?> y se estrena en <?= $data["following_production"]["days_until"];?> días </p>
    </hgroup>
    
</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
        margin: 0;
        height: 100vh;
        background-color: var(--background-color);
        padding: 1rem;
    }

    main {
        max-width: 900px;              /* Caja más amplia */
        text-align: center;
        padding: 3rem;                 /* Más espacio interior */
        background-color: var(--card-background-color);
        border-radius: 16px;           /* Bordes ligeramente más redondeados */
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2); /* Sombra más notoria */
        margin: 0 auto;                /* Centra horizontalmente si fuera necesario */
    }

    img {
        max-width: 100%;
        height: auto;
        border-radius: 16px;
        margin-bottom: 1.5rem;
    }

    h2 {
        color: var(--primary-color);
        margin-bottom: 1rem;
    }

    p {
        margin-bottom: 1rem;
        color: var(--secondary-color);
    }

    section {
        margin-bottom: 1.5rem;
    }

    a {
        color: var(--primary-color);
        text-decoration: underline;
    }
</style>
