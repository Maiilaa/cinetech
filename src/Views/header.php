<?php

class Navbar
{
    public function render()
    {
        ob_start();
        ?>
        <link rel="stylesheet" href="../../public/header.css">
        <header class="header">
            <h1>Cinétech</h1>
            <nav>
                <ul class="nav">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Films</a></li>
                    <li><a href="#">Séries</a></li>
                </ul>
            </nav>
            <svg class="user-icon" role="img" aria-hidden="true" focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" height="24" width="24">
                <path fill-rule="evenodd" d="M16.75 6.25a4.75 4.75 0 1 1-9.5 0 4.75 4.75 0 0 1 9.5 0Zm-1.5 0a3.25 3.25 0 1 1-6.5 0 3.25 3.25 0 0 1 6.5 0Z M12 12.5c-2.397 0-4.827.238-6.684.991-.935.38-1.767.907-2.367 1.64-.611.746-.949 1.665-.949 2.752V20h1.5v-2.117c0-.753.226-1.334.61-1.802.393-.48.986-.881 1.77-1.2C7.464 14.238 9.66 14 12 14c2.348 0 4.542.214 6.124.845.783.312 1.373.71 1.765 1.192.382.47.61 1.063.61 1.847L20.5 20H22v-2.116c0-1.107-.335-2.04-.947-2.793-.602-.74-1.436-1.266-2.374-1.64-1.858-.74-4.29-.951-6.679-.951Z"></path>
            </svg>
        </header>
        <?php
        return ob_get_clean();
    }
}


$navbar = new Navbar();
echo $navbar->render();
?>