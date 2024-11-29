<?php

class MainController
{
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
        $this->render('socode');
    }

    // Page "SoManage"
    public function somanage()
    {
        $this->render('somanage');
    }

    // Page "SoDraw"
    public function sodraw()
    {
        $this->render('sodraw');
    }

    // Page "SoNote"
    public function sonote()
    {
        $this->render('sonote');
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
