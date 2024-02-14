# Practica "crear un tweet con HTML y CSS"

Necesitamos tener conocimientos de HTML y CSS, ya que vamos a utilizar grid y flexbox para el acomodo de ciertos elementos.
```

## HTML File

```<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clon del twit</title>
</head>
<body>
    <link rel="stylesheet" href="styles.css">
    <!--Contenedor completo-->
    <div class="container">
        <!--Cuerpo del twit-->
        <div class="twitt-body">
            <!--Icono de perfil-->
            <div class="twit-avatar">
                <img src="avatar.png" alt="Profile photo">
            </div>
            <!--Info del twit-->
            <div class="twitt-content">
                <p>
                    <span style="font-weight: bold;">Juan Pablo Ruiz Esparza Salazar</span>
                    <span class="textGrey">@up210752</span>
                    <span class="textGrey">30 s.</span>
                </p>
                <p>
                    My personal GitHub profile <a href="https://github.com/UP210752">https://github.com/UP210752</a>
                </p>
                <img src="github.png" alt="git logo">
            </div>
        </div>
        <!--Contenedor de iconos-->

        <div class="twitt-icons">
            <div class="icon">
                <div>
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <g>
                            <path d="M14.046 2.242l-4.148-.01h-.002c-4.374 0-7.8 3.427-7.8 7.802 0 4.098 3.186 7.206 7.465 7.37v3.828c0 .108.044.286.12.403.142.225.384.347.632.347.138 0 .277-.038.402-.118.264-.168 6.473-4.14 8.088-5.506 1.902-1.61 3.04-3.97 3.043-6.312v-.017c-.006-4.367-3.43-7.787-7.8-7.788zm3.787 12.972c-1.134.96-4.862 3.405-6.772 4.643V16.67c0-.414-.335-.75-.75-.75h-.396c-3.66 0-6.318-2.476-6.318-5.886 0-3.534 2.768-6.302 6.3-6.302l4.147.01h.002c3.532 0 6.3 2.766 6.302 6.296-.003 1.91-.942 3.844-2.514 5.176z">
                            </path>
                        </g>
                    </svg>
                </div>
                <span>165</span>
            </div>
            <!-- Retweet Button -->
            <div class="icon">
                <div>
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <g>
                            <path d="M23.77 15.67c-.292-.293-.767-.293-1.06 0l-2.22 2.22V7.65c0-2.068-1.683-3.75-3.75-3.75h-5.85c-.414 0-.75.336-.75.75s.336.75.75.75h5.85c1.24 0 2.25 1.01 2.25 2.25v10.24l-2.22-2.22c-.293-.293-.768-.293-1.06 0s-.294.768 0 1.06l3.5 3.5c.145.147.337.22.53.22s.383-.072.53-.22l3.5-3.5c.294-.292.294-.767 0-1.06zm-10.66 3.28H7.26c-1.24 0-2.25-1.01-2.25-2.25V6.46l2.22 2.22c.148.147.34.22.532.22s.384-.073.53-.22c.293-.293.293-.768 0-1.06l-3.5-3.5c-.293-.294-.768-.294-1.06 0l-3.5 3.5c-.294.292-.294.767 0 1.06s.767.293 1.06 0l2.22-2.22V16.7c0 2.068 1.683 3.75 3.75 3.75h5.85c.414 0 .75-.336.75-.75s-.337-.75-.75-.75z">
                            </path>
                        </g>
                    </svg>
                </div>
                <span>320</span>
            </div>
            <!-- Like Button -->
            <div class="icon">
                <div>
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <g>
                            <path d="M12 21.638h-.014C9.403 21.59 1.95 14.856 1.95 8.478c0-3.064 2.525-5.754 5.403-5.754 2.29 0 3.83 1.58 4.646 2.73.814-1.148 2.354-2.73 4.645-2.73 2.88 0 5.404 2.69 5.404 5.755 0 6.376-7.454 13.11-10.037 13.157H12zM7.354 4.225c-2.08 0-3.903 1.988-3.903 4.255 0 5.74 7.034 11.596 8.55 11.658 1.518-.062 8.55-5.917 8.55-11.658 0-2.267-1.823-4.255-3.903-4.255-2.528 0-3.94 2.936-3.952 2.965-.23.562-1.156.562-1.387 0-.014-.03-1.425-2.965-3.954-2.965z">
                            </path>
                        </g>
                    </svg>
                </div>
                <span>122</span>
            </div>
            <!-- Share Button -->
            <div class="icon">
                <div>
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <g>
                            <path d="M17.53 7.47l-5-5c-.293-.293-.768-.293-1.06 0l-5 5c-.294.293-.294.768 0 1.06s.767.294 1.06 0l3.72-3.72V15c0 .414.336.75.75.75s.75-.336.75-.75V4.81l3.72 3.72c.146.147.338.22.53.22s.384-.072.53-.22c.293-.293.293-.767 0-1.06z">
                            </path>
                            <path d="M19.708 21.944H4.292C3.028 21.944 2 20.916 2 19.652V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 .437.355.792.792.792h15.416c.437 0 .792-.355.792-.792V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 1.264-1.028 2.292-2.292 2.292z">
                            </path>
                        </g>
                    </svg>
                </div>
                <span>382</span>
            </div>
        </div>

    </div>

</body>
</html>
```

## CSS File

```:root {
    --primary-color-grey: #6E7886;
    --primary-color-grey-50: rgba(110, 120, 134, 0.1);
    --color-icon-comentario: rgb(29,161,242);
    --color-icon-comentario-50: rgba(29,161,242,0.4);
    --color-icon-retwit: rgba(24,176,95);
    --color-icon-retwit-50: rgba(24,176,95,0.5);
    --color-icon-like: rgba(224,36,94);
    --color-icon-like-50: rgba(224,36,94,0.5);
    --color-icon-share: rgba(30,148,221);
    --color-icon-share-50: rgba(30,148,221, 0.5);
}

* {
    background-color: #15202B;
    font-family: Arial, Helvetica, sans-serif;
    color: #ffffff;
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

a {
    color: rgb(29, 161, 242);
    text-decoration: none;
}

.textGrey {
    color: var(--primary-color-grey);
}

.container {
    border: solid var(--primary-color-grey) 1px;
    border-color: transparent transparent var(--primary-color-grey) transparent;
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-template-rows: repeat(12, 1fr);
    width: 650px;
    height: 400px;
}

    .container * {
        background-color: transparent;
    }

.twitt-body {
    grid-column: 1/13;
    grid-row: 1/11;
    display: grid;
    grid-template-columns: 75px 1fr;
}

.twitt-icons {
    grid-column: 1/13;
    grid-row: 12/13;
    justify-content: space-evenly;
    display: flex;
    flex-direction: row;
}

img, svg {
    max-width: 100%;
    max-height: auto;
}

body {
    width: 100vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.icon {
    width: 70px;
    display: flex;
    justify-content: center;
    align-items: center;
}

    .icon svg {
        width: 50%;
        padding: 5px;
        margin-right: 5px;
        fill: var(--primary-color-grey);
    }

    .icon span {
        font-size: small;
        color: var(--primary-color-grey);
    }

.twit-avatar > img {
    border-radius: 50%;
    margin: 10px;
    width: 75%;
}

.twitt-body p {
    padding: 10px 0px
}

.twitt-body img {
    border-radius: 30px;
}

.twitt-content img {
    border-radius: 30px;
    border-style: solid;
    border-width: 1px;
    border-color: var(--primary-color-grey);
    width: 85%;
}

.container:hover {
    cursor: pointer;
    background-color: var(--primary-color-grey-50);
    border-radius: 10px;
    transition-duration: 0.2s;
}

/*
    n (numero de elementos)
    (example: 1) (formula para "cachar" numero de elementos)
    :hover (estilo/efecto que le vamos a dar)
    svg (elemento al que vamos a afectar)

*/

.twitt-icons .icon:nth-child(1):hover svg {
    border-radius: 50%;
    background-color: var(--color-icon-comentario-50);
    fill: var(--color-icon-comentario);
    transition-duration: 0.5s;
}

.twitt-icons .icon:nth-child(1):hover span {
    color: var(--color-icon-comentario);
}

.twitt-icons .icon:nth-child(1):hover span,
.twitt-icons .icon:nth-child(1):hover svg {
    transition-duration: 0.5s;
}

.twitt-icons .icon:nth-child(2):hover svg {
    border-radius: 50%;
    background-color: var(--color-icon-retwit-50);
    fill: var(--color-icon-retwit);
    transition-duration: 0.5s;
}

.twitt-icons .icon:nth-child(2):hover span {
    color: var(--color-icon-retwit);
}

.twitt-icons .icon:nth-child(2):hover span,
.twitt-icons .icon:nth-child(2):hover svg {
    transition-duration: 0.5s;
}

.twitt-icons .icon:nth-child(3):hover svg {
    border-radius: 50%;
    background-color: var(--color-icon-like-50);
    fill: var(--color-icon-like);
    transition-duration: 0.5s;
}

.twitt-icons .icon:nth-child(3):hover span {
    color: var(--color-icon-like);
}

.twitt-icons .icon:nth-child(3):hover span,
.twitt-icons .icon:nth-child(3):hover svg {
    transition-duration: 0.5s;
}

.twitt-icons .icon:nth-child(4):hover svg {
    border-radius: 50%;
    background-color: var(--color-icon-share-50);
    fill: var(--color-icon-share);
    transition-duration: 0.5s;
}

.twitt-icons .icon:nth-child(4):hover span {
    color: var(--color-icon-share);
}

.twitt-icons .icon:nth-child(4):hover span,
.twitt-icons .icon:nth-child(4):hover svg {
    transition-duration: 0.5s;
}

```


## Result

[RESULTADO](https://github.com/UP210752/Programacion-Web-210752/blob/main/Twitter/result.JPG)
