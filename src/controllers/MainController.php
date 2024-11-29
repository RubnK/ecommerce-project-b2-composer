<?php

class MainController
{

    public function getAllProducts(){
        $produits = array(
            'SoCode' => array(
                "name" => "SoCode",
                "price" => "9,99€",
                "description" => "SoCode est un éditeur de code extensible. Les fonctionnalités incluent la prise en charge du débogage, la mise en évidence de la syntaxe, la complétion intelligente du code, les snippets et la refactorisation du code."
            ),
            'SoManage' => array(
                "name" => "SoManage",
                "price" => "14,99€",
                "description" => "SoManage est un outil de gestion inspiré de la méthode Kanban de Toyota. Il repose sur une organisation des projets en planches listant des cartes, chacune représentant des tâches."
            ),
            'SoDraw' => array(
                "name" => "SoDraw",
                "price" => "19,99€",
                "description" => "SoDraw est votre studio de création tout-en-un. Retouchez vos photos, créez des illustrations et concevez des graphismes professionnels. Son interface intuitive vous permet de réaliser des visuels percutants en quelques clics."
            ),
            'SoNote' => array(
                "name" => "SoNote",
                "price" => "9,99€",
                "description" => "SoNote est un éditeur de texte. Il permet de prendre des notes, de faire de la mise en page et d'écrire automatiquement ce qui est dicté. Il est muni d'un système de sauvegarde automatique afin que vous ne perdiez plus votre travail."
            )
        );
        return $produits;
    }
    // Page d'accueil
    public function home()
    {
        $this->render('home');
    }

    // Page "Catalogue"
    public function catalogue()
    {
        $this->render('catalogue');
    }

    // Page "Panier"
    public function panier()
    {
        $this->render('panier');
    }

    // Page "login"
    public function login()
    {
        $this->render('login');
    }

    // Page "Register"
    public function register()
    {
        $this->render('register');
    }

    // Page "SoCode"
    public function socode()
    {
        global $produit;
        $produit = "SoCode";
        $this->render('produit');
    }

    // Page "SoManage"
    public function somanage()
    {
        global $produit;
        $produit = "SoManage";
        $this->render('produit');
    }

    // Page "SoDraw"
    public function sodraw()
    {
        global $produit;
        $produit = "SoDraw";
        $this->render('produit');
    }

    // Page "SoNote"
    public function sonote()
    {
        global $produit;
        $produit = "SoNote";
        $this->render('produit');
    }

    // Page 404
    public function notFound()
    {
        http_response_code(404);
        echo "404 - Page Not Found!";
    }

    // Méthode pour inclure une vue
    private function render($view, $data = [])
    {
        if ($view == 'produit' || $view == 'catalogue') {
            global $produit;
            global $produits;
            $produits = $this->getAllProducts();
        }
        // Transmet les données aux vues
        extract($data);

        // Inclut la vue demandée
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($viewFile)) {
            require_once __DIR__ . '/../views/partials/header.php';
            require_once $viewFile;
            require_once __DIR__ . '/../views/partials/footer.php';
        } else {
            echo "View not found: $view";
        }
    }

}
