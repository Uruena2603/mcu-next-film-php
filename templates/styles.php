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