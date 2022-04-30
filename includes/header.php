<?php 
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case '/web-folio.html':
        $title = "E. Brink's Web Development Portfolio";
    break;

    case '/photography.html':
        $title = "E. Brink's Photography Portfolio";
    break;

    case '/misc-media.html':
        $title = "E. Brink's Miscellaneous Mixed Media";
        break;
    
    case '/writing/':
        $title = "E. Brink Likes to Write";
        break;

    case '/links.html':
        $title = "E. Brink Recommends Rabbit Holes";

        break;


    default:
        $title = THIS_PAGE;
}

$nav['/web-folio.html'] = 'web portfolio';
$nav['/photography.html'] = 'photo portfolio';
$nav['/misc-media.html'] = 'misc media';
$nav['/writing/'] = 'writings about';
$nav['/links.html'] = 'links of interest';
?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
<link rel="stylesheet" href="../css/other.css" />
</head>
<body>
    <div class="grid-container">
    <header>
        <h2><a href="/index.html">E. Brink</a></h2>
    </header>
    <div class="bbbble"><p>Hi! My last name is Brink and my first initial is E. I'm here to help you enjoy the internet. The Internet. The internet. The internet. <span class="color">Hi!</span> My last name is Brink and my first initial is E. I'm<span class="color"> here to help</span> you enjoy the internet. The Internet. The internet. The internet. Hi! My last <span class="color">name is Brink</span> and my first initial is E. I'm here to help you enjoy the internet. The Internet. The internet. The internet. Hi! My last name is Brink and my first initial is E. <span class="color">I'm here to help</span> you enjoy the internet. The Internet. <span class="color">The internet.</span>  The internet. Hi! My last name is Brink and my first initial is E. I'm here to help you enjoy the internet. The Internet. The internet. The internet. Hi! My last name is Brink and my first initial is E. I'm here to help you enjoy the internet. The Internet. The internet. The internet. Hi! My last name is Brink and my first initial is E. I'm here to help you enjoy the internet. The <span class="color">Internet. The internet. The internet. Hi! My last name is Brink and my first initial is E. I'm here to help you enjoy the internet. The Internet. The internet. The internet. Hi! My last name is Brink and my first initial is E. I'm here to help you enjoy the internet. The Internet. The internet. The internet. Hi! My last name is Brink and my first initial is E. I'm here to help you enjoy the internet. The Internet. The internet. The i</span></p></div>
    <div class="lilbble"> <p>nav  nav nav nav nav nav nav nav nav nav nav nav nav nav nav nav nav &darr;&darr;&darr;&darr;&darr; &darr; &darr; &darr; &darr; &darr;nav nav nav nav nav nav nav nav nav nav &darr;&darr;&darr;&darr;&darr; &darr; &darr; &darr; &darr; &darr;nav nav nav nav nav nav nav nav nav nav &darr;&darr;&darr;&darr;&darr; &darr; &darr; &darr; &darr; &darr;</p>  </div>
    <nav>
            <ul>
            <?php
            foreach($nav as $key => $value) {
            if(THIS_PAGE == $key) {
                echo '
                <li><a class="current" href="'.$key.'">'.$value.'</a></li>';
            } else {
            echo '<li><a href="'.$key.'">'.$value.'</a></li>';
            }
        }
            ?>
            </ul>
        </nav>