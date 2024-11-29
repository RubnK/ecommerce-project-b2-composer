<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="/css/utils.css">
    <?php if ($_SERVER['REQUEST_URI'] == '/'){ ?>
    <link rel="stylesheet" href="/css/home.css">
    <?php } elseif ($_SERVER['REQUEST_URI'] == '/catalogue'){ ?>
    <link rel="stylesheet" href="/css/catalogue.css">
    <?php } elseif ($_SERVER['REQUEST_URI'] == '/panier'){ ?>
    <link rel="stylesheet" href="/css/panier.css">
    <?php } elseif ($_SERVER['REQUEST_URI'] == '/login' || $_SERVER['REQUEST_URI'] == '/register'){ ?>
    <link rel="stylesheet" href="/css/logpage.css">
    <?php } elseif ($_SERVER['REQUEST_URI'] == '/catalogue/SoCode' || $_SERVER['REQUEST_URI'] == '/catalogue/SoManage' || $_SERVER['REQUEST_URI'] == '/catalogue/SoDraw' || $_SERVER['REQUEST_URI'] == '/catalogue/SoNote'){ ?>
    <link rel="stylesheet" href="/css/produit.css">
    <?php } ?>

</head>
<body>
    <nav>
      <div class="nav">
        <a href="/" class="logo">SoTech</a>
        <div class="links">
            <ul>
                <li><a href="/"> Accueil</a></li>
                <li><a href="/catalogue">Catalogue</a></li>
            </ul>
        </div>
        <div class="icons">
          <ul>
            <li><a href="/panier"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M221-120q-27 0-48-16.5T144-179L42-549q-5-19 6.5-35T80-600h190l176-262q5-8 14-13t19-5q10 0 19 5t14 13l176 262h192q20 0 31.5 16t6.5 35L816-179q-8 26-29 42.5T739-120H221Zm-1-80h520l88-320H132l88 320Zm260-80q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM367-600h225L479-768 367-600Zm113 240Z"/></svg></a></li>
            <li><a href="/login"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/></svg></a></li>
          </ul>
        </div>
      </div>
    </nav>
